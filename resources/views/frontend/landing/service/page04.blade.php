<style>
    .font-240 {
        font-size: 3rem;
        padding: 2rem 4rem;
        line-height: 8rem;
    }

    section.service .bg-image {
        width: 100%;
        height: 30rem;
        opacity: 0.3;

        /* position: absolute; */
    }

    section.service {
        background-color: #fbf5e8;
        padding: 120px 0px;
        width: 100%;
        background: #fff;
        /* background: url(../images/bg9.jpg); */
        background-repeat: no-repeat;
        background-size: cover;
    }

    section.service .header-block {
        padding: 10px;
        width: 80%;
        margin: 0 auto 10px;
        background: rgba(243, 242, 242, 0.96);
        border-radius: 10px;
        box-shadow: 0 0 7px 2px #1797f884;

    }

    section.service .header-block .header {
        font-size: 1.5rem;
        font-weight: bold;
        border-bottom: 2px solid #0d842366
    }

    section.service .header-block .content {
        padding: 5px 10px;
        font-size: 1rem !important;
        font-weight: normal;
    }

    section.service .header-block .content ul {
        list-style: none;
        padding-left: 10px;
        margin-top: 10px;
    }

    section.service .header-block .content li {
        position: relative;
        padding-left: 1rem !important;
        /* space to preserve indentation on wrap */
        text-align: justify;
        line-height: 1.8rem;
    }

    section.service .header-block .content ul li:before {
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

    .row-image .image-block {

        padding: 5px 5px;

        height: 12rem;
        border-radius: 5px;
        position: relative;
    }
    .row-image .image-block .image-number {
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
    .bg-light-content{
        background-color: lavender;
        padding: 10px;
        font-size:1.2rem;
        margin: 5px auto;
        border-radius: 10px;

    }
    @media(max-width:480px) {
        .font-240 {
            font-size: 3rem !important;
            padding: 1rem 4rem;
            line-height: 3.5rem;
        }
        section.service .bg-image {
        width: 100%;
        height: 45rem;
        opacity: 0.3;

        /* position: absolute; */
        }
        .row-image .image-block {

            padding: 5px 5px;

            height: 15rem;
            border-radius: 5px;
            overflow: hidden;
        }
    }
</style>
<section id="servicepage_04" class=" service pb-2 pt-0 container-fluid">

    <div class="container " style="background-color: #ffffff; padding:0;color:rgb(49, 53, 58)">
        <!-- <h4 class="text-white"><em>Mission & Vision</em></h4> -->
        <div class=" ">

            <div class=" position-relative d-flex flex-column justify-content-between align-items-center py-4 z-100">
                <img class="bg-image w-100" src="{{ asset('frontend/assets/images/vision.png') }}" alt="">
                <div class="position-absolute w-100 d-flex flex-column justify-content-between align-items-center pt-4  "
                    style=" opacity:1">
                    <div class="w-100 d-flex justify-content-between align-items-center px-4">
                        <div class=" h2  underline base-color " data-aos="fade-left flip-right"
                            style="font-size: 4rem;
                            font-weight:bold; color:#1c54d6!important; ">
                            Service</div>
                        <img src="{{ asset('frontend/assets/images/six-dots.png') }}" style="width: 30px; height:40px;"
                            alt="">
                    </div>
                    <div class="header-block">
                        <div class="header">CIVIL - DIVISION</div>

                        <div class="content">
                            <div>Housing and social sector have been our focus since inception. The activities of Rainbow in this sector revolve with the following units:
                            </div>
                            <ul>

                                <li> Project based Housing
                                </li>
                                <li>Community Residential Unit
                                </li>
                                <li>Commercial Building like Office, Shopping complex etc.
                                </li>
                                <li>Hotels
                                </li>


                            </ul>


                        </div>



                    </div>

                </div>

            </div>
            <div class="content-block ">
                <div class="content-header"> COMPLETED PROJECTS</div>

                <div class="col-12 w-100 h-100">
                    <div class="row row-image">
                        <div class="col-md-3 image-block">
                            <img src="{{ asset('frontend/assets/images/services/service27.png') }}"
                                alt="">
                                <div class="image-number">1</div>
                        </div>
                        <div class="col-md-3 image-block">
                            <img src="{{ asset('frontend/assets/images/services/service28.png') }}"
                                alt="">
                                <div class="image-number">2</div>
                        </div>
                        <div class="col-md-3 image-block">
                            <img src="{{ asset('frontend/assets/images/services/service29.png') }}"
                                alt="">
                                <div class="image-number">3</div>
                        </div>

                    </div>
                    <div class="row row-image">
                        <div class="col-md-3 image-block">
                            <img src="{{ asset('frontend/assets/images/services/service30.png') }}"
                                alt="">
                                <div class="image-number">4</div>
                        </div>
                        <div class="col-md-3 image-block">
                            <img src="{{ asset('frontend/assets/images/services/service31.png') }}"
                                alt="">
                                <div class="image-number">5</div>
                        </div>
                        <div class="col-md-6 image-block">
                            <div class="bg-light-content">
                            <ol >
                                <li>SOLARIS 1</li>
                                <li>SUGAM HABITATE</li>
                                <li>HIGHLAND GREEN</li>
                                <li>SOLARCITY SERAMPORE</li>
                                <li>SUGAM PARK - ASSANSOL</li>
                            </ol>
                        </div>
                        </div>


                    </div>

                </div>
                <div class="content-header"> ONGOING PROJECTS</div>
                <div class="col-12 w-100 h-100">
                    <div class="row row-image">
                        <div class="col-md-3 image-block">
                            <img src="{{ asset('frontend/assets/images/services/service32.png') }}"
                                alt="">
                                <div class="image-number">1</div>
                        </div>
                        <div class="col-md-3 image-block">
                            <img src="{{ asset('frontend/assets/images/services/service33.png') }}"
                                alt="">

                                <div class="image-number">2</div>
                        </div>

                        <div class="col-md-3 image-block">
                            <img src="{{ asset('frontend/assets/images/services/service34.png') }}"
                                alt="">
                                <div class="image-number">3</div>
                        </div>
                        <div class="col-md-3 image-block">
                            <img src="{{ asset('frontend/assets/images/services/service35.png') }}"
                                alt="">

                                <div class="image-number">4</div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 bg-light-content">
                           1. SOLARIS SHALIMAR- TOWER 1
                           2. SOLARIS SHALIMAR - TOWER 3&4
                           3. COMMERCIAL BUILDING FOR
                                   ALCOVE
                            4.    HOTEL PROJECT - ULTIMATE 17
                        </div>
                    </div>
                </div>
            </div>

        </div>
</section>
