<?php
echo '<nav class="navbar navbar-expand-sm navbar-light bg-light">';
echo '<a class="navbar-brand" href="#"></a>';
echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>';
echo '<div id="navbar" class="collapse navbar-collapse role="navigation">';
echo '<ul class="navbar-nav mr-auto">';
echo '<li class="nav-item">';
echo '<a href="Crops" class="nav-link">Crops</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a href="Nutrients" class="nav-link">Nutrients</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a href="Dashboards" class="nav-link">Dashboard</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a href="./MGTracker/logout" class="nav-link">Log Out</a>';
echo '</li>';
echo '</ul>';
echo '</div>';
echo '</nav>';
echo '<div class="container">';
echo '<div class="row">';
echo '<h4 class="col">Manage Materials</h4>';
echo '<p class="col"></p>';
echo '<p class="col">';
$company = $this->session->userdata('company');
echo $company;
echo ' User: ';
$username = $this->session->userdata('username');
echo $username;
echo '</p>';
echo '</div>';
//seed input : anytime seed is purchased
	echo '<button class="btn btn-primary btn-lg btn-block" id="showSeed" data-toggle="collapse" href="#seedMaterial" role="button" aria-expanded="false" aria-controls="seedMaterial"style="margin-bottom:0.5%;">Add Seed</button>';
$this->load->helper('form');
	echo '<div id="seedMaterial" class="col collapse card">';
 	echo validation_errors();
	echo form_open('FarmMaterials/addSeed');
	echo '<div class="card-body">'; 
	//seed name
	echo '<div class="form-row"><div class="col">';
	echo form_label("Seed Name ", "seedName");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="seedName" list="seedNames" placeholder="">';
	echo '<datalist id="seedNames">';
	foreach($seedList as $row){
		echo '<option value="';
		echo $row->seedName;
		echo '">';
		echo $row->seedName;
		echo '</option>';
	};
	echo '</datalist>';
	echo '</div></div>';
	//seed vendor
	echo '<div class="form-row"><div class="col">';
	echo form_label("Seed Vendor ", "seedVendor");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="seedVendor" list="seedVendors">';
	echo '<datalist id="seedVendors">';
	foreach($seedVendor as $row){
		echo '<option value="';
    	echo $row->seedVendor;
		echo '">';
		echo $row->seedVendor;
		echo '</option>';
	};
	echo '</datalist>';
	echo '</div></div>';
	//seed manufacturer
	echo '<div class="form-row"><div class="col">';
	echo form_label("Seed Manufacturer " , "seedManufacturer");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="seedManufacturer" list="seedManufacturers">';
	echo '<datalist id="seedManufacturers">';
	foreach($seedManufacturer as $row){
		echo '<option value="';
		echo $row->seedManufacturer;
		echo '">';
		echo $row->seedManufacturer;
		echo '</option>';
	};
	echo '</datalist>';
	echo '</div></div>';
	//seed amount
	echo '<div class="form-row"><div class="col">';
	echo form_label("Seed Amount ", "fseedAmount");
	echo '</div><div class="col">'; 
	echo '<input type="decimal" class="form-control-sm" name="fseedAmount" placeholder="">'; 
	echo '<select class="form-control-sm" name="weight"><option>oz<option><option>lb</option><option>g<option></select>';
	echo '</div></div>';
	//seed price
	echo '<div class="form-row"><div class="col">';
	echo form_label("Seed Price ", "fseedPrice");
	echo '</div><div class="col">'; 
	echo '<input type="decimal" class="form-control-sm"name="fseedPrice" placeholder="Amount Paid"></br>';
	echo '</div></div>';
	echo form_submit("seedSubmit", "submit" , "class='submit btn btn-primary btn-sm'");
	echo form_close();
	echo "</div>";
	echo "</div>";
