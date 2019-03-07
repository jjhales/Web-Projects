<?php
$this->load->helper('form');
	echo '<div>';
	echo '<a href="FarmMaterials" class="btn btn-primary" style="float:right; margin:0.5%;">Farm Materials</a>';
	echo '<a href="Dashboards" class="btn btn-primary" style="float:right; margin:0.5%;">Dashboard</a>';
	echo '<a href="Crops" class="btn btn-primary" style="float:right; margin:0.5%;">Crops</a>';
	echo '</div>';
//nutrients
	echo '<h3>Nutrients</h3>';
	echo '<button class="btn btn-primary btn-lg btn-block" id="showNutrientsUse" data-toggle="collapse" href="#nutrientsUse" role="button" aria-expanded="false" aria-controls="nutrientsUse"style="margin-bottom:0.5%;">Use Nutrients</button>';
	echo '<div id="nutrientsUse" class="col collapse">';
 	echo validation_errors();
	echo form_open('Nutrients/useNutrients', 'class="form-control"');
	echo '<div>'; 
	//nutrient name
	echo '<div class="form-row"><div class="col">';
	echo form_label("Nutrient Name ", "nutrientName");
	echo '</div><div class="col">';
	echo '<select class="form-control" name="nutrientName">';
	foreach($nutrientName as $row){
		echo '<option value="';
		echo $row->nutrientName;
		echo '">';
		echo $row->nutrientName;
		echo '</option>';
	};
	echo '</select>';
	echo '</div></div>';
	//nutrient manufacturer
	echo '<div class="form-row"><div class="col">';
	echo form_label("Nutrient Manufacturer " , "nutrientManufacturer");
	echo '</div><div class="col">';
	echo '<select class="form-control" name="nutrientManufacturer">';
	echo '<datalist id="nutrientManufacturers">';
	foreach($nutrientManufacturer as $row){
		echo '<option value="';
		echo $row->nutrientManufacturer;
		echo '">';
		echo $row->nutrientManufacturer;
		echo '</option>';
	};
	echo '</select>';
	echo '</div></div>';
	//Nutrient amount
	echo '<div class="form-row"><div class="col">';
	echo form_label("Nutrient Amount ", "nutrientAmount");
	echo '</div><div class="col">'; 
	echo '<input type="decimal" class="form-control-sm" name="nutrientAmount" placeholder="">'; 
	echo '<select class="form-control-sm" name="nutrientMeasure"><option>oz<option><option>ml</option></select>';
	echo '</div></div>';
	//location
	echo '<div class="form-row"><div class="col">';
	echo form_label("Location ", "location");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="location" list="locations">';
	echo '<datalist id="locations">';
	foreach($location as $row){
		echo '<option value="';
		echo $row->location;
		echo '">';
		echo $row->location;
		echo '</option>';
	};
	echo '</datalist>';
	echo '</div></div>';
	//use date
	echo '<div class="form-row"><div class="col">';
	echo form_label("Use Date", "nutrientUseDate");
	echo '</div><div class="col">';
	echo '<input type="date" class="form-control " name="nutrientUseDate">';
	echo '</div></div>';
	echo form_submit("nutrientUseSubmit", "submit" , "class='submit btn btn-primary btn-sm'");
	echo form_close();
	echo "</div>";
	echo "</div>";

//nutrients in use
	echo '<button class="btn btn-primary btn-lg btn-block" id="showNutrientsInUse" data-toggle="collapse" href="#nutrientsInUse" role="button" aria-expanded="false" aria-controls="nutrientsInUse"style="margin-bottom:0.5%;">Nutrients In Use</button>';
	echo '<div id="nutrientsInUse" class="col collapse">';
foreach ($nutrientsLocation as $value) {
	echo '<button class="btn btn-info btn-lg btn-block" id="shownutrients" data-toggle="collapse" href="#use';
	echo $value->location;
	echo '" role="button" aria-expanded="false" aria-controls="use';
	echo $value->location;
	echo '" style="margin-bottom:0.5%;">';
	echo $value->location;
	echo '</button>';
	
	$currentLocation = $value->location;
	$sql = ('SELECT * from nutrientuse WHERE location = ? AND inUse = "1"');
	$query = $this->db->query($sql, $currentLocation);
	$results = $query->result();
		echo '<div class="col collapse" id="use';
		echo $value->location;
		echo '">';
		echo '<table class="table table-sm">';
		echo '<thead>';
		echo '<tr>';
		echo '<th scope="col">Name</th>';
		echo '<th scope="col">Manufacturer</th>';
		echo '<th scope="col">Amount</th>';
		echo '<th scope="col">Date</th>';
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';

	foreach ($results as $value) {
		echo '<tr>';
		echo '<td>';
		echo $value->nutrientName;
		echo '</td>';
		echo '<td>';
		echo $value->nutrientManufacturer;
		echo '</td>';
		echo '<td>';
		echo $value->nutrientAmount;
		echo ' ml</td>';
		echo '<td>';
		echo $value->nutrientUseDate;
		echo '</td>';
		echo '<td>';
		echo form_open('Nutrients/nutrientUseDeactivate');
		echo '<input type="hidden" name="nutrientUseID" value="';
		echo $value->nutrientUseID;
		echo '">';
		echo form_submit("submit", "x", "class='submit btn btn-primary btn-sm'");
		echo form_close();
		echo '</td>';
		echo '</tr>';
	}
		echo '</tbody>';
		echo '</table>';
		echo '</div>';
}

echo '</div>';
//nutrients in use
	echo '<button class="btn btn-primary btn-lg btn-block" id="showNutrientsNotInUse" data-toggle="collapse" href="#nutrientsNotInUse" role="button" aria-expanded="false" aria-controls="nutrientsNotInUse"style="margin-bottom:0.5%;">Nutrients Not In Use</button>';
	echo '<div id="nutrientsNotInUse" class="col collapse">';
foreach ($nutrientsLocation as $value) {
	echo '<button class="btn btn-info btn-lg btn-block" id="shownutrients" data-toggle="collapse" href="#not';
	echo $value->location;
	echo '" role="button" aria-expanded="false" aria-controls="not';
	echo $value->location;
	echo '" style="margin-bottom:0.5%;">';
	echo $value->location;
	echo '</button>';
	
	$currentLocation = $value->location;
	$sql = ('SELECT * from nutrientuse WHERE location = ? AND inUse = "0"');
	$query = $this->db->query($sql, $currentLocation);
	$results = $query->result();
		echo '<div class="col collapse" id="not';
		echo $value->location;
		echo '">';
		echo '<table class="table table-sm">';
		echo '<thead>';
		echo '<tr>';
		echo '<th scope="col">Name</th>';
		echo '<th scope="col">Manufacturer</th>';
		echo '<th scope="col">Amount</th>';
		echo '<th scope="col">Date</th>';
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';

	foreach ($results as $value) {
		echo '<tr>';
		echo '<td>';
		echo $value->nutrientName;
		echo '</td>';
		echo '<td>';
		echo $value->nutrientManufacturer;
		echo '</td>';
		echo '<td>';
		echo $value->nutrientAmount;
		echo ' ml</td>';
		echo '<td>';
		echo $value->nutrientUseDate;
		echo '</td>';
		echo '</tr>';
	}
		echo '</tbody>';
		echo '</table>';
		echo '</div>';
}
echo '</div>';


?>