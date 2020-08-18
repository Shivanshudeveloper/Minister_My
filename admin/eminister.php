
<img src="./images/imgOneNew-nwq-two.png" class="img img-fluid m-2" style="width: 10%" alt="Minister Sir">
<div class="display-4 float-right font-weight-bold m-4">
About Minister Sir
</div>

<?php include './includes/headeren.inc.php' ?>

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
                        window.location.href = "eminister.php";
                    } else if (x === 'Hindi') {
                        window.location.href = "minister.php";
                    }
                }
            </script>

            <form action="../src/main.php" method="POST">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">As a</label>
                    <select class="form-control" name="as_a" id="exampleFormControlSelect1">
                        <option value="HRD Minister">HRD Minister</option>
                        <option value="Member of Parliament">Member of Parliament</option>
                        <option value="Chief Minister">Chief Minister</option>
                        <option value="Minister">Minister</option>
                    </select>
                </div>
           
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <button type="submit" name="btnaboutSubmit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col">
            <a href="./viewminister.php" class="btn btn-outline-info btn-lg">
                View All Minister Details
            </a>
        </div>
        
    </div>
</div>
<script>
	CKEDITOR.replace('description');
</script>
<?php include './includes/footer.inc.php' ?>