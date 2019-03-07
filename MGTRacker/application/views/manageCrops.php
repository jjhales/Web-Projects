<?php
$this->load->helper('form');
	echo '<div>';
	echo '<a href="FarmMaterials" class="btn btn-primary" style="float:right; margin:0.5%;">Farm Materials</a>';
	echo '<a href="Nutrients" class="btn btn-primary" style="float:right; margin:0.5%;">Nutrients</a>';
	echo '<a href="Dashboards" class="btn btn-primary" style="float:right; margin:0.5%;">Dashboard</a>';
	echo '</div>';
//manage crops
	echo '<h3>Manage Crops</h3>';
	echo '<button class="btn btn-primary btn-lg btn-block" id="showNewCrop" data-toggle="collapse" href="#newCrop" role="button" aria-expanded="false" aria-controls="newCrop"style="margin-bottom:0.5%;">Add Crop</button>';
//add new crops
    echo '<div id="newCrop" class="col collapse">';
	echo validation_errors();
	echo form_open('Crops/addCrop', 'class="form-control"');
	echo '<div>';
	echo '<div class="form-row"><div class="col">';
	echo form_label("Seed Name ", "seedName");
	echo '</div><div class="col">';
	echo '<select class="form-control" name="seedName">';
	foreach($seedList as $row){
		echo '<option value="';
		echo $row->seedName;
		echo '">';
		echo $row->seedName;
		echo '</option>';
	};
	echo '</select>';
	echo '</div>';
	echo '</div>';
		//seed manufacturer
	echo '<div class="form-row"><div class="col">';
	echo form_label("Seed Manufacturer " , "seedManufacturer");
	echo '</div><div class="col">';
	echo '<select class="form-control " name="seedManufacturer">';
	foreach($seedManufacturer as $row){
		echo '<option value="';
		echo $row->seedManufacturer;
		echo '">';
		echo $row->seedManufacturer;
		echo '</option>';
	};
	echo '</select>';
	echo '</div></div>';
	//seed used
	echo '<div class="form-row"><div class="col">';
	echo form_label("Seed Used ", "seedUsed");
	echo '</div><div class="col">';
	echo '<input type="decimal" class="form-control-sm " name="seedUsed">';
	//seed weight
	echo '<select class="form-control-sm " name="weight"><option>oz<option><option>lb</option><option>g<option></select>';
	echo '</div></div>';
	//medium name
	echo '<div class="form-row"><div class="col">';
	echo form_label("Medium Name ", "mediumName");
	echo '</div><div class="col">';
	echo '<select class="form-control " name="mediumName" list="mediumNames">';
		foreach ($mediumName as $row) {
		echo '<option value="';
		echo $row->mediumName;
		echo '">';
		echo $row->mediumName;
		echo '</option>';
	};
	echo '</select>';
	echo '</div></div>';
		//medium manufacturer
	echo '<div class="form-row"><div class="col">';
	echo form_label("Medium Manufacturer " , "MediumManufacturer");
	echo '</div><div class="col">';
	echo '<select class="form-control " name="mediumManufacturer">';
	foreach($mediumManufacturer as $row){
		echo '<option value="';
		echo $row->mediumManufacturer;
		echo '">';
		echo $row->mediumManufacturer;
		echo '</option>';
	};
	echo '</select>';
	echo '</div></div>';
	echo '<div class="form-row"><div class="col">';
	echo form_label("Medium Material " , "MediumMaterial");
	echo '</div><div class="col">';
	echo '<select class="form-control " name="mediumMaterial">';
	foreach($mediumMaterial as $row){
		echo '<option value="';
		echo $row->mediumMaterial;
		echo '">';
		echo $row->mediumMaterial;
		echo '</option>';
	};
	echo '</select>';
	echo '</div></div>';
	//medium amount
	echo '<div class="form-row"><div class="col">';
	echo form_label("Medium Amount " , 'mediumAmount');
	echo '</div><div class="col">';
	echo '<input type="decimal" class="form-control-sm " name="mediumAmount">';
	echo '<select class="form-control-sm " name="mediumSize">';
	echo '<option value="sheet">10X20 Sheet</option>';
	echo '<option value="grams">Grams</option>';
	echo '<option value="oz">oz</option>';
	echo '<option value="plugs">Plugs</option></br>';
	echo '</select>';
	echo '</div></div>';
	//date start
	echo '<div class="form-row"><div class="col">';
	echo form_label("Start Date ", "dateStart");
	echo '</div><div class="col">';
	echo '<input type="date" class="form-control " name = "dateStart">';
	echo '</div></div>';
	//testing or production
	echo '<div class="form-row"><div class="col">';
	echo form_label("Testing or Production", "testing");
	echo '</div><div class="col">';
	echo '<select class="form-control " name="testing">';
	echo '<option value="testing">Testing</option>';
	echo '<option value="production">Production</option>';
	echo '</select>';
	echo '</div></div>';
	echo '<div class="form-row"><div class="col">';
	echo form_label("Location ", "location");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="location" list="locations" placeholder="">';
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
	echo form_submit("cropSubmit", "submit" , "class='submit btn btn-primary btn-sm'");
	echo form_close();
	echo '</div>';
	echo '</div>';
