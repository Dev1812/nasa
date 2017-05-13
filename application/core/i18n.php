<?php
class i18n{
  private $lang = 'ru';
  private $path = null;
  private $log = null;
  /**
   * @example array('lang' => array('key' => 'value'))
   */
  private $cache = array();

  public function __construct($lang = '') {
    if(!empty($lang) && mb_strlen($lang) < 3) {
  	  $this->lang = $lang;
  	} else {
  	  $this->lang = User::getLang();
  	}

  	$this->path = SITE_ROOT.'application/i18n/'.$this->lang.'.php';

  	$this->log = new Log;
  } 
  

  /**
   * Открытие языкового файла, также языковой файл помещается в Кеш
   * @return <Array> Содержимое языкового файла
   */
  private function openLogFile() {
    if(isset($this->cache[$this->lang])) {
      return $this->cache[$this->lang];
    } else {
      $file_body = include $this->path;
      $this->cache[$this->lang] = $file_body;
      return $file_body; 
    }

  }

  /**
   * Получение языковых значений
   * @param <(Array || String) = Mixed> keys - Ключи языка для выборки
   * @return <Array> Значения, соответсвующие ключам
   */
  public function get($keys) {
  	if(!isset($keys)) {
  	  $this->log->write(__DIR__.':'.__LINE__.' get(): Not passed $keys. return false');
  	  return false;
  	}

  	$lang_file = self::openLogFile();

  	if(!is_array($keys)) {
      return $lang_file[$keys];
  	} else {
  	  $arr = array();
      foreach($keys as $v) {
        if(!empty($lang_file[$v])) {
          $arr[$v] = $lang_file[$v];
        }
      }
      return $arr;
  	}
  }

}
?>