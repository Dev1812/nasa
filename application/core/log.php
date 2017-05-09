<?php
class Log{

  public $date = array('day'=>00, 'month'=>00, 'year'=>0000, 'time'=>'00:00:00');
  
  public function __construct() {}
  
  /**
   * Установка даты для открываемого файла
   * Если день/месяц/год не переданы, то будут подставлены текущие
   * @param <Int> day - день из названия файла
   * @param <Int> month - месяц из названия файла
   * @param <Int> year - год из названия файла
   *
   */
  public function setDate($day, $month, $year) {
    $today_date = date('d.m.Y');
    $date = explode(".", $today_date);

    $this->date['day'] = (isset($day)) ? intval($day) : $date[0];
    $this->date['month'] = (isset($month)) ? intval($month) : $date[1];
    $this->date['year'] = (isset($year)) ? intval($year) : $date[2];
    $this->date['time'] = $date[3];
  }

  /**
   * Открытие файла для записи
   * @return <resource> Файл для записи
   * 
   */
  public function openFile() {
  	$d = $this->date;
  	$date_opened = $d['day'].'.'. $d['month'].'.'. $d['year'];
    $path = SITE_ROOT.'application/logs/'.$date_opened.'.txt';

    $file = fopen($path, 'a+');
    flock($file, LOCK_EX);
    return $file;
  }


  /**
   * Запись в файл
   * @param <String> text Строка для записи
   * 
   */
  public function write($text) {
  	if(!isset($text)) {
  	  return false;
  	}
  	$file = $this->openFile();
    fwrite($file, $text);
    flock($file, LOCK_UN);
    fclose($file);
  }

  /**
   * Получение записей из лог-файла
   * Если день/месяц/год не переданы, то будут подставлены текущие
   * @param <Int> day - день из названия файла
   * @param <Int> month - месяц из названия файла
   * @param <Int> year - год из названия файла
   *
   */
  public function get($day, $month, $year) {
  	$file = $this->openFile($day, $month, $year);
    var_dump($file);
    fclose($file);
  }

}
?>