<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
?>

<!DOCTYPE html>
<html lang="en">


    <?php 
            if(isset($_POST['coba'])){
                $font = $_POST['font_list'];
                // echo $font;
        
                $fonts = explode("/",$font);    
                $link = $fonts[0];
                $family  =  strtr($link,"+"," ");
                
                $kategori = $fonts[1];
                $text = $_POST['text'];
            }   
         ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <?php if(isset($link)){ ?>
        <link href="https://fonts.googleapis.com/css2?family=<?= $link?>&display=swap" rel="stylesheet">
        <?php } ?>
        <title>Document</title>
    </head>

    <body>
        <form action="" method="post">
            <label for="">Input Text</label><br>
            <input type="text" name="text" required placeholder="Input Text"><br>
            <label for="">Select Font Style</label><br>
            <select name="font_list" id="">

            </select><br>

            <button type="submit" name="coba">Submit</button>
        </form>


        <?php if(isset($text) && isset($family) && isset($kategori)){ ?>

        <h1 style="font-family: '<?= $family ?>' , <?= $kategori ?>">
            <?php echo $text ?>
        </h1>
        <?php } ?>



        <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script>
        $(document).ready(function() {
            $.ajax({
                type: "post",
                url: "getall.php",
                success: function(hasil) {
                    $("select[name=font_list]").html(hasil);
                }
            })

        })
        </script>
    </body>

</html>