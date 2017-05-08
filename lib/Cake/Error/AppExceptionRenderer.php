<?php 
	App::uses('ExceptionRenderer', 'Error');

	class AppExceptionRenderer extends ExceptionRenderer {
		die();
	    public function notFound($error) {
	        $this->controller->redirect(array('controller' => 'errors', 'action' => 'error404'));
	    }
	}

 ?>