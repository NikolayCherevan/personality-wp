<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nikdev
 */

?>

<footer class="footer text-center">


        <div class="container">
       <div><!-- HotLog -->
<span id="hotlog_counter"></span>
<span id="hotlog_dyn"></span>
<script type="text/javascript"> var hot_s = document.createElement('script');
hot_s.type = 'text/javascript'; hot_s.async = true;
hot_s.src = 'http://js.hotlog.ru/dcounter/2588952.js';
hot_d = document.getElementById('hotlog_dyn');
hot_d.appendChild(hot_s);
</script>
<noscript>
<a href="http://click.hotlog.ru/?2588952" target="_blank">
<img src="http://hit5.hotlog.ru/cgi-bin/hotlog/count?s=2588952&im=720" border="0"
title="HotLog" alt="HotLog"></a>
</noscript>
<!-- /HotLog --> </div>
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Powered <i class="fa fa-heart"></i> by <a href="   https://t.me/NikDevNik" target="_blank">NikDev</a> </small>
            
            
        </div><!--//container-->
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
