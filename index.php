<?php include "head.php";?>

	<div class="content-loading">
		<canvas></canvas><!--Loading bar-->
	</div>
	<div class="content-wrapper">
		<ul>
			<li class="buble">
				<img src="images/mail.png" />
				<h2>Email Account Creator</h2>
				<p>
					<ul>
						<li>Fast address creation</li>
						<li>Custom parameters</li>
						<li>Easy to manage</li>								
					</ul>
				</p>
			</li>
			
			<li class="buble">
				<img src="images/twitch.png" />
				<h2>Twitch Viewer Exchanger</h2>						
				<p>
					<ul>
						<li>Earn minutes</li>
						<li>Submit your stream</li>
						<li>Get Live Viewer</li>
					</ul>
				</p>
			</li>
			
			<li class="buble">
				<img src="images/bots.png" />
				<h2>Bots and Software</h2>
				<p>
					<ul>
						<li>Easy to use</li>
						<li>Automate work</li>
						<li>Always Updated</li>
					</ul>
				</p>
			</li>
			
			<li class="buble">
				<img src="images/twitch.png" />
				<h2>IP checker</h2>						
				<p>
					<ul>								
							<?php																		

								$ip = get_client_ip();
							
								$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

								echo '<li>' . $ip . '</li>';
								echo '<li>' . $details->city . '</li>';
								echo '<li>' . $details->country . '</li>';
								echo '<li>' . $details->hostname . '</li>';
							
								// Function to get the client ip address
								function get_client_ip() {
									$ipaddress = '';
									if ($_SERVER['HTTP_CLIENT_IP'])
										$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
									else if($_SERVER['HTTP_X_FORWARDED_FOR'])
										$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
									else if($_SERVER['HTTP_X_FORWARDED'])
										$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
									else if($_SERVER['HTTP_FORWARDED_FOR'])
										$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
									else if($_SERVER['HTTP_FORWARDED'])
										$ipaddress = $_SERVER['HTTP_FORWARDED'];
									else if($_SERVER['REMOTE_ADDR'])
										$ipaddress = $_SERVER['REMOTE_ADDR'];
									else
										$ipaddress = 'UNKNOWN';
								 
									return $ipaddress;
								}
									
							?>
						<li>
							<?php 

							?>
						</li>
					</ul>
				</p>
			</li>					
			
		</ul>
	</div>
	<div class="content-text">
		<p>Thanks for visiting, but as you can see, our website is still in construction.</p>
		<p>Please, come back later, we will provide awesome content !</p>
	</div>
</div>

<?php include "footer.php";?>