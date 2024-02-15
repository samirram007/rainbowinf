@extends('frontend.template.master')

@section('content')
<style>
    .view_news {
    background-image: url({{ asset('frontend/assets/images/newsroom.jpg') }});
    background-repeat: no-repeat;
    background-size: cover;
    background-blend-mode: multiply;

    }
    .view_news section{
        min-height: 100%

    }
    .view_news section.gallery{
        background: linear-gradient(135deg, #ffffff, #9a060600 10%);

    }
    .view_news .other-news{
        background:  linear-gradient(90deg, #ffffff, #d4d5e363 50%);
        border-radius: 10px;
        padding: 10px;

    }
</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div id="main" class="scroll-container view_news ">
        <div class="container">
     <section class="section gallery d-flex flex-column " data-section="section5" id="section5">
            <div class="left-content" style="text-align:center;">
                <a href="{{ route('home', ['#newsroom']) }}" class="float-left  text-danger"> {{ __('◄- Back to main') }}</a>
                <h5 class="mt-3  align-self-center">
                    {{-- {{ $album->name }} --}}
                </h5>
            </div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-8">
                        <section class="content mb-4 pb-4">

                            <!-- Basic Forms -->
                            <div class="box">
                                <div class="box-header border-bottom mb-2">
                                    <h5 class="box-title">{{ $viewData->name }}</h5>

                                </div>

                                <div class="box-body">
                                    <h6 class="d-flex flex-row flex-wrap justify-content-between"><span>Briefing</span>
                                        <span class="text-danger">
                                            Published at: {{ date('d-m-Y TH:i', strtotime($viewData->published_at)) }}
                                        </span>
                                    </h6>
                                    <div id="editor1" class="details">{!! $viewData->details !!}</div>

                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-4 other-news">
                        <div class="border-bottom border-secondary">Other News</div>
                        @foreach ($allData as $news )
                        <div class="border-bottom p-2">
                            <div>
                                 <a class="text-dark font-weight-bold" href="{{route('news.single', $news->id)  }}">{{ $news->name }}</a>
                            </div>

                            <div class="text-danger">
                                Published at {{ date('d-m-Y TH:i', strtotime($news->published_at)) }}
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>

            </div>
        </section>
</div>



    </div>
<style>
    .details{
        font-size: 14px;

        width: 100%;
        border: 1px solid #ccc;
        padding: 10px;
    }
</style>
@endsection
