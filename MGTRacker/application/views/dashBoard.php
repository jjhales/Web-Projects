<a href='<?php echo "./MGTracker/logout"?>' class="btn btn-primary">Log Out</a>

<h3>Dashboard</h3>
<div>
	<h4>Manage</h4>
	<a href='<?php echo "FarmMaterials"?>' class="btn btn-primary">Add Farm Materials</a>
	<a href='<?php echo "Crops"?>' class="btn btn-primary">Add/Update Crops</a>
	<a href='<?php echo "Nutrients"?>' class="btn btn-primary">Use Nutrients</a>
</div>
<?php
//reports - harvest 
echo '<h4>Reports</h4>';
//lifetime harvest
echo '<button type="button" id="showHarvest" class="btn btn-primary" data-toggle="collapse" href="#harvestInventory" role="button" aria-expanded="false" aria-controls="harvestInventory" style="margin-right:2%; margin-bottom:2%;">LifeTime Harvest</button>';
echo '<div id="harvestInventory" class="collapse">';
echo '<h4>Lifetime Harvest</h4>';
echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th scope="col">Crop</th>';
	echo '<th scope="col">Seed Name</th>';
	echo '<th scope="col">Seed Manufacturer</th>';
	echo '<th scope="col">Start Date</th>';
	echo '<th scope="col">Harvest Date</th>';
	echo '<th scope="col">Seed Used</th>';
	echo '<th scope="col">Yield</th>';
	echo '<th scope="col">Rating</th>';
	echo '<th scope="col">Details</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
foreach ($harvestInventory as $value) {
	echo '<tr>';
	echo '<td>';
	echo $value->flatNumber;
	echo '</td>';
	echo '<td>';
	echo $value->seedName;
	echo '</td>';
	echo '<td>';
	echo $value->seedManufacturer;
	echo '</td>';
	echo '<td>';
	echo $value->dateStart;
	echo '</td>';
	echo '<td>';
	echo $value->dateEnd;
	echo '</td>';
	echo '<td>';
	echo $value->seedUsed;
	echo 'g</td>';
	echo '<td>';
	echo $value->yieldWeight;
	echo 'g</td>';
	echo '<td>';
	echo $value->cropRating;
	echo '</td>';
	echo '<td>';
	echo '<button class="btn btn-sm btn-link" id="showGermdetails" data-toggle="popover" title="Additional Details" data-html="true" data-content="';
	echo '<div>Germ Date: ';
	echo $value->dateLight;
	echo '</div>';
	echo '<div>Medium Material: ';
	echo $value->mediumMaterial;
	echo '</div>';
	echo '<div>Yield Value: ';
	echo $yieldValue = $value->yieldWeight/$value->seedUsed;
	echo '</div>';
	echo '<div>Test/Prod: ';
	echo $value->testing;
	echo '</div>';
	echo '<div>Location: ';
	echo $value->location;
	echo '</div>';
	echo '" style="float:right;">details</button>';
	echo '</td>';
	echo '</tr>';
}
	echo '</tbody>';
echo '</table>';
echo '</div>';
//avg harvest
echo '<button type="button" id="showAvgHarvest" class="btn btn-primary" data-toggle="collapse" href="#avgHarvestInventory" role="button" aria-expanded="false" aria-controls="avgHarvestInventory" style="margin-right:2%; margin-bottom:2%;">Average LifeTime Harvest</button>';
echo '<div id="avgHarvestInventory" class="collapse">';
echo '<h4>Average Lifetime Harvest</h4>';
echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th scope="col">Seed Name</th>';
	echo '<th scope="col">Seed Manufacturer</th>';
	echo '<th scope="col">Average Seed Used</th>';
	echo '<th scope="col">Medium Name</th>';
	echo '<th scope="col">Total Medium Used</th>';
	echo '<th scope="col">Average Yield</th>';
	echo '<th scope="col">Average Crop Rating</th>';
	echo '<th scope="col">Details</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
