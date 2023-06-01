<?php
include 'header.php';


$mob1_query = "SELECT * FROM product WHERE id=".$_GET['mob1'];
$result_mob1 = mysqli_query($link, $mob1_query);
$data1 = mysqli_fetch_array($result_mob1);

$mob2_query = "SELECT * FROM product WHERE id=".$_GET['mob2'];
$result_mob2 = mysqli_query($link, $mob2_query);
$data2 = mysqli_fetch_array($result_mob2);
//echo "<pre>";
//print_r($data1['mobile_name']);
//echo "</pre>";
//print_r($mob2data);
?>
<style>
.comparison {
  max-width:940px;
  margin:0 auto;
  font:13px/1.4 "Helvetica Neue",Helvetica,Arial,sans-serif;
  text-align:center;
  padding:10px;
}

.comparison table {
  width:100%;
  border-collapse: collapse;
  border-spacing: 0;
  table-layout: fixed;
  border-bottom:1px solid #CCC;
}

.comparison td, .comparison th {
  border-right:1px solid #CCC;
  empty-cells: show;
  padding:10px;
}

.compare-heading {
  font-size:18px;
  font-weight:bold !important;
  border-bottom:0 !important;
  padding-top:10px !important;
}

.comparison tbody tr:nth-child(odd) {
  display:none;
}

.comparison .compare-row {
  background:#F5F5F5;
}

.comparison .tickblue {
  color:#0078C1;
}

.comparison .tickgreen {
  color:#009E2C;
}

.comparison th {
  font-weight:normal;
  padding:0;
  border-bottom:1px solid #CCC;
}

.comparison tr td:first-child {
  text-align:left;
}
  
.comparison .qbse, .comparison .qbo, .comparison .tl {
  color:#FFF;
  padding:10px;
  font-size:13px;
  border-right:1px solid #CCC;
  border-bottom:0;
}

.comparison .tl2 {
  border-right:0;
}

.comparison .qbse {
  background:#0078C1;
  border-top-left-radius: 3px;
  border-left:0px;
}

.comparison .qbo {
  background:#009E2C;
  border-top-right-radius: 3px;
  border-right:0px;
}

.comparison .price-info {
  padding:5px 15px 15px 15px;
}

.comparison .price-was {
  color:#999;
  text-decoration: line-through;
}

.comparison .price-now, .comparison .price-now span {
  color:#ff5406;
}

.comparison .price-now span {
  font-size:32px;
}

.comparison .price-small {
    font-size: 18px !important;
    position: relative;
    top: -11px;
    left: 2px;
}

.comparison .price-buy {
  background:#ff5406;
  padding:10px 20px;
  font-size:12px;
  display:inline-block;
  color:#FFF;
  text-decoration:none;
  border-radius:3px;
  text-transform:uppercase;
  margin:5px 0 10px 0;
}

.comparison .price-try {
  font-size:12px;
}

.comparison .price-try a {
  color:#202020;
}

@media (max-width: 767px) {
  .comparison td:first-child, .comparison th:first-child {
    display: none;
  }
  .comparison tbody tr:nth-child(odd) {
    display:table-row;
    background:#F7F7F7;
  }
  .comparison .row {
    background:#FFF;
  }
  .comparison td, .comparison th {
    border:1px solid #CCC;
  }
  .price-info {
  border-top:0 !important;
  
}
  
}

@media (max-width: 639px) {
  .comparison .price-buy {
    padding:5px 10px;
  }
  .comparison td, .comparison th {
    padding:10px 5px;
  }
  .comparison .hide-mobile {
    display:none;
  }
  .comparison .price-now span {
  font-size:16px;
}

.comparison .price-small {
    font-size: 16px !important;
    top: 0;
    left: 0;
}
  .comparison .qbse, .comparison .qbo {
    font-size:12px;
    padding:10px 5px;
  }
  .comparison .price-buy {
    margin-top:10px;
  }
  .compare-heading {
  font-size:13px;
}
}
</style>
    <div class="product-big-title-area" style="background-image: url(img/phone.jpg); height:300px;" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <br><br><br>
                        <h2 style="font-size:60px; color:black;"><b>Helping you to decide better</b></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
    <div class="single-product-area" style="background-image:url(img/bg.jpg)">
       

        <div class="comparison">
		<table>
    <thead>
      <tr style="background:darkslategray;color:white;">
        <th class="qbse" style="background:black; text-align:center;">Parameters</th>
        <th class="qbse" style="background:black; text-align:center;">
         <p>Mobile 1:</p> <input type="text" id="mobile1" value="<?php if (isset($data1['mobile_name'])) echo $data1['mobile_name'] ?>" style="color:black;width300px !important" />        </th>
        <th class="qbse" style="background:black; text-align:center;">
         <p>Mobile 2:</p> <input type="text" id="mobile2" value="<?php if (isset($data2['mobile_name'])) echo $data2['mobile_name'] ?>" style="color:black;width300px;"/>
		 </th>
      </tr>
      <tr style="background:darkslategray;color:white;" >
        <th class="tl"></th>
        <th class="compare-heading">
    <center><?= $data1['mobile_name']?></center>
        </th>
        <th class="compare-heading">
          <center><?= $data2['mobile_name']?></center>
        </th>
        
      </tr>
      <tr style="background:darkslategray;color:white;">
        <th class="price-info">
           <center>   <img src="img/Features.jpg"  style="width:300px;height: 250px;"></center>
          </th>
        <th class="price-info">
        
       <center>   <img src="../mobile_admin/<?=$data1['mobile_img']?>"  style="width:200px;height: 200px;"></center>
         
 
        </th>
        <th class="price-info">
            <center>  <img src="../mobile_admin/<?=$data2['mobile_img']?>"  style="width:200px;height: 200px;"></center>
          <!-- <div class="price-now"><span>£5<span class="price-small">.60</span></span> /month</div> -->
