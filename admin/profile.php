<img src="./images/imgOneNew-nwq-two.png" class="img img-fluid m-2" style="width: 10%" alt="Minister Sir">
<div class="display-4 float-right font-weight-bold m-4">
Profile
</div>

<?php include './includes/header.inc.php' ?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>



<div class="m-4">
    <?php include './includes/messages.php' ?>
    <div class="row">
        <div class="col-md-6">

            <?php
                include '../src/dbh.php';
                session_start();
                $email = $_SESSION['email'];
                $sql = "SELECT * FROM users WHERE email = '$email';";
                $result = mysqli_query($conn, $sql);
                if ($row = mysqli_fetch_assoc($result)) {
                    echo '  
                    <form action="../src/main.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input value="'.$row['email'].'" type="text" disabled class="form-control" id="email1" name="email1" aria-describedby="emailHelp">
                            <input value="'.$row['email'].'" type="hidden" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>
        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input value="'.$row['pwd'].'" type="password" class="form-control" id="pwd" name="pwd" aria-describedby="emailHelp">
                        </div>
                        <button type="submit" name="profileUpdateBtn" class="btn btn-primary">Update</button>
                    </form>
                    ';
                }

            ?>

            
        </div>
        
    </div>
</div>

<?php include './includes/footer.inc.php' ?>