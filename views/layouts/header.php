<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Главная</title>
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/price-range.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="/template/css/responsive.css" rel="stylesheet">
      
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->     
        <!--
        <link rel="shortcut icon" href="/template/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/template/images/ico/apple-touch-icon-57-precomposed.png">
        -->
    </head><!--/head-->

    <body>
        
        <div class="page-wrapper">


            <header id="header"><!--header-->
                <div class="header_top"><!--header_top-->
                    <div class="container">
                        <div class="row col-xs-4 col-sm-12">
                            <div class="mainmenu">
                                    <ul class="nav navbar-nav  navbar-collapse">
                                        <li><a href="/">Главная</a></li>
                                        <li><a href="#">Магазин</a>
                                        <li><a href="/catalog/">Каталог товаров</a></li>
                                        <li><a href="/about/">Доставка и оплата</a></li>
                                        <li><a href="/contacts/">Контакты</a></li>
                                    </ul>
                                </div>
                            <div class="sm_icons">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-vk"></i></a>
                            </div>
                        </div>
                        
                        <div class="col-xs-8 inv inv3">
                            <div class="row">
                                <div class="logo pull-right">
                                    <a href="/"><img src="/template/images/home/logo.png" alt="" /></a>
                                </div>
                            </div>
                            <div class="row">
                                <ul class="details">
                                    <li><i class="fa fa-clock-o"></i><p><br>10:00—20:00<br>без выходных</p></li>
                                    <li><i class="fa fa-truck"></i><p><br>Доставка по России</p></li>
                                    <li><i class="fa fa-phone-square "></i><p><br>8-800-555-35-35</p></li>
                                <br>
                                </ul>
                            </div>
                            
                        </div>
                    
                    </div>
                </div><!--/header_top-->

                <div class="header-middle"><!--header-middle-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-2 inv2 spec">
                                <div class="logo pull-left">
                                    <a href="/"><img src="/template/images/home/logo.png" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-sm-8 inv2 spec">
                                <ul class="details">
                                    <li><i class="fa fa-clock-o"></i><p>10:00—20:00<br>без выходных</p></li>
                                    <li><i class="fa fa-truck"></i><p>Доставка по России</p></li>
                                    <li><i class="fa fa-phone-square"></i><p>8-800-555-35-35<br><a id="modal">Заказать звонок</a></p></li>
                                <br>
                                </ul>
                            </div>
                            <div class="col-sm-2">
                                <div class="shop-menu pull-right" >
                                    
                                    <ul class="nav navbar-nav">
                                        <li><a href="/cart">
                                                <i class="fa fa-shopping-cart"></i> Корзина 
                                                (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)
                                            </a>
                                        </li>
                                    
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/header-middle-->

               <div class="product_add">Товар добавлен в корзину</div>
               
               <div id="callback">
                   <div class="pull-right" id="callback-close"><i class="fa fa-times"></i></div>
                   <p>Заказать звонок</p>
                <form class="callback" action="/models/callback.php" method="post">
                    <input class="callback-tel" type="tel" name="tel" placeholder="Введите номер телефона" />
                    <br>
                    <button class="submit" type="submit">Перезвонить</button>
                </form>
                   
               </div>
               <div id="callback-overlay"></div>

            </header><!--/header-->
            
            