</div><!-- end wrapper -->

<footer class="clearfix" id="colophon" role="contentinfo">
    <div class="widget-container">        
        &copy; <?php echo date("d-m-Y"); ?> - <?php bloginfo('name'); ?> - All Rights Reserved.
               
    </div>
</footer><!-- end footer -->


<?php 
//must call wp_footer right before </body> for JS and plugins to run!
wp_footer();  ?>
</body>
</html>