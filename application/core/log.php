<?php
class Log{

  private $path = null;
  private $file = null;
  public $date = array('day'=>00, 'month'=>00, 'year'=>0000, 'time'=>'00:00:00');
  
  public function __construct() {
    
  }
  
  public function setDate($day, $month, $year) {
  	if(!isset($day) && !isset($month) && !isset($year)) {

  	}
    if(!isset($day)) {
      $day =     }

    $today_date = date('d.m.Y.h:i:s');
    $date = explode(".", $today_date);

    $this->date['day'] = $date[0];
    $this->date['month'] = $date[1];
    $this->date['year'] = $date[2];
    $this->date['time'] = $date[3];
  }

  public function openFile() {

  }

  public function write($text) {
    
  }

  public function get() {

  }

}
?>