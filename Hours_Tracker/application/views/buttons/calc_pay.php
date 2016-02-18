
<button id="calculate_pay" class="btn-large" onclick='view_calculate()'>Calculate Pay</button>
</br>
<div id='calculate' style="display:none;">
	<!-- button to close last 10 hours -->
	<button id='close_hours' onclick="hide_calculate()" style="float:left;">
		<?php
		$this->load->helper('html'); 
		echo img('images/close.png');
		?>
	</button>

	<?php
		echo '<p>Pay earned to date $';
		 foreach ($employee_pay as $value) {
		 	echo $value->pay;
		 };
		 echo '.';
		 echo '</p>';
	?>
</div>
