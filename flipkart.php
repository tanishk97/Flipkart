<html>
    <?php

        $products=[
            "product1"=>[
                "name"=>"Sony Bravia 101.6cm (40) Full HD LED Smart TV",
                "price"=>"39,999",
                "mrp"=>"54,900",
                "discount"=>"27",
                "model"=>"KLV-40W672G",
                "rating"=>"4.3",
                "ratings_count"=>"516",
                "reviews_count"=>"154",
            ],
            "product2"=>[
                "name"=>"Samsung Series 5 101.6cm (40) Full HD LED Smart TV",
                "price"=>"29,999",
                "mrp"=>"42,000",
                "discount"=>"29",
                "model"=>"UA40N5100ARXXL",
                "rating"=>"4.1",
                "ratings_count"=>"342",
                "reviews_count"=>"98",
            ],
            "product3"=>[
                "name"=>"LG 101.6cm (40) Full HD LED Smart TV",
                "price"=>"19,999",
                "mrp"=>"27,500",
                "discount"=>"27",
                "model"=>"40LM5600PTC",
                "rating"=>"4.0",
                "ratings_count"=>"289",
                "reviews_count"=>"76",
            ]
        ];


    ?>
    <head>
        <title>LED Televisions - Flipkart</title>
        <script src="jquery.js"></script>
        <script>
            $(document).ready(function(){
                $(".pp").mouseenter(function(){
                    $(this).css("color", "yellow");
                    var imgsrc=$(this).children().attr('src','images/arrowup.png');
                    var at=$(this).text();
                    if(at=="ELECTRONICS"){
                   $("#elec").css("visibility","visible");}
                    else if(at=="APPLIANCE"){
                        $("#appliance").css("visibility","visible");
                    }else if(at=="MEN"){
                        $("#men").css("visibility","visible");
                    }else if(at=="WOMEN"){
                        $("#women").css("visibility","visible");
                    }else if(at=="BABY & KIDS"){
                        $("#baby").css("visibility","visible");
                    }else if(at=="HOME & FURNITURE"){
                        $("#home").css("visibility","visible");
                    }else if(at=="BOOKS & MORE"){
                        $("#books").css("visibility","visible");
                    }
                });
                $(".pp").mouseleave(function(){
                    $(this).css("color", "white");
                     var imgsrc=$(this).children().attr('src','images/arrowdown.png');
                    $(".electro").css("visibility","hidden");
                });
                $(".resultli").click(function(){
                    $(".resultli").css("border-bottom-color","white");
                    $(".resultli").css("color","black");
                    $(this).css("border-bottom-color","#2874f0");
                    $(this).css("color","#2874f0");
                });

                $(".idealimg").click(function(){
                    $('.idealul',$(this).parent()).toggle();
                    $(this).attr('src','images/arrowup2.png');
                    if($('.idealul').css('display')=='none')
                        {
                            $(this).attr('src','images/arrowdown2.png');
                        }
                });

                $(".add-to-cart-btn").click(function(){
                    var count = parseInt($("#cart_no").text());
                    $("#cart_no").text(count + 1);
                    $(this).text("ADDED").css("background-color", "#388e3c");
                    var btn = $(this);
                    setTimeout(function(){
                        btn.text("ADD TO CART").css("background-color", "#ff6f00");
                    }, 1500);
                });

                $(".wishlist-btn").click(function(){
                    var icon = $(this).find(".wishlist-icon");
                    if(icon.text() === "♡"){
                        icon.text("♥").css("color", "#e91e63");
                    } else {
                        icon.text("♡").css("color", "#888");
                    }
                });
            });
        </script>
        <style>
            body{
                padding:0;
                margin:0;
                font-family: arial, sans-serif;
            }
            #outter{
                float:left;
                height: auto;
                width: 100%;
                background-color: white;
            }
            #head{
                float: left;
                width: 100%;
                height: auto;
                background-color: #2874f0;
                position: fixed;
                z-index: 6;
            }
            #headnav{
                float:left;
                width:100%;
                height: 30px;
                background-color:#2874f0;
            }
            #hnav{
                float: left;
                width: 61%;
                height: 100%;
                background-color: #2874f0;
                padding: 0;
                margin: 0% 0 0 39%;
                color: white;
                font-family: arial;
                font-size: 12px;
            }
            #hnav ul{
                float:left;
                list-style-type: none;
                display: inline;
                padding:0;
                margin: 0 0 0 4%;
                width: 96%;
                height: 100%;
            }
             #hnav ul li{
                float:left;
                width: auto;
                padding: 0;
                margin:1% 3.3% 0 0;
                cursor: pointer;
            }
            #hnav ul li:hover{
                text-decoration: underline;
            }
            #hnav ul li img{
                height: 57%;
                width: 100%;
            }
            #logo_search{
                float:left;
                width:100%;
                height:auto;
                background-color: #2874f0;
                font-family: arial;
            }
            #logo{
               float: left;
                width: 17.5%;
                height: 55px;
                background-color: #2874f0;
                margin: 5px 0 0 0;
            }
            #logo img{
                height: 69%;
                width: 66%;
                margin: 0 0 0 29%;
            }
            #search{
                float: left;
                width:67%;
                height: 49px;
                background-color: #2874f0;
                margin:5px 0 0 0;
            }
            #search input{
                float: left;
                height: 80%;
                width: 91%;
                margin: 0;
                padding: 0 10px;
                border-collapse: collapse;
                border-style: none;
                border-right-color: white;
                border-left-color: #2874f0;
                border-top-color: #2874f0;
                border-bottom-color: #2874f0;
                font-size: 14px;
                box-sizing: border-box;
            }
            #search div{
                background-color: #ffe11b;
                float: left;
                height:80%;
                width:9%;
                padding: 0;
                border-collapse: collapse;
                cursor: pointer;
            }
            #search div:hover{
                background-color: #f5d400;
            }
            #search img{
                height: 38%;
                width: 20%;
                margin: 15% 0 0 42%;
            }
            #cart{
                float:left;
                width: 9%;
                height: 42px;
                background-color: #2469d9;
                margin: 5px 0 0 1%;
                padding: 0;
                color:white;
                cursor: pointer;
            }
            #cart:hover{
                background-color: #1a56c4;
            }
            #cart img{
                height: 72%;
                width: 25%;
                margin: 4%;
                float: left;
            }
            #cart font{
                float:left;
                margin: 10% 0 0 0;
            }
            #cart_no{
                float:left;
                margin:10%;
            }
            #mainnav{
                float:left;
                width:100%;
                height:40px;
                top:85px;
                z-index: 3;
                background-color: #2874f0;
                color:white;
                position: absolute;
                align-content: center;
                font-family: arial;
                font-size: 13px;
            }
            #mainnav ul{
                float:left;
                display:inline;
                list-style-type: none;
                width:71%;
                padding:0;
                margin:12px 0px 0 203px;
            }
            .pp{
                float:left;
                display:inline;
                width:auto;
                padding:0;
                margin: 0 24px 0 0;
                color:white;
                cursor: pointer;
            }
            #mainnav ul li p{
                float: left;
                padding: 0;
                margin: 0;
            }
            #mainnav ul li img{
                height:10px;
                width: 10px;
                float: left;
                margin: 3px 0 0 4px;
            }
            #mainnav ul li hr{
                padding:0;
                margin:0;
            }
            #mainbody{
                float:left;
                width:100%;
                height:auto;
                background: #f3f3f3;
                position: absolute;
                top:125px;
                font-family: arial;
            }
            #filters{
                float:left;
                width: 17.5%;
                height: auto;
                background-color: #f3f3f3;
                margin: 10px 0.5% 0;
                padding: 0;
            }
            #filterdiv{
                background-color: white;
                float: left;
                width: 100%;
                border-bottom: 1px solid #f0f0f0;
            }
            #filterdiv h3{
                margin-left: 19px;
                color: #212121;
            }
            #categories{
                background-color: white;
                width: 100%;
                float: left;
                margin-top: 1px;
                border-bottom: 1px solid #f0f0f0;
            }
            #cp1{
                font-size: 12px;
                font-weight: 500;
                text-transform: uppercase;
                margin-left: 15px;
                color: #878787;
            }
            #cp2{
                font-size: 14px;
                margin-left: 20px;
                color: #2874f0;
                cursor: pointer;
            }
            #cp3{
                margin-left: 32px;
                font-size: 14px;
                font-weight: 600;
                color: #212121;
            }
            .ideal{
               background-color: white;
                width: 100%;
                float: left;
                margin: 1px 0 0 0;
                padding: 0;
                border-bottom: 1px solid #f0f0f0;
                box-sizing: border-box;
            }
            .ideal-header{
                float: left;
                width: 100%;
                padding: 12px 0 8px 0;
                box-sizing: border-box;
                cursor: pointer;
            }
            .idealul{
                list-style-type: none;
                width: 100%;
                float: left;
                display: none;
                padding: 0 0 8px 0;
                margin: 0;
                box-sizing: border-box;
            }
            .idealul li{
                padding: 4px 10px;
                font-size: 13px;
                color: #333;
            }
            .idealul li:hover{
                background-color: #f5f5f5;
            }
            .idealul input[type="checkbox"]{
                margin-right: 6px;
                cursor: pointer;
                accent-color: #2874f0;
            }
            .idealimg{
                height: 10px;
                width:10px;
                float: right;
                margin: 16px 10px 7px 6px;
                padding:0;
                cursor: pointer;
            }
            .idealp{
                font-size: 12px;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 0.3px;
                float:left;
                margin: 14px 0 7px 10px;
                padding:0;
                color: #212121;
            }
            #items{
                float:left;
                width: 80%;
                height: auto;
                background-color: #f3f3f3;
                margin:10px 0.5% 0;
            }
            #showing_result{
                float: left;
                width:100%;
                height: auto;
                min-height: 80px;
                background-color: white;
                padding-bottom: 10px;
                box-sizing: border-box;
            }
            #p1{
                color: #878787;
                font-size: 12px;
                margin: 10px 1% 4px;
                padding: 0;
            }
            #p2{
                color: #212121;
                font-weight: 600;
                font-size: 14px;
                margin: 0 0 8px 2%;
            }
            #resultul{
                float: left;
                width: auto;
                list-style-type: none;
                margin: 0 0 0 2%;
                padding: 0;
                font-size: 13px;
            }
            #resultul li{
                height: 24px;
                float:left;
                display: inline;
                margin: 0 3% 0 0;
                padding: 0 4px 2px;
                border-bottom: 2px solid transparent;
                font-weight: 500;
                cursor: pointer;
                color: #333;
                transition: color 0.2s, border-bottom-color 0.2s;
            }
            #resultul li:hover{
                color: #2874f0;
            }
            /* Product card */
            .product-card{
                float: left;
                width: 100%;
                background-color: white;
                margin: 1px 0 0 0;
                padding: 20px 0;
                box-sizing: border-box;
                border-bottom: 1px solid #f0f0f0;
                transition: box-shadow 0.2s;
                position: relative;
            }
            .product-card:hover{
                box-shadow: 0 2px 12px rgba(0,0,0,0.12);
                z-index: 1;
            }
            .pr_image{
                float:left;
                height:200px;
                width:19%;
                padding: 0 10px;
                margin: 0 0 0 2%;
                text-align: center;
                box-sizing: border-box;
            }
            .pr_image img{
                max-height: 180px;
                max-width: 100%;
                object-fit: contain;
            }
            .prname_prdetails{
                float: left;
                width: 48%;
                background: white;
                margin: 0 0 0 2%;
            }
            .prname{
                font-weight: 500;
                font-size: 16px;
                display: block;
                margin: 0 0 4px 0;
                padding: 0;
                color: #212121;
            }
            .prmodel{
                font-size: 12px;
                color: #878787;
                margin: 0 0 8px 0;
            }
            .prating{
                margin: 6px 0;
                font-size: 13px;
            }
            .rating-badge{
                background-color: #388e3c;
                color: white;
                font-size: 13px;
                padding: 2px 6px;
                border-radius: 3px;
                font-weight: 600;
            }
            .rating-count{
                color: #878787;
                margin-left: 6px;
            }
            .prname_prdetails ul{
                font-size: 13px;
                color: #555;
                padding-left: 18px;
                margin: 6px 0;
                line-height: 1.7;
            }
            .prprice_offer{
                float:left;
                background-color: white;
                width: 24%;
                padding: 0 10px;
                box-sizing: border-box;
            }
            .price-section{
                margin: 0 0 8px 0;
            }
            .price-current{
                font-size: 22px;
                font-weight: 600;
                color: #212121;
                margin: 0;
                padding: 0;
            }
            .price-mrp{
                font-size: 14px;
                color: #878787;
                text-decoration: line-through;
                margin: 2px 0 0 0;
            }
            .price-discount{
                font-size: 13px;
                color: #388e3c;
                font-weight: 600;
                margin: 2px 0 4px 0;
            }
            .assured-img{
                height: 20px;
                width: auto;
                margin: 4px 0;
                display: block;
            }
            .offer-section{
                color: #212121;
                margin-top: 8px;
            }
            .offer-section ul{
                padding-left: 16px;
                margin: 4px 0;
                font-size: 13px;
                color: #555;
            }
            .card-actions{
                float: left;
                width: 100%;
                margin-top: 12px;
                padding: 0 10px;
                box-sizing: border-box;
            }
            .add-to-cart-btn{
                background-color: #ff6f00;
                color: white;
                border: none;
                padding: 10px 24px;
                font-size: 14px;
                font-weight: 600;
                border-radius: 2px;
                cursor: pointer;
                margin-right: 10px;
                letter-spacing: 0.5px;
                transition: background-color 0.2s;
            }
            .add-to-cart-btn:hover{
                background-color: #e65c00;
            }
            .wishlist-btn{
                background-color: white;
                color: #555;
                border: 1px solid #ddd;
                padding: 9px 18px;
                font-size: 14px;
                border-radius: 2px;
                cursor: pointer;
                transition: border-color 0.2s, color 0.2s;
            }
            .wishlist-btn:hover{
                border-color: #e91e63;
                color: #e91e63;
            }
            .wishlist-icon{
                color: #888;
            }
            .discount-badge{
                position: absolute;
                top: 16px;
                left: 12px;
                background-color: #e91e63;
                color: white;
                font-size: 11px;
                font-weight: 700;
                padding: 2px 6px;
                border-radius: 2px;
            }
            .electro{
                height: 511px;
                width:1200px;
                position: absolute;
                z-index: 10;
                float: left;
                margin: 124px 0 0 50px;
                padding: 0;
                visibility: hidden;
            }
            #appliance,#men,#women,#baby,#home,#books{
                background-image: url(images/ss.png);
            }
            #elec{
                background-image: url(images/ss.png);
            }

            @media only screen and (max-width:480px){
                #hnav ul{
                    display: none;
                }
                #hnav{
                    background: green;
                    width: 20%;
                    float: right;
                    background-image: url("images/options.png");
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center center;
                }
                #logo{
                    width:100%;
                }
                #logo img{
                    padding: 0;
                    width: 50%;
                    margin: 0 20%;
                }
                #search{
                    width:100%;
                }
                #cart{
                    display: none;
                }
                #mainnav{
                    display:none;
                }
                #mainbody{
                    top:140px;
                }
                .ideal{
                    display: none;
                }
                #cp2, #cp3{
                    display: none;
                }
                #filterdiv{
                    font-size: 10px;
                }
                #cp1{
                    font-size:10px;
                    margin:20% 0;
                }
                #showing_result{
                    display: none;
                }
                .pr_image{
                    width:100%;
                    margin: 0 auto;
                    padding:0;
                }
                .pr_image img{
                    margin: 10% auto;
                    display: block;
                }
                .prname_prdetails{
                    margin:0;
                    width: 100%;
                }
                .prprice_offer{
                    margin: 0;
                    width: 100%;
                    height: auto;
                }
            }
        </style>
    </head>
    <body>
        <div id="outter">
            <div id="head">
                <div id="headnav">
                    <div id="hnav">
                        <ul>
                            <li>Sell on Flipkart</li>
                            <li>Advertise</li>
                            <li>Gift Card</li>
                            <li>Download App</li>
                            <li>24x7 Customer Care</li>
                            <li>Track Order</li>
                            <li><img src="images/belll.png"></li>
                            <li>Signup</li>
                            <li>Log In</li>
                        </ul>
                    </div>
                </div>
                <div id="logo_search">
                    <div id="logo">
                        <img src="images/flipkart.png">
                    </div>
                    <div id="search">
                        <input type="text" placeholder="Search for products, brands and more">
                        <div><img src="images/search.png"></div>
                    </div>
                    <div id="cart">
                        <img src="images/cart.png"><font>CART</font><p id="cart_no">0</p>
                    </div>
                </div>
            </div>
            <div id="mainnav">
                <ul>
                    <li class="pp"><p>ELECTRONICS</p><img src="images/arrowdown.png"></li>
                    <li class="pp"><p>APPLIANCE</p><img src="images/arrowdown.png"></li>
                    <li class="pp"><p>MEN</p><img src="images/arrowdown.png"></li>
                    <li class="pp"><p>WOMEN</p><img src="images/arrowdown.png"></li>
                    <li class="pp"><p>BABY &amp; KIDS</p><img src="images/arrowdown.png"></li>
                    <li class="pp"><p>HOME &amp; FURNITURE</p><img src="images/arrowdown.png"></li>
                    <li class="pp"><p>BOOKS &amp; MORE</p><img src="images/arrowdown.png"></li>
                    <li class="pp"><p>OFFER ZONE</p></li>
                </ul>
            </div>

            <div id="mainbody">
                <div id="filters">
                    <div id="filterdiv"><h3>Filters</h3></div>

                    <div id="categories">
                        <p id="cp1"><b>CATEGORIES</b></p>
                        <p id="cp2">&lt; Home Entertainment</p>
                        <p id="cp3">Television</p>
                    </div>
                    <div class="ideal">
                        <div class="ideal-header">
                            <p class="idealp">IDEAL FOR VIEWING DISTANCE</p>
                            <img src="images/arrowdown2.png" class="idealimg">
                        </div>
                        <ul class="idealul">
                            <li><input type="checkbox">Less than 4 feet</li>
                            <li><input type="checkbox">4-5 feet</li>
                            <li><input type="checkbox">5-10 feet</li>
                            <li><input type="checkbox">10-20 feet</li>
                        </ul>
                    </div>
                    <div class="ideal">
                        <div class="ideal-header">
                            <p class="idealp">BRAND</p>
                            <img src="images/arrowdown2.png" class="idealimg">
                        </div>
                        <ul class="idealul">
                            <li><input type="checkbox">SONY</li>
                            <li><input type="checkbox">SAMSUNG</li>
                            <li><input type="checkbox">LG</li>
                        </ul>
                    </div>
                    <div class="ideal">
                        <div class="ideal-header">
                            <p class="idealp">SCREEN SIZE</p>
                            <img src="images/arrowdown2.png" class="idealimg">
                        </div>
                        <ul class="idealul">
                            <li><input type="checkbox">Below 20"</li>
                            <li><input type="checkbox">20" - 30"</li>
                            <li><input type="checkbox">30" - 40"</li>
                            <li><input type="checkbox">40" - 50"</li>
                            <li><input type="checkbox">50" - 60"</li>
                            <li><input type="checkbox">Above 60"</li>
                        </ul>
                    </div>
                    <div class="ideal">
                        <div class="ideal-header">
                            <p class="idealp">RESOLUTION</p>
                            <img src="images/arrowdown2.png" class="idealimg">
                        </div>
                        <ul class="idealul">
                            <li><input type="checkbox">HD Ready</li>
                            <li><input type="checkbox">Full HD</li>
                            <li><input type="checkbox">Ultra HD (4K)</li>
                            <li><input type="checkbox">8K</li>
                            <li><input type="checkbox">SD</li>
                        </ul>
                    </div>
                    <div class="ideal">
                        <div class="ideal-header">
                            <p class="idealp">FEATURES</p>
                            <img src="images/arrowdown2.png" class="idealimg">
                        </div>
                        <ul class="idealul">
                            <li><input type="checkbox">Smart TV</li>
                            <li><input type="checkbox">Curved TV</li>
                            <li><input type="checkbox">3D TV</li>
                        </ul>
                    </div>
                    <div class="ideal">
                        <div class="ideal-header">
                            <p class="idealp">SCREEN TYPE</p>
                            <img src="images/arrowdown2.png" class="idealimg">
                        </div>
                        <ul class="idealul">
                            <li><input type="checkbox">LED</li>
                            <li><input type="checkbox">LCD</li>
                            <li><input type="checkbox">OLED</li>
                            <li><input type="checkbox">Plasma</li>
                        </ul>
                    </div>
                </div>
                <div id="items">
                    <div id="showing_result">
                        <p id="p1">Home &gt; Home Entertainment &gt; Televisions</p>
                        <p id="p2">Showing 1 – <?php echo count($products); ?> of <?php echo count($products); ?> results for "LED televisions"</p>
                        <ul id="resultul">
                            <li class="resultli">Relevance</li>
                            <li class="resultli">Popularity</li>
                            <li class="resultli">Price -- Low to High</li>
                            <li class="resultli">Price -- High to Low</li>
                            <li class="resultli">Newest First</li>
                            <li class="resultli">Discount</li>
                        </ul>
                    </div>
        <?php
                    foreach($products as $x => $y){
                        if(is_array($y)){
        ?>
                    <div class="product-card">
                        <span class="discount-badge"><?php echo $y['discount']; ?>% off</span>
                        <div class="pr_image">
                            <img src="images/product.jpeg" alt="<?php echo htmlspecialchars($y['name']); ?>">
                        </div>
                        <div class="prname_prdetails">
                            <p class="prname"><?php echo htmlspecialchars($y['name']); ?></p>
                            <p class="prmodel"><?php echo htmlspecialchars($y['model']); ?></p>
                            <p class="prating">
                                <span class="rating-badge"><?php echo $y['rating']; ?> &#9733;</span>
                                <span class="rating-count"><?php echo $y['ratings_count']; ?> Ratings &amp; <?php echo $y['reviews_count']; ?> Reviews</span>
                            </p>
                            <ul>
                                <li>178&deg; Wide Viewing Angle</li>
                                <li>6 - 10 W Speaker Output</li>
                                <li>100 Hz Refresh Rate</li>
                                <li>Dolby Digital Audio</li>
                                <li>Smart TV with built-in Wi-Fi</li>
                                <li>X-Protection PRO: Dust &amp; Humidity Resistant</li>
                            </ul>
                        </div>
                        <div class="prprice_offer">
                            <div class="price-section">
                                <p class="price-current">&#8377;<?php echo $y['price']; ?></p>
                                <p class="price-mrp">MRP &#8377;<?php echo $y['mrp']; ?></p>
                                <p class="price-discount"><?php echo $y['discount']; ?>% off</p>
                            </div>
                            <img src="images/assured.png" class="assured-img">
                            <div class="offer-section">
                                <strong>Offers</strong>
                                <ul>
                                    <li>No Cost EMI available</li>
                                    <li>Bank Offer: Extra 5% off</li>
                                </ul>
                            </div>
                            <div class="card-actions">
                                <button class="add-to-cart-btn">ADD TO CART</button>
                                <button class="wishlist-btn"><span class="wishlist-icon">&#9825;</span> Wishlist</button>
                            </div>
                        </div>
                    </div>
        <?php
                        }
                    }
        ?>
                </div>
            </div>
            <div class="electro" id="elec"></div>
            <div class="electro" id="appliance"></div>
            <div class="electro" id="men"></div>
            <div class="electro" id="women"></div>
            <div class="electro" id="baby"></div>
            <div class="electro" id="home"></div>
            <div class="electro" id="books"></div>
        </div>
    </body>
</html>
