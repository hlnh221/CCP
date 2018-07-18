function exituser()
{
	<?php
		session_start();
		unset($_SESSION['user']);
	?>
}
