<?php
?>

<div class="container">
<div class="row">

	<?php foreach ($produse as $prod ):?>
	<div class="col md-4">
<div class="gallery">

		<img src="<?php echo $prod['Img'];?>" alt="Geanta" width="300" height="150">
	</a>
	<div class="desc"><?php echo $prod['Descriere'];?></div>

	<div class="desc">Category: <?php echo $prod['Name'];?></div>
</div>
	</div>
	<?php  endforeach; ?>

</div>

</div>
