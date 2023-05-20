<?php
include __DIR__ . '/Models/Product.php';
?>


<?php include './Components/header.php' ?>

<main>
	<div class="container my-5">
		<div class="p-2 d-flex flex-column align-items-center">
			<h1 class="text-dark">dog's shop</h1>
			<div class="d-flex justify-content-center ">
				<?php foreach ($products as $product) { ?>
					<?php if ($product->animal == 'dog') { ?>
						<?php include './Components/card.php' ?>
					<?php } ?>
				<?php } ?>
			</div>
		</div>

		<div class="p-2 d-flex flex-column align-items-center">
			<h1 class="text-dark">cat's shop</h1>

			<div class="d-flex justify-content-center ">
				<?php foreach ($products as $product) { ?>
					<?php if ($product->animal == 'cat') { ?>
						<?php include './Components/card.php' ?>
					<?php } ?>
				<?php } ?>
			</div>

		</div>
	</div>
</main>

<?php include './Components/footer.php' ?>