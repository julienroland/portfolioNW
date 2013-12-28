<?php
/*
Template Name: iModul
*/
?>

<?php get_header(); ?>
  
		<?php 
 
		/*
		*  Loop through a Flexible Content field and display it's content with different views for different layouts
		*/
		 
		while(has_sub_field("imodul")): ?>
		 
		 
		 
		 
 
		 
			<?php if(get_row_layout() == "1_spalte"):?>
				<div class="row">
					<div class="twelve columns">
						<?php the_sub_field("spalte_1"); ?>
					</div>
				</div>
				
				
			<?php elseif(get_row_layout() == "2_spalter"): ?>
				<div class="row">
					<div class="six columns">
						<?php the_sub_field("spalte_1"); ?>
					</div>
					<div class="six columns">
						<?php the_sub_field("spalte_2"); ?>
					</div>
				</div>
			
			
			<?php elseif(get_row_layout() == "66_33"): ?>
				<div class="row">
					<div class="eight columns">
						<?php the_sub_field("spalte_1"); ?>
					</div>
					<div class="four columns">
						<?php the_sub_field("spalte_2"); ?>
					</div>
				</div>
		
	
			<?php elseif(get_row_layout() == "33_66"): ?>
				<div class="row">
					<div class="four columns">
						<?php the_sub_field("spalte_1"); ?>
					</div>
					<div class="eight columns">
						<?php the_sub_field("spalte_2"); ?>
					</div>
				</div>
			
		
			<?php elseif(get_row_layout() == "75_25"): ?>
				<div class="row">
					<div class="nine columns">
						<?php the_sub_field("spalte_1"); ?>
					</div>
					<div class="three columns">
						<?php the_sub_field("spalte_2"); ?>
					</div>
				</div>
			
		
			<?php elseif(get_row_layout() == "25_75"): ?>
				<div class="row">
					<div class="three columns">
						<?php the_sub_field("spalte_1"); ?>
					</div>
					<div class="nine columns">
						<?php the_sub_field("spalte_2"); ?>
					</div>
				</div>
		
			
			<?php elseif(get_row_layout() == "3_spalter"): ?> 
				<div class="row">
					<div class="four columns">
						<?php the_sub_field("spalte_1"); ?>
					</div>
					<div class="four columns">
						<?php the_sub_field("spalte_2"); ?>
					</div>
					<div class="four columns">
						<?php the_sub_field("spalte_3"); ?>
					</div>
				</div>
			
			
			<?php elseif(get_row_layout() == "4_spalter"): ?>
				<div class="row">
					<div class="three columns">
						<?php the_sub_field("spalte_1"); ?>
					</div>
					<div class="three columns">
						<?php the_sub_field("spalte_2"); ?>
					</div>
					<div class="three columns">
						<?php the_sub_field("spalte_3"); ?>
					</div>
					<div class="three columns">
						<?php the_sub_field("spalte_4"); ?>
					</div>
				</div>
				
			
			<?php elseif(get_row_layout() == "pris_tabel"): ?>
			
				<?php if( get_sub_field('produkt') ): ?>
				 	<div class="row">
				 	
						<?php while( has_sub_field('produkt') ): ?>
							<div class="four columns">
								<ul class="pricing-table">
									 <li class="title"><?php the_sub_field("produkt_navn"); ?></li>
									 <li class="price"><?php the_sub_field("pris"); ?>,-</li>
									 <li class="description"><?php the_sub_field("beskrivelse"); ?></li>

										<?php if( get_sub_field('egenskaber') ): // check egenskaber (sub repeater)?>
											
											<?php 
			 
											// loop through rows (sub repeater)
											while( has_sub_field('egenskaber') ): 
			 
												// display each item as a list - with a class of completed ( if completed )
												?>
												<li class="bullet-item"><?php the_sub_field('egenskab'); ?></li>
											<?php endwhile; ?>
											
										<?php endif; //if( get_sub_field('items') ): ?>
										 
										 
										 
									 </li>
									 <li class="cta-button"><a class="button" href="<?php the_sub_field("link"); ?>">Se mere &raquo;</a></li>
								</ul>
						</div>
						<?php endwhile; ?>
					
					</div>
				<?php endif; ?>
			
			
			
			<?php elseif(get_row_layout() == "tabs"): ?>
			
				<?php if( get_sub_field('tabs_repeater') ): ?>
				 	<div class="row">
					 	<div class="twelve columns">
						 	<dl class="tabs">
						 		
								<?php 
									$i = 0;
									while( has_sub_field('tabs_repeater') ): 
									$i++;
								?>
									<dd><a href="#<?php echo $i; ?>"><?php the_sub_field('tab_label'); ?></a></dd>
								<?php endwhile; ?>
							
							</dl>
							<ul class="tabs-content">
						 	
								<?php 
									$i = 0;
									while( has_sub_field('tabs_repeater') ): 
									$i++;
								?>
									<li id="<?php echo $i; ?>Tab"><?php the_sub_field('tab_content'); ?></li>
								<?php endwhile; ?>
							
							</ul>
						</div>
					</div>
					
					
				<?php endif; ?>
			
			<?php elseif(get_row_layout() == "tabs"): ?>
			
				<?php if( get_sub_field('tabs_repeater') ): ?>
				 	
						 	
					
				<?php endif; ?>

			
			<?php endif; ?>
		 
		<?php endwhile; ?>
	
	
<?php get_footer(); ?>
