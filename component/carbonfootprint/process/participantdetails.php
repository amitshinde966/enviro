<?php
	$registration_id = $_GET['registration_id'];
	$details = $db->get_row("SELECT * FROM registrations WHERE registration_id='$registration_id'");
?>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Participant Details</h3>
                  <div class="box-tools">
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody><tr>
                      <th>Participant 1</th>
					  <th>Participant 2</th>
					  <th>Participant 3</th>
					  <th>Participant 4</th>
                      <th>Participated In</th>
					  <th>Date</th>
                    </tr>
					<tr>
					<td><?php echo $details->participant1;?></td>
					<td><?php echo $details->participant2;?></td>
					<td><?php echo $details->participant3;?></td>
					<td><?php echo $details->participant4;?></td>
					<td><?php 
					if($details->clash == 1)
					{
						echo "C/C++ Clash, ";
					}
					if($details->web_waever == 1)
					{
						echo "Web Waever, ";
					}
					if($details->cretronix == 1)
					{
						echo "Cretronix, ";
					}
					if($details->croodle == 1)
					{
						echo "Croodle, ";
					}
					if($details->mad_talks == 1)
					{
						echo "Mad Talks, ";
					}
					if($details->paper_presentation == 1)
					{
						echo "Paper Presentation, ";
					}
					if($details->reverse_coding == 1)
					{
						echo "Reverse Coding, ";
					}
					if($details->roboliga == 1)
					{
						echo "Roboliga, ";
					}
					if($details->network_t_hunt == 1)
					{
						echo "NTH, ";
					}
					if($details->software_development == 1)
					{
						echo " Software Development ";
					}
					?></td>
					<td><?php echo $details->date;?></td>
					</tr>
                  </tbody></table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section>
