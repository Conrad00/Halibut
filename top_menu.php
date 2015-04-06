<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Halibut</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li <?php if ( $page == 'dashboard' ) { echo 'class="active"'; }?>><a href="dashboard.php">Home</a></li>
				<li <?php if ( $page == 'templates' ) { echo 'class="active"'; }?>><a href="templates.php">Templates</a></li>
				<li <?php if ( $page == 'pages' ) { echo 'class="active"'; }?>><a href="pages.php">Pages</a></li>
				<li <?php if ( $page == 'options' ) { echo 'class="active"'; }?>><a href="options.php">Options</a></li>
			</ul>
		</div>
	</div>
</nav>