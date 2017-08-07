<html>
    <?php
    
        $products=[
            "product1"=>[
                "name"=>"Sony Bravia 101.6cm (40) Full HD LED TV",
                "price"=>"39,999",
            ],
            "product2"=>[
                "name"=>"Samsung Bravia 101.6cm (40) Full HD LED TV",
                "price"=>"29,999",
            ],
            "product3"=>[
                "name"=>"LG Bravia 101.6cm (40) Full HD LED TV",
                "price"=>"19,999",
            ]
        ];
    
        
    ?>
    <head>
        <title>Sony LED Televisions</title>
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
                   //var imgs="images/arrowup.png"
                   //$('img[src="' + imgsrc + '"]').attr('src', imgs);
                });
                $(".pp").mouseleave(function(){
                    $(this).css("color", "white");
                     var imgsrc=$(this).children().attr('src','images/arrowdown.png');
                    $(".electro").css("visibility","hidden");
                   //var imgs="images/arrowdown.png"
                   //$('img[src="' + imgsrc + '"]').attr('src', imgs);
                });
                $(".resultli").click(function(){
                    
                    $(".resultli").css("border-bottom-color","white");
                    $(".resultli").css("color","black");
                    
                    $(this).css("border-bottom-color","blue");
                    $(this).css("color","blue");
                    
                });
                
                
                $(".idealimg").click(function(){
                    $('.idealul',$(this).parent()).toggle();
                    $(this).attr('src','images/arrowup2.png');    
                    if($('.idealul').css('display')=='none')
                        {
                            $(this).attr('src','images/arrowdown2.png');
                        }
                });
                
            });
        </script>
        <style>
            body{
                padding:0;
                margin:0;
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
                padding: 0;
                border-collapse: collapse;
                border-style: none;
                border-right-color: white;
                border-left-color: #2874f0;
                border-top-color: #2874f0;
                border-bottom-color: #2874f0;
            }
            #search div{
                background-color: #ffe11b;
                float: left;
                height:80%;
                width:9%;
                
                padding: 0;
                border-collapse: collapse;
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
            #mainnav
            {
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
            }
            #mainnav ul li p{
                float: left;
                padding: 0;
                margin: 0;
                
            }
            #mainnav ul li img
            {
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
            #filters
            {
                float:left;
                width: 17.5%;
                height: 600px;
                background-color: #f3f3f3;
                margin: 10px 0.5% 0;
                padding: 0;
                
                
            }
            #filterdiv{
                background-color: white;
                float: left;
                width: 100%;
            }
            #filterdiv h3
            {
                margin-left: 19px;
                
            }
            #categories
            {
                background-color: white;
                width: 100%;
                float: left;
                margin-top: 1px;
            }
            #cp1{
                font-size: 12px;
                font-weight: 500;
                text-transform: uppercase;
                margin-left: 15px;
            }
            #cp2{
                font-size: 14px;
                margin-left: 20px;
            }
            #cp3{
                margin-left: 32px;
                font-size: 14px;
                font-weight: 600;
            }
            .ideal{
               background-color: white;
                width: 100%;
                float: left;
                margin: 1px 0 0 0;
                padding: 0;
            }
            .idealul{
                list-style-type: none;
                width: 100%;
                float: left;
                display: none;
            }
            .idealul input:checked{
                border-collapse: collapse;
                background-color: green;
            }
            .idealimg{
                height: 10px;
                width:10px;
                float: left;
                margin:16px 0 7px 6px;
                padding:0;
            }
            .idealp{
                font-size: 13px;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 0.3px;
                float:left;
                margin:13px 0 7px 6px;
                padding:0;
            }
            #items
            {
                float:left;
                width: 80%;
                height: auto;
                background-color: #f3f3f3;
                margin:10px 0.5% 0;
            }
            #showing_result
            {
                float: left;
                width:100%;
                height: 100px;
                background-color: white;
                
            }
            #p1
            {
                color: gray;
                font-size: 12px;
                margin: 1%;
                padding: 0;
            }
            #p2{
                color: black;
                font-weight: 600;
                margin: 0 0 0 2%;
            }
            #resultul{
                float: left;
                
                width: 53%;
                list-style-type: none;
                margin:25px 0 0 47%;
                padding:0;
                font-size: 13px;
                
            }
            #resultul li{
                height: 19px;
                float:left;
                display: inline;
                margin:0 3% 0 0;
                padding:0;
                border-bottom: 2px solid white;
                font-weight: 500;
                cursor: pointer;
            }
            #products
            {
                float: left;
                height: auto;
                width:100%;
                background-color: white;
                margin:1px 0 0 0;
                padding:0;
            }
            #pr_image{
                float:left;
                height:200px;
                width:19%;
                padding:0;
                margin:65px 0 0 2%;
            }
            #prname_prdetails
            {
                float: left;
                height:75%;
                width: 50%;
                background: white;
                margin: 27px 0 0 3%;
            }
            #prname{
                font-weight: 500;
                font-size: 18px;
                display: block;
                margin: 0;
                padding: 0;
            
            }
            #prname_prdetails ul{
                
            }
            #prprice_offer
            {
                float:left;
                height: 300px;
                background-color: white;
                width: 26%;
            }
            #prprice{
                float: left;
                margin: 27px 0 0 0;
                padding:0;
            }
            #price
            {
                font-size: 25px;
                margin:0 0 0 0;
                padding: 0;
                float: left;
            }
            #prprice img
            {
                float: left;
                height: 25px;
                width:77px;
                margin:0 0 0 20px;
                padding:0;
            }
            #offer{
                float: left;
                width: 100%;
                color: green;
            }
            #prprice ul{
                float:left;
                width:100%;
                padding: 0;
                margin:0;
            }
            mark{
                background-color: green;
                color:white;
                font-size: 15px;
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
            #appliance,#men,#women,#baby,#home,#books
            {
                background-image: url(images/ss.png);
            }
            #elec
            {
                background-image: url(images/ss.png);
            }
            
            
            @media only screen and (max-width:480px)
            {
                
                #hnav ul{
                    display: none;
                    
                }
                #hnav{
                    background: green;
                    width: 20%;
                    float: right;
                    background-image: url("images/options.png");
                    background-size: cover;
                    background-repeat:   no-repeat;
                    background-position: center center;
                }
                #logo{
                    width:100%;
                }
                #logo img
                {
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
                #cp2,#cp3{
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
                #pr_image
                {
                    width:100%;
                    margin: 0 auto;
                    padding:0;
                    
                }
                #pr_image img{
                    
                    margin: 17%;
                }
                #prname_prdetails{
                    margin:0;
                    width: 100%;
                }
                #prprice_offer
                {
                    margin:auto 15%;
                    width:100%;
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
                        <input type="text">
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
                    <li class="pp"><p>MEN</p><img src="images/arrowdown.png" ></li>
                    <li class="pp"><p>WOMEN</p><img src="images/arrowdown.png"></li>
                    <li class="pp"><p>BABY & KIDS</p><img src="images/arrowdown.png"></li>
                    <li class="pp"><p>HOME & FURNITURE</p><img src="images/arrowdown.png"></li>
                    <li class="pp"><p>BOOKS & MORE</p><img src="images/arrowdown.png"></li>
                    <li class="pp"><p>OFFER ZONE</p><br><hr></li>
                </ul>
            </div>
            
            <div id="mainbody">
                <div id="filters">
                    <div id="filterdiv"><h3>Filters</h3></div>
                    
                    <div id="categories">
                        <p id="cp1"><b>CATEGORIES</b></p>
                        <p id="cp2"> < Home Entertainment</p>
                        <p id="cp3">Television</p>    
                    </div>
                    <div class="ideal">
                        <p class="idealp">IDEAL FOR VIEWING DISTANCE</p>
                        <img src="images/arrowdown2.png" class="idealimg"><br>
                        <ul class="idealul">
                            <li><input type="checkbox">Less than 4 feet</li>
                            <li><input type="checkbox">4-5 feet</li>
                            <li><input type="checkbox">5-10 feet</li>
                            <li><input type="checkbox">10-20 feet</li>
                        </ul>
                    </div>
                    <div class="ideal">
                        <p class="idealp">BRAND</p>
                        <img src="images/arrowdown2.png" class="idealimg"><br>
                        <ul class="idealul">
                            <li><input type="checkbox">SONY</li>
                            <li><input type="checkbox">LG</li>
                            
                        </ul>
                    </div>
                    <div class="ideal">
                        <p class="idealp">Screen Size</p>
                        <img src="images/arrowdown2.png" class="idealimg"><br>
                        <ul class="idealul">
                            <li><input type="checkbox">Below 20</li>
                            <li><input type="checkbox">20-30</li>
                            <li><input type="checkbox">30-40</li>
                            <li><input type="checkbox">40-50</li>
                            <li><input type="checkbox">50-60</li>
                            <li><input type="checkbox">Above 60</li>
                        </ul>
                    </div>
                    <div class="ideal">
                        <p class="idealp">Resolution</p>
                        <img src="images/arrowdown2.png" class="idealimg"><br>
                        <ul class="idealul">
                            <li><input type="checkbox">HD</li>
                            <li><input type="checkbox">FULL HD</li>
                            <li><input type="checkbox">ULTRA HD</li>
                            <li><input type="checkbox">8k</li>
                            <li><input type="checkbox">SD</li>
                            
                        </ul>
                    </div>
                    <div class="ideal">
                        <p class="idealp">Features</p>
                        <img src="images/arrowdown2.png" class="idealimg"><br>
                        <ul class="idealul">
                            <li><input type="checkbox">Smart TV</li>
                            <li><input type="checkbox">Curved TV</li>
                            
                        </ul>
                    </div>
                    <div class="ideal">
                        <p class="idealp">Screen Type</p>
                        <img src="images/arrowdown2.png" class="idealimg"><br>
                        <ul class="idealul">
                            <li><input type="checkbox">LED</li>
                            <li><input type="checkbox">LCD</li>
                            <li><input type="checkbox">PLAZMA</li>
                           
                        </ul>
                    </div>
                </div>
                <div id="items">
                    <div id="showing_result">
                        <p id="p1">Home > Home Entertainment > Televisions</p>
                        <p id=
"p2">Showing 1 – 18 of 37 results for "sony led televisions"</p>
                        <ul id="resultul">
                            <li class="resultli">Relevance</li>
                            <li class="resultli">Popularity</li>
                            <li class="resultli">Price--Low to High</li>
                            <li class="resultli">Price--High to Low</li>
                            <li class="resultli">Newest First</li>
                            <li class="resultli">Discount</li>
                        </ul>
                    </div>
        <?php
                        foreach($products as $x => $y)
        {
            if(is_array($y)){
                
                
                
         
        ?>
                    <div id="products">
                        <div id="pr_image">
                            <img src="images/product.jpeg" style="height:124px;width:200px">
                        </div>
                        <div id="prname_prdetails">
                            <p id="prname"><?php echo $y['name']."<br>"; ?><br><font style="font-size:13px;">KLV-40R352D</font></p>
                            <p id="prating"><mark>&nbsp;4.3 ★ </mark>&nbsp;516 Ratings and 154 Reviews</p>
                            <ul>
                                <li>178 degree Viewing Angle</li>
                                <li>6 - 10 W Speaker Output</li>
                                <li>100 Hz Refresh Rate</li>
                                <li>Dolby Digital</li>
                                <li>ClearPhase technology for balanced audio</li>
                                <li>X-Protection PRO for dust resistance & Anti-humidity coating to prevent short circuits</li>
                                <li>fewefwe</li>
                            </ul>
                        </div>
                        <div id="prprice_offer">
                            <div id="prprice">
                                <p id="price">₹<?php echo $y['price']."<br>"; ?></p>
                                <img src="images/assured.png">
                                <p id="offer">Offers</p>
                                <ul>
                                    <li>No Cost EMI</li>
                                    <li>Bank Offer</li>
                                </ul>
                            </div>
                        </div>
                    </div>
         <?php
                }
        }       
         ?>
                </div>
            </div>
            <div class="electro" id="elec">
            </div>
            <div class="electro" id="appliance">
            </div>
            <div class="electro" id="men">
            </div>
            <div class="electro" id="women">
            </div>
            <div class="electro" id="baby">
            </div>
            <div class="electro" id="home">
            </div>
            <div class="electro" id="books">
            </div>
        </div>
    </body>
</html>