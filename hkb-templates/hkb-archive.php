<?php
/**
* Theme template for archive display
*/
?>

<?php get_header(); ?>

<!-- #ht-kb -->
<div id="hkb" class="hkb-template-archive">
	<div class="hkb-fullwcontainer">

		  <?php hkb_get_template_part('hkb-header'); ?>

			<div class="hkb-mainpage-wrapper">

				<div class="hkb-container">

					<div class="hkb-mainpage hkb-mainpage--sidebar<?php echo hkb_sidebar_archive_position(); ?>">

						<div class="hkb-mainpage__main">
							<h2 class="hkb-archivetitle"><?php _e('Help Topics', 'ht-knowledge-base'); ?></h2>

							<!-- This is where we've modified the template to add our custom CTA call -->
							<?php hkb_get_template_part('hkb-custom', 'cta'); ?>

							<?php hkb_get_template_part('hkb-content', 'archive'); ?>
						</div>

						<div class="hkb-mainpage__sidebar">
							<?php dynamic_sidebar('ht-kb-sidebar-archive');  ?>
						</div>

					</div>

				</div>

			</div>

	</div>
</div>
<!-- /#ht-kb -->

<?php get_footer(); ?>