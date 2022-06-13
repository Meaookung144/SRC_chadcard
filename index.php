<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ชัชชาติ Generator</title>
</head>
<style>
    @font-face {
        font-family: rongnang;
        src: url(SOV_RongNang.ttf);
    }

    .display {
        font-family: rongnang;
        text-align: center;
    }
</style>

<body>
    <?php
    $text = $_GET['text'];
    ?>
    <center>
        <canvas id="display" width="500" height="500" style="border:1px solid #000;background-color: #000;">
            บราวเซอร์ไม่รองรับ กรุณาเปลี่ยนบราวเซอร์!</canvas>


        <script>
            var c = document.getElementById("display");
            var ctx = c.getContext("2d");

            ctx.font = "100px rongnang";
            ctx.fillStyle = "#70bc38"
            ctx.textAlign = "center";
            ctx.rotate(-20 / 180);
            ctx.fillText("<?= $text ?>", 220, 175);
            ctx.fillText("<?= $text ?>", 220, 275);
            ctx.fillText("<?= $text ?>", 220, 375);
            ctx.fillRect(100, 395, 250, 15);
        </script>
    </center>
</body>

</html>