foreach ($avgHarvestInventory as $value) {
	echo '<tr>';
	echo '<td>';
	echo $value->seedName;
	echo '</td>';
	echo '<td>';
	echo $value->seedManufacturer;
	echo '</td>';
	echo '<td>';
	echo $value->avgSeedUsed;
	echo '</td>';
	echo '<td>';
	echo $value->mediumName;
	echo '</td>';
	echo '<td>';
	echo $value->totalMediumUsed;
	echo '</td>';
	echo '<td>';
	echo $value->avgYieldWeight;
	echo 'g</td>';
	echo '<td>';
	echo $value->avgCropRating;
	echo '</td>';
	echo '<td>';
	echo '<button class="btn btn-sm btn-link" id="showAvgHarvestDetails" data-toggle="popover" title="Additional Details" data-html="true" data-content="';
	echo '<div>Medium Manufacturer: ';
	echo $value->mediumManufacturer;
	echo '</div>';
	echo '<div>Medium Material: ';
	echo $value->mediumMaterial;
	echo '</div>';
	echo '<div>Test/Prod: ';
	echo $value->testing;
	echo '</div>';
	echo '" style="float:right;">details</button>';
	echo '</td>';
	echo '</tr>';
}
	echo '</tbody>';
echo '</table>';
echo '</div>';
echo '<div>';
//harvest by Winter
echo '<button type="button" id="showWinterHarvest" class="btn btn-primary" data-toggle="collapse" href="#winterHarvestInventory" role="button" aria-expanded="false" aria-controls="winterHarvestInventory" style="margin-right:2%; margin-bottom:2%;">Winter</button>';
echo '<div id="winterHarvestInventory" class="collapse">';
echo '<h4>Winter Harvest</h4>';
echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th scope="col">Crop</th>';
	echo '<th scope="col">Seed Name</th>';
	echo '<th scope="col">Seed Manufacturer</th>';
	echo '<th scope="col">Start Date</th>';
	echo '<th scope="col">Harvest Date</th>';
	echo '<th scope="col">Seed Used</th>';
	echo '<th scope="col">Yield</th>';
	echo '<th scope="col">Rating</th>';
	echo '<th scope="col">Details</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
foreach ($harvestInventory as $value) {
	$harvestDate = $value->dateEnd;
	if($harvestDate > '2018-12-01' AND $harvestDate < '2019-02-28'){
	echo '<tr>';
	echo '<td>';
	echo $value->flatNumber;
	echo '</td>';
	echo '<td>';
	echo $value->seedName;
	echo '</td>';
	echo '<td>';
	echo $value->seedManufacturer;
	echo '</td>';
	echo '<td>';
	echo $value->dateStart;
	echo '</td>';
	echo '<td>';
	echo $harvestDate;
	echo '</td>';
	echo '<td>';
	echo $value->seedUsed;
	echo 'g</td>';
	echo '<td>';
	echo $value->yieldWeight;
	echo 'g</td>';
	echo '<td>';
	echo $value->cropRating;
	echo '</td>';
	echo '<td>';
	echo '<button class="btn btn-sm btn-link" id="showGermdetails" data-toggle="popover" title="Additional Details" data-html="true" data-content="';
	echo '<div>Germ Date: ';
	echo $value->dateLight;
	echo '</div>';
	echo '<div>Medium Material: ';
	echo $value->mediumMaterial;
	echo '</div>';
	echo '<div>Yield Value: ';
	echo $yieldValue = $value->yieldWeight/$value->seedUsed;
	echo '</div>';
	echo '<div>Test/Prod: ';
	echo $value->testing;
	echo '</div>';
	echo '<div>Location: ';
	echo $value->location;
	echo '</div>';
	echo '" style="float:right;">details</button>';
	echo '</td>';
	echo '</tr>';
}}
	echo '</tbody>';
echo '</table>';
echo '</div>';
//Spring Harvest
//harvest by Winter
echo '<button type="button" id="showSpringHarvest" class="btn btn-primary" data-toggle="collapse" href="#springHarvestInventory" role="button" aria-expanded="false" aria-controls="springHarvestInventory" style="margin-right:2%; margin-bottom:2%;">Spring</button>';
echo '<div id="springHarvestInventory" class="collapse">';
echo '<h4>Spring Harvest</h4>';
echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th scope="col">Crop</th>';
	echo '<th scope="col">Seed Name</th>';
	echo '<th scope="col">Seed Manufacturer</th>';
	echo '<th scope="col">Start Date</th>';
	echo '<th scope="col">Harvest Date</th>';
	echo '<th scope="col">Seed Used</th>';
	echo '<th scope="col">Yield</th>';
	echo '<th scope="col">Rating</th>';
	echo '<th scope="col">Details</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
