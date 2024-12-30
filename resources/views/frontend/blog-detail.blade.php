@extends('frontend.layout.master')

@section('content')
    <style>
        ul:not([class])>li:before {
            display: none;
        }
    </style>
    <main id="main">
        <!--============================== Content Start ==============================--> 
   <div class="banner_container">
    <div class="container"> 
        <div class="row align-items-center" data-aos="fade-in" data-aos-duration="900">
            <div class="col-md-12">
                <h1>{{ $blog->title ?? 'NA' }}</h1>
            </div> 
        </div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $blog->title ?? 'NA' }}</li>
        </ol>
    </div>
    <div class="banner_bg">
        <img src="{{ asset('include/images/hero-banner-img1.jpg') }}" alt="">
    </div>
</div>
<!--============================== Content End ==============================-->
        <section class="blog-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <article class="blog-post">
                            {{-- <h1>{{ $blog->title ?? 'NA' }}</h1> --}}
                            <br><br>
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                                style="width: 750px; height: 400px;">
                            <br><br>
                            <p>{{ $blog->meta_description }}</p>
                            <div class="content">
                                {!! $blog->content !!}
                            </div>
                        </article>
                        <br><br>
                    </div>
                    <div class="col-md-4">
                        <aside class="sidebar">
                            <br><br>
                            <h3>Recent Blogs</h3>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                @foreach ($recentBlogs as $recentBlog)
                                    <li style="display: flex; align-items: flex-start; margin-bottom: 15px;">
                                        <!-- Blog Image -->
                                        <img src="{{ asset('storage/' . $recentBlog->image) }}"
                                            alt="{{ $recentBlog->title }}"
                                            style="width: 150px; height: 100px; margin-right: 10px; object-fit: cover;">

                                        <!-- Blog Title and Date -->
                                        <div>
                                            <a href="{{ route('frontend.blog-details', $recentBlog->slug) }}"
                                                style="font-size: 16px; font-weight: bold; text-decoration: none;">
                                                {{ $recentBlog->title }}
                                            </a>
                                            <p style="margin: 5px 0 0; font-size: 14px; color: #555;">
                                                {{ $recentBlog->created_at->format('F d, Y') }}
                                            </p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>


                        </aside>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
