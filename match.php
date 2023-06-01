<?php
include 'header.php';


$mob1_query = "SELECT * FROM product WHERE id=".$_GET['mob1'];
$result_mob1 = mysqli_query($link, $mob1_query);
$data1 = mysqli_fetch_array($result_mob1);

$mob2_query = "SELECT * FROM product WHERE id=".$_GET['mob2'];
$result_mob2 = mysqli_query($link, $mob2_query);
$data2 = mysqli_fetch_array($result_mob2);
echo "<pre>";
print_r($data1['mobile_name']);
echo "</pre>";
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
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
    <div class="single-product-area">
       

        <div class="comparison">
		<table>
    <thead>
      <tr>
        <th class="tl tl2"></th>
        <th class="qbse">
         <p>Mobile 1:</p> <input type="text" id="mobile1" value="<?php if (isset($data1['mobile_name'])) echo $data1['mobile_name'] ?>" style="color:black;width300px !important" />        </th>
        <th class="qbse">
         <p>Mobile 2:</p> <input type="text" id="mobile2" value="<?php if (isset($data2['mobile_name'])) echo $data2['mobile_name'] ?>" style="color:black;width300px;"/>
		 </th>
      </tr>
      <tr>
        <th class="tl"></th>
        <th class="compare-heading">
          Self-Employed
        </th>
        <th class="compare-heading">
          Simple Start
        </th>
        
      </tr>
      <tr>
        <th></th>
        <th class="price-info">
          <div class="price-was"><i class="fa fa-rupee"></i> £6.00</div>
          <div class="price-now"><span>£4<span class="price-small">.20</span></span> /month</div>
          <div><a href="#" class="price-buy">Buy <span class="hide-mobile">Now</span></a></div>
         
        </th>
        <th class="price-info">
          <div class="price-was"> £7.00</div>
          <div class="price-now"><span>£5<span class="price-small">.60</span></span> /month</div>
          <div><a href="#" class="price-buy">Buy <span class="hide-mobile">Now</span></a></div>
         
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
      <tr>
        <td>Release date</td>
        <td><?= $data1['realies_date']?></td>
        <td><?= $data2['realies_date']?></td>        
      </tr>
    
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>Dimensions (mm)</td>
        <td><?= $data1['diamension']?></td>
        <td><?= $data2['diamension']?></td>  
        
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
        <td>Weight (g)</td>
        <td><?= $data1['weight']?></td>
        <td><?= $data2['weight']?></td> 
        
      </tr>
      <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
         <td>Battery capacity (mAh)</td>
        <td><?= $data1['battery_capacity']?></td>
        <td><?= $data2['battery_capacity']?></td> 
        
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
        <td>Colours</td>
        <td><?= $data1['color']?></td>
        <td><?= $data2['color']?></td> 
        
      </tr>
    
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>Form factor</td>
        <td><?= $data1['form_factory']?></td>
        <td><?= $data2['form_factory']?></td>         
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
         <td>Removable battery</td>
        <td><?= $data1['removable_battery']?></td>
        <td><?= $data2['removable_battery']?></td>            
      </tr>
       <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>Screen size (inches)</td>
        <td><?= $data1['screen_size']?></td>
        <td><?= $data2['screen_size']?></td>    
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
        <td>Touchscreen</td>
        <td><?= $data1['touch_screen']?></td>
        <td><?= $data2['touch_screen']?></td>         
      </tr>
     
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
      <tr>
          <td>Processor</td>
        <td><?= $data1['processor']?></td>
        <td><?= $data2['processor']?></td>  
        
      </tr>
       <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
         <td>Ram</td>
        <td><?= $data1['ram']?></td>
        <td><?= $data2['ram']?></td>  
        
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
        <td>Internal storage</td>
        <td><?= $data1['internal_storage']?></td>
        <td><?= $data2['ram']?></td>
        
      </tr>
      
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>Expandable storage</td>
        <td><?= $data1['exapandable_storage']?></td>
        <td><?= $data2['exapandable_storage']?></td>  
        
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
        <td>Expandable storage type</td>
        <td><?= $data1['exapandable_storage_type']?></td>
        <td><?= $data2['exapandable_storage_type']?></td>  
        
      </tr>
       <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>Expandable storage up to (GB)</td>
        <td><?= $data1['exapandable_storage_upto']?></td>
        <td><?= $data2['exapandable_storage_upto']?></td>  
        
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
        <td>Rear camera</td>
        <td><?= @$data1['rear_camera']?></td>
        <td><?= @$data2['rear_camera']?></td> 
      </tr>
    
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>Rear autofocus</td>
        <td><?= @$data1['rear_autofocus']?></td>
        <td><?= @$data2['rear_autofocus']?></td> 
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
       <td>Rear Flash</td>
        <td><?= @$data1['rear_flash']?></td>
        <td><?= @$data2['rear_flash']?></td> 
      </tr>
       <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
       <td>Front camera</td>
        <td><?= @$data1['front_camera']?></td>
        <td><?= @$data2['front_camera']?></td> 
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
        <td>Front Autofocus</td>
        <td><?= @$data1['front_autofocus']?></td>
        <td><?= @$data2['front_autofocus']?></td> 
      </tr>
    
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>Front flash</td>
        <td><?= @$data1['front_flash']?></td>
        <td><?= @$data2['front_flash']?></td> 
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
        <td>Operating system</td>
        <td><?= @$data1['operating_system']?></td>
        <td><?= @$data2['operating_system']?></td> 
      </tr>
       <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>Operating System Updatable</td>
        <td><?= @$data1['os_updatable']?></td>
        <td><?= @$data2['os_updatable']?></td> 
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
         <td>Wi-Fi</td>
        <td><?= @$data1['wifi']?></td>
        <td><?= @$data2['wifi']?></td> 
      </tr>
    
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
       <td>GPS</td>
        <td><?= @$data1['gps']?></td>
        <td><?= @$data2['gps']?></td> 
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
        <td>Bluetooth</td>
        <td><?= @$data1['blootooth']?></td>
        <td><?= @$data2['blootooth']?></td> 
      </tr>
       <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>Headphones</td>
        <td><?= @$data1['headfone']?></td>
        <td><?= @$data2['headfone']?></td> 
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
        <td>Infrared</td>
        <td><?= @$data1['infrared']?></td>
        <td><?= @$data2['infrared']?></td> 
      </tr>
      
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>FM</td>
        <td><?= @$data1['fm']?></td>
        <td><?= @$data2['fm']?></td> 
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
        <td>Number of SIMs</td>
        <td><?= @$data1['no_of_sim']?></td>
        <td><?= @$data2['no_of_sim']?></td> 
      </tr>
       <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>Fingesprint Sensor</td>
        <td><?= @$data1['fingesprint_sensor']?></td>
        <td><?= @$data2['fingesprint_sensor']?></td> 
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
        <td>SIM 1 Type</td>
        <td><?= @$data1['sim1_type']?></td>
        <td><?= @$data2['sim1_type']?></td> 
      </tr>
    
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>GSM/CDMA</td>
        <td><?= @$data1['sim1_gsmcdma']?></td>
        <td><?= @$data2['sim1_gsmcdma']?></td> 
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
         <td>3G</td>
        <td><?= @$data1['sim1_3g']?></td>
        <td><?= @$data2['sim1_3g']?></td> 
      </tr>
       <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
         <td>4G/ LTE</td>
        <td><?= @$data1['ABCD']?></td>
        <td><?= @$data2['ABCD']?></td> 
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
        <td>5G</td>
        <td></td>
        <td></td> 
      </tr>
      
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>SIM 2 Type	</td>
        <td><?= @$data1['sim2_type']?></td>
        <td><?= @$data2['sim2_type']?></td> 
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
        <td>GSM/CDMA</td>
        <td><?= @$data1['sim2_gsmcdma']?></td>
        <td><?= @$data2['sim2_gsmcdma']?></td> 
      </tr>
       <tr>
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
       <td>3G</td>
        <td><?= @$data1['sim2_3g']?></td>
        <td><?= @$data2['sim2_3g']?></td> 
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
        <td>4G/ LTE</td>
        <td><?= @$data1['smi2_4g']?></td>
        <td><?= @$data2['smi2_4g']?></td> 
      </tr>
     
        <td></td>
        <td colspan="4">Seperate business from personal spending</td>
      </tr>
      <tr class="compare-row">
        <td>ABCD</td>
        <td><?= @$data1['ABCD']?></td>
        <td><?= @$data2['ABCD']?></td> 
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">Estimate tax payments</td>
      </tr>
      <tr>
        <td>ABCD</td>
        <td><?= @$data1['ABCD']?></td>
        <td><?= @$data2['ABCD']?></td> 
      </tr>
      

    </tbody>
  </table>

</div>
    </div>


<?php include 'footer.php';  ?>
<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
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
      window.location = "http://localhost/mobile/match.php?mob1="+mob1+"&mob2="+mob2;
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
      window.location = "http://localhost/mobile/match.php?mob1="+mob1+"&mob2="+mob2;
        }
    });
});
</script>

