<?php
//harvested crops
foreach ($harvest as $row) {
	echo '<div>';
	echo '<p> Flat Number: ';
	echo $row->flatNumber;
	echo '</p>';
	echo '<p>Seed Name: ';
	echo $row->seedName;
	echo '</p>';
	echo '<p>Seed Used: ';
	echo $row->seedUsed;
	echo '</p>';
	echo '<p>Seed Manufacturer: ';
	echo $row->seedManufacturer;
	echo '</p>';
	echo '<p>Medium Name';
	echo $row->mediumName;
	echo '</p>';
	echo '<p> Medium Used';
	echo $row->mediumUsed;
	echo '</p>';
	echo '<p>Date Planted: ';
	echo $row->dateStart;
	echo '</p>';
	echo '<p>Date Moved Under Light: ';
	echo $row->dateLight;
	echo '<p>Harvest Date: ';
	echo $row->dateEnd;
	echo '</p>';
	echo '<p>Yield Weight';
	echo $row->yieldWeight;
	echo '</p>';
	echo '<p>Testing or Production: ';
	echo $row->testing;
	echo '</p>';
	echo '<p>Crop Rating: ';
	echo $row->cropRating;
	echo '</p>';
	echo '</div>';
}
?>