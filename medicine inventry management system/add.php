<?php
include("./nav.php");
?>
<form action="./script.php" method="post" class="m-5">
        <h1 class=" fw-bold">Add  medicines</h1>


                    <div class="form-group">
                        <label class="form-label fw-bold">Medicine name</label>
                        <input type="text" name="name"  required class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label fw-bold">Quantity</label>
                        <input type="text" name="qtt"  required class="form-control" >
                    </div>

                    

                    <input type="submit" name="add"class="btn btn-success m-2" value="Add">
                    <a class="btn btn-secondary m-2"  href="./home.php">Go Back</a>


</form>






<?php
include("./footer.php");

?>

