<?php
include("config.php"); 
?><h3 class="pop popgreen bold">To <?PHP echo $nameFA ?> Welcome</h3>
<h3>Please select one server to play</h3>
<br />
	<?php
		foreach ( $servInfo as $servData )
		{
			if ($servData['on'] == 1 )
			{ 
				require(''.$servData['path'].'/app/config.php'); ?>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
				<div class="server serverA serverbig serverpreRegister serverbigpreRegister ">
				<a class="link" title="Register <?php echo $servData['name']; ?>" href="<?php echo $servData['URL']; ?>/register.php" onclick="">
				<span class="name"><?php echo $servData['name']; ?></span>
				<span class="start">
					<span class="text"> Server X <?php echo $AppConfig['Game']['speed']; ?></span>
					<br /></span>
					<span class="mark"> Register Now </span>
					<img class="hover" src="img/x.gif">
				</a>
			</div><?php
				echo "<br />";
			}
		}
	?>
