<img src="./images/imgOneNew-nwq-two.png" class="img img-fluid m-2" style="width: 10%" alt="Minister Sir">
<div class="display-4 float-right font-weight-bold m-4">
साइट नेविगेशन
</div>

<?php include './includes/header.inc.php' ?>


<div class="m-4">
    <?php
        include '../src/dbh.php';
        $sql = "SELECT * FROM site_navigation ORDER BY id DESC;";
        $result = mysqli_query($conn, $sql);
        echo '
        <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Link For</th>
            <th scope="col">Title</th>
            <th scope="col">Link</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        ';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <tr>
                <th scope="row">'.$row['id'].'</th>
                <td>'.$row['for_link'].'</td>
                <td>'.$row['title'].'</td>
                <td>'.$row['link'].'</td>
                <td>
                    <a href="viewsitenavigation.php?del=true&id='.$row['id'].'" class="btn btn-sm btn-outline-danger">
                        Delete
                    </a>
                </td>
            </tr>
            ';
        }
        echo '
        </tbody>
        </table>
        ';
    
    ?>

    <?php
        if (isset($_GET['del'])) {
            $id = $_GET['id'];
            $sql = "DELETE FROM site_navigation WHERE id = '$id';";
            mysqli_query($conn, $sql);
            echo '<script>window.location="./site_navigation.php?delete=success"</script>';
        }
    ?>

    

</div>

