<?php
session_start();
$id = $_SESSION['id'];
include 'outheader.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>Home</title>
</head>

<body>
        
    <div class="container">
    <?php
        $q = $d->select("doc_upload", "ngo_id='$id'");
        $i = 0;
        while ($result = mysqli_fetch_array($q)) {
          $i++;
          ?>
            <a href="uploadimg/<?php echo $result['docFile']; ?>" data-toggle="lightbox">
                <img src="uploadimg/<?php echo $result['docFile']; ?>" alt="" height="200px" width="300px">
            </a>
            <?php

      }
      ?>
    </div>

    <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
    <?php
    session_destroy();
    ?>
</body>