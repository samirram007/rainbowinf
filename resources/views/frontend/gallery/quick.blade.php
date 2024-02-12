<style>
    .font-240 {
        font-size: 3rem;
        padding: 2rem 4rem;
        line-height: 8rem;
    }

    #gallery.gallery .bg-image {
        width: 100%;
        height: 140vh;
        opacity: 0.3;

        /* position: absolute; */
    }

    #gallery.gallery {
        background-color: #fbf5e8;
        padding: 120px 0px;
        width: 100%;
        background: #fff;
        /* background: url(../images/bg9.jpg); */
        background-repeat: no-repeat;
        background-size: cover;
    }

    #gallery.gallery .header-block {
        padding: 10px;
        width: 80%;
        margin: 0 auto 10px;
        background: rgba(243, 242, 242, 0.96);
        border-radius: 10px;
        box-shadow: 0 0 7px 2px #1797f884;

    }

    #gallery.gallery .header-block .header {
        font-size: 1.5rem;
        font-weight: bold;
        border-bottom: 2px solid #0d842366
    }

    #gallery.gallery .header-block .content {
        padding: 5px 10px;
        font-size: 1rem !important;
        font-weight: normal;
    }

    #gallery.gallery .header-block .content ul {
        list-style: none;
        padding-left: 10px;
        margin-top: 10px;
    }

    #gallery.gallery .header-block .content li {
        position: relative;
        padding-left: 1rem !important;
        /* space to preserve indentation on wrap */
        text-align: justify;
        line-height: 1.8rem;
    }

    #gallery.gallery .header-block .content ul li:before {
        content: '✓';
        color: #4c8108;
        font-weight: bold;
        position: absolute;
        left: -10px;
        /* place the SVG at the start of the padding */
        width: 1em;
        height: 1em;
    }

    .content-block {
        width: 100%;
    }

    .content-header {
        background-color: #0d2b72;
        font-size: 1.5rem;
        color: #fff;
        font-weight: bold;
        padding: 5px 10px;
    }

    .row-image {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;

    }

    #gallery .row-image .image-block {

        padding: 5px 5px;

        height: 18rem;
        border-radius: 5px;
        position: relative;
    }

    .row-image .image-block-full-h {

        padding: 5px 5px;

        height: 24rem;
        border-radius: 5px;
        position: relative;
    }

    .row-image .image-block .image-number,
    .row-image .image-block-full-h .image-number {
        position: absolute;
        padding: 5px 5px;

        height: 50px;
        width: 50px;
        bottom: 10px;
        left: 10px;
        background-color: #1c54d6;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1rem;
        font-weight: bolder;
        border-radius: 50%;
    }

    .row-image img {
        width: 100%;
        height: 100%;
        border-radius: 5px;
    }

    .row {
        margin-inline: 0;
        margin-left: 0;
        margin-right: 0;
    }

    .bg-light-content {
        background-color: lavender;
        padding: 10px;
        font-size: 1.2rem;
        margin: 5px auto;
        border-radius: 10px;

    }

    @media(max-width:480px) {
        .font-240 {
            font-size: 3rem !important;
            padding: 1rem 4rem;
            line-height: 3.5rem;
        }

        #gallery.gallery .bg-image {
            width: 100%;
            height: 80vh;
            opacity: 0.2;

            /* position: absolute; */
        }

        .row-image .image-block {

            padding: 5px 5px;

            height: 15rem;
            border-radius: 5px;
            overflow: hidden;
        }

        .row-image .image-block-full-h {

            padding: 5px 5px;

            height: 30rem;
            border-radius: 5px;
            overflow: hidden;
        }
    }
</style>
<section id="gallery" class="section gallery position-relative  pb-5 container-fluid ">
    <img class="position-absolute bg-image w-100" src="{{ asset('frontend/assets/images/vision.png') }}" alt="">
    <div class="container " style="background-color: #ffffff; padding:0;color:rgb(49, 53, 58)">
        <!-- <h4 class="text-white"><em>Mission & Vision</em></h4> -->
        <div class=" border-top border-secondary">
            <div class=" position-relative d-flex flex-column justify-content-between align-items-center py-4 z-100">

                <div class=" w-100 d-flex flex-column justify-content-between align-items-center pt-4  "
                    style=" opacity:1">
                    <div class="w-100 d-flex justify-content-between align-items-center px-4">
                        <div class=" h2  underline base-color " data-aos="fade-left flip-right"
                            style="font-size: 4rem;
                            font-weight:bold; color:#1c54d6!important; ">
                            Gallery</div>
                        <img src="{{ asset('frontend/assets/images/six-dots.png') }}" style="width: 30px; height:40px;"
                            alt="">
                    </div>


                </div>
                <div class="content-block ">
                    <div class="col-md-12   d-flex flex-wrap">

                        @foreach ($gallery as $key => $album)
                            <div class="col-md-4  ">
                                <a href="{{ route('frontend.view.album', $album->id) }}">
                                    <div class="item" data-aos="fade-left flip-right">

                                        <img src="{{ asset('upload/gallery_images/thumbnail/') }}/{{ $album->image }}"
                                            alt="">

                                        <div class="down-content1 h4 text-center">
                                            {{ $album->name }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach


                    </div>



                </div>
            </div>


        </div>
    </div>
</section>
