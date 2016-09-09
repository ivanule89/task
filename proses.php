<?php 
// if(isset($_POST['fnama']))
// {
// $fnama = $_POST['fnama'];
// $lalamat = $_POST['lalamat'];
// echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
// echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat;
// }
// //--------------------------------------------------------------------
$email = $_POST['email'];
$message = $_POST['message'];

echo "Email : ".$email."<br/>Pesan Anda : ".$message;
?>