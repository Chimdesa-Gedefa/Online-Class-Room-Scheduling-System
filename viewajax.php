 <?php
 include("admin/dbcon.php");




<?php } }?>
<div class="dddd">
<div>
<img src="profile.jpg" width="32" height="32" />
<form action="savecomment.php" method="post">
<input name="mesgid" type="hidden" value="<?php echo $id ?>" />

<input name="mcomment" type="text" placeholder="if u have any comment..." style="height: 24px; border:1px solid #BDC7D8; padding:3px; border-width: 1px 0px 1px 1px; width:302px;" />
<input id="buts" name="" type="submit" value="comment" />
</form>
</div>
</div>