<div class="banner"><img src="/sites/default/files/images/banner/banner_distrbutir_enquiry.jpg" alt=""></div>
<div class="top_band">
    <div class="top_path"><a href="/">Home</a>  |  <span> <?php print $title; ?></span></div>
    <div class="title_contact"><?php print $title; ?></div>
</div>
<div class="product_outer">
    <div class="am_a_consumer">
        <div class="body_text">At Maharaja Whiteline, we value our distributors. You can fill out the form if you are interested in joining us as our distributor. We look forward to hearing from you for a great alliance.</div>
        <div class="right_form">
            <form id="impartnerForm"   method="post"  action="/ajax/imacustomer.php">
                <ul class="cont_form_outer_left_field">
                    <li>Full Name :</li>
                    <li><input name="name" id="name"  class="text_field" type="text" required></li>
                    <li>Address :</li>
                    <li><input name="address" class="text_field" type="text" required></li>
                    <li>Phone :</li>
                    <li><input name="tel" class="text_field" type="tel" maxlength="10"  required></li>
                    <li>E-mail:</li>
                    <li><input name="eml" class="text_field" type="email" required ></li>
                    <li>Enquiry :</li>
                    <li><select name="state" id="state" tabindex="1">
                            <option value="">- Select enquiry-</option>
                            <option value="Service related">Service related</option>
                            <option value="New partner">New partner</option>
                        </select></li>
                    <li class="hidden plz">Please Specify :</li>
                    <li class="hidden plz"><input name="specify" class="text_field" type="text" required > </li>
                    <li>Query/Comments :</li>
                    <li><textarea name="remark" id="remarks" class="text_area_castumer" cols="" rows="" required></textarea></li>
                </ul>
                <div class="submit iam_cu"><input  type="submit" value="Submit"></div><div class="reset"><input  type="reset"></div>
                <input type="hidden" name="frmName" value="distributor" />
            </form>
        </div>
    </div>
</div>
<div class="clearfix"></div>