<?php
	$this->load->helper('directory');
	$map = directory_map('./assets/uploads/');
?>
<ul class="list-group directory-contents">	
	<?php foreach ($map as $r) : ?>
	<li class="list-group-item">
		<img src="./assets/uploads/<?= $r ?>" class="img-thumbnail">
	</li>
	<?php endforeach; ?>
</ul>