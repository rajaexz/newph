<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>hostkites - Web Hosting HTML Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
        <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
        <meta content="Shreethemes" name="author" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Magnific Popup -->
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
        <!-- Css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="css/colors/default.css" rel="stylesheet" id="color-opt">
<style>
    
.screen {
	display: block;
	width: 100%;
	height: 500px;
	overflow: hidden;
	position: relative;
	
	border-radius: 1px;
	margin: 0 auto;
}
.screen img {
	bottom: -1067px;
	width: 100%;
	height: auto;
	position: absolute;
	z-index: 0;
  margin:0;
  padding:0;
	-webkit-transition: top 11s;
	-moz-transition: top 11s;
	-ms-transition: top 11s;
	-o-transition: top 11s;
	transition: bottom 11s;
}
.screen:hover img {
  bottom: 0;
  -webkit-transition: all 11s;
  -moz-transition: all 11s;
  -ms-transition: all 11s;
  -o-transition: all 11s;
  transition: all 11s;
}

</style>
    </head>
    <body >


    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <div>
                <a class="logo" href="index.html">
                    <img src="images/logo-dark.png" class="l-dark" height="27" alt="">
                    <img src="images/logo-light.png" class="l-light" height="35" alt="">
                </a>
            </div>                 
            <div class="buy-button">
                <a href="#" class=" h6 mr-3 login " data-toggle="modal" data-target="#LoginForm">Login</a>
                <a href="#" target="_blank" class="btn btn-primary">Support</a>
            </div><!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
    
            <div id="navigation">
                <!-- Navigation Menu-->   
                <ul class="navigation-menu nav-light">
               
                    <li class="has-submenu">
                        <a href="javascript:void(0)">Hosting</a><span class="menu-arrow"></span>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="hosting-shared.html"><img src="images/icons/shared.svg" class="avatar avatar-ex-sm mr-2" alt=""> Shared Hosting</a></li>
                                    <li><a href="hosting-vps.html"><img src="images/icons/vps.svg" class="avatar avatar-ex-sm mr-2" alt=""> VPS Hosting</a></li>     
                                    <li><a href="hosting-dedicated.html"><img src="images/icons/dedicated.svg" class="avatar avatar-ex-sm mr-2" alt=""> Dedicated Server</a></li> 
                                    <li><a href="hosting-cloud.html"><img src="images/icons/cloud.svg" class="avatar avatar-ex-sm mr-2" alt=""> Cloud Hosting</a></li>
                                    <li><a href="hosting-web.html"><img src="images/icons/web.svg" class="avatar avatar-ex-sm mr-2" alt=""> Web Hosting</a></li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li><a href="hosting-reseller.html"><img src="images/icons/reseller.svg" class="avatar avatar-ex-sm mr-2" alt=""> Reseller Hosting</a></li>  
                                    <li><a href="hosting-domain.html"><img src="images/icons/domain.svg" class="avatar avatar-ex-sm mr-2" alt=""> Domain Name</a></li>  
                                    <li><a href="hosting-wordpress.html"><img src="images/icons/wordpress.svg" class="avatar avatar-ex-sm mr-2" alt=""> Worpress Server</a></li>  
                                    <li><a href="hosting-email.html"><img src="images/icons/email.svg" class="avatar avatar-ex-sm mr-2" alt=""> Email Server</a></li> 
                                </ul>
                            </li>
                        </ul>
                    </li>
    
                    <li class="has-submenu">
                        <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="page-about.html">Company</a></li>
                            <li class="has-submenu"><a href="javascript:void(0)"> Blog</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-blog.html">Blog</a></li>
                                    <li><a href="page-blog-sidebar.html">Blog Sidebar</a></li>
                                    <li><a href="page-blog-single.html">Single Blog</a></li>
                                </ul>  
                            </li>
                            <li><a href="page-faqs.html">FAQs</a></li>
                            <li><a href="page-support.html">Support Center</a></li>
                            <li><a href="page-privacy.html">Privacy Policy</a></li>
                            <li><a href="page-terms.html">Terms & Conditions</a></li>
                            <li class="has-submenu"><a href="javascript:void(0)"> Auth Pages</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-signup.html">Signup</a></li>
                                    <li><a href="page-forgot-password.html">Forgot Password</a></li>
                                </ul>  
                            </li>
                            <li><a href="page-404.html">404</a></li>
                        </ul>
                    </li>

                    <li><a href="contact.html">Contact</a></li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
    </header><!--end header-->
    <!-- Navbar End -->

        <!-- webdesign Start -->
        <section class="bg-half-170 d-table w-100 " style=" height: 100vh !important;" id="home">
            <div class="bg-overlay" style=" background-image: linear-gradient(120deg, #0937a2 0%, #1c1102 100%); z-index: -1;"></div>
            
           <div class="container-fluid px-5 mx-5"  style="padding:0 6rem  !important;">
               <div class="row ">

                   <div class="col-lg-6">
                     
                       <div class="title-heading text-center text-md-left  text-white">
                           <h1 class=" mt-5 mb-5" style="font-weight: 900; font-size: 3.2rem; ">Buy Pre-Made Websites
                               To KickStart Your Business</h1>
                           <p class="text-gray para-desc mb-0">Your business is very important to us. <br> If you want to have a unique optimized website, see what we have for sale.</p> 
                      
                       </div>
                   </div><!--end col-->
                   <div class="col-lg-6">
               <img src="./images/pngfind.com-website-development-png-248566.png" style="width: 100%;">
                   </div><!--end col-->
                   
               </div><!--end row-->
           </div> <!--end container-->
       </section><!--end section-->
       <div class="position-relative">
           <div class="shape overflow-hidden text-white">
               <img src="/images/divider3-1.png">
           </div>
       </div>

       <!-- Specification Start -->
       <section class="section">
           <div class="container">
               <div class="row justify-content-center">
                   <div class="col-12">
                       <div class="section-title text-center mb-4 pb-2">
                           <h2 class="title mb-3">What To Expect From Our Websites</h2>
                           <p class="text-muted para-desc mx-auto mb-0">All the websites we sell are carefully created so that they fit all the web standards..</p>
                       </div>
                   </div><!--end col-->
               </div><!--end row-->

               <div class="row">
                   <div class="col-md-4 col-12 mt-4 pt-2">
                       <div class="card border-0">
                           <div class="card-body">
                               <div class="h1 text-primary">
                               <i class="uil uil-presentation-line"></i>
                               </div>
                               <div class="content">
                                   <h5>Seo</h5>
                                   <p class="text-muted mb-0">Search Engine Optimization is a must for every business. Our websites are SEO optimized so that you can rank.</p>
                               </div>
                           </div>
                       </div>
                   </div><!--end col-->
                   
                   <div class="col-md-4 col-12 mt-4 pt-2">
                       <div class="card border-0">
                           <div class="card-body">
                               <div class="h1 text-primary">
                             
                                <i class="uil uil-pen"></i>
                               </div>
                               <div class="content">
                                   <h5>Web Design</h5>
                                   <p class="text-muted mb-0">If you don’t like ugly websites, welcome here! Our designer team took care of every little aspect of the websites.</p>
                               </div>
                           </div>
                       </div>
                   </div><!--end col-->
                   
                   <div class="col-md-4 col-12 mt-4 pt-2">
                       <div class="card border-0">
                           <div class="card-body">
                               <div class="h1 text-primary">
                                <i class="uil uil-envelope-add"></i>
                               </div>
                               <div class="content">
                                   <h5>Content is the king</h5>
                                   <p class="text-muted mb-0">The content from our websites is carefully created by our team. Only the best articles are posted.</p>
                               </div>
                           </div>
                       </div>
                   </div><!--end col-->
                   
                   <div class="col-md-4 col-12 mt-4 pt-2">
                       <div class="card border-0">
                           <div class="card-body">
                               <div class="h1 text-primary">
                                <i class="uil uil-map-marker-alt"></i>
                               </div>
                               <div class="content">
                                   <h5>Location is not a problem</h5>
                                   <p class="text-muted mb-0">Our websites work for any location around the globe. You can enter any market from any country.</p>
                               </div>
                           </div>
                       </div>
                   </div><!--end col-->
                   
                   <div class="col-md-4 col-12 mt-4 pt-2">
                       <div class="card border-0">
                           <div class="card-body">
                               <div class="h1 text-primary">
                                <i class="uil uil-comment-share"></i>
                               </div>
                               <div class="content">
                                   <h5>Social Media</h5>
                                   <p class="text-muted mb-0">Websites are optimized for social media, including Facebook and Twitter. This helps you to get more visitors.</p>
                               </div>
                           </div>
                       </div>
                   </div><!--end col-->
                   
                   <div class="col-md-4 col-12 mt-4 pt-2">
                       <div class="card border-0">
                           <div class="card-body">
                               <div class="h1 text-primary">
                                <i class="uil uil-coffee"></i>
                               </div>
                               <div class="content">
                                   <h5>Advertising</h5>
                                   <p class="text-muted mb-0">You can advertise on our websites using Google Adsense, CPA Offers or any other monetization.</p>
                               </div>
                           </div>
                       </div>
                   </div><!--end col-->
               </div><!--end row-->
           </div><!--end container-->

        
       </section><!--end section-->
       <!-- Specification End -->
       <div class="ex" id="ex">
        <div class=" mt-100 mt-60">
            <div class="py-5 px-4"  style="background-color: transparent;">
                <div class="row py-md-5 py-4">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="section-title text-center">
                           
                                    <h1 class="text-white mb-0 " style="font-size: 4rem; font-weight: bolder;" >Host Kites</h1>
                                    
                                    <h1 class="text-white mb-0"> Web Design</h1>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-6 col-md-6 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                                <img src="./images/Asset 7.svg " style="width: 100%;">
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div><!--end row-->
            </div><!--end div-->
        </div><!--end container fluid-->
    </div>





      
        <!-- template Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h2 class="title mb-3">Our Latest Projects</h2>
                            <p class="text-muted para-desc mx-auto mb-0">Here are some websites that we have designed for our clients recently</p>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6 col-12 mb-5 pb-2">
                        <div class="card blog-post border-0 shadow rounded overflow-hidden">
                            <div class="screen">
                                <img src="/images/web-desingn/iPhone 13 mini - 1.png">
                            </div>
                            <div class="card-body p-4 content">
                                <ul class="list-unstyled post-meta d-flex justify-content-between align-items-center mb-0 pt-3 border-top">
                                    <li>
                                        <ul class="list-unstyled  mb-0">
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="like text-dark"><i data-feather="heart" class="fea icon-sm"></i> 34</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="javascript:void(0)" class="read-more h6 text-dark">Demo<i class="mdi mdi-arrow-right"></i></a></li>
                                    <li><a href="javascript:void(0)" class="read-more text-dark btn btn-primary">Buy now<i class="mdi mdi-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mb-5 pb-2">
                        <div class="card blog-post border-0 shadow rounded overflow-hidden">
                            <div class="screen">
                                <img src="images/web-desingn/Desktop - 1.png">
                            </div>
                            <div class="card-body p-4 content">
                                <ul class="list-unstyled post-meta d-flex justify-content-between align-items-center mb-0 pt-3 border-top">
                                    <li>
                                        <ul class="list-unstyled  mb-0">
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="like text-dark"><i data-feather="heart" class="fea icon-sm"></i> 34</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="javascript:5oid(0)" class="read-more h6 text-dark">Demo<i class="mdi mdi-arrow-right"></i></a></li>
                                    <li><a href="javascript:void(0)" class="read-more text-dark btn btn-primary">Buy now<i class="mdi mdi-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end col-->

                         <div class="col-lg-4 col-md-6 col-12 mb-5 pb-2">
                        <div class="card blog-post border-0 shadow rounded overflow-hidden">
                            <div class="screen">
                                <img src="images/web-desingn/Desktop - 1.png">
                            </div>
                            <div class="card-body p-4 content">
                                <ul class="list-unstyled post-meta d-flex justify-content-between align-items-center mb-0 pt-3 border-top">
                                    <li>
                                        <ul class="list-unstyled  mb-0">
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="like text-dark"><i data-feather="heart" class="fea icon-sm"></i> 34</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="javascript:void(0)" class="read-more h6 text-dark">Demo<i class="mdi mdi-arrow-right"></i></a></li>
                                    <li><a href="javascript:void(0)" class="read-more text-dark btn btn-primary">Buy now<i class="mdi mdi-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6 col-12 mb-5 pb-2">
                        <div class="card blog-post border-0 shadow rounded overflow-hidden">
                            <div class="screen">
                                <img src="images/web-desingn/iPhone 13 mini - 1.png">
                            </div>
                            <div class="card-body p-4 content">
                                <ul class="list-unstyled post-meta d-flex justify-content-between align-items-center mb-0 pt-3 border-top">
                                    <li>
                                        <ul class="list-unstyled  mb-0">
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="like text-dark"><i data-feather="heart" class="fea icon-sm"></i> 34</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="javascript:void(0)" class="read-more h6 text-dark">Demo<i class="mdi mdi-arrow-right"></i></a></li>
                                    <li><a href="javascript:void(0)" class="read-more text-dark btn btn-primary">Buy now<i class="mdi mdi-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6 col-12 mb-5 pb-2">
                        <div class="card blog-post border-0 shadow rounded overflow-hidden">
                            <div class="screen">
                                <img src="images/web-desingn/Landing Page.png">
                            </div>
                            <div class="card-body p-4 content">
                                <ul class="list-unstyled post-meta d-flex justify-content-between align-items-center mb-0 pt-3 border-top">
                                    <li>
                                        <ul class="list-unstyled  mb-0">
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="like text-dark"><i data-feather="heart" class="fea icon-sm"></i> 34</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="javascript:void(0)" class="read-more h6 text-dark">Demo<i class="mdi mdi-arrow-right"></i></a></li>
                                    <li><a href="javascript:void(0)" class="read-more text-dark btn btn-primary">Buy now<i class="mdi mdi-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6 col-12 mb-5 pb-2">
                        <div class="card blog-post border-0 shadow rounded overflow-hidden">
                            <div class="screen">
                                <img src="images/web-desingn/Landing Page.png">
                            </div>
                            <div class="card-body p-4 content">
                                  <ul class="list-unstyled post-meta d-flex justify-content-between align-items-center mb-0 pt-3 border-top">
                                    <li>
                                        <ul class="list-unstyled  mb-0">
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="like text-dark"><i data-feather="heart" class="fea icon-sm"></i> 34</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="javascript:void(0)" class="read-more h6 text-dark">Demo<i class="mdi mdi-arrow-right"></i></a></li>
                                    <li><a href="javascript:void(0)" class="read-more text-dark btn btn-primary">Buy now<i class="mdi mdi-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- BLog End -->
    <!-- Start -->
    <section class="section bg-primary">
        <div class="container">
            <div class="row align-items-center"> 
                <div class="col-lg-6 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <img src="images/bg/r.png" class="img-fluid" alt="">
                </div><!--end col-->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title">
                        <h4 class="title text-white mb-4">
                            Our Websites Are Optimized
                            To Work With Mobile Phones </h4>
                        <p class="text-white-50 para-desc mb-0">For 2020 the number of smartphone users is forecast to reach 4 billion. We make sure that your website is well optimized for mobile so that you don’t lose any traffic. </p>
                    </div>

                    <div class="mt-4 pt-2">
                        <h6 class="text-white">2. Which way butter for you We know that .</h6>
                        <p class="text-white-50 para-desc mb-0">While designing a website for clients, we keep this in mind. Our designers ensure that the site is responsive enough to fit into every device. A responsive website not only enhances user experience but improves brand image and profitability as well.</p>
                    </div>

                    <div class="mt-4 pt-2">
                        <a href="javascript:void(0)" class="read-more text-dark btn btn-warning">TRY OUR SERVICES TODAY <i class="uil uil-mobile-android"></i></a>
                    </div>

                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
