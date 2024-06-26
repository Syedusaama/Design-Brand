<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./components/head.php"?>
</head>
<body>
<!-- Main Header -->
<?php include "./components/header.php"?>
<!-- Main Header -->
<!-- Banner -->
<section class="contact-banner">
    <div>
    <div class="inner-bann-heading">
        <div class="row">
        <div class="col-md-8 inner-bann-heading">
                <h1>Design Ideas Brewing? <br>Let's  <span class="subheading-clr">Connect</span></h1>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</div>
</section>
<!-- Banner -->

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container p-0">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-8 ">
                <div class="contact-page__right">
                    <form class="comment-one__form contact-form-validated form-get-quote" action="javascript:void(0)">
                        <div class="contact-content">
                            <h1>Connect for Quality Designs</h1>
                            <p>Transform Your Vision into Reality - Get in Touch with Us Now!</p>
                        </div>
                        <div class="color-contact">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Your name" name="quote[name]"> 
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="Email address" name="quote[email]"> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Phone number" name="quote[phone]"> 
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Subject" name="quote[subject]">
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="comment-form__input-box">
                                    <textarea name="quote[message]" placeholder="Write message"></textarea>
                                </div>
                                <button type="submit" class="header-btn comment-form__btn">Submit Comment</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-6 col-lg-4">
                <div class="contact-page__left">
                    <img src="./assets/images/contact-girl.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Page Start-->

<!-- Footer section-->
<?php include "./components/footer.php"?>
<!-- Footer section-->

<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/custom.js"></script>
<script>
    new WOW().init();
</script>
<script src="https://cdn.lordicon.com/lordicon.js"></script>
</body>
</html>