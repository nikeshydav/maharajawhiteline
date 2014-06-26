<div class="banner"><img src="/sites/default/files/images/banner/banner_contact_institutional.jpg" alt=""></div>
        <div class="top_band">
        	<div class="top_path"><a href="/">Home</a>  |  <span> <?php print $title; ?></span></div>
        	<div class="title_contact"><?php print $title; ?></div>
        </div>
        <div class="product_outer">    
        	
        <div class="am_a_consumer">
            
            <div class="body_text">At Maharaja Whiteline, we cater to your business requirements as well. In case of bulk requirements specific to your organization, please feel free to fill out the details in the form below. We shall get back to you at the earliest.  </div>
            <div class="right_form">
            	<form id="institutionalForm"   method="post"  action="/ajax/imacustomer.php" >
                <ul class="cont_form_outer_left_field">
                    <li>Full Name :</li>
                    <li><input name="name" id="name"  class="text_field" type="text" required></li>
                    <li>Address :</li>
                    <li><input name="address" class="text_field" type="text" required></li>
                    <li>Phone :</li>
                    <li><input name="tel" class="text_field" type="tel"  maxlength="10" required></li>
                    <li>E-mail:</li>
                    <li><input name="eml" class="text_field" type="email" required ></li>
                    <li>Query/Comments :</li>
                    <li><textarea name="remark" id="remarks" class="text_area_castumer" cols="" rows="" required></textarea></li>
                </ul>
                    <div class="submit iam_cu"><input  type="submit"  value="Submit"></div><div class="reset"><input  type="reset"></div>
                    <input type="hidden" name="frmName" value="institutional" />
            </form>
            </div>
            
            </div>
        </div>
        <div class="clearfix"></div>