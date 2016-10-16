<?php 

	require('../../config.php');
	require('../../templates/header.php'); 

?>

			<main role="main" class="clear main-wrapper">
				
				<article> 
					<header>
						<h1>Welsh Springer Spaniel</h1>
						<p>Published: <time pubdate="pubdate">2016-10-07</time> </p>
						<hr>
					</header>

                    <img  class="pet-pix" src="<?php print IMAGES; ?>/dogs/Welsh_Springer_Spaniel.jpg" alt="Welsh Springer Spaniel">

				</article>

				<?php require('../../templates/sidebar1.php'); ?>

			</main>

<?php require('../../templates/footer.php'); ?>