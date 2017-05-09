<?php
class View{

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
      
      return false;
    }
  }

}
?>