<section id="awards" style="background: #fff;" class="  pb-2 pt-4 container-fluid">

    <div class="container" style=" padding:0; margin-bottom:20px ">
        <div class="d-flex justify-content-between align-items-center pt-4">

            <h1>Awards & Recognition</h1>
            <img src="{{ asset('frontend/assets/images/six-dots.png') }}" style="width: 30px; height:40px;" alt="">
        </div>

            <div class="col-12  ">
                <div class="row image">
                    <div class="col-md-6">

                        <img src="{{ asset('frontend/assets/images/awards/awards1.png') }}" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('frontend/assets/images/awards/awards2.png') }}" alt="">

                    </div>
                </div>




            </div>






    </div>
</section>
<style>
     #awards .image {
         border:3px solid gold;
         border-radius: 10px;
         padding: 20px;
    }
    #awards img {
      width: 100%;
      height: 100%;
    }

    .border-custom {
        margin-top: 10px;
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
