@extends('frontend.layout.master')

@section('content')

<main id="main">
    <div class="hero-slider _hero_slider os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s pb-0">
        <div class="hero-slide">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="hero-slide-content">
                            <h6><span>121 clinic</span>Eat Healthy food for fat to fit</h6>
                            <h1>A weight-loss program for life.</h1>
                            <div class="hero-cta">
                                <a href="#!" class="btn btn-default">Book Appointment</a>
                                <a href="#!" class="btn btn-default light-cta">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slide-img">
                <img src="include/images/hero-banner-img1.jpg" alt="">
            </div>
        </div>
        <div class="hero-slide">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="hero-slide-content">
                            <h6><span>121 clinic</span>Eat Healthy food for fat to fit</h6>
                            <h1>A weight-loss program for life.</h1>
                            <div class="hero-cta">
                                <a href="#!" class="btn btn-default">Book Appointment</a>
                                <a href="#!" class="btn btn-default light-cta">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slide-img">
                <img src="include/images/hero-banner-img2.jpg" alt="">
            </div>
        </div>
        <div class="hero-slide">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="hero-slide-content">
                            <h6><span>121 clinic</span>Eat Healthy food for fat to fit</h6>
                            <h1>A weight-loss program for life.</h1>
                            <div class="hero-cta">
                                <a href="#!" class="btn btn-default">Book Appointment</a>
                                <a href="#!" class="btn btn-default light-cta">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slide-img">
                <img src="include/images/hero-banner-img1.jpg" alt="">
            </div>
        </div>
    </div>
    <!--============================== Content Start ==============================-->
    <div class="content-container overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.5s">
                    <div class="about-img">
                        <img src="include/images/about-img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.5s">
                    <div class="heading">
                        <h6><span>About us</span></h6>
                        <h3>Workout program made for you.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, libero vel vero
                            quasi beatae voluptatum sit deleniti, id optio quas doloribus ratione earum maxime nobis
                            cum reiciendis aut aliquam sed possimus aperiam magnam iusto velit. Alias exercitationem
                            voluptatem nihil voluptatum ullam nostrum, molestias hic similique qui quia minus
                            aperiam at, consequatur consequuntur, totam, maxime amet quod. Impedit dolorum est autem
                            modi assumenda porro eos expedita totam fuga magnam! Dolorum, quae!</p>
                        <div class="about-sec-bottom-list">
                            <div class="about-sec-bottom-item">
                                <div class="about-sec-bottom-icon">
                                    <img src="include/images/diet.png" alt="">
                                </div>
                                <div class="about-sec-bottom-content">
                                    <h5>Our Values</h5>
                                    <p>Compassion, Patient-focus, Collaboration, Integrity, Caring and Sharing </p>
                                </div>
                            </div>
                            <div class="about-sec-bottom-item">
                                <div class="about-sec-bottom-icon">
                                    <img src="include/images/barbell.png" alt="">
                                </div>
                                <div class="about-sec-bottom-content">
                                    <h5>Our Mission </h5>
                                    <p>To provide and maintained high quality healthcare access for all </p>
                                </div>
                            </div>
                            <div class="about-sec-bottom-item">
                                <div class="about-sec-bottom-icon">
                                    <img src="include/images/barbell.png" alt="">
                                </div>
                                <div class="about-sec-bottom-content">
                                    <h5>Our Aim</h5>
                                    <p>To provide and maintained high quality healthcare access for all </p>
                                </div>
                            </div>
                            <div class="about-sec-bottom-item">
                                <div class="about-sec-bottom-icon">
                                    <img src="include/images/barbell.png" alt="">
                                </div>
                                <div class="about-sec-bottom-content">
                                    <h5>Our Objectives</h5>
                                    <p>To have clinicians and staff qualified and fully trained to deliver online healthcare service to patients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
                    <div class="bmi-calculator-box">
                        <div class="row align-items-center">
                            <div class="col-lg-3 d-flex align-items-center">
                                <div class="bmi-heading">
                                    <h4>BMI Calculator</h4>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="bmi-upper">
                                    <div class="unit d-flex">
                                        <div class="unit-select">
                                            <input type="radio" id="metric" name="unit" value="metric" checked>
                                            <label for="metric" class="custom-radio">Metric</label>
                                        </div>
                                        <div class="unit-select">
                                            <input type="radio" id="imperial" name="unit" value="imperial">
                                            <label for="imperial" class="custom-radio">Imperial</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3" id="metric-inputs">
                            <div class="col-md-3">
                                <div class="bmi-form">
                                    <input type="text" id="age" class="form-control" placeholder="Enter YOUR AGE">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="bmi-form">
                                    <input type="text" id="height" class="form-control" placeholder="Enter YOUR HEIGHT (cm)">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="bmi-form">
                                    <input type="text" id="weight" class="form-control" placeholder="Enter YOUR WEIGHT (kg)">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="bmi-form">
                                    <button id="calculate-bmi" class="btn btn-default white-cta btn-block">CALCULATE</button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3" id="imperial-inputs" style="display: none;">
                            <div class="col-md-3">
                                <div class="bmi-form">
                                    <input type="text" id="age-imperial" class="form-control" placeholder="Enter YOUR AGE">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="bmi-form">
                                    <input type="text" id="height-feet" class="form-control" placeholder="Height (feet)">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="bmi-form">
                                    <input type="text" id="height-inches" class="form-control" placeholder="Height (inches)">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="bmi-form">
                                    <input type="text" id="weight-lbs" class="form-control" placeholder="Weight (lbs)">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="bmi-form">
                                    <button id="calculate-bmi-imperial" class="btn btn-default white-cta btn-block">CALCULATE</button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div id="bmi-result" class="alert alert-info" role="alert" style="display: none;">
                                    <svg id="bmi-svg" width="100%" height="40"></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Content End ==============================-->
    <div class="content-container dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-lg-3 pe-lg-5">
                    <div class="vrt-slider-img-wrapper-outer">
                        <div class="vrt-slider-img-wrapper aos-init aos-animate" data-aos="zoom-in">
                            <div class="vrt-slider-img">
                                <img src="include/images/hero-banner-img3.webp" alt="">
                            </div>
                            <div class="vrt-slider-rounded-wrapper spin">
                                <span class="vrt-slider-rounded logo1">
                                    <img class="spin2" src="include/images/hero-banner-img3.webp" alt="">
                                </span>
                                <span class="vrt-slider-rounded logo2">
                                    <img class="spin2" src="include/images/hero-banner-img3.webp" alt="">
                                </span>
                                <span class="vrt-slider-rounded logo3">
                                    <img class="spin2" src="include/images/hero-banner-img3.webp" alt="">
                                </span>
                                <span class="vrt-slider-rounded logo4">
                                    <img class="spin2" src="include/images/hero-banner-img3.webp" alt="">
                                </span>
                                <span class="vrt-slider-rounded logo5">
                                    <img class="spin2" src="include/images/hero-banner-img3.webp" alt="">
                                </span>
                                <span class="vrt-slider-rounded logo6">
                                    <img class="spin2" src="include/images/hero-banner-img3.webp" alt="">
                                </span>
                                <span class="vrt-slider-rounded logo7">
                                    <img class="spin2" src="include/images/hero-banner-img3.webp" alt="">
                                </span>
                                <span class="vrt-slider-rounded logo8">
                                    <img class="spin2" src="include/images/hero-banner-img3.webp" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Content Start ==============================-->
    <div class="content-container pt-0">
        <div class="container">
            <div class="row os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.7s">
                <div class="col-lg-12">
                    <div class="main-heading text-center">
                        <h6><span>Our Services</span></h6>
                        <h3>Explore What We Offer</h3>
                    </div>
                    <ul class="service-list">
                        <li class="service-item">
                            <div class="service-box">
                                <div class="service-icon">
                                    <img src="include/images/slim.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h5><a href="weight-loss-service.html">Weight Loss</h5></a>
                                    <p>Our weight management programme is designed to help you on your weight loss journey.</p>
                                </div>
                                <div class="service-img">
                                    <img src="include/images/hero-banner-img3.webp" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="service-box">
                                <div class="service-icon">
                                    <img src="include/images/skincare.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h5><a href="#!">Skincare</h5></a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus temporibus
                                        aliquid, similique!</p>
                                </div>
                                <div class="service-img">
                                    <img src="include/images/hero-banner-img3.webp" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="service-box">
                                <div class="service-icon">
                                    <img src="include/images/menopause.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h5><a href="menopause.html">Menopause</h5></a>
                                    <p>Peri-menopause and menopause can be a delimitating medical condition if not managed appropriately.</p>
                                </div>
                                <div class="service-img">
                                    <img src="include/images/hero-banner-img3.webp" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="service-box">
                                <div class="service-icon">
                                    <img src="include/images/erectile-dysfunction.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h5><a href="#!">Erectile Dysfunction</h5></a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus temporibus
                                        aliquid, similique!</p>
                                </div>
                                <div class="service-img">
                                    <img src="include/images/hero-banner-img3.webp" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="service-box">
                                <div class="service-icon">
                                    <img src="include/images/no-smoking.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h5><a href="#!">Stop Smoking</h5></a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus temporibus
                                        aliquid, similique!</p>
                                </div>
                                <div class="service-img">
                                    <img src="include/images/hero-banner-img3.webp" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Content End ==============================-->
    <!--============================== Content Start ==============================-->
    <div class="content-container overflow-hidden">
        <div class="bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.5s">
                        <div class="form-box">
                            <div class="main-heading">
                                <h6><span>Book an Appointment</span></h6>
                                <h3>Need a Nutrition For Your Health?</h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="">Genetic Testing</option>
                                            <option value="">Genetic Testing</option>
                                            <option value="">Genetic Testing</option>
                                            <option value="">Genetic Testing</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-cta">
                                        <button class="btn btn-default">SEND MESSAGE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Content End ==============================-->
    <!--============================== Content Start ==============================-->
    <div class="content-container grey-bg overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.5s">
                    <div class="heading">
                        <h6><span>WHY US</span></h6>
                        <h3>Why chose 121 Clinic?</h3>
                        <p>Qualified, GMC registered doctors with a license to practice; with a wealth of experience
                            in managing
                            menopause and weight gain associated with hormonal imbalance. Personalised care tailor
                            made to your
                            circumstances and your body.</p>
                        <P>Our menopause management programme is designed to help you on your transition into
                            menopause. It
                            is never too late to take control and transform your life. You don’t have to suffer in
                            silence. Reshape your
                            lifestyle and determine your own destiny by taken control. Through the programme we work
                            closely 121
                            with you, to help you modify your lifestyle to achieve your goals and a lifestyle that
                            will result in a happier
                            you.</P>
                    </div>
                </div>
                <div class="col-lg-6 ps-md-5 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.5s">
                    <div class="about-img2">
                        <img src="include/images/hero-banner-img3.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Content End ==============================-->
    <!--============================== Content Start ==============================-->
    <div class="content-container pb-0 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pe-md-5 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.5s">
                    <div class="about-img4">
                        <img src="include/images/img2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.5s">
                    <div class="heading mt-4">
                        <h3>How does it work?</h3>
                        <p>The 121-menopause management programme is based on research and clinical experience
                            accumulated over many years.</p>
                        <ul class="appointment-list">
                            <li class="appointment-item">
                                <div class="appointment-box">
                                    <h5>Book an appointment</h5>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, blanditiis.
                                    </p>
                                </div>
                                <span class="number">1</span>
                            </li>
                            <li class="appointment-item">
                                <div class="appointment-box">
                                    <h5>Medical consultation with a qualified medical doctor</h5>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, blanditiis.
                                    </p>
                                </div>
                                <span class="number">2</span>
                            </li>
                            <li class="appointment-item">
                                <div class="appointment-box">
                                    <h5>Agree on a programme with the doctor</h5>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, blanditiis.
                                    </p>
                                </div>
                                <span class="number">3</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Content End ==============================-->
    <!--============================== Content Start ==============================-->
    <div class="content-container">
        <div class="container">
            <div class="main-heading text-center">
                <h6><span>Testimonial</span></h6>
                <h3>Our Happy Clients</h3>
            </div>
            <div class="testimonial-list testimonial__slider pb-0">
                <div class="testimonial-item">
                    <div class="testimonial-box d-flex flex-column">
                        <blockquote>
                            Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Earum sapiente ullam quidem
                            explicabo vero reiciendis fugit tempora pariatur obcaecati dolores.
                        </blockquote>
                        <div class="quote-by">
                            <strong>Jone Doe</strong>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-box d-flex flex-column">
                        <blockquote>
                            Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Earum sapiente ullam quidem
                            explicabo vero reiciendis fugit tempora pariatur obcaecati dolores.
                        </blockquote>
                        <div class="quote-by">
                            <strong>Jone Doe</strong>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-box d-flex flex-column">
                        <blockquote>
                            Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Earum sapiente ullam quidem
                            explicabo vero reiciendis fugit tempora pariatur obcaecati dolores.
                        </blockquote>
                        <div class="quote-by">
                            <strong>Jone Doe</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Content End ==============================-->
    <!--============================== Content Start ==============================-->
    <div class="content-container pt-0">
        <div class="container">
            <div class="main-heading text-center">
                <h6><span>Blog Post</span></h6>
                <h3>Recent articles & blogs</h3>
            </div>
            <div class="blog-list">
                {{-- <div class="blog-item">
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
                                <h5><a href="#!">Fitness Recipes: Healthy Food for Any Workout</a></h5>
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
                                <h5><a href="#!">Fitness Recipes: Healthy Food for Any Workout</a></h5>
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
                                <h5><a href="#!">Fitness Recipes: Healthy Food for Any Workout</a></h5>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
    </div>
    <!--============================== Content End ==============================-->
</main>
<!--============================== Main End ==============================-->
@endsection