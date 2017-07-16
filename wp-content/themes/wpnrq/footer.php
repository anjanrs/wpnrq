<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpnrq
 */

?>
		<section class="section-footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 social-links">
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-slideshare" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
					<img class="partners" src="<?php echo(get_template_directory_uri());?>/assets/img/p1.png"/>
					<img class="partners" src="<?php echo(get_template_directory_uri());?>/assets/img/p2.png"/>
					<img class="partners" src="<?php echo(get_template_directory_uri());?>/assets/img/p3.png"/>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
					<hr/>
					</div>
					<div class="col-xs-12 copyright">
					@ copyright New Republique 2016
					</div>
				</div>
			</div>
		</section>
	</div><!-- #content -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
