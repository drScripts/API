<?php require_once "template/head.php" ?>
<?php require_once "template/navbarall.php" ?>



<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-right" data-aos-duration="1000">Smart Calculator</h1>
                <h2 data-aos="fade-right" data-aos-duration="2000">Calculator Ini Dapat Membantu Masalah Anda Dalam
                    Mengerjakan Matematika</h2>
                <div data-aos="fade-right" data-aos-duration="3000"><a href="#about"
                        class="btn-get-started scrollto">Get Started</a></div>
            </div>
            <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-duration="2000">
                <img src="assets/img/cropped-cb-logo-1-2.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section>
<!-- End Hero -->
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container ">

            <div class="section-title">
                <h2 data-aos="fade-down" data-aos-duration="1000">Smart Calculator</h2>
            </div>
            <div class="row">
                <div class="col-md-6">

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="number">Input Your Number :</label>
                            <input type="number" class="form-control" id="number" name="number" required
                                placeholder="Insert The Number">
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Select The Math Operation (Without Radian)
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <button class="btn btn-primary" type="submit" name="sin">SIN</button>
                                            </div>
                                            <div class="col-md-3"><button class="btn btn-primary" type="submit"
                                                    name="cos">COS</button>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-primary" type="submit" name="tan">TAN</button>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-primary" name="log" type="submit">LOG</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Select The Math Operation (With Radian)
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <button class="btn btn-warning" type="submit" name="sinr">SIN</button>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-warning" type="submit" name="cosr">COS</button>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-warning" type="submit" name="tanr">TAN</button>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-warning" name="log10" type="submit">LOG
                                                    10</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Select The Math Operation (With Radian)
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <button class="btn btn-success" name="asin" type="submit">ASIN</button>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-success" type="submit" name="acos">ACOS</button>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-success" name="atan" type="submit"> ATAN</button>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-success" name="sqrt" type="submit">AKAR</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Select The Converter Operation Of Celcius
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <button class="btn btn-danger" type="submit"
                                                    name="celre">Celcius-Reamur</button>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-danger" type="submit"
                                                    name="celkel">Celcius-Kelvin</button>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-danger" type="submit"
                                                    name="celfah">Celcius-Fahrenheit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                            Select The Converter Operation Of Reamur
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <button class="btn btn-danger" type="submit"
                                                    name="reacel">Reamur-Celcius</button>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-danger" type="submit"
                                                    name="reakel">Reamur-Kelvin</button>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-danger" type="submit"
                                                    name="reafah">Reamur-Fahrenheit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix">
                                            Select The Converter Operation Of Fahrenheit
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <button class="btn btn-danger" type="submit"
                                                    name="fahcel">Fahrenheit-Celcius</button>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-danger" type="submit"
                                                    name="fahre">Fahrenheit-Reamur</button>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-danger" type="submit"
                                                    name="fahkel">Fahrenheit-Kelvin</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false"
                                            aria-controls="collapseSeven">
                                            Select The Converter Operation Of Kelvin
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <button class="btn btn-danger" type="submit"
                                                    name="kelcel">Kelvin-Celcius</button>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-danger" type="submit"
                                                    name="kelrea">Kelvin-Reamur</button>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-danger" type="submit"
                                                    name="kelfah">Kelvin-Fahrenheit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>


                <div class="col-md-6">
                    <div class="card bg-dark"
                        style="height:150px;place-items:center;align-items:center;justify-content: center;">



                        <?php 
                //    echo  "<script>$('document').ready(function() {
                //     $('body,html').animate({
                //         scrollTop: 900
                //         }, 800);
                //  });</script>";
                if(isset($_POST['sin'])){
                    $angka = $_POST['number'];   
                    $hasil = sin($angka);
                }elseif(isset($_POST['cos'])){
                    $angka = $_POST['number'];   
                    $hasil = cos($angka);
                }elseif(isset($_POST['tan'])){
                    $angka = $_POST['number'];   
                    $hasil = tan($angka);
                }elseif(isset($_POST['log'])){
                    $angka = $_POST['number'];   
                    $hasil = log($angka);
                }elseif(isset($_POST['sinr'])){
                    $angka = $_POST['number'];   
                    $hasil = sin(deg2rad($angka));
                }elseif(isset($_POST['cosr'])){
                    $angka = $_POST['number'];   
                    $hasil = cos(deg2rad($angka));
                }elseif(isset($_POST['tanr'])){
                    $angka = $_POST['number'];   
                    $hasil = tan(deg2rad($angka));
                }elseif(isset($_POST['log10'])){
                    $angka = $_POST['number'];   
                    $hasil = log10($angka);
                }elseif(isset($_POST['asin'])){
                    $angka = $_POST['number'];   
                    $hasil = asin(deg2rad($angka));
                }elseif(isset($_POST['acos'])){
                    $angka = $_POST['number'];   
                    $hasil = acos(deg2rad($angka));
                }elseif(isset($_POST['atan'])){
                    $angka = $_POST['number'];   
                    $hasil = atan(deg2rad($angka));
                }elseif(isset($_POST['celre'])){
                    $angka = $_POST['number'];   
                    $hasil = (4/5)*$angka . "°R";
                }elseif(isset($_POST['celkel'])){
                    $angka = $_POST['number'];   
                    $hasil = $angka + 273 . "°K";
                }elseif(isset($_POST['celfah'])){
                    $angka = $_POST['number'];   
                    $hasil = (9/5)*$angka + 32 . "°F";
                }elseif(isset($_POST['reacel'])){
                    $angka = $_POST['number'];   
                    $hasil = (5/4) * $angka ."°C";
                }elseif(isset($_POST['reakel'])){
                    $angka = $_POST['number'];   
                    $hasil = (5/4) * $angka + 273 ."°K";
                }elseif(isset($_POST['reafah'])){
                    $angka = $_POST['number'];   
                    $hasil = (9/4) * $angka + 32 . "°F";
                }elseif(isset($_POST['fahcel'])){
                    $angka = $_POST['number'];   
                    $hasil = (5/9) * ($angka - 32)."°C";
                }elseif(isset($_POST['fahre'])){
                    $angka = $_POST['number'];   
                    $hasil = (4/9) * ($angka-32) . "°R";
                }elseif(isset($_POST['fahkel'])){
                    $angka = $_POST['number'];   
                    $hasil = (5/9) * ($angka - 32) + 273 . "°K";
                }elseif(isset($_POST['kelcel'])){
                    $angka = $_POST['number'];   
                    $hasil = $angka - 273 . "°C";
                }elseif(isset($_POST['kelrea'])){
                    $angka = $_POST['number'];   
                    $hasil = (4/5) * ($angka - 273) . "°R";
                }elseif(isset($_POST['kelfah'])){
                    $angka = $_POST['number'];   
                    $hasil = (9/5) * ($angka - 273) + 32 . "°F";
                }elseif(isset($_POST['sqrt'])){
                    $angka = $_POST['number'];   
                    $hasil = sqrt($angka);
                }
?>

                        <p class="text-light" style="font-size:50px">
                            <?php 
                            if(isset($hasil)){
                                echo $hasil;
                            }else{
                                echo 0;
                            }
                        ?>
                        </p>
                    </div>
                </div>
            </div>





        </div>
    </section>
    <!-- End About Section -->
</main>






<?php require_once  "template/footer.php" ?>