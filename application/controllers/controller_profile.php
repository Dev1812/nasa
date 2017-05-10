<?php
class Controller_Profile extends Controller{

  private $view = null;

  public function __construct() {
  	$this->view = new View;
  }

  public function action_index() {
  	
  	$this->view->generate('profile_view.php', 'template_view.php', $param, array(), $i18n);
  }
}
?>