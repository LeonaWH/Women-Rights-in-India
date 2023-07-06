<?php
    include 'header2.php';
?>
<head>
    <title>Lawyers Search Page</title>
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
      <a href="index3.php">Lawyers</a>
      <a href="fix.html">Graphs</a>
      <a href="contactus.html">Contact</a>
      <a href="news.html"><b><em>News</em></b></a>
    </nav>
  </header>
<h1 style="margin-top: 0px; margin-bottom: 0px;">Lawyers Search Results</h1>
<div class="article-container">
<?php 
    if( isset($_POST['submit-search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT*FROM lawyers WHERE areapractice LIKE '%$search%' OR lawyer_name LIKE '%$search'";
        
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

       
        
        echo " <p class = 'resultprompt'>There are ".$queryResult." results</p>";

        if ($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo "
                <div class = 'article-box'>
                <h3>".$row['lawyer_name']."</h3>
                <p><b>City</b>: ".$row['city']."</p>
                <p><b>Phone Number: </b>".$row['phoneno']."</p>
                <p><b>Email ID: </b>".$row['email']."</p>
                <p><b>Area of Practice: </b>".$row['areapractice']."</p>
                <p><b>Address: </b>".$row['address']."</p>
                </div>";

            }

        }else{
            echo "<br>There are no matching results";
        }
    
    }


?>
</div>