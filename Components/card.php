<div class="col-3 p-2">
	<div class="card">
		<div class="card-header border-0 bg-transparent">
			<img src="<?php echo $product->image ?>" alt="<?php echo $product->name ?>" class="w-100 h-100">
		</div>

		<div class="card-body">
			<h3>Nome prodotto:
				<span class="text-decoration-underline">
					<?php echo $product->name ?>
				</span>
			</h3>

			<h4>
				Prezzo:
				<span class="text-primary">
					<?php echo $product->price ?> &euro;
				</span>
			</h4>

			<h4>
				Tipo:
				<span class="text-primary">
					<?php echo $product->type ?>
				</span>
			</h4>

			<h4>
				Peso:
				<span class="fw-bold">
					<?php echo $product->weight ?>
				</span>
			</h4>

			<div class="text-end">
				<?php if ($product->animal == 'dog') { ?>
					<p>
						<i class="fa-solid fa-dog fs-3"></i>
					</p>
				<?php } ?>

				<?php if ($product->animal == 'cat') { ?>
					<p>
						<i class="fa-solid fa-cat fs-3"></i>
					</p>
				<?php } ?>
			</div>




		</div>
	</div>
</div>