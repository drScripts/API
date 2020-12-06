<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">

        <div class="copyright-wrap d-md-flex py-4">
            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright <strong><span>Techie</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

    </div>
</footer>
<!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script>
AOS.init();
</script>
<script>
$(document).ready(function() {
    $("#alert1").hide();
    $("#alert2").hide();
    $("#alert3").hide();

    $("#link1").click(function() {
        var copyText = document.getElementById("input1");
        copyText.select();
        document.execCommand("copy");

        $('#input1').click(function() {
            $(this).select();
            document.execCommand('copy');
        });
        $("#alert1").fadeIn(3000, 0).slideDown(3000, function() {
            $(this).show();
            $(this).hide();
        });
    });
    $("#link2").click(function() {
        var copyText = document.getElementById("input2");
        copyText.select();
        document.execCommand("copy");

        $('#input2').click(function() {
            $(this).select();
            document.execCommand('copy');
        });
        $("#alert2").fadeIn(3000, 0).slideDown(3000, function() {
            $(this).show();
            $(this).hide();
        });
    });
    $("#link3").click(function() {
        var copyText = document.getElementById("input3");
        copyText.select();
        document.execCommand("copy");

        $('#input3').click(function() {
            $(this).focus();
            $(this).select();
            document.execCommand('copy');
        });
        $("#alert3").fadeIn(3000, 0).slideDown(3000, function() {
            $(this).show();
            $(this).hide();
        });
    });
});
</script>
<script>
const filename = document.querySelector(".file-name");
const wrapper = document.querySelector(".bungkus");
const cancel = document.querySelector("#cancel-btn");
const defaultBtn = document.querySelector("#tombol-asal");
const costumBtn = document.querySelector("#tombol-costum");
const img = document.querySelector(".foto");
const poto = document.querySelector(".poto");
const judul = document.querySelector(".judul");
const submit = document.querySelector(".ada");
submit.classList.add("hilang");
poto.classList.add("hilang");
let regExp = /[0-9a-zA-Z\^\&\@\{\}[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

function defaultBtnActive() {
    defaultBtn.click();
}
defaultBtn.addEventListener("change", function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function() {
            const result = reader.result;
            poto.classList.remove("hilang");
            submit.classList.remove("hilang");
            img.src = result;
            wrapper.classList.add('active');
        }
        cancel.addEventListener("click", function() {
            poto.classList.add("hilang");
            submit.classList.add("hilang");
            img.src = "";
            wrapper.classList.remove('active');
        });
        reader.readAsDataURL(file);
    }
    if (this.value) {
        let valueStore = this.value.match(regExp);
        filename.textContent = valueStore;
    }
})
</script>
<script>
$(document).ready(function() {
    $.ajax({
        type: "post",
        url: "API/fonts/getall.php",
        success: function(hasil) {
            $("select[name=font_list]").html(hasil);
        }
    })

})
</script>

</body>

</html>