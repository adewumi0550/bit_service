<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign Up - Bitmoservice</title>
    <meta name="description" content="Create an account">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css?h=e78c0948805c24bebff6e56371d59a4a">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,80">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300,700,400italic,300italic,700italic">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/-Login-form-Page-BS4-.css?h=8917ed24363311d6deb0e3de10c0c1d1">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/best-carousel-slide.css?h=894775746b81faa0596f6e86544b18fe">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bs-media.css?h=d2aa80b8e5c61681bde98c2018dd45e8">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Dashboard-layout-v11-1.css?h=34a9a0635382afb8f3a3b31c880c2074">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Dashboard-layout-v11-2.css?h=5f5b3f6b7652e939290e5c4f00f2147b">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Dashboard-layout-v11.css?h=c2207f6e801cea3be72bf7994f4319fe">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Footer-Clean.css?h=458c2006b29994130bd3924e699b0a87">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Google-Products-Accordion.css?h=ac1c7f11bcbbc0ece1cd067f0e626453">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/header-cover.css?h=722f26206dfbe893e1a98c07cabc9144">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Highlight-Phone.css?h=1e148caf0669055c552e910be5621bdf">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/modal-dailog/ibox.css?h=600c0cdfc9f7eef9793b9cc63433a83b">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/JLX-Contact-Form-with-Placeholder-FI.css?h=ce9aebdd90d21bd946550f36098c0cd0">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-User-List.css?h=61e44a021a0e093d333d38caefc43482">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/MUSA_product-display.css?h=55699d67c660b9704324266143d1a3c5">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pricing-table-3.css?h=7257f1cc61081f391ee8aa6a0ba70ebc">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Product-Details.css?h=09351c7d3cb8c7ecdcad9253778ff891">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/semantic.min.css?h=c81da5f3a27e18162e966c4debb09aa8">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css?h=f301682eaca4fb322be0f9fee38938bd">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/TR-Form.css?h=7278483ef946f2f3520cf6c4401bc625">
<!-- Start:  Mobile view max-width: 768ox -->
<link rel="stylesheet" media="(max-width: 768px)" href="<?php echo base_url();?>bs-media.css" type="text/css" />
<!-- End:  Mobile view max-width: 768ox -->

<!-- Start:  Mobile view max-width: 507px -->
 <link rel="stylesheet" media="(max-width: 507px)" href="<?php echo base_url();?>bs-media.css" type="text/css" />
<!-- End:  Mobile view max-width: 507px -->

<!-- site - Icon -->
<link rel="icon" href="<?php echo base_url();?>logo/fivico.png" sizes="20x20 400x400" type="image/jpg">
</head>

