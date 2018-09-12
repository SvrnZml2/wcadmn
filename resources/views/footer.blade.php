<footer class="footer text-right">
    2018 © <a href="https://www.warp-code.fr"><img style="width:60px;" src="{{asset('images/logo-ligne.png')}}"
            alt="Logo warp code"></a> - Tous droits réservés
</footer>
</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->



</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/detect.js')}}"></script>
<script src="{{ asset('js/fastclick.js')}}"></script>
<script src="{{ asset('js/jquery.blockUI.js')}}"></script>
<script src="{{ asset('js/waves.js')}}"></script>
<script src="{{ asset('js/jquery.nicescroll.js')}}"></script>
<script src="{{ asset('js/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('js/jquery.scrollTo.min.js')}}"></script>

<!-- isotope filter plugin -->
<script type="text/javascript" src="{{ asset('plugins/isotope/dist/isotope.pkgd.min.js')}}"></script>

<!-- Magnific popup -->
<script type="text/javascript" src="{{ asset('plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>

<!-- App js -->
<script src="{{ asset('js/jquery.core.js')}}"></script>
<script src="{{ asset('js/jquery.app.js')}}"></script>

 <!--form wysiwig js-->
 <script src="{{ asset('plugins/tinymce/tinymce.min.js')}}"></script>
 <script src="{{ asset('js/tiny.js')}}"></script>

    <!-- file uploads js -->
    <script src="{{ asset('plugins/fileuploads/js/dropify.min.js')}}"></script>
    <script src="{{ asset('js/upload.js')}}"></script>
    <script src="{{ asset('js/modernizr.min.js')}}"></script>

      <!-- Modal-Effect -->
      <script src="{{ asset('plugins/custombox/dist/custombox.min.js')}}"></script>
      <script src="{{ asset('plugins/custombox/dist/legacy.min.js')}}"></script>


<script type="text/javascript">
$(window).on('load', function () {
    var $container = $('.portfolioContainer');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });

    $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        return false;
    });
});
$(document).ready(function() {
    $('.image-popup').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-fade',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        }
    });
});
</script>


</body>
</html>
