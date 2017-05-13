<?php
class Log{

  private $path = null;
  private $time = null;

  public function __construct() {
    $date = date('d.m.Y.H:i:s');
    list($day, $month, $year, $time) = explode('.', $date);

    $this->time = $time;
    $date_opened = $day.'.'.$month.'.'.$year;

    $this->path = SITE_ROOT.'application/logs/'.$date_opened.'.txt';
  }
  
  
  /**
   * Открытие Лог-файла
   * @return <Resource> Открытый файл
   * @date 13.05.2017
   */
  private function openLogFile() {
    $file = fopen($this->path, 'a+');
    flock($file, LOCK_EX);
    return $file;
  }

  /**
   * Запись в Лог-файл
   * @param <String> text - Текст для записи в Лог-файл
   * @date 13.05.2017
   */
  public function write($text) {
    if(!isset($text)) return false;

    $file = self::openLogFile();

    $ip = User::getIP();
    $uid = (isset($_SESSION['uid'])) ? $_SESSION['uid'] : -1;

    $text_write = "\n[".$this->time.']'.'['.$ip.']'.'['.$uid.']'.$text;//[09.05.2017][127.0.0.1][1] Test
    fwrite($file, $text_write);
    flock($file, LOCK_UN);
    fclose($file);
  }

}
?>