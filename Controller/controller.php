<?php
/**
*Контроллер-содержит функции-экшены,
*котррые заставляют модель вывести нужную
*информацию.
*******************************
*/

/**
* массив$posts содержит выборку всех полей из
*таблицы post.
*Погружает файл list.php,содержащий вид вывода.
*информации из$posts в браузере.
*/
function list_action()
{
	echo 'test2';
	$posts =get_all_posts();
	require"View/Templates/list.php";
}
function admin_action()
{

	require "View/Templates/admin.php";
}
function show_action()
{
	$post=get_post();
	require "View/Templates/show.php";
}