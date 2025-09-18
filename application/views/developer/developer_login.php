<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studyhub LMS & University HTML Template </title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>modules/webmaster/assets/images/fav.png">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>modules/webmaster/assets/css/plugins/fontawesome-6.css">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>modules/webmaster/assets/css/plugins/swiper.min.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>modules/webmaster/assets/css/vendor/magnific-popup.css">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>modules/webmaster/assets/css/vendor/bootstrap.min.css">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>modules/webmaster/assets/css/vendor/jquery-ui.css">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>modules/webmaster/assets/css/vendor/metismenu.css">
    <!-- custom style css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>modules/webmaster/assets/css/style.css">
</head>

<body class="login-page">


    
    <div class="login-registration-wrapper">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="login-page-form-area">
                        <h4 class="title">Login to Your Account👋</h4>

                        <form action="<?php echo base_url('developerAuth'); ?>" method="POST">
                            <div class="single-input-wrapper">
                                <label>Email:</label>
                                <input id="email" type="email" name="email" placeholder="Enter Your Email" required>
                            </div>
                            <div class="single-input-wrapper">
                                <label>Password:</label>
                                <input id="password" name="password" type="password" placeholder="Password" required>

                            </div>

                            <div class="single-input-wrapper">
                                <label >Secret UID:</label>
                                <input id="secretCode" name="secretUID" type="text" placeholder="Secret Code" required oninput="changetoUpper()" maxlength="10"> 
                            </div>

                            
            

                            <button class="rts-btn btn-primary" type="submit" name="webmasterLogin">Login</button>

                            <div class="google-apple-wrapper">
                                <div class="google">
                                    <img src="<?php echo base_url(); ?>modules/webmaster/assets/images/contact/06.png" alt="contact">
                                </div>
                                <div class="google">
                                    <img src="<?php echo base_url(); ?>modules/webmaster/assets/images/contact/07.png" alt="contact">
                                </div>
                            </div>
                            <p>Don't Have an account? <a href="registration.html">Registration</a></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-thumbnail-login-p mt--100">
                        <img src="<?php echo base_url(); ?>modules/webmaster/assets/images/banner/login-bg.png" width="600" height="495" alt="login-form">
                    </div>
                </div>
            </div>
        </div>
    </div>




   
    </div>

    <!-- all scripts -->
    <!-- jquery min js -->
    <script src="<?php echo base_url(); ?>modules/webmaster/assets/js/vendor/jquery.min.js"></script>
    <!-- jquery ui js -->
    <script src="<?php echo base_url(); ?>modules/webmaster/assets/js/vendor/jquery-ui.js"></script>
    <!-- metismenu js -->
    <script src="<?php echo base_url(); ?>modules/webmaster/assets/js/vendor/metismenu.js"></script>
    <!-- magnific popup js-->
    <script src="<?php echo base_url(); ?>modules/webmaster/assets/js/vendor/magnifying-popup.js"></script>
    <!-- swiper JS 10.2.0 -->
    <script src="<?php echo base_url(); ?>modules/webmaster/assets/js/plugins/swiper.js"></script>
    <!-- counterup js -->
    <script src="<?php echo base_url(); ?>modules/webmaster/assets/js/plugins/counterup.js"></script>
    <!-- waypoint js -->
    <script src="<?php echo base_url(); ?>modules/webmaster/assets/js/vendor/waypoint.js"></script>
    <!-- wow js -->
    <script src="<?php echo base_url(); ?>modules/webmaster/assets/js/vendor/waw.js"></script>
    <!-- isotop mesonary -->
    <script src="<?php echo base_url(); ?>modules/webmaster/assets/js/plugins/isotop.js"></script>
    <!-- jquery imageloaded -->
    <script src="<?php echo base_url(); ?>modules/webmaster/assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <!-- resize sensor js -->
    <script src="<?php echo base_url(); ?>modules/webmaster/assets/js/plugins/resizer-sensor.js"></script>
    <!-- sticky sidebar -->
    <script src="<?php echo base_url(); ?>modules/webmaster/assets/js/plugins/sticky-sidebar.js"></script>
    <!-- gsap twinmax js -->
    <script src="<?php echo base_url(); ?>modules/webmaster/assets/js/plugins/twinmax.js"></script>
    <!-- chroma js -->
    <script src="<?php echo base_url(); ?>modules/webmaster/assets/js/vendor/chroma.min.js"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="<?php echo base_url(); ?>modules/webmaster/assets/js/plugins/bootstrap.min.js"></script>
    <!-- dymanic Contact Form -->
    <script src="<?php echo base_url(); ?>modules/webmaster/assets/js/plugins/contact.form.js"></script>
    <!-- calender js -->
    <script src="<?php echo base_url(); ?>modules/webmaster/assets/js/plugins/calender.js"></script>
    <!-- main Js -->
    <script src="<?php echo base_url(); ?>modules/webmaster/assets/js/main.js"></script>


</body>

</html>


<script>
	var secretCode = document.getElementById('secretCode');
	function changetoUpper()
	{
		secretCode.value = secretCode.value.toUpperCase();
	}
</script>