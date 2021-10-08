<?php

/* @var $this View */

use yii\bootstrap4\Html;
use yii\helpers\Url;
use yii\web\View;

?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <?= Html::img("@storeImg/xshop01.png") ?>
                    </div>
                    <div class="shop-body">
                        <h3>Laptop<br>Collection</h3>
                        <?= Html::a('Shop now <i class="fa fa-arrow-circle-right"></i>', Url::to("/store/product"), ['class' => 'cta-btn']) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <?= Html::img("@storeImg/xshop03.png") ?>
                    </div>
                    <div class="shop-body"><h3>Accessories<br>Collection</h3>
                        <?= Html::a('Shop now <i class="fa fa-arrow-circle-right"></i>', Url::to("/store/product"), ['class' => 'cta-btn']) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <?= Html::img("@storeImg/xshop02.png") ?>
                    </div>
                    <div class="shop-body">
                        <h3>Cameras<br>Collection</h3>
                        <?= Html::a('Shop now <i class="fa fa-arrow-circle-right"></i>', Url::to("/store/product"), ['class' => 'cta-btn']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">New Products</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><?= Html::a("Laptops", Url::to("#tab1"), ['data-toggle' => 'tab']) ?></li>
                            <li><?= Html::a("Smartphones", Url::to("#tab1"), ['data-toggle' => 'tab']) ?></li>
                            <li><?= Html::a("Cameras", Url::to("#tab1"), ['data-toggle' => 'tab']) ?></li>
                            <li><?= Html::a("Accessories", Url::to("#tab1"), ['data-toggle' => 'tab']) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <div class="product">
                                    <div class="product-img">
                                        <?= Html::img("@storeImg/xproduct01.png") ?>
                                        <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                        <h4 class="product-price">$980.00
                                            <del class="product-old-price">$990.00</del>
                                        </h4>
                                        <div class="product-rating"><i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                        class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                        class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart
                                        </button>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img"> <?= Html::img("@storeImg/xproduct02.png") ?>
                                        <div class="product-label"><span class="new">NEW</span></div>
                                    </div>
                                    <div class="product-body"><p class="product-category">Category</p>
                                        <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                        <h4 class="product-price">$980.00
                                            <del class="product-old-price">$990.00</del>
                                        </h4>
                                        <div class="product-rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star-o"></i></div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                        class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                        class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart
                                        </button>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <?= Html::img("@storeImg/xproduct03.png") ?>
                                        <div class="product-label"><span class="sale">-30%</span></div>
                                    </div>
                                    <div class="product-body"><p class="product-category">Category</p>
                                        <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                        <h4 class="product-price">$980.00
                                            <del class="product-old-price">$990.00</del>
                                        </h4>
                                        <div class="product-rating"></div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                        class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                        class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart
                                        </button>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img"> <?= Html::img("@storeImg/xproduct04.png") ?> </div>
                                    <div class="product-body"><p class="product-category">Category</p>
                                        <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                        <h4 class="product-price">$980.00
                                            <del class="product-old-price">$990.00</del>
                                        </h4>
                                        <div class="product-rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                        class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                        class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart
                                        </button>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img"> <?= Html::img("@storeImg/xproduct05.png") ?> </div>
                                    <div class="product-body"><p class="product-category">Category</p>
                                        <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                        <h4 class="product-price">$980.00
                                            <del class="product-old-price">$990.00</del>
                                        </h4>
                                        <div class="product-rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                        class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                        class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="hot-deal" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hot-deal">
                    <ul class="hot-deal-countdown">
                        <li>
                            <div><h3>02</h3> <span>Days</span></div>
                        </li>
                        <li>
                            <div><h3>10</h3> <span>Hours</span></div>
                        </li>
                        <li>
                            <div><h3>34</h3> <span>Mins</span></div>
                        </li>
                        <li>
                            <div><h3>60</h3> <span>Secs</span></div>
                        </li>
                    </ul>
                    <h2 class="text-uppercase">hot deal this week</h2>
                    <p>New Collection Up to 50% OFF</p>
                    <?= Html::a("Shop now", Url::toRoute(["product"]), ['class' => 'primary-btn cta-btn']) ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title"><h3 class="title">Top selling</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><?= Html::a("Laptops", Url::to("#tab2"), ['data-toggle' => 'tab']) ?></li>
                            <li><?= Html::a("Smartphones", Url::to("#tab2"), ['data-toggle' => 'tab']) ?></li>
                            <li><?= Html::a("Cameras", Url::to("#tab2"), ['data-toggle' => 'tab']) ?></li>
                            <li><?= Html::a("Accessories", Url::to("#tab2"), ['data-toggle' => 'tab']) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <div id="tab2" class="tab-pane fade in active">
                            <div class="products-slick" data-nav="#slick-nav-2">
                                <div class="product">
                                    <div class="product-img"> <?= Html::img("@storeImg/xproduct06.png") ?>
                                        <div class="product-label"><span class="sale">-30%</span> <span
                                                    class="new">NEW</span></div>
                                    </div>
                                    <div class="product-body"><p class="product-category">Category</p>
                                        <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                        <h4 class="product-price">$980.00
                                            <del class="product-old-price">$990.00</del>
                                        </h4>
                                        <div class="product-rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                        class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                        class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart
                                        </button>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img"> <?= Html::img("@storeImg/xproduct07.png") ?>
                                        <div class="product-label"><span class="new">NEW</span></div>
                                    </div>
                                    <div class="product-body"><p class="product-category">Category</p>
                                        <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                        <h4 class="product-price">$980.00
                                            <del class="product-old-price">$990.00</del>
                                        </h4>
                                        <div class="product-rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star-o"></i></div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                        class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                        class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart
                                        </button>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img"> <?= Html::img("@storeImg/xproduct08.png") ?>
                                        <div class="product-label"><span class="sale">-30%</span></div>
                                    </div>
                                    <div class="product-body"><p class="product-category">Category</p>
                                        <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                        <h4 class="product-price">$980.00
                                            <del class="product-old-price">$990.00</del>
                                        </h4>
                                        <div class="product-rating"></div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                        class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                        class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart
                                        </button>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img"> <?= Html::img("@storeImg/xproduct09.png") ?> </div>
                                    <div class="product-body"><p class="product-category">Category</p>
                                        <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                        <h4 class="product-price">$980.00
                                            <del class="product-old-price">$990.00</del>
                                        </h4>
                                        <div class="product-rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                        class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                        class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart
                                        </button>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img"> <?= Html::img("@storeImg/xproduct01.png") ?> </div>
                                    <div class="product-body"><p class="product-category">Category</p>
                                        <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                        <h4 class="product-price">$980.00
                                            <del class="product-old-price">$990.00</del>
                                        </h4>
                                        <div class="product-rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                        class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                        class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-6">
                <div class="section-title"><h4 class="title">Top selling</h4>
                    <div class="section-nav">
                        <div id="slick-nav-3" class="products-slick-nav"></div>
                    </div>
                </div>
                <div class="products-widget-slick" data-nav="#slick-nav-3">
                    <div>
                        <div class="product-widget">
                            <div class="product-img"> <?= Html::img("@storeImg/xproduct07.png") ?> </div>
                            <div class="product-body"><p class="product-category">Category</p>
                                <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                        <div class="product-widget">
                            <div class="product-img"> <?= Html::img("@storeImg/xproduct08.png") ?> </div>
                            <div class="product-body"><p class="product-category">Category</p>
                                <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                        <div class="product-widget">
                            <div class="product-img"> <?= Html::img("@storeImg/xproduct09.png") ?> </div>
                            <div class="product-body"><p class="product-category">Category</p>
                                <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-widget">
                            <div class="product-img"> <?= Html::img("@storeImg/xproduct01.png") ?> </div>
                            <div class="product-body"><p class="product-category">Category</p>
                                <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                        <div class="product-widget">
                            <div class="product-img"> <?= Html::img("@storeImg/xproduct02.png") ?> </div>
                            <div class="product-body"><p class="product-category">Category</p>
                                <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                        <div class="product-widget">
                            <div class="product-img"> <?= Html::img("@storeImg/xproduct03.png") ?> </div>
                            <div class="product-body"><p class="product-category">Category</p>
                                <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-6">
                <div class="section-title"><h4 class="title">Top selling</h4>
                    <div class="section-nav">
                        <div id="slick-nav-4" class="products-slick-nav"></div>
                    </div>
                </div>
                <div class="products-widget-slick" data-nav="#slick-nav-4">
                    <div>
                        <div class="product-widget">
                            <div class="product-img"> <?= Html::img("@storeImg/xproduct04.png") ?> </div>
                            <div class="product-body"><p class="product-category">Category</p>
                                <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                        <div class="product-widget">
                            <div class="product-img"> <?= Html::img("@storeImg/xproduct05.png") ?> </div>
                            <div class="product-body"><p class="product-category">Category</p>
                                <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                        <div class="product-widget">
                            <div class="product-img"> <?= Html::img("@storeImg/xproduct06.png") ?> </div>
                            <div class="product-body"><p class="product-category">Category</p>
                                <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-widget">
                            <div class="product-img"> <?= Html::img("@storeImg/xproduct07.png") ?> </div>
                            <div class="product-body"><p class="product-category">Category</p>
                                <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                        <div class="product-widget">
                            <div class="product-img"> <?= Html::img("@storeImg/xproduct08.png") ?> </div>
                            <div class="product-body"><p class="product-category">Category</p>
                                <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                        <div class="product-widget">
                            <div class="product-img"> <?= Html::img("@storeImg/xproduct09.png") ?> </div>
                            <div class="product-body"><p class="product-category">Category</p>
                                <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-sm visible-xs"></div>
            <div class="col-md-4 col-xs-6">
                <div class="section-title"><h4 class="title">Top selling</h4>
                    <div class="section-nav">
                        <div id="slick-nav-5" class="products-slick-nav"></div>
                    </div>
                </div>
                <div class="products-widget-slick" data-nav="#slick-nav-5">
                    <div>
                        <div class="product-widget">
                            <div class="product-img"> <?= Html::img("@storeImg/xproduct01.png") ?> </div>
                            <div class="product-body"><p class="product-category">Category</p>
                                <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                        <div class="product-widget">
                            <div class="product-img"> <?= Html::img("@storeImg/xproduct02.png") ?> </div>
                            <div class="product-body"><p class="product-category">Category</p>
                                <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                        <div class="product-widget">
                            <div class="product-img"> <?= Html::img("@storeImg/xproduct03.png") ?> </div>
                            <div class="product-body"><p class="product-category">Category</p>
                                <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-widget">
                            <div class="product-img"> <?= Html::img("@storeImg/xproduct04.png") ?> </div>
                            <div class="product-body"><p class="product-category">Category</p>
                                <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                        <div class="product-widget">
                            <div class="product-img"> <?= Html::img("@storeImg/xproduct05.png") ?> </div>
                            <div class="product-body"><p class="product-category">Category</p>
                                <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                        <div class="product-widget">
                            <div class="product-img"> <?= Html::img("@storeImg/xproduct06.png") ?> </div>
                            <div class="product-body"><p class="product-category">Category</p>
                                <h3 class="product-name"><?= Html::a("product name goes here", Url::toRoute(["product"])) ?></h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>