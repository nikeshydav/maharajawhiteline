<div class="banner"><img src="/sites/default/files/images/banner/banner_contact_careers.jpg" alt=""></div>
<div class="top_band">
    <div class="top_path"><a href="/">Home</a>  |  <a href="/joinus">Career at Maharaja</a> | <span> <?php print $title; ?>  </span></div>
    <div class="title_contact">Join Us</div>
</div>
<div class="product_outer">    
    <div class="contact_address">
        <div class="product_section"><?php
            print_r(render($page['content']));
            ?>
            <div class="clearfix"></div>
        </div>
        <?php include_once 'joinsusForm.php'; ?>


    </div>
</div>
<div class="clearfix"></div>