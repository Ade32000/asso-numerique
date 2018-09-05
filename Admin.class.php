<?php 

/**
 * 
 */
class Admin
{
	
	public $admin_login;
	public $admin_password;

	function __construct($login, $password)
	{
		$this->admin_login = $login;
		$this->admin_password = $password;
	}
}







 ?>