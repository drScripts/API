<?php 
                // if(isset($_POST['submit'])){
                //     $nama = $_FILES['foto']['name'];
                //     $temp = $_FILES['foto']['tmp_name'];
                //     $ukuran = filesize($temp);
                //     print_r($ukuran);
                //     echo "<br>";
                     
                //         $lokasi = "image_temp/".$nama;
                //         $lokasi_simpen = "image_hasil";
                //         move_uploaded_file($temp,$lokasi);   
                        
                //         require_once "API/bgremove/vendor/autoload.php";
                                
                            
                //             $client = new GuzzleHttp\Client();
                //             $res = $client->post('https://api.remove.bg/v1.0/removebg', [
                //                 'multipart' => [
                //                     [
                //                         'name'     => 'image_file',
                //                         'contents' => fopen("$lokasi", 'r')
                //                     ],
                //                     [
                //                         'name'     => 'size',
                //                         'contents' => 'auto'
                //                     ]
                //                 ],
                //                 'headers' => [
                //                     'X-Api-Key' => 'Q6pXQ7PHAcyRXDnkZSXvTbsg'
                //                 ]
                //             ]);
                //             $nama = explode('.',$nama);
                //             $namanya = $nama[0];   
                //             $fp = fopen("$lokasi_simpen/". $namanya . "-no-bg.png", "wb");
                //             fwrite($fp, $res->getBody());
                //             fclose($fp);
                //             unlink($lokasi);        
                //             $link_hasil = "$lokasi_simpen/". $namanya . "-no-bg.png";     


                    
                    
                // }else{
                //     // header('Location:background.php#section');
                //     // exit();
                // }
                
                $nama_file_boong = "contact-no-bg.png";
                $type = explode('.',$nama_file_boong);
                $type = ".".$type[1];
                $nama_boong = "image_hasil/$nama_file_boong";
                $size = filesize($nama_boong);
                $folder = "image_hasil/";
                if(isset($_POST['submit'])){
                        // header yang menunjukkan nama file yang akan didownload
                        header("Content-Disposition: attachment; filename=".$nama_file_boong);
                        
                         // header yang menunjukkan ukuran file yang akan didownload
                        header("Content-length: ".$size);
                        
                        // header yang menunjukkan jenis file yang akan didownload
                        header("Content-type: ".$type);
                        
                        // proses membaca isi file yang akan didownload dari folder 'data'
                        $fp  = fopen($nama_boong, 'r');
                        $content = fread($fp, filesize($nama_boong));
                        fclose($fp);
                        
                        // menampilkan isi file yang akan didownload
                        echo $content;
                            
                        exit;
                }
             
            ?>