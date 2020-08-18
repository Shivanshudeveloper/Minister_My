<img src="./images/imgOneNew-nwq-two.png" class="img img-fluid m-2" style="width: 10%" alt="Minister Sir">
<div class="display-4 float-right font-weight-bold m-4">
  Poem
</div>

<?php include './includes/headeren.inc.php' ?>



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
                        window.location.href = "eindex.php";
                    } else if (x === 'Hindi') {
                        window.location.href = "index.php";
                    }
                }
            </script>
            
            <form action="../src/main.php" method="POST">
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
                    <label for="exampleInputPassword1">Upload</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Display For</label>
                    <select class="form-control" name="poem_for" id="exampleFormControlSelect1">
                        <option selected value="Header">Header</option>
                        <option value="Footer">Footer</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Set On Home Page</label>
                    <select class="form-control" name="home" id="home">
                        <option selected value="YES">YES</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                
               


                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea class="form-control" id="poem" name="poem" rows="3"></textarea>
                </div>
                <button type="submit" name="submit_poem" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col">
            <a href="./viewpoems.php" class="btn btn-outline-info btn-lg">
                View All Poems
            </a>
        </div>
        
    </div>
</div>

<script>
	CKEDITOR.replace('poem');

    
</script>
<?php include './includes/footer.inc.php' ?>