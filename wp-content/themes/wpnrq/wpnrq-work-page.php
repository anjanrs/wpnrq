<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wpnrq
 * Template Name: Work Page
 */
  
//section 1 custom fields values
$section1_image = get_field('section1_image');
$section1_heading = get_field('section1_heading');
$section1_text = get_field('section1_text');
$section1_link = get_field('section1_link');

//section 2 custom fields values
$section2_image = get_field('section2_image');
$section2_heading = get_field('section2_heading');
$section2_text = get_field('section2_text');
$section2_link = get_field('section2_link');

//section 3 custom fields values
$section3_image = get_field('section3_image');
$section3_heading = get_field('section3_heading');
$section3_text = get_field('section3_text');
$section3_link = get_field('section3_link');

// //section 4 custom fields values
$section4_image = get_field('section4_image');
$section4_heading = get_field('section4_heading');
$section4_text = get_field('section4_text');
$section4_link = get_field('section4_link');

// //section 5 custom fields values
$section5_image = get_field('section5_image');
$section5_text = get_field('section5_text');
$section5_points = get_field('section5_points');
$section5_link = get_field('section5_link');
					  
get_header(); ?>

	<div id="primary" class="content-area">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		<section class="vslider-wrapper">
            <div class="vslider-item vslider-1 active">
                <div class="vslider-background-1"></div>
                <div class="vslider-content">
                    
                            <div class="vslider-heading">
                                Our Services
                            </div>
                            <div class="vslider-text">
                                The imaginative crafting of psychology, art, technology and business to create beautiful ideas, products and services.
                            </div>
                            <section class="whatwedo">
                                <div class="container-fluid no-gutter">
                                    <div class="row no-margin ">
                                    <div class="col-xs-4 work-item no-gutter">
                                        <a href="">
                                            <img src="<?php echo(get_template_directory_uri());?>/assets/img/bulb.png" alt="BRANDING, BRAND STRATEGY">
                                            <p class="title">BRANDING,<br>BRAND STRATEGY</p>
                                        </a>
                                    </div>
                                    <div class="col-xs-4 work-item no-gutter" >
                                        <a href="#">
                                        <img src="<?php echo(get_template_directory_uri());?>/assets/img/pulse.png" alt="CONVERSION, RATE OPTIMISATION">
                                        <p class="title">CONVERSION,<br>RATE OPTIMISATION</p>
                                        </a>
                                    </div>
                                    <div class="col-xs-4 work-item no-gutter">
                                        <a href="#">
                                        <img src="<?php echo(get_template_directory_uri());?>/assets/img/pencil.png" alt="UX, DESIGN, DEVELOPMENT">
                                        <p class="title">UX, DESIGN,<br>DEVELOPMENT</p>
                                        </a>
                                    </div>
                                    <div/>
                                </div>
                            </section>
                    
                </div>
            </div>
            <div class="vslider-item vslider-2">
                <div class="vslider-background-2">
                    text slide conetnt2
                </div>
            </div>
            <div class="vslider-item vslider-3">
                <div class="vslider-background-3">
                    text slide conetnt3
                </div>
            </div>
        </section>
        <nav class="vslider-nav">
            <span id="vslider-1" class="vslider-nav-item vslider-nav-item-active"></span>
            <span id="vslider-2" class="vslider-nav-item"></span>
            <span id="vslider-3" class="vslider-nav-item"></span>
        </nav>

        <section class="section-slider-left" id="left-slider-1">
            <div class="container-fluid no-gutter">
                <div class="row no-margin slider-left-row">
                    <div class="hidden-sm hidden-xs  col-md-6 col-lg-6 no-gutter">
					  <?php echo '<img src="' . $section1_image['url'] . '" width="100%"/>'; ?>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 no-gutter  slider-left-column">
                        <div class="slider-left-wrapper">
                            <div class="slider-left-heading">
                                <?php echo $section1_heading; ?>
                            </div>
                            <div class="slider-left-text">
								<?php echo $section1_text; ?>
                            </div>
                            
                            <div class="slider-left-link">
                                <a href="<?php echo $section1_link?>"  class="link">View related work</a>
                            </div>
                        </div>
                </div>
               
                </div>
            </div>
        </section>

        <section class="info-section-wrapper">
            <div class="info-section-item">
                <div class="info-section-background">
                    <?php echo '<img src="' . $section2_image['url'] . '" width="100%"/>'; ?>
                </div>
                <div class="info-section-content">
                    <div class="info-section-heading">
                         <?php echo $section2_heading; ?>
                    </div>
                    <div class="info-section-text">
						<?php echo $section2_text; ?>
                    </div>
                    <!--<div class="info-section-text">
						our brand development process merges traditional brand planning methodologies with a new world digital approach to developing brand.<br><br>
                        Our process focuses on developing a brands position in market, tone or voice, personality and communication platform.
                    </div>-->
                    <div class="info-section-link">
                        <a href="<?php echo $section2_link?>"  class="link">View related work</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-slider-left"  id="left-slider-2">
            <div class="container-fluid no-gutter">
                <div class="row no-margin slider-left-row">
                    <div class="hidden-sm hidden-xs  col-md-6 col-lg-6 no-gutter">
                        <?php echo '<img src="' . $section3_image['url'] . '" width="100%"/>'; ?>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 no-gutter  slider-left-column">
                        <div class="slider-left-wrapper">
                            <div class="slider-left-heading">
                                 <?php echo $section3_heading; ?>
                            </div>
                            <div class="slider-left-text">
                                <?php echo $section3_text; ?>
                                <!--We are rnowned for having one of the most rigorous and well structured design and development mythologies
                                built for both midlevel and enterprise level projects.<br>
                                We take a platform agnostic approac to our work, this ensures that the technologies used for development can deliver
                                the designed user experience designed. Whether that is building a mobile site, a content-rich responsive website or an internal
                                employee network, our work is built for scale, performance, and logevity.-->
                            </div>
                            <div class="slider-left-link">
                                <a href="<?php echo $section3_link?>"  class="link">View related work</a>
                            </div>
                        </div>
                </div>
               
                </div>
            </div>
        </section>

        <section class="info-section-wrapper">
            <div class="info-section-item">
                <div class="info-section-background">
                    <?php echo '<img src="' . $section4_image['url'] . '" width="100%"/>'; ?>
                </div>
                <div class="info-section-content">
                    <div class="info-section-heading">
                        <?php echo $section4_heading; ?>
                    </div>
                    <div class="info-section-text">
                        <?php echo $section4_text; ?>
                    </div>
                    <div class="info-section-link">
                        <a href="<?php echo $section4_link?>"  class="link">Read more</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-slider-left"  id="left-slider-3">
            <div class="container-fluid no-gutter">
                <div class="row no-margin slider-left-row">
                    <div class="hidden-sm hidden-xs  col-md-6 col-lg-6 no-gutter">
                        <?php echo '<img src="' . $section5_image['url'] . '" width="100%"/>'; ?>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 no-gutter  slider-left-column">
                        <div class="slider-left-wrapper">
                            <div class="slider-left-text">
                                <?php echo $section5_text; ?>
                                <!--Because we take an integrated approach to our work across brand, design, technology and conversion Rate we are
                                able to ensure we create test that are consistent to the brand sentient and personality. Our Full-service
                                Optimisation Program will provide clients with a robust solution across web and mobile including:-->
                            </div>
                            <div class="slider-left-points">
                                <?php echo $section5_points?>

                               <!-- <ul>
                                    <li>A/B Testing</li>
                                    <li>Multivariate testing</li>
                                    <li>Customer segmentation</li>
                                    <li>Conversion mapping</li>
                                    <li>Behavioural Analytics</li>
                                </ul>
                                <ul>
                                    <li>Personalisation</li>
                                    <li>Analytics set-up and optimisation</li>
                                    <li>Onsite sales funnel optimisation</li>
                                    <li>Media optimisation</li>
                                    <li>Reporting dashboard</li>
                                </ul>-->
                            </div>
                            <div class="slider-left-link">
                                <a href="<?php echo $section5_link?>" class="link">read more</a>
                            </div>
                        </div>
                </div>
               
                </div>
            </div>
        </section>

         <section class="section-stayintouch">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12">
                      <div class="content-heading">
                        Stay in touch
                      </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="content-text">
                        Each month we release a newsletter on how we
                        do what we do. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.
                        <div class="form-group sign-up-form">
                          <input type="email" class="form-control" id="email" placeholder="Enter your email address...">
                        </div>
                    </div>
                  </div>
                  <div class="col-xs-12">
                      <a herf="#" class="content-link link">Sign up to our newsletter</a>
                  </div>
                <div/>
              </div>
          </section>
		<?php get_footer(); ?>
	</div><!-- #primary -->

