<?php
$title = "Deutschkurs";
$nav = "p";
$crumb1_name = "Projekte";
$crumb1_link = "/projekte";
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include "$root/header.php";
?>
<div class="container">
	<h1 class="mt-4 mb-3"><?php echo $title; ?></h1>
	<?php include "$root/breadcrumb.php"; ?>
	<div class="row">
		<div class="col-md-8">
			<img class="img-fluid" src="https://via.placeholder.com/750x500" alt="">
		</div>
		<div class="col-md-4">
			<h3 class="my-3">Projekt Beschreibung</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris 		ultricies, justo eu convallis placerat, felis enim.</p>
			<h3 class="my-3">Projekt Details</h3>
			<ul>
				<li>Lorem Ipsum</li>
				<li>Dolor Sit Amet</li>
				<li>Consectetur</li>
				<li>Adipiscing Elit</li>
			</ul>
		</div>
	</div>
	<h3 class="my-4">Bilder</h3>
	<div class="row">
		<div class="col-md-3 col-sm-6 mb-4">
			<a href="#">
				<img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
			</a>
		</div>
		<div class="col-md-3 col-sm-6 mb-4">
			<a href="#">
				<img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
			</a>
		</div>
		<div class="col-md-3 col-sm-6 mb-4">
			<a href="#">
				<img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
			</a>
		</div>
		<div class="col-md-3 col-sm-6 mb-4">
			<a href="#">
				<img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
			</a>
		</div>
	</div>
</div><?php
include "$root/footer.php";
?>
