<?php
?>

<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container px-5">
		<a class="navbar-brand" href="http://localhost/online_shop/home">Online Shop</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				<li class="nav-item"><a class="nav-link" href="http://localhost/online_shop/home">Home</a></li>
				<li class="nav-item dropdown" style="width: 100px;">
					<a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
					<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
						<li><a class="dropdown-item" href="http://localhost/online_shop/home/2">Bags</a></li>
						<li><a class="dropdown-item" href="http://localhost/online_shop/home/1">Shoes</a></li>
						<li><a class="dropdown-item" href="http://localhost/online_shop/home/3">Accessory</a></li>

					</ul>
				</li>
				<li class="nav-item"><a class="nav-link" href="http://localhost/online_shop/cart">Cart</a></li>
				<li class="nav-item">
					<form method="post" action="http://localhost/online_shop/home/index">
						<div class="row" style=" width: 1000px;">
							<div class="col md-10">
						<input type="text"  autocomplete="off" name="search_data2" id="search_data2"  onkeyup="ajaxSearch2();"  placeholder="Search ..">
							</div>
							<div class="col md-2">
								<button name="search2" class="site-btn sb-gradients">Search</button>
							</div>
						</div>
					</form>
					<div class="row">
						<div class="col-md-6 hero-text">
							<div id="suggestions2">
								<div id="autoSuggestionsList2" class="box arrow-top auto_list" style="display: none; position: absolute;">

								</div>
							</div>
						</div>
					</div>
				</li>

			</ul>
		</div>
	</div>
</nav>
