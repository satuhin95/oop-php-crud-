<?php 

class Database{
	public $link;
	public function __construct(){
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db_name = "crudphp";

		$this->link = mysqli_connect($host,$user,$pass,$db_name);

	}

	public function Insert($data){
		$name = $data['name'];
		$email = $data['email'];
		$contact = $data['contact'];

		$sql = "insert into users(name,email,contact) values('$name','$email','$contact')";
		$result = mysqli_query($this->link,$sql);
		if ($result) {
			echo 'Data Insert Successfully';
			
		}
		else{
			echo 'Insert Error';
		}
	}
	public function view(){
		$sql = "select * from users";
		return mysqli_query($this->link,$sql);
	}

	public function delete($id){
		$sql = "delete from users where id='$id' ";

	$result =	mysqli_query($this->link,$sql);
	if ($result) {

		header("location: index.php");
		
	}


	}
	public function edit($id){
		$sql ="select * from users where id='$id' ";

		return mysqli_query($this->link,$sql);
	}

	public function update($data){


		$id = $data['id'];
		$name = $data['name'];
		$email = $data['email'];
		$contact = $data['contact'];



		// $sql = "update users set name='$name',email='$email,contact='$contact' where id='$id' ";
		$sql = "UPDATE `users` SET `name`='$name',`email`='$email',`contact`='$contact' WHERE id='$id'";

		$result = mysqli_query($this->link,$sql);

		header("location: index.php");
		
	

	}

}