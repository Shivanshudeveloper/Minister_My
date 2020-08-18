<img src="./images/imgOneNew-nwq-two.png" class="img img-fluid m-2" style="width: 10%" alt="Minister Sir">
<div class="display-4 float-right font-weight-bold m-4">
मंत्री के बारे में
</div>

<?php include './includes/header.inc.php' ?>


<div class="m-4">
    <?php
        include '../src/dbh.php';
        $sql = "SELECT * FROM about;";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="card-title">As a '.$row['as_a'].'</h5>
                    <p class="card-text">
                        '.$row['description'].'
                    </p>
                    <form method="POST">
                        <input type="hidden" name="id" value="'.$row['id'].'" />
                        <button type="submit" name="delBtn" class="btn btn-outline-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>        
            
            ';
        }

        if (isset($_POST['delBtn'])) {
            $id = mysqli_real_escape_string($conn, $_POST['id']);
            $sql = "DELETE FROM about WHERE id = '$id';";
            mysqli_query($conn, $sql);
            echo '<script>window.location="./minister.php?delete=success"</script>';
        }
    
    ?>

    

</div>