//plant input : anytime plant is purchased
	echo '<button class="btn btn-primary btn-lg btn-block" id="showplant" data-toggle="collapse" href="#plantMaterial" role="button" aria-expanded="false" aria-controls="plantMaterial"style="margin-bottom:0.5%;">Add Plants</button>';
	echo '<div id="plantMaterial" class="col collapse card">';
 	echo validation_errors();
	echo form_open('FarmMaterials/addPlant');
	echo '<div class="card-body">'; 
	//plant name
	echo '<div class="form-row"><div class="col">';
	echo form_label("Plant Name ", "plantName");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="plantName" list="plantNames" placeholder="">';
	echo '<datalist id="plantNames">';
	foreach($plantList as $row){
		echo '<option value="';
		echo $row->plantName;
		echo '">';
		echo $row->plantName;
		echo '</option>';
	};
	echo '</datalist>';
	echo '</div></div>';
	//plant vendor
	echo '<div class="form-row"><div class="col">';
	echo form_label("Plant Vendor ", "plantVendor");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="plantVendor" list="plantVendors">';
	echo '<datalist id="plantVendors">';
	foreach($plantVendor as $row){
		echo '<option value="';
    	echo $row->plantVendor;
		echo '">';
		echo $row->plantVendor;
		echo '</option>';
	};
	echo '</datalist>';
	echo '</div></div>';
	//plant manufacturer
	echo '<div class="form-row"><div class="col">';
	echo form_label("Plant Manufacturer " , "plantManufacturer");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="plantManufacturer" list="plantManufacturers">';
	echo '<datalist id="plantManufacturers">';
	foreach($plantManufacturer as $row){
		echo '<option value="';
		echo $row->plantManufacturer;
		echo '">';
		echo $row->plantManufacturer;
		echo '</option>';
	};
	echo '</datalist>';
	echo '</div></div>';
	//plant amount
	echo '<div class="form-row"><div class="col">';
	echo form_label("Plant Amount ", "plantAmount");
	echo '</div><div class="col">'; 
	echo '<input type="decimal" class="form-control-sm" name="plantAmount" placeholder="Number of plants">'; 
	echo '</div></div>';
	//plant price
	echo '<div class="form-row"><div class="col">';
	echo form_label("Plant Price ", "fplantPrice");
	echo '</div><div class="col">'; 
	echo '<input type="decimal" class="form-control-sm"name="fplantPrice" placeholder="Amount Paid"></br>';
	echo '</div></div>';
	echo form_submit("plantSubmit", "submit" , "class='submit btn btn-primary btn-sm'");
	echo form_close();
	echo "</div>";
	echo "</div>";
