<?php
class Controller_Not_Found extends Controller{

  private $view = null;

  public function __construct() {
  	$this->view = new View;
  }

  public function action_index() {
  	
  	$this->view->generate('not_found_view.php', 'template_view.php', $param, array(), $i18n);
  }
}
?>