<div class="rslides_container" id="mainslider">
    <ul class="rslides" id="slider1">
        <?php
                    $vidoesql = "SELECT n.nid FROM `maha_node` n where n.type='home_page_main_banner' and n.status=1 order by n.nid limit 0,1";
                    $vidResult = db_query($vidoesql);
                    foreach ($vidResult as $vidId) {
                        $sql = "SELECT f.uri FROM `maha_field_revision_field_banner_image` b, maha_file_managed f where b.entity_id='$vidId->nid' and b.field_banner_image_fid=f.fid  order by b.delta";
                        $result = db_query($sql);
                        foreach ($result as $item) {
                            $uri = explode('public://', $item->uri);
                            ?>
                            <li><img src="/sites/default/files/<?php echo $uri[1] ?>" alt=""></li>
                        <?php }
                    } ?>
    </ul>
</div>

<div class="clearfix"></div>
<div class="maharaja_home_outer">
    <ul>
        <li class="expterience">
            <div class="newness_header">Maharaja <br>Experience</div>

            <div class="inner_experience">
                <ul class="rslides" id="slider2">
                    <?php
                    $vidoesql = "SELECT n.nid FROM `maha_node` n where n.type='home_page_video' and n.status=1 order by n.nid limit 0,1";
                    $vidResult = db_query($vidoesql);
                    foreach ($vidResult as $vidId) {
                        $sql = "SELECT n.nid, y.field_youtube_url_id_value as link FROM `maha_node` n, maha_field_data_field_youtube_url_id y where n.type='home_page_video' and n.status=1 and y.entity_id=n.nid and n.nid='$vidId->nid'  order by n.nid, y.delta";
                        $result = db_query($sql);
                        foreach ($result as $item) {
                            ?>
                            <li>
                                <div class="video-container">
                                    <iframe src="http://www.youtube.com/embed/<?php echo $item->link ?>&modestbranding=1&showinfo=0" frameborder="0" width="560" height="315"></iframe>
                                </div>
                            </li>
                        <?php }
                    } ?>
                </ul>

            </div>
        </li>
        <li class="newness">
            <div class="newness_header">Maharaja<br/>NEWNESS</div>
            <div class="inner_newness">
                <ul id="slider3-pager">
                    <li><a id="one" href="#">Products</a></li>
                    <li><a id="two" href="#">Recipes</a></li>
                </ul>
                <ul class="rslides" id="slider3">
                    <li><a href="<?php echo url('promotions') ?>"><img src="<?php print path_to_theme() ?>/images/home_tab_slide_2.jpg" alt="" style="height: 180px"></a></li>
                    <li><a href="<?php echo url('recipe-all') ?>"><img src="<?php print path_to_theme() ?>/images/home_tab_slide_1.jpg" alt="" style="height: 180px"></a></li>
                </ul>
            </div>
        </li>
        <li class="care">
            <div class="newness_header">Home<br>comfort</div>
            <div class="inner_care">
                <ul class="rslides" id="slider5">
                    <li><img src="<?php print path_to_theme() ?>/images/maharaja-care.jpg" alt="" style="height: 205px"></li>
                    <li><table  width="322" height="180" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFF" background="<?php print path_to_theme() ?>/images/maharaja-club.jpg">                            
                            <tr><td colspan="4" class="maha_club_banner" height="120" >&nbsp;</tr>
                            <tr><td rowspan="4"  width="41" height="92" >&nbsp;</td>
                                <td colspan="2" id="subscribemsg"><input type="text" id="subscribeemail" placeholder="Enter Your E-mail Id" style="width: 100%;height: 26px;text-align: center;"></td>
                                <td rowspan="4" width="57" height="92" >&nbsp;</td>
                            </tr>
                            <tr>
                                <td rowspan="3" width="164" height="61" >&nbsp;</td>
                                <td width="60" height="8" >&nbsp;</td>
                            </tr>
                            <tr>
                                <td><img src="<?php print path_to_theme() ?>/images/care_1_07.jpg" id="subscribe" width="60" height="23" alt=""></td>
                            </tr>
                            <tr><td colspan="4">&nbsp;</td></tr>
                        </table></li>
                        <li><a href="<?php echo url('storelocator') ?>"><img src="<?php print path_to_theme() ?>/images/maharaja-store.jpg" alt="" style="height: 205px"></a></li>
                </ul>
            </div>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>
<style>
    .maha_club_banner img {height: 30px;margin: 40px 0 0 30px;width: 250px;}
</style>