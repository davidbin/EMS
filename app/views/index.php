<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Laravel4 AngularJS Starter Site</title>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href="assets/style.min.css" rel="stylesheet">

</head>

<body ng-app="myApp">

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Start Bootstrap</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li ui-sref-active="active"><a href="/login">LOGIN</a>
				</li>
				<li><a href="/register">REGISTER</a>
				</li>
				<li><a href="/about">ABOUT</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>

<div class="container">

	<div ui-view></div>

	<div class="row">
		<div class="col-lg-8">

			<!-- the actual blog post: title/author/date/content -->
			<h1>A Simple Blog Template for Bootstrap 3</h1>
			<p class="lead">by <a href="index.php">Start Bootstrap</a>
			</p>
			<hr>
			<p>
				<span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>
			<hr>
			<img src="http://placehold.it/900x300" class="img-responsive">
			<hr>
			<p class="lead">Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.</p>
			<p>You know, being a test pilot isn't always the healthiest business in the world.</p>
			<p>Cookie jelly beans soufflé icing. Gummi bears tootsie roll powder chupa chups cheesecake chocolate jelly-o lollipop lollipop. Halvah applicake chupa chups. Marshmallow chocolate jujubes icing lollipop gummi bears chupa chups pudding bonbon. Jelly beans jelly soufflé jujubes. Sesame snaps lollipop icing donut lemon drops soufflé.</p>
			<p>Donut caramels gingerbread. Sweet roll macaroon pastry cotton candy oat cake sesame snaps biscuit lemon drops dessert. Candy canes carrot cake danish carrot cake soufflé jelly chocolate cake muffin. Topping brownie donut. Oat cake marzipan dragée cheesecake. Donut chocolate cake jujubes tart dragée toffee.</p>
			<p>Tilefish electric knifefish salmon shark southern Dolly Varden. Pacific argentine tope golden shiner ilisha barreleye loosejaw catla, dogteeth tetra catfish tenpounder nase scup Ragfish brotula." Codlet brook lamprey pleco, Japanese eel convict cichlid titan triggerfish, plownose chimaera topminnow Black scalyfin. Walleye pollock, blue shark Sacramento blackfish prickleback airbreathing catfish yellowfin cutthroat trout, goby southern sandfish. North Pacific daggertooth dorab cepalin weever flying gurnard.</p>
			<p><strong>Placeholder text by:</strong>
			</p>
			<ul>
				<li><a href="http://spaceipsum.com/">Space Ipsum</a>
				</li>
				<li><a href="http://cupcakeipsum.com/">Cupcake Ipsum</a>
				</li>
				<li><a href="http://tunaipsum.com/">Tuna Ipsum</a>
				</li>
			</ul>

			<hr>

			<!-- the comment box -->
			<div class="well">
				<h4>Leave a Comment:</h4>
				<form role="form">
					<div class="form-group">
						<textarea class="form-control" rows="3"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>

			<hr>

			<!-- the comments -->
			<h3>Start Bootstrap
				<small>9:41 PM on August 24, 2013</small>
			</h3>
			<p>This has to be the worst blog post I have ever read. It simply makes no sense. You start off by talking about space or something, then you randomly start babbling about cupcakes, and you end off with random fish names.</p>

			<h3>Start Bootstrap
				<small>9:47 PM on August 24, 2013</small>
			</h3>
			<p>Don't listen to this guy, any blog with the categories 'dinosaurs, spaceships, fried foods, wild animals, alien abductions, business casual, robots, and fireworks' has true potential.</p>

		</div>

		<div class="col-lg-4">
			<div class="well">
				<h4>Blog Search</h4>
				<div class="input-group">
					<input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
								<span class="glyphicon glyphicon-search"></span>
							</button>
                        </span>
				</div>
				<!-- /input-group -->
			</div>
			<!-- /well -->
			<div class="well">
				<h4>Popular Blog Categories</h4>
				<div class="row">
					<div class="col-lg-6">
						<ul class="list-unstyled">
							<li><a href="#dinosaurs">Dinosaurs</a>
							</li>
							<li><a href="#spaceships">Spaceships</a>
							</li>
							<li><a href="#fried-foods">Fried Foods</a>
							</li>
							<li><a href="#wild-animals">Wild Animals</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-6">
						<ul class="list-unstyled">
							<li><a href="#alien-abductions">Alien Abductions</a>
							</li>
							<li><a href="#business-casual">Business Casual</a>
							</li>
							<li><a href="#robots">Robots</a>
							</li>
							<li><a href="#fireworks">Fireworks</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /well -->
			<div class="well">
				<h4>Side Widget Well</h4>
				<p>Bootstrap's default wells work great for side widgets! What is a widget anyways...?</p>
			</div>
			<!-- /well -->
		</div>
	</div>

	<hr>

	<footer>
		<div class="row">
			<div class="col-lg-12">
				<p>Copyright &copy; Company 2013</p>
			</div>
		</div>
	</footer>

</div>
<!-- /.container -->

<script src="assets/script.min.js"></script>

<script src="app/js/app.js"></script>
<script src="app/js/controllers.js"></script>
<script src="app/js/directives.js"></script>
<script src="app/js/filters.js"></script>
<script src="app/js/services.js"></script>
<script>
	angular.module("myApp").constant("CSRF_TOKEN", '<?php echo csrf_token(); ?>');
</script>

</body>

</html>