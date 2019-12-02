<?php
include_once("lib/dkp/dkpUtil.php");
include_once("lib/dkp/dkpUserPermissions.php");
/*=================================================
The news page displays news to the user.
=================================================*/
class pageSupportWebdkp extends page {

	var $layout = "Columns1";
	var $pagetitle = "Support WebDKP";
	/*=================================================
	Shows a list of posts to the user. The user has
	links to skip to any page of the posts
	=================================================*/
	function area2()
	{
		global $siteUser;
		global $loginResult;
		$this->title = "Help Support WebDKP!";
/*
		if($siteUser->visitor) {
			$this->title = "Su";
			if(isset($loginResult)){
				if($loginResult == user::LOGIN_BADUSER) {
					$loginError = "Incorrect username entered.";
				}
				else if($loginResult == user::LOGIN_BADPASSWORD) {
					$loginError = "Incorrect password entered";
				}
				$this->set("loginResult",$loginResult);
				$this->set("loginError",$loginError);
			}
		}
		else
			$this->title = "Welcome ".$siteUser->username;

			// Log the users login date so we can prune inactive users
			global $sql;
			$sql->Query("UPDATE security_users SET lastlogin = NOW() WHERE username='$siteUser->username'");

*/

		$this->border = 1;
		return $this->fetch("supportwebdkp.tmpl.php");
	}
}
?>