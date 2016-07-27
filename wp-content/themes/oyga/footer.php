	<section class="section form" id="form">
		<div class="container">
			<div class="row">
				<div class="main-footer text-center text-center-mobile">
					<h2 class="heading bold">¡Te estamos esperando!</h2>

					<div class="col-sm-offset-5 col-sm-6">
						<div class="notifications">
						</div>

					</div>		
					<form class="form-horizontal" method="POST" action="">
						<div class="form-group">
							<label for="name" class="col-sm-offset-2  col-sm-3 control-label text-left">Nombre</label>
							<div class="col-sm-6">
								<input type="text" class="form-control gray-form" name="name" id="name" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-offset-2 col-sm-3 control-label text-left">E-mail</label>
							<div class="col-sm-6">
								<input type="email" class="form-control gray-form" name="email" id="email" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<label for="company" class="col-sm-offset-2 col-sm-3 control-label ">Empresa</label>
							<div class="col-sm-6">
								<input type="text" class="form-control gray-form" name="company" id="company" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<label for="content" class="col-sm-offset-2 col-sm-3 control-label text-left">¡Contanos sobre tu marca!</label>
							<div class="col-sm-6">
								<textarea class="form-control gray-form" name="content" id="content" rows="10"></textarea>
							</div>
						</div>
						<div class="col-sm-offset-5 col-sm-3 submit-form">
							<button type="submit" class="btn btn-default btn-orange-fill rounded">CONTACTANOS</button>
						</div>
					</form>
				</div>
			</div>
		</div>	
	</section>		
	<footer id="footer">
		<div class="container">		
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; <?php echo date('Y') ?> All Rights Reserved. </p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="https://www.facebook.com/oygaa/"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link oyga-bg"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->

	<?php wp_footer(); ?>
	
</body>

</html>