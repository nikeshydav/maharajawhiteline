<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
    <!--<![endif]-->
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <base href="/" />
        <title><?php print $head_title; ?></title>
        <link type="text/css" rel="stylesheet" href="<?php print path_to_theme() ?>/css/toolbar.min.css">
        <link type="text/css" rel="stylesheet" href="<?php print path_to_theme() ?>/css/fonts/stylesheet.min.css">
        <link type="text/css" rel="stylesheet" href="<?php print path_to_theme() ?>/css/fonts/rupees.min.css">
        <link type="text/css" rel="stylesheet" href="<?php print path_to_theme() ?>/css/style.min.css">
        <link type="text/css" rel="stylesheet" href="<?php print path_to_theme() ?>/css/easy-responsive-tabs.min.css" />
        <link type="text/css" rel="stylesheet" href="<?php print path_to_theme() ?>/css/jquery.selectbox.min.css"/>
        <link type="text/css" rel="stylesheet" href="<?php print path_to_theme() ?>/css/slicknav.min.css">

        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php print path_to_theme() ?>/js/respond.min.js"></script>
        <script type="text/javascript" src="<?php print path_to_theme() ?>/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="<?php print path_to_theme() ?>/js/jquery.selectbox-0.2.min.js"></script>
        <script type="text/javascript" src="<?php print path_to_theme() ?>/js/respond.min.js"></script>
        <script type="text/javascript" src="<?php print path_to_theme() ?>/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php print path_to_theme() ?>/js/responsiveslides.min.js"></script>
        <script type="text/javascript" src="<?php print path_to_theme() ?>/js/easyResponsiveTabs.min.js"></script>
        <script type="text/javascript" src="<?php print path_to_theme() ?>/js/jquery.flexisel.min.js"></script>
        <script type="text/javascript" src="<?php print path_to_theme() ?>/js/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="<?php print path_to_theme() ?>/js/jquery.slicknav.min.js"></script>
        <script type="text/javascript" src="<?php print path_to_theme() ?>/js/jquery.raty.min.js"></script>
        <script type="text/javascript" src="<?php print path_to_theme() ?>/js/jquery.elevateZoom-3.0.8.min.js"></script>
        <script type="text/javascript" src="<?php print path_to_theme() ?>/js/jquery.quicksand.min.js"></script>
        <script type="text/javascript" src="<?php print path_to_theme() ?>/js/jquery.validate.min.js" ></script>
        <script type="text/javascript" src="<?php print path_to_theme() ?>/js/jquery.form.min.js"></script> 
    </head>
    <body class="<?php print $classes; ?>" <?php print $attributes; ?>>
        <?php
        print $page_top;
        $avgscore = 4;
        ?>
        <script>
            var avgscore = '<?php echo $avgscore; ?>';
        </script>
        <ul id="menu_hidden" class="hidden">
            <li><a href="<?php echo url('aboutus') ?>">About Us</a>
                <ul class="sub_menu">
                    <li><a href="<?php echo url('aboutus') ?>">About Groupe SEB</a></li>
                    <li><a href="<?php echo url('aboutus-history') ?>">About Maharaja Whiteline</a></li>
                </ul>
            </li>
            <li><a href="#">products</a>
                <ul id="menu-new">
                    <li><a href="#"><img src="<?php print path_to_theme() ?>/images/kitchen.png"> Kitchen Appliances</a>
                        <ul class="sub_menu_2">
                            <?php
                            $sql = 'SELECT d.tid, d.name, d.description, h.parent FROM `maha_taxonomy_term_hierarchy` h join  `maha_taxonomy_term_data` d  on d.tid=h.tid where h.parent=1 order by weight';
                            $result = db_query($sql);
                            foreach ($result as $item) {
                                ?>
                                <li><a href="<?php echo url('taxonomy/term/' . $item->tid . '') ?>"><?php echo strtolower($item->name) ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li><a href="#"><img src="<?php print path_to_theme() ?>/images/home.png"> Home Care</a>
                        <ul class="sub_menu_2">
                            <?php
                            $sql = 'SELECT d.tid, d.name, d.description, h.parent FROM `maha_taxonomy_term_hierarchy` h join  `maha_taxonomy_term_data` d  on d.tid=h.tid where h.parent=3 order by weight';
                            $result = db_query($sql);
                            foreach ($result as $item) {
                                ?>
                                <li><a href="<?php echo url('taxonomy/term/' . $item->tid . '') ?>"><?php echo strtolower($item->name) ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li><a href="#"><img src="<?php print path_to_theme() ?>/images/garments.png"> Garment Care</a>
                        <ul class="sub_menu_2">
                            <?php
                            $sql = 'SELECT d.tid, d.name, d.description, h.parent FROM `maha_taxonomy_term_hierarchy` h join  `maha_taxonomy_term_data` d  on d.tid=h.tid where h.parent=4 order by weight';
                            $result = db_query($sql);
                            foreach ($result as $item) {
                                ?>
                                <li><a href="<?php echo url('taxonomy/term/' . $item->tid . '') ?>"><?php echo strtolower($item->name) ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="<?php echo url('storelocator') ?>">store locator</a></li>
            <li><a href="<?php echo url('buyonline') ?>">buy online</a></li>
            <li><a href="#">contact us</a>
                <ul class="sub_menu">
                    <li><a href="<?php echo url('contactus') ?>">head office</a></li>
                    <li><a href="<?php echo url('iamaconsumer') ?>">i'm a consumer</a></li>
                    <li><a href="<?php echo url('iamapartner') ?>">i'm a partner</a></li>
                    <li><a href="<?php echo url('distributor-enquiry') ?>">New Distributor Enquiry</a></li>
                    <li><a href="<?php echo url('joinus') ?>">Career at Maharaja</a></li>
                    <li><a href="<?php echo url('institutionalqueries') ?>">institutional query</a></li>
                </ul>
            </li>
            <li><form id="searchform1"  action="<?php echo url('search/node/') ?>"  method="post" ><input name="search" id="searchterm1" class="search" type="text" placeholder="Search"></form></li>
        </ul>
        <div class="ouetr">
            <div id="wrapper">
                <header class="header">
                    <div class="logo"><a href="<?php echo $GLOBALS['base_url'] ?>" ><img src="<?php print path_to_theme() ?>/images/maharaja-logo.png" alt="" border="0"></a></div>
                    <nav>
                        <div class="social_menu">
                            <ul>
                                <li class="b"><a href="http://www.groupeseb.com/en-en" target="_blank"><img src="<?php print path_to_theme() ?>/images/group_seb.png" alt=""></a></li>
                                <li class="b_maharaja"><span><img src="<?php print path_to_theme() ?>/images/maharaja.png" alt=""></span></li>
                                <li class="follo">Follow Us</li>
                                <li class="follo_s"><a href="https://www.facebook.com/MaharajaWhitelineIndia" target="_blank"><img src="<?php print path_to_theme() ?>/images/fb.png" alt=""></a></li>
                                <li class="follo_s"><a href="http://www.twitter.com/Mwhiteline" target="_blank"><img src="<?php print path_to_theme() ?>/images/tw.png" alt=""></a></li>
                                <li class="follo_s"><a href="http://www.youtube.com/MaharajaWhitelineIND" target="_blank"><img src="<?php print path_to_theme() ?>/images/you.png" alt=""></a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="menu_outer">
                        <ul id="menu">
                            <li><a href="<?php echo url('aboutus') ?>">About Us</a>
                                <ul class="sub_menu aboutus_menu" id="menu-new">
                                    <li><a href="<?php echo url('aboutus') ?>">About Groupe SEB</a></li>
                                    <li><a href="<?php echo url('aboutus-history') ?>">About Maharaja Whiteline</a></li>
                                </ul>
                            </li>
                            <li><a href="#">products</a>
                                <ul id="menu-new">
                                    <li><img src="<?php print path_to_theme() ?>/images/fork.jpg">Kitchen Appliances
                                        <ul class="sub-menu-menu">
                                            <?php
                                            $sql = 'SELECT d.tid, d.name, d.description, h.parent FROM `maha_taxonomy_term_hierarchy` h join  `maha_taxonomy_term_data` d  on d.tid=h.tid where h.parent=1 order by weight';
                                            $result = db_query($sql);
                                            foreach ($result as $item) {
                                                ?>
                                                <li><a href="<?php echo url('taxonomy/term/' . $item->tid . '') ?>"><?php echo $item->name ?></a><?php print $item->description ?></li>
                                            <?php } ?>

                                        </ul>
                                    </li>
                                    <li><img src="<?php print path_to_theme() ?>/images/home.jpg">Home Care
                                        <ul class="sub-menu-menu">
                                            <?php
                                            $sql = 'SELECT d.tid, d.name, d.description, h.parent FROM `maha_taxonomy_term_hierarchy` h join  `maha_taxonomy_term_data` d  on d.tid=h.tid where h.parent=3 order by weight';
                                            $result = db_query($sql);
                                            foreach ($result as $item) {
                                                ?>
                                                <li><a href="<?php echo url('taxonomy/term/' . $item->tid . '') ?>"><?php echo $item->name ?></a><?php print $item->description ?></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li><img src="<?php print path_to_theme() ?>/images/garment.jpg">Garment Care
                                        <ul class="sub-menu-menu">
                                            <?php
                                            $sql = 'SELECT d.tid, d.name, d.description, h.parent FROM `maha_taxonomy_term_hierarchy` h join  `maha_taxonomy_term_data` d  on d.tid=h.tid where h.parent=4 order by weight';
                                            $result = db_query($sql);
                                            foreach ($result as $item) {
                                                ?>
                                                <li><a href="<?php echo url('taxonomy/term/' . $item->tid . '') ?>"><?php echo $item->name ?></a><?php print $item->description ?></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="<?php echo url('storelocator') ?>">store locator</a></li>
                            <li><a href="<?php echo url('buyonline') ?>">buy online</a></li>
                            <li><a href="#">contact us</a>
                                <ul class="sub_menu aboutus_menu contact_us" id="menu-new">
                                    <li><a href="<?php echo url('contactus') ?>">head office</a></li>
                                    <li><a href="<?php echo url('iamaconsumer') ?>">i'm a consumer</a></li>
                                    <li><a href="<?php echo url('iamapartner') ?>">i'm a partner</a></li>
                                    <li><a href="<?php echo url('distributor-enquiry') ?>">New Distributor Enquiry</a></li>
                                    <li><a href="<?php echo url('joinus') ?>">Career at Maharaja</a></li>
                                    <li><a href="<?php echo url('institutionalqueries') ?>">institutional query</a></li>
                                </ul>
                            </li>
                            <li><form id="searchform"  action="<?php echo url('search/node/') ?>"  method="post" ><input name="search" id="searchterm" class="search" type="text" placeholder="Search"></form></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>

                </header>
                <div class="clearfix"></div>
                <section>
                    <?php print $page ?>
                </section>
            </div>
        </div>
        <footer>
            <div id="wrapper">
                <div class="privasy">
                    <div class="social">
                        <!--  <div style="float: left;margin-right: 10px" class="fb-like" data-href="https://www.facebook.com/MaharajaWhitelineIndia" data-send="false" data-layout="button_count" data-width="80" data-show-faces="false"></div>
                       <a style="float: left"  href="https://twitter.com/Mwhiteline" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false">Follow @Mwhiteline</a> -->
                    </div>
                    <div class="privacy_2">
                        <a href="<?php echo url('content/privacy-policy') ?>">Privacy Policy</a>
                        <span class="privasy_line">|</span>
                        <a href="<?php echo url('sitemap') ?>">Sitemap</a>
                    </div>
                </div>

                <div class="copy_right">&copy; Copyright 2014, Maharaja Whiteline. All rights reserved.</div>
                <div class="col-md-6 extra-links">Conceptualized by : <a title="Website Design And Development Company" target="_blank" href="http://www.ignitee.com/"><span class="ignitee_sig"></span></a></div>
                <div class="clearfix"></div>
            </div>
        </footer>
        <?php print $page_bottom; ?>
        <div id="fb-root"></div>
        <script type="text/javascript" src="<?php print path_to_theme() ?>/js/js.js?v=<?php echo rand(0, 100000) ?>"></script>
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-50432281-1', 'maharajawhiteline.com');
            ga('send', 'pageview');

        </script>
        <script type="text/javascript">var addthis_config = {"data_track_addressbar": false};</script>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=285533028217584";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=nikeshyadav"></script>
        <script>!function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, "script", "twitter-wjs");</script>
    </body>
</html>