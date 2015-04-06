<?php
	$pageTitle = 'Pages';
	$page = 'pages';
	$filename = 'index.php';

	include('header.php');
	include('top_menu.php');
?>

<nav class="navbar navbar-inverse">
	<div class="navbar-collapse sidebar">
		<ul class="nav navbar-nav sidebar-nav">
			<h2>Pages</h2>
			<li <?php if ( $filename == 'index.php' ) { echo 'class="active"'; }?> ><a href="">index.php</a></li>
			<li <?php if ( $filename == 'something.php' ) { echo 'class="active"'; }?> ><a href="">something.php</a></li>
		</ul>
	</div>
</nav>

<?php include('page_info.php'); ?>

<?php
	include('footer.php');
?>