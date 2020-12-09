<?php
include('config.php');
include('files.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171645780-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171645780-2');
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Architects in kanchipuram | Best Architects in kanchipuram | Architectural Design in kanchipuram | Architect Consultant in kanchipuram | ARTEG Architects & Associates</title>
    <meta name="description" content="ARTEG Architects & Associates is a team of creative designers and architects, offering a complete architectural solution. We are one stop solution for all your design and construction needs. Best architects in kanchipuram, Top architects in kanchipuram.">
    <meta name="keywords" content="Architecture in Kanchipuram, Architects in Kanchipuram, List of Architects in Kanchipuram, Architecture Firms in Kanchipuram, Top Architects in Kanchipuram, Best Architects in Kanchipuram, Architectural Designing Services in Kanchipuram, Architectural Drafting Services in Kanchipuram, Architectural Services in Kanchipuram, Architecture Services in Kanchipuram, Kanchipuram Architects, Architect Consultant in Kanchipuram, Architectural Design in Kanchipuram, Architecture Design in Kanchipuram, interior architects in Kanchipuram, architecture Kanchipuram, Low cost Architectural Designing Services in Kanchipuram, Arteg Architects & Associates">
    <meta name="author" content="">


    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/jpreloader.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/plugin.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
    <!-- custom background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="css/color.css" type="text/css" id="colors">

    <!-- load fonts -->
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="fonts/et-line-font/style.css" type="text/css">

    <!-- revolution slider -->
    <link rel="stylesheet" href="rs-plugin/css/settings.css" type="text/css">
    <link rel="stylesheet" href="css/rev-settings.css" type="text/css">
    
</head>
<body class="page-projects">

    <div id="wrapper">
        <!-- header begin -->
        <?php
		include('header.php');
		?>
        <!-- header close -->

        <!-- subheader -->
        <section id="subheader" data-speed="8" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Our Projects</h1>
                        <ul class="crumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="sep">/</li>
                            <li>Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-top no-bottom">
            <!-- section begin -->
            <section id="section-portfolio" class="no-top no-bottom" aria-label="section-portfolio">
                <div class="container">

                    <div class="spacer-single"></div>

                    <!-- portfolio filter begin -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                                <li><a href="#" data-filter="*" class="selected">All Projects</a></li>
                                <li><a href="#" data-filter=".commercial">Commercial</a></li>
                                <li><a href="#" data-filter=".hospitaly">Hospitality</a></li>
                                <li><a href="#" data-filter=".institutional">Institutional</a></li>
                                <li><a href="#" data-filter=".interior">Interiors</a></li>
                                
                                <li><a href="#" data-filter=".residential">Residential</a></li>
                            </ul>

                        </div>
                    </div>
                    <!-- portfolio filter close -->

                </div>

                <div id="gallery" class="gallery full-gallery de-gallery pf_full_width pf_4_cols wow fadeInUp" data-wow-delay=".3s">

                    <!-- gallery item -->
                     <?php
                    foreach($displayDetails['commercial'] as $row)
					{
					?>

                    <!-- gallery item -->
                    <div class="item commercial">
                        <div class="picframe">
                            <a class="simple-ajax-popup-align-top" href="project_details.php?id=<?php echo $row['id'];?>">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name"><?php echo $row['name'];?></span>
                                    </span>
                                </span>
                            </a>
                            <img src="<?php echo $row['image_1'];?>" alt="" style="max-width:339px; max-height:191px" />
                        </div>
                    </div>
                    <!-- close gallery item -->
                    <?php
					}?>
                    
                     <?php
                    foreach($displayDetails['hospitality'] as $row)
					{
					?>
                    <div class="item hospitaly">
                        <div class="picframe">
                            <a class="simple-ajax-popup-align-top" href="project_details.php?id=<?php echo $row['id'];?>">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name"><?php echo $row['name'];?></span>
                                    </span>
                                </span>
                            </a>

                            <img src="<?php echo $row['image_1'];?>" alt="" style="max-width:339px; max-height:191px"/>
                        </div>
                        
                    </div>
                   <?php
					}?>
                    
                    
                     <?php
                    foreach($displayDetails['institutional'] as $row)
					{
					?>
                    <div class="item institutional">
                        <div class="picframe">
                            <a class="simple-ajax-popup-align-top" href="project_details.php?id=<?php echo $row['id'];?>">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name"><?php echo $row['name'];?></span>
                                    </span>
                                </span>
                            </a>

                            <img src="<?php echo $row['image_1'];?>" alt="" style="max-width:339px; max-height:191px"/>
                        </div>
                        
                    </div>
                   <?php
					}?>
                    
                    
                     <?php
                    foreach($displayDetails['interiors'] as $row)
					{
					?>
                    <div class="item interior">
                        <div class="picframe">
                            <a class="simple-ajax-popup-align-top" href="project_details.php?id=<?php echo $row['id'];?>">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name"><?php echo $row['name'];?></span>
                                    </span>
                                </span>
                            </a>

                            <img src="<?php echo $row['image_1'];?>" alt="" style="max-width:339px; max-height:191px"/>
                        </div>
                        
                    </div>
                   <?php
					}?>
                    
                    
                    <?php
                    foreach($displayDetails['residential'] as $row)
					{
					?>
                    <div class="item residential">
                        <div class="picframe">
                            <a class="simple-ajax-popup-align-top" href="project_details.php?id=<?php echo $row['id'];?>">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name"><?php echo $row['name'];?></span>
                                    </span>
                                </span>
                            </a>
                            <img src="<?php echo $row['image_1'];?>" alt="" style="max-width:339px; max-height:191px"/>
                        </div>
                     </div>    
                     <?php
					 }?>
					    
                   
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    
                    
                    <!-- close gallery item -->

                   

                  
                </div>
               
            </section>
            <!-- section close -->


            <!-- section begin -->
            <section id="call-to-action" class="call-to-action bg-color dark text-center" data-speed="5" data-type="background" aria-label="call-to-action">
                <a href="contact.php" class="btn btn-line-black btn-big">Get Quotation</a>
            </section>
            <!-- logo carousel section close -->



        </div>

        <!-- footer begin -->
        <?php
		include('footer.php');
		?>
        <!-- footer close -->

    </div>



    <!-- Javascript Files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jpreLoader.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.scrollto.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/video.resize.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
	<script src="js/enquire.min.js"></script>
    <script src="js/designesia.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

</body>
</html>
