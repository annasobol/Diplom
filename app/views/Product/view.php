<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
<!--                <li><a href="index.html">Home</a></li>-->
<!--                <li class="active">Single</li>-->
                <?=$breadcrumbs?>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--start-single-->
<div class="single contact">
    <div class="container">
        <div class="single-main">

            <div class="col-md-9 single-main-left">
                <div class="sngl-top">
                    <div class="col-md-5 single-top-left">
                        <?php if ($gallery): ?>
                        <div class="flexslider">
                            <ul class="slides">
                                <?php foreach ($gallery as $item): ?>
                                <li data-thumb="images/<?=$item->img;?>">
                                    <div class="thumb-image"><img src="images/<?=$item->img;?>" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php else: ?>
                          <img src="images/<?=$product->img;?>" alt="pr-ph">
                        <?php endif; ?>
                    </div>
                    <?php
                        $curr = \ishop\App::$app->getProperty('currency');
                        $cats = \ishop\App::$app->getProperty('cats');
                     ?>
                    <div class="col-md-7 single-top-right">
                        <div class="single-para simpleCart_shelfItem">
                            <h2><?=$product->title;?></h2>
                            <div class="star-on">
                                <ul class="star-footer">
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                </ul>
                                <div class="review">
                                    <a href="#"> 1 customer review </a>

                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <h5 class="item_price" id="base-price" data-base="<?=$product->price * $curr['value'];?><?=$curr['symbol_right'];?>"><?=$curr['symbol_left'];?><?=$product->price * $curr['value'];?><?=$curr['symbol_right'];?></h5>
                            <?php if ($product->old_price): ?>
                                <del><?=$curr['symbol_left'];?><?=$product->old_price * $curr['value'];?><?=$curr['symbol_right'];?></del>
                            <?php endif; ?>
                            <?=$product->content; ?>
                            <?php if ($mods): ?>
                            <p id="pppppp">Olivia Burton Big Dial OB14BD27 is a beautiful and attractive Ladies watch. Case material is PVD rose plating while the dial colour is Rose. This watch is market as water resistant. It means it can withstand slight splashes and rain, but is NOT to be immersed in water. The watch is shipped with an original box and a guarantee from the manufacturer.</p>
                            <div class="available">
                                <ul>
                                    <li>Color
                                        <select>
                                            <option>Choose the color</option>
                                            <?php foreach ($mods as $mod): ?>
                                            <option data-title="<?=$mod->title;?>" data-price="<?=$mod->price * $curr['value'];?>" value="<?=$mod->id;?>"><?=$mod->title;?></option>
                                        <?php endforeach;?>
                                        </select>

                                    </li>
                                    <div class="clearfix"> </div>
                                </ul>
                            </div>
                            <?php endif; ?>
                            <script>
                                function ppd()
                                {
                                    //alert(document.getElementById('brand__name').innerHTML);
                                    var p = document.createElement('p');

                                    document.body.appendChild(p);

                                    docInfo.myText=document.getElementById('brand__name').innerHTML;
                                    docInfo.content[0].text=document.getElementById('brand__name').innerHTML;

                                    docInfo.content[1].text=document.getElementById('item_price').innerHTML;

                                    docInfo.content[2].text=document.getElementById('pppppp').innerHTML;

                                    // docInfo.content[1].text=document.getElementById('item_price').innerHTML;



                                    console.dir(docInfo);

                                    p.appendChild(pdfMake.createPdf(docInfo).download('name.pdf'));
                                }
                            </script>
                            <ul class="tag-men">
                                <li><span >Category:</span>
                                    <span class="women1"><a href="category/<?=$cats[$product->category_id]['alias']?>"><?=$cats[$product->category_id]['title']?></a></span></li>
