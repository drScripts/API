<?php require_once "template/head.php" ?>
<?php require_once "template/navbarall.php" ?>




<!-- ======= About Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-right" data-aos-duration="1000">WordArt Generator</h1>
                <h2 data-aos="fade-right" data-aos-duration="2000">Kembangkan Kreativitasmu Dengan Menggunakan Berbagai
                    Macam Jenis Font</h2>
                <div data-aos="fade-right" data-aos-duration="3000"><a href="#about"
                        class="btn-get-started scrollto">Get Started</a></div>
            </div>
            <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-duration="2000">
                <img src="assets/img/cropped-cb-logo-1-2.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section>
<main id="main">



    <!-- ======= About Section ======= -->
    <section id="about" class="about ml-2 mr-2">
        <div class="container">
            <div class="section-title">
                <h2 data-aos="fade-down" data-aos-duration="1000">WordArt Generator</h2>
                <p data-aos="fade-left" data-aos-duration="1500">Kembangkan Kreativitas Mu.</p>
            </div>
        </div>

        <div class="card ml-2 mr-2" data-aos="fade-up" data-aos-duration="1000">

            <div class="row ml-2 mr-2">
                <div class="col-md-6 mt-5">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="text">Input The Text :</label>
                            <?php
                                if(isset($_POST['text'])){
                                ?>
                            <input type="text" id="text" class="form-control" name="text"
                                placeholder="Insert Your Text Here" required value="<?= $_POST['text'] ?>">
                            <?php }else{ ?>
                            <input type="text" id="text" class="form-control" name="text"
                                placeholder="Insert Your Text Here" required>
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label for="size">Input The Size Of Text :</label>
                            <?php if(isset($_POST['size'])){ ?>
                            <input type="number" id="size" class="form-control" name="size"
                                placeholder="Insert Your Text Size Here" value="<?= $_POST['size'] ?>">
                            <?php }else{ ?>
                            <input type="number" id="size" class="form-control" name="size"
                                placeholder="Insert Your Text Size Here">
                            <?php } ?>
                        </div>

                        <!-- Font Color -->
                        <div class="form-group">
                            <label for="sc">Select Single Color :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="colorse"
                                            aria-label="Radio button for following text input" checked value="single"
                                            id="sc">
                                    </div>
                                </div>
                                <input type="color" class="form-control" name="color"
                                    aria-label="Text input with radio button">
                            </div>
                        </div>



                        <hr>
                        <!-- Background  -->
                        <div class="form-group">
                            <label for="bgse">Select Single Background Color :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="bgse"
                                            aria-label="Radio button for following text input" checked value="singlebg"
                                            id="bgse">
                                    </div>
                                </div>
                                <input type="color" class="form-control" name="bg"
                                    aria-label="Text input with radio button">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bggc">Select Gradient Background Color :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="bgse" id="bggc"
                                            aria-label="Radio button for following text input" value="gradient">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="color" class="form-control" name="bg1">
                                </div>
                                <div class="col-md-3">
                                    <input type="color" class="form-control" name="bg2">
                                </div>
                                <div class="col-md-3">
                                    <input type="color" class="form-control" name="bg3">
                                </div>
                                <div class="col-md-3">
                                    <input type="color" class="form-control" name="bg4">
                                </div>

                            </div>

                            <div class="form-group">

                                <label for="">Select Gradient Background Color Gradient :</label>
                                <div class="row">
                                    <div class="col-md">
                                        <input type="radio" id="bglineartl1" name="background" value="bglineartl"
                                            checked>
                                        <label for="bglineartl1">Linear To Left</label>
                                    </div>
                                    <div class="col-md">
                                        <input type="radio" id="bglineartr2" name="background" value="bglineartr">
                                        <label for="bglineartr2">Linear To Right</label>

                                    </div>
                                    <div class="col-md">
                                        <input type="radio" id="bglineartl3" name="background" value="bglineartb">
                                        <label for="bglineartl3">Linear To Bottom</label>
                                    </div>
                                    <div class="col-md">
                                        <input type="radio" id="bglineartl4" name="background" value="bglineartt">
                                        <label for="bglineartl4">Linear To Top</label>
                                    </div>
                                    <div class="col-md">
                                        <input type="radio" id="background" name="background" value="radial">
                                        <label for="background">Radial</label>
                                    </div>
                                </div>
                            </div>

                            <!-- FontType -->
                            <div class="form-group">
                                <label for="font-family">Font Type :</label>
                                <select name="font_list" id="font-family" class="form-control"></select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mb-5 mt-5" name="submit">SUBMIT!</button>
                            </div>
                        </div>
                    </form>
                </div>

                <?php 
                    if(isset($_POST['submit'])){
                       if($_POST['font_list'] == "kosong"){
                           echo "<h3 class='text-danger'>SILAHKAN PILIH JENIS FONT!</h3>";
                    }else{
                        $arahgradientf = $_POST['grafont'];
                        $arahgradientb = $_POST['background'];
                        
                    
                        if($_POST['colorse'] == "single"){
                            $color = $_POST['color'];    
                            
                        }elseif($_POST['colorse'] == "gradient"){
                            $color1 = $_POST['color1'];
                            $color2 = $_POST['color2'];
                            $color3 = $_POST['color3'];
                            $color4 = $_POST['color4'];
                            
                        }

                        if($_POST['bgse'] == "singlebg"){
                            $bgcolor = $_POST['bg'];
                        }elseif($_POST['bgse'] == "gradient"){
                            $bg1 = $_POST['bg1'];
                            $bg2 = $_POST['bg2'];
                            $bg3 = $_POST['bg3'];
                            $bg4 = $_POST['bg4'];
                          
                        }
                        
                      
                        if($arahgradientf == "lineartl"){
                            $typef = "linear-gradient";
                            $arahf = "to left";
                        }elseif($arahgradientf == "lineartr"){
                            $typef = "linear-gradient";
                            $arahf = "to right";
                        }elseif($arahgradientf == "lineartb"){
                            $typef = "linear-gradient";
                            $arahf = "to bottom";
                        }elseif($arahgradientf == "lineartt"){
                            $typef = "linear-gradient";
                            $arahf = "to top";
                        }elseif($arahgradientf == "radial"){
                            $typef = "radial-gradient";
                        }


                        if($arahgradientb == "bglineartl"){
                            $typeb = "linear-gradient";
                            $arahb = "to left";
                        }elseif($arahgradientb == "bglineartr"){
                            $typeb = "linear-gradient";
                            $arahb = "to right";
                        }elseif($arahgradientb == "bglineartb"){
                            $typeb = "linear-gradient";
                            $arahb = "to bottom";
                        }elseif($arahgradientb == "bglineartt"){
                            $typeb = "linear-gradient";
                            $arahb = "to top";
                        }elseif($arahgradientb == "radial"){
                            $typeb = "radial-gradient";
                        }

                        $text = $_POST['text'];
                        $size = $_POST['size'] ."px";
                        $fontfamily = $_POST['font_list'];
                        
                        // echo $font;
                
                        $fonts = explode("/",$fontfamily);    
                        $link = $fonts[0];
                        $family  =  strtr($link,"+"," ");
                        
                        $kategori = $fonts[1];
                        $text = $_POST['text'];
                    }
                    }  
                     
                 
                ?>

                <div class="col-md-6 mt-5">
                    <h1>Result :</h1>
                    <hr>
                    <?php 
                        if(isset($bgcolor)){
                    ?>
                    <div class="card mt-5 text-center" style="background-color:<?= $bgcolor ?> ">
                        <?php 
                        }elseif(isset($bg1)){
                    ?>
                        <div class="card mt-5 text-center"
                            style="background-image: <?= $typeb ?>(<?= $arahb?>,<?= $bg1 ?>,<?= $bg2 ?>,<?= $bg3 ?>,<?= $bg1 ?>); ">
                            <?php  } ?>

                            <?php 
                        if(isset($color)){
                    ?>
                            <p
                                style="font-size:<?= $size ?>;color:<?= $color ?>;font-family:'<?= $family?>', <?= $kategori ?>;">
                                <?= $text; ?>
                            </p>
                            <?php 
                    }elseif(isset($color1)){
                    ?>
                            <p style="
                                font-size:<?= $size ?>;
                                -webkit-linear-<?= $typef ?>(<?= $arahf?>,<?= $color1 ?>,<?= $color2 ?>,<?= $color3 ?>,<?= $color4 ?>);
                                -webkit-background-clip: text;
                                -webkit-text-fill-color:transparent;
                            ">
                                <?= $text; ?>
                            </p>

                            <?php } ?>




                        </div>

                    </div>
                </div>
    </section>
    <!-- End About Section -->




</main>




<?php require_once "template/footer.php" ?>