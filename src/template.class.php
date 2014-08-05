<?

class template{
	
	private $page;

	public function setPage($page){
		$this->page = $page;
	}

	public function render(){
		require_once(dirname(__FILE__) . '/../templates/layout.php');
	}

}