<?php   

if(isset($_POST['download'])){

    $imgUrl = $_POST['imgUrl'];
    $ch = curl_init($imgUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $download = curl_exec($ch);
    curl_close($ch);
    header('Content-type: image/jpg');
    header('Content-Disposition: attachment; filename = "thumnail.jpg"');
    echo $download;


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Video Downloader</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <header>Media Downloader</header>
        <div class="url-input">
            <span class="title">Paste video url:</span>
            <div class="field">
                <input type="text" placeholder="https://www.youtube.com/watch?v=j0SQoEPvJjM" required>
                <input type="hidden" class="hidden-input" name="imgUrl">
                <div class="bottom-line"></div>
            </div>
        </div>
        <div class="preview-area">
            <img src="" alt="media" class="media">
            <i class="icon fas fa-cloud-download-alt"></i>
            <span>Paste video url to see preview</span>
        </div>
        <button name="download" class="download-btn" type="submit">Download</button>
    </form>

    <script type="text/javascript" src="app.js"></script>
</body>
</html>