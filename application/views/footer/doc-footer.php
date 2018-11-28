<script src="<?php echo base_url()?>/templates/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url()?>/templates/styles/bootstrap4/popper.js"></script>
<script src="<?php echo base_url()?>/templates/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>/templates/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url()?>/templates/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo base_url()?>/templates/plugins/easing/easing.js"></script>
<script src="<?php echo base_url()?>/templates/js/custom.js"></script>
<script src="<?php echo base_url()?>/templates/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="<?php echo base_url()?>/templates/js/categories_custom.js"></script>
</body>

<script type="text/javascript">
	$(function () { 
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) { 
            $('.logo_container img').attr('src','<?php echo base_url()?>/templates/images/logo/logo_yellow3.png');
            $('.logo_container img').css({ 'width':"150px", "transition": "width 0.2s"});

        }
        if ($(this).scrollTop() < 100) { 
            $('.logo_container img').attr('src','<?php echo base_url()?>/templates/images/logo/logo_yellow.png');
            $('.logo_container img').css({ 'width':"100px", "transition": "width 0.2s"});
        }
    })
});
</script>

</html>