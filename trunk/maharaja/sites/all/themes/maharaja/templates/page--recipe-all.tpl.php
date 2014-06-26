<div class="banner"><img src="/sites/default/files/images/banner/banner_recipe_detail.jpg" alt=""></div>
<div class="top_band">
    <div class="top_path"><a href="/">Home</a>  |  <span> Recipe</span></div>
    <div class="title_recipes">Recipes</div>
</div>


<div class="recipes_outer">
    <div class="veg_outer">
        <div class="title_veg">Veg</div>
        <div class="veg_list">
            <div class="you_may_also_like_slider">
                <ul id="flexiselDemo1">
                    <?php
                    $sql = "SELECT n.title, n.nid, fm.uri FROM `maha_field_revision_field_product_image` pi, maha_file_managed fm, maha_node n, maha_field_revision_field_type ty where pi.bundle='recipe' and pi.field_product_image_fid=fm.fid  and pi.entity_id=n.nid and pi.entity_id=ty.entity_id and  ty.field_type_value=0";
                    $result = db_query($sql);
                    foreach ($result as $item) {
                        $uri = $item->uri;
                        $uri = explode('public://', $uri);
                        echo '<li><a href="' . url('node/' . $item->nid . '') . '"><img src="sites/default/files/' . $uri[1] . '" /></a><div class="name_respe"><b>' . $item->title . '</b><br><p><a href="' . url('node/' . $item->nid . '') . '">Read More</a></p></div></li>';
                    }
                    ?>
                </ul>

            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="non_veg_outer">
        <div class="title_non_veg">Non-Veg</div>
        <div class="veg_list">
            <div class="you_may_also_like_slider">
                <ul id="flexiselDemo2">
                    <?php
                    $sql = "SELECT n.title, n.nid, fm.uri FROM `maha_field_revision_field_product_image` pi, maha_file_managed fm, maha_node n, maha_field_revision_field_type ty where pi.bundle='recipe' and pi.field_product_image_fid=fm.fid  and pi.entity_id=n.nid and pi.entity_id=ty.entity_id and  ty.field_type_value=1";
                    $result = db_query($sql);
                    foreach ($result as $item) {
                        $uri = $item->uri;
                        $uri = explode('public://', $uri);
                        echo '<li><a href="' . url('node/' . $item->nid . '') . '"><img src="sites/default/files/' . $uri[1] . '" /></a><div class="name_respe"><b>' . $item->title . '</b><br><p><a href="' . url('node/' . $item->nid . '') . '">Read More</a></p></div></li>';
                    }
                    ?>
                </ul>

            </div>
        </div>
    </div>


</div>


<div class="clearfix"></div>
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
