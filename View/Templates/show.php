<?php ob_start();?>
<h2>Титульный лист</h2>

<ul>
	<h2><?php echo "$posts"; ['title'] ;?></h2>
	<div>Дата:<?php echo "$posts"; ['date'] ;?></div>
	<div>Автор:<?php echo "$posts"; ['autor'] ;?></div>	
	<div>Текст статьи:<?php echo "$posts"; ['content'] ;?></div>	
</ul>

<?php $content=ob_get_clean();?>

<?php include "View/Templates/show.php";
