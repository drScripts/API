<?php require_once "template/head.php" ?>
<?php require_once "template/navbarall.php" ?>
<?php 
if(!isset($_GET['type'])){
    header('Location:icon.php#services');
}

?>
<?php 
        $type = $_GET['type'];
        $curl = curl_init();
        curl_setopt($curl,CURLOPT_URL,"https://api.iconscout.com/v3/search");
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Client-ID: 81107655603200',
        ));
        $result = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($result,true);
        $result = $result['response']['items']['data'];
        
       
    ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-right" data-aos-duration="1000">Icon <?= $type; ?></h1>
                <h2 data-aos="fade-right" data-aos-duration="2000">Download Icon Gratis</h2>
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
    <?php 
                     foreach($result as $rs){
                         if($rs['slug'] == $type){
                            //  echo "<pre>";
                            //  print_r($rs);
                            //  echo "</pre>";
                             $url1 = $rs['urls']['png_64'];
                             $url2 = $rs['urls']['png_128'];
                             $url3 = $rs['urls']['png_256'];
                             $uuid = $rs['uuid'];
                            }    
                        }
                     ?>
    <section class="about" id="about">
        <div class="section-title">
            <h2 data-aos="fade-down" data-aos-duration="1000">Icon <?= $type; ?></h2>
        </div>
        <div class="card ml-5 mr-5 mb-5">
            <div class="container m-5">
                <div class="row">
                    <div class="col-4">
                        <img src="<?= $url1 ?>" alt="<?=$url1?>">
                        <p>PNG 64 Megapixel</p>
                    </div>
                    <div class="col-4">
                        <img src="<?= $url2 ?>" alt="<?= $url2 ?>">
                        <p>PNG 128 Megapixel</p>
                    </div>
                    <div class="col-4">
                        <img src="<?= $url3 ?>" alt="<?= $url3 ?>">
                        <p>PNG 256 Megapixel</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h3 class="mt-5">CDN : </h3>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            PNG 64 Mpx
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <input type="text" readonly class="form-control"
                                            value='<img src="<?= $url2 ?>" alt="<?= $type ?>">' id="input1" id="input1">
                                        <button id="link1" class="btn mt-3" onclick="link1()">Copy Link!<i
                                                class="icofont-copy"></i></button>
                                        <div id="alert1" class='alert mt-3 alert-success' role='alert'>
                                            Link Copied!
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
                                            PNG 128 Mpx
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <input type="text" readonly class="form-control"
                                            value='<img src="<?= $url2 ?>" alt="<?= $type ?>">' id="input2">
                                        <button id="link2" class="btn mt-3" onclick="link2()">Copy Link!<i
                                                class="icofont-copy"></i></button>
                                        <div>
                                            <div id="alert2" class='mt-3 alert alert-success' role='alert'>
                                                Link Copied!
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
                                            PNG 256 Mpx
                                        </button>

                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <input type="text" readonly class="form-control"
                                            value='<img src="<?= $url2 ?>" alt="<?= $type ?>">' id="input3">
                                        <button id="link3" class="btn mt-3" onclick="link3()">Copy Link!<i
                                                class="icofont-copy"></i></button>
                                        <div id="alert3" class='alert mt-3 alert-success' role='alert'>
                                            Link Copied!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <h3 class="mt-5">Download :</h3>
                        <form action="" method="post">
                            <button type="submit" name="svg" class="btn btn-primary">SVG <i
                                    class="icofont-download"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php 
        if(isset($_POST['svg'])){
            $curl = curl_init();
            curl_setopt($curl,CURLOPT_URL,"https://api.iconscout.com/v3/items/$uuid/api-download?format=svg");
            curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
            curl_setopt($curl, CURLOPT_POST, 1);
            $head = array(
                'Client-Secret: C8K1Qp9gWkAmaCqAQwKqmDjg8olnTLDS',
                'Client-ID: 81107655603200'
            );
                
            curl_setopt($curl, CURLOPT_HTTPHEADER,$head);

            $result = curl_exec($curl);
            curl_close($curl);
            $result = json_decode($result,true);
            $url = $result['response']['download']['download_url'];
            // echo $url;    
           
            echo "<meta http-equiv='refresh' content='0; url=$url'>";
        }elseif(isset($_POST['png'])){
            echo "<meta http-equiv='refresh' content='0; url=$url1/download'>";
        }

        ?>






    </section>
</main>




<?php require_once "template/footer.php" ?>