foreach ($harvestInventory as $value) {
	$harvestDate = $value->dateEnd;
	if($harvestDate > '2019-03-01' AND $harvestDate < '2019-05-31'){
	echo '<tr>';
	echo '<td>';
	echo $value->flatNumber;
	echo '</td>';
	echo '<td>';
	echo $value->seedName;
	echo '</td>';
	echo '<td>';
	echo $value->seedManufacturer;
	echo '</td>';
	echo '<td>';
	echo $value->dateStart;
	echo '</td>';
	echo '<td>';
	echo $harvestDate;
	echo '</td>';
	echo '<td>';
	echo $value->seedUsed;
	echo 'g</td>';
	echo '<td>';
	echo $value->yieldWeight;
	echo 'g</td>';
	echo '<td>';
	echo $value->cropRating;
	echo '</td>';
	echo '<td>';
	echo '<button class="btn btn-sm btn-link" id="showGermdetails" data-toggle="popover" title="Additional Details" data-html="true" data-content="';
	echo '<div>Germ Date: ';
	echo $value->dateLight;
	echo '</div>';
	echo '<div>Medium Material: ';
	echo $value->mediumMaterial;
	echo '</div>';
	echo '<div>Yield Value: ';
	echo $yieldValue = $value->yieldWeight/$value->seedUsed;
	echo '</div>';
	echo '<div>Test/Prod: ';
	echo $value->testing;
	echo '</div>';
	echo '<div>Location: ';
	echo $value->location;
	echo '</div>';
	echo '" style="float:right;">details</button>';
	echo '</td>';
	echo '</tr>';
}}
	echo '</tbody>';
echo '</table>';
echo '</div>';
//summer harvest
//harvest by Winter
echo '<button type="button" id="showSummerHarvest" class="btn btn-primary" data-toggle="collapse" href="#summerHarvestInventory" role="button" aria-expanded="false" aria-controls="summerHarvestInventory" style="margin-right:2%; margin-bottom:2%;">Summer</button>';
echo '<div id="summerHarvestInventory" class="collapse">';
echo '<h4>Summer Harvest</h4>';
echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th scope="col">Crop</th>';
	echo '<th scope="col">Seed Name</th>';
	echo '<th scope="col">Seed Manufacturer</th>';
	echo '<th scope="col">Start Date</th>';
	echo '<th scope="col">Harvest Date</th>';
	echo '<th scope="col">Seed Used</th>';
	echo '<th scope="col">Yield</th>';
	echo '<th scope="col">Rating</th>';
	echo '<th scope="col">Details</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
foreach ($harvestInventory as $value) {
	$harvestDate = $value->dateEnd;
	if($harvestDate > '2019-06-01' AND $harvestDate < '2019-08-31'){
	echo '<tr>';
	echo '<td>';
	echo $value->flatNumber;
	echo '</td>';
	echo '<td>';
	echo $value->seedName;
	echo '</td>';
	echo '<td>';
	echo $value->seedManufacturer;
	echo '</td>';
	echo '<td>';
	echo $value->dateStart;
	echo '</td>';
	echo '<td>';
	echo $harvestDate;
	echo '</td>';
	echo '<td>';
	echo $value->seedUsed;
	echo 'g</td>';
	echo '<td>';
	echo $value->yieldWeight;
	echo 'g</td>';
	echo '<td>';
	echo $value->cropRating;
	echo '</td>';
	echo '<td>';
	echo '<button class="btn btn-sm btn-link" id="showGermdetails" data-toggle="popover" title="Additional Details" data-html="true" data-content="';
	echo '<div>Germ Date: ';
	echo $value->dateLight;
	echo '</div>';
	echo '<div>Medium Material: ';
	echo $value->mediumMaterial;
	echo '</div>';
	echo '<div>Yield Value: ';
	echo $yieldValue = $value->yieldWeight/$value->seedUsed;
	echo '</div>';
	echo '<div>Test/Prod: ';
	echo $value->testing;
	echo '</div>';
	echo '<div>Location: ';
	echo $value->location;
	echo '</div>';
	echo '" style="float:right;">details</button>';
	echo '</td>';
	echo '</tr>';
}}
	echo '</tbody>';
