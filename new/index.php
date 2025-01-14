
    <?php require_once 'common/navbar.php';?>

<!-- Other page content goes here -->

        <!-- Start Search Modal -->
        <div class="modal fade searchModal" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="position-relative">
                        <input type="text" class="input-search d-block w-100 bg-transparent" placeholder="Search here....">
                        <button type="submit" class="border-0 p-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_12_4315)">
                                    <path d="M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.867 18 18 14.867 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18ZM19.485 18.071L22.314 20.899L20.899 22.314L18.071 19.485L19.485 18.071Z" fill="white"/>
                                </g>
                            </svg>
                        </button>
                    </form>
                    <button type="button" class="btn-close rounded-0 p-0 w-auto h-auto" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- End Search Modal -->
        
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

                    <li class="responsive-menu-list active"><a href="javascript:void(0);">Home</a>
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
                    
                    <li class="responsive-menu-list"><a href="javascript:void(0);">Pages</a>
                        <ul class="responsive-menu-items">
                            <li class="nav-item">
                                <a href="university-overview.php" class="nav-link">
                                    University Overview
                                </a>
                            </li>
                            <li class="responsive-menu-list"><a href="javascript:void(0);">Blog</a> 
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
                                    Application Form
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
                        <form class="search-form">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Search Programs">
                                <button type="submit"><i class="ri-search-line"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End Responsive Navbar Area -->

        <!-- Start Hero Area -->
        <div class="hero-area">
            <div class="container-fluid" data-cues="slideInUp">
                <div class="hero-content">
                    <div class="title">
                        <h1>A World-Classes Education For Your Better life</h1>
                        <p>We are a Top 06 Canadian university and one of the Top 120 in the world. Find out what makes our student experience so rich, meaningful and life-changing.</p>
                    </div>
                    <ul class="list-unstyled ps-0 mb-0 hero-btn">
                        <li class="d-inline-block">
                            <a class="text-decoration-none default-btn" href="university-overview.php">
                                Take A Tour
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a class="text-decoration-none arrow-btn" href="Courses.php">
                                View Our Courses
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="hero-reviews">
                    <p class="everything">“Everything that I learned at Pacific Coach University really helped put me above the competition”.</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="user d-flex align-items-center">
                            <div class="image">
                                <img src="assets/img/hero/hero-1.jpg" alt="hero-user">
                            </div>
                            <div class="content">
                                <h6>John Smith</h6>
                                <span>Pacific Coach’s student</span>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <i class="flaticon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Area -->

        <!-- Start About Area -->
        <div class="overview-area pt-100 pb-75">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="overview-content">
                            <div class="image">
                                <img src="assets/img/overview/overview-1.jpg" alt="overview-image">
                            </div>
                            <div class="row align-items-center" data-cues="slideInUp">
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="graduets-counter">
                                        <h2 class="d-flex align-items-center">
                                            <img src="assets/img/graduets/graduets-5.svg" alt="graduets-svg">
                                            <span class="counter">124</span>
                                            +
                                        </h2>
                                        <p>Our Exclusive Courses</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="graduets-btn text-end">
                                        <a class="text-decoration-none arrow-btn" href="Courses.php">
                                            More Exclusive Courses
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="overview-image">
                            <div class="title">
                                <h2 class="d-flex align-items-center">
                                    <img src="assets/img/pencil-log-2.png" alt="title-shape">
                                    About Pacific Coach
                                </h2>
                                <p>At Pacific Coach, we believe in providing an exceptional educational experienc that prepares students for success in an ever-changing world. As a leading institution of higher learning,</p>
                                <p>we are committed to fostering a vibrant academic community and empowering our students to reach their full potential.</p>
                            </div>
                            <a class="text-decoration-none arrow-btn" href="university-overview.php">
                                Pacific Coach Overview
                                <i class="flaticon-right-arrow"></i>
                            </a>
                            <div class="casual-image">
                                <img src="assets/img/overview/overview-2.jpg" alt="overview-image">
                                <!-- <div class="Pacific Coach">
                                    <img src="assets/img/overview/overview-3.svg" alt="overview-svg">
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->

        <!-- Start Graduets Area -->
        <div class="graduets-area pb-75">
            <div class="container">
                <div class="section-title new-section-title text-center m-auto" data-cues="slideInUp">
                    <h2>Foundation, JEE Mains/Advanced And NEET/AIIMS</h2>
                </div>
                <div class="graduets-tab-info">
                    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">JEE Mains/Advanced</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">NEET/AIIMS</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <div class="graduets-content">
                                        <div class="graduets-card d-flex align-items-center">
                                            <div class="image">
                                                <img src="assets/img/graduets/graduets-1.jpg" alt="graduets-image">
                                            </div>
                                            <div class="content">
                                                <h6>Business Media</h6>
                                                <p>Business media refers to various forms  media, including print, and digital platforms in media.</p>
                                                <a class="text-decoration-none arrow-btn" href="course-details1.php">
                                                    Know More
                                                    <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="graduets-card d-flex align-items-center">
                                            <div class="image">
                                                <img src="assets/img/graduets/graduets-2.jpg" alt="graduets-image">
                                            </div>
                                            <div class="content">
                                                <h6>Major In Economics</h6>
                                                <p>Economics is a social science that studies how individuals, businesses, governments etc...</p>
                                                <a class="text-decoration-none arrow-btn" href="course-details1.php">
                                                    Know More
                                                    <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="graduets-card d-flex align-items-center">
                                            <div class="image">
                                                <img src="assets/img/graduets/graduets-3.jpg" alt="graduets-image">
                                            </div>
                                            <div class="content">
                                                <h6>Biochemistry</h6>
                                                <p>Biochemistry is the branch of science that combine the principles of biology & chemistry.</p>
                                                <a class="text-decoration-none arrow-btn" href="course-details1.php">
                                                    Know More
                                                    <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="graduets-image">
                                        <div class="image">
                                            <img src="assets/img/graduets/graduets-4.jpg" alt="graduets-image">
                                        </div>
                                        <div class="row align-items-center" data-cues="slideInUp">
                                            <div class="col-lg-6 col-sm-6 col-md-6">
                                                <div class="graduets-counter">
                                                    <h2 class="d-flex align-items-center">
                                                        <img src="assets/img/graduets/graduets-5.svg" alt="graduets-svg">
                                                        <span class="counter">124</span>
                                                        +
                                                    </h2>
                                                    <p>Our Exclusive Courses</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6">
                                                <div class="graduets-btn text-end">
                                                    <a class="text-decoration-none arrow-btn" href="Courses.php">
                                                        More Exclusive Courses
                                                        <i class="flaticon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <div class="graduets-content">
                                        <div class="graduets-card d-flex align-items-center">
                                            <div class="image">
                                                <img src="assets/img/graduets/graduets-9.jpg" alt="graduets-image">
                                            </div>
                                            <div class="content">
                                                <h6>Business Media</h6>
                                                <p>Business media refers to various forms  media, including print, and digital platforms in media.</p>
                                                <a class="text-decoration-none arrow-btn" href="course-details1.php">
                                                    Know More
                                                    <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="graduets-card d-flex align-items-center">
                                            <div class="image">
                                                <img src="assets/img/graduets/graduets-8.jpg" alt="graduets-image">
                                            </div>
                                            <div class="content">
                                                <h6>Major In Economics</h6>
                                                <p>Economics is a social science that studies how individuals, businesses, governments etc...</p>
                                                <a class="text-decoration-none arrow-btn" href="course-details1.php">
                                                    Know More
                                                    <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="graduets-card d-flex align-items-center">
                                            <div class="image">
                                                <img src="assets/img/graduets/graduets-10.jpg" alt="graduets-image">
                                            </div>
                                            <div class="content">
                                                <h6>Biochemistry</h6>
                                                <p>Biochemistry is the branch of science that combine the principles of biology & chemistry.</p>
                                                <a class="text-decoration-none arrow-btn" href="course-details1.php">
                                                    Know More
                                                    <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="graduets-image">
                                        <div class="image">
                                            <img src="assets/img/graduets/graduets-6.jpg" alt="graduets-image">
                                        </div>
                                        <div class="row align-items-center" data-cues="slideInUp">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="graduets-counter">
                                                    <h2 class="d-flex align-items-center">
                                                        <img src="assets/img/graduets/graduets-5.svg" alt="graduets-svg">
                                                        <span class="counter">140</span>
                                                        +
                                                    </h2>
                                                    <p>Our graduates programs</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="graduets-btn text-end">
                                                    <a class="text-decoration-none arrow-btn" href="Courses.php">
                                                        More Graduates Programs
                                                        <i class="flaticon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <div class="graduets-content">
                                        <div class="graduets-card d-flex align-items-center">
                                            <div class="image">
                                                <img src="assets/img/graduets/graduets-13.jpg" alt="graduets-image">
                                            </div>
                                            <div class="content">
                                                <h6>Business Media</h6>
                                                <p>Business media refers to various forms  media, including print, and digital platforms in media.</p>
                                                <a class="text-decoration-none arrow-btn" href="course-details1.php">
                                                    Know More
                                                    <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="graduets-card d-flex align-items-center">
                                            <div class="image">
                                                <img src="assets/img/graduets/graduets-11.jpg" alt="graduets-image">
                                            </div>
                                            <div class="content">
                                                <h6>Major In Economics</h6>
                                                <p>Economics is a social science that studies how individuals, businesses, governments etc...</p>
                                                <a class="text-decoration-none arrow-btn" href="course-details1.php">
                                                    Know More
                                                    <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="graduets-card d-flex align-items-center">
                                            <div class="image">
                                                <img src="assets/img/graduets/graduets-12.jpg" alt="graduets-image">
                                            </div>
                                            <div class="content">
                                                <h6>Biochemistry</h6>
                                                <p>Biochemistry is the branch of science that combine the principles of biology & chemistry.</p>
                                                <a class="text-decoration-none arrow-btn" href="course-details1.php">
                                                    Know More
                                                    <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="graduets-image">
                                        <div class="image">
                                            <img src="assets/img/graduets/graduets-7.jpg" alt="graduets-image">
                                        </div>
                                        <div class="row align-items-center" data-cues="slideInUp">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="graduets-counter">
                                                    <h2 class="d-flex align-items-center">
                                                        <img src="assets/img/graduets/graduets-5.svg" alt="graduets-svg">
                                                        <span class="counter">140</span>
                                                        +
                                                    </h2>
                                                    <p>Our graduates programs</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="graduets-btn text-end">
                                                    <a class="text-decoration-none arrow-btn" href="Courses.php">
                                                        More Graduates Programs
                                                        <i class="flaticon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Graduets Area -->

        <!-- Start Funfact Area -->
        <div class="funfact-area pb-75">
            <div class="container">
                <div class="row g-0 justify-content-center" data-cues="slideInUp">
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="single-funfact-info text-center">
                            <h2 class="d-flex align-items-center justify-content-center">
                                <i class="flaticon-mortarboard"></i>
                                <span class="counter">124</span>
                                +
                            </h2>
                            <p>We Have online Programs</p>
                            <a class="text-decoration-none arrow-btn" href="course-details1.php">
                                Know More
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="single-funfact-info text-center">
                            <h2 class="d-flex align-items-center justify-content-center">
                                <i class="flaticon-book"></i>
                                <span class="counter">393</span>
                                +
                            </h2>
                            <p>We have the best Courses</p>
                            <a class="text-decoration-none arrow-btn new-arrow-btn" href="course-details1.php">
                                Know More
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="single-funfact-info text-center">
                            <h2 class="d-flex align-items-center justify-content-center">
                                <i class="flaticon-graduate"></i>
                                <span class="counter">865</span>
                                +
                            </h2>
                            <p>Pacific Coach Has Professional Teacher</p>
                            <a class="text-decoration-none arrow-btn" href="course-details1.php">
                                Know More
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Funfact Area -->

        <!-- Start Apply Area -->
        <div class="apply-area pt-100 pb-75">
            <div class="container">
                <div class="row align-items-center" data-cues="slideInUp">
                    <div class="col-lg-6">
                        <div class="apply-image">
                            <div class="image">
                                <img src="assets/img/apply/apply-1.jpg" alt="apply-image">
                            </div>
                            <div class="user-help d-flex align-items-center">
                                <a class="icon text-decoration-none" href="tel:45993939990">
                                    <i class="ri-phone-line"></i>
                                </a>
                                <div class="content">
                                    <span>For Help</span>
                                    <a class="text-decoration-none d-block" href="tel:45993939990">
                                        +459 9393 9990
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="apply-content">
                            <div class="title">
                                <h2>How To Apply At Pacific Coach</h2>
                            </div>
                            <div class="apply-content-card d-flex">
                                <div class="icon">
                                    <i class="flaticon-writing"></i>
                                </div>
                                <div class="content">
                                    <h3>
                                        <span>01.</span>
                                        Complete Admission Form
                                    </h3>
                                    <p>Furthermore, our university campus provides a vibrant & supportive community that embraces diversity and fosters inclusivity.</p>
                                </div>
                            </div>
                            <div class="apply-content-card d-flex">
                                <div class="icon">
                                    <i class="flaticon-search-3"></i>
                                </div>
                                <div class="content">
                                    <h3>
                                        <span>02.</span>
                                        Admission Review
                                    </h3>
                                    <p>We believe that a diverse student body enhances the learning experience and prepares students to thrive in a globalized world.</p>
                                </div>
                            </div>
                            <div class="apply-content-card mb-0 border-bottom-0 d-flex">
                                <div class="icon">
                                    <i class="flaticon-loan"></i>
                                </div>
                                <div class="content">
                                    <h3>
                                        <span>03.</span>
                                        Payment of Fees
                                    </h3>
                                    <p>As a student at Pacific Coach, you will have access to state-of-the-art facilities, cutting-edge research laboratories, & an extensive library.</p>
                                </div>
                            </div>
                            <ul class="list-unstyled ps-0 mb-0 apply-btn">
                                <li class="d-inline-block">
                                    <a class="text-decoration-none default-btn" href="application.php">
                                        Admission Form
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </li>
                                <li class="d-inline-block">
                                    <ul class="list-unstyled d-flex align-items-center ps-0 mb-0 play-btn">
                                        <li>
                                            <a class="text-decoration-none icon" data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q">
                                                <i class="ri-play-mini-fill"></i>
                                            </a>
                                        </li>
                                        <li> 
                                            <a class="text-decoration-none arrow-btn" data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q">
                                                See How To Apply
                                                <i class="flaticon-right-arrow"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Apply Area -->

        <!-- Start Events Area -->
        <div class="blog-area  py-5">
            <div class="container">
                <div class="section-title text-center m-auto">
                  
                    <h2>See Our Latest News</h2>
                   
                </div>
               
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-card">
                            <div class="image">
                                <a class="text-decoration-none" href="blog-details.php">
                                    <img src="assets/img/blog/blog-1.jpg" alt="blog-image">
                                </a>
                                <span>Education</span>
                            </div>
                            <div class="content">
                                <h3>
                                    <a class="text-decoration-none" href="blog-details.php">$165-million for Pacific Coach’s world-leading inclusive genomics and RNA research program</a>
                                </h3>
                                <ul class="list-unstyled ps-0 mb-0">
                                    <li class="d-inline-block">
                                        October 08, 2024
                                        <i class="ri-calendar-line"></i>
                                    </li>
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none" href="author.php"> William Cambel</a>
                                        <i class="ri-user-line"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-card">
                            <div class="image">
                                <a class="text-decoration-none" href="blog-details.php">
                                    <img src="assets/img/blog/blog-2.jpg" alt="blog-image">
                                </a>
                                <span>Science</span>
                            </div>
                            <div class="content">
                                <h3>
                                    <a class="text-decoration-none" href="blog-details.php">UBC professor is spinning the stuff of electric dreams in the Pacific Coach university</a>
                                </h3>
                                <ul class="list-unstyled ps-0 mb-0">
                                    <li class="d-inline-block">
                                        October 08, 2024
                                        <i class="ri-calendar-line"></i>
                                    </li>
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none" href="author.php">John Smith</a>
                                        <i class="ri-user-line"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-card">
                            <div class="image">
                                <a class="text-decoration-none" href="blog-details.php">
                                    <img src="assets/img/blog/blog-3.jpg" alt="blog-image">
                                </a>
                                <span>Business</span>
                            </div>
                            <div class="content">
                                <h3>
                                    <a class="text-decoration-none" href="blog-details.php">Unlocking the potential of peer support to improve men’s mental health</a>
                                </h3>
                                <ul class="list-unstyled ps-0 mb-0">
                                    <li class="d-inline-block">
                                        October 08, 2024
                                        <i class="ri-calendar-line"></i>
                                    </li>
                                    <li class="d-inline-block">
                                        <a class="text-decoration-none" href="author.php">William Cambel</a>
                                        <i class="ri-user-line"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <a class="text-decoration-none arrow-btn" href="full-blog.php">
                            See All Latest Blog
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Events Area -->

        <!-- Start Tuition Area --> 
        <div class="tuition-area pt-100 pb-75">
            <div class="container">
                <div class="row align-items-center" data-cues="slideInUp">
                    <div class="col-lg-6">
                        <div class="tuition-card-info">
                            <div class="row" data-cues="slideInUp">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-tuition-card">
                                        <h3>Tuition Costs,2019-2021</h3>
                                        <p class="d-flex align-items-center justify-content-between">
                                            Summer 2019
                                            <span>$21,00</span>
                                        </p>
                                        <p class="d-flex align-items-center justify-content-between">
                                            Spring 2020
                                            <span>$91,00</span>
                                        </p>
                                        <p class="d-flex align-items-center justify-content-between">
                                            Fall 2020
                                            <span>$14,00</span>
                                        </p>
                                        <p class="d-flex align-items-center justify-content-between">
                                            Summer 2021
                                            <span>$16,00</span>
                                        </p>
                                        <p class="d-flex align-items-center justify-content-between">
                                            Spring 2021
                                            <span>$44,00</span>
                                        </p>
                                        <h3 class="d-flex align-items-center border-bottom-0 mb-0 pb-0 justify-content-between">
                                            Total
                                            <span>$18,600</span>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-tuition-card">
                                        <h3>Tuition Costs, 2021-2024</h3>
                                        <p class="d-flex align-items-center justify-content-between">
                                            Summer 2021
                                            <span>$24,00</span>
                                        </p>
                                        <p class="d-flex align-items-center justify-content-between">
                                            Spring 2022
                                            <span>$94,00</span>
                                        </p>
                                        <p class="d-flex align-items-center justify-content-between">
                                            Fall 2021
                                            <span>$14,00</span>
                                        </p>
                                        <p class="d-flex align-items-center justify-content-between">
                                            Summer 2024
                                            <span>$14,00</span>
                                        </p>
                                        <p class="d-flex align-items-center justify-content-between">
                                            Spring 2024
                                            <span>$47,00</span>
                                        </p>
                                        <h3 class="d-flex align-items-center border-bottom-0 mb-0 pb-0 justify-content-between">
                                            Total
                                            <span>$25,600</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tuition-content">
                            <div class="title">
                                <h2>Tuition & Fees At Pacific Coach</h2>
                                <p>At Pacific Coach, we believe in providing an exceptional educational experienc that prepares students for success in an ever-changing world. As a leading institution of higher learning, we are committed to fostering a vibrant academic community and empowering our students to reach their full potential.</p>
                            </div>
                            <a class="text-decoration-none arrow-btn" href="#">
                                Details Plans
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Tuition Area --> 

        <!-- Start Facilities Area -->
        <div class="facilities-area pb-75">
            <div class="container">
                <div class="row align-items-center" data-cues="slideInUp">
                    <div class="col-lg-6">
                        <div class="facilities-content">
                            <div class="title">
                                <h2>Our Campus Has Best Facilities For Our Students</h2>
                                <p>We are proud of our alumni network, which spans across industries and continents. Our graduates are equipped with the skills, values knowledge, anda  to excel in their chosen fields and make positive impact on society. As a Pacific Coach graduate.</p>
                            </div>
                            <div class="facilities-info">
                                <h3>
                                    <span>01.</span>
                                    Best Computer Labs
                                </h3>
                                <p>Computer labs equipped with computers, printers, and software are available for students to work on assignments.</p>
                            </div>
                            <div class="facilities-info">
                                <h3>
                                    <span>02.</span>
                                    Performing Arts Centers
                                </h3>
                                <p>Universities with performing arts programs often have dedicated facilities such as theaters, concert halls, and rehearsal spaces.</p>
                            </div>
                           <div class="d-inline-block">
                                <a class="text-decoration-none default-btn" href="application.php">
                                    Admission Form
                                    <i class="flaticon-right-arrow"></i>
                                </a>
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="facilities-image">
                            <img src="assets/img/facilities/facilities-1.jpg" alt="facilities-image">
                            <div class="facilities-image-info">
                                <i class="flaticon-quote"></i>
                                <p>Research-intensive universities may have specialized research centers and institutes for various disciplines.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Facilities Area -->

        <!-- Start Testimonial Area -->
        <!-- <div class="testimonial-area pb-75">
            <div class="container">
                <div class="section-title text-center m-auto">
                    <h2>What Student’s Say</h2>
                </div>
                <div class="row align-items-center data-cues="slideInUp">
                    <div class="col-lg-4">
                        <div class="testimonial-image">
                            <img src="assets/img/testimonial/testimonial-1.jpg" alt="testimonial-image">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="testimonial-slider-info">
                            
                            <div class="swiper testimonial2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-slider-item">
                                            <ul class="list-unstyled ps-0 star-icon">
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                            </ul>
                                            <p>Universities value students who can think critically and solve problems. Reviewers may assess a student's ability to analyze information, evaluate different perspectives, and apply logical reasoning to arrive at solutions. Many university programs involve group projects or collaborative activities.</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="user d-flex align-items-center">
                                                    <div class="image">
                                                        <img src="assets/img/testimonial/testimonial-3.jpg" alt="testimonial-image">
                                                    </div>
                                                    <div class="content">
                                                        <h3>John Smith</h3>
                                                        <span>Pacific Coach’s student</span>
                                                    </div>
                                                </div>
                                                <div class="quote-icon">
                                                    <i class="flaticon-quote"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-slider-item">
                                            <ul class="list-unstyled ps-0 star-icon">
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                            </ul>
                                            <p>Universities value students who can think critically and solve problems. Reviewers may assess a student's ability to analyze information, evaluate different perspectives, and apply logical reasoning to arrive at solutions. Many university programs involve group projects or collaborative activities.</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="user d-flex align-items-center">
                                                    <div class="image">
                                                        <img src="assets/img/testimonial/testimonial-4.jpg" alt="testimonial-image">
                                                    </div>
                                                    <div class="content">
                                                        <h3>James Harris</h3>
                                                        <span>Pacific Coach’s student</span>
                                                    </div>
                                                </div>
                                                <div class="quote-icon">
                                                    <i class="flaticon-quote"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-slider-item">
                                            <ul class="list-unstyled ps-0 star-icon">
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                            </ul>
                                            <p>Universities value students who can think critically and solve problems. Reviewers may assess a student's ability to analyze information, evaluate different perspectives, and apply logical reasoning to arrive at solutions. Many university programs involve group projects or collaborative activities.</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="user d-flex align-items-center">
                                                    <div class="image">
                                                        <img src="assets/img/testimonial/testimonial-2.jpg" alt="testimonial-image">
                                                    </div>
                                                    <div class="content">
                                                        <h3>David Wilson</h3>
                                                        <span>Pacific Coach’s student</span>
                                                    </div>
                                                </div>
                                                <div class="quote-icon">
                                                    <i class="flaticon-quote"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-slider-item">
                                            <ul class="list-unstyled ps-0 star-icon">
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                            </ul>
                                            <p>Universities value students who can think critically and solve problems. Reviewers may assess a student's ability to analyze information, evaluate different perspectives, and apply logical reasoning to arrive at solutions. Many university programs involve group projects or collaborative activities.</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="user d-flex align-items-center">
                                                    <div class="image">
                                                        <img src="assets/img/testimonial/testimonial-6.jpg" alt="testimonial-image">
                                                    </div>
                                                    <div class="content">
                                                        <h3>Jessica Clark</h3>
                                                        <span>Pacific Coach’s student</span>
                                                    </div>
                                                </div>
                                                <div class="quote-icon">
                                                    <i class="flaticon-quote"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="thumbs-arrow d-flex align-items-center justify-content-between">

                                <div class="next-prev-arrow d-flex align-items-center">
                                    <div class="next">
                                        <i class="flaticon-left-arrow"></i>
                                    </div>
                                    <div class="prev">
                                        <i class="flaticon-right-arrow"></i>
                                    </div>
                                </div>

                                <div thumbsSlider="" class="swiper testimonial">
                                    <div class="swiper-wrapper justify-content-end">
                                        <div class="swiper-slide">
                                            <div class="testimonial-item-image">
                                                <img src="assets/img/testimonial/testimonial-3.jpg" alt="testimonial-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-item-image">
                                                <img src="assets/img/testimonial/testimonial-4.jpg" alt="testimonial-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-item-image">
                                                <img src="assets/img/testimonial/testimonial-5.jpg" alt="testimonial-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-item-image">
                                                <img src="assets/img/testimonial/testimonial-6.jpg" alt="testimonial-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Testimonial Area -->

        <!-- Start Partner Area -->
        <!-- <div class="partner-area pb-75">
            <div class="container">
                <div class="partner-slider-info">
                    <div class="swiper partner-slider">
                        <div class="swiper-wrapper" data-cues="slideInUp">
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-1.png" alt="partner-logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-2.png" alt="partner-logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-3.png" alt="partner-logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-4.png" alt="partner-logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-5.png" alt="partner-logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-1.png" alt="partner-logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-2.png" alt="partner-logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-3.png" alt="partner-logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-4.png" alt="partner-logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-5.png" alt="partner-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Partner Area -->

        <!-- Start Subscribe Area -->
        <div class="subscribe-area pb-75">
            <div class="container">
                <div class="row align-items-center" data-cues="slideInUp">
                    <div class="col-xl-8">
                        <div class="subscribe-image-info">
                            <div class="row align-items-center" >
                                <div class="col-lg-5">
                                    <div class="subscribe-item">
                                        <h3>Subscribe To Our Newsletter</h3>
                                        <p>Stay up-to-date with the latest news, trends, & exclusive offers by subscribe to our newsletter.</p>
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
                                <div class="col-lg-7">
                                    <div class="subscribe-image">
                                        <img src="assets/img/subscribe/subscribe-1.jpg" alt="subscribe-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="subscribe-content">
                            <div class="title">
                                <h2>Are You Ready To Build Up Your Career </h2>
                                <p>We are proud of our alumni network, which spans across industries and continents. Our graduates are equipped with the skills, values knowledge, anda  to excel in their chosen fields and make positive impact on society.</p>
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
                </div>
            </div>
        </div>
        <!-- End Subscribe Area -->
        
        <?php require_once 'common/footer.php';?>

