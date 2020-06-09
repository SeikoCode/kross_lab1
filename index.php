<!DOCTYPE html>
<html>
<head>
	<title>Entry to system</title>
</head>
<body>

	<form method="post">

		<input name='login' type="text"/>
		<br>
		<input name='password' type="password"/>
		<br>
		<input type="submit" value='enter'/>
		<br>
		<hr>
	</form>

	<?php

	class User
	{
		protected $login;
		protected $password;
		protected $name;
		protected $surname;
		protected $role;
		
		public function __construct($login, $password) 
		{
		    $this->login = $login;
		    $this->password = $password;
		}
	
	}

	class Admin extends User
	{
		public function Welcome1()
		{
			echo $this->login.". Вы админ, вы можете делать всё";
		}
	}

	class Manager extends User
	{
		public function Welcome2()
		{
			echo $this->login.". Вы менеджер, вы можете управлять клиентами";
		}
	}

	class Client extends User
	{
		public function Welcome3()
		{
			echo $this->login.". Вы клиент, вы можете просматривать информацию";
		}
	}

		
	$enteredLogin = $_POST["login"];
	$enteredPassword = $_POST["password"];

	if($enteredLogin=='' && $enteredPassword==''){
		echo " ";
	}
	elseif($enteredLogin=='admin' && $enteredPassword=='admin') 
	{
		$user = new Admin($enteredLogin, $enteredPassword);
		echo $user->Welcome1();
	}
	elseif($enteredLogin=='manager' && $enteredPassword=='manager') 
	{
		$user = new Manager($enteredLogin, $enteredPassword);
		echo $user->Welcome2();
	}
	elseif($enteredLogin=='client' && $enteredPassword=='client') 
	{
		$user = new Client($enteredLogin, $enteredPassword);
		echo $user->Welcome3();	
	}
	else
	{
	 	echo "error";
	} 

	?>

	</form>
</body>
</html>