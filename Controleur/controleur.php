
<?php
class Control{
	function showcontrol($ID){
		require 'Vue/vue.php';
		require 'Modele/modele.php';
		$view=new Index();
		$model=new Model();
		$data=$model->getid($ID);
		$view->display($data);
	}
}

?>