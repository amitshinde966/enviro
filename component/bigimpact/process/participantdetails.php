<?php
		$user_id = $_SESSION['user_id'];
		$carbon_credits = $db->get_row("SELECT * FROM user_carbon_footprint WHERE user_id='$user_id'");

		$total_credits = $db->get_results("SELECT * FROM user_carbon_footprint ORDER BY total_carbon_footprint DESC");

		foreach($total_credits as $tmp_total_credits)
		{
				$current_user_id = $tmp_total_credits->user_id;
				$user_fname = $db->get_row("SELECT * FROM user WHERE user_id='$current_user_id'");
?>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Leaderboard Details</h3>
                  <div class="box-tools">
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody><tr>
                      <th>Name</th>
					  <th>Credits</th>
                    </tr>
					<tr>
					<td><?php echo $user_fname->user_fname; ?></td>
					<td><?php echo $tmp_total_credits->total_carbon_footprint; ?></td>
					</tr>
                  </tbody></table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section>
<?php
		}
?>
