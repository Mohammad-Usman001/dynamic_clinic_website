{{-- @extends('frontend.layout.master')

@section('content')


<!--============================== Main Start ==============================-->
<main id="main">
       
   <!--============================== Content Start ==============================--> 
   <div class="banner_container">
       <div class="container"> 
           <div class="row align-items-center" data-aos="fade-in" data-aos-duration="900">
               <div class="col-md-12">
                   <h1>Blog</h1>
               </div> 
           </div>
           <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Blog</li>
           </ol>
       </div>
       <div class="banner_bg">
           <img src="include/images/hero-banner-img1.jpg" alt="">
       </div>
   </div>
   <!--============================== Content End ==============================-->
   
   <!--============================== Content Start ==============================-->
       <div class="content-container">
           <div class="container os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
               <div class="main-heading text-center">
                   <h6><span>Blog Post</span></h6>
                   <h3>Recent articles & blogs</h3>
               </div>
               <div class="blog-list">
                   <div class="blog-item">
                       <div class="blog-box d-flex flex-column">
                           <div class="blog-img">
                               <img src="include/images/blog-img01.jpg" alt="">
                               <div class="post-tag">
                                   <a href="#!">FITNESS</a>
                               </div>
                           </div>
                           <div class="blog-post-desc">
                               <ul class="blog-posted-list">
                                   <li><a href="#!">JULY 01, 2024</a></li>
                                   <li><a href="#!">ADMIN</a></li>
                               </ul>
                               <div class="blog-heading">
                                   <h5><a href="blog-detail.html">Fitness Recipes: Healthy Food for Any Workout</a></h5>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="blog-item">
                       <div class="blog-box d-flex flex-column">
                           <div class="blog-img">
                               <img src="include/images/blog-img01.jpg" alt="">
                               <div class="post-tag">
                                   <a href="#!">Weight Loss</a>
                               </div>
                           </div>
                           <div class="blog-post-desc">
                               <ul class="blog-posted-list">
                                   <li><a href="#!">JULY 01, 2024</a></li>
                                   <li><a href="#!">ADMIN</a></li>
                               </ul>
                               <div class="blog-heading">
                                   <h5><a href="blog-detail.html">Fitness Recipes: Healthy Food for Any Workout</a></h5>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="blog-item">
                       <div class="blog-box d-flex flex-column">
                           <div class="blog-img">
                               <img src="include/images/blog-img01.jpg" alt="">
                               <div class="post-tag">
                                   <a href="#!">Nutrition</a>
                               </div>
                           </div>
                           <div class="blog-post-desc">
                               <ul class="blog-posted-list">
                                   <li><a href="#!">JULY 01, 2024</a></li>
                                   <li><a href="#!">ADMIN</a></li>
                               </ul>
                               <div class="blog-heading">
                                   <h5><a href="blog-detail.html">Fitness Recipes: Healthy Food for Any Workout</a></h5>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   <!--============================== Content End ==============================-->

   </main>
   <!--============================== Main End ==============================-->


@endsection --}}

@extends('frontend.layout.master')

@section('content')

<!--============================== Main Start ==============================-->
<main id="main">
       
   <!--============================== Content Start ==============================--> 
   <div class="banner_container">
       <div class="container"> 
           <div class="row align-items-center" data-aos="fade-in" data-aos-duration="900">
               <div class="col-md-12">
                   <h1>Blog</h1>
               </div> 
           </div>
           <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Blog</li>
           </ol>
       </div>
       <div class="banner_bg">
           <img src="{{ asset('include/images/hero-banner-img1.jpg') }}" alt="">
       </div>
   </div>
   <!--============================== Content End ==============================-->
   
   <!--============================== Content Start ==============================-->
       <div class="content-container">
           <div class="container os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
               <div class="main-heading text-center">
                   <h6><span>Blog Post</span></h6>
                   <h3>Recent Articles & Blogs</h3>
               </div>
               <div class="blog-list">
                   @if($blogs->count())
                       @foreach($blogs as $blog)
                       <div class="blog-item">
                           <div class="blog-box d-flex flex-column">
                               <div class="blog-img">
                                   <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                                   <div class="post-tag">
                                       <a href="#!">{{ $blog->meta_description }}</a>
                                   </div>
                               </div>
                               <div class="blog-post-desc">
                                   <ul class="blog-posted-list">
                                       <li><a href="#!">{{ $blog->created_at->format('F d, Y') }}</a></li>
                                       <li><a href="#!">Admin</a></li>
                                   </ul>
                                   <div class="blog-heading">
                                       <h5><a href="{{ route('frontend.blog-details', $blog->slug) }}">{{ $blog->title }}</a></h5>
                                   </div>
                               </div>
                           </div>
                       </div>
                       @endforeach
                   @else
                       <p class="text-center">No blogs found.</p>
                   @endif
               </div>
           </div>
       </div>
   <!--============================== Content End ==============================-->

</main>
<!--============================== Main End ==============================-->

@endsection
