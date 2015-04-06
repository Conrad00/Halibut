<?php
	$pageTitle = 'Templates';
	$page = 'templates';
	$filename = 'basic';

	include('header.php');
	include('top_menu.php');
?>

<nav class="navbar navbar-inverse">
	<div class="navbar-collapse sidebar">
		<ul class="nav navbar-nav sidebar-nav">
			<h2>Templates</h2>
			<li <?php if ( $filename == 'basic.php' ) { echo 'class="active"'; }?> ><a href="">basic.php</a></li>
			<li <?php if ( $filename == 'something.php' ) { echo 'class="active"'; }?> ><a href="">something.php</a></li>
		</ul>
	</div>
</nav>

<?php
	include('footer.php');
?>