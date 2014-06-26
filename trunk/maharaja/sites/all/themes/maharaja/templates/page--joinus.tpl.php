<div class="banner"><img src="/sites/default/files/images/banner/banner_contact_careers.jpg" alt=""></div>
<div class="top_band">
    <div class="top_path"><a href="/">Home</a>  |  <span> <?php print $title; ?></span></div>
    <div class="title_contact"><?php print $title; ?></div>
</div>
<div class="product_outer">    
    <div class="contact_address">
        <div>We at Maharaja Whiteline and Groupe SEB,  continually seek creative and focused minds to bring new dimensions to our vision to continuously develop and deliver innovative technology and services that meet ever-changing consumer needs. <br><br>
            We believe that our people are our pillars of strength, and we keep our people Happy with our Passion, Optimism, Humility and Appreciation. A bright and challenging future is awaiting bright individuals. Come be a part of us! <br><br>
            Let's create an exciting future together!!</div>   

        <div class="current">Current vacancies at Maharaja Whiteline :</div>

        <ul class="current_list">
            <?php
            $vacany = false;
            $sql = "SELECT n.nid,n.title, y.field_job_experience_value as link FROM `maha_node` n, maha_field_data_field_job_experience y where n.type='job_openings' and n.status=1 and y.entity_id=n.nid order by n.nid, y.delta";
            $result = db_query($sql);
            foreach ($result as $item) {
                $vacany = true;
                ?>
                <li>
                    <a href="<?php echo url('node/' . $item->nid) ?>" ><strong><?php echo $item->title ?></strong>
                        Total Experience: <?php echo $item->link ?> </a>
                </li>
                <?php
            }
            ?>
            <?php
            if (!$vacany):
                ?>
                <li>
                    <a href="#" ><strong>Sorry, currently there are no openings.</strong></a>
                </li>
            <?php endif; ?>
        </ul>


        <?php include_once 'joinsusForm.php'; ?>

    </div>
</div>
<div class="clearfix"></div>