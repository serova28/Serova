<?php ob_start();?>
<h2>СПИСОК ПОСТОВ</h2>

<ul>
	<?php foreach ($posts as $post): ?>
		<li>
			
			<a href="./index.php?id=<?php echo $posts['id'];?>">
				<?php echo $post['id'].'. '.$post['title']; ?>
			</a>
		</li>
		<?php endforeach; ?>
</ul>

<?php $content=ob_get_clean();?>

<?php include "View/Templates/layout.php";?>