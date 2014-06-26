<?php
$tit = strtolower(str_replace(' ', '_', $page['content']['system_main']['term_heading']['term']['#term']->name));
?>
<div class="banner"><img src="/sites/default/files/images/banner/banner_<?php echo $tit ?>.jpg" alt=""></div>
<div class="top_band">
    <div class="top_path"><a href="/">Home</a>  |  <span> <?php print strtolower($title); ?></span></div>
    <div class="title" style="background: url('/sites/default/files/images/icon/icon_<?php echo $tit ?>.png') no-repeat 0px 0px;"><?php print $title; ?></div>
</div>
<div class="product_outer">
    <div class="product_section">
        <div id="prize">
            <div id="sbHolder_51023074" class="sbHolder" tabindex="1">
                <a id="sbToggle_51023074" href="javascript:void(0);" class="sbToggle sbToggleOpen"></a>
                <a id="sbSelector_51023074" href="javascript:void(0);" class="sbSelector">- Sort by Price-</a>
                <ul id="sort-options" class="sbOptions">
                    <li>
                        <a href="javascript:void(0);" id="sPrice" class="btnSort" rel="max">&nbsp;&nbsp;&nbsp;&nbsp;High to Low</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" id="sStyle" class="btnSort" rel="min">&nbsp;&nbsp;&nbsp;&nbsp;Low to High</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>


        <ul id="list-category-results"><?php
            print_r(render($page['content']));
            ?>
        </ul>

        <div class="clearfix"></div>
    </div>
</div>

<div class="clearfix"></div>