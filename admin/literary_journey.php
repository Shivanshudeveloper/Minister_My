
<img src="./images/imgOneNew-nwq-two.png" class="img img-fluid m-2" style="width: 10%" alt="Minister Sir">
<div class="display-4 float-right font-weight-bold m-4">
साहित्य यात्रा (Literary Journey)
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
                        window.location.href = "eliterary_journey.php";
                    } else if (x === 'Hindi') {
                        window.location.href = "literary_journey.php";
                    }
                }
            </script>

            <form action="../src/main.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputPassword1">साहित्य यात्रा का विवरण</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <button type="submit" name="literarySubmitBtn" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col">
            <a href="./viewliterary_journey.php" class="btn btn-outline-info btn-lg">
                View All Literary Journey
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