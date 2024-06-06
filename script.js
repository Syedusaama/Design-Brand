      // Get the modal
      var modal = document.getElementById("videoModal");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // Get the video element inside the modal
      var modalVideo = document.getElementById("modalVideo");

      // Get all the images in the gallery
      var galleryImages = document.querySelectorAll('.gallery1 img');

      // Add click event to each image
      galleryImages.forEach(function(image) {
          image.onclick = function() {
              var videoSrc = this.getAttribute('data-video');
              modalVideo.querySelector('source').setAttribute('src', videoSrc);
              modalVideo.load();
              modal.style.display = "flex";
          }
      });

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
          modal.style.display = "none";
          stopVideo();
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
              stopVideo();
          }
      }

      // Function to stop the video when the modal is closed
      function stopVideo() {
          modalVideo.pause();
          modalVideo.currentTime = 0;
      }