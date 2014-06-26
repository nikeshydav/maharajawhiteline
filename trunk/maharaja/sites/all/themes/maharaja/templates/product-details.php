<div class="product_outer">

    <div class="product_overview_outer">
        <div class="product_overvie_image">
            <img src="<?php print path_to_theme() ?>/images/arrow_next.png" class="custom_previous"/><img src="<?php print path_to_theme() ?>/images/arrow_prev.png" class="custom_next" />
            <section class="container-fluid" id="container">
                <div class="threesixty product1"><?php $uri = $node->field_product_image['und']['0']['uri']; $uri=explode('public://', $uri) ?>
                    <img src="/sites/default/files/<?php echo $uri[1] ?>" />
                </div>
            </section>
        </div>
        <div class="product_overvie_left">
            <h1 class="view_product_name"><?php print $title ?></h1>
            <div class="vie_product_id">Product Id: <span>00009</span></div>
            <div class="view_product_price">MRP: <span class="WebRupee">Rs.</span><?php echo $node->field_price['und']['0']['value'] ?></div>
            <div class="where_to_by"><a href="#">Where to Buy</a></div>
            <div class="vie_product_like_us">Like us :        
                <span>
                    <div class="addthis_toolbox addthis_default_style ">
                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                        <a class="addthis_button_tweet"></a>
                        <a class="addthis_button_google_plusone"></a>
                        <a class="addthis_button_google"></a>
                    </div>
                </span>
            </div>
            <div class="view_tab_outer">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>Overview</li>
                        <li>Specification</li>
                        <li>Reviews</li>
                    </ul>
                    <div class="resp-tabs-container">
                        <div>
                            <div class="tab_inner">
                                <h3 class="overview_header">Feature</h3>
                                <ul class="overview">
                                    <li>500 Watt Motor</li>
                                    <li>Complete stainless steel juicer mesh for juicing efficiency</li>
                                    <li>1.5 ltr liquidizing jar</li>
                                    <li>1 ltr Grinding Jar and .3ltr chutney Jar</li>
                                    <li>3 Blades for multiple functions</li>
                                    <li>Online Pulp Collector for added convenience</li>
                                    <li>Overload protection of motor</li>

                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="tab_inner">
                                <h3 class="specification">Specification</h3>
                                <ul class="overview">
                                    <li>500 Watt Motor</li>
                                    <li>Complete stainless steel juicer mesh for juicing efficiency</li>
                                    <li>1.5 ltr liquidizing jar</li>
                                    <li>1 ltr Grinding Jar and .3ltr chutney Jar</li>
                                    <li>3 Blades for multiple functions</li>
                                    <li>Online Pulp Collector for added convenience</li>
                                    <li>Overload protection of motor</li>

                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="tab_inner">
                                <h3 class="reviews">Reviews</h3>
                                <ul class="overview">
                                    <li>
                                        <div class="fb-comments" data-href="<?php echo $GLOBALS['base_url'] . '/' . current_path() ?>" data-width="318" data-numposts="10" data-colorscheme="light"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>     
        </div>
        <div class="you_may_also_like">You may also like</div>
        <div class="you_may_also_like_slider">
            <ul id="flexiselDemo1"> 
                <li><a href="#"><img src="<?php print path_to_theme() ?>/images/mixi.jpg" /></a></li>
                <li><a href="#"><img src="<?php print path_to_theme() ?>/images/mixi.jpg" /></a></li>
                <li><a href="#"><img src="<?php print path_to_theme() ?>/images/mixi.jpg" /></a></li>
                <li><a href="#"><img src="<?php print path_to_theme() ?>/images/mixi.jpg" /></a></li>
                <li><a href="#"><img src="<?php print path_to_theme() ?>/images/mixi.jpg" /></a></li>                
            </ul>

        </div>
    </div>
</div>
<div class="clearfix"></div>
<style>
    #horizontalTab ul li{width: 75px;}
</style>
<script type="text/javascript">
//    window.onload = init;
//
//    var product;
//    function init() {
//        var images = [
//            '1.png',
//            '6.png',
//            '11.png',
//            '16.png',
//            '21.png',
//            '26.png',
//            '31.png',
//            '36.png',
//            '41.png',
//            '46.png', '52.png'
//        ];
//
//        var imgArray = [];
//        for (var i = 0; i < images.length; i++) {
//            imgArray.push("<?php print path_to_theme() ?>/images/car/" + images[i]);
//        }
//        product1 = $('.product1').ThreeSixty({
//            totalFrames: imgArray.length,
//            endFrame: 30,
//            currentFrame: 1,
//            imgList: '.threesixty_images',
//            progress: '.spinner',
//            filePrefix: '',
//            height: 300,
//            width: 550,
//            navigation: false,
//            disableSpin: false,
//            imgArray: imgArray,
//            responsive: true
//        });
//
//        $('.custom_previous').bind('click', function(e) {
//            product1.previous();
//        });
//
//        $('.custom_next').bind('click', function(e) {
//            product1.next();
//        });
//
//    }

</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
            }
        });

    });
</script>



<script type="text/javascript">

    $(window).load(function() {
        $("#flexiselDemo1").flexisel();
        $("#flexiselDemo2").flexisel({
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3
                }
            }
        });

        $("#flexiselDemo3").flexisel({
            visibleItems: 5,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3
                }
            }
        });

        $("#flexiselDemo4").flexisel({
            clone: false
        });

    });
</script>


<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=506206246067910";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>