<!--          <div><a href="#" class="price-buy">Buy <span class="hide-mobile">Now</span></a></div>-->
         
        </th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>Mobile name</td>
        <td><?= $data1['mobile_name']?></td>
        <td><?= $data2['mobile_name']?></td>        
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr style="background:darkslategray;color:white;">
        <td>Operating System</td>
        <td><?= $data1['os']?></td>
        <td><?= $data2['os']?></td>        
      </tr>
    <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>CPU</td>
        <td><?= $data1['cpu']?></td>
        <td><?= $data2['cpu']?></td>  
        
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr style="background:darkslategray;color:white;">
        <td>Dimension</td>
        <td><?= $data1['dimension']?></td>
        <td><?= $data2['dimension']?></td> 
        
      </tr>
      <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
         <td>SIM</td>
        <td><?= $data1['sim']?></td>
        <td><?= $data2['sim']?></td> 
        
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr style="background:darkslategray;color:white;">
        <td>2G</td>
        <td><?= $data1['2g']?></td>
        <td><?= $data2['2g']?></td> 
        
      </tr>
    <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>3G</td>
        <td><?= $data1['3g']?></td>
        <td><?= $data2['3g']?></td>         
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr style="background:darkslategray;color:white;">
         <td >4G</td>
        <td><?= $data1['4g']?></td>
        <td><?= $data2['4g']?></td>            
      </tr>
       <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>Card Slot</td>
        <td><?= $data1['card_slot']?></td>
        <td><?= $data2['card_slot']?></td>    
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr style="background:darkslategray;color:white;">
        <td>RAM</td>
        <td><?= $data1['ram']?></td>
        <td><?= $data2['ram']?></td>         
      </tr>
     <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>Internal Memory</td>
        <td><?= $data1['internam_memory']?></td>
        <td><?= $data2['internam_memory']?></td>  
        
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr style="background:darkslategray;color:white;">
          <td>External Memory</td>
        <td><?= $data1['external_memory']?></td>
        <td><?= $data2['external_memory']?></td>  
        
      </tr>
       <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
         <td>Front Camera</td>
        <td><?= $data1['front_camera']?></td>
        <td><?= $data2['front_camera']?></td>  
        
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr style="background:darkslategray;color:white;">
        <td>Rear Camera</td>
        <td><?= $data1['rear_camera']?></td>
        <td><?= $data2['rear_camera']?></td>
        
      </tr>
      <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>Resolution</td>
        <td><?= $data1['resolution']?></td>
        <td><?= $data2['resolution']?></td>  
        
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr style="background:darkslategray;color:white;">
        <td>Protection</td>
        <td><?= $data1['protection']?></td>
        <td><?= $data2['protection']?></td>  
        
      </tr>
       <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>Sensor</td>
        <td><?= $data1['sensor']?></td>
        <td><?= $data2['sensor']?></td>  
        
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr style="background:darkslategray;color:white;">
        <td>Battery Capacity</td>
        <td><?= @$data1['battery_power']?></td>
        <td><?= @$data2['battery_power']?></td> 
      </tr>
    <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>Color's</td>
        <td><?= @$data1['color']?></td>
        <td><?= @$data2['color']?></td> 
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      
    

    </tbody>
  </table>

</div>
    </div>


<?php include 'footer.php';  ?>
<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
<script>
$(function() {
    $("#mobile2").autocomplete({
        source: "get_mobile_name.php",
    });
});
$(function() {
    $("#mobile2").autocomplete({
    
    
        source: "get_mobile_name.php",
        select: function( event, ui ) {
            event.preventDefault();
      var mob1 = <?php echo $_GET['mob1'];?>;
      var mob2 = ui.item.id;
      
            $("#mobile2").val(ui.item.value);
      window.location = "compare.php?mob1="+mob1+"&mob2="+mob2;
        }
    });
});
</script>
<script>
$(function() {
    $("#mobile1").autocomplete({
        source: "get_mobile_name.php",
    });
});
$(function() {
    $("#mobile1").autocomplete({
        source: "get_mobile_name.php",
        select: function( event, ui ) {
            event.preventDefault();
      var mob2 = <?php echo $_GET['mob2'];?>;
      var mob1 = ui.item.id;
            $("#mobile1").val(ui.item.value);
      window.location = "compare.php?mob1="+mob1+"&mob2="+mob2;
        }
    });
});
</script>

