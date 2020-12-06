<?php 
                if(isset($_POST['submit'])){
                    $nama = $_FILES['foto']['name'];
                    $temp = $_FILES['foto']['tmp_name'];
                    $ukuran = filesize($temp);
                   
                     
                        $lokasi = "image_temp/".$nama;
                        $lokasi_simpen = "image_hasil";
                        move_uploaded_file($temp,$lokasi);   
                        
                        require_once "API/bgremove/vendor/autoload.php";
                                
                            
                            $client = new GuzzleHttp\Client();
                            $res = $client->post('https://api.remove.bg/v1.0/removebg', [
                                'multipart' => [
                                    [
                                        'name'     => 'image_file',
                                        'contents' => fopen("$lokasi", 'r')
                                    ],
                                    [
                                        'name'     => 'size',
                                        'contents' => 'preview'
                                    ]
                                ],
                                'headers' => [
                                    'X-Api-Key' => 'Q6pXQ7PHAcyRXDnkZSXvTbsg'
                                ]
                            ]);
                            $nama = explode('.',$nama);
                            $namanya = $nama[0];   
                            $fp = fopen("$lokasi_simpen/". $namanya . "-no-bg.png", "wb");
                            fwrite($fp, $res->getBody());
                            fclose($fp);
                            unlink($lokasi);        
                            $link_hasil = "$lokasi_simpen/". $namanya . "-no-bg.png";     
                            $nama_baru = "$namanya"."-no-bg.png";        
                            // download
                            
                            $nama_file_boong = "$nama_baru";
                             
                            $type = explode('.',$nama_file_boong);
                            $type = ".".$type[1];
                                  
                            $nama_boong = "image_hasil/$nama_file_boong";

                                   
                            $size = filesize($nama_boong);
                         
                            
                             
                            // header yang menunjukkan nama file yang akan didownload
                            header("Content-Disposition: attachment; filename=".$nama_file_boong); //$nama_file_boong
                                    
                            //          // header yang menunjukkan ukuran file yang akan didownload
                                    header("Content-length: ".$size);
                                    
                            //         // header yang menunjukkan jenis file yang akan didownload
                                    header("Content-type: ".$type);
                                    
                            //         // proses membaca isi file yang akan didownload dari folder 'data'
                                    $fp  = fopen($nama_boong, 'r');
                                    $content = fread($fp, filesize($nama_boong));
                                    fclose($fp);
                                    
                            //         // menampilkan isi file yang akan didownload
                                    echo $content;
                                        unlink($nama_boong);
                                    exit;
                           
                            
                    
                    
                } 
                 
           
             
            ?>





<?php require_once "template/head.php" ?>
<?php require_once "template/navbarall.php" ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-right" data-aos-duration="1000">Free Image Background Remover</h1>
                <h2 data-aos="fade-right" data-aos-duration="2000">Hapus Background Pada Fotomu Dengan Mudah</h2>
                <div data-aos="fade-right" data-aos-duration="3000"><a href="#section"
                        class="btn-get-started scrollto">Get Started</a></div>
            </div>
            <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-duration="2000">
                <img src="assets/img/cropped-cb-logo-1-2.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section>
<!-- End Hero -->
<div class="mb-5 mt-5">
    <div class="semua">
        <div class="kontener" id="section">
            <div class="bungkus">
                <div class="poto">
                    <img class="foto" src="" alt="">
                </div>
                <div class="isi">
                    <div class="icon" onclick="defaultBtnActive()"><i class="fas fa-cloud-upload-alt"></i></div>
                    <div class="judul" onclick="defaultBtnActive()">No File Chosen, Yet!</div>
                    <div id="cancel-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="file-name">
                        File Name Here!
                    </div>
                </div>
            </div>
            <button id="tombol-costum" onclick="defaultBtnActive()">Select The File!</button>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" id="tombol-asal" name="foto" hidden>
                <button id="tombol-submit" class="ada" name="submit" type="submit">REMOVE BACKGROUND!</button>
            </form>





        </div>
    </div>
</div>











<?php require_once "template/footer.php" ?>