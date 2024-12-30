@extends('frontend.layout.master')

@section('content')
 
 
 <!--============================== Main Start ==============================-->
 <main id="main">
        
    <!--============================== Content Start ==============================--> 
    <div class="banner_container">
        <div class="container"> 
            <div class="row align-items-center" data-aos="fade-in" data-aos-duration="900">
                <div class="col-md-12">
                    <h1>About Us</h1>
                </div> 
            </div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About us</li>
            </ol>
        </div>
        <div class="banner_bg">
            <img src="include/images/hero-banner-img1.jpg" alt="">
        </div>
    </div>
    <!--============================== Content End ==============================-->
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, libero vel vero quasi beatae voluptatum sit deleniti, id optio quas doloribus ratione earum maxime nobis cum reiciendis aut aliquam sed possimus aperiam magnam iusto velit. Alias exercitationem voluptatem nihil voluptatum ullam nostrum, molestias hic similique qui quia minus aperiam at, consequatur consequuntur, totam, maxime amet quod. Impedit dolorum est autem modi assumenda porro eos expedita totam fuga magnam! Dolorum, quae!</p>
                            <div class="about-sec-bottom-list">
                                <div class="about-sec-bottom-item">
                                    <div class="about-sec-bottom-icon">
                                        <img src="include/images/diet.png" alt="">
                                    </div>
                                    <div class="about-sec-bottom-content">
                                        <h5>Nutrition Plans</h5>
                                        <p>Morbi porta dolor quis sem ultricies max imus Nunc accumsan.</p>
                                    </div>
                                </div>
                                <div class="about-sec-bottom-item">
                                    <div class="about-sec-bottom-icon">
                                        <img src="include/images/barbell.png" alt="">
                                    </div>
                                    <div class="about-sec-bottom-content">
                                        <h5>EXCERCISE DAILY</h5>
                                        <p>Morbi porta dolor quis sem ultricies max imus Nunc accumsan.</p>
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
                            <p>Qualified, GMC registered doctors with a license to practice; with a wealth of experience in managing
                                menopause and weight gain associated with hormonal imbalance. Personalised care tailor made to your
                                circumstances and your body.</p>
                            <P>Our menopause management programme is designed to help you on your transition into menopause. It
                                is never too late to take control and transform your life. You don’t have to suffer in silence. Reshape your
                                lifestyle and determine your own destiny by taken control. Through the programme we work closely 121
                                with you, to help you modify your lifestyle to achieve your goals and a lifestyle that will result in a happier
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
    </main>
    <!--============================== Main End ==============================-->

@endsection