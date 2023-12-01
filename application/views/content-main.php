

<!-- Warning Section -->
<?php if($latestInfo!=false){?>
<section class="warning-section" >
    <div class="container">

        <div class="filterbyLocation">
            <label for="location">Filter by location: </label>
            <select name="plocation" id="filterOption">
                <option value="All">All</option>
                <option value="KotaKinabalu">Kota Kinabalu</option>
                <option value="Putatan">Putatan</option>
                <option value="Tuaran">Tuaran</option>
                <option value="Papar">Papar</option>
                <option value="Tamparuli">Tamparuli</option>
                <option value="Ranau">Ranau</option>
            </select>

            <div style="margin-top: 30px; float: right; padding-right: 30px;">
            <script>document.write(new Date());
            </script>
        </div>
        </div>

        

        <div class= "row" style="margin-top: 50px;">
        <?php foreach($latestInfo as $row){?>        
        
            <div>
                    <div class="latestInfo
                    <?php if($row['affectedArea']=='Kota Kinabalu')  echo 'KotaKinabalu';
                    else { echo $row['affectedArea'];

                    }?>" style="display: inline-block;">
                        <ul class="card" style="min-width: 21rem;">
                            <li class="red"><h4> <?php echo $row['warningType']?> Warning</h4></li>
                            <li><?php echo $row['date'] ?> </li>
                            <li><?php echo $row['affectedArea']?> </li>
                            <li><?php echo $row['messageRespond']?></li>
                            <?php
                                switch($row['affectedArea']){
                                    case 'Kota Kinabalu':
                                        foreach($countKKF as $countvalue);
                                    break;
                                    case 'Putatan':
                                        foreach($countPTT as $countvalue);
                                    break;
                                    case 'Tuaran':  
                                        foreach($countTR as $countvalue);
                                    break;
                                    case 'Papar':
                                        foreach($countPP as $countvalue);
                                    break;
                                    case 'Tamparuli':
                                        foreach($countTPR as $countvalue);
                                    break;
                                    case 'Ranau':
                                        foreach($countRN as $countvalue);
                                    break;
                                }
                           {?>
                            <li>Reports Received:
                                 <?php
                                 switch($row['warningType']){
                                    case 'Floods':
                                        echo '20';
                                        break;
                                    case 'Earthquakes':
                                        echo '12';
                                        break;
                                    case 'Landslides':
                                        echo '25';
                                        break;
                                    case 'Typhoon':
                                        echo '16';
                                        break;

                                 }
                                  ?>
                            </li>
                        <?php }?>
                            
                        </ul>
                    </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>
<?php } ?>
<!-- Search section -->
<section class="search-section">
	<div class="container">
		<form>
			<div class="search-bar">
				<input type="text" placeholder="Enter your location" name="search">
				<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
			</div>
		</form>
	</div>
</section>

<!-- Map section --->

<section class="map-section">
	<div class="container">
		<div class="mapouter">
            <div class="gmap_canvas">
                <iframe src="https://www.google.com/maps/d/embed?mid=1i0TwqoVB3S2rjKjAYSaHPsPpwp7xnRc&ehbc=2E312F" width="100%" height="480" 
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>

        <div style="float: right;">
            <script>document.write(new Date());
            </script>
        </div>

	</div>
</section>


<script src="<?=base_url()?>public/js/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(function(){

        $('#filterOption').change(function(){
            var filterOption=$(this).find("option:selected").text();
            var filterValue=$(this).val();
            $('.latestInfo').show(300);
            if(filterValue!='All')$ ('.latestInfo').not('.'+filterValue).hide(300);

        });
    });
</script>
