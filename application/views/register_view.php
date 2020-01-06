<?php $this->load->view('includes/header'); ?>
	<div class="container d-flex align-items-center justify-content-center">
		<div class="row text-center pt-5">
			<div class="card" style="width: 18rem;">
			<div class="card-body">
				<form action="<?php echo site_url('RegisterController/register'); ?>" method="POST">
				  <h2 class="h3 mb-3 font-weight-normal">Registro</h2>
				  <hr/>
					
				  <div class="form-group">
				    <label for="exampleInputEmail">Correo</label>
				    <input type="email" class="form-control" id="exampleInputEmail" name="email" aria-describedby="emailHelp" >
                  </div>
                  <div class="form-group">
				    <label for="exampleInputName">Nombre</label>
				    <input type="name" class="form-control" id="exampleInputName" name="name" aria-describedby="emailHelp" >
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword">Contraseña</label>
				    <input type="password" class="form-control" id="exampleInputPassword" name="password" >
                  </div>
                  <div class="form-group">
				    <label for="exampleInputPassword1">Confirmar Contraseña</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" name="confirm-password" >
				  </div>
				  <button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>