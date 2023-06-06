@extends('frontend.template.master')

@section('content')


<section id="industrial" class="section industrial main-banner-industrial pb-5 mb-3">
   
    <div id="main" class=" container">
        <a href="/" class="px-4">Back to Home</a>
        <div class="caption ">
            <div class="col-12 section-heading">
                <div class=" head1 h2 text-light">
                Industrial Project Division
                </div>
            
                <div class="caption-list" style="text-align:justify; color:blanchedalmond; ">
                    <p style="font-size:14px;">
                        EPC has always been one of the key areas of our job function. We could associate ourselves with
                        various projects with various Industries over the time. Few of these projects are EPC projects & few
                        of are of construction projects towards expansion of existing Industry (Plant)
                    </p>
                    <div class="panel-body">
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body caption-list  pl-4 mt-3 mb-2 " style="color:blanchedalmond">
                                <div class="custom-list">
                                    <div class="onhover">
                                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                        Paint Industry
                                    </div>
                                    <div class="onhover">
                                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                        Garment Industry
                                    </div>
                                    <div class="onhover">
                                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                        Glass Industry
                                    </div>
                                    <div class="onhover">
                                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                        Steel Industry
                                    </div>
                                    <div class="onhover">
                                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                        Mining Industry
                                    </div>
                                    <div class="onhover">
                                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                        Chemical Industry
                                    </div>
                                    <div class="onhover">
                                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                        Water Treatment Plant, ZLD Plant
                                    </div>
                                    <div class="onhover">
                                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                        Wire house
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p style="font-size:14px;">
                            <b>Capacity:</b> We are having our In-house capacity to execute any such Industrial project on
                            EPC
                            model. A well experienced team of Engineers are in operation to serve various Industries for
                            their new project as well as expansion projects.
                        </p>
                    </div>
                    <div class="card bg-secondary text-light">
                        <div class="card-header">
                            Details of Few Important Industrial Projects with Various Clients 
                        </div>
                        <div class="card-body" style="overflow-y:auto;">
                            <table class='table  table-dark' id="table">
                                <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Client</th>
                                        <th>Projects</th>
                                        <th>Location</th>
                                    </tr>
                                </thead>
                                <td>1</td>
                                <td> Geological Survey Of India</td>
                                <td>HR SIM Laboratory on EPC basis</td>
                                <td>Salt Lake</td>
                                </tr>
                                <td>2</td>
                                <td>Berger Paint I Ltd</td>
                                <td>Construction of Overhead Reservoir, In plant Road & Drainage, Chilling Plant, Plant Floors,
                                    Car Parking Area , Fire Tank ,Prefabricated Store Shed, Cooling Tower, Platform , Resin
                                    Plant Extension etc </td>
                                <td>Howrah</td>
                                </tr>
                                <td>3</td>
                                <td>Berger Paint I Ltd </td>
                                <td>FW Warehouse, Bonded Go down Warehouse, Various Tank Foundations, Bio briquette Plant, ZLD
                                    Plant </td>
                                <td>Rishra</td>
                                </tr>
                                <td>4</td>
                                <td>Hindustan National Glass & Industries Ltd</td>
                                <td>Robertson’s Shed Tank , CDC Building, Tank No 8 (Ware House)</td>
                                <td>Rishra</td>
                                </tr>
                                <td>5</td>
                                <td>ARCL Organics Ltd</td>
                                <td>Civil & Structural Work for Dryer Unit at Taratola and Rampur</td>
                                <td>Taratala & Rampur</td>
                                </tr>
                                <td>6</td>
                                <td>Vatech Wabag </td>
                                <td>Reservoir for 25 MGD WTP at Garden reach</td>
                                <td>Gardenreach</td>
                                </tr>
                                <td>7</td>
                                <td>Tata Metaliks Ltd</td>
                                <td>Cooling Tower, Canteen Building, Conveyor Gallaries Foundations,
                                    Sintering Plant Misc Civil Work , ETP ,Reservoir, various units inside plant etc </td>
                                <td>Kharagpur</td>
                                </tr>
                                <td>8</td>
                                <td>Sandvick Asia Ltd</td>
                                <td>Crushing and Screening plant </td>
                                <td>Borbil</td>
                                </tr>
                                <td>9</td>
                                <td>Grasim Industries Ltd (Jayashree Textiles)</td>
                                <td>2700 KLD ZLD Plant, Chilling Plant, Inplant Concrete Road, 20 Loom Expansion etc</td>
                                <td>Rishra</td>
                                </tr>
                                <td>10</td>
                                <td>Simplex Infrastructure Ltd</td>
                                <td>Construction of Substation Buildings MCC 1A, SS-O8 and Stacker Reclaimer at Dhamra
                                    Port,Orissa </td>
                                <td>Dhamra</td>
                                </tr>
                                <td>11</td>
                                <td>Global Accua Pvt Ltd ( A Cocacola Group of Companies)</td>
                                <td>Construction of Substation, WTP, Security Barrack,Vaastu Wall at "KINLEY" factory, Shalap
                                </td>
                                <td>Howrah,Shalap</td>
                                </tr>
                                <td>12</td>
                                <td>Bengal Breverages Pvt Ltd</td>
                                <td>Construction of ETP, Screw Converyor, Loading Bay, Gantry Loading for Unit No 1 & 2 ,
                                    Underground Reservoir at Dankuni plant</td>
                                <td>Dankuni</td>
                                </tr>
                                <td>13</td>
                                <td>Aditya Birla Insulator</td>
                                <td>Sanitary, Plumbing, Waterproofing, False Ceiling, ACP Cladding, Civil etc work of Club House
                                </td>
                                <td>Rishra</td>
                                </tr>
                                <td>14</td>
                                <td>Larsen & Toubro Ltd</td>
                                <td>Construction of CSTI project at Shreerampur.5 Nos Buildings </td>
                                <td>Shreerampur</td>
                                </tr>
                                <td>15</td>
                                <td>Simplex Infrastructure Ltd</td>
                                <td>Civil Work for construction of substation & Admministrative building and pump house at
                                    Intake Jetty for New Town water supply project owned by
                                    WBHIDCO(Reinforcement free issue)</td>
                                <td>Cossipore</td>
                                </tr>
                                <td>16</td>
                                <td>Transafe Services Ltd</td>
                                <td>Construction of Boundary Wall, Substation Building,Administrative Building,Various
                                    Stores,Flooring Work for Main Workshop at Coimbatur factory & Kharagpur Factory</td>
                                <td>Coimbatur & Kharagpur</td>
                                </tr>
                                <td>17</td>
                                <td>Ramsarup Lohh Udyog Ltd</td>
                                <td>Civil works,Piling Work for 132 KV Substation,Raw Water Reservoir,DR Plant, Power
                                    Plant,Tressel Foundation,SMS Complex,RMHS,Sintering Plant for Integrated Steel Plant at
                                    Kharagpur</td>
                                <td>Kharagpur</td>
                                </tr>
                                <td>18</td>
                                <td>JSW Ltd</td>
                                <td>Design & Engineering, Supply for Sulphuric Acid Tank System at Angul</td>
                                <td>Angul</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

@endsection