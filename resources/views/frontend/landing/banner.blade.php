<section class="section main-banner" id="section1" data-section="section1">
    {{-- <video  autoplay muted loop id="bg-video" > --}}
    {{-- <source src="{{ asset('frontend/assets/images/bg.mp4') }}" type="video/mp4" /> --}}
    {{-- <source src="https://youtu.be/5apTqpDZRUM" type="video/mp4" />
    </video> --}}
    <div style="position: fixed; z-index: -99; width: 100%; height: 100%">
        {{-- <iframe frameborder="0" height="100%" width="100%"
          src="https://youtube.com/embed/ID?autoplay=1&controls=0&showinfo=0&autohide=1">
        </iframe> --}}
        {{-- <iframe id="video-background" src="https://www.youtube.com/embed/BrCKvKXvN2c?list=RDgfwMBzGA_Jo" frameborder="0"
        height="100%" width="100%"
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe> --}}
             <iframe width="100%" height="100%" src="https://www.youtube.com/embed/5apTqpDZRUM?autoplay=1&loop=1&rel=0&mute=1&playlist=5apTqpDZRUM"
            title="Web cover video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <style>
        #bg-video {}
    </style>
    //jquery link
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        let vid = document.getElementById("bg-video");
        vid.playbackRate = 0.5;
        // function getPlaySpeed() {
        //   alert(vid.playbackRate);
        // }

        // function setPlaySpeed() {
        //   vid.playbackRate = 0.5;
        // }
        jQuery(function() {

            // Youtube player
            window.videoPlayer;

            window.onYouTubeIframeAPIReady = function() {
                var videoPlayerId = $('#videoPlayer').attr('data-videoid');
                window.videoPlayer = new YT.Player('videoPlayer', {
                    height: '1080',
                    width: '1920',
                    videoId: videoPlayerId,
                    playerVars: {
                        'controls': 0,
                        'autoplay': 1,
                        'mute': 1,
                        'loop': 1,
                        'showinfo': 0,
                        'modestbranding': 1
                    },
                    events: {
                        'onReady': onVideoPlayerReady,
                        'onStateChange': onVideoPlayerReady
                    }
                });
            }

            function onVideoPlayerReady(event) {
                videoPlayer.playVideo();
            }
        });
    </script>

    <div class="video-overlay header-text">
        <div class="caption">
            {{-- <h6>Executive Summary</h6> --}}
            <h2><em>Trade where we Trade </em>
                <h4 class="text-white font-weight-bold" style="text-shadow: 1px 3px 5px #0d173e;">Founded in the year
                    2005</h4>
            </h2>
            <div class="main-button my-5">
                <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
            </div>
        </div>
    </div>
</section>
