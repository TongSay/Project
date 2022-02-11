

    <!-- footer -->
    <footer class="footer footer-style-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        
                            <div class="top-footer-style2 mg-top-30 mg-bottom-50">
                                <div class="col-md-6 col-sm-6 wow fadeInLeft">
                                    <div>
                                        <img src="{{ asset('template/icon/logo-dark.png')}}" alt="images" style="width: 300px;">
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 wow fadeInRight">
                                    <div class="widgets-about f-right">
                                        <ul class="widgets-nav-social">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                       
                                    </div>
                                </div>
                                
                            </div>
                        
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <p class="section-desc mg-top-40">
                                {{__('globle.textrun')}} <br> <h3 class="section-heading-jost-size20" style="color:brown;">
                                    {{__('contact.head-office')}}</h3>
                                
                                <p class="desc-box text-pri2-color">{{__('contact.head-address')}}</p>
                            </p>

                            
                        </div>
                        <div class="col-md-6">
                            <div class="widgets-subcribes">
                                <div class="widgets-input-subcribes">
                                    <form method="post" class="form-subcribe">
                                        <input type="email" name="email" class="widgets-text-input"
                                            placeholder="Email Address" required>
                                        <button type="submit" class="fa fa-envelope"></button>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                    
                        
                    
                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <div class="copyright-text">
                                Copyright 2021 by Borribo MFI. v2.0
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / footer -->

    <!-- btn go top -->
    <div class="button-go-top">
        <a href="#" title="" class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <!-- / btn go top -->

    </div>
    <!--/.boxed-->


    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('template/javascript/jquery.min.js')}}"></script>
    <script src="{{ asset('template/owlcarousel/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('template/javascript/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('template/javascript/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('template/javascript/jquery.easing.js')}}"></script>
    <script type="text/javascript" src="{{ asset('template/javascript/jquery-validate.js')}}"></script>
    <script type="text/javascript" src="{{ asset('template/javascript/jquery.cookie.js')}}"></script>
    <script type="text/javascript" src="{{ asset('template/javascript/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('template/javascript/countto.js')}}"></script>
    <script type="text/javascript" src="{{ asset('template/javascript/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('template/javascript/main.js')}}"></script>
    <!-- /javascript -->

    <!-- slider -->
    <script src="{{ asset('template/rev-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{ asset('template/rev-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{ asset('template/javascript/rev-slider.js')}}"></script>

    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="{{ asset('template/rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js')}}"></script>
    <script src="{{ asset('template/rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js')}}"></script>
    <script src="{{ asset('template/rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js')}}"></script>
    <script src="{{ asset('template/rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{ asset('template/rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js')}}"></script>
    <script src="{{ asset('template/rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js')}}"></script>
    <script src="{{ asset('template/rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js')}}"></script>
    <script src="{{ asset('template/rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js')}}"></script>
    <script src="{{ asset('template/rev-slider/js/extensions/extensionsrevolution.extension.video.min.js')}}"></script>


<!-- file upload itself is disabled in this pen -->

<script src="https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js"></script>

<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js"></script>

<script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js"></script>

<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>

<script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

@yield('scripts')





<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&libraries=places&v=weekly"
async
></script>
</body>

</html>