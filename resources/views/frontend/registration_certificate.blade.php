@extends('frontend.template.master')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <style>
        .box-block {
          padding: 10px;
          width: 80%;
          margin: 10px auto 20px;
          background: rgba(243, 242, 242, 0.96);
          border-radius: 10px;
          box-shadow: 0 0 3px 2px #1797f884;

      }
      .box-block i{
          color:#e43f0d;
      }
      .box-shadow .img{
        box-shadow: 0 0 5px 2px #1797f884;
        cursor: pointer;
      }
      .box-shadow .img:hover{
        box-shadow: 0 0 10px 2px #1797f884;

      }
    </style>

        <section class="section video registration" data-section="section5" id="section5">
            <div class="left-content  " style="text-align:center;">

                <h4 class="mt-3  align-self-center text-dark">
                    Registration and Certificates
                </h4>

            </div>
            <div class="container box-block">
                <div class="row  ">
                    <div class="col-md-6 col-lg-4 box-shadow">
                        <div class="position-relative m-4">
                            <img class="img rounded w-100" src="{{ asset('frontend/assets/images/Award1.jpg')}}" data-toggle="modal"
                                data-target="#exampleModalCenter">
                            <div class="d-none text-dark font-bold w-100   text-center  rounded  py-1 px-2 position-absolute"
                                style="height:80px; bottom:0; font-weight:bold; background-color:rgba(200,200,0,0.5);">
                                India Best 5000 MSME Award 2020
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-4  box-shadow">
                        <div class="position-relative m-4">
                            <img class="img rounded w-100" src="{{ asset('frontend/assets/images/UDYAM_REGISTRATION_CERTIFICATE1.jpg')}}"
                                data-toggle="modal" data-target="#exampleModalCenter">
                            <div class="d-none text-dark font-bold w-100   text-center  rounded  py-1 px-2 position-absolute"
                                style="height:80px; bottom:0; font-weight:bold; background-color:rgba(200,200,0,0.5);">
                                India Best 5000 MSME Award 2020
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-4  box-shadow">
                        <div class="position-relative m-4">
                            <img class="img rounded w-100" src="{{ asset('frontend/assets/images/India_Best_5000_MSME_2020_Award_Certificate.png')}}"
                                data-toggle="modal" data-target="#exampleModalCenter">
                            <div class="d-none text-dark font-bold w-100   text-center  rounded  py-1 px-2 position-absolute"
                                style="height:80px; bottom:0; font-weight:bold; background-color:rgba(200,200,0,0.5);">
                                India Best 5000 MSME Award 2020
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4 box-shadow">
                        <div class="position-relative m-4">
                            <img class="img rounded w-100" src="{{ asset('frontend/assets/images/India_Best_5000_MSME_2020_Award_Trophy1.png')}}"
                                data-toggle="modal" data-target="#exampleModalCenter">
                            <div class="d-none text-dark font-bold w-100   text-center  rounded  py-1 px-2 position-absolute"
                                style="height:80px; bottom:0; font-weight:bold; background-color:rgba(200,200,0,0.5);">
                                Indian Achivers’ Award 20-21 by Indian Achievers’ Forum
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4  box-shadow">
                        <div class="position-relative m-4 ">
                            <img class="img rounded w-100" src="{{ asset('frontend/assets/images/ISO-RAINBOW.jpg')}}" data-toggle="modal"
                                data-target="#exampleModalCenter">
                            <div class="d-none text-dark font-bold w-100   text-center  rounded  py-1 px-2 position-absolute"
                                style="height:80px; bottom:0; font-weight:bold; background-color:rgba(200,200,0,0.5);">
                                We are Licensed Electrical Contractor
                                (License No: 20150104226) from Govt. of West Bengal
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4   box-shadow">
                        <div class="position-relative m-4">
                            <img class="img rounded w-100" src="{{ asset('frontend/assets/images/MSME_Registration.jpg') }}" data-toggle="modal"
                                data-target="#exampleModalCenter">
                            <div class="d-none text-dark font-bold w-100   text-center  rounded  py-1 px-2 position-absolute"
                                style="height:80px; bottom:0; font-weight:bold; background-color:rgba(200,200,0,0.5);">
                                We are Registered with Ministry of Micro, Small & Medium Enterprise (MSME)
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4  box-shadow">
                        <div class="position-relative m-4">
                            <img class="img rounded w-100" src="{{ asset('frontend/assets/images/Electrical_License_Rainbow_Renewal.jpg')}}"
                                data-toggle="modal" data-target="#exampleModalCenter">
                            <div class="d-none text-dark font-bold w-100   text-center  rounded  py-1 px-2 position-absolute"
                                style="height:80px; bottom:0; font-weight:bold; background-color:rgba(200,200,0,0.5);">
                                We are Licensed Electrical Contractor
                                (License No: 20150104226) from Govt. of West Bengal
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>

            $(document).ready(function() {

                $(".img").click(function(e) {

                    url = e.target.src;

                    $("#ModalImage").attr('src', url);

                    $("#imageModalCenter").show();

                });


            });
        </script>

@endsection
