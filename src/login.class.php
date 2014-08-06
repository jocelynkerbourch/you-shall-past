<?
class login{

	private $token;
	private $cookie;
	private $pass;

	public function __construct($token,$cookie,$pass){
		$this->token = $token;
		$this->cookie = $cookie;
		$this->pass = $pass;	
	}

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