<!-- Footer -->
<footer class="page-footer  font-small mdb-color pt-2 pb-3 text-white">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Footer links -->
        <div class="row text-center text-md-left mt-1 pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto mt-2">
                <h6 class="text-uppercase mb-1 font-weight-bold">Company name</h6>
                <p><a href="/">{{env('ORG_NAME') }}</a></p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">


            <hr class="w-100 clearfix d-md-none">

            <div class="col-md-3 mx-auto mt-2">
                <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                <ul>
                    <li class="pt-3">
                        <a href="{{ route('cmd') }}">Your Account</a>
                    </li>

                    <li class="pt-3">
                        <a href="/">Home</a>
                    </li>
                    <li class="pt-3">
                        <a href="{{ route('home',['#business']) }}" onclick="document.getElementById('close-sidebar').click();">Business</a>
                    </li>
                    <li class="pt-3">
                        <a href="{{ route('home',['#newsroom']) }}" onclick="document.getElementById('close-sidebar').click()";> News Room</a>
                    </li>
                    <li class="pt-3">
                        <a href="{{ route('home',['#gallery']) }}" onclick="document.getElementById('close-sidebar').click()";> Gallery</a>
                    </li>
                    <li class="pt-3">
                        <a href="{{route('career')}}"> Career</a>
                    </li>
                </ul>
            </div>

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto mt-2">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <ul>
                    <li>
                        <i class="fa fa-home mr-3 "></i>
                        {{-- {{env('ORG_ADDRESSLINE1') }} <br>
                          &nbsp &nbsp &nbsp &nbsp {{env('ORG_ADDRESSLINE2') }}, <br>
                          &nbsp &nbsp &nbsp &nbsp {{env('ORG_PIN') }} <br>
                          &nbsp &nbsp &nbsp &nbsp {{env('ORG_STATE_COUNTRY') }} --}}
<pre class="text-white overflow-hidden text-sm">
Unit No A3, Rishi Tech Park
Plot No 02-360, Street No 360
Action Area - ID, New Town
(Behind TATA Memorial Cancer Hospital)
Kolkata, West Bengal 700160, India
</pre>
                    </li>
                    <li>
                        <i class="fa fa-envelope mr-3"></i>{{env('ORG_EMAIL') }}
                    </li>
                    <li>
                        <i class="fa fa-phone mr-3"></i> {{env('ORG_CONTACT') }}
                    </li>
                    <!-- <li>
                        <i class="fa fa-print mr-3"></i> + 01 234 567 89
                    </li> -->
                </ul>
            </div>
            {{-- <div class="col-md-3 mx-auto mt-2">
                <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                <ul>
                    <li>
                        <a href="{{ route('cmd') }}">Your Account</a>
                    </li>

                    <li>
                        <a href="#!">Help</a>
                    </li>
                </ul>
            </div> --}}

        </div>
        <hr class="bg-white">
         <!-- Social buttons -->
         <div class="col-md-12 text-center text-md-center ">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                    <a target="_blank" href="https://www.facebook.com/groups/341499523210495" class="btn-floating   rgba-white-slight mx-1 waves-effect waves-light">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://twitter.com/pvt_rainbow" target="_blank" class="btn-floating   rgba-white-slight mx-1 waves-effect waves-light">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.youtube.com/channel/UC4H9rBqgSqLOi8MFqp6ehaA" target="_blank" class="btn-floating   rgba-white-slight mx-1 waves-effect waves-light">
                        <i class="fa fa-youtube"></i>
                    </a>
                </li>

            </ul>
        </div>

        <!-- Footer links -->

        <hr>
        <!--Copyright-->
        <div class="col-md-12 text-center text-md-center" style="font=size:6px;font-weight:200;">© Copyright {{date('Y')}} by
            Rainbow Infrastructure Pvt. Ltd.
            All Rights Reserved.<br>
            Design:<a href="https://rainbw.ctrlaltfix.co.in/" rel="sponsored" target="_parent"> Techcare</a>
            Distributed By: <a href="https://rainbw.ctrlaltfix.co.in/" rel="sponsored" target="_blank">Techcare</a>

        </div>



    </div>
    <!-- Footer Links -->
    <button
        type="button"
        class="btn btn-info btn-floating1 btn-lg"
        id="btn-back-to-top"
        >
  <i class="fa fa-arrow-up"></i>
</button>
</footer>
<!-- Footer -->
<style>

#btn-back-to-top {
  position: fixed;
  bottom: 20px;
  right: 20px;
  display: none;
  scroll-behavior:smooth;

}
}
.btn-floating {
    position: relative;
    z-index: 1;
    display: inline-block;
    padding: 0;
    margin: 10px;
    overflow: hidden;
    vertical-align: middle;
    cursor: pointer;
    border-radius: 50%;
    -webkit-box-shadow: 0 5px 11px 0 rgb(0 0 0 / 18%), 0 4px 15px 0 rgb(0 0 0 / 15%);
    box-shadow: 0 5px 11px 0 rgb(0 0 0 / 18%), 0 4px 15px 0 rgb(0 0 0 / 15%);
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    width: 47px;
    height: 47px;
}

.waves-effect {
    position: relative;
    overflow: hidden;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
}

.btn-floating.btn-sm i {
    font-size: .96154rem;
    line-height: 36.15385px;
}

.btn-floating i {
    display: inline-block;
    width: inherit;
    color: #fff;
    text-align: center;
}

.btn-floating i {
    font-size: 1.30rem;
    line-height: 47px;
}

.btn-floating>a {
    font-size: 15px;
    width: 36px;
    height: 36px;
    line-height: 36px;
    display: inline-block;
    text-align: center;
    border-radius: 50%;
    box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.4);
    margin: 0 8px;
    color: #fff;
    opacity: 0.75;
}

.btn-floating>a:hover {
    opacity: 0.9;
}

.fab {
    font-family: "Font Awesome 5 Brands";
}

.fa,
.fab,
.fad,
.fal,
.far,
.fas {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1;
}

#scroll {
    position:fixed;
    right:10px;
    bottom:10px;
    cursor:pointer;
    width:50px;
    height:50px;
    background-color:#3498db;
    text-indent:-9999px;
    display:none;
    -webkit-border-radius:60px;
    -moz-border-radius:60px;
    border-radius:60px
}
#scroll span {
    position:absolute;
    top:50%;
    left:50%;
    margin-left:-8px;
    margin-top:-12px;
    height:0;
    width:0;
    border:8px solid transparent;
    border-bottom-color:#ffffff;
}
#scroll:hover {
    background-color:#e74c3c;
    opacity:1;filter:"alpha(opacity=100)";
    -ms-filter:"alpha(opacity=100)";
}
</style>
<script>
//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
