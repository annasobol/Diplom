<!DOCTYPE html>
<html lang="zxx">
<head>
    <?=$this->getMeta();?>
<!--    <title>Watch TIME</title>-->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

    <!--Custom-Theme-files-->
    <!--theme-style-->
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--start-menu-->

    <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<!--top-header-->
<div class="top-header ">
    <div class="container">
        <div class="top-header-main ">
            <div class="col-md-6 top-header-left">
                <div class="drop">
                    <div class="box">
                        <select tabindex="4" class="dropdown drop">
                            <option value="" class="label">Dollar :</option>
                            <option value="1">Dollar</option>
                            <option value="2">Euro</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 top-header-left">
                <div class="cart box_1">
                    <a href="checkout.html">
                        <div class="total">
                            <span class="simpleCart_total"></span></div>
                        <img src="images/cart-1.png" alt="" />
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--top-header-->
<!--start-logo-->
<div class="logo">
    <a href="index.html"><h1>Watch TIME</h1></a>
</div>
<!--end-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            <div class="col-md-9 header-left">
                <div class="top-nav">
                    <ul class="memenu skyblue"><li class="active"><a href="index.html">Home</a></li>
                        <li class="grid"><a href="#">Women</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Brand</h4>
                                        <ul>
                                            <li><a href="products.html">New Arrivals</a></li>
                                            <li><a href="products.html">Patek Philippe</a></li>
                                            <li><a href="products.html">Vacheron Constantin</a></li>
                                            <li><a href="products.html">Rolex</a></li>
                                            <li><a href="products.html">Omega</a></li>
                                            <li><a href="products.html">Chopard</a></li>
                                            <li><a href="products.html">Breguet</a></li>
                                            <li><a href="products.html">A. Lange & Söhne</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Material</h4>
                                        <ul>
                                            <li><a href="products.html">Gold</a></li>
                                            <li><a href="products.html">Silver</a></li>
                                            <li><a href="products.html">Rose Gold</a></li>
                                            <li><a href="products.html">Plastic</a></li>
                                            <li><a href="products.html">Accessories</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Type</h4>
                                        <ul>
                                            <li><a href="products.html">Luxary</a></li>
                                            <li><a href="products.html">Waterproof</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="#">Men</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Brand</h4>
                                        <ul>
                                            <li><a href="products.html">New Arrivals</a></li>
                                            <li><a href="products.html">Patek Philippe</a></li>
                                            <li><a href="products.html">Vacheron Constantin</a></li>
                                            <li><a href="products.html">Rolex</a></li>
                                            <li><a href="products.html">Omega</a></li>
                                            <li><a href="products.html">Chopard</a></li>
                                            <li><a href="products.html">Breguet</a></li>
                                            <li><a href="products.html">A. Lange & Söhne</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Material</h4>
                                        <ul>
                                            <li><a href="products.html">Gold</a></li>
                                            <li><a href="products.html">Silver</a></li>
                                            <li><a href="products.html">Rose Gold</a></li>
                                            <li><a href="products.html">Plastic</a></li>
                                            <li><a href="products.html">Accessories</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Type</h4>
                                        <ul>
                                            <li><a href="products.html">Luxary</a></li>
                                            <li><a href="products.html">Waterproof</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="typo.html">Blog</a>
                        </li>
                        <li class="grid"><a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-3 header-right">
                <div class="search-bar">
                    <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--bottom-header-->

<div class="content">
    <?=$content;?>
</div>



<!-- information-starts -->
<footer>
    <div class="information">
        <div class="container">
            <div class="infor-top">
                <div class="col-md-3 infor-left">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
                        <li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
                        <li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
                    </ul>
                </div>
                <div class="col-md-3 infor-left">
                    <h3>Information</h3>
                    <ul>
                        <li><a href="#"><p>Sales</p></a></li>
                        <li><a href="#"><p>New Products</p></a></li>
                        <li><a href="contact.html"><p>Contact Us</p></a></li>
                        <li><a href="#"><p>Top Sellers</p></a></li>
                    </ul>
                </div>
                <div class="col-md-3 infor-left">
                    <h3>My Account</h3>
                    <ul>
                        <li><a href="account.html"><p>My Account</p></a></li>
                        <li><a href="#"><p>My Credit slips</p></a></li>
                        <li><a href="#"><p>My Personal info</p></a></li>
                    </ul>
                </div>
                <div class="col-md-3 infor-left">
                    <h3>Store Information</h3>
                    <h4>Watch Time
                        <span>Online store</span>
                        Kharkiv, Ukraine</h4>
                    <p><a href="tel:+380559324587">+38(099)02569</a></p>
                    <p><a href="mailto:sobolanua@gmail.com">sobolanua@gmail.com</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</footer>
<!-- information-end -->

<script src="js/simpleCart.min.js"> </script>
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<!--dropdown-->
<script src="js/jquery.easydropdown.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
</body>
</html>