<script type="text/javascript">
	function cg(){
		document.getElementById('pop_success').click();
		document.getElementById('pop_success').style.display='none';
}
</script>
<body onload="cg()">

			<button type="button" id="pop_success" class="btn btn-link" data-toggle="modal" data-target="#cg_success" style="color:white">cg</button>
			
			<div class="modal fade" id="cg_success" tabindex="-1", role="dialog" aria-labelledby="retailSuccess" aria-hidden="true">
				<div class="modal-dialog" role="document">
    				<div class="modal-content">
    					<div class="modal-header">
        					<h4 class="modal-title" id="retailSuccess">Retail Product Added</h4>
      					</div>
	     					<div class="modal-body" id="retail_success">
	     					<p>Your entry was successfully added.</p>
	     					<div>
	     					<?php 
	     					echo '<div class="row">';
	     					echo '<p class="col">Product Name: </p>';
	     					echo '<p class="col">';
	     					echo $productName;
	     					echo '</p></div><div class="row"><p class="col">Product Type: </p>';
	     					echo '<p class="col">';
	     					echo $productType;
	     					echo '</p></div><div class="row"><p class="col">Product Price: </p>';
	     					echo '<p class="col">';
	     					echo $productPrice;
	     					echo '</p></div><div class="row"><p class="col">Product Description: </p>';
	     					echo '<p class="col">';
	     					echo $productDescription;
	     					echo '</p>';
	     					?>
	     					</div>

	     					</div> <!--modal-body close-->
	     					<div class="modal-footer">
								<a href='<?php echo "../Retail"?>' class="btn btn-primary btn-sm" style="float:right; margin-right:2%; margin-bottom:2%;">Retail</a>
							</div> <!-- close modal footer -->
						</div><!-- /.modal-body -->
				</div><!-- /.modal-content -->
			</div>