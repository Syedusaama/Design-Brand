        // Get the modal
        var modal = document.getElementById("videoModal");

        // Get the button that opens the modal
        var btn = document.getElementById("openModalBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "flex";
        }

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
            var video = modal.getElementsByTagName("video")[0];
            video.pause();
            video.currentTime = 0;
        }