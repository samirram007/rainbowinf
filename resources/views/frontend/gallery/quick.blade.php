<section id="gallery" class="section gallery  pb-5 container-fluid" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading h2  ">
                Gallery
                <hr>
            </div>

            <div class="col-md-12   d-flex flex-wrap">

                @foreach ($gallery as $key=> $album)

                <div class="col-md-4  ">
                    <a href="{{ route('frontend.view.album', $album->id) }}">
                    <div class="item" data-aos="fade-left flip-right" >

                    <img src="{{ asset('upload/gallery_images/thumbnail/')}}/{{ $album->image}}" alt="">

                    <div class="down-content1 h4 text-center">
                        {{ $album->name}}
                    </div>
                    </div>
                    </a>
                </div>

                @endforeach


            </div>
        </div>
    </div>
</section>
