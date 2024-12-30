<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }
    public function bulkDelete(Request $request)
    {
        $blogIds = $request->input('selected_blogs');

        if ($blogIds) {
            Blog::whereIn('id', $blogIds)->delete();
            return redirect()->route('blogs.index')->with('success', 'Selected blogs have been deleted.');
        }

        return redirect()->route('blogs.index')->with('error', 'No blogs selected for deletion.');
    }

    // public function show($id)
    // {
    //     // Fetch the blog by ID
    //     $blog = Blog::findOrFail($id); // Use findOrFail to return a 404 if not found

    //     // Return a view with the blog details
    //     return view('blogs.show', compact('blog'));
    // }
    public function create()
    {
        return view('admin.blogs.create');
    }
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'title' => 'required|max:255',
        //     'slug' => 'required|max:255',
        //     'meta_description' => 'required|max:255',
        //     'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'content' => 'required',
        // ]);
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug',
            'meta_description' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
        }

        Blog::create([
            'title' => $request->title,
            'meta_description' => $request->meta_description,
            'image' => $imagePath,
            'content' => $request->content,
            'slug' => $request->slug,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'meta_description' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
            $blog->image = $imagePath;
        }

        $blog->title = $request->title;
        $blog->meta_description = $request->meta_description;
        $blog->content = $request->content;
        $blog->slug = $request->slug;

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }

   
    // public function blogs()
    // {
    //     $blogs = Blog::all(); // Fetch blogs with pagination
    //     dd($blogs);
    //     return view('frontend.blogs.index', compact('blogs'));
    // }
}
