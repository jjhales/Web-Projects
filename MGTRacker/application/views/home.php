<?php
echo '<nav class="navbar navbar-expand-sm navbar-light bg-light">';
echo '<a class="navbar-brand" href="#"></a>';
echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>';
echo '<div id="navbar" class="collapse navbar-collapse role="navigation">';
echo '<ul class="navbar-nav mr-auto">';
echo '<li class="nav-item">';
echo '<button type="button" class="btn btn-link" data-toggle="modal" data-target="#modal_signin">Log In</button>';
echo '</li>';
echo '<li class="nav-item">';
echo '<button type="button" class="btn btn-link" data-toggle="modal" data-target="#modal_signup">Sign Up</button>';
echo '</li>';
echo '</ul>';
echo '</div>';
echo '</nav>';
?>
<div class="container">
<h1>MGTracker</h1>
<div>
	<p>Welcome to Mini Garden Tracker. MGTracker allows you to log information about your garden.</p>
	<ul>
		<li>Planting from seed to yield</li>
		<li>Planting from starter plants to yield</li>
		<li>Nutrient use</li>
		<li>Inventory seed, plants, medium and equipment</li>
		<li>Add customers and employees</li>
	</ul>
	<button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#modal_signup">Sign Up</button>
</div>

