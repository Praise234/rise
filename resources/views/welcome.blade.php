<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">

    <!-- Page Title -->
    <title> Rise - Sports & Education</title>

    

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
    <link href="css/style.css" rel="stylesheet">

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
        #ab-us{
                margin: 90px 0; height:'570px'; width:'570px';
            }
            #select{
                width:50%;
                height: 40px;
                border-radius: 0;
                outline: 0;
                box-shadow: none;
                color: #595959;
                font-size: 16px;
                text-align: left;
                font-weight: Normal;
            }
            #select > option{
                text-align: left;
            }
        @media screen and (min-width: 768px) {
            #grid{
                height : 450px;
            }
           
        }
        @media screen and (max-width: 1092px) {
            #ab-us{
                margin: 10px 0 20px 0; height:'570px'; width:'570px';
            }
            #select{
               width:90%;
           }
        }
         
    </style>

</head>

<body>

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

            <!-- navigation -->  
            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{Route('index')}}"><img loading="lazy"src="images/logo.png" alt="logo" width="70px" /></a>
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
                            <li><a href="{{Route('index')}}#home">Home</a></li>
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


        
        <!-- start of hero -->   
        <section class="hero hero-slider-wrapper hero-slider-s1" id="home">
            <div class="hero-slider">
                <div class="slide">
                    <img loading="lazy" src="images/banner-rise.jpg" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12 text-white">
                                <h1 style="color: white">Welcome to RISE</h1>
                                <p style="color: white">Revolutionizing International Sports & Education.</p>
                                <a href="#join" class="btn theme-btn">Join us</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="slide">-->
                <!--    <img loading="lazy"src="images/banner-rise.jpg" alt class="slider-bg img-fluid" style="width:100%;">-->
                <!--    <div class="container">-->
                <!--        <div class="row">-->
                <!--            <div class="col col-xs-12 slide-caption">-->
                <!--                <h1>Welcome to RISE</h1>-->
                <!--                <p>Revolutionizing International Sports & Education.</p>-->
                <!--                <a href="#join" class="btn theme-btn">Join us</a>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </section>
        <!-- end of hero slider -->



        <!-- start about-us-section -->
        <section class="about-us-section parallax"  id="about">
            <div class="container">
                <div class="row content">
                    <div class="col col-md-7 left-col">
                        <div>
                            <div class="tab-list">
                                <ul class="nav">
                                    <li role="presentation" class="active">
                                        <a href="#about-us" data-toggle="tab"><b>About us</b></a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#vision" data-toggle="tab"><b>Vision</b></a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#doing" data-toggle="tab"><b>What We Do</b></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="about-us">
                                    <p>RISE is a non-profit organization committed to transforming the lives of youth in impoverished countries through sports and education.</p>
                                    <p>As an organization, our mission is to build sports infrastructure, create programs, and provide support to empower children in underserved communities.</p>
                                </div>
                                <div class="tab-pane fade" id="vision">
                                    <p>At RISE, we believe in going beyond simply leveling the playing field. Our vision is to create a new playing field, where every child, regardless of their background or circumstances, has access to sports opportunities and quality education.</p>
                                    <p>We aim to foster a positive impact, not only in the lives of individuals but also in the communities they belong to.</p>
                                </div>
                                <div class="tab-pane fade" id="doing">
                  
                                    <p><b>Building Sports Infrastructure:</b> We construct sports courts and facilities in impoverished regions, providing a safe and inclusive environment for children to engage in sports activities. These spaces become a hub for growth, teamwork, and personal development.</p>
                                    <p><b>Programs and Sponsorships:</b> RISE establishes sports programs in collaboration with local communities, offering coaching, training, and mentorship. We sponsor talented coaches in various sports to run RISE academies, enabling children to receive professional guidance and nurture their athletic potential.</p>
                                    <p><b>Fundraising for Jerseys and Uniforms:</b> We raise funds to provide jerseys and uniforms to young athletes, ensuring they feel a sense of belonging and pride when representing their teams. This also instills a spirit of unity and promotes teamwork among participants.</p>
                                    <p><b>Scholarships and Education:</b> RISE believes in the power of education. We identify young talents with exceptional athletic potential and provide opportunities for them to receive training at renowned international academies. Through scholarships, we empower these individuals to pursue further education while honing their sports skills.</p>

                                </div>
                            </div>
                        </div>
                    </div> <!-- end left-col -->

                    
                    <div class="col col-md-5" id="ab-us">
                        <img loading="lazy"src="images/about.jpg" alt class="img img-responsive">
                    </div> <!-- end right-col -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end about-us-section -->

        <!-- start fun-fact -->
        <section class="fun-fact parallax " data-bg-image="images/impact.jpg" data-speed="3">
            <div class="container">
                <div class="row content start-count">
                    <div class="col col-md-12">
                       <p>Through our collective efforts, RISE has witnessed remarkable transformations. We have witnessed the growth of resilient and confident young athletes who are breaking barriers and defying limitations. Our initiatives promote health, education, teamwork, and the development of life skills that extend far beyond the sports field.</p>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end fun-fact -->

        <!-- start causes -->
        <section class="causes section-padding pb-5" id="project">
            <div class="container">
                <div class="row section-title">
                    <div class="col col-md-8 col-md-offset-2">
                        <h2 style="color:#000;">Projects</h2>
                        <p>Here are some of our recent projects</p>
                    </div>
                </div> <!-- end section-title -->
                
                <div class="row content">
                @foreach($projects as $project)
                    <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder">
                                <a href='/project/{{$project->slug}}'>
                                    
                                   
                                    <div id="{{$project->slug}}" class="carousel slide" data-ride="carousel">
                
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                
                                      <div class="item active">
                                        <img loading="lazy"src="storage/{{$project->img_url}}" alt class="d-block" style="width:100%; height: 300px !important;">
                                       
                                      </div>
                                 @foreach($image_gallerys as $image_gallery)
                                    @if($image_gallery->slug == $project->slug)
                                      <div class="item">
                                        <img loading="lazy"src="storage/{{$image_gallery->img_url}}" alt class="d-block" style="width:100%; height: 300px !important;">
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
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    </a>
                            </div>
                            <div class="goal-raised">
                                <div class="progress" style="height: 15px;">
                                    <div class="progress-bar" role="progressbar" style="width: {{number_format((float)($project->raised / $project->goal) * 100, 2, '.', '')}}%; text-align: center; padding-top: 4px;padding-bottom: 4px;" aria-valuenow="{{number_format((float)($project->raised / $project->goal) * 100, 2, '.', '')}}" aria-valuemin="0" aria-valuemax="100">{{number_format((float)($project->raised / $project->goal) * 100, 2, '.', '')}}%</div>
                                </div>

                                <div class="goal-raised-inner">
                                    <div class="raised">
                                        <h4>Raised: <span>${{number_format($project->raised)}}</span></h4>
                                    </div>
                                    <div class="goal">
                                        <h4>Goals: <span>${{number_format($project->goal)}}</span></h4>
                                    </div>
                                </div>
                            </div>

                            <div class="causes-title">
                                <h3><a href='/project/{{$project->slug}}'>{{$project->project_name}}</a> </h3>
                            </div>
                            <div class="causes-details">
                                <p>{!!substr_replace(html_entity_decode($project->details), "...", 90)!!} <br /> <a href='/project/{{$project->slug}}'>Read more</a></p>
                            </div>
                            <div class="causes-details">
                               
                                <a href="https://www.paypal.com/donate/?hosted_button_id=9MCWTTAHZ73QE" class="btn theme-btn-s3">Donate</a>
                               
                                <div class="share-button sharer" style="display: inline; float:right;">
                                    <button type="button" class="btn theme-btn-s3 share-btn">Share</button>
                                    <div class="social top center networks-5 ">
                                        <!-- Facebook Share Button -->
                                        <a class="fbtn share facebook" href="https://www.facebook.com/sharer/sharer.php?u={{Route('index')}}/project/{{$project->slug}}" target="_blank"><i class="fa fa-facebook"></i></a> 
                                        
                                        <!-- instagram Share Button -->
                                        <a class="fbtn share instagram" href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a> 
                                        
                                        <!-- whatsapp Share Button -->
                                        <a class="fbtn share whatsapp" href="whatsapp://send?text={{Route('index')}}/project/{{$project->slug}}" data-action="share/whatsapp/share" target="_blank"><i class="fa fa-whatsapp"></i></a> 
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    

                    
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end causes -->


            <!-- start quick-donation-section -->
        <section class="quick-donation-section section-padding" id="join" >
            @if(count($errors) > 0)
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      @foreach ($errors->all() as $error)
          <p>{{ $error }}</p>
      @endforeach
      </div>
      @endif
      @if(session('success'))
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          {{session('success')}}
        </div>
      @endif
            <div class="container">
                <div class="row">
                    <div class="col col-md-10 col-md-offset-1">
                        <h2>Join Us</h2>

                        <div class="donation-form">
                            <form action="{{Route('send_mail')}}" method = "post" class="form ">
                                @csrf
                                <div>
                                    <input type= "text" class="form-control" placeholder= "Full Name" name= "fullname" style="margin-left: auto; margin-right: auto;" />
                                </div>
                                <div>
                                    <input type= "email" class="form-control" placeholder= "Email Address"  name= "email" style="margin-left: auto; margin-right: auto;"/>
                                </div>
                                <div>
                                    <select id="select" class="form-control" name= "country" style="margin-left: auto; margin-right: auto;text-align:left;">
                                        <option value="" selected>Country</option>
                                          <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antartica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo">Congo, the Democratic Republic of the</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                        <option value="Croatia">Croatia (Hrvatska)</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="France Metropolitan">France, Metropolitan</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                        <option value="Holy See">Holy See (Vatican City State)</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran (Islamic Republic of)</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao">Lao People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia, Federated States of</option>
                                        <option value="Moldova">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                        <option value="Saint LUCIA">Saint LUCIA</option>
                                        <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                        <option value="Span">Spain</option>
                                        <option value="SriLanka">Sri Lanka</option>
                                        <option value="St. Helena">St. Helena</option>
                                        <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syrian Arab Republic</option>
                                        <option value="Taiwan">Taiwan, Province of China</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Viet Nam</option>
                                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                        <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                        <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                </div>

                                <div class="donate-btn">
                                    <button class="btn theme-btn" type="submit">Join</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end quick-donation-section -->


        <!-- start charity-categories-section -->
        <section class="charity-categories-section section-padding">
            <div class="container">
                <div class="row section-title">
                    <div class="col col-md-8 col-md-offset-2">
                        <h2 style="color:#000;">Get Involved</h2>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p> -->
                    </div>
                </div> <!-- end section-title -->
        
                <div class="row charity-categories-section-grids">
                    <div class="col col-md-3 col-sm-6">
                        <div class="grid" id="grid">
                            <div class="icon">
                                
                                <!--<i class="glyphicon glyphicon-usd"></i>-->
                            </div>
                            <div class="info">
                                <h3><a href="https://www.paypal.com/donate/?hosted_button_id=9MCWTTAHZ73QE">Donate</a></h3>
                                <p>Get involved today and help us build a new playing field where every child has the opportunity to thrive.</p>
                                <a href="https://www.paypal.com/donate/?hosted_button_id=9MCWTTAHZ73QE" class="details">Donate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3 col-sm-6">
                        <div class="grid" id="grid">
                            <div class="icon">
                                <!--<i class="glyphicon glyphicon-shopping-cart"></i>-->
                            </div>
                            <div class="info">
                                <h3><a href="https://shopmpac.com/">Purchase</a></h3>
                                <p>With every item purchased, ShopMPAC donates 10 AED to the STAND FOR MORE Initiative.</p>
                                <a href="https://shopmpac.com/" class="details">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3 col-sm-6">
                        <div class="grid" id="grid">
                            <div class="icon">
                                <!--<i class="glyphicon glyphicon-heart"></i>-->
                            </div>
                            <div class="info">
                                <h3><a href="#join">Volunteer</a></h3>
                                <p>We invite you to be a part of the RISE community. Together, we can build a brighter future for children in impoverished communities.</p>
                                <a href="#join" class="details">Join</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3 col-sm-6">
                        <div class="grid" id="grid">
                            <div class="icon">
                                <!--<i class="glyphicon glyphicon-book"></i>-->
                            </div>
                            <div class="info">
                                <h3><a href="/projects">Learn</a></h3>
                                <p>Donate, volunteer, or reach out to us to learn more about how you can make a difference.</p>
                                <a href="/projects" class="details">Learn Now</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end charity-categories-section -->


      


        <!-- start footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                <div class="col col-md-2 col-sm-4">
                        <div class="widget action-widget">
                            <div class="footer-logo">
                                <img src="images/logo.png" alt class="img img-responsive" width="50px">
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-8 col-sm-4">
                        <div class="widget about-widget">
                            <!-- <div class="footer-logo">
                                <img src="images/logo.png" alt class="img img-responsive" width="100px">
                            </div> -->
                            <div class="company-info">
                                <p>RISE: Revolutionizing International Sports & Education &copy; </p>
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
