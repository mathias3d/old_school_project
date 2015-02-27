<?php 
if (!function_exists('checkAndPrintMessages')) 
	require_once("../php/functions.php"); 
?>

<form class="loginForm clearfix" role="form" action="php/createAccountAction.php" accept-charset="utf-8" method="POST">
	<div class="asideHeader">
		<h2>Skapa konto</h2>
	</div>	

	<div class="asideBody">

		<section>
			<label for="name">Fullständigt Namn:</label>
			<input type="text" id="name" name="name" placeholder="Fullständigt namn" maxlength="140" required value=""> 
		</section>

		<section>
			<label for="email">E-post:</label>
			<input type="email" id="email" name="email" placeholder="E-post" maxlength="140" required value=""> 
		</section>

		<section>
			<label for="tel">Lösenord:</label>
			<input type="password" id="pwd" name="pwd" placeholder="Lösenord" maxlength="140" required> 
		</section>
		
		<div class="row">
			<div class="pull-right">
            	<button type="submit">Skapa Konto</button>
			</div>

			<div>
				<a id="loginAccountBtn">Logga in</a>
			</div>
		</div>

		<?php checkAndPrintMessages(); ?>

	</div>
</form>