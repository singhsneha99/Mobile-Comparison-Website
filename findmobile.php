<?php include 'header.php'; ?>
<div class="brands-area" style="background-image:url(img/phone.jpg)">
    <div class="zigzag-bottom"></div>
    <div class="container" >
        <div class="row">
            <div class="col-md-12" >
                <div class="brand-wrapper">
                    <form method="get" action="" id="formid">
                        <div class="row">
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="os" value="<?php if (isset($_GET['os'])) echo $_GET['os'] ?>" placeholder="Search OS" style="color: black;width: 200px;" onchange='submitDetailsForm()'>
                            </div>
                           
                            <div class="col-md-2">
                                <select class="form-control" name="ram" style="color: black;width: 200px;margin-left: 10px;" onchange='submitDetailsForm()'>
                                    <option  value="">Search RAM</option>
                                    <?php
                                    $sqlram = "select * from ram";
                                    $resultram = mysqli_query($link, $sqlram);
                                    while ($ramdata = @mysqli_fetch_array($resultram)) {
                                        ?>
                                        <option value="<?php echo $ramdata['unit']; ?>"   <?= $_GET['ram'] == $ramdata['unit'] ? 'selected' : '' ?> >
                                            <?php echo $ramdata['unit']; ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                         <div class="col-md-2">        
                                <select class="form-control" name="internam_memory" style="color: black;width: 200px;margin-left: 20px;" onchange='submitDetailsForm()'>
                                    <option  value="">Internal Memory</option>
                                    <?php
                                    $sqlrom = "select * from rom";
                                    $resultrom = mysqli_query($link, $sqlrom);
                                    while ($romdata = @mysqli_fetch_array($resultrom)) {
                                        ?>
                                        <option value="<?php echo $romdata['unit']; ?>" <?= $_GET['internam_memory'] == $romdata['unit'] ? 'selected' : '' ?>>
                                            <?php echo $romdata['unit']; ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2">    
                                <select class="form-control" name="front_camera" style="color: black;width: 200px;margin-left: 30px;" onchange='submitDetailsForm()'>
                                    <option  value="">Front Camera</option>
                                    <?php
                                    $sqlcam = "select * from camera";
                                    $resultcam = mysqli_query($link, $sqlcam);
                                    while ($camdata = @mysqli_fetch_array($resultcam)) {
                                        ?>
                                        <option value="<?php echo $camdata['unit']; ?>" <?= $_GET['front_camera'] == $camdata['unit'] ? 'selected' : '' ?>>
                                            <?php echo $camdata['unit']; ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2">  
                                <a href="findmobile.php?os=&ram=&internam_memory=&front_camera="><button type="button" class="btn btn-default" style="color: black;margin-left: 40px;">reset</button></a>
                            </div>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</div> <!-- End brands area -->

<div class="product-widget-area" style="background-image: url(img/bg.jpg)">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row" >
            <?php
            $os = $_GET['os'];
            $ram = $_GET['ram'];
            $internam_memory = $_GET['internam_memory'];
            $front_camera = $_GET['front_camera'];
            $abcd = array('os' => $os, 'ram' => $ram, 'internam_memory' => $internam_memory, 'front_camera' => $front_camera,);
            $filer = array_filter($abcd);
            // $xyz = implode('ram =', $abcd);



            $abcdd = [];
            $abcdef = '';
            foreach ($filer as $key => $fv) {
                $abcdd[$key] = $fv;
                $abcdef .= $key . " = '" . $fv . "' AND ";
            }

            $newvalue = substr($abcdef, 0, -5);
            if (count($filer) != '') {
                $sql1 = "SELECT * from product where " . $newvalue;
                $result = mysqli_query($link, $sql1);
            } else {
                $sql1 = "SELECT * from product";
                $result = mysqli_query($link, $sql1);
            }



            // echo   $sql1 = "SELECT * from product where '$xyz'";
            //    $result = mysqli_query($link, $sql1);
            $count = 1;
            while ($res = mysqli_fetch_array($result)) {
                ?>
                <div class="col-md-4">
                    <div class="single-product-widget">

                        <div class="single-wid-product">
                            <a href=""><img src="../mobile_admin/<?= $res['mobile_img'] ?>" alt="" class="product-thumb"></a>
                            <h2><a href="" style="font-size:20px;color:white;"><?php echo $res['mobile_name']; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo $res['price']; ?></ins> <del style="font-size:20px;color:white;">$425.00</del>
                            </div>                            
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div> <!-- End product widget area -->

<?php include 'footer.php'; ?>

<script language="javascript" type="text/javascript">
    function submitDetailsForm() {
        $("#formid").submit();
    }
</script>