<body>
    <!-- Start: ♣ Login form Page BS4 ♣ -->
    <div class="container-fluid">
        <div class="row mh-100vh">
            <!-- Start: Login block -->
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <!-- Start: Login container -->
                <div class="border rounded-0 m-auto w-lg-75 w-xl-50">
                    <!-- Start: Your company -->
                    <h2 class="text-center text-info font-weight-light mb-5 mt-5"><img class="img-fluid w-75" src<?php echo base_url();?>assets/img/logo/bs-logo-white.jpeg?h=5ae19eaa76efcc26897d4a9154eb26b5">&nbsp;</h2>
                    <!-- End: Your company -->
                    <header class="text-center">
                        <h1 class="bs-color-code">Sign Up</h1>
                        <hr>
                    </header>
                    <!-- Start: Login form -->
                    <!-- <form class="p-4"> -->

                           
                                            
                                        <?php echo form_open('signup', 'class="p-4"'); ?>
                        <!-- Start: Name -->
                        <div class="form-group"><label class="text-secondary">First Name*</label><br>
                            <span style="font-size: 9px;" class="text-danger"><?php echo form_error('auth_firstname', " "); ?></span> 
                            <input class="form-control auth_input" type="text" name="auth_firstname"  inputmode="email"></div>
                        <!-- End: Name -->
                        <!-- Start: Name -->
                        <div class="form-group"><label class="text-secondary">Last Name*</label><br>
                            <span style="font-size: 9px;" class="text-danger"><?php echo form_error('auth_lastname'," "); ?></span>
                            <input class="form-control auth_input" type="text" name="auth_lastname"  inputmode="email"></div>
                        <!-- End: Name -->
                        <!-- Start: Name -->
                        <div class="form-group"><label class="text-secondary">Middle Name&nbsp;<small>(Optional)</small></label><br>
                            <span style="font-size: 9px;" class="text-danger"><?php echo form_error('auth_middlename'," "); ?></span>
                            <input class="form-control auth_input" type="text" name="auth_middlename"  inputmode="email"></div>
                        <!-- End: Name -->
                        <!-- Start: Name -->
                        <div class="form-group"><label class="text-secondary">Phone Number*<small class="form-text text-muted"></small></label><br>
                            <span style="font-size: 9px;" class="text-danger"><?php echo form_error('auth_phoneNumber'," "); ?></span>
                            <input class="form-control auth_input" type="tel" name="auth_phoneNumber"></div>
                        <!-- End: Name -->
                        <!-- Start: Email -->
                        <div class="form-group"><label class="text-secondary">Email*</label><br>
                            <span style="font-size: 9px;" class="text-danger"><?php echo form_error('auth_email'," "); ?></span>
                            <input class="form-control auth_input" type="email" name="auth_email" ></div>
                        <!-- End: Email -->
                        <!-- Start: Password -->
                        <div class="form-group"><label class="text-secondary">Password*</label><br>
                            <span style="font-size: 9px;" class="text-danger"><?php echo form_error('auth_password'," "); ?></span>
                            <input class="form-control auth_input" type="password" name="auth_password"></div>
                        <!-- End: Password -->
                        <!-- Start: Password -->
                        <div class="form-group"><label class="text-secondary">Confirm Password*</label><br>
                                    <span style="font-size: 9px;" class="text-danger"><?php echo form_error('auth_confirmPassword'," "); ?></span>
                            <input class="form-control auth_input" type="password" name="auth_confirmPassword" ></div>
                        <!-- End: Password -->
                        <!-- Start: Password Guid -->
                    
                        <!-- End: Password Guid -->
                        <div>
                            <div class="form-check"><input class="form-check-input auth_input" type="checkbox" name="auth_agreement" value="agreed" checked="" id="formCheck-1"><label class="form-check-label text-capitalize" for="formCheck-1" style="font-style: italic;text-align: center;">&nbsp;By clicking "Signup" you must have read and agreed to our <a href="#">Terms of Service</a>&nbsp; | <a href="#">Privecy</a>&nbsp;|&nbsp;<a href="#">Policy</a>&nbsp;and&nbsp;<a href="#">Conditions</a></label></div>
                        </div>
                        <div align="center">
                            <!-- Start: Submit --><button class="btn btn-secondary btn-lg border rounded shadow-sm mt-2" type="submit" style="background-color: #464a6c;">Signup</button>
                            <!-- End: Submit -->
                        </div><small class="form-text text-center text-muted mt-4">Already registered?</small>
                        <hr>
                    </form>
                    <!-- End: Login form -->
                    <!-- Start: Forgot password -->
                    <p class="text-center"><a href="<?php echo base_url(); ?>login">Login here</a></p>
                    <!-- End: Forgot password --><button class="btn btn-light btn-block" type="button" onclick="window.history.back();"><i class="fa fa-history"></i> Back</button></div>
                <!-- End: Login container -->
            </div>
            <!-- End: Login block -->
            <!-- Start: Background image -->
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url(&quot;<?php echo base_url();?>assets/img/aldain-austria-316143-unsplash.jpg?h=06fc6829419b289c38931415861e76b8&quot;);background-size:cover;background-position:center center;">
                <!-- Start: Credit photo -->
                <p class="ml-auto small text-dark mb-2"><em>Photo by&nbsp;</em><a href="https://unsplash.com/photos/v0zVmWULYTg?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" target="_blank" class="text-dark"><em>Aldain Austria</em></a><br></p>
                <!-- End: Credit photo -->
            </div>
            <!-- End: Background image -->
        </div>
    </div>
    <!-- End: ♣ Login form Page BS4 ♣ -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js?h=1dd785e1de9a32e236b624ae268bb803"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js?h=2394c9ffd5558f411ffdc3326e9a8962"></script>
    <script src="<?php echo base_url();?>assets/js/media/bs.css.min.js?h=f0736a06770d1612f0c146133f78fec5"></script>
    <script src="<?php echo base_url();?>assets/js/media/bs.footer.min.js?h=d353226861fd5e1e6d4994ede49775c7"></script>
    <script src="<?php echo base_url();?>assets/js/media/bs.media.min.js?h=0f798d9f5542535faa525f98afa9266b"></script>
    <script src="<?php echo base_url();?>assets/js/MUSA_product-display.js?h=cd32e2d33a6196668bb291183fd075af"></script>
    <script src="<?php echo base_url();?>assets/js/product.services/sidber.accordion.min.js?h=1a6cc8c1fc8a14e9a04ef4f0c36a6015"></script>
    <script src="<?php echo base_url();?>assets/js/profile.preview.js?h=cfafe20671a6f7907a0ff948d4a82e8e"></script>
    <script src="<?php echo base_url();?>assets/js/rating.sys/rating.sys.min.js?h=2c394aa1685997c37b77172eebac64b9"></script>
    <script src="<?php echo base_url();?>assets/js/request.forms/modal.min.js?h=1c1d14d2f2e444d1d2d40a3ada18a58e"></script>
    <script src="<?php echo base_url();?>assets/js/bs-animation.js?h=98fdbbd86223499341d76166d015c405"></script>
    <script src="<?php echo base_url();?>assets/js/giolocator/locator.min.js?h=73f2f517b6fc915b40dcd4fcb73420af"></script>
    <script src="<?php echo base_url();?>assets/js/modal-dailog/ibox.js?h=1fcbdbae208e2d19ae41700c853516c4"></script>
    <script src="<?php echo base_url();?>assets/js/simplify.request.service.min.js?h=81ca2c2d0cf5ff1b8506e535380990ed"></script>
</body>

</html>