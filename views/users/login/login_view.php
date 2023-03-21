<body class="gray-bg">



<div class="container" style="padding-top: 8%;">

	<div>

		<h3>Welcome</h3>



		<p>Email & Password.</p>

		<?php echo validation_errors(); ?>

		<?php echo form_open('verify'); ?>


		<div class="form-group">

			<div class="input-group">

				<span class="input-group-addon"><i class="text-warning fa fa-address-book"></i></span><input type="text" name="username" class="form-control"  placeholder="Utilizator" required="">

			</div>

		</div>

		<div class="form-group">

			<div class="input-group">

				<span class="input-group-addon"><i class="text-danger fa fa-key"></i></span><input type="password" name="password" class="form-control"  placeholder="Parola" required="">

			</div>

		</div>

		<button type="submit" class="btn btn-primary block full-width m-b">Login</button>


		</form>

	</div>

</div>


</body>

