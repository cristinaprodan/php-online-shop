<div class="container-fluid">
	<div class="row">
		<aside class="col-lg-9">
			<div class="card">
				<div class="table-responsive">
					<table class="table table-borderless table-shopping-cart">
						<thead class="text-muted">
						<tr class="small text-uppercase">
							<th scope="col">Product</th>
							<th scope="col" width="120">Quantity</th>
							<th scope="col" width="120">Price</th>
							<th scope="col" class="text-right d-none d-md-block" width="200"></th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($cart as $produs):?>
						<tr>
							<td>
								<figure class="itemside align-items-center">
									<div class="aside"><img src="<?php echo $produs['Img']?>" class="img-sm"></div>
									<figcaption class="info"<?php echo $produs['Name']?>
										<p class="text-muted small"><?php echo $produs['Name']?></p>
									    <p class="text-muted small"><?php echo $produs['Descriere']?></p>
									</figcaption>
								</figure>
							</td>
							<td>
							<form action="" method="post">
								<input type="hidden" name="produs_id" value="<?php echo $produs['ID_Produs']?>">
						 <select onchange="this.form.submit()" name="schimbare_cantitate">
									<option value="<?php echo $produs['Cantitate']?>"><?php echo $produs['Cantitate']?></option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
								</select> </form>
							</td>
							<td>
								<div class="price-wrap"> <var class="price"><?php echo $produs['Pret']?></var> </div>
							</td>
							<td class="text-right d-none d-md-block">
							<form action="" method="post">
								<button type="submit" value="<?php echo $produs['ID_Produs']?>" name="delete" class="btn btn-light" data-abc="true"> Remove</button> </td>
							</form>
						</tr>

						<?php endforeach;?>


						</tbody>
					</table>
				</div>
			</div>
		</aside>
		<aside class="col-lg-3">
			<div class="card mb-3">

			<div class="card">
				<div class="card-body">
					<dl class="dlist-align">
						<dt>Total price:</dt>
						<dd class="text-right ml-3"><?php echo $sum; ?></dd>
					</dl>




					<hr> <form action="" method="post">
						<button type="submit" name="remove" value="remove" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Delete all </button>
					</form>
				</div>
			</div>
		</aside>
	</div>
</div>
