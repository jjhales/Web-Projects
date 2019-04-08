<?php
echo '<nav class="navbar navbar-expand-sm navbar-light bg-light">';
echo '<a class="navbar-brand" href="#"></a>';
echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>';
echo '<div id="navbar" class="collapse navbar-collapse role="navigation">';
echo '<ul class="navbar-nav mr-auto">';
echo'<li class="nav-item dropdown">';
echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Farm</a>';
echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
echo '<a href="FarmMaterials" class="nav-link dropdown-item">Farm Materials</a>';
echo '<a href="Crops" class="nav-link dropdown-item">Crops</a>';
echo '<a href="Nutrients" class="nav-link dropdown-item">Nutrients</a>';
echo '</div>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a href="Dashboards" class="nav-link">Dashboard</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a id="showProfile" class="nav-link" data-toggle="modal" data-target="#profileView">Profile</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a href="./MGTracker/logout" class="nav-link">Log Out</a>';
echo '</li>';
echo '</ul>';
echo '</div>';
echo '</nav>';
echo '<div class="container">';
//add new product button
echo '<button type="button" id="showAddProduct" class="btn btn-primary btn-lg btn-block" data-toggle="collapse" href="#addNewProduct" role="button" aria-expanded="false" aria-controls="addNewProduct" style="margin-bottom:0.5%;">Add New Product or Service</button>';
//add new product
echo '<div id="addNewProduct" class="col collapse card">';
echo '<div class = "card-body">';
$this->load->helper('form');
echo form_open('Retail/addProduct');
echo validation_errors();
//product name
	echo '<div class="form-row"><div class="col">';
	echo form_label("Product Name ", "productName");
	echo '</div><div class="col">';
	echo '<input type="text" class="form-control" name="productName"></input>';
	echo '</div></div>';
//product type --select service or product
	echo '<div class="form-row"><div class="col">';
	echo form_label("Product Type ", "productType");
	echo '</div><div class="col">';
	echo '<select class="form-control " name="productType">';
	echo '<option value="service">Service</option>';
	echo '<option value="product">Product</option>';
	echo '</select>';
	echo '</div></div>';
//product price
	echo '<div class="form-row"><div class="col">';
	echo form_label("Product Price ", "productPrice");
	echo '</div><div class="col">';
	echo '<input type="decimal" class="form-control " name="productPrice"></input>';
	echo '</div></div>';
//product description
	echo '<div class="form-row"><div class="col">';
	echo form_label("Product Description ", "productDescription");
	echo '</div><div class="col">';
	echo '<textarea class="form-control " name="productDescription" rows="5"></textarea>';
	echo '</div></div>';

	echo form_submit("submit", "submit", "class='submit btn btn-primary btn-sm'");
//close form
	echo form_close();
//close add new product
echo '</div></div>';
// add products to inventory button
echo '<button type="button" id="showAddInventory" class="btn btn-primary btn-lg btn-block" data-toggle="collapse" href="#addInventory" role="button" aria-expanded="false" aria-controls="addInventory" style="margin-bottom:0.5%;">Add Products to Inventory</button>';
//Add products to inventory
echo '<div id="addInventory" class=" col collapse card">';
echo '<div class = "card-body">';
$this->load->helper('form');
echo form_open('Retail/addNewInventory');
echo validation_errors();
//product name
	echo '<div class="form-row"><div class="col">';
	echo form_label("Product Name ", "productName");
	echo '</div><div class="col">';
	echo '<select class="form-control" name="productName">';
	foreach($productName as $row){
		echo '<option value="';
		echo $row->productName;
		echo '">';
		echo $row->productName;
		echo '</option>';
	};
	echo '</select>';
	echo '</div></div>';
//product qty
	echo '<div class="form-row"><div class="col">';
	echo form_label("Product Quantity ", "productQty");
	echo '</div><div class="col">';
	echo '<input type="decimal" class="form-control " name="productQty"></input>';
	echo '</div></div>';
	echo form_submit("submit", "submit", "class='submit btn btn-primary btn-sm'");
//close form
	echo form_close();
//close add new product
echo '</div></div>';