//germination - update crops
	echo '<button class="btn btn-primary btn-lg btn-block" id="showGerm" data-toggle="collapse" href="#germUpdate" role="button" aria-expanded="false" aria-controls="germUpdate" style="margin-bottom:0.5%;">Germination<span class="badge badge-light" style="margin-left:2.5%;">';
	foreach ($germinationCount as $row) {
		echo $row->germCrops;
	};
	echo '</button>';
	echo '<div id="germUpdate" class="collapse" style="float:left;">';
	foreach ($germination as $row) {
		echo '<div style="float:left;">';
		//details button
		echo '<button class="btn btn-sm" id="showGermdetails" data-toggle="popover" title="Additional Details" data-html="true" data-content="';
		echo '<div>Start Date: ';
		echo $row->dateStart;
		echo '</div><div>Seed Manufacturer: ';
		echo $row->seedManufacturer;
		echo '</div><div> Seed Used: ';
		echo $row->seedUsed;
		echo 'g</div><div>Medium Material: ';
		echo $row->mediumMaterial;
		echo '</div>';
		echo '" style="float:right;">details</button>';
		//Germination form
		echo form_open('Crops/updateGerm' , 'class="form-control"');
		echo '<div class="form-row"><div class="col">';
		echo form_label("Crop Number ", "flatNumber");
		echo '</div><div class="col">';
		echo '<input type ="text" class="form-control-sm form-control-plaintext" name = "flatNumber" value ="';
		echo $row->flatNumber;
		echo '"readonly"></div></div>';
		echo '<div class="form-row"><div class="col">';
		echo form_label("Seed Name ","seedName");
		echo '</div><div class="col">';
		echo '<input type ="text" class="form-control-sm form-control-plaintext" name = "seedName" value ="';
		echo $row->seedName;
		echo '"readonly"></div></div>';
		echo '<div class="form-row"><div class="col">';
		echo form_label("Light Date", "datelight");
		echo '</div><div class="col">';
		echo '<input type="date" class="form-control " name="dateLight">';
		echo '</div></div>';
		echo '<div class="form-row"><div class="col">';
		echo form_label("Location ", "location");
		echo '</div><div class="col">';
		echo '<input type="text" class="form-control" name="location" list="locations" placeholder="';
		echo $row->location;
		echo '">';
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
		echo form_submit("updateLight", "Update" , "class='submit btn btn-primary btn-sm'");
		echo form_close();
		echo '</div>';	
	}
	echo '</div>';

//grow - update crops
	echo '<button class="btn btn-primary btn-lg btn-block" id="showGrow" data-toggle="collapse" href="#growUpdate" role="button" aria-expanded="false" aria-controls="growUpdate"style="margin-bottom:0.5%;">Grow<span class="badge badge-light" style="margin-left:2.5%;">';
	foreach ($growCount as $row) {
		echo $row->growCrops;
	};
	echo '</button>';
	echo '<div id="growUpdate" class="collapse" style="float:left;">';
	foreach ($grow as $row) {
		echo '<div style="float:left;">';
		echo '<button class="btn btn-sm" id="showGrowdetails" data-toggle="popover" title="Additional Details" data-html="true" data-content="';
		echo '<div>Start Date: ';
		echo $row->dateStart;
		echo '<div>Light Date: ';
		echo $row->dateLight;
		echo '</div><div>Seed Manufacturer: ';
		echo $row->seedManufacturer;
		echo '</div><div> Seed Used: ';
		echo $row->seedUsed;
		echo 'g</div><div>Medium Material: ';
		echo $row->mediumMaterial;
		echo '</div><div>Location: ';
		echo $row->location;
		echo '</div>';
		echo '" style="float:right;">details</button>';
		echo form_open('Crops/updateGrow', 'class="form-control"');
		echo '<div class="form-row"><div class="col">';
		echo form_label("Crop Number ", "flatNumber");
		echo '</div><div class="col">';
		echo '<input type ="text" class="form-control-sm form-control-plaintext" name = "flatNumber" value ="';
		echo $row->flatNumber;
		echo '"readonly"></div></div>';
		echo '<div class="form-row"><div class="col">';
		echo form_label("Seed Name ","seedName");
		echo '</div><div class="col">';
		echo '<input type ="text" class="form-control-sm form-control-plaintext" name = "seedName" value ="';
		echo $row->seedName;
		echo '"readonly"></div></div>';
		echo '<div class="form-row"><div class="col">';
		echo form_label("Harvest Date", "dateEnd");
		echo '</div><div class="col">';
		echo '<input type="date" class="form-control " name="dateEnd">';
		echo '</div></div>';
		echo '<div class="form-row"><div class="col">';
		echo form_label("Yield", "yWeight");
		echo '</div><div class="col">';
		echo '<input type="decimal" class="form-control-sm " name="yWeight">';
		echo '</div><div class="col">';
		echo '<select class="form-control-sm" name="weight"><option>oz<option><option>lb</option><option>g<option></select>';
		echo '</div></div>';
		echo '<div class="form-row"><div class="col">';
		echo form_label("Crop Rating", "cropRating");
		echo '</div><div class="col">';
		echo '<input type="range" class="form-control-sm " name="cropRating" min="0" max="5">';
		echo '</div></div>';
		echo form_submit("updateEnd", "Update" , "class='submit btn btn-primary btn-sm'");
		echo form_close();
		echo '</div>';
	}
	echo '</div>';
	




?>