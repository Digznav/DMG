<div class="carrousel">
	<ul id="pikame">
		<?php $carrouselItems = '<li><img src="imgs/slide'. $firstCarrItem .'.jpg" alt="slide'. $firstCarrItem .'"></li>';
		for ($i=1; $i <= 9; $i++) {
			if ($i != $firstCarrItem) {
				$carrouselItems .= '<li><img src="imgs/slide'. $i .'.jpg" alt="slide'. $i .'"></li>';
			}
		}
		echo $carrouselItems; ?>
	</ul>
</div>