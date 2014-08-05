<?
class login{

	private $token="ChangeThisToken";
	private $cookie="ChangeThisCookieName";
	private $pass="1234";

	public function login(){
		if (isset($_POST['password'])){
			$password = strip_tags($_POST['password']);
			$passwordEncode = $this->passwordEncode($password);
			setcookie($this->cookie, $passwordEncode);
			return $passwordEncode;
		}
		return null;
	}

	public function isLog(){
		$cookie = null;

		if (isset($_COOKIE[$this->cookie])){
			$cookie = $_COOKIE[$this->cookie];
		}

		$post = $this->login();
		if ($post!==null){
			$cookie = $post;
		}

		return $cookie == $this->passwordEncode($this->pass);
	}

	private function passwordEncode($password){
		return md5($password.$this->token);
	}
}