echo '</table>';
echo '</div>';
//fall harvest
//harvest by Winter
echo '<button type="button" id="showFallHarvest" class="btn btn-primary" data-toggle="collapse" href="#fallHarvestInventory" role="button" aria-expanded="false" aria-controls="fallHarvestInventory" style="margin-right:2%; margin-bottom:2%;">Fall</button>';
echo '<div id="fallHarvestInventory" class="collapse">';
echo '<h4>Fall Harvest</h4>';
echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th scope="col">Crop</th>';
	echo '<th scope="col">Seed Name</th>';
	echo '<th scope="col">Seed Manufacturer</th>';
	echo '<th scope="col">Start Date</th>';
	echo '<th scope="col">Harvest Date</th>';
	echo '<th scope="col">Seed Used</th>';
	echo '<th scope="col">Yield</th>';
	echo '<th scope="col">Rating</th>';
	echo '<th scope="col">Details</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
foreach ($harvestInventory as $value) {
	$harvestDate = $value->dateEnd;
	if($harvestDate > '2019-09-01' AND $harvestDate < '2019-11-31'){
	echo '<tr>';
	echo '<td>';
	echo $value->flatNumber;
	echo '</td>';
	echo '<td>';
	echo $value->seedName;
	echo '</td>';
	echo '<td>';
	echo $value->seedManufacturer;
	echo '</td>';
	echo '<td>';
	echo $value->dateStart;
	echo '</td>';
	echo '<td>';
	echo $harvestDate;
	echo '</td>';
	echo '<td>';
	echo $value->seedUsed;
	echo 'g</td>';
	echo '<td>';
	echo $value->yieldWeight;
	echo 'g</td>';
	echo '<td>';
	echo $value->cropRating;
	echo '</td>';
	echo '<td>';
	echo '<button class="btn btn-sm btn-link" id="showGermdetails" data-toggle="popover" title="Additional Details" data-html="true" data-content="';
	echo '<div>Germ Date: ';
	echo $value->dateLight;
	echo '</div>';
	echo '<div>Medium Material: ';
	echo $value->mediumMaterial;
	echo '</div>';
	echo '<div>Yield Value: ';
	echo $yieldValue = $value->yieldWeight/$value->seedUsed;
	echo '</div>';
	echo '<div>Test/Prod: ';
	echo $value->testing;
	echo '</div>';
	echo '<div>Location: ';
	echo $value->location;
	echo '</div>';
	echo '" style="float:right;">details</button>';
	echo '</td>';
	echo '</tr>';
}}
	echo '</tbody>';
echo '</table>';
echo '</div>';
echo '</div>';
//farm material inventory
echo '<h4>Farm Material Inventory</h4>';
echo '<button type="button" id="showSeeds" class="btn btn-primary" data-toggle="collapse" href="#seedInventory" role="button" aria-expanded="false" aria-controls="seedInventory" style="margin-right:2%; margin-bottom:2%;">Seeds</button>';
echo '<button type="button" id="showMedium" class="btn btn-primary" data-toggle="collapse" href="#mediumInventory" role="button" aria-expanded="false" aria-controls="mediumInventory" style="margin-right:2%; margin-bottom:2%;">Medium</button>';
echo '<button type="button" id="showNutrient" class="btn btn-primary" data-toggle="collapse" href="#nutrientInventory" role="button" aria-expanded="false" aria-controls="nutrientInventory" style="margin-right:2%; margin-bottom:2%;">Nutrients</button>';
echo '<button type="button" id="showEquipment" class="btn btn-primary" data-toggle="collapse" href="#equipmentInventory" role="button" aria-expanded="false" aria-controls="equipmentInventory" style="margin-right:2%; margin-bottom:2%;">Equipment</button>';
//seed inventory
echo '<div id="seedInventory" class="collapse">';
echo '<h4>Seed Inventory</h4>';

echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th scope="col">Seed Name</th>';
	echo '<th scope="col">Seed Manufacturer</th>';
	echo '<th scope="col">Seed Amount</th>';
	echo '<th scope="col">Seed Used</th>';
	echo '<th scope="col">Seed Remainder</th>';
	echo '<th scope="col">Average Seed Cost</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
