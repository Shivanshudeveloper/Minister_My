<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Speeches</title>
     <link rel="stylesheet" href="photo-include/css/bootstrap.min.css">
    <link rel="stylesheet" href="photo-include/css/magnific-popup.css">
    <link rel="stylesheet" href="photo-include/css/aos.css">
    <link rel="stylesheet" href="photo-include/css/jquery.scrollbar.css">
    <link rel="stylesheet" href="photo-include/css/fancybox.min.css">
    <link rel="stylesheet" href="photo-include/css/style.css">
  </head>
  <body>

    <!-- Image and text -->
    <nav class="photoNavDiv">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                Dr. Ramesh Pokhriyal 'Nishank'
            </a>
            <span class="navbar-text">
            <a href="index.php" class="langLnk">Back</a>
        <a href="speeches.php" class="langLnk">Speeches</a>
        <a href="videos.php" class="langLnk">Video</a>
        <a href="videospeeches.php" class="langLnk">Video Speeches</a>
        <a href="index.php" class="langLnk">Home</a>
            </span>
        </div>
        
    </nav>

<main class="main-content">
    <div class="container-fluid photos">
      <div class="row align-items-stretch">

      <?php
            include './src/dbh.php';
            $sql = "SELECT * FROM videos WHERE seton = 'Speeches' OR seton = 'Both' ORDER BY date(date)DESC;";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
                  <iframe width="400" height="315" src="'.$row['link'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </a>
                </div>
                ';                          
            }
        ?>
        
        

        

      </div>
    </div>
  </main>
 <script src="photo-include/js/jquery-3.3.1.min.js"></script>
 <script src="photo-include/js/jquery.magnific-popup.min.js"></script>
 <script src="photo-include/js/aos.js"></script>
 <script src="photo-include/js/jquery.fancybox.min.js"></script>
  <script src="photo-include/js/jquery.scrollbar.js"></script>
  <script src="photo-include/js/main.js"></script>
  </body>
</html>