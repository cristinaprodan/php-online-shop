<?php foreach ($produse as $prod):?>

	<div class="container" style="padding-top: 100px;">
		<div class="row">
			<div class="col-xs-4 item-photo">
				<img style="max-width:100%;max-height: 300px;" src="<?php echo $prod['Img'];?>" />
			</div>
			<div class="col-xs-5" style="border:0px solid gray">
				<h3><?php echo $prod['Name'];?></h3>
				<p style="margin-top:0px;"><?php echo $prod['Descriere'];?></p>

			</div>
		</div>
	</div>

<?php endforeach;?>
