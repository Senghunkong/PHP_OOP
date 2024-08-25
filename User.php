<?php

class person
{
	public $Message;
	public function showMessage($msg)
	{
	    $this->Message = $msg;
		echo 'Your Message is :'.$this->Message ;
	
		
	}
}


?>