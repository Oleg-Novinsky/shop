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
                   
        
        <div class="row">
            
          
            <div class="features_items"><!--features_items-->
                    <h2 class="title text-left">Последние товары</h2>
                    
                    <?php foreach ($latestProducts as $sliderItem): ?>
                        <div class="col-sm-3 col-xs-4">
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
                        </div>
                    <?php endforeach;?>                   

                </div><!--features_items-->

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>