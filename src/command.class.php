<?
class command{
	
	public function open(){
		shell_exec ('gpio write 0 1');
		sleep('1');
		shell_exec ('gpio write 0 0');
	}
}