//medium input: anytime medium is purchased
	echo '<button class="btn btn-primary btn-lg btn-block" id="showMedia" data-toggle="collapse" href="#mediumMaterial" role="button" aria-expanded="false" aria-controls="mediumMaterial" style="margin-bottom:0.5%;">Add Medium</button>';
	echo '<div id="mediumMaterial" class="col collapse card">';
	echo validation_errors();
	echo form_open('FarmMaterials/addMedium'); 
	echo '<div class="card-body">';
	//medium name
	echo '<div class="form-row"><div class="col">';
	echo form_label("Medium Name ", "mediumName");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="mediumName" list="mediumNames">';
	echo '<datalist id="mediumNames">';
	foreach ($mediumName as $row) {
		echo '<option value="';
		echo $row->mediumName;
		echo '">';
		echo $row->mediumName;
		echo '</option>';
	};
	echo '</datalist>';
	echo '</div></div>';
	//medium vendor
	echo '<div class="form-row"><div class="col">';
	echo form_label("Medium Vendor ", "mediumVendor");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="mediumVendor" list="mediumVendors">';
	echo '<datalist id="mediumVendors">';
	foreach ($mediumVendor as $row) {
		echo '<option value="';
		echo $row->mediumVendor;
		echo '">';		
		echo $row->mediumVendor;
		echo '</option>';
	};
	echo '</datalist>';
	echo '</div></div>';
	//medium manufacturer
	echo '<div class="form-row"><div class="col">';
	echo form_label("Medium Manufacturer ", "mediumManufacturer");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="mediumManufacturer" list="mediumManufacturers">';
	echo '<datalist id="mediumManufacturers">';
	foreach ($mediumManufacturer as $row) {
		echo '<option value="';
		echo $row->mediumManufacturer;
		echo '">';
		echo $row->mediumManufacturer;
		echo '</option>';
	};
	echo '</datalist>';
	echo '</div></div>';
	//medium material
	echo '<div class="form-row"><div class="col">';
	echo form_label("Medium Material ", "mediumMaterial");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="mediumMaterial" list="mediumMaterials">';
	echo '<datalist id="mediumMaterials">';
	foreach ($mediumMaterial as $row) {
		echo '<option value="';
		echo $row->mediumMaterial;
		echo '">';
		echo $row->mediumMaterial;
		echo '</option>';
	};
	echo '</datalist>';
	echo '</div></div>';
	//medium amount
	echo '<div class="form-row"><div class="col">';
	echo form_label("Medium Amount " , 'mediumAmount');
	echo '</div><div class="col">';
	echo '<input type="number" class="form-control-sm" name="mediumAmount">';
	echo '<select class="form-control-sm" name="mediumSize">';
	echo '<option value="sheet">10X20 Sheet</option>';
	echo '<option value="grams">Grams</option>';
	echo '<option value="oz">oz</option>';
	echo '<option value="plugs">Plugs</option></br>';
	echo '</select>';
	echo '</div></div>';
	echo '<div class="form-row"><div class="col">';
	echo form_label("Medium Cost ", "fmediumCost");
	echo '</div><div class="col">';
	echo '<input type="decimal" class="form-control" name="fmediumCost">';
	echo '</div></div>';
	echo form_submit("mediumSubmit", "submit" , "class='submit btn btn-primary btn-sm'");
	echo form_close();
	echo '</div>';
	echo '</div>';

//equipment input: anytime equipment is purchased
	echo '<button class="btn btn-primary btn-lg btn-block" id="showEquipment" data-toggle="collapse" href="#equipment" role="button" aria-expanded="false" aria-controls="equipment"style="margin-bottom:0.5%;">Add Equipment</button>';
	echo '<div id="equipment" class="col collapse card">';
	echo validation_errors();
	echo form_open('FarmMaterials/addequipment'); 
	echo '<div class="card-body">';
	//equipment name
	echo '<div class="form-row"><div class="col">';
	echo form_label("Equipment Name ", "equipmentName");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="equipmentName" list="equipmentNames">';
	echo '<datalist id="equipmentNames">';
	foreach ($equipmentName as $row) {
		echo '<option value="';
		echo $row->equipmentName;
		echo '">';
		echo $row->equipmentName;
		echo '</option>';
	};
	echo '</datalist>';
	echo '</div></div>';
	//equipment type
	echo '<div class="form-row"><div class="col">';
	echo form_label("EquipmentType ", "equipmentType");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="equipmentType" list="equipmentTypes">';
	echo '<datalist id="equipmentTypes">';
	foreach ($equipmentType as $row) {
		echo '<option value="';
		echo $row->equipmentType;
		echo '">';
		echo $row->equipmentType;
		echo '</option>';
	};
	echo '</datalist>';
	echo '</div></div>';
	//equipment vendor
	echo '<div class="form-row"><div class="col">';
	echo form_label("Equipment Vendor ", "equipmentVendor");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="equipmentVendor" list="equipmentVendors">';
	echo '<datalist id="equipmentVendors">';
	foreach ($equipmentVendor as $row) {
		echo '<option value="';
		echo $row->equipmentVendor;
		echo '">';		echo $row->equipmentVendor;
		echo '</option>';
	};
	echo '</datalist>';
	echo '</div></div>';
	//equipment manufacturer
	echo '<div class="form-row"><div class="col">';
	echo form_label("Equipment Manufacturer ", "equipmentManufacturer");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="equipmentManufacturer" list="equipmentManufacturers">';
	echo '<datalist id="equipmentManufacturers">';
	foreach ($equipmentManufacturer as $row) {
		echo '<option value="';
		echo $row->equipmentManufacturer;
		echo '">';
		echo $row->equipmentManufacturer;
		echo '</option>';
	};
	echo '</datalist>';
	echo '</div></div>';
	//equipment price
	echo '<div class="form-row"><div class="col">';
	echo form_label("Equipment Price ", "equipmentPrice");
	echo '</div><div class="col">';
	echo '<input type="decimal" class="form-control" name="equipmentPrice">';
	echo '</div></div>';
	//equipment amount
	echo '<div class="form-row"><div class="col">';
	echo form_label("Equipment Amount " , 'equipmentAmount');
	echo '</div><div class="col">';
	echo '<input type="number" class="form-control" name="equipmentAmount">';
	echo '</div></div>';
	//equipment puchase date
	echo '<div class="form-row"><div class="col">';
	echo form_label("Equipment Purchase Date ", "equipmentPurchaseDate");
	echo '</div><div class="col">';
	echo '<input type="date" class="form-control" name="equipmentPurchaseDate">';
	echo '</div></div>';
	echo form_submit("equipmentSubmit", "submit" , "class='submit btn btn-primary btn-sm'");
	echo form_close();
	echo '</div>';
	echo '</div>';
