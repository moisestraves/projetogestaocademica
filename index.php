<?php
require 'topoadm.php';
?>

<div class="d-flex justify-content-center p-5">
	<div class="login">
		<p>
		<form action="validar-login.php" method="POST">
			<div>
				<input type="email" id="login" name="login" placeholder="Login" required>
			</div>
			<div>
				<input type="password" id="senha" name="senha" placeholder="Senha" required>
			</div>
			<button>Acessar</button>
	</div>
</div>
</form>
</div>

<?php

require 'rodape.php';