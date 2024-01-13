<section class="section contact " data-section="section6" id="contact">

    <div class="container">
     <div class="row">
         <div class="col-md-12">
             <div class="section-heading text-light">
                 <h2>Let’s Keep In Touch</h2>
             </div>
         </div>
         <div class="col-md-6">

             <!-- Do you need a working HTML contact-form script?

           Please visit https://templatemo.com/contact page -->

             <form id="contact" action="{{ route('send.email')}}" method="POST">
                 @csrf
                 <div class="row">
                     <div class="col-md-6">
                         <fieldset>
                             <input name="name" type="text" class="form-control" id="name"
                                 placeholder="Your Name" required="">
                         </fieldset>
                     </div>
                     <div class="col-md-6">
                         <fieldset>
                             <input name="email" type="text" class="form-control" id="email"
                                 placeholder="Your Email" required="">
                         </fieldset>
                     </div>
                     <input name="subject" type="hidden" class="form-control" id="subject"
                                 value="contact us" >
                     <div class="col-md-12">
                         <fieldset>
                             <textarea name="message" rows="6" class="form-control" id="message"
                                 placeholder="Your message..." required=""></textarea>
                         </fieldset>
                     </div>
                     <div class="col-md-12">
                         <fieldset>
                             <button type="submit" id="form-submit" class="button">Send Message Now</button>
                         </fieldset>
                     </div>
                 </div>
             </form>
         </div>
         <div class="col-md-6">
             <div id="map">
                 <!--iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe-->
                 <iframe
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.9825707994623!2d88.47782861540152!3d22.579755188397495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027532a9e1b693%3A0x4f4a9306586abe3f!2sRainbow%20Infrastructure%20Pvt.%20Ltd.!5e0!3m2!1sen!2sus!4v1637198194840!5m2!1sen!2sus"
                     width="100%" height="422px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
             </div>
         </div>
     </div>
 </div>


</section>