<div class="ex" id="ex">
    
    <div class="container mt-100 mt-60 py-5" style="background-color: transparent;">
        <div class="section-title my-5 " >
            <h4 class="title text-white mb-4"> Email Us Anytime</h4>
            <p  class="text-white-50  mb-0">If you have any questions or you just want to start a marketing campaign, send us a message below.</p>
         </div>
        <div class="row justify-content-center" >
        

            <div class="col-lg-8">
                <div class="custom-form">
                    <div id="message"></div>
                    <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group position-relative text-white">
                                    <label>Your Name <span class="text-danger">*</span></label>
                                    <input name="name" id="name" type="text" class="form-control" placeholder="First Name :">
                                </div>
                            </div><!--end col-->
                            <div class="col-md-6">
                                <div class="form-group position-relative text-white">
                                    <label>Your Email <span class="text-danger">*</span></label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your email :">
                                </div> 
                            </div><!--end col-->
                            <div class="col-md-12">
                                <div class="form-group position-relative text-white">
                                    <label>Subject</label>
                                    <input name="subject" id="subject" type="text" class="form-control" placeholder="Subject">
                                </div>                                                                               
                            </div><!--end col-->
                            <div class="col-md-12">
                                <div class="form-group position-relative text-white">
                                    <label>Comments</label>
                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your Message :"></textarea>
                                </div>
                            </div>
                        </div><!--end row-->
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Send Message">
                                <div id="simple-msg"></div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </form><!--end form--> 
                </div><!--end custom-form-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</div>


        <!-- Footer Start -->
        <footer class="footer bg-footer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-md-center">
                            <h4 class="text-light mb-0">Get In Touch !</h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row mt-3 justify-content-center">
                    <div class="col-md-4 mt-4 pt-2">
                        <div class="text-md-center">
                            <div class="icon">
                                <i data-feather="mail" class="fea icon-md text-light"></i>
                            </div>
                            <div class="content mt-2">
                                <h5 class="title text-light">Email</h5>
                                <a href="mailto:contact@example.com" class="text-foot">contact@example.com</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4 mt-4 pt-2">
                        <div class="text-md-center">
                            <div class="icon">
                                <i data-feather="phone" class="fea icon-md text-light"></i>
                            </div>
                            <div class="content mt-2">
                                <h5 class="title text-light">Phone</h5>
                                <a href="tel:+152534-468-854" class="text-foot">+152 534-468-854</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4 mt-4 pt-2">
                        <div class="text-md-center">
                            <div class="icon">
                                <i data-feather="map-pin" class="fea icon-md text-light"></i>
                            </div>
                            <div class="content mt-2">
                                <h5 class="title text-light">Location</h5>
                                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" class="video-play-icon text-foot">View on Google map</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-5">
                <div class="footer-bar">
                    <div class="row mt-5">
                        <div class="col-lg-4 col-md-12">
                            <a class="logo-footer h4 mouse-down text-light" href="#home">
                                <img src="images/logo-light.png" height="16" alt="">
                            </a>
                            <p class="mt-4 text-foot">There is now an abundance of <br> readable dummy texts. These are is required purely to fill a space.</p>
                            <ul class="list-unstyled social-icon social mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                            </ul><!--end icon-->
                        </div>
    
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2 mt-lg-0 pt-lg-0">
                                    <h5 class="text-light footer-head font-weight-normal mb-0">Hosting</h5>
                                    <ul class="list-unstyled footer-list mt-4">
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>Shared Hosting</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>VPS Hosting</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>Dedicated Hosting</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>Cloud Hosting</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>Reseller Hosting</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>Domain Name</a></li>
                                    </ul>
                                </div>
                                
                                <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2 mt-lg-0 pt-lg-0">
                                    <h5 class="text-light footer-head font-weight-normal mb-0">About</h5>
                                    <ul class="list-unstyled footer-list mt-4">
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>About us</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>Contact us</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>Terms & Services</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>Privacy Policy</a></li>
                                    </ul>
                                </div>
                                
                                <div class="col-lg-6 col-md-4 col-12 mt-4 pt-2 mt-lg-0 pt-lg-0">
                                    <h5 class="text-light footer-head font-weight-normal mb-0">Newsletter</h5>
                                    <p class="mt-4 text-foot">Sign up and receive the latest tips via email.</p>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="foot-subscribe form-group position-relative">
                                                    <label class="text-foot">Write your email <span class="text-danger">*</span></label>
                                                    <input type="email" name="email" id="emailsubscribe" class="form-control rounded" placeholder="Your email : " required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="submit" id="submitsubscribe" name="send" class="btn btn-primary btn-block" value="Subscribe">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--end footer-->
        <footer class="footer footer-line bg-footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-6 col-md-7">
                        <div class="text-sm-left">
                            <p class="mb-0 text-foot">© 2020 hostkites. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="http://www.shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-6 col-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled terms-service text-sm-right mb-0">
                            <li class="list-inline-item mb-0"><a href="page-privacy.html" class="text-foot mr-2">Privacy</a></li>
                            <li class="list-inline-item mb-0"><a href="page-terms.html" class="text-foot mr-2">Terms</a></li>
                            <li class="list-inline-item mb-0"><a href="page-faqs.html" class="text-foot mr-2">FAQs</a></li>
                            <li class="list-inline-item mb-0"><a href="contact.html" class="text-foot">Contact</a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Login Modal Content Start -->
        <div class="modal fade" id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content rounded shadow border-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Login </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="login-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group position-relative">
                                        <label>Your Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="email" required="" placeholder="Your Email :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-12">
                                    <div class="form-group position-relative">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" required="" placeholder="Password :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-12">
                                    <div class="d-flex justify-content-between">
                                        <div class="form-group d-inline-block">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                                            </div>
                                        </div>
                                        <p class="forgot-pass mb-0"><a href="page-forgot-password.html" class="text-dark font-weight-bold">Forgot password ?</a></p>
                                    </div>
                                </div><!--end col-->
                                <div class="col-12 mb-0">
                                    <button class="btn btn-primary w-100">Sign in</button>
                                </div><!--end col-->
                                <div class="col-12 mt-4 text-center">
                                    <h6 class="mb-0">Or Login With</h6>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-6 mt-4">
                                            <a href="#" class="btn btn-block btn-light bg-facebook"><i class="mdi mdi-facebook"></i> Facebook</a>
                                        </div>
                                        <div class="col-sm-6 mt-4">
                                            <a href="#" class="btn btn-block btn-light"><i class="mdi mdi-google"></i> Google</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <p class="mb-0 mt-3"><small class="text-dark mr-2">Don't have an account ?</small> <a href="page-signup.html" class="text-dark font-weight-bold">Sign Up</a></p>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Modal Content End -->


        <!-- Back to top -->
        <a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->
        
        <!-- javascript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <!-- Magnific Popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific.init.js"></script>
        <!-- Icons -->
        <script src="js/feather.min.js"></script>
        
        <!-- Main Js -->
        <script src="js/app.js"></script>
        
    </body>

</html>