<?php require_once "template/head.php" ?>
<?php require_once "template/navbarall.php" ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-right" data-aos-duration="1000">Shio Generator</h1>
                <h2 data-aos="fade-right" data-aos-duration="2000">Cari Tahu Shio Mu Disini</h2>
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
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-down" data-aos-duration="1000">Shio Generator</h2>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Masukan Nama Mu :</label>
                            <input type="text" placeholder="Input Your Name Here" name="name" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Pilih Tahun Lahir Mu :</label>
                            <select name="tahun" id="tahun" class="form-control">
                                <option value="kosong">--- Select Year ---</option>
                                <?php 
                                    $tahun_sekarang = date("Y");
                                    $tahun_shio = 1900;
                                    $interval = $tahun_sekarang - $tahun_shio;
                                    for($i = 0;$i <= $interval;$i++){
                                        echo "<option value='$tahun_shio'>$tahun_shio</option>";
                                        $tahun_shio++;
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Generate!</button>
                        </div>
                    </form>
                </div>

                <?php 
                            if(isset($_POST['submit'])){
                                $nama = $_POST['name'];
                                $tahun_sekarang = date("Y");
                                $tahun_shio = 1900;
                                $interval = $tahun_sekarang - $tahun_shio;
                                
                                $jumlah_per_zodiak = $interval / 12;
                                $tahunku = $_POST['tahun'];
                                
                                    $zodiak = array(
                                    'Rats (TIKUS)',
                                    'OX (KERBAU)',
                                    'Tiger (Macan)',
                                    'Rabbit (Kelinci)',
                                    'Dragon (Naga)',
                                    'Snake (Ular)',
                                    'Horse (Kuda)',
                                    'Goat (kambing)',
                                    'Monkey (Monyet)',
                                    'Rooster (Ayam)',
                                    'Dog (Anjing)',
                                    'Pig (Babi)'
                                    );
                                    $ulang = true;
                                    $indeks = 0;
                                    $tahun_indeks = 1900;
                                    while($ulang){
                                    $tahun_shio = $tahun_indeks;
                                    for($i = 0; $i <= $jumlah_per_zodiak;$i++){ 
                                        if($tahunku==$tahun_shio){ 
                                            $ulang=false; 
                                            $ketemu=true;
                                            $indeks-=1; 
                                        }
                                        $tahun_shio+=12; 
                                    } 
                                    $tahun_indeks++; 
                                    $indeks++; 
                                } 
                                        if($ketemu){ 
                                            $zodiaks=$zodiak[$indeks]; 
                                            $nama_zodiak=explode(" ",$zodiaks);
                                           $foto = $nama_zodiak[0] . ".png"; 
                                        }else{ 
                                            echo "tidak ditemukan"; 
                                        }
                            }
                        
                        ?>

                <div class="col-md-6 text-center">
                    <h1>Hasil</h1>
                    <hr>
                    <h5>
                        <?php 
                        if(isset($nama)){
                            echo $nama . " Kamu Memiliki Shio " . $zodiaks;
                        }
                    ?>
                    </h5>
                    <?php if(isset($foto)){ ?>
                    <img src="assets/shio/<?= $foto ?>" alt="" width="250px" height="250px">
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <?php if(isset($zodiaks)){ ?>
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-down" data-aos-duration="1000">Ramalan 2021</h2>
            </div>
            <?php 
                if($nama_zodiak[0] == "Rats"){
                            $judul1 = "Ramalan Jodoh Shio Tikus Tahun 2021 ";
                            $isi1 = "Prediksi cinta shio tikus menunjukkan bahwa jika Anda sudah menikah, kehidupan pernikahan keluarga Anda cenderung berjalan dengan baik. Hubungan asmara Anda diprediksi akan cenderung stabil tahun 2021 ini. Ini juga merupakan waktu yang tepat untuk memiliki atau menambah keturunan (anak akan bershio kerbau, simbol kerja keras).

                            Bagi Anda2 yang sudah berada dalam hubungan romantis, maka hal2 akan cenderung berkembang menjadi lebih baik. Namun, pastikan untuk menghindari godaan seperti perselingkuhan! Sebuah pertengkaran, jika tidak ditangani dengan cara yang penuh kasih, bisa berarti akhir dari sebuah hubungan. Jika Anda bisa setia dan jujur, maka hubungan Anda akan tumbuh dan berkembang.
                            
                            Sementara bagi Anda2 yang masih lajang, ini adalah tahun yang tepat untuk mencoba menemukan pasangan baru. Kemungkinan orangnya juga tidak jauh2, bisa jadi dengan salah satu teman Anda saat ini.";
                            $judul2 = "Ramalan Usaha Shio Tikus Tahun 2021";
                            $isi2 = "Tahun 2021 ini Anda diprediksi akan menghadapi banyak tantangan baru di tempat kerja. Anda akan menjadi sangat sibuk tahun ini. So, gunakan pengalaman dan kreativitas Anda untuk berpikir di luar kotak untuk menyelesaikan masalah2 yang muncul.

                            Hubungan Anda dengan rekan kerja dan atasan juga diprediksi akan cenderung memanas.";
                            $judul3 = "Ramalan Keuangan Shio Tikus Tahun 2021";
                            $isi3 = "Berfokuslah pada penghematan uang di tahun kerbau logam ini daripada membelanjakannya! Ini bukan tahun yang baik untuk melakukan pembelian besar tahun ini.

                            Cobalah untuk menabung (menahan) sebanyak mungkin uang pada semester pertama tahun ini, karena Anda mungkin akan memiliki beberapa masalah keuangan pada semester kedua. Jika Anda dapat melakukan ini, maka Anda akan berada di jalur yang benar untuk memiliki fondasi keuangan yang sehat di tahun 2022 nanti.";

                            $judul4 = "Ramalan Kesehatan Shio Tikus Tahun 2021 ";
                            $isi4  = "Untuk kesehatan, mereka yang bershio tikus diprediksi tidak akan memiliki masalah kesehatan yang serius tahun ini. Kecuali jika Anda sudah memiliki penyakit kronis, kecil kemungkinannya Anda akan memiliki masalah kesehatan yang besar di tahun 2021.

                            Di tahun 2021 ini juga dapat memberi Anda momentum, yang dapat membantu Anda menghilangkan beberapa kebiasaan buruk, seperti kecanduan rokok dan minum2 alkohol.
                            
                            Meski begitu, kehidupan Anda bisa berubah menjadi sulit menjelang akhir2 tahun, jika Anda mengalami banyak tekanan mental dan tidak dapat mengelola stres (pikiran) dengan baik.";
                        } elseif($nama_zodiak[0] == "OX"){
                            $judul1 = "Ramalan Jodoh Shio Kerbau Tahun 2021";
                            $isi1 = "Ramalan cinta shio Kerbau di tahun 2021 menyarankan agar Anda menghindari pertengkaran dengan pasangan di tahun ini. Jangan pakai sikap kepala batu Anda kepada pasangan! Peluang (untuk semakin) memburuknya tinggi, dan bisa berujung pada perceraian.

                            Jika Anda masih lajang, ini juga bukan waktu yang tepat membuat melakukan langkah pertama untuk memulai hubungan romantis. Sepertinya ini juga bukan merupakan tahun yang tepat untuk mencoba memiliki atau menambah anak (yang akan bershio sama dengan Anda). Bayangkan, 2 orang yang sifatnya sama2 keras dalam keluarga, mau jadi apa nanti?";
                            $judul2 = "Ramalan Usaha Shio Kerbau Tahun 2021";
                            $isi2 = "Di tahun 2021 ini Anda diprediksi cenderung mengambil banyak peluang/proyek baru di tempat kerja. Beberapa dari proyek ini ada yang samgat menantang dan menarik, sehingga nantinya akan benar2 menguras energi dan mental Anda. Cobalah untuk membagi beban dengan bekerja sama.

                            Seperti yang dikatakan banyak orang “2 kepala lebih baik dari pada 1.” So, penting juga untuk meminta saran dari rekan Anda ketika terjebak pada suatu kondisi. Ini dapat membantu meningkatkan peluang keberhasilan Anda, dan membangun hubungan yang lebih baik dengan rekan Anda.";
                            $judul3 = "Ramalan Keuangan Shio Kerbau Tahun 2021";
                            $isi3 = "Alih-alih berfokus pada keinginan saat ini, akan lebih bijak jika Anda berfokus pada kebutuhan di masa depan, dimana tahun ini merupakan waktunya siklus 12 tahunan Anda, yakni tahun tahun zodiak lahir Anda (hanzi : 本命年; pinyin : běnmìngnián); atau yang secara harafiah berarti “asal tahun kehidupan”.
                            Mereka2 yang bershio kerbau diyakini akan memiliki nasib yang kurang baik di sepanjang tahun yang berjalan ini. Jadi jika Anda berpikir untuk melakukan investasi atau membeli rumah, sepertinya ini bukanlah tahun yang tepat untuk melakukannya.";
                            $judul4 = "Ramalan Kesehatan Shio Kerbau Tahun 2021";
                            $isi4 = "Karena kebanyakan bekerja, kesehatan Anda akan menderita penyakit pikiran (stress) dan kelelahan. Jika ini tidak diobati, ini akan berkembang menjadi penyakit yang lebih serius. Sebisa mungkin untuk beristirahat dan rileks, kapan pun Anda bisa menemukan waktu untuk melakukannya.

                            Satu hal yang membuat “kurva kesehatan” Anda menurun di tahun ini adalah karena pengaruh bintang Thayshui, yang merupakan posisi waktu tahun (zodiak) lahir Anda sendiri (本命年; běn mìng nián). Ini dapat menyebabkan Anda berubah menjadi cepat stres, tidak fokus, dan emosional.
                            
                            Ketika Anda merasa seperti ini, yang terbaik adalah bersandar pada orang lain, untuk membantu Anda merasa sedikit lebih baik.";
                        }elseif($nama_zodiak[0] == "Tiger"){
                            $judul1 = "Ramalan Jodoh Shio Macan Tahun 2021";
                            $isi1 = "Di tahun 2021 ini, pemilik shio macan diprediksi akan mendapatkan stabilitas dalam hal jodoh dengan pasangan mereka. Jika Anda memiliki hubungan yang serius, dan sudah merencanakannya sejak tahun lalu, tetapi belum kunjung menikah, maka ini adalah tahun yang baik untuk melangsungkannya.

                            Ini adalah tahun yang sangat baik bagi para macan yang masih single, karena mereka diberkati oleh Peach Blossom Star. Ini adalah waktu yang tepat untuk mencoba bertemu dengan seseorang, dimana karisma Anda akan lebih tinggi dari biasanya. Cobalah untuk memilih seseorang yang sudah Anda kenal sebelumnya untuk menemukan cinta.
                            
                            Hindari godaan tahun ini! Waspada pada kehadiran pihak ke-3!
                            
                            Walaupun ini umumnya merupakan saran2 yang bagus untuk setiap tahunnya, namun nyatanya ini penting untuk mengikuti saran ini di tahun 2021. Ini karena setiap pertikaian antara Anda dan pasangan kemungkinan besar akan berujung fatal. Menghindari pertengkaran dalam bentuk apa pun adalah cara yang terbaik.";
                            $judul2 = "Ramalan Usaha Shio Macan Tahun 2021";
                            $isi2 = "Usaha/karir Anda diprediksi akan mengalami tren penurunan yang curam tahun 2021 ini. Rintangan2 ini datangnya entah dari mana, yang jelas Anda harus tetap fokus pada proyek/pekerjaan yang sedang digeluti, jangan sebentar lirik kiri, sebentar lirik kanan. Sedikit gangguan saja dapat berarti akhir dari usaha/karir Anda.";
                            $judul3 = "Ramalan Keuangan Shio Macan Tahun 2021";
                            $isi3 = "Keuangan Anda juga diprediksi masih akan kurang stabil seperti di tahun 2020 kemarin (efek usaha yang lesu akibat Covid-19 masih terasa).
                            Anda tidak akan mendapatkan banyak uang, bahkan bisa kehilangan semuanya jika tidak hati2. Anda sebaiknya menyimpan sebagian besar uang Anda tahun ini sebagai pegangan (untuk berjaga2). Untuk mereka2 yang bershio macan, tahun kerbau mungkin bukan saat yang tepat untuk melakukan pembelian atau melakukan investasi besar.
                            Jika ingin memaksimalkan kekayaan di tahun ini, Anda dapat menempatkan “pohon keberuntungan” yang berwarna (berdaun) hijau di rumah, yang dimana warna hijau sendiri merupakan warna keberuntungan bagi shio macan.";
                            $judul4 = "Ramalan Kesehatan Shio Macan Tahun 2021";
                            $isi4 = "Tidak perlu khawatir tentang kesehatan Anda di tahun 2021. Anda diprediksi tidak akan mengalami masalah kesehatan yang serius disepanjang tahun ini. Kondisi kesehatan Anda akan berada di puncaknya, dan meskipun sakit/terluka, akan lebih cepat sembuhnya.

                            Jika Anda membutuhkan operasi pada tahun2 sebelumnya, namun menundanya karena alasan apa pun, maka 2021 adalah tahun yang tepat untuk menjadwalkannya ulang (ingat! sebelum memasuki tahun 2022 karena akan lebih beresiko)
                            ";
                        }elseif($nama_zodiak[0] == "Rabbit"){
                            $judul1 = "Ramalan Jodoh Shio Kelinci Tahun 2021";
                            $isi1 = "Ramalan jodoh shio kelinci tahun 2021 memprediksi bahwa ini adalah tahun yang tepat bagi mereka2 yang masih lajang untuk menemukan hubungan romantis baru. Dengan keberuntungan, mereka akan dengan cepat menemukan pasangan yang cocok, terutama yang saat ini sedang berada disekitar mereka (orang2 dekat).

                            Jika Anda sudah berada dalam suatu hubungan, Anda mungkin akan mengalami beberapa masalah dalam kehidupan bersama pasangan. Pertengkaran dan beberapa masalah kecil lainnya sering kali membuat pusing kepala. Coba selesaikan masalah ini. Jika Anda tidak dapat melakukan ini, maka siap2lah menjalani tahun yang menguras emosi.
                            
                            Bagi yang sudah berkeluarga, ini adalah tahun yang baik untuk memiliki bayi. Tidak akan ada banyak perubahan dalam kehidupan keluarga Anda tahun ini. Cobalah menghabiskan lebih banyak waktu untuk membuat pernikahan Anda lebih menarik. Jika sudah memiliki anak, ini adalah tahun yang tepat untuk fokus pada pendidikan baru mereka.";
                            $judul2 = "Ramalan Usaha Shio Kelinci Tahun 2021 ";
                            $isi2 = "Ramalan karir shio kelinci tahun 2021 memprediksi bahwa kehidupan karir Anda tidak akan berubah banyak tahun ini. Begitupun dengan yang berbisnis, sebagian besar usaha yang dijalankan masih akan bergerak statis (namun cenderung melambat).

                            Kenakan baju2 berwarna cerah di tempat kerja. Anda mungkin akan merasa lebih kreatif daripada biasanya di tahun ini.
                            
                            Ini adalah tahun yang baik untuk fokus membuat hubungan bisnis baru, dan bergaul lebih baik dengan rekan kerja Anda. Ini dapat membantu meningkatkan karir Anda di akhir2 tahun nanti, dan sebagai modal di tahun2 mendatang.";
                            $judul3 = "Ramalan Keuangan Shio Kelinci Tahun 2021";
                            $isi3 = "Sama seperti karir Anda, keuangan Anda kemungkinan akan tetap stabil tahun ini. Namun, situasi keuangan Anda dapat berubah menjadi lebih baik, jika Anda dapat menemukan sumber pendapatan baru. Jika Anda bisa mengelola ini, maka Anda kemungkinan akan mendapatkan surplus uang.
                            Anda mungkin perlu melakukan pembelian besar di dekat akhir2 tahun, jadi sebaiknya hemat uang Anda untuk bisa membayarnya.

                            Shio kelinci terkadang memiliki masalah terkait dengan judi (gambling, termasuk investasi yang beresiko tinggi). Ini terjadi, karena tingkat keberuntungan shio ini memang diatas rata2 shio yang lain (terlalu percaya diri). Tapi cobalah untuk menghindari godaan ini sebanyak yang Anda bisa di tahun ini.

                            Tahun kerbau di identikkan dengan tahunnya kerja keras, dimana tahun ini memang cukup bagus dalam kestabilan keuangan. Tetapi itu tidak menambah keberuntungan apapun dalam hal perjudian. Jika melakukan hal tersebut, Anda lebih mungkin kehilangan uang daripada mendapatkannya.";
                            $judul4 = "Ramalan Kesehatan Shio Kelinci Tahun 2021";
                            $isi4 = "Di sepanjang tahun kerbau ini, kesehatan Anda diprediksi akan cukup stabil. Namun penyakit2 ringan seperti masuk angin, atau penyakit2 ringan lainnya di musim dingin bisa datang menghinggap. Menjelang akhir2 tahun, hati2 ada bahaya dimana Anda berpotensi mengalami kecelakaan.

                            ";
                        }elseif($nama_zodiak[0] == "Dragon" ){
                            $judul1 = "Ramalan Jodoh Shio Naga Tahun 2021";
                            $isi1 = "Bagi para shio Naga yang sementara menjalin hubungan romantis, Anda cenderung menghadapi beberapa situasi pasang surut tahun ini. Pada titik tertentu, hubungan Anda bisa berjalan baik. Tapi di titik lain, Anda akan terhambat oleh ketidaksepakatan. Untungnya, pasang surut ini hanya akan berlangsung sekitar ½ tahun pertama. Setelah itu, segala sesuatunya akan membaik.

                            Jika Anda masih lajang, ini sepertinya bukan tahun yang tepat untuk mulai menjalin hubungan, terutama bagi para pria. Cobalah untuk melakukan upaya ekstra dalam berpenampilan, untuk mendapatkan peluang yang lebih baik dalam menarik perhatian wanita.
                            
                            Orang2 yang Anda temui mungkin belum akan menjadi pasangan masa depan Anda, mereka cenderung bertahan selama sisa tahun ini. Tahun ini, para wanita yang shio Naga juga akan merasakan efek bintang Tai Yin yang beruntung. Bintang ini mempromosikan energi wanita yang lebih dominan.";
                            $judul2 = "Ramalan Usaha Shio Naga Tahun 2021 ";
                            $isi2 = "Secara umum, Anda perlu melakukan banyak usaha ekstra dalam karir tahun ini. Tujuan (target) Anda mungkin tampak lebih sulit daripada biasanya. Yang terbaik adalah merencanakan langkah Anda, setahap demi setahap dengan hati2.

                            Pastikan untuk mengambil sikap berhati2 di tempat kerja tahun ini, terutama dalam hal cara Anda memperlakukan rekan kerja. Jika Anda tidak bisa bergaul dengan mereka, maka Anda tidak akan menemukan bantuan kesuksesan apapun.";
                            $judul3 = "Ramalan Keuangan Shio Naga Tahun 2021";
                            $isi3 = "Ramalan keuangan shio Naga tahun 2021 memprediksi bahwa Anda akan memiliki sedikit keberuntungan dalam keuangan di awal2 tahun ini. Jika Anda berencana melakukan pembelian dalam jumlah besar, yang terbaik adalah melakukan ini di awal tahun.

                            Ketika musim semi dimulai, Anda juga mungkin akan menemukan cara untuk menghasilkan lebih banyak uang tambahan. Namun, yang terbaik adalah tidak membelanjakan penghasilan tambahan ini. Sebaiknya berhematlah! Anda mungkin membutuhkan uang cash di akhir2 tahun 2021, atau awal2 tahun 2022 nanti.";
                            $judul4 = "Ramalan Kesehatan Shio Naga Tahun 2021";
                            $isi4 = "Sayangnya, Anda akan cenderung menghadapi beberapa masalah kesehatan tahun ini. Paling umum di menyangkut cedera fisik (termasuk terkilir dan patah tulang). Ini terjadi ketika Anda sering beraktivitas luar ruangan atau berolahraga. So, berhati2lah untuk meminimalkan beberapa dari efek cedera ini.

                            Penyakit juga mungkin datang kepada Anda dalam bentuk keracunan makanan. Untuk alasan ini, sebaiknya ekstra waspada saat makan2 di luar (kalau bisa, kurangi). Masalah perut lainnya mungkin bisa datang membayangi (atau yang berhubungan dengan pencernaan). So, menyimpan obat2-an yang berhubungan dengan ini sebagai pertolongan pertama ,adalah langkah bijak yang sebaiknya diambil.";
                        }elseif($nama_zodiak[0] == "Snake"){
                            $judul1 = "Ramalan Jodoh Shio Ular Tahun 2021";
                            $isi1 = "Apakah Anda lajang atau sedang berada dalam hubungan romantis? Keberuntungan tetap berada disisi Anda di tahun kerbau ini! Jika Anda berada dalam hubungan jangka panjang yang stabil, maka ini adalah tahun yang baik untuk mengambil langkah selanjutnya dengan pasangan Anda. Ini bisa berarti bertunangan, menikah, pindah bersama, atau hal2 yang serupa.

                            Jika Anda lajang, maka ini adalah tahun keberuntungan untuk menemukan pasangan baru. Setiap insan yang ditemukan tahun ini cenderung hanya bertahan sebentar. Mereka mungkin bukan orangnya, tetapi mereka mungkin akan memiliki semacam hubungan romantis jangka panjang.";
                            $judul2 = "Ramalan Usaha Shio Ular Tahun 2021";
                            $isi2 = "Tahun ini, sebagian besar pekerjaan Anda akan berorientasi pada kerja tim. Untuk alasan ini, yang terbaik adalah mencoba meningkatkan hubungan Anda dengan rekan kerja.

                            Apakah Anda memiliki hubungan yang baik atau buruk dengan mereka? Ini akan menentukan apakah kehidupan karier Anda berhasil, atau jatuh ke dalam stres berat. Jika Anda berhasil dalam pekerjaan tahun ini, itu bisa mengarah ke perhatian positif dari atasan, kenaikan gaji, atau bahkan promosi jabatan.";
                            $judul3 = "Ramalan Keuangan Shio Ular Tahun 2021 ";
                            $isi3 = "Keuangan Anda diprediksi relatif stabil di tahun 2021 ini. Anda juga mungkin cukup beruntung untuk mendapatkan uang tambahan, tetapi ini tergantung pada seberapa sukses Anda dalam karir/usaha.

                            Jika Anda cukup beruntung untuk mendapatkan uang ekstra, maka boleh saja digunakan untuk melakukan pembelian besar selama diperlukan. Pembelian terbaik dalam beberapa hal ini, bisa terkait dengan rumah, apartemen, atau real estat.
                            
                            Ini adalah tahun yang buruk untuk melakukan investasi apa pun selain dibidang real estat, seperti saham atau valas. Tahun ini sepertinya ada orang yang ingin mencoba menipu uang Anda. So, hati2 dengan ini! Simpan uang Anda daripada membeli ke skema mereka. Jika sepertinya itu terlalu bagus untuk menjadi kenyataan, mungkin itu bisa jadi menipu.";
                            $judul4 = "Ramalan Kesehatan Shio Ular Tahun 2021";
                            $isi4 = "Kesehatan fisik Anda akan berada pada top performance untuk sebagian besar tahun ini. Anda tidak akan menghadapi masalah kesehatan serius, atau mengalami cedera besar. Namun Anda mungkin akan terkena flu musiman. Cobalah untuk mencegah hal ini dengan menghindari tempat2 dingin yang terlalu lama, atau menghabiskan waktu bersama orang sakit lainnya.

                            Kesehatan mental Anda harus menjadi prioritas di tahun ini. Jika Anda tidak meluangkan waktu untuk bersantai, Anda mungkin akan jatuh pada depresi. Ini kemungkinan besar akan terjadi pada paruh kedua tahun ini. Untuk mencegah hal ini, cobalah untuk mengambil cuti di musim panas. Liburan, selama tidak di luar negeri, direkomendasikan.";
                        }elseif($nama_zodiak[0] == "Horse"){
                            $judul1 = "Ramalan Jodoh Shio Kuda Tahun 2021";
                            $isi1 ="Kehidupan romantis mereka2 yang bershio kuda akan mengalami pasang surut di tahun 2021 ini. Sebagian besar tampaknya akan berjalan lancar. Walaupun ini mungkin terasa membosankan, itu berarti bahwa tidak akan ada banyak drama dalam kehidupan cintamu, yang beberapa orang mungkin merasa nyaman dengan itu.

                            Hati-hati akan masalah dengan kehadiran orang ke-3! Selama Anda dapat menghindari hubungan gelap tahun ini, hubungan Anda harus dalam kondisi yang baik.
                            
                            Untuk jodoh, pria bershio kuda yang masih single kemungkinan besar tidak akan begitu bagus tahun ini. Sementara yang wanita bisa menemukan pasangannya di tahun ini, tapi mungkin hubungan itu tidak akan bertahan lama.
                            
                            Tahun ini juga bukan tahun terbaik bagi shio kuda untuk memiliki/menambah anak lagi, kecuali mereka memiliki pasangan yang memiliki prediksi shio yang baik untuk memiliki bayi di tahun 2021.";
                            $judul2 = "Ramalan Usaha Shio Kuda Tahun 2021 ";
                            $isi2 = "Ini akan menjadi tahun yang stabil bagi karir/usaha shio kuda. Namun akan ada saat2 ketika Anda perlu melakukan lebih banyak pekerjaan daripada biasanya, yang bisa membuat stres. Pekerjaan akan mengalir jauh lebih mudah tahun ini, jika Anda dapat belajar bekerja dengan orang lain.

                            Orang2 yang bekerja di bidang yang mengharuskan mereka untuk berbicara banyak dengan orang lain, cenderung memiliki tahun yang lebih baik daripada mereka yang bekerja dalam pekerjaan soliter (tipe menyendiri, atau dibalik layar).
                            
                            Ini juga bukan tahun yang tepat untuk mencari pekerjaan baru jika Anda sudah memilikinya, kecuali jika Anda saat ini menganggur. Ada peluang untuk mendapatkan promosi atau kenaikan gaji tahun ini.";
                            $judul3 = "Ramalan Keuangan Shio Kuda Tahun 2021 ";
                            $isi3 = "Anda akan menghadapi beberapa pasang surut dalam keuangan di tahun ini. Terkadang, dompet Anda akan menebal; di lain waktu itu akan hampir kosong. Ini juga sepertinya bukan tahun yang baik untuk melakukan investasi, karena Anda cenderung kehilangan lebih banyak uang daripada yang bisa Anda dapatkan dari mereka.";
                            $judul4 = "Ramalan Kesehatan Shio Kuda Tahun 2021";
                            $isi4 = "Tahun kerbau logam akan memberkati Anda dengan kesehatan yang baik. Paling2, Anda mungkin harus berurusan dengan sakit kepala sesekali, atau yang berhubungan dengan kondisi dingin.

                            Kecuali jika Anda sudah berumur, Anda tidak akan menjadi sakit selama Anda makan dengan benar, berolahraga, dan cukup tidur. Jika Anda sudah berumur, maka yang terbaik adalah menemui dokter setiap kali Anda jatuh sakit, untuk memastikan penyakit ringan tidak berubah menjadi sesuatu yang serius.";
                        }elseif($nama_zodiak[0] == "Goat"){
                            $judul1 = "Ramalan Jodoh Shio Kambing Tahun 2021";
                            $isi1 = "Shio kambing yang masih lajang tidak akan memiliki banyak keberuntungan dalam cinta tahun ini. Ini artinya Anda tidak mungkin menjalin hubungan yang serius dengan siapa pun. Ini bukan tahun Anda untuk bertemu dengan calon pasangan hidup. Jika pun Anda bertemu seseorang, itu hanya akan menjadi jodoh yang singkat.

                            Sementara bagi shio kambing yang sudah berkeluarga, saya mendorong Anda untuk membuka komunikasi antara diri Anda dan anggota keluarga lain. Jika Anda memiliki argumen atau ketidaksepakatan di masa lalu, maka sekarang adalah waktu untuk menyelesaikannya.
                            
                            Ini juga bukan tahun yang cocok untuk berpikir tentang kehamilan.";
                            $judul2 = "Ramalan Usaha Shio Kambing Tahun 2021";
                            $isi2 = "Di tahun 2021 ini, Anda2 yang bershio kambing akan cenderung lebih sibuk dari biasanya di tempat kerja. Kadang2, ini bisa terasa sulit.

                            Jika memungkinkan, mintalah bantuan dari shio kuda, karena mereka akan cukup cemerlang di tempat kerja tahun ini. Selesaikan tugas2 Anda pokok selama masa2 yang sulit ini.";
                            $judul3 = "Ramalan Keuangan Shio Kambing Tahun 2021 ";
                            $isi3 = "Hati-hati dengan keuangan Anda tahun ini! Peruntungan shio kambing 2021 memprediksi adanya nasib buruk dalam keuangan. Untuk alasan ini, yang terbaik adalah menghindari pengeluaran uang untuk hal2 yang tidak Anda butuhkan.

                            Jika Anda tidak mengindahkan hal ini, maka Anda mungkin kehabisan uang, dan perlu meminjam uang dari orang lain. Meminjam uang hanya akan menambah nasib buruk tambahan (beban). Jadi, untuk menjaga posisi keuangan Anda di tempat tertinggi di tahun 2021, hindari meminjamkan, meminjam, apalagi berjudi! Simpan uang cash Anda sebanyak mungkin.";
                            $judul4 ="Ramalan Kesehatan Shio Kambing Tahun 2021";
                            $isi4 = "Sebagian besar, kesehatan Anda akan dalam kondisi dibawah rata2 tahun ini. Anda mungkin akan menghadapi beberapa masalah kesehatan, seperti sakit kepala, insomnia, dan masalah yang berhubungan dengan perut (pencernaan).

                            ";
                        }elseif($nama_zodiak[0] == "Monkey"){
                            $judul1 = "Ramalan Jodoh Shio Monyet Tahun 2021";
                            $isi1 ="Bagi shio monyet yang masih lajang, tahun ini akan memiliki banyak peluang untuk petualangan baru dalam kehidupan cinta mereka. Bahkan, Anda2 yang masih lajang sebenarnya lebih beruntung dalam hal mencari jodoh, daripada mereka2 yang sudah menjalin hubungan, atau sudah menikah.
                            Yang terbaik adalah, carilah pasangan baru pada orang2 yang sudah Anda kenal sebelumnya. Teman2 terdekat saat ini adalah taruhan terbaik untuk menjadi pasangan Anda di masa depan.

                            Bagi shio monyet yang sudah berkeluarga, tahun 2021 ini akan cukup stabil, dan merupakan tahun yang baik untuk dan memiliki keturunan. Satu hal yang perlu diwaspadai, Anda mungkin tergoda untuk berbuat curang, tetapi jika melakukan ini, itu hanya akan merusak hubungan Anda bersama pasangan.";
                            $judul2 = "Ramalan Usaha Shio Monyet Tahun 2021";
                            $isi2 = "Ramalan karir shio monyet tahun 2021 memprediksi bahwa Anda akan melihat banyak peluang baru yang besar di tempat kerja tahun ini. Apabila memungkinkanmbil setiap peluang bisnis yang menghampiri Anda.

                            Dengan menyelesaikan tugas2 yang datang dari peluang2 baru ini, Anda akan meningkatkan hubungan dengan atasan/bos Anda, dan bahkan mungkin mendapat kenaikan gaji dan promosi darinya.";
                            $judul3 = "Ramalan Keuangan Shio Monyet Tahun 2021 ";
                            $isi3 = "Ramalan keuangan shio monyet di tahun kerbau, memprediksi akan ada keberuntungan dalam keuangan. Tapi jangan menghabiskan uang dengan sia2 seperti berjudi. Ini adalah tahun yang baik untuk memulai bisnis, melakukan investasi dalam saham atau real estat, atau bahkan hanya menyimpan uang untuk masa depan.";
                            $judul4 = "Ramalan Kesehatan Shio Monyet Tahun 2021";
                            $isi4 = "Penting untuk mengawasi pola makan Anda makan tahun ini. Cobalah untuk menghindari makanan berlemak yang dapat meningkatkan kadar kolesterol tubuh. Penting juga untuk memastikan Anda cukup tidur. Penyakit apa pun yang telah Anda idap juga akan bertambah buruk karena kurang tidur.";
                        }elseif($nama_zodiak[0] == "Rooster"){
                            $judul1 = "Ramalan Jodoh Shio Ayam Tahun 2021";
                            $isi1 = "Bagi shio ayam yang masih lajang, maka kemungkinan Anda akan tetap seperti itu selama sisa tahun ini. Mungkin ada beberapa orang yang bisa menjalin hubungan dengan Anda, namun tampaknya itu hanya untuk waktu yang singkat (tidak langgeng).

                            Untuk alasan ini, yang terbaik bagi mereka2 yang masih lajang adalah fokuslah pada persahabatan atas hubungan romantis mereka tahun ini (istilahnya TTM dulu, hehe).
                            
                            Sementara bagi meeka2 yang sudah memiliki pasangan, akan lebih beruntung dalam cinta tahun ini. Hubungan Anda diprediksi akan stabil di sepanjang tahun ini. Pastikan untuk berbagi emosi Anda pada pasangan. Buat agar dia mengerti pemikiran Anda. Ini karena wanita2 yang bershio ayam cenderung lebih dominan/memegang kendali dalam hal rumah tangga!
                            
                            Terakhir, jangan lupa menghabiskan lebih banyak waktu bersama keluarga Anda. Ini akan bekerja lebih baik untuk memperkuat ikatan kekeluargaan.";
                            $judul2 = "Ramalan Usaha Shio Ayam Tahun 2021";
                            $isi2 = "Ramalan karir shio ayam tahun 2021 memprediksi bahwa kehidupan kerja Anda akan sangat produktif. Jika Anda menyelesaikan semua tugas, atasan Anda akan terkesan, dan ada peluang yang terbuka lebar untuk memperoleh promosi atau kenaikan gaji!

                            Namun hati2! Beberapa rekan kerja lebih suka melawan daripada bekerjasama dengan Anda.";
                            $judul3 = "Ramalan Keuangan Shio Ayam Tahun 2021";
                            $isi3 = "Ramalan keuangan shio ayam di tahun kerbau memprediksi bahwa keberuntungan akan berada di pihak Anda, berhubungan dengan keuangan tahun ini. Namun, Anda perlu memastikan setiap usaha/pekerjaan telah dilakukan.

                            Jangan menghabiskan uang Anda dengan sembarangan, seperti membeli barang2 yang tidak Anda butuhkan (shio ayam terkenal boros, apalagi yang wanitanya). Sebaliknya, hemat uang Anda untuk digunakan pada pengeluaran yang diperlukan.";
                            $judul4 = "Ramalan Kesehatan Shio Ayam Tahun 2021 ";
                            $isi4 = "Shio ayam diprediksi tidak akan mengalami masalah kesehatan yang serius di sepanjang tahun kerbau ini. Selama Anda berhati2 dan rutin memeriksa kesehatan, Anda akan menghadapi penyakit serius apa pun (kecuali penyakit bawaan/sudah ada).

                            Tetapi Anda mungkin akan lebih rentan terhadap kecelakaan tahun ini. So, berhati2 lah ketika menggunakan benda tajam (pisau), atau ketika Anda berada di air (kolam renang, pantai), dan ketika Anda berada di tempat yang tinggi (mendaki, cuaca dingin).";
                        }elseif($nama_zodiak[0] == "Dog"){
                            $judul1 = "Ramalan Jodoh Shio Anjing Tahun 2021";
                            $isi1 = "Shio kambing yang masih lajang diprediksi akan kesulitan dalam menemukan jodohnya di tahun 2021 ini. Jauh lebih mungkin bagi Anda untuk menjalin hubungan pertemanan baru (TTM). Namun, ada peluang bagi mereka yang baru saja putus tahun lalu, mungkin bisa kembali bersama dengan mantannya.
                            Sementara bagi yang sudah berkeluarga, hubungan mereka juga bisa mengalami pasang surut. Komunikasi adalah kunci tahun ini. Jika bisa berkomunikasi dengan baik dengan pasangan, semuanya akan berjalan dengan baik. Tapi jika tidak dapat berkomunikasi dengan baik, Anda atau pasangan Anda mungkin akan menyimpang dari hubungan untuk berselingkuh.";
                            $judul2 = "Ramalan Usaha Shio Anjing Tahun 2021 ";
                            $isi2 = "Bagi yang memiliki usaha sendiri, maka kemungkinan besar Anda akan melihat tren penurunan penghasilan di tahun ini. Untuk yang berwirausaha, ini bukan tahun yang tepat untuk mencoba mencoba usaha/bisnis yang baru.

                            Sementara bagi pekerja kantoran, Anda akan cenderung lebih sibuk dari tahun2 sebelumnya. Anda akan mengalami tekanan yang hebat ditempat kerja, dan mungkin akan mengalami stres jika tidak mampu mengendalikannya.";
                            $judul3 = "Ramalan Keuangan Shio Anjing Tahun 2021 ";
                            $isi3 = "Ramalan keuangan shio anjing tahun 2021 menunjukkan bahwa keuangan Anda tidak akan berjalan lancar tahun ini. Ini bukan tahun yang cocok untuk melakukan berinvestasi. Sebaliknya, lebih baik menyimpan uang cash Anda tahun ini.";
                            $judul4 = "Ramalan Kesehatan Shio Anjing Tahun 2021";
                            $isi4 = "Di sebagian besar tahun kerbau ini, shio anjing akan berurusan dengan banyak penyakit kecil. Banyak dari masalah ini akan terkait dengan sistem pencernaan Anda. Jadi pastikan untuk makan dengan benar, berolahraga, dan tidur yang cukup untuk mencegah masalah2 kecil ini datang.";
                            
                        }elseif($nama_zodiak[0] == "Pig"){
                            $judul1 = "Ramalan Jodoh Shio Babi Tahun 2021";
                            $isi1 = "Bagi shio babi yang masih single, Anda mungkin bertemu seseorang yang bisa Anda ajak kencan. Namun, Anda tidak mungkin menempatkan diri Anda dalam hubungan yang langgeng tahun ini. Untungnya, ini juga berarti bahwa Anda tidak akan memiliki banyak drama dalam kehidupan cinta Anda tahun ini.

                            Sementara bagi mereka2 yang sudah menjalin hubungan. mereka mungkin memiliki beberapa drama dalam perjalanan di tahun ini. Ini bisa sebagai akibat dari memiliki keterampilan komunikasi yang buruk. Anda perlu melatih keterampilan komunikasi Anda jika Anda ingin melihat kemajuan dalam hubungan romantis Anda.
                            
                            Shio babi juga dikenal keras kepala, dan sifat dari tahun kerbau ini hanya memperburuk kekeras-kepalaan mereka. Satu lagi, hati2 pada kehadiran orang ke-3 dalam rumah tangga!";
                            $judul2 = "Ramalan Usaha Shio Babi Tahun 2021";
                            $isi2 = "Di tahun kerbau ini, Anda tampaknya harus bekerja lebih keras dari biasanya. Jangan malas! Anda perlu melakukan yang terbaik, bahkan ketika mengerjakan proyek kelompok. Tingkatkan keterampilan komunikasi Anda untuk juga menunjang prospek karir. Perhatikan semua hal2 yang mendetail.

                            Jika Anda wiraswasta, prospek usaha Anda diperkirakan akan stagnan di tahun ini, mengingat efek Covid-19 yang benar2 menghantam bintang semua shio menjadi babak belur.";
                            $judul3 = "Ramalan Keuangan Shio Babi Tahun 2021 ";
                            $isi3 = "Tahun ini akan lebih baik menyimpan uang Anda daripada membelanjakannya. Shio babi sepertinya tidak akan mendapatkan uang lebih banyak dari biasanya tahun ini. Ini adalah tahun yang buruk untuk melakukan investasi, atau melakukan pembelian dalam jumlah besar.

                            Untuk alasan ini, yang terbaik adalah merencanakan anggaran Anda dengan hati2. Secara keseluruhan, tahun 2021 adalah tahun untuk mengendalikan keuangan Anda sendiri!";
                            $judul4 = "Ramalan Kesehatan Shio Babi Tahun 2021 ";
                            $isi4 = "Ramalan kesehatan shio babi tahun 2021 memprediksi bahwa kesehatan Anda adalah rata2 untuk ini. Berhati2 lah saat berolahraga atau bekerja di luar, karena ada potensi mengalami cedera. Juga pastikan untuk cukup tidur. Ini sangat membantu untuk  meningkatkan kesehatan pikiran Anda.
                            Ini adalah tahun yang cocok untuk bepergian. Ambil jika memungkinkan. Bintang Anda dilindungi oleh bintang Ya Ma, yang akan membawa efek positif bagi Anda.";
                        }
                    ?>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <?= $judul1; ?>
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                <?= $isi1; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                <?= $judul2; ?>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                <?= $isi2; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                <?= $judul3; ?>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                <?= $isi3; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                                <?= $judul4; ?>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                <?= $isi4; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>




        </div>

    </section>
    <?php } ?>


</main>





<?php require_once "template/footer.php" ?>