<main>
	<?php
		$str = file_get_contents('list.json');
		$json = json_decode($str, true);
	
		echo '';
		foreach ($json['product'] as $x) {
			echo '<section>';
			echo '<div class="img_wrap">';
			echo '<img src=' . $x['img'] . '>';
			echo '</div>';
			echo '<p class="name">' . $x['name'] . '</p>';
			echo '<p class="price">' . $x['price'] . ' ₽</p>';
			echo '<span class="buy" id='. $x['id'] .'>'.'Купить'.'</span>';
			echo '</section>';
		}
	?>
</main>