//Used Seed
foreach ($seedPurchasedInventory as $value) {
		$seedNamePurchased = $value->seedName;
		$seedManufacturerPurchased = $value->seedManufacturer;
		$seedAmountPurchased = $value->seedInputTotal;
		$seedCost = $value->avgSeedPrice;
foreach ($seedUsedInventory as $value) {
		$seedNameUsed = $value->seedName;
		$seedManufacturerUsed = $value->seedManufacturer;
		$usedSeed = $value->seedUsedTotal;
	if($seedNamePurchased === $seedNameUsed AND $seedManufacturerPurchased === $seedManufacturerUsed){
		$seedRemainder =  $seedAmountPurchased - $usedSeed;
		echo '<tr>';
		echo '<td>';
		echo $seedNamePurchased;
		echo '</td>';
		echo '<td>';
		echo $seedManufacturerPurchased;
		echo '</td>';
		echo '<td>';
		echo $seedAmountPurchased;
		echo 'g</td>';
		echo '<td>';
		echo $usedSeed;
		echo 'g</td>';
		echo '<td>';
		echo $seedRemainder;
		echo 'g</td>';
		echo '<td>$';
		echo $seedCost;
		echo '</td>';
		echo '</tr>';
	}
}}
//Seeds Not Used
foreach ($seedUnusedInventory as $value) {
		echo '<tr>';
		echo '<td>';
		echo $value->seedName;
		echo '</td>';
		echo '<td>';
		echo $value->seedManufacturer;
		echo '</td>';
		echo '<td>';
		echo $value->seedInputTotal;
		echo 'g</td>';
		echo '<td>';
		echo '0g</td>';
		echo '<td>';
		echo $value->seedInputTotal;
		echo 'g</td>';
		echo '<td>$';
		echo $value->avgSeedPrice;
		echo '</td>';
		echo '</tr>';
}
echo '</tbody>';
echo '</table>';
echo '</div>';
//medium inventory
echo '<div id="mediumInventory" class="collapse">';
echo '<h4>Medium Inventory</h4>';
echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th scope="col">Medium Name</th>';
	echo '<th scope="col">Medium Manufacturer</th>';
	echo '<th scope="col">Medium Material</th>';
	echo '<th scope="col">Material Purchased</th>';
	echo '<th scope="col">Material Used</th>';
	echo '<th scope="col">Material in Inventory</th>';
	echo '<th scope="col">Medium Average Cost</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
foreach ($mediumPurchasedInventory as $value){
	$mediumPurchasedName = $value->mediumName;
	$mediumPurchasedManufacturer = $value->mediumManufacturer;
	$mediumPurchasedMaterial = $value->mediumMaterial;
	$mediumPurchased = $value->mediumInputTotal;
	$mediumCost = $value->avgMediumCost;
foreach ($mediumUsedInventory as $value){
	$mediumUsedName = $value->mediumName;
	$mediumUsedManufacturer = $value->mediumManufacturer;
	$mediumUsedMaterial = $value->mediumMaterial;
	$mediumUsed = $value->mediumUsedTotal;
	if ($mediumPurchasedName === $mediumUsedName AND $mediumPurchasedManufacturer === $mediumUsedManufacturer AND $mediumPurchasedMaterial === $mediumUsedMaterial){
		$mediumRemainder = $mediumPurchased - $mediumUsed;
	echo '<tr>';
	echo '<td>';
	echo $mediumPurchasedName;
	echo '</td>';
	echo '<td>';
	echo $mediumPurchasedManufacturer;
	echo '</td>';
	echo '<td>';
	echo $mediumPurchasedMaterial;
	echo '</td>';
	echo '<td>';
	echo $mediumPurchased;
	echo '</td>';
	echo '<td>';
	echo $mediumUsed;
	echo '</td>';
	echo '<td>';
	echo $mediumRemainder;
	echo '</td>';
	echo '<td>$';
	echo $mediumCost;
	echo '</td>';
	echo '<td>';
	echo '</tr>';
	}
}}
//unused medium
foreach ($mediumUnusedInventory as $value) {
	echo '<tr>';
	echo '<td>';
	echo $value->mediumName;
	echo '</td>';
	echo '<td>';
	echo $value->mediumManufacturer;
	echo '</td>';
	echo '<td>';
	echo $value->mediumMaterial;
	echo '</td>';
	echo '<td>';
	echo $value->mediumInputTotal;
	echo '</td>';
	echo '<td>';
	echo '0</td>';
	echo '<td>';
	echo $value->mediumInputTotal;
	echo '</td>';
	echo '<td>$';
	echo $value->avgMediumCost;
	echo '</td>';
	echo '</tr>';
}
echo '</tbody>';
echo '</table>';
echo '</div>';
//nutrient inventory
echo '<div id="nutrientInventory" class="collapse">';
echo '<h4>Nutrient Inventory</h4>';
echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th scope="col">Nutrient Name</th>';
	echo '<th scope="col">Nutrient Manufacturer</th>';
	echo '<th scope="col">Nutrient Purchased</th>';
	echo '<th scope="col">Nutrient Used</th>';
	echo '<th scope="col">Nutrient in Inventory</th>';
	echo '<th scope="col">Nutrient Average Cost</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
