<?php
$category = $node->field_category['und']['0']['taxonomy_term']->name;
$tit = strtolower(str_replace(' ', '_', $category));
?>
<div class="banner"><img src="/sites/default/files/images/banner/banner_<?php echo $tit ?>.jpg" alt=""></div>
<div class="top_band">
    <div class="top_path desktop"><a href="/">Home</a>  |  <span><a href="<?php echo url('taxonomy/term/' . $node->field_category['und']['0']['tid']) ?>"><?php echo strtolower($category) ?></a> </span>|  <span><?php print strtolower($title) ?> </span></div>
    <div class="title_store_locator" style="background: url('/sites/default/files/images/icon/icon_<?php echo $tit ?>.png') no-repeat 0px 0px;"><?php print $title ?> </div>
    <div class="top_path mobile"><a href="/">Home</a>  |  <span><a href="<?php echo url('taxonomy/term/' . $node->field_category['und']['0']['tid']) ?>"><?php echo strtolower($category) ?></a> </span>|  <span><?php print strtolower($title) ?> </span></div>
</div>
<div class="product_outer">
    <div class="product_overview_outer">
        <div class="product_overvie_image">
            <section class="container-fluid" id="container">
                <div class="product_display">
                    <?php
                    $uri = $node->field_product_image['und']['0']['uri'];
                    $urizoom = $node->field_product_zoom_image['und']['0']['uri'];
                    $uri = explode('public://', $uri);
                    $urizoom = explode('public://', $urizoom);
                    //include_once 'resizeImage.php';
                    ?>
                    <img src="/sites/default/files/<?php echo $uri[1] ?>"  id="zoomit"  data-zoom-image="/sites/default/files/<?php echo $urizoom[1] ?>" />
                </div>
                <div class="vie_product_like_us"><div>Like us :</div>
                    <span>
                        <!-- AddThis Button BEGIN -->
                        <div class="addthis_toolbox addthis_default_style ">
                            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a><a class="addthis_button_tweet"></a><a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                        </div>
                        <!-- AddThis Button END -->
                    </span>
                </div>
            </section>
        </div>
        <div class="product_overvie_left">
            <?php
            if ($tabs):
                ?>
                <div class="tabs">
                    <?php print render($tabs); ?>
                </div>
                <?php
            endif;
            ?>
            <h1 class="view_product_name"><?php print strtolower($title) ?></h1>
            <h2 class="feture"><?php print $category ?></h2>
            <p class="feture_detail"><?php print $node->field_usp['und']['0']['value'] ?></p>
            <div class="vie_product_id hide">Product Id: <span>00009</span></div>
            <div style="color:#ee1d25" class="hidden" id="comment">Thanks for writing in. Your comment will be displayed after moderation.</div>
            <div class="view_tab_outer">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>Features</li>
                        <li>Specifications</li>
                        <li>Reviews</li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="resp-tabs-container">
                        <div>
                            <div class="tab_inner features">
                                <?php print $node->body['und']['0']['value'] ?>
                            </div>
                        </div>
                        <div>
                            <div class="tab_inner">
                                <ul class="specification">
                                    <?php
                                    foreach ($node->field_specification['und'] as $key => $value) {
                                        $spe = explode(':', $value['value']);
                                        echo "<li><div class=\"specification_name\">" . $spe['0'] . "<span>:</span></div><div class=\"specification_number\">" . $spe['1'] . "</div><div class=\"clear\"></div></li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="tab_inner">
                                <div><?php print render($page['commenting']); ?></div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pro_price">
                <div class="price_left"><div class="view_product_price">MRP: <span class="WebRupee">Rs.</span><?php echo $node->field_price['und']['0']['value'] ?></div></div>
                <div class="where_to_by"><a href="<?php echo url('storelocator') ?>">Where to Buy</a></div>
            </div>
        </div>


    </div>
    <div class="you_may_also_like">You may also like</div>
    <div class="you_may_also_like_slider">
        <ul id="relatedproduct">
            <?php
            #$sql = "SELECT fm.uri,c.entity_id  FROM `maha_field_data_field_category` c, `maha_field_data_field_product_image` fi, `maha_file_managed` fm where  fi.entity_id=c.entity_id and fi.field_product_image_fid=fm.fid and  c.field_category_tid=" . $node->field_category['und']['0']['tid'];
            #$sql = "SELECT fm.uri,c.entity_id  FROM `maha_field_data_field_category` c, `maha_field_data_field_product_image` fi, `maha_file_managed` fm where  fi.entity_id=c.entity_id and fi.field_product_image_fid=fm.fid ORDER BY RAND() limit 0, 5";
            $sql = "SELECT fm.uri,c.entity_id  FROM `maha_field_data_field_category` c, `maha_field_data_field_product_image` fi, `maha_file_managed` fm, `maha_node` n where  fi.entity_id=c.entity_id and fi.field_product_image_fid=fm.fid and n.nid=c.entity_id and n.status=1 ORDER BY RAND() limit 0, 5";
            $result = db_query($sql);
            foreach ($result as $item) {
                $uri = $item->uri;
                $uri = explode('public://', $uri);
                //$file = '/home/allmaile/public_html/maharaja/sites/default/files/' . $uri[1];
                //$resizedFile = '/home/allmaile/public_html/maharaja/sites/default/files/thumb_' . $uri[1];
                //$sml_img = smart_resize_image($file, null, 170, 138, true, $resizedFile, false, false, 100);

                echo '<li><a href="' . url('node/' . $item->entity_id) . '"><img src="/sites/default/files/' . $uri[1] . '" /></a></li>';
            }
            ?>
        </ul>

    </div>
</div>

<div class="clearfix"></div>
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
