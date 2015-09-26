<html>
<body>
<div>
	<h1>My Test Blog</h1>
	<?php
		if(!isset($posts)){
	?>
		<p>There are currently no blog posts.</p>
	<?php
		} else {
			foreach ($posts as $row) {
				# code...
				?>
				<h3><a href="<?=base_url()?>posts/post/<?=$row['postID']?>"><?=$row['title']?></a></h3>
				<p><?=substr(strip_tags($row['post']),0,200).".."?></p>
				<p><a href="<?=base_url()?>posts/post/<?=$row['postID']?>">Read More</a></p>
		<?php	}
		}
	?>
</div>
</body>

</html>