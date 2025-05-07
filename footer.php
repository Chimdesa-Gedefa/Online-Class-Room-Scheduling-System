  <hr>

      <footer>
        <p><font color="ff00ff"><h4>Copyright &copy;2016 Bule Hora Universty infosa Graduate student, All rights reserved</h4></font></p>
		<div class="pull-right_foot">
		<font color="ff00ff"><a href="developers.php"><h4>Developer Group 4 (MB)</h4></a></font>
		</div>
		<div class="alert alert-info">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <i class="icon-calendar"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
      </footer>