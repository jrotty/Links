<?php /* 邮箱头像解API接口 */ $type = (isset($_GET['type'])) ?$_GET['type']:$_POST['type']; $email = (isset($_GET['email'])) ?$_GET['email']:$_POST['email']; $a = file_get_contents("https://api.2dph.com/email/logo?type=$type&email=$email"); echo $a; ?>