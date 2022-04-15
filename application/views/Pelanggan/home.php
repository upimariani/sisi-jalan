<!-- Slide1 -->
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1 item1-slick1" style="background-image: url(<?= base_url('asset/pato-master/') ?>images/slide1-01.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                        Welcome to
                    </span>

                    <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                        SISI JALAN KOPI
                    </h2>

                    <div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
                        <!-- Button1 -->
                        <a href="menu.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
                            Look Menu
                        </a>
                    </div>
                </div>
            </div>

            <div class="item-slick1 item2-slick1" style="background-image: url(<?= base_url('asset/pato-master/') ?>images/master-slides-02.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rollIn">
                        Welcome to
                    </span>

                    <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                        SISI JALAN KOPI
                    </h2>

                    <div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">
                        <!-- Button1 -->
                        <a href="menu.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
                            Look Menu
                        </a>
                    </div>
                </div>
            </div>

            <div class="item-slick1 item3-slick1" style="background-image: url(<?= base_url('asset/pato-master/') ?>images/master-slides-01.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
                        Welcome to
                    </span>

                    <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
                        SISI JALAN KOPI
                    </h2>

                    <div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
                        <!-- Button1 -->
                        <a href="menu.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
                            Look Menu
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="wrap-slick1-dots"></div>
    </div>
</section>

<!-- Welcome -->
<section class="section-welcome bg1-pattern p-t-120 p-b-105">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-t-45 p-b-30">
                <div class="wrap-text-welcome t-center">
                    <span class="tit2 t-center">
                        Italian Restaurant
                    </span>

                    <h3 class="tit3 t-center m-b-35 m-t-5">
                        Welcome
                    </h3>

                    <p class="t-center m-b-22 size3 m-l-r-auto">
                        Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia, nisl ante egestas mi, ac facilisis ligula sem id neque.
                    </p>

                    <a href="about.html" class="txt4">
                        Our Story
                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="col-md-6 p-b-30">
                <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                    <img src="images/our-story-01.jpg" alt="IMG-OUR">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Intro -->
<section class="section-intro">
    <div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(<?= base_url('asset/pato-master/') ?>images/bg-intro-01.jpg);">
        <span class="tit2 p-l-15 p-r-15">
            Discover
        </span>

        <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
            Pato Place
        </h3>
    </div>

    <div class="content-intro bg-white p-t-77 p-b-133">
        <div class="container">
            <div class="row">

                <?php
                foreach ($menu as $key => $value) {
                ?>

                    <div class="col-md-4 p-t-30">
                        <form action="<?= base_url('pelanggan/chome/cart') ?>" method="POST">
                            <input type="hidden" name="id" value="<?= $value->id_produk ?>">
                            <input type="hidden" name="name" value="<?= $value->nama_produk ?>">
                            <input type="hidden" name="price" value="<?= $value->harga ?>">
                            <input type="hidden" name="qty" value="1">
                            <input type="hidden" name="stok" value="<?= $value->stok ?>">
                            <input type="hidden" name="picture" value="<?= $value->foto ?>">
                            <!-- Block1 -->
                            <div class="blo1">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                                    <a href="#"><img src="<?= base_url('asset/foto-produk/' . $value->foto) ?>" alt="IMG-INTRO"></a>
                                </div>

                                <div class="wrap-text-blo1 p-t-35">
                                    <a href="#">
                                        <h4 class="txt5 color0-hov trans-0-4 m-b-10">
                                            <?= $value->nama_produk ?>
                                        </h4>
                                    </a>
                                    <br>
                                    <button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4">Add To Cart</button>
                                    <a href="<?= base_url('pelanggan/chome/detail_produk') ?>" class="txt4">
                                        Learn More
                                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Our menu -->
<section class="section-ourmenu bg2-pattern p-t-115 p-b-120">
    <div class="container">
        <div class="title-section-ourmenu t-center m-b-22">
            <span class="tit2 t-center">
                Discover
            </span>

            <h3 class="tit5 t-center m-t-2">
                Our Menu
            </h3>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Item our menu -->
                        <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                            <img src="images/our-menu-01.jpg" alt="IMG-MENU">

                            <!-- Button2 -->
                            <a href="#" class="btn2 flex-c-m txt5 ab-c-m size4">
                                Lunch
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <!-- Item our menu -->
                        <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                            <img src="images/our-menu-05.jpg" alt="IMG-MENU">

                            <!-- Button2 -->
                            <a href="#" class="btn2 flex-c-m txt5 ab-c-m size5">
                                Dinner
                            </a>
                        </div>
                    </div>

                    <div class="col-12">
                        <!-- Item our menu -->
                        <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                            <img src="images/our-menu-13.jpg" alt="IMG-MENU">

                            <!-- Button2 -->
                            <a href="#" class="btn2 flex-c-m txt5 ab-c-m size6">
                                Happy Hour
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-12">
                        <!-- Item our menu -->
                        <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                            <img src="images/our-menu-08.jpg" alt="IMG-MENU">

                            <!-- Button2 -->
                            <a href="#" class="btn2 flex-c-m txt5 ab-c-m size7">
                                Drink
                            </a>
                        </div>
                    </div>

                    <div class="col-12">
                        <!-- Item our menu -->
                        <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                            <img src="images/our-menu-10.jpg" alt="IMG-MENU">

                            <!-- Button2 -->
                            <a href="#" class="btn2 flex-c-m txt5 ab-c-m size8">
                                Starters
                            </a>
                        </div>
                    </div>

                    <div class="col-12">
                        <!-- Item our menu -->
                        <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                            <img src="images/our-menu-16.jpg" alt="IMG-MENU">

                            <!-- Button2 -->
                            <a href="#" class="btn2 flex-c-m txt5 ab-c-m size9">
                                Dessert
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



<!-- Review -->
<section class="section-review p-t-115">
    <!-- - -->
    <div class="title-review t-center m-b-2">
        <span class="tit2 p-l-15 p-r-15">
            Customers Say
        </span>

        <h3 class="tit8 t-center p-l-20 p-r-15 p-t-3">
            Review
        </h3>
    </div>

    <!-- - -->
    <div class="wrap-slick3">
        <div class="slick3">
            <div class="item-slick3 item1-slick3">
                <div class="wrap-content-slide3 p-b-50 p-t-50">
                    <div class="container">
                        <div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
                            <img src="images/avatar-01.jpg" alt="IGM-AVATAR">
                        </div>

                        <div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
                            <p class="t-center txt12 size15 m-l-r-auto">
                                “ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
                            </p>

                            <div class="star-review fs-18 color0 flex-c-m m-t-12">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                            </div>

                            <div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
                                Marie Simmons ˗ New York
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-slick3 item2-slick3">
                <div class="wrap-content-slide3 p-b-50 p-t-50">
                    <div class="container">
                        <div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
                            <img src="images/avatar-04.jpg" alt="IGM-AVATAR">
                        </div>

                        <div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
                            <p class="t-center txt12 size15 m-l-r-auto">
                                “ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
                            </p>

                            <div class="star-review fs-18 color0 flex-c-m m-t-12">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                            </div>

                            <div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
                                Marie Simmons ˗ New York
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-slick3 item3-slick3">
                <div class="wrap-content-slide3 p-b-50 p-t-50">
                    <div class="container">
                        <div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
                            <img src="images/avatar-05.jpg" alt="IGM-AVATAR">
                        </div>

                        <div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
                            <p class="t-center txt12 size15 m-l-r-auto">
                                “ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
                            </p>

                            <div class="star-review fs-18 color0 flex-c-m m-t-12">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                            </div>

                            <div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
                                Marie Simmons ˗ New York
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="wrap-slick3-dots m-t-30"></div>
    </div>
</section>



<!-- Sign up -->
<div class="section-signup bg1-pattern p-t-85 p-b-85">
    <form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
        <span class="txt5 m-10">
            Specials Sign up
        </span>

        <div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email-address" placeholder="Email Adrress">
            <i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
        </div>

        <!-- Button3 -->
        <button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
            Sign-up
        </button>
    </form>
</div>