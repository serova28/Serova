<?php
/**
*	Фронт- контроллер
*	который представляет в себя единую точку, вход в программую 
*	подгружает модель и контроллер.
*/

$uri=$_SERVER['REQUEST_URI'];
$u = explode('?',$uri);
$uri = $u[0];
if('/2KTVRp2015/'==$uri OR '/2KTVRp2015/index.php'==$uri)
{
	list_action();
}
elseif ('/2KTVRp2015/index.php/admin'==$uri)
{
	admin_action();
}
elseif ('/2KTVRp2015/index.php/show'==$uri)
	
{
	show_action($_REQUES ['id']);	
}
