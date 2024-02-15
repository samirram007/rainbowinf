@extends('frontend.template.master')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div id="main" class="scroll-container container">

        <section class="section gallery " data-section="section5" id="section5">
            <div class="left-content" style="text-align:center;">
                <a href="{{ route('home', ['#gallery']) }}" class="float-left  text-danger"> {{ __('◄- Back to main') }}</a>
                <h5 class="mt-3  align-self-center">
                    {{-- {{ $album->name }} --}}
                </h5>
            </div>
            <div class="container ">
                <div class="row  ">

                    @forelse ($allData as $key=>$data)

                        <div class="col-md-6 col-lg-4 d-flex " style="gap:10px">
                            <div class=" m-4  " style="width:100%; height:180px; overflow:hidden" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                data-aos-duration="2000">
                                {{-- {{$allData[$key]->image}} --}}
                                <img id="showImage{{ $key }}" class="image thumb-image" data-all="{{ json_encode($allData,true) }}"
                                    data-key="{{ $key }}"
                                    data-previous="{{ $key - 1 < 0 ? count($allData) - 1 : $key - 1 }}"
                                    data-next="{{ $key + 1 >= count($allData) ? 0 : $key + 1 }}"
                                    style=" border:1px solid #000000; width:100%; min-height:100%   "
                                    src="{{ !empty($allData[$key]->image) ? url('upload/gallery_images/thumbnail/' . $allData[$key]->image) : url('upload/no_image.jpg') }}"
                                    alt="" data-toggle="modal" data-target="#imageModalCenter">

                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="modal fade" id="imageModalCenter" tabindex="-1" role="dialog" aria-labelledby="imageModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-free" role="document">

                <div class="modal-content bg-transparent-custom w-100">
                    <div class="modal-footer modal-footer-custom bg-transparent">
                        {{-- previous and next image button --}}
                        <div class=" navigation-left text-light" id="previous"><img src="{{ asset('images/navigation-left.png') }}"
                                alt=""></div>
                        <div class=" navigation-right text-light " id="next"><img src="{{ asset('images/navigation-right.png') }}"
                                alt=""></div>


                        {{-- end of previous and next image button --}}

                        <button type="button" class="btn btn-light sr-only" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                    <div class="modal-header modal-header-custom bg-transparent">
                        {{-- <h5 class="modal-title" id="exampleModalLongTitle"></h5> --}}
                        <button type="button" class="close text-light text-lg" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body mx-auto bg-transparent">
                        <img id="ModalImage" style="max-width:100%;" src="" alt="image content here.">

                    </div>

                </div>
            </div>
        </div>

    </div>
    <style>
        #imageModalCenter {
            height: 100vh;
            width: 100vw;
        }

        #imageModalCenter .modal-free {
            width: 100vw;
            max-width: 100vw;
            height: 100vh;
            margin: 0 auto;
        }

        #imageModalCenter .modal-footer {

            gap: 20px;
        }

        #imageModalCenter #ModalImage {
            height: 80vh;
            max-width: 80% !important;
            border-radius: 5px;
            box-shadow: 0 0 20px 10px #222222b0;
        }
        #imageModalCenter .navigation-left,
        #imageModalCenter .navigation-right {
            user-select: none

        }
        .from_left{
            animation: fromLeft 0.5s ease-in-out 1;
        }
       .from_right{
        animation: fromRight 0.5s ease-in-out 1;
       }

        @keyframes fromLeft {
            0% {
                transform: translateX(-50%);
            }

            100% {
                transform: translateX(0%);
            }

        }
        @keyframes fromRight {
            0% {
                transform: translateX(50%);
            }
            100% {
                transform: translateX(0%);
            }

        }

        .modal-footer,
        .modal-header {
            border-color: #f5eeee10;
        }

        .modal-body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-header-custom {
            z-index: 10002;
        }

        .modal-footer-custom {
            position: absolute;
            height: 100vh;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            z-index: 10001;
            margin: 0;
        }

        .modal-footer-custom>#next {

            cursor: pointer;
        }

        .modal-footer-custom>#previous {

            cursor: pointer;
        }

        .bg-transparent-custom {
            background-color: #000000a2 !important;
            height: 100vh;
        }

        #next,
        #previous {
            pointer-events: none;
            opacity: 0.3;
        }

        #next.active,
        #previous.active {
            pointer-events: auto;
            opacity: 1;
        }

        .feedback img {
            height: 5rem;


        }

        /* media query */
        @media (max-width: 768px) {
            #imageModalCenter {
                height: 100vh;
                width: 100vw;
            }

            #imageModalCenter .modal-free {
                width: 100vw;
                max-width: 100vw;
                height: 80vh;
                margin: 0;
            }

            #imageModalCenter #ModalImage {
                width: 90vw;
                height: 60vh;
            }
        }
    </style>
     <script>
        let isChanging=false;
     $(document).ready(function() {

         $(".thumb-image").click(function(e) {
             // console.log(e.target);
             isChanging=false
             if(isChanging){return}
             isChanging=true;
             var thisImgKey = $(this).attr('data-key');
             let thisData=$(this).attr('data-all');
             var all = JSON.parse(thisData);
             var url = "{{ asset('upload/gallery_images') }}";

             var imgsrc = all[thisImgKey].image;
             url = url + '/' + imgsrc;

             $("#ModalImage").attr('src', url);
             // $("#ModalImage").attr('data-key', thisImgKey);

             $("#previous").attr('data-key', thisImgKey - 1);
             $("#previous").attr('data-all', JSON.stringify(thisData));
             $("#next").attr('data-key', parseInt(thisImgKey) + 1);
             $("#next").attr('data-all', JSON.stringify(thisData));
             if (thisImgKey == 0) {
                 if($("#previous").hasClass('active')){
                     $("#previous").removeClass('active');
                 }
                // $("#previous").hide();
             } else {
                 if(!$("#previous").hasClass('active')){
                     $("#previous").addClass('active');
                 }
             }
             if (thisImgKey == all.length - 1) {
                 if($("#next").hasClass('active')){
                     $("#next").removeClass('active');
                 }
             } else {
                 if(!$("#next").hasClass('active')){
                     $("#next").addClass('active');
                 }
             }
             $("#imageModalCenter").show();

         });
         $("#previous").click(function(e) {
            isChanging=false
             var thisImgKey = $(this).attr('data-key');

             let thisData=JSON.parse($(this).attr('data-all'));

             var all = JSON.parse(thisData);
             // console.log(all);
             var imgsrc = all[thisImgKey].image;
             var url = "{{ asset('upload/gallery_images') }}";

             var imgsrc = all[thisImgKey].image;
             url = url + '/' + imgsrc;

             $("#ModalImage").attr('src', url);
             $("#previous").attr('data-key', thisImgKey - 1);
             $("#next").attr('data-key', parseInt(thisImgKey) + 1);
             $("#previous").addClass('feedback');
             if($("#ModalImage").hasClass('from_right')){
                 $("#ModalImage").removeClass('from_right');
             }
             $("#ModalImage").addClass('from_right');
             setTimeout(() => {
                 $("#previous").removeClass('feedback');
                 $("#ModalImage").removeClass('from_right');
             }, 500);
             if (thisImgKey == 0) {
                 if($("#previous").hasClass('active')){
                     $("#previous").removeClass('active');
                 }
             } else {
                 if(!$("#previous").hasClass('active')){
                     $("#previous").addClass('active');
                 }
             }
             if (thisImgKey == all.length - 1) {
                 if($("#next").hasClass('active')){
                     $("#next").removeClass('active');
                 }
             } else {
                 if(!$("#next").hasClass('active')){
                     $("#next").addClass('active');
                 }
             }
         });
         $("#next").click(function(e) {
            isChanging=false
             var thisImgKey = $(this).attr('data-key');
             //console.log($(this).attr('data-all'));
             let thisData=JSON.parse($(this).attr('data-all'));

             var all = JSON.parse(thisData);
             // console.log(all);
             var imgsrc = all[thisImgKey].image;
             var url = "{{ asset('upload/gallery_images') }}";

             var imgsrc = all[thisImgKey].image;
             url = url + '/' + imgsrc;

             $("#ModalImage").attr('src', url);
             $("#previous").attr('data-key', thisImgKey - 1);
             $("#next").attr('data-key', parseInt(thisImgKey) + 1);
             $("#next").addClass('feedback');
             if($("#ModalImage").hasClass('from_left')){
                 $("#ModalImage").removeClass('from_left');
             }
             $("#ModalImage").addClass('from_left');

             setTimeout(() => {
                 $("#next").removeClass('feedback');
                 $("#ModalImage").removeClass('from_left');
             }, 500);
             if (thisImgKey == 0) {
                 if($("#previous").hasClass('active')){
                     $("#previous").removeClass('active');
                 }
             } else {
                 if(!$("#previous").hasClass('active')){
                     $("#previous").addClass('active');
                 }
             }
             if (thisImgKey == all.length - 1) {
                 if($("#next").hasClass('active')){
                     $("#next").removeClass('active');
                 }
             } else {
                 if(!$("#next").hasClass('active')){
                     $("#next").addClass('active');
                 }
             }
         });
     });
 </script>
    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                // console.log(reader);
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL (e.target.files['0']);

            });
        });
    </script> --}}

    <script>
        // $(document).ready(function() {

        //     $("img.image").click(function(e) {
        //         // data-toggle="modal" data-target="#exampleModalCenter"
        //         console.log(e.target.src);
        //         var imgsrc = e.target.src;
        //         $("#ModalImagePreview").attr('src', imgsrc);
        //         // $("#imageModalCenter").modal();
        //     });
        // });
    </script>
@endsection
