
<img src="./images/imgOneNew-nwq-two.png" class="img img-fluid m-2" style="width: 10%" alt="Minister Sir">
<div class="display-4 float-right font-weight-bold m-4">
साइट नेविगेशन
</div>

<?php include './includes/header.inc.php' ?>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>



<div class="m-4">
    <?php include './includes/messages.php' ?>
    <div class="row">
        <div class="col-md-6">

            <select onchange="myFunction()" name="language" id="language" class="form-control mb-4 mt-4">
                <option selected disabled>-- Choose Language --</option>
                <option value="Hindi">Hindi</option>
                <option value="English">English</option>
            </select>

            <script>
                function myFunction() {
                    var x = document.getElementById("language").value;
                    if (x === 'English') {
                        window.location.href = "esite_navigation.php";
                    } else if (x === 'Hindi') {
                        window.location.href = "site_navigation.php";
                    }
                }
            </script>
            
            <form action="../src/main.php" method="POST">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">For</label>
                    <select class="form-control" name="for_link" id="exampleFormControlSelect1">
                        <option value="About">About</option>
                        <option value="Tune In">Tune In</option>
                        <option value="Blog">Blog</option>
                        <option value="Library">Library</option>
                    </select>
                </div>
           
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">शीर्षक</label>
                            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">संपर्क (Link)</label>
                            <input type="text" class="form-control" id="link" name="link" aria-describedby="emailHelp">
                        </div>
                    </div>
                </div>

                <button type="submit" name="siteNavSubmitBtn" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col">
            <a href="./viewsitenavigation.php" class="btn btn-outline-info btn-lg">
                View All Site Navigation
            </a>
        </div>
        
    </div>
</div>
<script>
	CKEDITOR.replace('description', {
        language: 'hi'
    });
</script>
<?php include './includes/footer.inc.php' ?>