//nutrients
	echo '<button class="btn btn-primary btn-lg btn-block" id="showNutrients" data-toggle="collapse" href="#nutrients" role="button" aria-expanded="false" aria-controls="nutrients"style="margin-bottom:0.5%;">Add Nutrients</button>';
	echo '<div id="nutrients" class="col collapse card">';
 	echo validation_errors();
	echo form_open('FarmMaterials/addNutrients');
	echo '<div class="card-body">'; 
	//nutrient name
	echo '<div class="form-row"><div class="col">';
	echo form_label("Nutrient Name ", "nutrientName");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="nutrientName" list="nutrientNames" placeholder="">';
	echo '<datalist id="nutrientNames">';
	foreach($nutrientName as $row){
		echo '<option value="';
		echo $row->nutrientName;
		echo '">';
		echo $row->nutrientName;
		echo '</option>';
	};
	echo '</datalist>';
	echo '</div></div>';
	//nutrient vendor
	echo '<div class="form-row"><div class="col">';
	echo form_label("Nutrient Vendor ", "nutrientVendor");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="nutrientVendor" list="nutrientVendors">';
	echo '<datalist id="nutrientVendors">';
	foreach($nutrientVendor as $row){
		echo '<option value="';
    	echo $row->nutrientVendor;
		echo '">';
		echo $row->nutrientVendor;
		echo '</option>';
	};
	echo '</datalist>';
	echo '</div></div>';
	//nutrient manufacturer
	echo '<div class="form-row"><div class="col">';
	echo form_label("Nutrient Manufacturer " , "nutrientManufacturer");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="nutrientManufacturer" list="nutrientManufacturers">';
	echo '<datalist id="nutrientManufacturers">';
	foreach($nutrientManufacturer as $row){
		echo '<option value="';
		echo $row->nutrientManufacturer;
		echo '">';
		echo $row->nutrientManufacturer;
		echo '</option>';
	};
	echo '</datalist>';
	echo '</div></div>';
	//seed amount
	echo '<div class="form-row"><div class="col">';
	echo form_label("Nutrient Size ", "nutrientSize");
	echo '</div><div class="col">'; 
	echo '<input type="decimal" class="form-control-sm" name="nutrientSize" placeholder="">'; 
	echo '<select class="form-control-sm" name="nutrientAmount"><option>oz<option><option>ml</option></select>';
	echo '</div></div>';
	//seed price
	echo '<div class="form-row"><div class="col">';
	echo form_label("Nutrient Price ", "nutrientPrice");
	echo '</div><div class="col">'; 
	echo '<input type="decimal" class="form-control-sm"name="nutrientPrice" placeholder="Amount Paid"></br>';
	echo '</div></div>';
	echo form_submit("nutrientSubmit", "submit" , "class='submit btn btn-primary btn-sm'");
	echo form_close();
	echo "</div>";
	echo "</div>";

?>