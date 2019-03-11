echo '<div id="plantInventory" class="collapse">';
echo '<h4>Plant Inventory</h4>';
echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th scope="col">Plant Name</th>';
	echo '<th scope="col">Plant Manufacturer</th>';
	echo '<th scope="col">Plant Amount</th>';
	echo '<th scope="col">Plant Used</th>';
	echo '<th scope="col">Plant Remainder</th>';
	echo '<th scope="col">Average Plant Cost</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
//Used plant
foreach ($plantPurchasedInventory as $value) {
		$plantNamePurchased = $value->plantName;
		$plantManufacturerPurchased = $value->plantManufacturer;
		$plantAmountPurchased = $value->plantInputTotal;
		$plantCost = $value->avgplantPrice;
foreach ($plantUsedInventory as $value) {
		$plantNameUsed = $value->plantName;
		$plantManufacturerUsed = $value->plantManufacturer;
		$usedplant = $value->plantUsedTotal;
	if($plantNamePurchased === $plantNameUsed AND $plantManufacturerPurchased === $plantManufacturerUsed){
		$plantRemainder =  $plantAmountPurchased - $usedplant;
		echo '<tr>';
		echo '<td>';
		echo $plantNamePurchased;
		echo '</td>';
		echo '<td>';
		echo $plantManufacturerPurchased;
		echo '</td>';
		echo '<td>';
		echo $plantAmountPurchased;
		echo 'g</td>';
		echo '<td>';
		echo $usedplant;
		echo 'g</td>';
		echo '<td>';
		echo $plantRemainder;
		echo '</td>';
		echo '<td>$';
		echo $plantCost;
		echo '</td>';
		echo '</tr>';
	}
}}
//plants Not Used
foreach ($plantUnusedInventory as $value) {
		echo '<tr>';
		echo '<td>';
		echo $value->plantName;
		echo '</td>';
		echo '<td>';
		echo $value->plantManufacturer;
		echo '</td>';
		echo '<td>';
		echo $value->plantInputTotal;
		echo 'g</td>';
		echo '<td>';
		echo '0g</td>';
		echo '<td>';
		echo $value->plantInputTotal;
		echo 'g</td>';
		echo '<td>$';
		echo $value->avgPlantPrice;
		echo '</td>';
		echo '</tr>';
}
echo '</tbody>';
echo '</table>';
echo '</div>';