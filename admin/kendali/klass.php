<?php

/**
* 
*/
class Database
{
	
	function __construct(){
		$this->db = new mysqli("localhost", "root", "", "toko_baru");
	}









/////////////////////////////////USER///////////////////////////////////////////////

		public function detail_user($email){
		$array = array();
		$sql = $this->db->query("SELECT * from user where email='$email' ");
		while ($hey= mysqli_fetch_array($sql)) {
			$array[] = $hey;
			# code...
		}
		return $array;
	}

		public function tampil_user(){
		$array = array();
		$sql = $this->db->query("SELECT * from user ");
		while ($hey= mysqli_fetch_array($sql)) {
			$array[] = $hey;
			# code...
		}
		return $array;
	}








//////////////////////authentikasi////////////////////////////////////////////////////////


	public function Register($nama,$foto,$email,$password){
		$query = "INSERT INTO user values ('','$nama','$foto', '$email','$password')";

		$insert = $this->db->query($query);

		if($insert){
			}
			
		
		else{
			echo '<script>alert("Data Gagal Masuk");</script>';
			echo $this->db->error;
		}
	}


	public function login($email, $pass)
	{
		$sql = $this->db->query("SELECT * from user where email='$email' and password='$pass'"); 

	if ($sql->num_rows > 0) {
       $row = $sql->fetch_assoc();

   session_start();
   if( $_SESSION['email'] = $row['email']){
    header("location:../../../admin/index.php");}
}
else{
 echo '<script>alert("Maaf email atau password anda kurang tepat"); window.location="../../pages/auth/sign-in.php"</script>';
}



	}








}
?>