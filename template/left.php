      <!-- Left side column. contains the logo and sidebar -->
<?php
$user_id = $_SESSION['user_id'];
$user_fname = $db->get_row("SELECT * FROM user WHERE user_id='$user_id'");
 ?>
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php
                echo $user_fname->user_fname;
              ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
        <!-- search form
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>-->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
			<!--<li><a href="index.php?folder=admin&file=view"><i class="fa fa-users"></i> <span>Admin</span></a></li>-->
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-list"></i> <span>Options</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<?php
				error_reporting(0);
					if($_GET['folder']=="big_impact")
					{
				?>

						<li class="active"><a href="index.php?folder=bigimpact&file=participantdetails"><i class="fa fa-circle-o"></i>Big Impact</a></li>
				<?php
					}
					else
					{
				?>		<li><a href="index.php?folder=bigimpact&file=participantdetails"><i class="fa fa-circle-o"></i>Big Impact</a></li>

				<?php
					}
				?>
        <?php
					if($_GET['folder']=="carbon_footprint")
					{
				?>

						<li class="active"><a href="index.php?folder=carbonfootprint&file=participantdetails"><i class="fa fa-circle-o"></i>Carboon Footprint Calculator</a></li>
				<?php
					}
					else
					{
				?>		<li><a href="index.php?folder=registrations&file=participantdetailss"><i class="fa fa-circle-o"></i>Carbon Footprint Calculator</a></li>

				<?php
					}
				?>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
