<div class="banner"><img src="/sites/default/files/images/banner/banner_store_locator.jpg" alt=""></div>
<div class="top_band">
    <div class="top_path"><a href="/">Home</a>  |  <span> Store Locator</span></div>
    <div class="title_store_locator">Store Locator </div>
</div>
<div style="font-size: 12px;"><br /><br />If you are not able to find a store in your city, please write to us <a href="/iamaconsumer?storelocator=yes">here</a>.</div>
<div class="store_locator_search_outer">
    <div class="district">
        <select name="state" id="state" tabindex="1">
            <option value="">- Select State-</option>
            <?php
            $sql = "SELECT d.tid, d.name, h.parent FROM {taxonomy_term_data} d join {taxonomy_term_hierarchy} h on d.tid=h.tid where h.parent=0 and d.vid=3 order by d.name";
            $result = db_query($sql);
            foreach ($result as $item) {
                echo '<option value="' . $item->tid . '">' . $item->name . '</option>';
            }
            ?>
        </select>
    </div>
    <div class="course">
        <select name="city" id="city" tabindex="1" class="hide" ></select>
    </div>
    <div class="pin hide" ><input name="pin" id="pincode" class="pin_number required " type="text" placeholder="Enter Pincode"></div>
    <div class="search_button hide"><button type="submit" class="search_submit" id="search_submit">Search</button></div>
    <div class="clear"></div>
</div>
<ul class="testTable">
    <div class="testHeader">
        <li class="testRow">
            <span>Dealer Name</span>
            <span>Address</span>
            <span>Contact Details</span>
            <span>Contact</span>
        </li>
    </div>
    <ul class="testBody">
        <?php
        $sql = "SELECT n.nid, n.title,b.body_value, cn.field_contact_number_value, cp.field_contact_person_value FROM `maha_node` n, `maha_field_data_field_state_city` s,  maha_field_revision_body b, maha_field_data_field_contact_number cn, maha_field_data_field_contact_person cp where  n.nid=b.entity_id and n.nid=cn.entity_id  and n.nid=cp.entity_id and n.nid=s.entity_id and b.bundle='store_locator'  group by title, body_value";
        $result = db_query($sql);
        foreach ($result as $item) {
            echo '<li class="testRow" id="' . $item->nid . '"><span>' . $item->title . '</span><span>' . $item->body_value . '</span><span>' . $item->field_contact_number_value . '</span><span>' . $item->field_contact_person_value . '</span></li>';
        }
        ?>
    </ul>
</ul>

<div class="clearfix"></div>
