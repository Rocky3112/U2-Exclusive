<?php

include 'db.php';
session_start();
$email ="";

if($_SESSION['email']== true){
  $email = $_SESSION['email'] ;
}
else{
  header('location:login.php');
}


?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="Jassa, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Rich admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Rich is powerful and clean admin dashboard template, inpired from Google's Material Design"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Rocky Admin Template by Rocky</title>
    <link rel="canonical" href="https://therichpost.com" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/apexcharts.css" />
    <!-- Custom CSS -->
    <link href="assets/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>

  <body>
    
  
    <div class="preloader">
      <svg
        class="tea lds-ripple"
        width="37"
        height="48"
        viewbox="0 0 37 48"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
          stroke="#2962FF"
          stroke-width="2"
        ></path>
        <path
          d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
          stroke="#2962FF"
          stroke-width="2"
        ></path>
        <path
          id="teabag"
          fill="#2962FF"
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"
        ></path>
        <path
          id="steamL"
          d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke="#2962FF"
        ></path>
        <path
          id="steamR"
          d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13"
          stroke="#2962FF"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        ></path>
      </svg>
    </div>
    <div id="main-wrapper">
      <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
            >
              <i class="ri-close-line fs-6 ri-menu-2-line"></i>
            </a>
            
            <a class="navbar-brand" href="index.html">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                <!-- Light Logo icon -->
                <img
                  src="assets/images/logo-light-icon.png"
                  alt="homepage"
                  class="light-logo"
                />
              </b>
              <span class="logo-text">
                <!-- dark Logo text -->
                <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                <!-- Light Logo text -->
                <img
                  src="assets/images/logo-light-text.png"
                  class="light-logo"
                  alt="homepage"
                />
              </span>
            </a>
            
            <a
              class="topbartoggler d-block d-md-none waves-effect waves-light"
              href="javascript:void(0)"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
              ><i class="ri-more-line fs-6"></i
            ></a>
          </div>
          
          <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
              <li class="nav-item d-none d-md-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i data-feather="menu" class="feather-sm"></i
                ></a>
              </li>
              <li class="nav-item dropdown mega-dropdown">
                <a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  role="button"
                  href="#"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="d-none d-md-block"
                    >Mega <i data-feather="chevron-down" class="feather-sm"></i
                  ></span>
                  <span class="d-block d-md-none"><i class="ri-keyboard-line"></i></span>
                </a>
                <div class="dropdown-menu dropdown-menu-animate-up">
                  <div class="mega-dropdown-menu row">
                    <div class="col-lg-3 col-xl-2 mb-4">
                      <h4 class="mb-3">Carousel</h4>
                      <!-- CAROUSEL -->
                      <div
                        id="carouselExampleControls"
                        class="carousel carousel-dark slide"
                        data-bs-ride="carousel"
                      >
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img
                              class="d-block img-fluid"
                              src="assets/images//img1.jpg"
                              alt="First slide"
                            />
                          </div>
                          <div class="carousel-item">
                            <img
                              class="d-block img-fluid"
                              src="assets/images//img2.jpg"
                              alt="Second slide"
                            />
                          </div>
                          <div class="carousel-item">
                            <img
                              class="d-block img-fluid"
                              src="assets/images//img3.jpg"
                              alt="Third slide"
                            />
                          </div>
                        </div>
                        <a
                          class="carousel-control-prev"
                          href="#carouselExampleControls"
                          role="button"
                          data-bs-slide="prev"
                        >
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </a>
                        <a
                          class="carousel-control-next"
                          href="#carouselExampleControls"
                          role="button"
                          data-bs-slide="next"
                        >
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </a>
                      </div>
                      <!-- End CAROUSEL -->
                    </div>
                    <div class="col-lg-3 mb-4">
                      <h4 class="mb-3">Accordian</h4>
                      <!-- Accordian -->
                      <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button
                              class="accordion-button collapsed"
                              type="button"
                              data-bs-toggle="collapse"
                              data-bs-target="#flush-collapseOne"
                              aria-expanded="false"
                              aria-controls="flush-collapseOne"
                            >
                              Accordion Item #1
                            </button>
                          </h2>
                          <div
                            id="flush-collapseOne"
                            class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample"
                          >
                            <div class="accordion-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                              terry richardson ad squid.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button
                              class="accordion-button collapsed"
                              type="button"
                              data-bs-toggle="collapse"
                              data-bs-target="#flush-collapseTwo"
                              aria-expanded="false"
                              aria-controls="flush-collapseTwo"
                            >
                              Accordion Item #2
                            </button>
                          </h2>
                          <div
                            id="flush-collapseTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo"
                            data-bs-parent="#accordionFlushExample"
                          >
                            <div class="accordion-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                              terry richardson ad squid.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button
                              class="accordion-button collapsed"
                              type="button"
                              data-bs-toggle="collapse"
                              data-bs-target="#flush-collapseThree"
                              aria-expanded="false"
                              aria-controls="flush-collapseThree"
                            >
                              Accordion Item #3
                            </button>
                          </h2>
                          <div
                            id="flush-collapseThree"
                            class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree"
                            data-bs-parent="#accordionFlushExample"
                          >
                            <div class="accordion-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                              terry richardson ad squid.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                      <h4 class="mb-3">Contact Us</h4>
                      <!-- Contact -->
                      <form>
                        <div class="mb-3 form-floating">
                          <input
                            type="text"
                            class="form-control"
                            id="exampleInputname1"
                            placeholder="Enter Name"
                          />
                          <label>Enter Name</label>
                        </div>
                        <div class="mb-3 form-floating">
                          <input type="email" class="form-control" placeholder="Enter email" />
                          <label>Enter Email address</label>
                        </div>
                        <div class="mb-3 form-floating">
                          <textarea
                            class="form-control"
                            id="exampleTextarea"
                            rows="3"
                            placeholder="Message"
                          ></textarea>
                          <label>Enter Message</label>
                        </div>
                        <button type="submit" class="btn px-4 rounded-pill btn-info">Submit</button>
                      </form>
                    </div>
                    <div class="col-lg-3 col-xlg-4 mb-4">
                      <h4 class="mb-3">List style</h4>
                      <!-- List style -->
                      <ul class="list-style-none">
                        <li>
                          <a href="#"
                            ><i
                              data-feather="check-circle"
                              class="feather-sm text-success me-2"
                            ></i>
                            You can give link</a
                          >
                        </li>
                        <li>
                          <a href="#"
                            ><i
                              data-feather="check-circle"
                              class="feather-sm text-success me-2"
                            ></i>
                            Give link</a
                          >
                        </li>
                        <li>
                          <a href="#"
                            ><i
                              data-feather="check-circle"
                              class="feather-sm text-success me-2"
                            ></i>
                            Another Give link</a
                          >
                        </li>
                        <li>
                          <a href="#"
                            ><i
                              data-feather="check-circle"
                              class="feather-sm text-success me-2"
                            ></i>
                            Forth link</a
                          >
                        </li>
                        <li>
                          <a href="#"
                            ><i
                              data-feather="check-circle"
                              class="feather-sm text-success me-2"
                            ></i>
                            Another fifth link</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <!-- -------------------------------------------------------------- -->
              <!-- End mega menu -->
              <!-- -------------------------------------------------------------- -->
              <!-- -------------------------------------------------------------- -->
              <!-- create new -->
              <!-- -------------------------------------------------------------- -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="d-none d-md-block"
                    >Create New <i data-feather="chevron-down" class="feather-sm"></i
                  ></span>
                  <span class="d-block d-md-none"
                    ><i data-feather="plus" class="feather-sm"></i
                  ></span>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-animate-up"
                  aria-labelledby="navbarDropdown"
                >
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <!-- -------------------------------------------------------------- -->
              <!-- Search -->
              <!-- -------------------------------------------------------------- -->
              <li class="nav-item search-box">
                <a class="nav-link waves-effect waves-dark" href="javascript:(0)"
                  ><i data-feather="search" class="feather-sm"></i
                ></a>
                <form class="app-search position-absolute">
                  <input type="text" class="form-control" placeholder="Search &amp; enter" />
                  <a class="srh-btn"><i data-feather="x" class="feather-sm"></i></a>
                </form>
              </li>
            </ul>
            <!-- -------------------------------------------------------------- -->
            <!-- Right side toggle and nav items -->
            <!-- -------------------------------------------------------------- -->
            <ul class="navbar-nav">
              <!-- -------------------------------------------------------------- -->
              <!-- create new -->
              <!-- -------------------------------------------------------------- -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown2"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="flag-icon flag-icon-us"></i>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right dropdown-menu-animate-up"
                  aria-labelledby="navbarDropdown2"
                >
                  <a class="dropdown-item" href="#"
                    ><i class="me-2 flag-icon flag-icon-us"></i> English</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="me-2 flag-icon flag-icon-fr"></i> French</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="me-2 flag-icon flag-icon-es"></i> Spanish</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="me-2 flag-icon flag-icon-de"></i> German</a
                  >
                </div>
              </li>
              <!-- -------------------------------------------------------------- -->
              <!-- Comment -->
              <!-- -------------------------------------------------------------- -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href=""
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i data-feather="bell" class="feather-sm"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end mailbox dropdown-menu-animate-up">
                  <span class="with-arrow"><span class="bg-primary"></span></span>
                  <ul class="list-style-none">
                    <li>
                      <div class="drop-title bg-primary text-white">
                        <h4 class="mb-0 mt-1">4 New</h4>
                        <span class="fw-light">Notifications</span>
                      </div>
                    </li>
                    <li>
                      <div class="message-center notifications">
                        <!-- Message -->
                        <a href="#" class="message-item">
                          <span class="btn btn-light-danger text-danger btn-circle">
                            <i data-feather="link" class="feather-sm fill-white"></i>
                          </span>
                          <div class="mail-contnet">
                            <h5 class="message-title">Luanch Admin</h5>
                            <span class="mail-desc">Just see the my new admin!</span>
                            <span class="time">9:30 AM</span>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="#" class="message-item">
                          <span class="btn btn-light-success text-success btn-circle">
                            <i data-feather="calendar" class="feather-sm fill-white"></i>
                          </span>
                          <div class="mail-contnet">
                            <h5 class="message-title">Event today</h5>
                            <span class="mail-desc">Just a reminder that you have event</span>
                            <span class="time">9:10 AM</span>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="#" class="message-item">
                          <span class="btn btn-light-info text-info btn-circle">
                            <i data-feather="settings" class="feather-sm fill-white"></i>
                          </span>
                          <div class="mail-contnet">
                            <h5 class="message-title">Settings</h5>
                            <span class="mail-desc"
                              >You can customize this template as you want</span
                            >
                            <span class="time">9:08 AM</span>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="#" class="message-item">
                          <span class="btn btn-light-primary text-primary btn-circle">
                            <i data-feather="users" class="feather-sm fill-white"></i>
                          </span>
                          <div class="mail-contnet">
                            <h5 class="message-title">Pavan kumar</h5>
                            <span class="mail-desc">Just see the my admin!</span>
                            <span class="time">9:02 AM</span>
                          </div>
                        </a>
                      </div>
                    </li>
                    <li>
                      <a class="nav-link text-center mb-1 text-dark" href="#">
                        <strong>Check all notifications</strong>
                        <i data-feather="chevron-right" class="feather-sm"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- -------------------------------------------------------------- -->
              <!-- End Comment -->
              <!-- -------------------------------------------------------------- -->
              <!-- -------------------------------------------------------------- -->
              <!-- Messages -->
              <!-- -------------------------------------------------------------- -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href=""
                  id="2"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i data-feather="message-square" class="feather-sm"></i>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-end mailbox dropdown-menu-animate-up"
                  aria-labelledby="2"
                >
                  <span class="with-arrow"><span class="bg-danger"></span></span>
                  <ul class="list-style-none">
                    <li>
                      <div class="drop-title text-white bg-danger">
                        <h4 class="mb-0 mt-1">5 New</h4>
                        <span class="fw-light">Messages</span>
                      </div>
                    </li>
                    <li>
                      <div class="message-center message-body">
                        <!-- Message -->
                        <a href="#" class="message-item">
                          <span class="user-img">
                            <img
                              src="assets/images//1.jpg"
                              alt="user"
                              class="rounded-circle"
                            />
                            <span class="profile-status online pull-right"></span>
                          </span>
                          <div class="mail-contnet">
                            <h5 class="message-title">Pavan kumar</h5>
                            <span class="mail-desc">Just see the my admin!</span>
                            <span class="time">9:30 AM</span>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="#" class="message-item">
                          <span class="user-img">
                            <img
                              src="assets/images//2.jpg"
                              alt="user"
                              class="rounded-circle"
                            />
                            <span class="profile-status busy pull-right"></span>
                          </span>
                          <div class="mail-contnet">
                            <h5 class="message-title">Sonu Nigam</h5>
                            <span class="mail-desc">I've sung a song! See you at</span>
                            <span class="time">9:10 AM</span>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="#" class="message-item">
                          <span class="user-img">
                            <img
                              src="assets/images//3.jpg"
                              alt="user"
                              class="rounded-circle"
                            />
                            <span class="profile-status away pull-right"></span>
                          </span>
                          <div class="mail-contnet">
                            <h5 class="message-title">Arijit Sinh</h5>
                            <span class="mail-desc">I am a singer!</span>
                            <span class="time">9:08 AM</span>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="#" class="message-item">
                          <span class="user-img">
                            <img
                              src="assets/images//4.jpg"
                              alt="user"
                              class="rounded-circle"
                            />
                            <span class="profile-status offline pull-right"></span>
                          </span>
                          <div class="mail-contnet">
                            <h5 class="message-title">Pavan kumar</h5>
                            <span class="mail-desc">Just see the my admin!</span>
                            <span class="time">9:02 AM</span>
                          </div>
                        </a>
                      </div>
                    </li>
                    <li>
                      <a class="nav-link text-center link text-dark" href="#">
                        <b>See all e-Mails</b>
                        <i data-feather="chevron-right" class="feather-sm"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                  href=""
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><img
                    src="assets/images//1.jpg"
                    alt="user"
                    class="rounded-circle"
                    width="31"
                /></a>
                <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY">
                  <span class="with-arrow"><span class="bg-primary"></span></span>
                  <div class="d-flex no-block align-items-center p-3 bg-primary text-white mb-2">
                    <div class="">
                      <img
                        src="assets/images//1.jpg"
                        alt="user"
                        class="rounded-circle"
                        width="60"
                      />
                    </div>
                    <div class="ms-2">
                      <h4 class="mb-0">AH Rocky</h4>
                      
                    </div>
                  </div>
                  <a class="dropdown-item" href="#"
                    ><i data-feather="user" class="feather-sm text-info me-1 ms-1"></i> My
                    Profile</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i data-feather="credit-card" class="feather-sm text-primary me-1 ms-1"></i> My
                    Balance</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i data-feather="mail" class="feather-sm text-success me-1 ms-1"></i> Inbox</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#"
                    ><i data-feather="settings" class="feather-sm text-warning me-1 ms-1"></i>
                    Account Setting</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php"
                    ><i data-feather="log-out" class="feather-sm text-danger me-1 ms-1"></i>
                    Logout</a
                  >
                  <div class="dropdown-divider"></div>
                  <div class="pl-4 p-2">
                    <a href="#" class="btn d-block w-100 btn-primary rounded-pill">View Profile</a>
                  </div>
                </div>
              </li>
             </ul>
          </div>
        </nav>
      </header>
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <!-- User Profile-->
              <li>
                <!-- User Profile-->
                <div class="user-profile d-flex no-block dropdown mt-3">
                  <div class="user-pic">
                    <img
                      src="assets/images//1.jpg"
                      alt="users"
                      class="rounded-circle"
                      width="40"
                    />
                  </div>
                  <div class="user-content hide-menu ms-2">
                    <a
                      href="#"
                      class=""
                      id="Userdd"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <h5 class="mb-0 user-name font-medium">
                        AH Rocky
                        <i data-feather="chevron-down" class="feather-sm"></i>
                      </h5>
                      <span class="op-5 user-email"> <?php echo $email ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                      <a class="dropdown-item" href="#"
                        ><i data-feather="user" class="feather-sm text-info me-1"></i> My Profile</a
                      >
                      <a class="dropdown-item" href="#"
                        ><i data-feather="credit-card" class="feather-sm text-primary me-1"></i> My
                        Balance</a
                      >
                      <a class="dropdown-item" href="#"
                        ><i data-feather="mail" class="feather-sm text-success me-1"></i> Inbox</a
                      >
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#"
                        ><i data-feather="settings" class="feather-sm text-warning me-1"></i>
                        Account Setting</a
                      >
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="logout.php"
                        ><i data-feather="log-out" class="feather-sm text-danger me-1"></i>
                        Logout</a
                      >
                    </div>
                  </div>
                </div>
                <!-- End User Profile-->
              </li>
            
              <!-- User Profile-->
              
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="home" class="feather-icon"></i
                  ><span class="hide-menu">Dashboard </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="visitor.php" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu">Visitor </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="index.html" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu">Add Product </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="index.html" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu">All Product </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="lock" class="feather-icon"></i
                  ><span class="hide-menu">Manage Order</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="login.html" class="sidebar-link"
                      ><i class="mdi mdi-account-key"></i><span class="hide-menu"> Order  </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="login.html" class="sidebar-link"
                      ><i class="mdi mdi-account-key"></i><span class="hide-menu"> Total Earning  </span></a
                    >
                  </li>
                </ul>
              </li> 
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="user-x" class="feather-icon"></i
                  ><span class="hide-menu">Manages Pages</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  
                  <li class="sidebar-item">
                    <a href="404.html" class="sidebar-link"
                      ><i class="mdi mdi-alert-outline"></i
                      ><span class="hide-menu"> Contact</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="404.html" class="sidebar-link"
                      ><i class="mdi mdi-alert-outline"></i
                      ><span class="hide-menu"> Notice</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="404.html" class="sidebar-link"
                      ><i class="mdi mdi-alert-outline"></i
                      ><span class="hide-menu"> Carousel </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="logout.php"
                  aria-expanded="false"
                  ><i data-feather="log-out" class="feather-icon"></i
                  ><span class="hide-menu">Log Out</span></a
                >
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <div class="page-wrapper">
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-5 align-self-center">
              <h4 class="page-title">Dashboard</h4>
              <div class="d-flex align-items-center">
               
              </div>
            </div>
           
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <button id="addData" class="btn btn-primary p-2 px-4 fw-bold">Add Data</button>
              <form id="myForm" method="post" enctype="multipart/form-data">

              </form>
              <table class='table'>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Current price</th>
                    <th>Discount price</th>
                    <th>Buying price</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>MB</th>
                    <th>Action</th>

                    <tbody class='Tbodydata'>

                    </tbody>
                </table>
            </div>
          </div>
      </div>
      
    </div>
   
    <div class="chat-windows"></div>

    <script>
        $("#addData").click(function () {
          var tbody = "<tr>" + 
          "<td><input name='name[]' type='text' placeholder='Enter prodcut name'  class='form-control'></td>"+ 
            "<td><input name='description[]' type='text'placeholder='Enter prodcut desc' class='form-control'></td>"+ 
            "<td><input name='current_price[]' type='text'placeholder='Enter prodcut current price' class='form-control'></td>"+ 
            "<td><input name='before_price[]' type='text'placeholder='Enter prodcut before price' class='form-control'></td>"+ 
            "<td><input name='buying_price[]' type='text'placeholder='Enter prodcut buying price' class='form-control'></td>"+ 
            "<td><input name='title[]' type='text'placeholder='Enter prodcut title' class='form-control'></td>"+ 
            "<td><input name='img[]' type='file' class='form-control file'></td>"+ 
            "<td class='myfileSize'></td>"+ 
            "<td><button class='btn btn-danger cancel-btn'>Cancel </button></td>"+ 
            "</tr>";

            $('.Tbodydata').append(tbody);

            // for cancel button
            $(".cancel-btn").on('click', function(){
              $(this).parents('tr').remove();
            })
                // for show file size
            $(".file").on('change', function(){
              
              var myFiles =$(this).prop('files');
              var fileSize = ((myFiles[0].size)/(1024*1024)).toFixed(2);
              $(this).closest('tr').find('.myfileSize').html(fileSize+ 'MB')
            })
          
        })

    </script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Theme Required Js -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/app.init.js"></script>
    <script src="assets/js/app-style-switcher.js"></script>
    <!-- perfect scrollbar JavaScript -->
    <script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/js/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="assets/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/custom.min.js"></script>
    <!-- --------------------------------------------------------------- -->
    <!-- This page JavaScript -->
    <!-- --------------------------------------------------------------- -->
    <script src="assets/js/apexcharts.min.js"></script>
    <script src="assets/js/dashboard1.js"></script>
  </body>
</html>
