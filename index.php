<?php include 'header.php';?>
<div class="slider-area">
        
    </div> <!-- End slider area -->
    <div style="background-image: url(img/bg2.jpg)">
    <div class="promo-area" style="background-image: url(img/bg.jpg)">
        <div class="zigzag-bottom"></div>
        <div class="container" >
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1" style="background:blue;">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" >
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3" style="background:red;">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4" style="background:green;">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
 
<section>
   <img class="mySlides" src="img/mobile1.jpg"
  style="width:100%;height:25%;">
   <img class="mySlides" src="img/mobile2.jpg"
  style="width:100%;height:25%;">
   <img class="mySlides" src="img/mobile3.jpg"
  style="width:100%;height:25%;">
   <img class="mySlides" src="img/mobile4.jpg"
  style="width:100%;height:25%;">
   <img class="mySlides" src="img/mobile5.jpg"
  style="width:100%;height:25%;">
</section>  
        
        
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/brand1.png" alt="">
                            <img src="img/oneplus.png" alt="">
                            <img src="img/samsung.png" alt="">
                            <img src="img/brand5.png" alt="">
                            <img src="img/vivo.png" alt="" style="height:60px;width:100px;padding:10px top;">
                            <img src="img/brand6.png" alt="">
                            <img src="img/mi.png" alt="" style="height:80px;width:100px;">
                            <img src="img/oppo.png" alt="" style="height:120px;width:200px;">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
        
        
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
            <?php
                            $sql1 = "SELECT * from product";

                            $result = mysqli_query($link, $sql1);
                            $count = 1;
                            while ($res = mysqli_fetch_array($result)) {
                                ?>
                <div class="col-md-4">
                    <div class="single-product-widget">
                       
                        <div class="single-wid-product">
                            <a href=""><img src="../mobile_admin/<?=$res['mobile_img']?>" alt="" class="product-thumb"></a>
                            <h2><a href="" style="font-size:20px;color:white;"><?php echo $res['mobile_name']; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo $res['price']; ?></ins> <del  style="font-size:20px;color:white;">$425.00</del>
                            </div>                            
                        </div>
                     
                    </div>
                </div>
                            <?php   }   ?>
            </div>
        </div>
    </div> <!-- End product widget area -->
    </div>
    <?php include 'footer.php';  ?>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 1200);
}
</script>