<!--                                <li><span>Dial Colour:</span>-->
<!--                                    <span class="women1">Rose</span></li>-->
                            </ul>
                            <div class="quantity">
                                <input type="number" size="4" value="1" name="quantity" min="1" step="1">
                            </div>
                            <a id="productAdd" data-id="<?=$product->id;?>" href="cart/add?id=<?=$product->id;?>" class="add-cart item_add add-to-cart-link">ADD TO CART</a>

                            <a href="#" class="add-pdf"onclick="ppd();">PDF</a>

                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="tabs">
                    <ul class="menu_drop">
                        <li class="item1"><a href="#"><img src="images/arrow.png" alt="">Description</a>
                            <ul>
                                <li class="subitem1"><a href="#">Olivia Burton Big Dial OB14BD27 is a beautiful and attractive Ladies watch. Case material is PVD rose plating while the dial colour is Rose. This watch is market as water resistant. It means it can withstand slight splashes and rain, but is NOT to be immersed in water. The watch is shipped with an original box and a guarantee from the manufacturer.</a></li>
                                <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                            </ul>
                        </li>
                        <li class="item2"><a href="#"><img src="images/arrow.png" alt="">Additional information</a>
                            <ul>
                                <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                            </ul>
                        </li>
                        <li class="item3"><a href="#"><img src="images/arrow.png" alt="">Reviews (10)</a>
                            <ul>
                                <li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
                                <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                            </ul>
                        </li>
                        <li class="item4"><a href="#"><img src="images/arrow.png" alt="">Helpful Links</a>
                            <ul>
                                <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                            </ul>
                        </li>
                        <li class="item5"><a href="#"><img src="images/arrow.png" alt="">Make A Gift</a>
                            <ul>
                                <li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
                                <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <?php if ($related): ?>
                	<div class="latestproducts">
                        <div class="product-one">
                            <h3>See more</h3>
                            <?php foreach ($related as $item): ?>
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="product/<?=$item['alias'];?>" class="mask"><img class="img-responsive zoom-img" src="images/<?=$item['img'];?>" alt="" /></a>
                                    <div class="product-bottom">
                                        <h3><a href="product/<?=$item['alias'];?>"><?=$item['title'];?></a></h3>
                                        <p>Explore Now</p>
                                        <h4><a class="item_add add-to-cart-link" href="cart/add?id=<?=$item['id'];?>" data-id="<?=$item['id'];?>"><i></i></a>
                                            <span class=" item_price"><?=$curr['symbol_left'];?><?=$item['price'] * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                            <?php if ($product->old_price): ?>
                                                <del><?=$curr['symbol_left'];?><?=$item['old_price'] * $curr['value'];?><?=$curr['symbol_right'];?></del>
                                            <?php endif; ?>
                                        </h4>
                                    </div>
                                    <div class="srch">
                                        <span>-50%</span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($recentlyViewed): ?>
                    <div class="latestproducts">
                        <div class="product-one">
                            <h3>Recently Viewed</h3>
                            <?php foreach ($recentlyViewed as $item): ?>
                                <div class="col-md-4 product-left p-left">
                                    <div class="product-main simpleCart_shelfItem">
                                        <a href="product/<?=$item['alias'];?>" class="mask"><img class="img-responsive zoom-img" src="images/<?=$item['img'];?>" alt="" /></a>
                                        <div class="product-bottom">
                                            <h3><a href="product/<?=$item['alias'];?>"><?=$item['title'];?></a></h3>
                                            <p>Explore Now</p>
                                            <h4><a class="item_add add-to-cart-link" href="cart/add?id=<?=$item['id'];?>" data-id="<?=$item['id'];?>"><i></i></a>
                                                <span class=" item_price"><?=$curr['symbol_left'];?><?=$item['price'] * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                                <?php if ($product->old_price): ?>
                                                    <del><?=$curr['symbol_left'];?><?=$item['old_price'] * $curr['value'];?><?=$curr['symbol_right'];?></del>
                                                <?php endif; ?>
                                            </h4>
                                        </div>
                                        <div class="srch">
                                            <span>-50%</span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                <?php endif; ?>

                </div>

                    <div class="clearfix"></div>
               </div>
        </div>
        </div>