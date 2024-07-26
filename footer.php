<footer class="site-footer">
                <div class="container">
                    <div class="copyright">
                        <p><?php echo get_theme_mod('set_copyright',
                        __('Copyright X - All Rights Reserved','WP-DEVS')); ?></p></div>
                         <div class="copyright">About Us<p><a href="https://www.jawhm.or.jp/privacy.html">privacy policy</a>
                         <br><a href="https://www.jawhm.or.jp/">JAWHM</a></p></div>
                         <div class="copyright">JobBoard<p><a href="http://jobboard.local/">Top</a><br>
                         <a href="http://jobboard.local/jobs/">Search job</a><br><a href="http://jobboard.local/employers/">
                            Search employee</a><br><a href="http://jobboard.local/information/">Information</a><br>
                            <a href="http://jobboard.local/contact/">Contact us</a><br><a href="http://jobboard.local/job-board-terms-of-use/">
                                Terms of Use</a></p></div>
                         <div class="copyright">For companies<p><a href="http://jobboard.local/">About JobBoard</a><br>
                         <a href="http://jobboard.local/how-to-post-a-job/">How to post</a><br><a href="http://jobboard.local/contact/">
                            Contact us</a><br><a href="http://jobboard.local/terms-of-service/">terms of service</a></p></div>
                         <div class="copyright">Work in japan<p><a href="http://jobboard.local/business-manner/">
                            Business manner</a><br><a href="http://jobboard.local/strategy-for-interview/">
                                Strategy for Interview</a><br><a href="http://jobboard.local/work-in-japan/">
                                    Work in japan</a><br><a href="http://jobboard.local/labor-law-and-insurance-system/">Labor law and insurance system</a></p>
                    </div>
                    <div class="copyright">
                    NewsLetter<br>
                    <br><a href="http://jobboard.local/newletter/">Subscribe</a>
                    
                    </div>
                    

    

                    <nav class="footer-menu">
                        <?php wp_nav_menu( array('theme_location' =>'wp_devs_footer_menu','depth' =>1)) ?>
                    </nav>
                </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>