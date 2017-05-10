<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <style type="text/css">
html, body{
  margin: 0;
  padding: 0;
  font-family: Arial, Helvetica, Verdana, sans-serif;
  font-size: 12px;
  line-height: 18px;
  font-family: 'Open Sans', sans-serif;
  -webkit-font-smoothing: antialiased;
}
a{
  color: #0088cc;
  text-decoration: none;
}
.submit{
  border:0;
  background-color:#03A9F4;
  color:#FFF;
  border-radius: 3px;
  padding:6px 12px;
  cursor: pointer;
  font-family: 'Open Sans', sans-serif;
  transition: background 0.077s ease;
}
.submit:hover{
  background-color:#089DE0;
}
.button{
	
}

.float_l{
  float: left;
}
.float_r{
  float: right;
}
.head{
  height: 44px;
  border-bottom: 1px solid #DDD;
  padding:0 11px;
}
.head-link{
  float:left;
  padding:13px 5px;
}
.footer{
  border-top: 1px solid #DDD;
  text-align: center;
  padding-top: 5px;
}
.footer-copy{
  margin-top:4px;
  color:#333;
}
.content{
  margin:17px 0;
}
.content-wrap{
  max-width:540px;
  margin:0 auto;
}
.clear{
  clear:both;
}
  </style>
</head>
<body>
<div id="wrap1">
<div class="head">
  <a href="/" class="head-link">q</a>
  <div class="float_r">
    <a href="/qwerty" class="head-link">qwerty</a>
    <a href="/qwerty" class="head-link">qwerty</a>
    <a href="/qwerty" class="head-link">qwerty</a>
    <a href="/qwerty" class="head-link">qwerty</a>
    <a href="/qwerty" class="head-link">qwerty</a>
  </div>
</div>

<div class="content">
  <div class="content-wrap">
    <?php
      require_once $content_view;
    ?>
  </div>
</div>

<div class="clear"></div>
<div class="footer">
  <a href="/qwerty" class="footer-link">qwerty</a>
  <a href="/qwerty" class="footer-link">qwerty</a>
  <a href="/qwerty" class="footer-link">qwerty</a>
  <a href="/qwerty" class="footer-link">qwerty</a>
  <a href="/qwerty" class="footer-link">qwerty</a>
  <div class="footer-copy">2017 © Sitename</div>
</div>



</div>
</body>
</html>