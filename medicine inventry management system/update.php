<?php
include("./nav.php");
$id=$_GET['id'];
$sql="select * from medicines";

$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res)>0){
$row=mysqli_fetch_assoc($res);
}

?>
<form action="./script.php" method="post" class="m-5">
        <h1 class=" fw-bold">Update  medicines</h1>
<div class="form-group">
                        <label class="form-label fw-bold">Id</label>
                        <input type="text" name="id"  required class="form-control" readonly value="<?php echo $row['id']; ?>">
                    </div>

                    <div class="form-group">
                        <label class="form-label fw-bold">Name</label>
                        <input type="text" name="name"  required class="form-control" value="<?php echo $row['name']; ?>">
                    </div>

                    <div class="form-group">
                        <label class="form-label fw-bold">Reg. Number</label>
                        <input type="text" name="qtt"  required class="form-control" value="<?php echo $row['quantity']; ?>">
                    </div>

                    

                    <input type="submit" name="update"class="btn btn-success m-2" value="Update">
                    <a class="btn btn-secondary m-2"  href="./home.php">Go Back</a>
</form>

<?php
include("./footer.php");

?>

