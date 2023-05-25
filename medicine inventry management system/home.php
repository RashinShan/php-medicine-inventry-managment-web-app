<?php include("./nav.php");?>
<a  class='btn btn-primary' href='./add.php'>Add Medicines</a>
<table class ="table table-center m-4"> 
<tr>
<th>ID</th>
<th>MEDICINE NAME</th>
<th>QUANTITY</th>
<th>ACTION</th>

</tr>

<?php 
$sql="select * from medicines";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
        $id=$row['id'];
        echo "<tr>";
        echo "<td>".$row['id']. "</td>";
        echo "<td>".$row['name']. "</td>";
        echo "<td>".$row['quantity']. "</td>";
      
        echo "<td>";
        echo "<a class='btn btn-primary' href='./delete.php?id=$id'>Delete</a>";
       
        echo "</td>";
        echo "<td>";
        echo "<a  class='btn btn-danger' href='./update.php?id=$id'>Update</a>";
        echo "</td>";
        echo "</tr>";
    }
}

?>



</tr>

</table>
<?php  include("./footer.php");?>
