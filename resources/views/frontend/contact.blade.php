@extends('frontend.layout.master')
 
@section('content')
<!--============================== Main Start ==============================-->
<main id="main">
       
   <!--============================== Content Start ==============================--> 
   <div class="banner_container">
       <div class="container"> 
           <div class="row align-items-center" data-aos="fade-in" data-aos-duration="900">
               <div class="col-md-12">
                   <h1>Contact Us</h1>
               </div> 
           </div>
           <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Contact us</li>
           </ol>
       </div>
       <div class="banner_bg">
           <img src="include/images/hero-banner-img1.jpg" alt="">
       </div>
   </div>
   <!--============================== Content End ==============================-->
       <!--============================== Content Start ==============================-->
       <div class="content-container grey-bg">
           <div class="container">
               <div class="row os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
                   <div class="col-lg-10 offset-lg-1">
                       <div class="contact-inner-box">
                           <h5>GET IN TOUCH</h5>
                           <p>Feel Free to contact us any time. We will get back to you as soon as we can!.</p>
                           @if(session('success'))
                           <div class="alert alert-success">{{ session('success') }}</div>
                       @endif
                       
                       @if($errors->any())
                           <div class="alert alert-danger">
                               <ul>
                                   @foreach($errors->all() as $error)
                                       <li>{{ $error }}</li>
                                   @endforeach
                               </ul>
                           </div>
                       @endif
                       
                           {{-- <div class="form-group">
                               <input type="text" class="form-control" placeholder="Name">
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Email">
                           </div>
                           <div class="form-group">
                               <textarea name="" id="" class="form-control" placeholder="Message"></textarea>
                           </div>
                           <div class="contact-inner-cta">
                               <button class="btn btn-default btn-block">Submit</button>
                           </div> --}}
                           <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                            </div>
                            <div class="contact-inner-cta">
                                <button type="submit" class="btn btn-default btn-block">Submit</button>
                            </div>
                        </form>
                        
                           <div class="contact-info">
                               <h5>Contact Info</h5>
                               <ul class="contact-info-list">
                                   <li class="contact-info-item">
                                       <span><i class="fas fa-phone-alt"></i></span>
                                       +44 7785 587 032
                                   </li>
                                   <li class="contact-info-item">
                                       <span><i class="fas fa-envelope"></i></span>
                                       info@121Clinic.co.uk
                                   </li>
                                   <li class="contact-info-item">
                                       <span><i class="fas fa-envelope"></i></span>
                                       patientcare@121clinic.co.uk
                                   </li>
                               </ul>
                               <ul class="social-links">
                                       <li class="social-link"><a href="#!" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                       <li class="social-link"><a href="#!" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                       <li class="social-link"><a href="#!" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                       <li class="social-link"><a href="#!" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                       <li class="social-link"><a href="#!" target="_blank"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                   </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!--============================== Content End ==============================-->
       <div class="content-container d-none">
           <div class="container">
               <div class="row os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
                   <div class="col-lg-10 offset-lg-1">
                       <div class="main-heading text-center">
                           <h5>Find Us on Google Map</h5>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis soluta, provident atque corporis aspernatur velit, voluptas vitae facere sunt.</p>
                       </div>
                       <div class="map">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14231.11291603572!2d80.95418295486542!3d26.910532526372066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399957bf11b5b95b%3A0x199f02a3947c510a!2sAdil%20Nagar%2C%20Lucknow%2C%20Uttar%20Pradesh%20226022!5e0!3m2!1sen!2sin!4v1723011197342!5m2!1sen!2sin" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </main>
   <!--============================== Main End ==============================-->


@endsection