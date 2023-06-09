<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">

    <!-- Page Title -->
    <title> Rise - {{$project->project_name}}</title>

    

   <!-- Icon fonts -->
    <!--<link href="css/font-awesome.min.css" rel="stylesheet">-->
    <!--<link href="css/flaticon.css" rel="stylesheet">-->

    <!-- Bootstrap core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Plugins for this template -->
    <!--<link href="css/animate.css" rel="stylesheet">-->
    <!--<link href="css/owl.carousel.css" rel="stylesheet">-->
    <!--<link href="css/owl.theme.css" rel="stylesheet">-->
    <!--<link href="css/owl.transitions.css" rel="stylesheet">-->
    <!--<link href="css/jquery.fancybox.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <style>
        .social .fbtn {
        width: 50px;
        display: inline-block;
        color: #fff;
        text-align: center;
        line-height: 18px;
        float: left;
        }
        .social .fa {
            padding: 15px 0px
        }
        .whatsapp{
            background-color: #32CD32;
        }
        .facebook {
            background-color: #3b5998;
        }
        .instagram {
            background-color: #dd4b39;
        }
        .twitter {
            background-color: #55acee;
        }
        .stumbleupon {
            background-color: #eb4924;
        }
        .pinterest {
            background-color: #cc2127;
        }
        .linkedin {
            background-color: #0077b5;
        }
        .buffer {
            background-color: #323b43;
        }
        /*.share-button.sharer {*/
        /*    height: 20px;*/
        /*    padding: 100px;*/
        /*}*/
        .share-button.sharer .social.active.top {
            transform: scale(1) translateY(-10px);
        }
        .share-button.sharer .social.active {
            opacity: 1;
            transition: all 0.4s ease 0s;
            visibility: visible;
        }
        .share-button.sharer .social.networks-5 {} .share-button.sharer .social.top {
            margin-top: -80px;
            transform-origin: 0 0 0;
        }
        .share-button.sharer .social {
            margin-left: -65px;
            opacity: 0;
            transition: all 0.4s ease 0s;
            visibility: hidden;
        }
        #caro{
            width:100%; height: 600px !important;
        }
   
    @media screen and (min-width: 768px) {
        #rel{
            display:flex; justify-content:center;
        }
    }
    @media screen and (max-width: 768px) {
        #caro{
            width:100%; height: 400px !important;
        }
    }
</style>
</head>

