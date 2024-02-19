@extends('frontend.template.master')

@section('content')
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
</style>
<section id="quality_policy" class="section policy1 ">
    <div id="main" class="scroll-container container">

        <div class="caption">
            <div class="col-12 section-heading">
                <div class=" head1 h2 text-dark">
                    Quality Policy
                </div>
            </div>
            <div class="custom-list box-block">


                <div class="onhover">
                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    100% Customer Satisfaction in terms of Quality & Time schedule.
                </div>

                <div class="onhover">
                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    To ensure that all the activities relating to the project are carried out as per Tender
                    specifications,
                    drawings etc through stage-wise monitoring and the same should be recorded in the inspection sheet.
                </div>

                <div class="onhover">
                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    Quality Policy includes:
                    <br>
                    (a) Planning and organizing inspection and testing.
                    <br>
                    (b) Selecting, identifying and calibrating, monitoring the measuring devices.
                    <br>
                    (c) Ensuring that the materials and their verification status are identified.
                    <br>
                    (d) Controlling the non-conforming materials.
                    </i>
                </div>
                <div class="onhover">
                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    Supplier should submit the Manufacturer test certificate as per the approved quality plan.
                </div>
                <div class="onhover">
                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    On site Quality is Controlled by Setting Up a Laboratory at Site mainly for RCC Work.
                </div>


            </div>
    </div>
</section>

@endsection