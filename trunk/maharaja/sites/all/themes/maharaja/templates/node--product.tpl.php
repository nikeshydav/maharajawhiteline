<li class="product_section_li">
    <?php
    $uri = $node->field_product_image['und']['0']['uri'];
    $uri = explode('public://', $uri);
    include_once 'resizeImage.php';
    $file = '/home/maharaja/public_html/sites/default/files/' . $uri[1];
    $resizedFile = '/home/maharaja/public_html/sites/default/files/thumbs_' . $uri[1];
    $sml_img = smart_resize_image($file, null, 170, 138, true, $resizedFile, false, false, 100);
    ?>
    <div class="product_image pro_listing_imag"><a href="<?php print $node_url; ?>"><img src="/sites/default/files/thumbs_<?php echo $uri[1] ?>" border="0" /></a></div>
    <div class="product_name"><?php print $title; ?> <?php print $node->field_product_name['und']['0']['value'] ?></div>
    <div class="product_price"> MRP: <span class="WebRupee rupee1">Rs.</span><span class="pp"><?php echo str_replace(' ', '', trim($node->field_price['und']['0']['value'])) ?></span></div>
    <div class="view_details"><a href="<?php print $node_url; ?>">View Details</a></div>
</li>
