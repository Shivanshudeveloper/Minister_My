<img src="./images/imgOneNew-nwq-two.png" class="img img-fluid m-2" style="width: 10%" alt="Minister Sir">
Tune In
</div>

<?php include './includes/header.inc.php' ?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>



<div class="m-4">
    <?php include './includes/messages.php' ?>
    <div class="row">
        <div class="col-md-6">

            <!-- <select onchange="myFunction()" name="language" id="language" class="form-control mb-4 mt-4">
                <option selected disabled>-- Choose Language --</option>
                <option value="Hindi">Hindi</option>
                <option value="English">English</option>
            </select>

            <script>
                function myFunction() {
                    var x = document.getElementById("language").value;
                    if (x === 'English') {
                        window.location.href = "eawards.php";
                    } else if (x === 'Hindi') {
                        window.location.href = "awards.php";
                    }
                }
            </script> -->


            <form action="../src/main.php" method="post">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date</label>
                            <input type="date" class="form-control" id="date" name="date" aria-describedby="emailHelp">
                        </div>
                    </div>
                </div>
                
                

                <div class="form-group">
                    <label for="exampleInputEmail1">You Tube Link</label>
                    <input type="text" class="form-control" id="link" name="link" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
             
                <button type="submit" name="tuneSubmitBtn" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col">
            <a href="./viewtunein.php" class="btn btn-outline-info btn-lg">
                View All Tune In
            </a>
        </div>
        
    </div>
</div>


<!-- <script type="text/javascript">
    let transliterationInput = document.getElementById("title");
    enableTransliteration(transliterationInput, "hi");
</script> -->
<?php include './includes/footer.inc.php' ?>