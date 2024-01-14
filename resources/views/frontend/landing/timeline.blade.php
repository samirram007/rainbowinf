<style>
    .timeline {
        margin: 0 auto;
        /* border: 2px solid #f43; */
    }
    .timeline .right-box{
        text-align: left;
    }
    .timeline .left-box{
        text-align: right;
    }
    .timeline .year-value {
        color: #4c8108;
        font-size: 2rem;
        display: flex;
        flex-direction: row;
        flex-flow: nowrap;
        align-items: center;

    }
    .timeline .b-right .year-value {
        justify-content:end;
        padding-block: 0;
    }
    .timeline .b-left .year-value {
        justify-content:start;
        padding-block: 0;
    }
    .timeline .b-right .year-value>i {
        margin-right: -16px;
    }
    .timeline .b-left .year-value>i {
        margin-left: -16px;
    }

    .timeline .triangle-left {
        width: 0;
        height: 0;
        border-top: 25px solid transparent;
        border-right: 50px solid #555;
        border-bottom: 25px solid transparent;
    }

    .timeline .triangle-right {
        width: 0;
        height: 0;
        border-top: 25px solid transparent;
        border-left: 50px solid #555;
        border-bottom: 25px solid transparent;
    }

    .b-left {
        border-left: 3px solid rgb(249, 82, 27);
    }

    .b-right {
        border-right: 3px solid rgb(249, 82, 27);
    }
    .gap-box{
        min-height: 120px;
    }
    .content ul {
  list-style: none;
  padding-left: 0;
}
.content li {
  position: relative;
  padding-left: 1.5em;  /* space to preserve indentation on wrap */
  text-align: justify;
}
.content ul li:before {
  content: '✓';
  color: #4c8108;
  font-weight: bold;
  position: absolute;
  left: 0;  /* place the SVG at the start of the padding */
  width: 1em;
  height: 1em;
}
.p-inline{
    padding-inline: 10rem!important;
}
@media (max-width:480px){
    .p-inline{
    padding-inline: 0!important;
}
}
#timetime{
    position: relative;
}
#timetime #timeline-container{
    position: relative;
}
  .bg-image{
    width: 100%;
    height:20rem;
}
section.timeline {
    background-color: #fbf5e8;
    padding: 120px 0px;
    width: 100%;
    background: #fff;
    /* background: url(../images/bg9.jpg); */
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<section id="timeline" class="section timeline pb-2 pt-0 container-fluid">
<div class="container">
    <div class="d-flex justify-content-between align-items-center pt-4">

        <h1>Timeline</h1>
        <img src="{{ asset('frontend/assets/images/six-dots.png') }}" style="width: 30px; height:40px;" alt="">
    </div>
</div>
    <div id="timeline-container" class="container p-inline" style=" padding:0;color:rgb(101, 97, 97)">


         <div class="row timeline">
            <div class="col-6 b-right">
                <div class="gap-box"></div>
                <div class="position-relative left-box">

                    <h3 class="year">2006-2010</h3>
                    <div class="year-value">
                        <div>24.95 Crs.</div>
                        <i class="fa fa-caret-left" style="font-size:48px;color:rgb(249, 82, 27)"></i>

                    </div>
                    <div class="content">
                        <ul>
                         <li>Executed longest stretch 220 KV double circuit 16.50 KM from Gunrock to Malkaram in Hyderabad, total cable length 102.00 KM.</li>
                         <li>Executed MS structural work above 140.0 Meter height for Westin Hotel at Newtown Rajarhat.</li>
                        </ul>
                    </div>
                </div>
                <div class="gap-box"></div>
                <div class="position-relative left-box">

                    <h3 class="year">2021 to 2025</h3>
                    <div class="year-value">
                        <div>225 Crs. <sup>*</sup></div>
                        <i class="fa fa-caret-left" style="font-size:48px;color:rgb(249, 82, 27)"></i>

                    </div>
                    <div class="content">
                        <ul>
                         <li>Executed first ever high rise steel building (14 storied) composite steel structure at  Gangtok,  Sikkim</li>
                        </ul>
                    </div>
                </div>
                <div>*Expected</div>

            </div>
            <div class="col-6 b-left ">
                <div class="position-relative right-box">

                    <h3 class="year">2006-2010</h3>
                    <div class="year-value">
                        <i class="fa fa-caret-right" style="font-size:48px;color:rgb(8, 180, 214)"></i>
                        <div> 24.95 Crs.</div>
                    </div>
                    <div class="content">
                        <ul>
                         <li>Started manufacturing of  different kind of MS moulds (ie. RE Wall moulds, Shutter Moulds etc.), and we became the pioneer in this field.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="gap-box"></div>
                <div class="position-relative right-box">

                    <h3 class="year">2016-2020</h3>
                    <div class="year-value">
                        <i class="fa fa-caret-right" style="font-size:48px;color:rgb(134, 147, 150)"></i>
                        <div> 123.65 Crs.</div>
                    </div>
                    <div class="content">
                        <ul>
                         <li>Executed Augmentation of 132/33 KV Grid Substation at Chandura, Chashmisahi (in the Famous Tulip Garden), Zinakot, Bemina, Pattan in Jammu & Kashmir.</li>
                         <li>RIPL executed Elevated swimming pool cum club house at 26 mtr. high for Sugam Habitat project at Picnic Garden.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div style="margin-top: -50px;">
            <img class="bg-image" src="{{ asset('frontend/assets/images/vision.png') }}"  alt="">
        </div>
    </div>
</section>

