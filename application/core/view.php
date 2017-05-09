<?php
class View{
  public $log = null;

  public function __construct() {
  	$this->log = new Log;
  }

  /**
   * @desc 
   * @param <String> content_view - Шаблон для каждой страницы
   * @param <String> template_view - Главный Шаблон
   * @param <Array> param - Настройки для страницы
   * @param <Array> data - Информация
   * @param <Array> i18n - Локализация на сайте
   *
   */
  public function generate($content_view = '', $template_view = '', $param = array(), $data = array(), $i18n = array()) {
    if(!isset($content_view) && !isset($template_view)) {
      $this->log->write(__DIR__.':'.__LINE__.' Not passed to content_view and template_view. return false');
      return false;
    }

    if(isset($template_view)) {
       include 'application/views/'.$template_view;
    } else {
       include 'application/views/'.$content_view;
    }
  }

}
?>