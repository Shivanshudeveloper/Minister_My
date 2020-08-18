<?php
include '../src/dbh.php';
if (isset($_POST['submit_poem'])) {
$title = mysqli_real_escape_string($conn, $_POST['title']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$poem_for = mysqli_real_escape_string($conn, $_POST['poem_for']);
$poem = mysqli_real_escape_string($conn, $_POST['poem']);

$home = mysqli_real_escape_string($conn, $_POST['home']);
// echo $home;
$sql = "INSERT INTO `poem`(`title`, `date`, `photo`, `poem_for`, `poem`, `home`) VALUES ('$title', '$date', 'NIL', '$poem_for', '$poem', '$home');";
mysqli_query($conn, $sql);
header("Location: ../admin/index.php?poem=success");
}

if (isset($_POST['newsSubmitBtn'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $youtube = mysqli_real_escape_string($conn, $_POST['youtube']);
    $tags = mysqli_real_escape_string($conn, $_POST['tags']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    move_uploaded_file($file_tmp,"news/".time().$file_name);
    $path = "news/".time().$file_name;
    
    $home = mysqli_real_escape_string($conn, $_POST['home']);
    // echo $home;
    $sql = "INSERT INTO `news`(`title`, `date`, `youtube`, `tags`, `image`, `description`, `home`) VALUES ('$title','$date','$youtube','$tags', '$path','$description', '$home')";    
    mysqli_query($conn, $sql);
    header("Location: ../admin/news.php?news=success");
}

if (isset($_POST['speechSubmitBtn'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $youtube = mysqli_real_escape_string($conn, $_POST['youtube']);
    $tags = mysqli_real_escape_string($conn, $_POST['tags']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    move_uploaded_file($file_tmp,"speeches/".time().$file_name);

    $path = "speeches/".time().$file_name;

    $home = mysqli_real_escape_string($conn, $_POST['home']);
    // echo $home;
    
    $sql = "INSERT INTO `speech`(`title`, `date`, `youtube`, `tags`, `image`, `description`, `home`) VALUES ('$title','$date','$youtube','$tags', '$path','$description', '$home')";    
    mysqli_query($conn, $sql);
    header("Location: ../admin/speech.php?speech=success");
}

if (isset($_POST['interviewSubmitBtn'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $youtube = mysqli_real_escape_string($conn, $_POST['youtube']);
    $tags = mysqli_real_escape_string($conn, $_POST['tags']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    move_uploaded_file($file_tmp,"interviews/".time().$file_name);

    $path = "interviews/".time().$file_name;
    
    $home = mysqli_real_escape_string($conn, $_POST['home']);
    // echo $home;
    
    $sql = "INSERT INTO `interview`(`title`, `date`, `youtube`, `tags`, `image`, `description`, `home`) VALUES ('$title','$date','$youtube','$tags', '$path','$description', '$home')";    
    mysqli_query($conn, $sql);
    header("Location: ../admin/interview.php?interview=success");
}

if (isset($_POST['btnaboutSubmit'])) {
    $as_a = mysqli_real_escape_string($conn, $_POST['as_a']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    
    
    $sql = "INSERT INTO `about`(`as_a`, `description`) VALUES ('$as_a', '$description')";    
    
    mysqli_query($conn, $sql);
    header("Location: ../admin/minister.php?about=success");
}

if (isset($_POST['submitBioBtn'])) {
    $description = mysqli_real_escape_string($conn, $_POST['bio']);
    
    $sql = "INSERT INTO `bio`(`description`) VALUES ('$description')";    
    
    mysqli_query($conn, $sql);
    header("Location: ../admin/biography.php?bio=success");
}

if (isset($_POST['literarySubmitBtn'])) {
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $sql = "INSERT INTO `literary`(`description`) VALUES ('$description')";    
    
    mysqli_query($conn, $sql);
    header("Location: ../admin/literary_journey.php?literary=success");
}

if (isset($_POST['siteNavSubmitBtn'])) {
    $for_link = mysqli_real_escape_string($conn, $_POST['for_link']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $link = mysqli_real_escape_string($conn, $_POST['link']);
    
    
    
    $sql = "INSERT INTO `site_navigation`(`for_link`, `title`, `link`) VALUES ('$for_link', '$title', '$link')";    
    
    mysqli_query($conn, $sql);
    header("Location: ../admin/site_navigation.php?site_navigation=success");
}

if (isset($_POST['bookSubmitBtn'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $link = mysqli_real_escape_string($conn, $_POST['link']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    move_uploaded_file($file_tmp,"uploads/".time().$file_name);

    $path = "uploads/".time().$file_name;
    
    $sql = "INSERT INTO `books`(`title`, `date`, `link`, `file`, `description`) VALUES ('$title','$date','$link','$path', '$description');";    
    mysqli_query($conn, $sql);
    header("Location: ../admin/books.php?books=success");
}

if (isset($_POST['awardSubmitBtn'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $link = mysqli_real_escape_string($conn, $_POST['link']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    move_uploaded_file($file_tmp,"awards/".time().$file_name);

    $path = "awards/".time().$file_name;

    $home = mysqli_real_escape_string($conn, $_POST['home']);
    // echo $home;
    
    $sql = "INSERT INTO `awards`(`title`, `date`, `picture`, `link`, `description`, `home`) VALUES ('$title','$date','$path','$link', '$description', '$home');";    
    mysqli_query($conn, $sql);
    header("Location: ../admin/awards.php?awards=success");
}

if (isset($_POST['tuneSubmitBtn'])) {


    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $link = mysqli_real_escape_string($conn, $_POST['link']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    
    $home = mysqli_real_escape_string($conn, $_POST['home']);
    // echo $home;

    $sql = "INSERT INTO `tunein`(`title`, `date`, `link`, `description`, `home`) VALUES ('$title','$date','$link', '$description', '$home');";    

    mysqli_query($conn, $sql);
    header("Location: ../admin/tunein.php?tunein=success");
}


if (isset($_POST['photogallaryBtn'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    move_uploaded_file($file_tmp,"photos/".time().$file_name);

    $path = "photos/".time().$file_name;
    
    $sql = "INSERT INTO `photos`(`title`, `date`, `photo`) VALUES ('$title','$date','$path');";    
    mysqli_query($conn, $sql);
    header("Location: ../admin/photograllary.php?photos=success");
}


if (isset($_POST['videoGallaryBtn'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $link = mysqli_real_escape_string($conn, $_POST['link']);
    $setOn = mysqli_real_escape_string($conn, $_POST['setOn']);
    
    // $file_name = $_FILES['image']['name'];
    // $file_size =$_FILES['image']['size'];
    // $file_tmp =$_FILES['image']['tmp_name'];
    // $file_type=$_FILES['image']['type'];
    // $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    // move_uploaded_file($file_tmp,"videos/".time().$file_name);

    // $path = "videos/".time().$file_name;
    
    $sql = "INSERT INTO `videos`(`title`, `date`, `video`, `seton`, `link`) VALUES ('$title','$date','NIL', '$setOn', '$link');";    
    mysqli_query($conn, $sql);
    header("Location: ../admin/videogallary.php?videos=success");
}


if (isset($_POST['loginBtn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    
    $sql = "SELECT * FROM users WHERE email = '$email' AND pwd = '$pwd';";
    $result = mysqli_query($conn, $sql);
    $resultChk = mysqli_num_rows($result);
    session_start();
    if ($resultChk < 1) {
        header("Location: ../admin/login.php?auth=no");
    } else {
        $_SESSION['login'] = 1;
        $_SESSION['email'] = $email;
        header("Location: ../admin/index.php");
    }
}

if (isset($_POST['profileUpdateBtn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    
    $sql = "UPDATE users SET email = '$email', pwd = '$pwd' WHERE email = '$email';";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ../admin/profile.php?updateprofile=success");
    }
    
}

if (isset($_POST['netSubmitBtn'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    // $link = mysqli_real_escape_string($conn, $_POST['link']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    move_uploaded_file($file_tmp,"net/".time().$file_name);

    $path = "net/".time().$file_name;

    
    $sql = "INSERT INTO `net`(`title`, `date`, `photo`, `description`) VALUES ('$title','$date','$path', '$description');";    
    echo $sql;
    mysqli_query($conn, $sql);
    header("Location: ../admin/net.php?net=success");
}