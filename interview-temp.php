<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dr. Ramesh Pokhriyal 'Nishank'</title>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/fullpage.css" />
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/venobox.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--[if IE]>
        <script type="text/javascript">
             var console = { log: function() {} };
        </script>
    <![endif]-->
</head>
<body>
<div class="mainDivtop">
  <div class="headerDivIn">
    <div class="container">
      <div class="headerDivtopIn">
      <div class="col-md-8 col-xs-12 headerDivInDiv">
    <div class="slider_text text-center innerPag">
     <h3>Dr. Ramesh Pokhriyal 'Nishank'</h3>
    </div>
    </div>
    <div class="col-md-4 col-xs-12 hdrRgtBtn">
      <div class="hdrRgtBtnIn">
        <a href="index.php" class="langLnk">Back</a>
      </div>
      </div>
    </div>
    </div>
  </div>
  <div class="innerMainCnt">
    <div class="container">
    <?php
            include './src/dbh.php';
            $sql = "SELECT * FROM interview ORDER BY id DESC;";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                <br />
                <br />
                <br />
                <div class="card shadow mb-2 bg-white rounded border-0">
                <img style="width: 20%" src="./src/'.$row['image'].'" class="card-img-top w-75" alt="...">
                <div class="card-body">
                    <h5 style="text-align: left;" class="card-title">'.$row['title'].'</h5>
                    <small>'.$row['date'].'</small>
                    <p style="text-align: left;" class="card-text text-left">
                        '.$row['description'].'
                    </p>
                    <a href="'.$row['youtube'].'">Video Link</a>
                </div>
            </div>
                ';                          
            }
        ?>
            </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>