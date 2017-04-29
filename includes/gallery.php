	<!-- Gallery -->

	<?php
		// copy file content into a string var
		$json_file = file_get_contents('images.json');
		// convert the string to a json object
		$jfo = json_decode($json_file);

	?>


	<div id="gallery" class="container-fullscreen">
		<h2>Gallery</h2>

		<div class="container">
			<div class="col-sm-6">
				<div class="gallery-item" id="solo">
					<h3>Solo Work</h3>
					<ul>
						<?php
							$solos = $jfo->solo;
							foreach ($solos as $solo) {
								$img = $solo->img;
								$title = $solo->title;
								echo "<li><a title=" . $title . " href=" .  $img  ."></a></li>";
							}
						?>

					</ul>
				</div>
				<div class="gallery-item" id="shoot">
					<h3>Photoshoots</h3>
					<ul>
						<?php
							$shoots = $jfo->shoot;

							foreach ($shoots as $shoot) {
								$img = $shoot->img;
								$title = $shoot->title;
								echo "<li><a title=" . $title . " href=" .  $img  ."></a></li>";
							}

						?>

					</ul>
				</div>

			</div>
			<div class="col-sm-6">
				<div class="gallery-item" id="reel">
					<h3>Show Reel</h3>
					<ul>
						<li><a class="video" title="Showreel" href="https://vimeo.com/215285721"><i class="fa fa-play-circle-o"></i></a></li>
					</ul>


				</div>

				<div class="col-sm-6">
					<div class="gallery-item" id="outdoor">
						<h3>Outdoor</h3>
						<ul>

							<?php
								$outdoors = $jfo->out;

								foreach ($outdoors as $out) {
									$img = $out->img;
									$title = $out->title;
									echo "<li><a title=" . $title . " href=" .  $img  ."></a></li>";
								}

							?>

						</ul>

					</div>
				</div>
				<div class="col-sm-6">
					<div class="gallery-item" id="double">
						<h3>Partner Work</h3>
						<ul>

							<?php
								$doubles = $jfo->double;

								foreach ($doubles as $double) {
									$img = $double->img;
									$title = $double->title;
									echo "<li><a title=" . $title . " href=" .  $img  ."></a></li>";
								}

							?>
						</ul>

					</div>
				</div>
			</div>

		</div>

	</div>