<body class="cause-single-page">

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header class="site-header header-style1">

        <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{Route('index')}}"><img src="/images/logo.png" alt="logo" width="70px" /></a>
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navigation-menu-holder navbar-right">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li><a href="{{Route('index')}}">Home</a></li>
                            <li><a href="{{Route('index')}}#about">About</a></li>
                            <li><a href="{{Route('projects')}}">Projects</a></li>
                            <li><a href="https://www.paypal.com/donate/?hosted_button_id=9MCWTTAHZ73QE">Donate</a></li>
                            <li><a href="https://shopmpac.com/">Shop</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->


                   
                </div><!-- end of container -->
            </nav> <!-- end navigation -->
        </header>
        <!-- end of header -->


        <!-- start page-title-wrapper -->
        <section class="page-title-wrapper">
            <div class="page-title">
                <h1>Project - {{$project->project_name}}</h1>
            </div>
            <div class="breadcrumb-wrapper">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><a href="{{Route('index')}}">Home</a></li>
                        <li><a href="{{Route('projects')}}">Projects</a></li>
                        <li>Project</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- end page-title-wrapper -->


        <!-- start causes-single-wrapper -->
        <section class="causes-single-wrapper section-padding">
            <div class="container">
                <div class="row content">
                    <div class="col col-md-9 mx-auto" >
                        <div class="causes-single">
                            <div class="img-holder">
                                 <div id="{{$project->slug}}" class="carousel slide" data-ride="carousel">
                
                                   <!-- Wrapper for slides -->
                                    <div class="carousel-inner" >
                                
                                      <div class="item active">
                                        <img loading="lazy"src="/storage/{{$project->img_url}}" alt class="d-block" id="caro">
                                       
                                      </div>
                                 @foreach($image_gallerys as $image_gallery)
                                    @if($image_gallery->slug == $project->slug)
                                      <div class="item">
                                        <img loading="lazy"src="/storage/{{$image_gallery->img_url}}" alt class="d-block" id="caro" >
                                      </div>
                                    @endif 
                                      
                                     @endforeach
                                     
                                  
                                    </div>
                                
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#{{$project->slug}}" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#{{$project->slug}}" data-slide="next">
                                      <span class="glyphicon glyphicon-chevron-right"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                            </div>
                            <div class="causes-list-box">
                                <div class="title">
                                    <h3 style="margin: 5px 5px 15px 0;">{{$project->project_name}}
                                    <div class="causes-details" style="margin-top:0; float:right;">
                               
                                    <div class="share-button sharer" style="display:block; text-align:right;">
                                        <button type="button" class="btn share-btn" style="color: #fff; background-color: #000;">Share</button>
                                        <div class="social top center networks-5 " >
                                            <!-- Facebook Share Button -->
                                            <a class="fbtn share facebook" href="https://www.facebook.com/sharer/sharer.php?u={{Route('index')}}/project/{{$project->slug}}" target="_blank"><i class="fa fa-facebook" style="color:white;font-size: .4em;"></i></a> 
                                            
                                            <!-- instagram Share Button -->
                                            <a class="fbtn share instagram" href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram" style="color:white;font-size: .4em;"></i></a> 
                                            
                                            <!-- whatsapp Share Button -->
                                            <a class="fbtn share whatsapp" href="whatsapp://send?text={{Route('index')}}/project/{{$project->slug}}" data-action="share/whatsapp/share" target="_blank"><i class="fa fa-whatsapp" style="color:white;font-size: .4em;"></i></a> 
                                           
                                        </div>
                                        </div>
                                    </div>
                                    </h3>
                                    <div class="progress" style="height: 18px;">
                                    <div class="progress-bar" role="progressbar" style="width: {{number_format((float)($project->raised / $project->goal) * 100, 2, '.', '')}}%; text-align: center; padding-bottom: 10px;" aria-valuenow="{{number_format((float)($project->raised / $project->goal) * 100, 2, '.', '')}}" aria-valuemin="0" aria-valuemax="100">{{number_format((float)($project->raised / $project->goal) * 100, 2, '.', '')}}%</div>
                                    </div>
                                    <h4>Raised: <span>${{number_format($project->raised)}}</span> / ${{number_format($project->goal)}}</h4>
                                </div>
                                <div class="inner-details">
                                    {!! html_entity_decode($project->details) !!}

                                    <div class="donation-form quick-donation-section">
                                            <div class="donate-btn">
                                                <a href="https://www.paypal.com/donate/?hosted_button_id=9MCWTTAHZ73QE" class="btn theme-btn" type="submit">Donate</a>
                                            </div>
                                    </div> <!-- end donation-form -->
                                </div> <!-- end inner-details -->
                            </div> <!-- end causes-list-box -->
                        </div> <!-- end causes-single -->
                    </div> <!-- end col -->
                </div> <!--end row-->
             </div> <!-- end container-->
        </section>
        <!-- end causes-single-wrapper -->


        <!-- start causes-s2 -->
        <section class="causes-s2 related-causes" >
            <div class="container">
                <div class="row section-title">
                    <div class="col col-xs-12">
                        <h2>Other Projects</h2>
                    </div>
                </div> <!-- end section-title -->
                
                <div class="causes-s2-grids" id="rel">
                    @foreach($projects as $project)
                        <div class="col col-lg-4 col-xs-6">
                            <div class="grid">
                                <div class="img-goal-raised">
                                    <div class="img-holder">
                                        <img src="/storage/{{$project->img_url}}" alt class="img img-responsive">
                                    </div>
                                    <div class="goal-raised-meter">
                                        <div class="hrvr-center">
                                            <div class="meter-2" data-value="{{number_format((float)$project->raised / $project->goal, 2, '.', '')}}">
                                                <span></span>
                                            </div>
                                            <div class="goal-raised">
                                                <div>
                                                    <h4>Raised</h4>
                                                    <span style="font-size: 1em">${{number_format($project->raised)}}</span>
                                                </div>
                                                <div>
                                                    <h4>Goal</h4>
                                                    <span style="font-size: 1em">${{number_format($project->goal)}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="causes-info">
                                    <h3><a href="/project/{{$project->slug}}">{{$project->project_name}}</a></h3>
                                    <!-- <span class="remaining-days"><i class="fi flaticon-calendar-page-with-circular-clock-symbol"></i> 3 days remaining</span> -->
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end causes-s2 -->


        <!-- start partners -->
        <section class="partners section-padding">
           
        </section>
        <!-- end partners -->


        <!-- start footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                <div class="col col-md-2 col-sm-4">
                        <div class="widget action-widget">
                            <div class="footer-logo">
                                <img src="/images/logo.png" alt class="img img-responsive" width="50px">
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-8 col-sm-4">
                        <div class="widget about-widget">
                            <!-- <div class="footer-logo">
                                <img src="images/logo.png" alt class="img img-responsive" width="100px">
                            </div> -->
                            <div class="company-info">
                                <p>RISE: Revolutionizing International Sports & Education &copy;</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col col-md-2 col-sm-4">
                        <div class="widget action-widget">
                            <!-- <h3 class="widget-title">Email:</h3> -->
                            <div class="company-info">
                                <p>info@rise4hope.org</p>
                            </div>
                        </div>
                    </div>
                    
                </div> <!-- end row -->
            </div> <!-- end container -->
        </footer>
        <!-- end footer -->
    </div>
    <!-- end of page-wrapper -->


     <!-- All JavaScript files
    ================================================== -->
    <!--<script src="js/jquery.min.js"></script>-->
    <!--<script src="js/bootstrap.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" integrity="sha512-jGsMH83oKe9asCpkOVkBnUrDDTp8wl+adkB2D+//JtlxO4SrLoJdhbOysIFQJloQFD+C4Fl1rMsQZF76JjV0eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Plugins for this template -->
    <!--<script src="js/jquery-plugin-collection.js"></script>-->

    <!-- Custom script for this template -->
    <!--<script src="js/script.js"></script>-->
      <script>
    
    // Hero slider background setting
    function sliderBgSetting() {
        if ($(".hero-slider .slide").length) {
            $(".hero-slider .slide").each(function() {
                var $this = $(this);
                var img = $this.find(".slider-bg").attr("src");

                $this.css({
                    backgroundImage: "url("+ img +")",
                    backgroundSize: "cover",
                    backgroundPosition: "center center"
                })
            });
        }
    }
    
      function preloader() {
        if($('.preloader').length) {
            $('.preloader').delay(3000).fadeOut(500, function() {

                // //active wow
                // wow.init();

                // //Active heor slider
                // heroSlider();

            });
        }
    }
    
        // Check ie and version
    function isIE () {
        var myNav = navigator.userAgent.toLowerCase();
        return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1], 10) : false;
    }


    // Toggle mobile navigation
    function toggleMobileNavigation() {
        var navbar = $(".navigation-menu-holder");
        var openBtn = $(".navbar-header .open-btn");
        var closeBtn = $(".navigation-menu-holder .close-navbar");

        openBtn.on("click", function() {
            if (!navbar.hasClass("slideInn")) {
                navbar.addClass("slideInn");
            }

            return false;
        })

        closeBtn.on("click", function() {
            if (navbar.hasClass("slideInn")) {
                navbar.removeClass("slideInn");
            }
            return false;            
        })
    }

    toggleMobileNavigation();


    // Add class for small navigation
    function addClassForSmallNav() {
        var windowWidth = window.innerWidth,
            mainNav = $("#navbar > ul");
        
        if (windowWidth < 992) {
            mainNav.addClass("small-nav");
        } else {
            mainNav.removeClass("small-nav");
        }
    }

    addClassForSmallNav();


    // Functionality for dropdown open close ect
    function smallNavFunctinality() {
        if ($(".small-nav").length) {
            var navigation = $(".small-nav");

            var subMenuLink = navigation.find(".sub-menu > a");
            var subSubMenuLink = navigation.find(".sub-sub-menu > a");
            var subMenu = subMenuLink.siblings("ul");
            var subSubMenu = subSubMenuLink.next("ul");

            subMenu.hide();
            subSubMenu.hide();

            subMenuLink.on("click", function(e) {
                var $this = $(this);
                e.preventDefault();
                $this.siblings().slideToggle();
                e.stopImmediatePropagation();
            });

            subSubMenuLink.on("click", function(f) {
                var $this = $(this);
                f.preventDefault();
                $this.siblings().slideToggle();
                f.stopImmediatePropagation();
            });
        }
    }
    
    // Parallax background
    function bgParallax() {
        if ($(".parallax").length) {
            $(".parallax").each(function() {
                var height = $(this).position().top;
                var resize     = height - $(window).scrollTop();
                var parallaxSpeed = $(this).data("speed");
                var doParallax = -(resize / parallaxSpeed);
                var positionValue   = doParallax + "px";
                var img = $(this).data("bg-image");

                $(this).css({
                    backgroundImage: "url(" + img + ")",
                    backgroundPosition: "50%" + positionValue,
                    backgroundSize: "cover"
                });
            });
        }
    }

    bgParallax();
        $(document).ready(function(){
            
            smallNavFunctinality();
            sliderBgSetting();
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash == '#about' || this.hash == '#home' || this.hash == '#join') {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 100
            }, 1000, function(){
        

            });
            } // End if
        });
        });
        
        $( document ).ready(function() {
            
     //custom button for homepage
     $( ".share-btn" ).click(function(e) {
          $('.networks-5').not($(this).next( ".networks-5" )).each(function(){
             $(this).removeClass("active");
         });
         $(this).next( ".networks-5" ).toggleClass( "active" );
    });   
    
    preloader();
    
});
 


    </script>
</body>
</html>
