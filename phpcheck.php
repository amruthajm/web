 <?php
$conn = mysqli_connect("localhost","root","@mmu2001","DATA");
$username = $_POST['name'];
$password = $_POST['Password'];
$email=$_POST['email'];


if ($conn==false) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql =" INSERT INTO LOGININFO(EMAIL,USERNAME,PASSWORD) VALUES('$email','$username','$password')";
if(mysqli_query($conn,$sql))
{
echo "successfull"
}

else
{
	echo ("error: could not execute ". mysqli_error($conn);
};

 
?>

