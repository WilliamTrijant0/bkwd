<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="{{ asset('assets\landing\googlefont.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/landing/images/logo/logo2.png')}}">
    <!-- Other css -->
    <link rel="stylesheet" href="{{ asset('assets/landing/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/hc-offcanvas-nav.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/style.css')}}">

    <title>Poliklinik</title>
</head>

<body>
    <!-- preloader start here -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- preloader ending here -->


    <!-- ========== Mobile-nav section start here ========== -->
    <div class="mobile-menu">
        <div class="container">
            <div class="mobile-menu-wrapper">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('assets/landing/images/logo/logo.png')}}" alt="Mukti">
                    </a>
                </div>
                <div class="open-menu"><i class="icofont-navigation-menu"></i></div>
            </div>
            <nav id="mobile-nav">
                <ul class="home-nav">
                    <li class="home">
                        <a href="/">Home</a>
                    </li>
                </ul>
                <ul class="depart-nav">
                    <li class="depart">
                        <a href="/">Department</a>
                    </li>
                </ul>
                <ul class="doctor-nav">
                    <li class="doctor">
                        <a href="doctor.html">Doctors</a>
                    </li>
                </ul>
                <ul class="service-nav">
                    <li class="service">
                        <a href="service.html">Services</a>
                    </li>
                </ul>
                <ul class="shop-nav">
                    <li class="shop">
                        <a href="shop.html">Shop</a>
                    </li>
                </ul>
                <ul class="blog-nav">
                    <li class="blog">
                        <a href="blog.html">Blog</a>
                    </li>
                </ul>
                {{-- <ul class="short-nav">
                    <li class="short">
                        <a href="contact.html">Pages</a>
                    </li>
                </ul> --}}

            </nav>
        </div>
    </div>
    <!-- ========== Mobile-nav section end here ========== -->


    <!-- ============|| Header section end here ||================= -->
    <header class="header-section style-2 d-none d-lg-block">
        <div class="header-bottom">
            <div class="primary-menu">
                <div class="container">
                    <div class="menu-area">
                        <div class="row justify-content-between align-items-center">
                            <div class="header-logo">
                                <a href="index.html" class="logo"><img src="{{ asset('assets/landing/images/logo/logo2.png')}}" alt="logo"></a>
                            </div>
                            <ul class="main-menu d-flex">
                                <li class="active">
                                    <a href="#">Home</a>
                                </li>
                                <li><a href="#">Departments</a></li>
                                <li><a href="#">Doctors</a>
                                </li>
                                <li><a href="#">Services</a>
                                </li>
                                <li><a href="#">Shop</a>
                                </li>
                                <li><a href="#">Blog</a>
                                </li>
                                {{-- <li><a href="#">Pages</a>
                                </li> --}}
                            </ul>
                            <ul class="nav-widget d-flex justify-content-between align-items-center">
                                <li class="nav-search">
                                    <form class="search-form">
                                        <input type="text" name="search" placeholder="Enter your search">
                                    </form>
                                    <span class="search"><i class="icofont-search-1"></i></span>
                                </li>
                                {{-- <li class="buy-cart ml-3">
                                    <i class="icofont-bag"></i>
                                    <span>2</span>
                                    <div class="cart-content">
                                        <div class="cart-item">
                                            <div class="cart-img">
                                                <a href="#"><img src="{{ asset('assets/landing/images/buycart/1.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="cart-des">
                                                <a href="#">Product Title Hore</a>
                                                <p>$20.00</p>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="#"><i class="icofont-close-line"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart-item">
                                            <div class="cart-img">
                                                <a href="#"><img src="{{ asset('assets/landing/images/buycart/2.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="cart-des">
                                                <a href="#">Product Title Hore</a>
                                                <p>$20.00</p>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="#"><i class="icofont-close-line"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart-bottom">
                                            <div class="cart-subtotal">
                                                <p>Total: <b class="float-right">$40.00</b></p>
                                            </div>
                                            <div class="cart-action">
                                                <button type="submit" class="button d-btn2">View cart</button>
                                                <button type="submit" class="button d-btn2">Checkout</button>
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}
                            </ul>
                            <a href="{{ route('login')}}" class="lab-btn"><span>Appointments <i class="icofont-double-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ============|| Header section end here ||================= -->


    <!-- ============||banner section start here ||================= -->
    <section class="banner-section style-2" style="background-image: url({{ asset('assets/landing/images/banner/landingpage.jpg')}});">
        <div class="contant-area">
            <div class="container">
                <div class="banner-wrapper">
                    <div class="row px-15">
                        <div class="banner-contant wow fadeInLeft">
                            <h3>Best Medical Clinic</h3>
                            <h2>Bringing Health <span> To Life For The Whole Family...</span>
                            </h2>
                            <a href="{{ route('login')}}" class="lab-btn"><span>Get Appointments <i
                                        class="icofont-double-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============||banner section end here ||================= -->


    <!-- ============||service section start here ||================= -->
    <section class="service-section style-2 bg-color">
        <div class="container">
            <div class="section-wrapper">
                <div class="service-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="service-inner">
                        <div class="service-thumb">
                            <img src="{{ asset('assets/landing/images/service/05.jpg')}}" alt="service">
                            <div class="thumb-icon">
                                <img src="{{ asset('assets/landing/images/service/icon/04.png')}}" alt="">
                                <h4><a href="#">Years of Experience</a></h4>
                            </div>
                        </div>
                        <div class="service-content">
                            <div class="content-icon">
                                <img src="{{ asset('assets/landing/images/service/icon/01.png')}}" alt="">
                            </div>
                            <h4>Contact Information</h4>
                            <p>Poliklinik Dian Nuswantoro</p>
                            <ul class="lab-ul">
                                <li>+62 842 780 623, 02-961936</li>
                                <li>infopoli@dinus.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="service-item wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="service-inner">
                        <div class="service-thumb">
                            <img src="{{ asset('assets/landing/images/service/06.jpg')}}" alt="service">
                            <div class="thumb-icon">
                                <img src="{{ asset('assets/landing/images/service/icon/05.png')}}" alt="">
                                <h4><a href="#">Patients Every Day</a></h4>
                            </div>
                        </div>
                        <div class="service-content">
                            <div class="content-icon">
                                <img src="{{ asset('assets/landing/images/service/icon/02.png')}}" alt="">
                            </div>
                            <h4>24 Hours Ambulance</h4>
                            <p>Prores straen full teste tecrh without funct aplcation</p>
                            <h4>+ 0135 222 127 964</h4>
                            <a href="#" class="lab-btn"><span>Booking Now <i class="icofont-double-right"></i></span>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="service-item wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="service-inner">
                        <div class="service-thumb">
                            <img src="{{ asset('assets/landing/images/service/07.jpg')}}" alt="service">
                            <div class="thumb-icon">
                                <img src="{{ asset('assets/landing/images/service/icon/06.png')}}" alt="">
                                <h4><a href="#">Qualified Doctors</a></h4>
                            </div>
                        </div>
                        <div class="service-content">
                            <div class="content-icon">
                                <img src="{{ asset('assets/landing/images/service/icon/03.png')}}" alt="">
                            </div>
                            <h4>Doctors Timetable</h4>
                            <p>Caborv leverag othen and tha quat bwdh throg cova theme any value coordinate.</p>
                            <a href="#" class="lab-btn"><span>View Timetable<i class="icofont-double-right"></i></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============||service section end here ||================= -->


    {{-- <!-- ============||Department section start here ||================= -->
    <section class="department-section style-2 padding-tb bg-color">
        <div class="container">
            <div class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                <h2><span>We Are The</span></h2>
                <h2>Best Our Departments Center</h2>
            </div>
            <div class="section-wrapper">
                <div class="lab-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="lab-item-inner">
                        <h4>Plastic Surgery</h4>
                        <img src="{{ asset('assets/landing/images/depart/icon/01.png')}}" alt="">
                        <a href="#">Read More <i class="icofont-double-right"></i></a>
                    </div>
                </div>
                <div class="lab-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="lab-item-inner">
                        <h4>Rhinology</h4>
                        <img src="{{ asset('assets/landing/images/depart/icon/02.png')}}" alt="">
                        <a href="#">Read More <i class="icofont-double-right"></i></a>
                    </div>
                </div>
                <div class="lab-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="lab-item-inner">
                        <h4>Urology</h4>
                        <img src="{{ asset('assets/landing/images/depart/icon/03.png')}}" alt="">
                        <a href="#">Read More <i class="icofont-double-right"></i></a>
                    </div>
                </div>
                <div class="lab-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="lab-item-inner">
                        <h4>Gastroenterology</h4>
                        <img src="{{ asset('assets/landing/images/depart/icon/04.png')}}" alt="">
                        <a href="#">Read More <i class="icofont-double-right"></i></a>
                    </div>
                </div>
                <div class="lab-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="lab-item-inner">
                        <h4>Otology</h4>
                        <img src="{{ asset('assets/landing/images/depart/icon/05.png')}}" alt="">
                        <a href="#">Read More <i class="icofont-double-right"></i></a>
                    </div>
                </div>
                <div class="lab-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                    <div class="lab-item-inner">
                        <h4>Pulmonology</h4>
                        <img src="{{ asset('assets/landing/images/depart/icon/06.png')}}" alt="">
                        <a href="#">Read More <i class="icofont-double-right"></i></a>
                    </div>
                </div>
                <div class="lab-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                    <div class="lab-item-inner">
                        <h4>Urology</h4>
                        <img src="{{ asset('assets/landing/images/depart/icon/01.png')}}" alt="">
                        <a href="#">Read More <i class="icofont-double-right"></i></a>
                    </div>
                </div>
                <div class="lab-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                    <div class="lab-item-inner">
                        <h4>Dental Care</h4>
                        <img src="{{ asset('assets/landing/images/depart/icon/02.png')}}" alt="">
                        <a href="#">Read More <i class="icofont-double-right"></i></a>
                    </div>
                </div>
                <div class="lab-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">
                    <div class="lab-item-inner">
                        <h4>Orthopedics</h4>
                        <img src="{{ asset('assets/landing/images/depart/icon/03.png')}}" alt="">
                        <a href="#">Read More <i class="icofont-double-right"></i></a>
                    </div>
                </div>
                <div class="lab-item wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                    <div class="lab-item-inner">
                        <h4>Eye Care</h4>
                        <img src="{{ asset('assets/landing/images/depart/icon/04.png')}}" alt="">
                        <a href="#">Read More <i class="icofont-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============||Department section end here ||================= -->

    <!-- ============||Appointment section start here ||================= -->
    <section class="appointment-section style-1">
        <div class="container">
            <div class="section-wrapper">
                <div class="appointment-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="time-info">
                        <div class="al-title">
                            <h2><span>24 Hours </span></h2>
                            <h2>Opening Our Services</h2>
                        </div>
                        <div class="dep-item">
                            <div class="dep-item-inner">
                                <div class="day-name">Satarday</div>
                                <div class="day-time">8:00 am-10:00 pm</div>
                            </div>
                        </div>
                        <div class="dep-item">
                            <div class="dep-item-inner">
                                <div class="day-name">Sunday</div>
                                <div class="day-time">6:00 am-8:00 pm</div>
                            </div>
                        </div>
                        <div class="dep-item">
                            <div class="dep-item-inner">
                                <div class="day-name">Monday</div>
                                <div class="day-time">6:00 am-2:00 pm</div>
                            </div>
                        </div>
                        <div class="dep-item">
                            <div class="dep-item-inner">
                                <div class="day-name">Tuesday</div>
                                <div class="day-time">7:00 am-9:00 pm</div>
                            </div>
                        </div>
                        <div class="dep-item">
                            <div class="dep-item-inner">
                                <div class="day-name">Widnessday</div>
                                <div class="day-time">10:00 am-12:00 pm</div>
                            </div>
                        </div>
                        <div class="dep-item">
                            <div class="dep-item-inner">
                                <div class="day-name">Thirsday</div>
                                <div class="day-time">2:00 am-6:00 pm</div>
                            </div>
                        </div>
                        <div class="dep-item">
                            <div class="dep-item-inner">
                                <div class="day-name">Friday</div>
                                <div class="day-time">Closed</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="appointment-right wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="ar-title">
                        <h2><span>Make An</span></h2>
                        <h2>Appointment Now</h2>
                    </div>
                    <form action="/">
                        <input type="text" id="fname" name="firstname" placeholder="Your Name">
                        <select id="country" name="country" title="Select Departments">
                            <option value="1">Select Departments</option>
                            <option value="2">Dental</option>
                            <option value="3">U.C</option>
                        </select>
                        <input type="text" id="lname" name="lastname" placeholder="Phone Number">
                        <input type="date" id="start" name="trip-start" value="2021-02-21" min="2021-01-01">
                        <button class="lab-btn" type="submit"><span>Appointment Now <i
                                    class="icofont-double-right"></i></span> </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ============||Appointment section end here ||================= -->


    <!-- ============||Aid section start here ||================= -->
    <section class="aid-section">
        <div class="container">
            <div class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                <h2><span>We Are</span></h2>
                <h2>Offering Reliable Services</h2>
            </div>
            <div class="section-wrapper">
                <div class="aid-slider gallery-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="lab-item">
                                <div class="lab-item-inner">
                                    <div class="lab-thumb">
                                        <img src="{{ asset('assets/landing/images/aid/01.jpg')}}" alt="aid img">
                                    </div>
                                    <div class="lab-content">
                                        <h3>Special Eye Care solutions</h3>
                                        <p>Procedur arrain manu producs rather convenet cuvate mantna this
                                            Manucur produc rather conven cuvatie mantan this conven cuvate
                                            Credibly envisioneer ubiquitous niche markets transparent relations
                                            Manucur produc rather conven cuvatie mantan this conven cuvate
                                            Credibly envisioneer ubiquitous niche markets transparent relations
                                            Dramatically enable worldwide action items whereas magnetic sourc
                                            Testin motin was procedur arramin</p>
                                        <a href="#" class="lab-btn"><span>Appointment Now <i
                                                    class="icofont-double-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="lab-item">
                                <div class="lab-item-inner">
                                    <div class="lab-thumb">
                                        <img src="{{ asset('assets/landing/images/aid/01.jpg')}}" alt="aid img">
                                    </div>
                                    <div class="lab-content">
                                        <h3>Special Eye Care solutions</h3>
                                        <p>Procedur arrain manu producs rather convenet cuvate mantna this
                                            Manucur produc rather conven cuvatie mantan this conven cuvate
                                            Credibly envisioneer ubiquitous niche markets transparent relations
                                            Manucur produc rather conven cuvatie mantan this conven cuvate
                                            Credibly envisioneer ubiquitous niche markets transparent relations
                                            Dramatically enable worldwide action items whereas magnetic sourc
                                            Testin motin was procedur arramin</p>
                                        <a href="#" class="lab-btn"><span>Appointment Now <i
                                                    class="icofont-double-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="lab-item">
                                <div class="lab-item-inner">
                                    <div class="lab-thumb">
                                        <img src="{{ asset('assets/landing/images/aid/01.jpg')}}" alt="aid img">
                                    </div>
                                    <div class="lab-content">
                                        <h3>Special Eye Care solutions</h3>
                                        <p>Procedur arrain manu producs rather convenet cuvate mantna this
                                            Manucur produc rather conven cuvatie mantan this conven cuvate
                                            Credibly envisioneer ubiquitous niche markets transparent relations
                                            Manucur produc rather conven cuvatie mantan this conven cuvate
                                            Credibly envisioneer ubiquitous niche markets transparent relations
                                            Dramatically enable worldwide action items whereas magnetic sourc
                                            Testin motin was procedur arramin</p>
                                        <a href="#" class="lab-btn"><span>Appointment Now <i
                                                    class="icofont-double-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aid-slider gallery-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="lab-item">
                                <p>01. Eye Care</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="lab-item">
                                <p>02. childrens Health</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="lab-item">
                                <p>03. Dental Surgery</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============||Aid section end here ||================= -->


    <!-- ==========Counter Section Start Here========== -->
    <div class="counter-section style-1 padding-60">
        <div class="container">
            <div class="section-wrapper">
                <div class="counter-item wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="counter-item-inner">
                        <div class="counter-thumb">
                            <img src="{{ asset('assets/landing/images/counter/01')}}" alt="counter">
                        </div>
                        <div class="counter-content">
                            <h3 class="number"><span class="counter">500</span></h3>
                            <p class="post-content">Patients Every Day</p>
                        </div>
                    </div>
                </div>
                <div class="counter-item wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="counter-item-inner">
                        <div class="counter-thumb">
                            <img src="{{ asset('assets/landing/images/counter/02')}}" alt="counter">
                        </div>
                        <div class="counter-content">
                            <h3 class="number"><span class="counter">400</span></h3>
                            <p class="post-content">Qualified Doctors</p>
                        </div>
                    </div>
                </div>
                <div class="counter-item wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="counter-item-inner">
                        <div class="counter-thumb">
                            <img src="{{ asset('assets/landing/images/counter/03.png')}}" alt="counter">
                        </div>
                        <div class="counter-content">
                            <h3 class="number"><span class="counter">12</span></h3>
                            <p class="post-content">Years Experience</p>
                        </div>
                    </div>
                </div>
                <div class="counter-item wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="counter-item-inner">
                        <div class="counter-thumb">
                            <img src="{{ asset('assets/landing/images/counter/04.png')}}" alt="counter">
                        </div>
                        <div class="counter-content">
                            <h3 class="number"><span class="counter">350</span></h3>
                            <p class="post-content">Diagnosis Verity</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Counter Section Ends Here========== -->


    <!-- ==========Doctor Section Start Here========== -->
    <section class="doctor-section style-2 padding-tb">
        <div class="container">
            <div class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                <h2><span>Meet Our</span></h2>
                <h2>Mukti Professional Doctors</h2>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="doctor-item style-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <div class="doctor-inner">
                                <div class="doctor-thumb">
                                    <img src="{{ asset('assets/landing/images/team/01.jpg')}}" alt="doctor">
                                </div>
                                <div class="doctor-content">
                                    <div class="doctor-name">
                                        <h4><a href="#">Dr. Jason Kovalsky</a></h4>
                                        <p class="digi">Cardiologist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="doctor-item style-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="doctor-inner">
                                <div class="doctor-thumb">
                                    <img src="{{ asset('assets/landing/images/team/02.jpg')}}" alt="doctor">
                                </div>
                                <div class="doctor-content">
                                    <div class="doctor-name">
                                        <h4><a href="#">Patricia Mcneel</a></h4>
                                        <p class="digi">Pediatrist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="doctor-item style-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="doctor-inner">
                                <div class="doctor-thumb">
                                    <img src="{{ asset('assets/landing/images/team/03.jpg')}}" alt="doctor">
                                </div>
                                <div class="doctor-content">
                                    <div class="doctor-name">
                                        <h4><a href="#">William Khanna</a></h4>
                                        <p class="digi">Throat Specialist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="doctor-item style-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="doctor-inner">
                                <div class="doctor-thumb">
                                    <img src="{{ asset('assets/landing/images/team/04.jpg')}}" alt="doctor">
                                </div>
                                <div class="doctor-content">
                                    <div class="doctor-name">
                                        <h4><a href="#">Eric Patterson</a></h4>
                                        <p class="digi">Therapy</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="doctor-item style-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="doctor-inner">
                                <div class="doctor-thumb">
                                    <img src="{{ asset('assets/landing/images/team/05.jpg')}}" alt="doctor">
                                </div>
                                <div class="doctor-content">
                                    <div class="doctor-name">
                                        <h4><a href="#">Mark Trevor</a></h4>
                                        <p class="digi">Therapy</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="doctor-item style-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="doctor-inner">
                                <div class="doctor-thumb">
                                    <img src="{{ asset('assets/landing/images/team/06.jpg')}}" alt="doctor">
                                </div>
                                <div class="doctor-content">
                                    <div class="doctor-name">
                                        <h4><a href="#">Nolim Smith</a></h4>
                                        <p class="digi">Volunteer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="doctor-item style-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="doctor-inner">
                                <div class="doctor-thumb">
                                    <img src="{{ asset('assets/landing/images/team/07.jpg')}}" alt="doctor">
                                </div>
                                <div class="doctor-content">
                                    <div class="doctor-name">
                                        <h4><a href="#">Jason Kovalsky</a></h4>
                                        <p class="digi">Rehabilitation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="doctor-item style-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="doctor-inner">
                                <div class="doctor-thumb">
                                    <img src="{{ asset('assets/landing/images/team/08.jpg')}}" alt="doctor">
                                </div>
                                <div class="doctor-content">
                                    <div class="doctor-name">
                                        <h4><a href="#">Sarah Milles</a></h4>
                                        <p class="digi">Volunteers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="doctor-btn text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                <a href="#" class="lab-btn"><span> view all doctors <i
                            class="icofont-rounded-double-right"></i></span></a>
            </div>
        </div>
    </section>
    <!-- ==========Doctor Section Ends Here========== --> --}}


    <!-- ==========Testimonial Section Start Here========== -->
    <section class="testimonial-section style-1 padding-tb">
        <div class="container">
            <div class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                <h2><span>Our Testimonials</span></h2>
                <h2>Over 1,000+ People Patients Trust Us</h2>
            </div>
            <div class="section-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                <div class="testi-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="testi-item-inner">
                                    <div class="testi-thumb">
                                        <div class="testi-img">
                                            <img src="{{ asset('assets/landing/images/testimonial/1.png')}}" alt="testimonial">
                                        </div>
                                        <div class="testi-info">
                                            <h5>Robot Smith</h5>
                                            <p>Founder of CEO</p>
                                            <ul class="rating">
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="testi-content">
                                        <p>Caborve levera athern andn that quare
                                            Bwdhn throu covan theme vauesr coor
                                            Dinatie caborve evera atherin and them
                                            Qualt bwdth thron covaen theme value
                                            Coor dinate caborve aneveraer athetern
                                            Bwdh throun covae theme anyin vauer
                                            Throuin covaent theme</p>
                                        <img src="{{ asset('assets/landing/images/testimonial/content/01.png')}}" alt="content">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="testi-item-inner">
                                    <div class="testi-thumb">
                                        <div class="testi-img">
                                            <img src="{{ asset('assets/landing/images/testimonial/2.png')}}" alt="testimonial">
                                        </div>
                                        <div class="testi-info">
                                            <h5>Zinat Zaara</h5>
                                            <p>Founder of CEO</p>
                                            <ul class="rating">
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="testi-content">
                                        <p>Caborve levera athern andn that quare
                                            Bwdhn throu covan theme vauesr coor
                                            Dinatie caborve evera atherin and them
                                            Qualt bwdth thron covaen theme value
                                            Coor dinate caborve aneveraer athetern
                                            Bwdh throun covae theme anyin vauer
                                            Throuin covaent theme</p>
                                        <img src="{{ asset('assets/landing/images/testimonial/content/01.png')}}" alt="content">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="testi-item-inner">
                                    <div class="testi-thumb">
                                        <div class="testi-img">
                                            <img src="{{ asset('assets/landing/images/testimonial/3.png')}}" alt="testimonial">
                                        </div>
                                        <div class="testi-info">
                                            <h5>Jhon Show</h5>
                                            <p>Founder of CEO</p>
                                            <ul class="rating">
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="testi-content">
                                        <p>Caborve levera athern andn that quare
                                            Bwdhn throu covan theme vauesr coor
                                            Dinatie caborve evera atherin and them
                                            Qualt bwdth thron covaen theme value
                                            Coor dinate caborve aneveraer athetern
                                            Bwdh throun covae theme anyin vauer
                                            Throuin covaent theme</p>
                                        <img src="{{ asset('assets/landing/images/testimonial/content/01.png')}}" alt="content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Testimonial Section Ends Here========== -->

    {{-- <!-- ==========Blog Section Start Here========== -->
    <section class="blog-section padding-tb bg-color">
        <div class="container">
            <div class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                <h2><span>News Feed</span></h2>
                <h2>Be The First To New Stories</h2>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="post-item-inner">
                            <div class="post-thumb">
                                <a href="{{ asset('assets/landing/images/blog/1.jpg')}}" data-rel="lightcase:myCollection"><img
                                        src="{{ asset('assets/landing/images/blog/1.jpg')}}" alt="blog post images"></a>
                            </div>
                            <div class="post-content">
                                <span class="meta">By <a href="#">Admin</a> March 24, 2021</span>
                                <h4><a href="#">Globa Empoer Extenve Chanels Extensve Creat Method</a></h4>
                                <p>Complete actuaze centi centrcing colora and sharin without anstaled anding bases
                                    aweme medicalplus Template.</p>
                            </div>
                            <div class="blog-footer">
                                <a href="#" class="viewall">Read More <i class="icofont-double-right"></i></a>
                                <a href="#" class="blog-comment"><i class="icofont-comment"></i> 30</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="post-item-inner">
                            <div class="post-thumb">
                                <a href="{{ asset('assets/landing/images/blog/2.jpg')}}" data-rel="lightcase:myCollection"><img
                                        src="{{ asset('assets/landing/images/blog/2.jpg')}}" alt="blog"></a>
                            </div>
                            <div class="post-content">
                                <span class="meta">By <a href="#">Admin</a> March 24, 2021</span>
                                <h4><a href="#">Globa Empoer Extenve Chanels Extensve Creat Method</a></h4>
                                <p>Complete actuaze centi centrcing colora and sharin without anstaled anding bases
                                    aweme medicalplus Template.</p>
                            </div>
                            <div class="blog-footer">
                                <a href="#" class="viewall">Read More <i class="icofont-double-right"></i></a>
                                <a href="#" class="blog-comment"><i class="icofont-comment"></i> 30</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="post-item-inner">
                            <div class="post-thumb">
                                <a href="{{ asset('assets/landing/images/blog/3.jpg')}}" data-rel="lightcase:myCollection"><img
                                        src="{{ asset('assets/landing/images/blog/3.jpg')}}" alt="blog"></a>
                            </div>
                            <div class="post-content">
                                <span class="meta">By <a href="#">Admin</a> March 24, 2021</span>
                                <h4><a href="#">Globa Empoer Extenve Chanels Extensve Creat Method</a></h4>
                                <p>Complete actuaze centi centrcing colora and sharin without anstaled anding bases
                                    aweme medicalplus Template.</p>
                            </div>
                            <div class="blog-footer">
                                <a href="#" class="viewall">Read More <i class="icofont-double-right"></i></a>
                                <a href="#" class="blog-comment"><i class="icofont-comment"></i> 30</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Blog Section Ends Here========== --> --}}


    <!-- ==========Sponsor Section Start Here========== -->
    <div class="sponsor-section">
        <div class="container">
            <div class="sponsor-area">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="sponsor-thumb">
                            <img src="{{ asset('assets/landing/images/sponsor/1.png')}}" alt="sponso-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-thumb">
                            <img src="{{ asset('assets/landing/images/sponsor/2.png')}}" alt="sponso-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-thumb">
                            <img src="{{ asset('assets/landing/images/sponsor/3.png')}}" alt="sponso-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-thumb">
                            <img src="{{ asset('assets/landing/images/sponsor/4.png')}}" alt="sponso-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-thumb">
                            <img src="{{ asset('assets/landing/images/sponsor/5.png')}}" alt="sponso-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
						<div class="sponsor-thumb">
							<img src="{{ asset('assets/landing/images/sponsor/6.png')}}" alt="sponso-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Sponsor Section Ends Here========== -->

    <!-- ==========Footer  Section Start Here========== -->
    <section class="footer-section style-1 bg-color">
        <div class="container">
            <div class="section-wrapper">
                <div class="footer-top padding-tb parallax-window4">
                    <div class="row">
                        <div class="col-12 col-lg-6 wow fadeInUp order-lg-2" data-wow-duration="1s"
                            data-wow-delay=".2s">
                            <div class="footer-about">
                                <div class="top">
                                    <a href="index.html" class="footer-logo">
                                        <img src="{{ asset('assets/landing/images/logo/logo.png')}}" alt="footer-bottom">
                                    </a>
                                    <p>Proactive predominate empowere portals viaine robust infrastructurs Convenen simp
                                        scalable ntatves rather thanineri manetic action items Proactively predominate
                                        empowered portals robust</p>
                                </div>
                                {{-- <div class="bottom">
                                    <div class="news-title">
                                        <h3>Subscribe Our Newsletter</h3>
                                    </div>
                                    <div class="news-input">
                                        <input type="text" name="email" placeholder="Enter Your Email">
                                        <button class="" type="submit" value="Submit-Now" name="submit">Subscribe
                                            Now</button>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 wow fadeInUp order-lg-1" data-wow-duration="1s"
                            data-wow-delay=".1s">
                            <div class="contact-info">
                                <h3>Contact Info</h3>
                                <p>Rapidiously seize wireless strategic theme areas and corporate testing procedures.
                                    Uniquely</p>
                                <ul>
                                    <li><i class="icofont-home"></i> Suite 02 New Elephant Road usa</li>
                                    <li><i class="icofont-phone"></i> +880 142 258 123, 02-96936</li>
                                    <li><i class="icofont-envelope"></i> <a href="#"> info@mukti.com</a></li>
                                    <li><i class="icofont-globe"></i> <a href="#"> info@mukti.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 wow fadeInUp order-lg-3" data-wow-duration="1s"
                            data-wow-delay=".4s">
                            <div class="time-info">
                                <h3>opening hours</h3>
                                <div class="dep-item">
                                    <div class="dep-item-inner d-flex justify-content-between">
                                        <div class="day-name">Satarday</div>
                                        <div class="day-time">8:00 am-10:00 pm</div>
                                    </div>
                                </div>
                                <div class="dep-item">
                                    <div class="dep-item-inner d-flex justify-content-between">
                                        <div class="day-name">Sunday</div>
                                        <div class="day-time">6:00 am-8:00 pm</div>
                                    </div>
                                </div>
                                <div class="dep-item">
                                    <div class="dep-item-inner d-flex justify-content-between">
                                        <div class="day-name">Monday</div>
                                        <div class="day-time">6:00 am-2:00 pm</div>
                                    </div>
                                </div>
                                <div class="dep-item">
                                    <div class="dep-item-inner d-flex justify-content-between">
                                        <div class="day-name">Tuesday</div>
                                        <div class="day-time">7:00 am-9:00 pm</div>
                                    </div>
                                </div>
                                <div class="dep-item">
                                    <div class="dep-item-inner d-flex justify-content-between">
                                        <div class="day-name">Widnessday</div>
                                        <div class="day-time">10:00 am-12:00 pm</div>
                                    </div>
                                </div>
                                <div class="dep-item">
                                    <div class="dep-item-inner d-flex justify-content-between">
                                        <div class="day-name">Thirsday</div>
                                        <div class="day-time">2:00 am-6:00 pm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="copyright text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <span>Copyright &copy; 2024 <a href="index.html">Poliklinik</a>. All rights reserved. by <a
                                href="https://themeforest.net/user/labartisan">William</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Footer  Section Ends Here========== -->

    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->




    <!-- All Scripts -->
    <script src="{{ asset('assets/landing/js/jquery.js')}}"></script>
    <script src="{{ asset('assets/landing/js/bootstrap.min')}}.js"></script>
    <script src="{{ asset('assets/landing/js/waypoints.min')}}.js"></script>
    <script src="{{ asset('assets/landing/js/swiper.min')}}.js"></script>
    <script src="{{ asset('assets/landing/js/jquery.counterup')}}.min.js"></script>
    <script src="{{ asset('assets/landing/js/wow.min')}}.js"></script>
    <script src="{{ asset('assets/landing/js/circularProgressBar.min')}}.js"></script>
    <script src="{{ asset('assets/landing/js/hc-offcanvas')}}-nav.js"></script>
    <script src="{{ asset('assets/landing/js/functions.js')}}"></script>
</body>

</html>