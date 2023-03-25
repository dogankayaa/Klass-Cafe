<!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="<?php the_field('cafe_facebook','option'); ?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php the_field('cafe_twitter','option'); ?>"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php the_field('cafe_linkedin','option'); ?>"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="<?php the_field('cafe_instagram','option'); ?>"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php 
                    $logo = get_field ('logo','option');
                    ?>
                    <div class="logo">
                        <a href="index.html"><img src="<?php echo $logo['url']; ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p><?php the_field('copyright_alani','option'); ?>
                        
                        <br>Design: TemplateMo Template İmport Doğan Kaya</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

   
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
    <?php wp_footer(); ?>
  </body>
</html>