<?php
    include 'header.php';
?>
<head>
    <title>Search Page</title>
    <link rel="stylesheet" href="searchstlye.css">
    <script src="script.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css">

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">

</head>
<header class="header">
    <a href="#" class="logo"><img src="images/Logo WRI.png" alt="Logo" width="40" height="55" class="d-inline-block align-text-top"></a>
    <nav class="nav-items">
      <a href="index.html">Home</a>
      <a href="news.html"><b><em>News</em></b></a>
    </nav>
  </header>
<h1 style="margin-top: 0px;margin-bottom: 0px;">Article</h1>
<div class="article-container">
    <?php
        $title = mysqli_real_escape_string($conn, $_GET['title']);
       
        $sql = "SELECT*FROM article1 WHERE a_title = '$title'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        if ($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class = 'article-box'>
                    <h3>".$row['a_title']."</h3>
                    <p>".$row['a_court']."</p>
                    <p>".$row['a_author']."</p>
                    <p><b>Description: </b>".$row['a_text']."</p>
                    
                </div>";
            }
        }



    ?>


</div>
</body>
</html>