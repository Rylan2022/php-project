<?php require_once 'common/navbar.php';?>

        <!-- Start Responsive Navbar Area -->
        <div class="responsive-navbar offcanvas offcanvas-end border-0" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
            <div class="offcanvas-header">
                <a href="index.php" class="logo d-inline-block">
                    <img src="assets/img/white-logo.png" alt="logo">
                </a>
                <button type="button" class="close-btn bg-transparent position-relative lh-1 p-0 border-0" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ri-close-fill"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <ul class="responsive-menu">

                    <li class="responsive-menu-list"><a href="javascript:void(0);">Home</a>
                        <ul class="responsive-menu-items">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">
                                    Home Demo - One
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index-2.php" class="nav-link">
                                    Home Demo - Two
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index-3.php" class="nav-link">
                                    Home Demo - Three
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="responsive-menu-list active"><a href="javascript:void(0);">Pages</a>
                        <ul class="responsive-menu-items">
                            <li class="nav-item">
                                <a href="university-overview.php" class="nav-link">
                                    University Overview
                                </a>
                            </li>
                            <li class="responsive-menu-list active"><a href="javascript:void(0);">Blog</a> 
                                <ul class="responsive-menu-items">
                                    <li class="nav-item">
                                        <a href="blog-style-one.php" class="nav-link">
                                            Blog & News 01
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-style-two.php" class="nav-link">
                                            Blog & News 02
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-details.php" class="nav-link">
                                            Blog Details
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="register.php" class="nav-link">
                                    Register Now
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="login.php" class="nav-link">
                                    Log In Now
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="application.php" class="nav-link">
                                    Admission Form
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="faculty.php" class="nav-link">
                                    Faculty
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="privacy-policy.php" class="nav-link">
                                    Privacy Policy
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="terms-conditions.php" class="nav-link">
                                    Terms & Conditions
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="responsive-menu-list"><a href="javascript:void(0);">Admissions</a>
                        <ul class="responsive-menu-items">
                            <li class="nav-item">
                                <a href="apply.php" class="nav-link">
                                    How To Apply
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="tuition-fees.php" class="nav-link">
                                    Tuition & Fees
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="responsive-menu-list"><a href="javascript:void(0);">Academics</a>
                        <ul class="responsive-menu-items">
                            <li class="nav-item ">
                                <a href="programs.php" class="nav-link">
                                    All Programs
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="program-details.php" class="nav-link">
                                    Program Details
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="events.php" class="nav-link">
                                    All Events
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="event-details.php" class="nav-link">
                                    Event Details
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="responsive-menu-list"><a href="javascript:void(0);">Health Care</a>
                        <ul class="responsive-menu-items">
                            <li class="nav-item ">
                                <a href="fitness-athletics.php" class="nav-link">
                                    Fitness & Athletics
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="responsive-menu-list"><a href="javascript:void(0);">Student Life</a>
                        <ul class="responsive-menu-items">
                            <li class="nav-item ">
                                <a href="university-life.php" class="nav-link">
                                    University Life
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="responsive-menu-list without-icon">
                        <a href="contact.php" class="nav-link">
                            Contact <span>Us</span>
                        </a>
                    </li>
                </ul>

                <div class="others-option d-md-flex align-items-center">
                    <div class="option-item">
                        <a class="text-decoration-none default-btn" href="application.php">
                            Admission Form
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End Responsive Navbar Area -->

        <!-- Start Pages Banner Area -->
        <div class="pages-banner-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="pages-title">
                            <h2>Blog & News</h2>
                            <ul class="list-unstyled ps-0 mb-0">
                                <li class="d-inline-block">
                                    <a class="text-decoration-none" href="index.php">
                                        Home
                                    </a>
                                </li>
                                <li class="d-inline-block">
                                    Blog & News
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pages-image">
                            <img src="assets/img/pages/pages-2.jpg" alt="pages-image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-7">
                <img src="assets/img/shape/shape-7.png" alt="shape">
            </div>
        </div>
        <!-- End Pages Banner Area -->

        <!-- Start Blog Pages Area -->
        <div class="blog-pages-area pt-100 pb-75">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-left-sidebar">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-blog-card">
                                        <div class="image">
                                            <a class="text-decoration-none" href="blog-details.php">
                                                <img src="assets/img/blog/blog-1.jpg" alt="blog-image">
                                            </a>
                                            <span>lorem</span>
                                        </div>
                                        <div class="content">
                                            <h3>
                                                <a class="text-decoration-none" href="blog-details.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, quis.</a>
                                            </h3>
                                            <ul class="list-unstyled ps-0 mb-0">
                                                <li class="d-inline-block">
                                                    October 08, 2024
                                                    <i class="ri-calendar-line"></i>
                                                </li>
                                                <li class="d-inline-block">
                                                    <a class="text-decoration-none" href="author.php">Lorem, ipsum.</a>
                                                    <i class="ri-user-line"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-blog-card">
                                        <div class="image">
                                            <a class="text-decoration-none" href="blog-details.php">
                                                <img src="assets/img/blog/blog-2.jpg" alt="blog-image">
                                            </a>
                                            <span>lorem</span>
                                        </div>
                                        <div class="content">
                                            <h3>
                                                <a class="text-decoration-none" href="blog-details.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, et.</a>
                                            </h3>
                                            <ul class="list-unstyled ps-0 mb-0">
                                                <li class="d-inline-block">
                                                    October 08, 2024
                                                    <i class="ri-calendar-line"></i>
                                                </li>
                                                <li class="d-inline-block">
                                                    <a class="text-decoration-none" href="author.php">Lorem, ipsum.</a>
                                                    <i class="ri-user-line"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-blog-card">
                                        <div class="image">
                                            <a class="text-decoration-none" href="blog-details.php">
                                                <img src="assets/img/blog/blog-3.jpg" alt="blog-image">
                                            </a>
                                            <span>Lorem, ipsum.</span>
                                        </div>
                                        <div class="content">
                                            <h3>
                                                <a class="text-decoration-none" href="blog-details.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, quis.</a>
                                            </h3>
                                            <ul class="list-unstyled ps-0 mb-0">
                                                <li class="d-inline-block">
                                                    October 08, 2024
                                                    <i class="ri-calendar-line"></i>
                                                </li>
                                                <li class="d-inline-block">
                                                    <a class="text-decoration-none" href="author.php">Lorem, ipsum.</a>
                                                    <i class="ri-user-line"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-blog-card">
                                        <div class="image">
                                            <a class="text-decoration-none" href="blog-details.php">
                                                <img src="assets/img/blog/blog-8.jpg" alt="blog-image">
                                            </a>
                                            <span>lorem</span>
                                        </div>
                                        <div class="content">
                                            <h3>
                                                <a class="text-decoration-none" href="blog-details.php">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam, ut.</a>
                                            </h3>
                                            <ul class="list-unstyled ps-0 mb-0">
                                                <li class="d-inline-block">
                                                    October 08, 2024
                                                    <i class="ri-calendar-line"></i>
                                                </li>
                                                <li class="d-inline-block">
                                                    <a class="text-decoration-none" href="author.php">Lorem, ipsum.</a>
                                                    <i class="ri-user-line"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-blog-card">
                                        <div class="image">
                                            <a class="text-decoration-none" href="blog-details.php">
                                                <img src="assets/img/blog/blog-9.jpg" alt="blog-image">
                                            </a>
                                            <span>Lorem, ipsum.</span>
                                        </div>
                                        <div class="content">
                                            <h3>
                                                <a class="text-decoration-none" href="blog-details.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, maxime.</a>
                                            </h3>
                                            <ul class="list-unstyled ps-0 mb-0">
                                                <li class="d-inline-block">
                                                    October 08, 2024
                                                    <i class="ri-calendar-line"></i>
                                                </li>
                                                <li class="d-inline-block">
                                                    <a class="text-decoration-none" href="author.php">Lorem, ipsum.</a>
                                                    <i class="ri-user-line"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-blog-card">
                                        <div class="image">
                                            <a class="text-decoration-none" href="blog-details.php">
                                                <img src="assets/img/blog/blog-10.jpg" alt="blog-image">
                                            </a>
                                            <span>lorem</span>
                                        </div>
                                        <div class="content">
                                            <h3>
                                                <a class="text-decoration-none" href="blog-details.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, ipsum.</a>
                                            </h3>
                                            <ul class="list-unstyled ps-0 mb-0">
                                                <li class="d-inline-block">
                                                    October 08, 2024
                                                    <i class="ri-calendar-line"></i>
                                                </li>
                                                <li class="d-inline-block">
                                                    <a class="text-decoration-none" href="author.php">Lorem, ipsum dolor.</a>
                                                    <i class="ri-user-line"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-right-sidebar">
                            <div class="single-pages-widget form">
                                <h3>Search</h3>
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search"> 
                                        <button type="submit"><i class="ri-search-line"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="single-pages-widget latest">
                                <h3>Latest News</h3>
                                <div class="latest-card d-flex align-items-center">
                                    <div class="image">
                                        <a href="blog-details.php">
                                            <img src="assets/img/pages/pages-12.jpg" alt="latest-image">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h3>
                                            <a class="text-decoration-none" href="blog-details.php">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde!
                                            </a>
                                        </h3>
                                        <p class="d-flex align-items-center">
                                            <i class="ri-calendar-line"></i>
                                            October 08, 2024
                                        </p>
                                    </div>
                                </div>
                                <div class="latest-card d-flex align-items-center">
                                    <div class="image">
                                        <a href="blog-details.php">
                                            <img src="assets/img/pages/pages-13.jpg" alt="latest-image">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h3>
                                            <a class="text-decoration-none" href="blog-details.php">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam.
                                            </a>
                                        </h3>
                                        <p class="d-flex align-items-center">
                                            <i class="ri-calendar-line"></i>
                                            October 08, 2024
                                        </p>
                                    </div>
                                </div>
                                <div class="latest-card d-flex align-items-center">
                                    <div class="image">
                                        <a href="blog-details.php">
                                            <img src="assets/img/pages/pages-14.jpg" alt="latest-image">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h3>
                                            <a class="text-decoration-none" href="blog-details.php">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero.
                                            </a>
                                        </h3>
                                        <p class="d-flex align-items-center">
                                            <i class="ri-calendar-line"></i>
                                            October 08, 2024
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="single-pages-widget categories">
                                <!-- categorie.php  -->
                                <h3>Categories</h3>
                                <a class="d-flex align-items-center justify-content-between text-decoration-none" href="#"> 
                                    Education
                                    <span>(07)</span>
                                </a>
                                <a class="d-flex align-items-center justify-content-between text-decoration-none" href="#"> 
                                    Education
                                    <span>(02)</span>
                                </a>
                                <a class="d-flex align-items-center justify-content-between text-decoration-none" href="#"> 
                                    Education
                                    <span>(04)</span>
                                </a>
                                <a class="d-flex align-items-center justify-content-between text-decoration-none" href="#"> 
                                    Education
                                    <span>(06)</span>
                                </a>
                                <a class="d-flex align-items-center justify-content-between text-decoration-none" href="#"> 
                                    Education
                                    <span>(02)</span>
                                </a>
                            </div>
                            <div class="single-pages-widget gallery">
                                <h3>Student’s Gallery</h3>
                                <ul class="list-unstyled ps-0 mb-0">
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none" href="#">
                                            <img src="assets/img/pages/pages-15.jpg" alt="gallery-image">
                                        </a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none" href="#">
                                            <img src="assets/img/pages/pages-16.jpg" alt="gallery-image">
                                        </a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none" href="#">
                                            <img src="assets/img/pages/pages-17.jpg" alt="gallery-image">
                                        </a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none" href="#">
                                            <img src="assets/img/pages/pages-18.jpg" alt="gallery-image">
                                        </a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none" href="#">
                                            <img src="assets/img/pages/pages-19.jpg" alt="gallery-image">
                                        </a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none" href="#">
                                            <img src="assets/img/pages/pages-20.jpg" alt="gallery-image">
                                        </a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none" href="#">
                                            <img src="assets/img/pages/pages-21.jpg" alt="gallery-image">
                                        </a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none" href="#">
                                            <img src="assets/img/pages/pages-22.jpg" alt="gallery-image">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="single-pages-widget tags style-2">
                                <!-- tag.php  -->
                                <h3>Popular Tag’s</h3>
                                <ul class="list-unstyled ps-0 mb-0">
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none d-inline-block" href="#">
                                            Education
                                        </a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none d-inline-block" href="#">
                                            Education
                                        </a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none d-inline-block" href="#">
                                            Education
                                        </a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none d-inline-block" href="#">
                                            Education
                                        </a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none d-inline-block" href="#">
                                            Education
                                        </a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none d-inline-block" href="#">
                                            Education
                                        </a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none d-inline-block" href="#">
                                            Education
                                        </a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none d-inline-block" href="#">
                                            Education
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                        <li class="page-item">
                            <a class="page-link" href="blog-style-two.php" aria-label="Previous">
                                <i class="ri-arrow-left-s-line"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="blog-style-two.php">1</a></li>
                        <li class="page-item"><a class="page-link" href="blog-style-two.php">2</a></li>
                        <li class="page-item"><a class="page-link" href="blog-style-two.php">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="blog-style-two.php" aria-label="Next">
                            <i class="ri-arrow-right-s-line two"></i>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End Blog Pages Area -->

        <!-- Start Newsletter Area -->
        <div class="newsletter-area pb-75">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="newsletter-content">
                            <div class="title">
                                <h2>Are You Ready To Build Up Your Career </h2>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum consequatur, aliquam molestiae asperiores sint ratione dignissimos consequuntur nihil, quod eum, veniam rem velit odio nisi quidem unde beatae maiores tempore ut ea. Ipsum, asperiores ab!</p>
                            </div>
                            <ul class="list-unstyled ps-0 mb-0 subscribe-btn">
                                <li class="d-inline-block">
                                    <a class="text-decoration-none default-btn" href="application.php">
                                        Admission Form
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </li>
                                <li class="d-inline-block">
                                    <a class="text-decoration-none arrow-btn" href="apply.php">
                                        How To Apply
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="newsletter-form">
                            <div class="title">
                                <h3>Subscribe To Our Newsletter</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto et dolorem ratione labore reprehenderit in sunt culpa. Rerum nulla earum, beatae nesciunt id enim voluptatum aliquid nihil iure officia.</p>
                            </div>
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your email">
                                </div>
                                <button type="submit" class="text-decoration-none border-0 default-btn">
                                    Subscribe Now
                                    <i class="flaticon-right-arrow"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Newsletter Area -->
        <?php require_once 'common/footer.php';?>