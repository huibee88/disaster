

<section class="info-section">
		<h3 class="info-title">Disaster Information</h3>
		<p class="edit-info"><a href="InfoManage" >Edit Information</a></p>
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

<style>
	.edit-info a{
		font-size: 20px;
		margin-left: 45%;
	}

	.edit-info a: hover{
		font-size: 20px;
		margin-left: 50%;
		margin-right: 50%;
	}
</style>