foreach ($nutrientPurchasedInventory as $value){
	$nutrientPurchasedName = $value->nutrientName;
	$nutrientPurchasedManufacturer = $value->nutrientManufacturer;
	$nutrientPurchased = $value->nutrientInputTotal;
	$nutrientCost = $value->avgNutrientCost;
foreach ($nutrientUsedInventory as $value){
	$nutrientUsedName = $value->nutrientName;
	$nutrientUsedManufacturer = $value->nutrientManufacturer;
	$nutrientUsed = $value->nutrientUsedTotal;
	if ($nutrientPurchasedName === $nutrientUsedName AND $nutrientPurchasedManufacturer === $nutrientUsedManufacturer){
		$nutrientRemainder = $nutrientPurchased - $nutrientUsed;
	echo '<tr>';
	echo '<td>';
	echo $nutrientPurchasedName;
	echo '</td>';
	echo '<td>';
	echo $nutrientPurchasedManufacturer;
	echo '</td>';
	echo '<td>';
	echo $nutrientPurchased;
	echo ' ml</td>';
	echo '<td>';
	echo $nutrientUsed;
	echo ' ml</td>';
	echo '<td>';
	echo $nutrientRemainder;
	echo ' ml</td>';
	echo '<td>$';
	echo $nutrientCost;
	echo '</td>';
	echo '<td>';
	echo '</tr>';
	}
}}
//unused nutrient
foreach ($nutrientUnusedInventory as $value) {
	echo '<tr>';
	echo '<td>';
	echo $value->nutrientName;
	echo '</td>';
	echo '<td>';
	echo $value->nutrientManufacturer;
	echo '</td>';
	echo '<td>';
	echo $value->nutrientInputTotal;
	echo ' ml</td>';
	echo '<td>';
	echo '0</td>';
	echo '<td>';
	echo $value->nutrientInputTotal;
	echo ' ml</td>';
	echo '<td>$';
	echo $value->avgnutrientCost;
	echo '</td>';
	echo '</tr>';
}
echo '</tbody>';
echo '</table>';
echo '</div>';
//equipment inventory
echo '<div id="equipmentInventory" class="collapse">';
echo '<h4>Equipment Inventory</h4>';
echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th scope="col">Equipment Name</th>';
	echo '<th scope="col">Equipment Type</th>';
	echo '<th scope="col">Equipment Vendor</th>';
	echo '<th scope="col">Equipment Manufacturer</th>';
	echo '<th scope="col">Equipment Price</th>';
	echo '<th scope="col">Equipment Amount</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
foreach ($equipmentPurchaseInventory as $row) {
	echo '<tr>';
	echo '<td>';
	echo $row->equipmentName;
	echo '</td>';
	echo '<td>';
	echo $row->equipmentType;
	echo '</td>';
	echo '<td>';
	echo $row->equipmentVendor;
	echo '</td>';
	echo '<td>';
	echo $row->equipmentManufacturer;
	echo '</td>';
	echo '<td>$';
	echo $row->ePrice;
	echo '</td>';
	echo '<td>';
	echo $row->eAmount;
	echo '</td>';
	echo '</tr>';
}
	echo '</tbody>';

echo '</table>';
echo '</div>';


echo '</div>';
?>
