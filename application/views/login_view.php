<?php $this->load->view('includes/header'); ?>

	<div class="container d-flex align-items-center justify-content-center">
		<div class="row text-center pt-5">
			<div class="card" style="width: 18rem;">
			<div class="card-body">
				<form action="<?php echo site_url('LoginController/auth'); ?>" method="POST">
					<h2 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h2>
					<hr/>
					
					<div class="form-group">
				    <label for="exampleInputUsername">Correo</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"> <!-- placeholder="Email" -->
				    </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Contraseña</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
				  </div>
				  <button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>