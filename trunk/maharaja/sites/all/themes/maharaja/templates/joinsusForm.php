<?php $Resume = 'Resume' ?>
<p style="padding:1em 0;">If none of the current job openings matches your profile, submit yout resume  &amp; our HR team will contact you. <?php //echo $Resume?>.</p>
<div class="cont_form_outer">
    <form id="joinForm"   method="post"  action="/ajax/joinus.php" enctype="multipart/form-data" >
        <div class="cont_form_outer_left">                    
            <ul class="cont_form_outer_left_field">
                <li>*Full Name :</li>
                <li><input name="name" class="text_field" type="text" required ></li>
                <li>*E-mail:</li>
                <li><input name="eml" class="text_field" type="email" required></li>
                <li>Area of Operation :</li>
                <li><input name="area" class="text_field" type="text" ></li>
                <li>Qualification :</li>
                <li><input name="quali" class="text_field" type="text" ></li>
                <li>Current Location :</li>
                <li><input name="curloc" class="text_field" type="text" ></li>
                <li>Attach <?php echo $Resume?> :</li>
                <li><input type="file" name="resume"></li>
            </ul>                    
        </div>
        <div class="cont_form_outer_right">
            <ul class="cont_form_outer_left_field">
                <li>*Date Of Birth :</li>
                <li><input name="dob" class="text_field" type="date" placeholder="dd-mm-yyyy" required ></li>
                <li>*Mobile No :</li>
                <li><input name="tel" class="text_field" type="tel" required></li>
                <li>*Experience:</li>
                <li><input name="exp" class="text_field" type="text" required></li>
                <li>Preferred Location :</li>
                <li><input name="preloc" class="text_field" type="text" ></li>
                <li>Role Applied For :</li>
                <li><input name="role" class="text_field" type="text" ></li>
                <li>Paste <?php echo $Resume?> here :</li>
                <li style="width: 100%"><textarea name="cv" id="cv" class="text_area_castumer" cols="" rows="" required></textarea></li>
                <li style="width: 100%;padding: 0;"><div class="submit iam_cu"><input  type="submit" value="Submit"></div><div class="reset"><input  type="reset"></div>   </li>
            </ul>                             
        </div>
    </form>
    <div class="clearfix"></div>
</div>