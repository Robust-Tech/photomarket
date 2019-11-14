<div>

								<div class="m-pricing-table-2">
									<div class="m-pricing-table-2__head">
										<div class="m-pricing-table-2__title m--font-light">
											<h1>
												Choose an affordable plan for your budged
											</h1>
										</div>
									</div>
											<div class="m-pricing-table-2__content">
												<div class="m-pricing-table-2__container">
													<div class="m-pricing-table-2__items row">

														<?php
    
                                                if(!empty($prices)){
                                                    $slog = 1;
                                                   
                                                    
                                                ?>
    
	                <?php
                                                     
                                                     foreach($prices as $price){
                                                ?>	<div class="m-pricing-table-2__item col-lg-4">
															<div class="m-pricing-table-2__visual">
																<div class="m-pricing-table-2__hexagon"></div>
																<span class="m-pricing-table-2__icon m--font-info">
																	<i class="fa flaticon-confetti"></i>
																</span>
															</div>
															<h2 class="m-pricing-table-2__subtitle">
																<?php echo $price->name;?>
															</h2>
															<div class="m-pricing-table-2__features">
																<span>
																	<?php echo $price->content;?>
																</span>
                                                                <span>
																	Standard Images per Month: <?php echo $price->num_of_pictures;?>
																</span>


															</div>
                                                            
															<span class="m-pricing-table-2__price">
																<?php echo $price->price;?> 
															</span>
															<span class="m-pricing-table-2__label">
																$
															</span>
															<div class="m-pricing-table-2__btn">
																<button type="button" class="btn m-btn--pill  btn-info m-btn--wide m-btn--uppercase m-btn--bolder m-btn--lg">
																	Purchase
																</button>
															</div>
														</div>
            <?php
                                                    $slog++; }
            ?>               
	  <?php    
                                                } else{ ?>
	  <div class="btn-block text-center">
	    			<i class="icon icon-Picture ico-no-result"></i>
	    		</div>
	    		
	    		<h3 class="margin-top-none text-center no-result no-result-mg">
	    		No results found yet!
	    	</h3>
	  <?php
        }
    ?>	
				
													</div>
												</div>
											</div>
										</div>
										
									</div>
