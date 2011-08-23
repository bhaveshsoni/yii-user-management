<style type="text/css">
	div {
		margin-left: 25px;
	}
</style>
<h1> Congratulations, you have Installed the Yii User Management Module ! </h1>

<p> Don't forget to look in the Documentation in the docs/ directory to 
see the module specific options that can be set in your Application 
Configuration (for example, language).

Since yum 0.8 you can define the Module Behavior in the administration backend,
 if enabled in the installation. </p>

<p>Now modify your config/main.php file to reflect the changes below in user module configuration:</p>
<code>
	<div>'modules'=> array(
	<?php
		foreach ($modules as $module => $config) {
			echo "<div>'$module' => array(";
			if ($module == 'user') echo "<div>'debug' => false,</div>";
			foreach ($config as $key => $value) {
				echo "<div>'$key' => '$value',</div>";
			}
			echo "),</div>";
		}
	?>
	),</div>
</code>

<strong> Please change the Administrator Password to something better than
the default password. </strong>

<p><?php 
	echo CHtml::link("Administrate your Users",array('/user/login')); 
?></p>
