@extends('frontend.template.master')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div id="main" class="scroll-container container">

        <section class="section gallery " data-section="section5" id="section5">
            <div class="left-content" style="text-align:center;">
                <a href="{{ route('home', ['#gallery']) }}" class="float-left  text-danger"> ◄- Back to main</a>
                <h5 class="mt-3  align-self-center">
                    {{-- {{ $album->name }} --}}
                </h5>
                  
                
                
            </div>
            <div class="container ">
                <div class="row  ">
                   
                    @forelse ($allData as $key=>$data)
                  
                        <div class="col-md-6 col-lg-4 ">
                            <div class=" m-4  " data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                data-aos-duration="2000">
                                {{-- {{$allData[$key]->image}} --}}
                                <img id="showImage{{ $key }}" class="image" data-all="{{ json_encode($allData) }}" data-key="{{ $key }}"
                                data-previous="{{ ($key - 1)<0? (count($allData)-1): ($key - 1) }}" 
                                data-next="{{ ($key + 1)>=(count($allData))? 0: ($key + 1) }}"
                                    style=" border:1px solid #000000; width:100%; object-fit: cover;"
                                    src="{{ !empty($allData[$key]->image) ? url('upload/gallery_images/thumbnail/' . $allData[$key]->image) : url('upload/no_image.jpg') }}"
                                    alt="" data-toggle="modal" data-target="#imageModalCenter">

                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="modal fade" id="imageModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="imageModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-free" role="document">
            <div class="modal-content">
                <div class="modal-header  bg-primary">
                    {{-- <h5 class="modal-title" id="exampleModalLongTitle"></h5> --}}
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-auto bg-secondary">
                    <img id="ModalImage" style="max-width:100%;" src="" alt="image content here.">

                </div>
                <div class="modal-footer bg-primary">
                    {{-- previous and next image button --}}
                    <button type="button"  class="btn btn-light" id="previous">Previous</button>
                    <button type="button"  class="btn btn-light" id="next">Next</button>
                    {{-- end of previous and next image button --}}

                    <button type="button" class="btn btn-light sr-only" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>

    </div>
  <style>
    #imageModalCenter{
        height:100vh;
        width: 100vw;
    }
    #imageModalCenter .modal-free{
        width: 100vw;
        max-width: 80vw;
    }
    #imageModalCenter .modal-footer{
        display: flex;
        justify-content:center;
        gap: 20px;
    }
    #imageModalCenter #ModalImage{
        height:80vh;
    }
    /* media query */
    @media (max-width: 768px) {
        #imageModalCenter{
        height:80vh;
        width: 100vw;
        }
        #imageModalCenter .modal-free{
            width: 100vw;
            max-width: 100vw;
            height: 80vh;
            margin: 0;
        }
        #imageModalCenter #ModalImage{
            width:90vw;
            height:60vh;
        }
    }

  </style>
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
