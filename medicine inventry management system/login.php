<?php include"./nav.php"

?>
<form  class="m-3 p-2" method="post" action="script.php">
<lable class="form-lable fw-bold">user name</lable>
<input class="form-control" type="text" name="username" placeholder="Enter user name">
<lable class="form-lable fw-bold">Password</lable>
<input class="form-control" type="text" name="password" placeholder="Enter password">
<input class="btn btn-danger mt-3" type="submit" value="Login"  name="login">
</form >
<?php include"./footer.php"?>