  <!-- ***** Main Banner Area Start ***** -->

  <style>
      .font-240 {
          font-size: 3rem;
          padding: 2rem 0rem!important;
          line-height: 8rem;
      }

      #management.management .bg-image {
          width: 100%;
          height: 80vh;
          opacity: 0.3;

          /* position: absolute; */
      }

      #management.management {
          background-color: #fbf5e8;
          padding: 80px 0px;
          height: 100%;
          width: 100%;
          background: #fff;
          /* background: url(../images/bg9.jpg); */
          background-repeat: no-repeat;
          background-size: cover;
      }

      #management.management .header-block {
          padding: 10px;
          width: 80%;
          margin: 0 auto 10px;
          background: rgba(243, 242, 242, 0.96);
          border-radius: 10px;
          box-shadow: 0 0 7px 2px #1797f884;

      }

      #management.management .header-block .header {
          font-size: 1.5rem;
          font-weight: bold;
          border-bottom: 2px solid #0d842366
      }

      #management.management .header-block .content {
          padding: 5px 10px;
          font-size: 1rem !important;
          font-weight: normal;
      }

      #management.management .header-block .content ul {
          list-style: none;
          padding-left: 10px;
          margin-top: 10px;
      }

      #management.management .header-block .content li {
          position: relative;
          padding-left: 1rem !important;
          /* space to preserve indentation on wrap */
          text-align: justify;
          line-height: 1.8rem;
      }

      #management.management .header-block .content ul li:before {
          content: '✓';
          color: #4c8108;
          font-weight: bold;
          position: absolute;
          left: -10px;
          /* place the SVG at the start of the padding */
          width: 1em;
          height: 1em;
      }

      .content-block {
          width: 100%;
      }

      .content-header {
          background-color: #0d2b72;
          font-size: 1.5rem;
          color: #fff;
          font-weight: bold;
          padding: 5px 10px;
      }

      .row-image {
          display: flex;
          flex-direction: row;
          flex-wrap: wrap;

      }

      #management .row-image .image-block {

          padding: 5px 5px;

          height: 18rem;
          border-radius: 5px;
          position: relative;
      }

      .row-image .image-block-full-h {

          padding: 5px 5px;

          height: 24rem;
          border-radius: 5px;
          position: relative;
      }

      .row-image .image-block .image-number,
      .row-image .image-block-full-h .image-number {
          position: absolute;
          padding: 5px 5px;

          height: 50px;
          width: 50px;
          bottom: 10px;
          left: 10px;
          background-color: #1c54d6;
          color: #fff;
          display: flex;
          justify-content: center;
          align-items: center;
          font-size: 1rem;
          font-weight: bolder;
          border-radius: 50%;
      }

      .row-image img {
          width: 100%;
          height: 100%;
          border-radius: 5px;
      }

      .row {
          margin-inline: 0;
          margin-left: 0;
          margin-right: 0;
      }

      .bg-light-content {
          background-color: lavender;
          padding: 10px;
          font-size: 1.2rem;
          margin: 5px auto;
          border-radius: 10px;

      }

      @media(max-width:480px) {
          .font-240 {
              font-size: 1.2rem !important;
              padding: 1rem 2rem;
              line-height: 3.5rem;
          }

          #management.management .bg-image {
              width: 100%;
              height: 80vh;
              opacity: 0.2;

              /* position: absolute; */
          }

          .row-image .image-block {

              padding: 5px 5px;

              height: 15rem;
              border-radius: 5px;
              overflow: hidden;
          }

          .row-image .image-block-full-h {

              padding: 5px 5px;

              height: 30rem;
              border-radius: 5px;
              overflow: hidden;
          }
      }
  </style>
  <?php
  $collection = [
      [
          'Section' => 'section-m1',
          'HeaderImage' => 'frontend/assets/images/Sabyasachi_Dutta.jpg',
          'HeaderName' => 'Mr. Sabyasachi Dutta',
          'Designation' => 'Dy. General Manager Projects',
          'Short-Description' => 'Mr Dutta Completed his BE in Mining Engineering from IIEST, Shibpur in 2005. He is having more than 18 years of experience in Mining and Bulk Material Handing Projects with HINDALCO and Sandvik Asia Limited.',
          'Description' => 'Mr Dutta Completed his BE in Mining Engineering from IIEST, Shibpur in 2005. He is having more than 18 years of experience in Mining and Bulk Material Handing Projects with HINDALCO and Sandvik Asia Limited.',

          'Extra' => '',
      ],

      ['Section' => 'section-m9', 'HeaderImage' => 'frontend/assets/images/Sushanta_kumar_saha.jpg', 'HeaderName' => 'Mr Sushanta Kumar Saha', 'Designation' => 'Chief Financial Advisor', 'Short-Description' => 'Cost Accountancy from Cost Accountants of India). 29+ Years experience in diverse fields in Accounts and Finance.', 'Description' => '<p>Cost Accountancy from Cost Accountants of India). 29+ Years experience in diverse fields in Accounts and Finance.</p>', 'Extra' => ''],

      [
          'Section' => 'section-m2',
          'HeaderImage' => 'frontend/assets/images/courses-01.jpg',
          'HeaderName' => 'Mr Suman Ghosh',
          'Designation' => 'Managing Director',
          'Short-Description' => "Mr. Suman Ghosh  completed his B.E. from Bengal Engineering College in 1991.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                He is having more than 30 years of experience handling EPC Contracts by way of serving different Corporate Companies at various positions. ",
          'Description' => "<p>Mr  Ghosh  completed his B.E. from Bengal Engineering College in 1991  . He is having more than 30 years of experience handling EPC Contracts by way of serving different Corporate Companies at various positions. He was with </p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div style='color: #0de5fb;'>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <ul type='round' style='list-style: circle; '>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li>CIVON CONSTRUCTIONS Pvt LTD (1991-92)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <li>ISGEC JOHN THOMPSON(1992-94)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li>NICCO CORPORATION LTD (1994-2004)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li>RAMKY INFRASTRUCTURE LTD (2004-05)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>RAINBOW INFRASTRUCTURE Pvt LTD(An ISO 9001:2015 Certified Company)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </ul>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ",
          'Extra' => "<div style='padding: 30px;color:#0de5fb;font-size:19px;'><strong>He has successfully completed various prestigious Turn Key projects like: </strong>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <div style='color: white; padding:15px;'>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <ul type='round' style='list-style: circle; '>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li>LPG Terminals at Visakhapatnam-Vijaywada-Secunderabad ( Client-Gas Authority Of India Ltd, Consultant- EIL )</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li>Evaporation Batteries for Aluminate Liquor ( Client- National Aluminium Company Ltd.,Consultant- EIL)</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li>Mechanical & Piping Works III ( Client- National Aluminium XCompany Ltd,Consultant- EIL)</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li>BOD Plant for Cockoven Byproduct (Client – Rourkela Steel Plant), Gas Cleaning Plant for Twin Hearth Furnace ( Client- Durgapur Steel Plant)</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li>Gas Cleaning Plant & Sulphuric Acid Plant at Ghatshila ( Client- Hindustan Copper Ltd, Consultant- FEDO )</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li>Medium Pressure Boiler Project for CPP-1 ( Client- Rourkela Steel Plant, Consultant- M.N.Dastur & Co Pvt Ltd)</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li>Laboratory Building at Khasmahal,Jamshedpur (Atomic Mineral Division)</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </ul>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ",
      ],
      [
          'Section' => 'section-m4',
          'HeaderImage' => 'frontend/assets/images/Kaushik_Bhattacharya.jpg',
          'HeaderName' => 'Mr. Kaushik Bhattacharya',
          'Designation' => 'Chief Executive Officer',
          'Short-Description' => 'Mr. Bhattacharya completed his B.E. from Bengal Engineering College in 1991 . He is having more than 30 years of experience handling EPC Contracts by way of serving different Corporate Companies at various positions. He was with',
          'Description' => 'Mr. Bhattacharya completed his B.E. from Bengal Engineering College in 1991 . He is having more than 30 years of experience handling EPC Contracts by way of serving different Corporate Companies at various positions. He was with',

          'Extra' => '',
      ],
      [
          'Section' => 'section-m3',
          'HeaderImage' => 'frontend/assets/images/ABHIJIT_ROY_PHOTO.jpg',
          'HeaderName' => 'Mr Abhijit Roy',
          'Designation' => 'Sr Vice President- Civil & Architectural  Division',
          'Short-Description' => 'Mr. Abhijit Roy  completed his B.E. from Bengal Engineering College in 1987 . He is having more than 34 years of experience handling D&E, Housing & Hotel  Contracts by way of serving different Corporate Companies at various positions.  ',
          'Description' => "<p>Mr  Roy  completed his B.E. from Bengal Engineering College in 1987 . He is having more than 34 years of experience handling D&E, Housing & Hotel  Contracts by way of serving different Corporate Companies at various positions. He is Active Member of following professional bodies.</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <div style='color: #0de5fb;'>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <ul type='round' style='list-style: circle;'>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li>The Institute of Engineers
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li>He is Chartered Engineer.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </ul>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </p>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ",
          'Extra' => "<div style='padding: 30px;color:#0de5fb;font-size:19px;'><strong>He had very much gracious presence with following professional houses serving various prestigious projects throughout India and Abroad. </strong>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <div style='color: white; padding:15px;'>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <ul type='round' style='list-style: circle; '>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Ghosh,Bose & Associates (1987-95)</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Development Consultants Ltd(1995-2003)</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Sanjeevani Estate Pvt Ltd (2003-2005)</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Fort Projects Pvt Ltd(2005-06)</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Ambuja Housing & Urban Infrastructural Co Ltd(2006-2013)</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Mani Group (2013-2014)</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Self Initiative (2014-2016)</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Rainbow Infrastructure Pvt Ltd (2016 to till date)</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <div style='padding: 30px;color:#0de5fb;font-size:19px;'><strong>He has successfully completed/associate with various prestigious projects with involvement by way of D&E, Planning & Monitoring, Project Management  like :</strong>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <div style='color: white; padding:15px;'>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <ul type='round' style='list-style: circle;'>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>JW Marriot Hotel & Service Apartment in Kolkata</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>MANI CASADONA- IT Complex at Rajarhat</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>42, Chowringee Road – 62 Storied Residential Tower at Kolkata</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Coutyard Marriot Hotel in Siliguri</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Swarnamani – Multistoried Residential Complex beside VIP Road</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>UPOHAR- Multistoried Residential Complex in Kolkata</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>City Centre- Commercial Complex at Siliguri</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>City Centre- Commercial Complex at Raipur</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Ecospace – IT Complex at Rajarhat</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Neotia Hospital at Siliguri</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>UJJAS – Multistoried Residential Complex at Siliguri</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Eco Suite,Eco Centre,IT Aajkal – Commercial Buildings at Rajarhat</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>CCNT Annexe- Multilevel Car Parking</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Residential Complex at Raichak</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Silver Spring & The Silver Arcade – Highrise Buildings beside VIP Road•	The Spring Club </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>ITC Sonar Bangla- Five Star Hotel</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Boutique Resorts in Bhutan</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Rabindra Bhavan- An Auditorium & Cultural Complex</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Modernaisation of Imphal Airport</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Office Complex for Orissa Industrial Infrastructure Development Corporation, Rourkela, Orissa</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Export Promotion Industrial Park for Orissa Industrial Infrastructure Development Corporation</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Staff Quarters for Greaves Ltd at Falta,WB</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Indira Gandhi Science Complex for Bihar Council On Science Technology at Patna</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Satyendranath Bose National Cancer for Basic Science for Satyendranath Bose National Centre at Salt Lake, Kolkata</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Orissa Lamp Factory Complex for Orissa Lamp at Khurdah Road, Orissa</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Electronics Factory Complex for Siemens Telematik Ltd at Salt Lake, Kolkata</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Calcutta Govt Engineering College for Jadavpur University, Salt Lake</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Multistoried Office Building Complex for SBI at Kolkata</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Water Towers for West Bengal Fisharies Development Corporation at Frasergunj</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Staff Quarters for Botanical Survey of India at Shillong & Barapani,Meghalaya</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Office Building for Industrial Development Bank of India, Bhubaneswar</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </div>	",
      ],
      [
          'Section' => 'section-m7',
          'HeaderImage' => 'frontend/assets/images/Soumyajit_ghosh.jpg',
          'HeaderName' => 'Mr Soumyajit Ghosh',
          'Designation' => 'Director',
          'Short-Description' => 'Mr. Soumyajit Ghosh completed his technical qualification in Civil Engineering in 2001(D.C.E.) from Jalpaiguri Polytechnic Institute. He is having more than 20 years experience in the fields of Reinforced Soil Structure, Building & Civil projects. ',
          'Description' => "<p>Mr Ghosh completed his technical qualification in Civil Engineering in 2001(D.C.E.) from Jalpaiguri Polytechnic Institute. He is having more than 20 years experience in the fields of Reinforced Soil Structure, Building & Civil projects. He could serve various prestigious projects with companies like before joining with Rainbow Infrastructure Pvt Ltd in 2009</p>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <div style='color: #0de5fb;'>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <ul type='round' style='list-style: circle;'>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <li>AIMIL Ltd,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li>Reinforced Earth India Pvt Ltd,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li>Maccaferri Environmental Solutions Pvt Ltd
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ",
          'Extra' => ' ',
      ],
      [
          'Section' => 'section-m6',
          'HeaderImage' => 'frontend/assets/images/debashis.jpg',
          'HeaderName' => 'Mr Debasish Chatterjee',
          'Designation' => 'Director',
          'Short-Description' => 'Mr. Debasish Chatterjee  completed his B.E. from Asansol Engineering College in 2002 . He is having more than 19years of experience handling EPC Contracts by way of serving different Corporate Companies at various positions. ',
          'Description' => "<p>Mr  Chatterjee  completed his B.E. from Asansol Engineering College in 2002 . He is having more than 19years of experience handling EPC Contracts by way of serving different Corporate Companies at various positions. He is a Member of The Institute of Engineers and he is Chartered Engineer.   He was with </p>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <div style='color: #0de5fb;'>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <ul type='round' style='list-style: circle;'>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li>Bharat Heavy Electricals Ltd (2004-2005)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>ABB Ltd(2006-2012)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li>DESCON Ltd (2012-2014)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <li>SPML Infra Ltd(2014-2015)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li>Techno Electric & Engg Co Ltd(2015-2017)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li>Rainbow Infrastructure Pvt Ltd (2017 to till date)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </ul>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ",
          'Extra' => "<div style='padding: 30px;color:#0de5fb;font-size:19px;'><strong>He has successfully completed/associate with various prestigious projects like </strong>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <div style='color: white; padding:15px;'>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <ul type='round' style='list-style: circle; '>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li>Rural Electrification under RGGVY & BRGF Scheme in Patna & Gaya in Bihar</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li>Railway Electrification Project (TSS) in Uttar Pradesh, West Bengal, Tuticorin</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li>APDRP Project in Barrackpore Town through WBSEDCL</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li>Rural Electrification under RGGVY Scheme through NTPC at Purulia</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li>220/132 KV, 132/33KV Substations of JBIC Project ,WBSEDCL</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </ul>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </div>",
      ],

      [
          'Section' => 'section-m8',
          'HeaderImage' => 'frontend/assets/images/shankhanil_ghosh.jpg',
          'HeaderName' => 'Mr Sankhanil Ghoshal',
          'Designation' => 'Director',
          'Short-Description' => 'Mr. Sankhanil Ghoshal completed his technical qualification in Civil Engineering in 1995 from S.C.E.&T.C.,Diploma in Autocad from CCA in 1995,AMIE from Institute Of Engineers in 2000. ',
          'Description' => "<p>Mr Ghoshal completed his technical qualification in Civil Engineering in 1995 from S.C.E.&T.C.,Diploma in Autocad from CCA in 1995,AMIE from Institute Of Engineers in 2000. He is having more than 25 years experience in the field of Architectural projects with various companies of repute. Key previous employers are </p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <div style='color: #0de5fb;'>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <ul type='round' style='list-style: circle;'>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <li>Edifice Architect P Ltd,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li>Bengal Ambuja Housing Development Ltd,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li>Space Matrix Design P Ltd.,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li>Avani Projects and Infrastructure ltd.,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li>Acme Consultants Pvt. Ltd.,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <li>Mani Group,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li>Simoco.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </ul>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ",
          'Extra' => ' ',
      ],
      [
          'Section' => 'section-m5',
          'HeaderImage' => 'frontend/assets/images/Anjan_Biswas.jpg',
          'HeaderName' => 'Mr. Anjan Biswas',
          'Designation' => 'General Manager Projects',
          'Short-Description' => 'Mr Biswas completed his BE in mechanical from Bengal Engineering Collage in 1993. He is having more than 30 years of experience. He is also Certified Lead Auditor for ISO 9001. He was withMr Biswas completed his BE in mechanical from Bengal Engineering Collage in 1993. He is having more than 30 years of experience. He is also Certified Lead Auditor for ISO 9001. He was with...',
          'Description' => 'Mr Biswas completed his BE in mechanical from Bengal Engineering Collage in 1993. He is having more than 30 years of experience. He is also Certified Lead Auditor for ISO 9001. He was with',

          'Extra' => '',
      ],
  ];

  ?>


  <section class="section courses management position-relative  pb-5  container-fluid " data-section="management"
      id="management">
      <img class="position-absolute bg-image w-100" src="{{ asset('frontend/assets/images/vision.png') }}" alt="">
      <div class="container ">
          <div class=" border-top border-secondary">
              <div class=" position-relative d-flex flex-column justify-content-between align-items-center py-4 z-100">

                  <div class="row  w-100">
                      <div class=" w-100 d-flex flex-column justify-content-between align-items-center pt-4  "
                          style=" opacity:1">
                          <div class="w-100 d-flex justify-content-between align-items-center ">
                              <div class="  underline base-color font-240 " data-aos="fade-left flip-right"
                                  style=" font-weight:bold; color:#1c54d6!important; ">
                                  Management</div>
                              <img src="{{ asset('frontend/assets/images/six-dots.png') }}"
                                  style="width: 30px; height:40px;" alt="">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel owl-theme">


              @foreach ($collection as $item)
                  <div class="item">
                      <div class="author-header-image">
                          <img src="{{ asset($item['HeaderImage']) }}" alt="Course #2">
                      </div>
                      <div class="down-content" style="overflow-x: hidden">
                          <h6 style="white-space: normal">{{ $item['HeaderName'] }}</h6>
                          <small style="white-space: nowrap" class="">{{ $item['Designation'] }}</small>
                          {{-- <p class="">{{  $item['Short-Description']  }}</p> --}}
                          <div class="foot">
                              <div class="author-image">
                                  <img src="{{ asset($item['HeaderImage']) }}" alt="Author 2">
                              </div>
                              <div class="text-button-free">
                                  <a href="javascript:" onclick="ShowSection('{{ $item['Section'] }}');">more
                                      details <i class="fa fa-angle-double-right"></i></a>
                              </div>
                          </div>

                      </div>
                  </div>
              @endforeach


          </div>
      </div>

  </section>
  @foreach ($collection as $item)
      <section class="section video {{ $item['Section'] }}  " style="display: none;"
          data-section="{{ $item['Section'] }}" id="{{ $item['Section'] }}">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <article class="video-item">
                          <figure><img src="{{ asset($item['HeaderImage']) }}">
                              {{-- <a href="https://www.youtube.com/watch?v=r9LtOG6pNUw" class="play"></a> --}}
                          </figure>
                          <div class="video-caption" style="padding: 10px 1px; overflow-x:scroll ">
                              {{-- <h4>Power HTML Template</h4> --}}
                              <h3 style="white-space:nowrap">{{ $item['HeaderName'] }}</h3>
                              <p>{{ $item['Designation'] }}</p>
                          </div>

                      </article>
                  </div>
                  <div class="col-md-6 align-self-center">
                      <div class="left-content">
                          {{-- <span>our presentation is for you</span> --}}

                          <p>{!! $item['Description'] !!}</p>
                          <div class="main-button"><a rel="nofollow" href="javascript:"
                                  onclick="ShowManagement('{{ $item['Section'] }}');">Back</a></div>
                      </div>
                  </div>

              </div>
              <div class="row text-white">
                  <p>{!! $item['Extra'] !!}</p>

              </div>

          </div>
      </section>
  @endforeach

  <script>
      function ShowSection(elm) {
          $("#management").hide();

          $("#" + elm).show();
      }

      function ShowManagement(elm) {
          $("#management").show();

          $("#" + elm).hide();
      }
  </script>
