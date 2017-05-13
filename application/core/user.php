<?php
class User{
	
  public static function isAuth() {
    return isset($_SESSION['uid']) ? $_SESSION['uid'] : 0;
  }
  
  public static function getLang() {
	if(isset($_SESSION['user_lang']) && mb_strlen($_SESSION['user_lang'] < 3)) {
      return $_SESSION['user_lang'];
	}
	
	return strip_tags(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
  }
  
  /**
   * Получение IP пользователя
   * @return <String> IP
   */
  public static function getIP() {
    $ip = '000.0.0.0';
    
    if(isset($_SERVER['REMOTE_ADDR'])) {
      $ip = $_SERVER['REMOTE_ADDR'];
    } else if(isset($_SERVER['HTTP_CLIENT_IP'])) {
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }

    return strip_tags($ip);
  }
  
  
}
?>