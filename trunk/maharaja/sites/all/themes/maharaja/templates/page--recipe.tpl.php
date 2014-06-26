<div class="banner"><img src="/sites/default/files/images/banner/banner_recipe_detail.jpg" alt=""></div>
<div class="top_band">
    <div class="top_path"><a href="/">Home</a>  |  <span> <a href="<?php echo url('recipe-all') ?>">Recipes</a></span> |  <span> <?php echo $title ?></span></div>
    <div class="title_recipes">Recipes</div>
</div>
<?php
//Set recipe id cookie for ajax
$_SESSION['rid'] = $node->vid;
$avgssql = db_query("SELECT avg(star) as t FROM `maha_rate` where rid='$node->vid'");
foreach ($avgssql as $avgs) {
    $avgscore = $avgs->t;
}
?>
<script>
    var avgscore = '<?php echo $avgscore; ?>';
</script>

<div class="recipes_inner_outer">
    <div class="recipes_left_box">
        <div class="recipe_large_image"><img src="<?php
            if (count($node->field_product_image) !== 0) {
                $img = $node->field_product_image['und']['0']['uri'];
                $uri = explode('public://', $img);
                $product_pic = '/sites/default/files/' . $uri[1];
            } else {
                $product_pic = path_to_theme() . '/images/seaseme_chicken.jpg';
            }
            print $product_pic
            ?>" width="481">
            <div class="clear"></div>
            <div class="vie_product_like_us "><div>Like us :</div>
                <span>
                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style ">
                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a><a class="addthis_button_tweet"></a><a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                    </div>
                    <!-- AddThis Button END -->
                </span>
            </div>
        </div>

        <div class="product_used">
            <h2>Appliances Used:</h2>
            <ul>
                <?php
                $totolproduct = 0;
               $sql = "SELECT pu.pid, m.uri FROM {file_managed} m , {productused} pu, {field_data_field_product_image} p where p.field_product_image_fid=m.fid and p.entity_id=pu.pid and pu.rid=" . $node->nid;
                $result = db_query($sql);
                foreach ($result as $item) {
                    $uri = explode('public://', $item->uri);
                   $rppic = '/sites/default/files/' . $uri[1];
                    $namSql = "SELECT title, field_category_tid, t.name FROM  `maha_node` n,  maha_field_data_field_category c, maha_taxonomy_term_data t WHERE n.nid=c.entity_id and t.tid=c.field_category_tid and  n.nid =" . $item->pid;
                    $namResult = db_query($namSql);
                    foreach ($namResult as $namItem) {
                        $catname = ($namItem->name == 'BREAKFAST' && $namItem->name == 'breakfast' ) ? '' : $namItem->name;
                        echo '<li><a href="' . url('node/' . $item->pid) . '" style="height:150px;display:inline-block" ><img src="' . $rppic . '" style="max-height:150px;" ></a><br />' . $namItem->title .' '. $catname . '</li>';
                    }
                    $totolproduct++;
                    if ($totolproduct >= 3)
                        break;
                }
                ?>
            </ul>
        </div>


    </div>
    <div class="recipes_right_box">
        <div class="recipe_name <?php echo ($node->field_type['und'][0]['value'] ) ? '' : 'veg'; ?>"><?php echo $node->title ?></div>
        <div class="star" id="star"></div>
        <div class="totel_time">
            <div class="time">Total Time :</div> <div class="time_minutes"><?php echo ( (int) $node->recipe_cooktime + (int) $node->recipe_preptime) ?> mins</div> <div class="pre_time"><b>Prep Time :</b> <?php echo $node->recipe_preptime ?> mins</div> <div class="cook_time"><b>Cook Time :</b>  <?php echo $node->recipe_cooktime ?> mins</div>
            <div class="clearfix"></div>
        </div>
        <div class="ingredients">
            <h2>Ingredients :</h2>
            <ul>
                <?php
                foreach ($node->recipe_ingredients['ing'] as $key => $value) {
                    $unit = ($value['unit_key'] == 'unknown') ? '' : $value['unit_key'];
                    echo '<li>' . $value['name'] . ' ' . $value['quantity'] . ' ' . $unit . '</li>';
                }
                ?>
            </ul>
        </div>
        <div class="directions">
            <h2>Directions :</h2>
            <?php echo $node->recipe_instructions ?>
        </div>

    </div>
</div>


<div class="clearfix"></div>