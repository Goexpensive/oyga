	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="main-footer text-center text-center-mobile">
					<h3>¡Te estamos esperando!</h3>
					<form method="post" action="<?php echo get_template_directory_uri(); ?>/test.php" class="popup-form">
						<input type="text" class="form-control form-white" placeholder="Nombre">
						<input type="text" class="form-control form-white" placeholder="Email">
						<textarea class="form-control form-white" rows="6"></textarea>
						<button type="submit" class="btn btn-submit">Enviar</button>
					</form>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p class="white">&copy; <?php echo date('Y') ?> All Rights Reserved. </p>
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
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->

	<?php wp_footer(); ?>
	
</body>

</html>