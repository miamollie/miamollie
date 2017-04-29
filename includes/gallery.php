	<!-- Gallery -->

	<?php
		// copy file content into a string var
		$json_file = file_get_contents('images.json');
		// convert the string to a json object
		$jfo = json_decode($json_file);

		function renderImages($images)
			{
				foreach ($images as $image) {
					$img = $image->img;
					$title = $image->title;
					echo "<li><a title=" . $title . " href=" .  $img  ."></a></li>";
				}
		}
	?>
	<div id="gallery" class="container-fullscreen content flexCenter flex fRow-lg fColumn-sm center">
		<div class="full-lg full-sm flex fRow-lg fColumn-sm dark-lg dark-sm">
			<div class="half-lg full-sm flex fColumn-lg fColumn-sm">
				<div class="gallery-item" id="solo">
					<h3>Solo Work</h3>
					<ul>
						<?php
							$images = $jfo->solo;
							renderImages($images)
						?>
					</ul>
				</div>
				<div class="gallery-item" id="shoot">
					<h3>Photoshoots</h3>
					<ul>
						<?php
							$images = $jfo->shoot;
							renderImages($images)
						?>
				</div>
			</div>
			<div class="half-lg full-sm flex fColumn-lg fColumn-sm ">
				<div class="gallery-item" id="reel">
					<h3>Show Reel</h3>
					<ul>
						<li><a class="video" title="Showreel" href="https://vimeo.com/215285721"><i class="fa fa-play-circle-o"></i></a></li>
					</ul>
				</div>
				<div class="gallery-item" id="double">
				<h3>Duo</h3>
				<ul>
					<?php
						$images = $jfo->double;
						renderImages($images)
					?>
				</ul>
			</div>
			</div>
		</div>
	</div>
