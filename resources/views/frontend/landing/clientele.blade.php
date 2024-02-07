<section id="clientele" style="background: #fff;" class="section mission  pb-2 pt-5 container-fluid">

    <div class="container" style=" padding:0; margin-bottom:20px ">
        <div class="d-flex justify-content-between align-items-center pt-4">

            <h1>CLIENTELE</h1>
            <img src="{{ asset('frontend/assets/images/six-dots.png') }}" style="width: 30px; height:40px;" alt="">
        </div>
        <div>
            <div class="h3 border-bottom border-primary">STRUCTURAL - DIVISION</div>
            <div class="image-container">
                <img src="{{ asset('frontend/assets/images/clients/tata_project_limited.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/reyssinet.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/simplex.png') }}" alt="">
                <div>
                    <img src="{{ asset('frontend/assets/images/clients/binani.png') }}" alt="">
                    <img src="{{ asset('frontend/assets/images/clients/simens.png') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('frontend/assets/images/clients/ambuja_neotia.png') }}" alt="">
                    <img src="{{ asset('frontend/assets/images/clients/sandvik.png') }}" alt="">
                </div>
            </div>
            <div class="image-container">
                <img src="{{ asset('frontend/assets/images/clients/westin.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/shapoorji.png') }}" alt="">
                <div>

                    <img src="{{ asset('frontend/assets/images/clients/comaco.png') }}" alt="">
                    <img src="{{ asset('frontend/assets/images/clients/macmet.png') }}" alt="">
                </div>
                <img src="{{ asset('frontend/assets/images/clients/godrej.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/oceonic.png') }}" alt="">
            </div>
            <div class="image-container">
                <img src="{{ asset('frontend/assets/images/clients/purusri.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/ztech.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/times_of_india.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/jindal.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/reinforced_earth.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/geosys.png') }}" alt="">


            </div>
        </div>
        <div class="border-custom">
            <div class="h3 border-bottom border-primary mt-4">CIVIL - DIVISION</div>
            <div class="image-container nowrap">
                <img src="{{ asset('frontend/assets/images/clients/eden_reality.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/wipro.png') }}" alt="">

                <img src="{{ asset('frontend/assets/images/clients/alcove.png') }}" style="width: 200px"
                    alt="">


                <img src="{{ asset('frontend/assets/images/clients/bengal_nri.png') }}" style="width: 200px"
                    alt="">
                <img src="{{ asset('frontend/assets/images/clients/sugam.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/tata_housing.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/hiland.png') }}" style="width: 100px"
                    alt="">



            </div>
        </div>
        <div class="border-custom">
            <div class="h3 border-bottom border-primary mt-4 ">INDUSTRIAL - DIVISION</div>
            <div class="image-container nowrap">
                <img src="{{ asset('frontend/assets/images/clients/berger.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/voith.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/lt.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/aditya_birla.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/tarsons.png') }}" alt="">
            </div>
        </div>
        <div class="border-custom">
            <div class="h3 border-bottom border-primary mt-4">ELECTRICAL - DIVISION</div>
            <div class="image-container ">
                <img src="{{ asset('frontend/assets/images/clients/indian_oil.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/pdd.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/websetcl.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/indu.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/cesc.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/finolex.png') }}" alt="">
            </div>
            <div class="image-container ">
                <img src="{{ asset('frontend/assets/images/clients/power_grid.png') }}" alt="">
                <div>
                    <img src="{{ asset('frontend/assets/images/clients/abb.png') }}" alt="">
                    <img src="{{ asset('frontend/assets/images/clients/la_cable.png') }}" alt="">
                </div>
                <img src="{{ asset('frontend/assets/images/clients/cable_corporation.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/kec.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/areva.png') }}" alt="">
            </div>
        </div>
        <div class="border-custom">
            <div class="h3 border-bottom border-primary my-4">ARCHITECTURAL/FINISHES - DIVISION</div>
            <div class="image-container ">
                <img src="{{ asset('frontend/assets/images/clients/candor.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/gsi.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/tollygunge_club.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/wipro.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/clients/afcons.png') }}" alt="">
            </div>
        </div>



    </div>
</section>
<style>
    .image-container {
        display: flex;
        flex-flow: row wrap;
        justify-content: space-around;
    }
.border-custom{
    margin-top:10px;
    border-top: 10px solid #043a65;

}
    .nowrap {
        flex-flow: row nowrap;
    }

    .image-container>img {
        height: 100px;
    }

    .image-container>div {
        display: flex;
        flex-flow: column nowrap;
        justify-content: center;
        align-items: center;
        height: 100px;
    }

    .image-container>div>img {
        height: 50px;
    }
</style>
