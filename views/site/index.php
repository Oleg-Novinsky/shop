<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">


                        <div class="row">
                            <div class="submenu">
                            <?php foreach ($categories as $categoryItem): ?>
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id']; ?>"
                                           class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>"
                                           >                                                                                    
                                               <?php echo $categoryItem['name']; ?>
                                        </a>
                                    </h4>
                        <?php endforeach; ?>
                            </div>
                        </div>
        
        
        <div id="content" class="inv2">
		
		
		<div class="slider slider1">
			<div class="sliderContent">
				<div class="itemslider">
                                    <img src="/template/images/slider2/1.jpg" alt="" />
				</div>
				<div class="itemslider">
					<img src="/template/images/slider2/2.jpg" alt="" />
				</div>
				<div class="itemslider">
					<img src="/template/images/slider2/img3.jpg" alt="" />
				</div>
				<div class="itemslider">
					<img src="/template/images/slider2/img4.jpg" alt="" />
				</div>
				<div class="itemslider">
					<img src="/template/images/slider2/img5.jpg" alt="" />
				</div>
				<div class="itemslider">
					<img src="/template/images/slider2/img6.jpg" alt="" />
				</div>
			</div>
		</div>
		
		
		
	</div>
        

        <div class="inv4">
            <br>
            <br>
        </div>
            <div class="row inv3">
         

            <div class="col-sm-9">
                
                
                <h2 class="title text-left">Рекомендуемые товары</h2>
                <div class="recommended_items"><!--recommended_items-->
                    
                    
                    <div class="cycle-slideshow" 
                         data-cycle-fx=carousel
                         data-cycle-timeout=50000
                         data-cycle-carousel-visible=3
                         data-cycle-carousel-fluid=true
                         data-cycle-slides="div.item"
                         data-cycle-prev="#prev"
                         data-cycle-next="#next"
                         >                        
                             <?php foreach ($recommendedProducts as $sliderItem): ?>
                             <div class="item">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="/product/<?php echo $sliderItem['id']; ?>">
                                                <div class="price"><h2><?php echo $sliderItem['price']; ?> руб.</h2></div>
                                            <img src="<?php echo Product::getPreview($sliderItem['id']); ?>" alt="" />
                                            
                                            </a>
                                         
                                            </div>
                                        <br>
                                        <div class="product_name text-center">
                                            <a href="/product/<?php echo $sliderItem['id']; ?>">
                                                <?php echo $sliderItem['name']; ?>
                                            </a>
                                            </div>
                                        <br>
                                       
                                       <div class="col-sm-12" style="padding: 0; text-align: center;"><a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $sliderItem['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                       <div style="display: none;"><input type="number" id="count" value="1" class="input_count text-center"></div>     
                                       </div>
                                        
                                         
                                        
                                        <?php if ($sliderItem['is_new']): ?>
                                            <img src="/template/images/home/new.png" class="new" alt="" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <a class="left recommended-item-control" id="prev" href="#recommended-item-carousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right recommended-item-control" id="next"  href="#recommended-item-carousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>

            </div><!--/recommended_items-->
 <!-- =========================== -->           
               

        </div>
            
            <div class="col-sm-3 inv2"> 
                
                <p class="review_header">Наши акции</p>
                <br>
                <img src="/template/images/ad/1.jpg" style="height:auto; width: 100%;  border: 1px solid #000;">
               
                 </div>
    </div>
         
     <div class="row inv3">
         

            <div class="col-sm-9">

                
                <h2 class="title text-left">Последние товары</h2>
                <div class="recommended_items"><!--recommended_items-->
                    
                    
                    <div class="cycle-slideshow" 
                         data-cycle-fx=carousel
                         data-cycle-timeout=4000
                         data-cycle-carousel-visible=3
                         data-cycle-carousel-fluid=true
                         data-cycle-slides="div.item"
                         data-cycle-prev="#prev_l"
                         data-cycle-next="#next_l"
                         >                        
                             <?php foreach ($latestProducts as $sliderItem): ?>
                             <div class="item">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="/product/<?php echo $sliderItem['id']; ?>">
                                                <div class="price"><h2><?php echo $sliderItem['price']; ?> руб.</h2></div>
                                            <img src="<?php echo Product::getPreview($sliderItem['id']); ?>" alt="" />
                                            
                                            </a>
                                         
                                            </div>
                                        <br>
                                        <div class="product_name text-center">
                                            <a href="/product/<?php echo $sliderItem['id']; ?>">
                                                <?php echo $sliderItem['name']; ?>
                                            </a>
                                            </div>
                                        <br>
                                       
                                       <div class="col-sm-12" style="padding: 0; text-align: center;"><a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $sliderItem['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                            <div style="display: none;"><input type="number" id="count" value="1" class="input_count text-center"></div>
                                       </div>
                                        
                                         
                                        
                                        <?php if ($sliderItem['is_new']): ?>
                                            <img src="/template/images/home/new.png" class="new" alt="" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <a class="left recommended-item-control" id="prev_l" href="#latest-item-carousel" data-slide="prev_l">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right recommended-item-control" id="next_l"  href="#latest-item-carousel" data-slide="next_l">
                        <i class="fa fa-angle-right"></i>
                    </a>
            <br>
            </div><!--/recommended_items-->
            
              

        </div>
         
          <div class="col-sm-3">
                 <p class="review_header">Отзывы</p>
                    <div class="review">
                    <div class="slider3">
                           <div class="sliderContent">
                                   <div class="itemslider">
                                       <?php foreach ($reviewList as $list): ?>


                                               <br>
                                               <div class="review_txt">
                                               <a href="#"><?php echo $list['review']; ?></a>
                                               
                                               <div style="text-align: center; font-size: 1.2em;">***</div>
                                               <div style="text-align: right; font-size: 1em; font-style: italic;"><?php echo $list['name'];?></div>
                                               </div>

                                        <?php endforeach;?>
                                   </div>

                           </div>
                   </div>
                   </div>
              </div>
    </div>

        
        
    </div>
    
    
    
    
</section>



<?php include ROOT . '/views/layouts/footer.php'; ?>