<?php
?>



<div class="container">

	<form action="" method="post">

	<div class="input-group">
		<input type="search" name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
		<button type="submit" name="cautare" value="cautare" class="btn btn-outline-primary">Search</button>
	</div>
	</form>

<div class="row">
	<?php if(isset($produse)){ ?>
	<?php foreach ($produse as $prod ):?>
	<div class="col md-4">
<div class="gallery">

		<img src="<?php echo $prod['Img'];?>" alt="Geanta" width="300" height="150">
	</a>

	<div class="desc">Name: <?php echo $prod['Name'];?></div>
	<div class="desc"><?php echo $prod['Descriere'];?></div>
	<div class="desc">Category: <?php echo $prod['Nume'];?></div>
	<div class="desc">Price: <?php echo $prod['Pret'];?></div>
	<form method="post" action="http://localhost/online_shop/users/cart/index">
		<button  class="btn btn-dark" type="submit" value="<?php echo $prod['ID_Produs'];?>" name="id_product">Add</button>
	</form>
</div>
	</div>
	<?php  endforeach; }?>

</div>

</div>
