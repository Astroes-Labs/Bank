 <!--Main Footer-->
 <footer class="main-footer pt-2">
     <div class="auto-container">
         <!--Widgets Section-->
         <div class="widgets-section pb-0">
             <div class="row clearfix align-items-center position-relative" style="z-index: 10;">
                 <!-- Copyright Column -->
                 <div class="copyright-column col-lg-4 col-md-6 col-sm-12">
                     <div class="footer-widget logo-widget">
                         <div class="logo">
                             <a href="/"><img src="{{ url('images/footer-logo.png') }}" alt=""></a>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-2 col-12">
                     <a href="/terms" class="text-white">Terms of Use</a>
                 </div>

                 <div class="col-lg-2 col-12">
                     <a href="/privacy" class="text-white">Privacy &amp; Cookie Policy</a>
                 </div>

                 <div class="col-lg-2 col-12">
                     <a href="/fraud-protection" class="text-white">Fraud Protection</a>
                 </div>

                 <div class="col-lg-2 col-12">
                     <a href="/security" class="text-white">Security</a>
                 </div>
             </div>

         </div>


     </div>
     <!-- Footer Bottom -->
     <div class="footer-bottom">
         <div class="auto-container">
             <div class="row clearfix">

                 <!-- Copyright Column -->
                 <div class="copyright-column col-lg-6 col-md-6 col-sm-12">
                     <div class="copyright">{{ date('Y') }} &copy; All rights reserved by <a
                             href="/">{{ config('app.name') }} </a>
                     </div>
                 </div>

                 <!-- Social Column -->
                 <div class="social-column col-lg-6 col-md-6 col-sm-12 d-none">
                     <ul>
                         <li class="follow">Follow us: </li>
                         <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                         <li><a href="#"><span class="fa fa-twitter-square"></span></a></li>
                         <li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
                         <li><a href="#"><span class="fa fa-google-plus-square"></span></a></li>
                         <li><a href="#"><span class="fa fa-rss-square"></span></a></li>
                     </ul>
                 </div>

             </div>
         </div>
     </div>
 </footer>
