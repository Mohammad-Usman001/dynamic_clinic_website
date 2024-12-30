@extends('frontend.layout.master')

@section('content')



<!--============================== Main Start ==============================-->
<main id="main">
   <!--============================== Content Start ==============================-->
   <div class="banner_container">
       <div class="container">
           <div class="row align-items-center" data-aos="fade-in" data-aos-duration="900">
               <div class="col-md-12">
                   <h1>Gallery</h1>
               </div>
           </div>
           <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Gallery</li>
           </ol>
       </div>
       <div class="banner_bg">
           <img src="include/images/hero-banner-img1.jpg" alt="">
       </div>
   </div>
   <!--============================== Content End ==============================-->
   <!--============================== Content Start ==============================-->
   <div class="content-container gallery-container">
       <div class="container os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
           <div class="row d-flex">
               <div class="col-12 col-md-3 p-2">
                   <div class="lightbox_img_wrap">
                       <img class="lightbox-enabled" src="include/images/hero-banner-img1.jpg" data-imgsrc="include/images/hero-banner-img1.jpg">
                   </div>
               </div>
               <div class="col-12 col-md-3 p-2">
                   <div class="lightbox_img_wrap">
                       <img class="lightbox-enabled" src="include/images/hero-banner-img1.jpg" data-imgsrc="include/images/hero-banner-img1.jpg">
                   </div>
               </div>
               <div class="col-12 col-md-3 p-2">
                   <div class="lightbox_img_wrap">
                       <img class="lightbox-enabled" src="include/images/hero-banner-img1.jpg" data-imgsrc="include/images/hero-banner-img1.jpg">
                   </div>
               </div>
               <div class="col-12 col-md-3 p-2">
                   <div class="lightbox_img_wrap">
                       <img class="lightbox-enabled" src="include/images/hero-banner-img1.jpg" data-imgsrc="include/images/hero-banner-img1.jpg">
                   </div>
               </div>
               <div class="col-12 col-md-3 p-2">
                   <div class="lightbox_img_wrap">
                       <img class="lightbox-enabled" src="include/images/hero-banner-img1.jpg" data-imgsrc="include/images/hero-banner-img1.jpg">
                   </div>
               </div>
               <div class="col-12 col-md-3 p-2">
                   <div class="lightbox_img_wrap">
                       <img class="lightbox-enabled" src="include/images/hero-banner-img1.jpg" data-imgsrc="include/images/hero-banner-img1.jpg">
                   </div>
               </div>
               <div class="col-12 col-md-3 p-2">
                   <div class="lightbox_img_wrap">
                       <img class="lightbox-enabled" src="include/images/hero-banner-img1.jpg" data-imgsrc="include/images/hero-banner-img1.jpg">
                   </div>
               </div>
               <div class="col-12 col-md-3 p-2">
                   <div class="lightbox_img_wrap">
                       <img class="lightbox-enabled" src="include/images/hero-banner-img1.jpg" data-imgsrc="include/images/hero-banner-img1.jpg">
                   </div>
               </div>
               <div class="col-12 col-md-3 p-2">
                   <div class="lightbox_img_wrap">
                       <img class="lightbox-enabled" src="include/images/hero-banner-img1.jpg" data-imgsrc="include/images/hero-banner-img1.jpg">
                   </div>
               </div>
               <div class="col-12 col-md-3 p-2">
                   <div class="lightbox_img_wrap">
                       <img class="lightbox-enabled" src="include/images/hero-banner-img1.jpg" data-imgsrc="include/images/hero-banner-img1.jpg">
                   </div>
               </div>
           </div>
       </div>
       </div>
       <div class="lightbox-container">
           <span class="material-symbols-outlined material-icons lightbox-btn left" id="left">
               <img src="include/images/left-arrow.png" alt="">
           </span>
           <span class="material-symbols-outlined material-icons lightbox-btn right" id="right">
               <img src="include/images/right-arrow.png" alt="">
           </span>
           <span id="close" class="close material-icons material-symbols-outlined">
               <img src="include/images/close.png" alt="">
           </span>
           <div class="lightbox-image-wrapper">
               <img alt="lightboximage" class="lightbox-image">
           </div>
       </div>
   </div>
   <!--============================== Content End ==============================-->
</main>
<!--============================== Main End ==============================-->

@endsection