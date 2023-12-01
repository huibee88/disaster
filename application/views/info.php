

<section class="info-section">
		<h3 class="info-title">Disaster Information</h3>
			<?php foreach($info as $row):?>
			<div class="inforow row">
				<div class="col-lg-6 info-row">
					<div class="info-image">
						<?php echo '<img src=" data:image;base64,' .base64_encode($row['infoPic']). '" alt="pics">'?>
					</div>
				</div>				
				<div class="col-lg-6 info-row">
					<div class="info-container">						
						<h3><?php echo $row['infoName']?></h3>
						<p><?php echo $row['infoDesc']?></p>
					</div>
				</div>
			</div>
			<?php endforeach;?>
	</section>