//products in inventory button
echo '<button type="button" id="showProductInventory" class="btn btn-primary btn-lg btn-block" data-toggle="collapse" href="#productInventory" role="button" aria-expanded="false" aria-controls="productInventory" style="margin-bottom:0.5%;">Product Inventory</button>';
//products in inventory
echo '<div id="productInventory" class="collapse table-responsive">';
echo '<table class="table table-sm table-striped">';
	echo '<thead>';
	echo '<tr>';
	echo '<th scope="col">#</th>';
	echo '<th scope="col">Name</th>';
	echo '<th scope="col">Price</th>';
	echo '<th scope="col">Qty</th>';
	echo '<th scope="col">Details</th>';
	echo '</tr>';
	echo '</thead>';
	$count = 0;
	foreach ($products as $value) {
		$count = $count + 1;
		echo '<tr>';
		echo '<td>';
		echo "<button class='btn btn-sm btn-link' id='showdetails' data-toggle='popover' data-placement='left' title='Products' data-html='true' data-content='";
		echo form_open('Retail/editInventory');
		echo validation_errors();
		echo '<input type="hidden" name="productId" value="';
		echo $value->productId;
		echo '"></input>';
		echo '<div class="form-row"><div class="col">';
		echo form_label('Product Name', 'productName');
		echo '<input type="text" class="form-control" name="productName" value="';
		echo $value->productName;
		echo '"></input></div></div>';
		echo '<div class="form-row"><div class="col">';
		echo form_label('Product Price', 'productPrice');
		echo '<div class="form-row"><div class="col">';
		echo '<input type="decimal" class="form-control " name="productPrice" value="';
		echo $value->productPrice;
		echo '"></input></div></div>';
		echo form_label('Product Description', 'productDescription');
		echo '<textarea class="form-control " name="productDescription" rows="5">';
		echo $value->productDescription;
		echo '</textarea></div></div>';
		echo form_submit('submit', 'submit', 'class="submit btn btn-primary btn-sm"');
		echo form_close();
		echo "'>";
		echo $count;
		echo '</button>';
		echo '</td><td>';
		echo $value->productName;
		echo '</td><td>$';
		echo $value->productPrice;
		echo '</td><td>';
		echo $value->productQty;
		echo '</td><td>';
		echo '<button class="btn btn-sm btn-link" id="showdetails" data-toggle="popover" data-placement="left" data-trigger="focus" title="Description" data-html="true" data-content="';
		echo '<div>';
		echo $value->productDescription;
		echo '</div>';
		echo '">details</button>';
		echo '</td>';
		echo '</tr>';
	}

echo '</table></div>';

//services button
echo '<button type="button" id="showServices" class="btn btn-primary btn-lg btn-block" data-toggle="collapse" href="#services" role="button" aria-expanded="false" aria-controls="services" style="margin-bottom:0.5%;">Services</button>';
//products in inventory
echo '<div id="services" class="collapse table-responsive">';
echo '<table class="table table-sm table-striped">';
	echo '<thead>';
	echo '<tr>';
	echo '<th scope="col">#</th>';
	echo '<th scope="col">Name</th>';
	echo '<th scope="col">Price</th>';
	echo '<th scope="col">Details</th>';
	echo '</tr>';
	echo '</thead>';
	$count = 0;
	foreach ($services as $value) {
		$count = $count + 1;
		echo '<tr>';
		echo '<td>';
		echo "<button class='btn btn-sm btn-link' id='showdetails' data-toggle='popover' data-placement='left' title='Services' data-html='true' data-content='";
		echo form_open('Retail/editInventory');
		echo validation_errors();
		echo '<input type="hidden" name="productId" value="';
		echo $value->productId;
		echo '"></input>';
		echo '<div class="form-row"><div class="col">';
		echo form_label('Product Name', 'productName');
		echo '<input type="text" class="form-control" name="productName" value="';
		echo $value->productName;
		echo '"></input></div></div>';
		echo '<div class="form-row"><div class="col">';
		echo form_label('Product Price', 'productPrice');
		echo '<div class="form-row"><div class="col">';
		echo '<input type="decimal" class="form-control " name="productPrice" value="';
		echo $value->productPrice;
		echo '"></input></div></div>';
		echo form_label('Product Description', 'productDescription');
		echo '<textarea class="form-control " name="productDescription" rows="5">';
		echo $value->productDescription;
		echo '</textarea></div></div>';
		echo form_submit('submit', 'submit', 'class="submit btn btn-primary btn-sm"');
		echo form_close();
		echo "'>";
		echo $count;
		echo '</button>';
		echo '</td><td>';
		echo $value->productName;
		echo '</td><td>$';
		echo $value->productPrice;
		echo '</td><td>';
		echo '<button class="btn btn-sm btn-link" id="showdetails" data-toggle="popover" data-placement="left" data-trigger="focus" title="Description" data-html="true" data-content="';
		echo '<div>';
		echo $value->productDescription;
		echo '</div>';
		echo '">details</button>';
		echo '</td>';
		echo '</tr>';
	}

echo '</table></div>';





?>