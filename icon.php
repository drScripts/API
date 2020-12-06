<?php require_once "template/head.php" ?>
<?php require_once "template/navbarall.php" ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-right" data-aos-duration="1000">Free Media Sosial Icon!</h1>
                <h2 data-aos="fade-right" data-aos-duration="2000">Dapatkan Berbagai Media Sosial Icon!</h2>
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


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" id="about">

            <div class="section-title">
                <h2 data-aos="fade-down" data-aos-duration="1000">Icon</h2>
                <p data-aos="fade-left" data-aos-duration="1500">Berikut Adalah Beberapa Icon Gratis</p>
            </div>

            <div class="row" id="banyak">
                <?php 
                   
                    if(isset($_GET['page'])){
                        $pages = $_GET['page'];
                        $url = "https://api.iconscout.com/v3/search?price=free&page=$pages";
                    }else{
                        $url = "https://api.iconscout.com/v3/search?price=free";
                    }  
                    $curl = curl_init();
                    curl_setopt($curl,CURLOPT_URL,$url);
                    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
                     
                    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                        'Client-ID: 81107655603200',
                    ));
                    $result = curl_exec($curl);
                    curl_close($curl);
                    if($result != null){
                    $result = json_decode($result,true);    
                    $result = $result['response']['items']["data"];
                }
                        $time = 500;
                    ?>
                <?php foreach($result as $rs): ?>

                <div class="col-md-2" data-aos="fade-up" data-aos-duration="<?= $time ?>"
                    data-aos-anchor-placement="top-center">
                    <div class=" mt-5">
                        <a href="preview.php?type=<?= $rs['slug'] ?>">
                            <img src="<?= $rs['urls']['png_128'] ?>" class="card-img-top" alt="<?= $rs['name'] ?>"
                                width="50px">
                            <div class="card-body text-center">
                                <p><small><?= $rs['slug']; ?></small></p>
                            </div>
                        </a>
                    </div>
                </div>

                <?php 
                    if($time == 3000){
                        $time = 500;
                    }else{
                        $time += 500;
                    }
                endforeach; ?>
            </div>


        </div>
        <div class="container">
            <div style="margin-left:50%;margin-top:10%">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <?php 
                            if(!isset($_GET['page'])){
                                $pages = 1;
                            }elseif(isset($_GET['page'])){
                                $pages = $_GET['page'];
                            }

                                if(isset($pages)){
                                    $pagesnext  = $pages + 1; 
                                    $pagebe = $pages - 1;
                                } 
                            ?>
                            <a class="page-link" href="icon.php?page=<?php 
                            if($pagebe == 0){
                                $pagebe = 1;
                            }    
                             echo $pagebe ?>#services" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <a class="page-link" href="icon.php?page=<?= $pagesnext ?>#services" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- End Services Section -->




</main>

<?php require_once "template/footer.php" ?>