<section class="main-footer">
    <div class="footer-body">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="logotext-box">
                <a href="./index.php" class="navbar-brand logo" href="#"><img src="./assets/images/footer-logo.png" alt=""></a>      
                <!-- <img src="./assets/images/footer-logo.png" alt=""> -->
                <p>We're your all-in-one digital team, specializing in branding, marketing, web design, and development. From startups to established businesses, we've got you covered every step of the way.</p>
            </p>
            </div>
        </div>
            <div class="col-lg-2 col-md-6">
                <div class="footer-inner-box">
                    <h3 class="">Menu</h3>
                    <ul class="list-style">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./about-us.php">About Us</a></li>
                    <li><a href="./reviews.php">Reviews</a></li>
                    <li><a href="./contact.php">Contact us</a></li>
                    <li><a href="./term-and-conditions.php">Terms & Condition</a></li>
                    <li><a href="./privacy-policy.php">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-inner-box">
                    <h3 class="">Services</h3>
                    <ul class="list-style">
                    <li><a href="./logo-design.php">Logo design</a></li>
                    <li><a href="./branding.php">Branding</a></li>
                    <li><a href="./web-design-development.php">Web design & development</a></li>
                    <li><a href="./animated-video.php">Video animation</a></li>
                    <li><a href="./business-marketing.php">Business marketing</a></li>
                    <li><a href="./social-media.php">Social Media</a></li>
                    <li><a href="./book-cover-design.php">Book Cover Design</a></li>
                    <li><a href="./book-writing.php">Book Writing</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-inner-box">
                    <h3 class="">Quick Links</h3>
                    <ul class="list-style">
                    <li><a href="#">1999 Broadway, Denver, CO 80202, USA</a></li>
                    <li><a href="#">info@globaldesignagency.com</a></li>
                    <li><a href="tel:17203863784">172-038-63784</a></li>
                    <img src="./assets/images/US-Payments-2.png" alt="">
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="footer-end">
        <p>© Copyright 2024 by Global <span style="color:#FF7400">Design</span> Agency</p>
    </div>
</section>

<!-- // Get the image element -->
<script>
const gifElement = document.getElementById('gifImage');

// Function to restart the GIF
function restartGif() {
    // Create a new URL object to force the browser to reload the image
    const gifUrl = gifElement.src.split('?')[0];
    gifElement.src = gifUrl + '?' + new Date().getTime();
}

// Set the interval to restart the GIF every 5 seconds (5000 milliseconds)
setInterval(restartGif, 7000);
</script>

<script src="./assets/js/jquery.js"></script>
<script src="./assets/js/custom.js"></script>
<script>
    new WOW().init();
</script>
<script src="https://cdn.lordicon.com/lordicon.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
      $('.form-get-quote').on('submit', function (e) {
          // if ($('#phone').val().length != 14) {
          //     $('#phone').focus();
          //     return false;
          // }
          var obj = $(this);
          e.preventDefault();
          var data = $(obj).serialize();
          jQuery.ajax({
              url: "sendmail",
              type: "POST",
              data: data,
              async: false,  // Has to be false to be able to return response
              dataType: "json",  // Has to be false to be able to return response
              success: function (response) {
                  if (response.status == 1) {
                        window.location = 'thankyou.php';
                      // alert('Thank You');
                      obj.trigger("reset");
                  }
                  else {
                      return false;
                  }

              },
              beforeSend: function () {
                  // Loader.show();
              }
          });

          return false;
      });
</script>

    <!-- The Modal -->
    <div id="videoModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <video id="modalVideo" controls>
                <img src="assets/images/video-marketing.png" alt="">
                <source src="" type="video/mp4">
                Your browser does not support the video tag.
            </video>
    </div>
    </div>
    <!-- The Modal -->
<script src="./script.js"></script>