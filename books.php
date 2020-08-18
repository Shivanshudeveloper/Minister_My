<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Books</title>
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

          <div class="headerNewDiv">
            <div class="mantriJiNameMobile"><h2>Ramesh Pokhriyal ‘Nishank’<!--  <span>Ministry of Human Resource Development</span> --></h2></div>
        <div class="topOpenNavDiv">
          <span id="burgermenuphoto">
  <button class="hamburger">&#9776;</button>
<!--   <button class="cross">&#735;</button> -->
    </span>
        <ul class="menuPhoto">
         <li><a href="index.php">Home</a></li>
         <li><a href="videospeeches.php">Video Speeches</a></li>
         <li><a href="videos.php">Video</a></li>
         <li><a href="speeches.php">Speeches</a></li>
         <li><a href="photos.php">Photos</a></li>
        </ul>
   </div>
        </div>

           
        </div>
        
    </nav>

    <main class="main-content">
  <div class="container-fluid">
    <div class="_mainBooksDiv">
      
    <?php
            include './src/dbh.php';
            $sql = "SELECT * FROM books ORDER BY date(date)DESC;";
            $result = mysqli_query($conn, $sql);
            echo '
              <div class="row">
            ';
            while ($row = mysqli_fetch_assoc($result)) {
                $description = substr($row['description'],0,50);
                echo '
                <div class="col-md-3 col-sm-6 col-xs-12 bookDv bkNewDiv" style="margin-bottom: 25px">
                  <div class="booksDvIn" style="height: 480px; background: #fff; border-radius: 6px; padding: 10px">
                    <a href="'.$row['link'].'">
                    <div class="_bksImg"><img width="100%" height="400px" src="./src/'.$row['file'].'"></div>
                    <div class="_bksCntDiv">
                      <h2>'.$row['title'].'</h2>
                    </div>
                    </a>
                  </div>
                </div>
                ';                          
            }
            echo '</div>';
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
<script type="text/javascript">
  $('#burgermenuphoto').click(function(){
    $('.menuPhoto').slideToggle();
  })
</script>
  </body>
</html>