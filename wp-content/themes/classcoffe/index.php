<?php get_header(); ?>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <?php
                    $logo = get_field('logo', 'option');
                    ?>
                    <a href="index.html" class="logo">
                        <img src="<?php echo $logo['url']; ?>" align="klassy cafe html template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Ana Sayfa</a></li>
                        <li class="scroll-to-section"><a href="#about">Hakkımızda</a></li>

                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                        <li class="scroll-to-section"><a href="#menu">Menü</a></li>
                        <li class="scroll-to-section"><a href="#chefs">Şeflerimiz</a></li>
                        <!-- <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>-->
                        <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                        <li class="scroll-to-section"><a href="#reservation">İletişim </a></li>
                        <li class="scroll-to-section"><a href="#offers">Bugün Ne Var ? </a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <div class="inner-content">
                        <h4><?php the_field('site_slogani', 'option'); ?></h4>
                        <h6><?php the_field('site_slogani_2', 'option'); ?></h6>
                        <div class="main-white-button scroll-to-section">
                            <a href="#reservation"><?php the_field('rezervasyon_basligi', 'option'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="main-banner header-text">
                    <div class="Modern-Slider">
                        <!-- Item -->
                        <?php if (have_rows('slider_alani', 'option')) :
                            while (have_rows('slider_alani', 'option')) :
                                the_row();

                                $slider_fotografi = get_sub_field('slider_gorseli', 'option');

                        ?>
                                <div class="item">
                                    <div class="img-fill">
                                        <img src="<?php echo $slider_fotografi['url']; ?>" alt="">
                                    </div>
                                </div>
                        <?php endwhile;
                        else : endif; ?>
                        <!-- // Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** About Area Starts ***** -->
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6> <?php the_field('hakkimizda', 'option'); ?></h6>
                        <h2><?php the_field('hakkimizda_bolumu_basligi', 'option'); ?></h2>
                    </div>
                    <p><?php the_field('hakkimizda_bolumu_detaylari', 'option'); ?></p>
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/images/about-thumb-01.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img src="assets/images/about-thumb-02.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img src="assets/images/about-thumb-03.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="right-content">
                    <div class="thumb">
                        <?php the_field('youtute_linki', 'option'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Area Ends ***** -->

<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                <?php if (have_rows('tatlilar', 'option')) :
                    while (have_rows('tatlilar', 'option')) :
                        the_row();

                        $tatli_resmi = get_sub_field('tatli_resmi', 'option');
                        $fiyat = get_sub_field('fiyat', 'option');
                        $ismi = get_sub_field('ismi', 'option');
                        $tatli_detayi = get_sub_field('tatli_detayi', 'option');

                ?>

                        <div class="item">
                            <div class='card  ' style="background-image: url(<?php echo $tatli_resmi['url']; ?>);>
                        <img class=" card" src="" alt="">
                                <div class="price">
                                    <h6><?php echo $fiyat; ?></h6>
                                </div>
                                <div class='info'>
                                    <h1 class='title'><?php echo $ismi; ?></h1>
                                    <p class='description'><?php echo $tatli_detayi; ?></p>
                                    <div class="main-text-button">
                                        <div class="scroll-to-section"><a href="#reservation">Rezervasyon yapın! <i class="fa fa-angle-down"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                else : endif; ?>


            </div>
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->

<!-- ***** Chefs Area Starts ***** -->
<section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6><?php the_field('bolum_basligi', 'option'); ?></h6>
                    <h2><?php the_field('bolum_aciklamasi', 'option'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">


            <?php if (have_rows('sefler', 'option')) :
                while (have_rows('sefler', 'option')) :
                    the_row();

                    $sefin_ismi = get_sub_field('sefin_ismi', 'option');
                    $sefin_bransi = get_sub_field('sefin_bransi', 'option');
                    $facebook_adresi = get_sub_field('facebook_adresi', 'option');
                    $twitter_adersi = get_sub_field('twitter_adersi', 'option');
                    $instagram_adresi = get_sub_field('instagram_adresi', 'option');
                    $sefin_resmi = get_sub_field('sefin_resmi', 'option');

            ?>
                    <div class="col-lg-4">
                        <div class="chef-item">
                            <div class="thumb">
                                <div class="overlay"></div>
                                <ul class="social-icons">
                                    <li><a href="<?php echo $facebook_adresi; ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?php echo $twitter_adersi; ?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?php echo $instagram_adresi; ?>"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <img src="<?php echo $sefin_resmi['url']; ?>" alt="Chef #1">
                            </div>
                            <div class="down-content">
                                <h4><?php echo $sefin_ismi; ?></h4>
                                <span><?php echo $sefin_bransi; ?></span>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
            else : endif; ?>


        </div>
    </div>
</section>
<!-- ***** Chefs Area Ends ***** -->

<!-- ***** Reservation Us Area Starts ***** -->
<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                    <div class="section-heading">

                        <h6>Bize Ulaşın</h6>
                        <h2><?php the_field('bize_ulasin_basligi', 'option') ?></h2>
                    </div>
                    <p><?php the_field('bize_ulasin_detay', 'option') ?></p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <h4>Telefon Numaraları</h4>
                                <span><a href="tel: <?php the_field('tel_no_1', 'option') ?>"><?php the_field('tel_no_1', 'option') ?></a><br><a href="tel: <?php the_field('tel_no_2', 'option') ?>"><?php the_field('tel_no_2', 'option') ?></a></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message">
                                <i class="fa fa-envelope"></i>
                                <h4>E-Posta </h4>
                                <span><a href="mailto:<?php the_field('e-posta_1', 'option') ?>"><?php the_field('e-posta_1', 'option') ?></a><br><a href="mailto:<?php the_field('e-posta_2', 'option') ?>"><?php the_field('e-posta_2', 'option') ?></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Rezervasyon Tablosu</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="İsminiz*" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email Addresiniz" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="phone" type="text" id="phone" placeholder="Telefon Numarası*" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <select value="Ziyaretçi sayısı" name="number-guests" id="number-guests">
                                        <option value="number-guests">Ziyaretçi sayısı</option>
                                        <option name="1" id="1">1</option>
                                        <option name="2" id="2">2</option>
                                        <option name="3" id="3">3</option>
                                        <option name="4" id="4">4</option>
                                        <option name="5" id="5">5</option>
                                        <option name="6" id="6">6</option>
                                        <option name="7" id="7">7</option>
                                        <option name="8" id="8">8</option>
                                        <option name="9" id="9">9</option>
                                        <option name="10" id="10">10</option>
                                        <option name="11" id="11">11</option>
                                        <option name="12" id="12">12</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <div id="filterDate2">
                                    <div class="input-group date" data-date-format="dd/mm/yyyy">
                                        <input name="date" id="date" type="text" class="form-control" placeholder="gg/aa/yyyy">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <select value="time" name="time" id="time">
                                        <option value="time">Zaman</option>
                                        <option name="Breakfast" id="Breakfast">Kahvaltı</option>
                                        <option name="Lunch" id="Lunch">Öğle Yemeği</option>
                                        <option name="Dinner" id="Dinner">Akşam Yemeği</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" id="message" placeholder="Mesajınız" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button-icon">Rezervasyon Yap</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Reservation Area Ends ***** -->

<!-- ***** Menu Area Starts ***** -->
<section class="section" id="offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Klass Cafede Bugün </h6>
                    <h2>Bu Haftanın Özel Yemek Teklifleri</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row" id="tabs">
                    <div class="col-lg-12">
                        <div class="heading-tabs">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <ul>
                                        <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">Kahvaltı</a></li>
                                        <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png" alt="">Öğlen Yemeği</a></a></li>
                                        <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png" alt="">Akşam Yemeği</a></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <section class='tabs-content'>
                            <article id='tabs-1'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">

                                            <?php if (have_rows('kahvalti_sol_bolum', 'option')) :
                                                    while (have_rows('kahvalti_sol_bolum', 'option')) :
                                                        the_row();

                                                        $yemek_ismi = get_sub_field('yemek_ismi', 'option');
                                                        $yemek_aciklama_ = get_sub_field('yemek_aciklama_', 'option');
                                                        $fiyati = get_sub_field('fiyati', 'option');
                                                        $resmi = get_sub_field('resmi', 'option');
                                                ?>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="<?php echo $resmi ['url'];?>" alt="">
                                                                <h4><?php echo $yemek_ismi;?></h4>
                                                                <p><?php echo $yemek_aciklama_;?></p>
                                                                <div class="price">
                                                                    <h6><?php echo $fiyati;?></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php endwhile; else : endif; ?>
                                             
                                               
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">

                                                <?php if (have_rows('kahvalti_sag_bolum_', 'option')) :
                                                    while (have_rows('kahvalti_sag_bolum_', 'option')) :
                                                        the_row();

                                                        $yemek_ismi = get_sub_field('yemek_ismi', 'option');
                                                        $yemek_aciklama_ = get_sub_field('yemek_aciklama_', 'option');
                                                        $fiyati = get_sub_field('fiyati', 'option');
                                                        $resmi = get_sub_field('resmi', 'option');
                                                ?>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="<?php echo $resmi ['url'];?>" alt="">
                                                                <h4><?php echo $yemek_ismi;?></h4>
                                                                <p><?php echo $yemek_aciklama_;?></p>
                                                                <div class="price">
                                                                    <h6><?php echo $fiyati;?></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php endwhile; else : endif; ?>
                                            
                            </article>
                            <article id='tabs-2'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">

                                               
                                            <?php if (have_rows('oglen_sol_bolum_', 'option')) :
                                                    while (have_rows('oglen_sol_bolum_', 'option')) :
                                                        the_row();

                                                        $yemek_ismi = get_sub_field('yemek_ismi', 'option');
                                                        $yemek_aciklama_ = get_sub_field('yemek_aciklama_', 'option');
                                                        $fiyati = get_sub_field('fiyati', 'option');
                                                        $resmi = get_sub_field('resmi', 'option');
                                                ?>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="<?php echo $resmi ['url'];?>" alt="">
                                                                <h4><?php echo $yemek_ismi;?></h4>
                                                                <p><?php echo $yemek_aciklama_;?></p>
                                                                <div class="price">
                                                                    <h6><?php echo $fiyati;?></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php endwhile; else : endif; ?>
                                               
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">

                                                       
                                            <?php if (have_rows('oglen_sag_bolum', 'option')) :
                                                    while (have_rows('oglen_sag_bolum', 'option')) :
                                                        the_row();

                                                        $yemek_ismi = get_sub_field('yemek_ismi', 'option');
                                                        $yemek_aciklama_ = get_sub_field('yemek_aciklama_', 'option');
                                                        $fiyati = get_sub_field('fiyati', 'option');
                                                        $resmi = get_sub_field('resmi', 'option');
                                                ?>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="<?php echo $resmi ['url'];?>" alt="">
                                                                <h4><?php echo $yemek_ismi;?></h4>
                                                                <p><?php echo $yemek_aciklama_;?></p>
                                                                <div class="price">
                                                                    <h6><?php echo $fiyati;?></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php endwhile; else : endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-3'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">

                                            <?php if (have_rows('aksam_yemegi_sag', 'option')) :
                                                    while (have_rows('aksam_yemegi_sag', 'option')) :
                                                        the_row();

                                                        $yemek_ismi = get_sub_field('yemek_ismi', 'option');
                                                        $yemek_aciklama_ = get_sub_field('yemek_aciklama_', 'option');
                                                        $fiyati = get_sub_field('fiyati', 'option');
                                                        $resmi = get_sub_field('resmi', 'option');
                                                ?>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="<?php echo $resmi ['url'];?>" alt="">
                                                                <h4><?php echo $yemek_ismi;?></h4>
                                                                <p><?php echo $yemek_aciklama_;?></p>
                                                                <div class="price">
                                                                    <h6><?php echo $fiyati;?></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php endwhile; else : endif; ?>

                                               
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                            <?php if (have_rows('aksam_yemegi_sol', 'option')) :
                                                    while (have_rows('aksam_yemegi_sol', 'option')) :
                                                        the_row();

                                                        $yemek_ismi = get_sub_field('yemek_ismi', 'option');
                                                        $yemek_aciklama_ = get_sub_field('yemek_aciklama_', 'option');
                                                        $fiyati = get_sub_field('fiyati', 'option');
                                                        $resmi = get_sub_field('resmi', 'option');
                                                ?>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="<?php echo $resmi ['url'];?>" alt="">
                                                                <h4><?php echo $yemek_ismi;?></h4>
                                                                <p><?php echo $yemek_aciklama_;?></p>
                                                                <div class="price">
                                                                    <h6><?php echo $fiyati;?></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php endwhile; else : endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Chefs Area Ends ***** -->

<?php get_footer(); ?>