		</div> <!-- closes container -->
		<footer style="clear:both; background:black; color:white; padding-top:0.5%; padding-bottom:1%">
			<?php 
				$this->load->helper('html'); 
				$image_properties = array(
          			'src' => 'images/logo_footer.png',
          			'alt' => "logo",
          			'class' => 'footer_logo',
          			'width' => '',
          			'height' => '',
          			'title' => 'footer_logo',
          			'rel' => '',
				);

			echo img($image_properties);
			?>
			<p style="padding-top:0.1%;">Home Healthcare Hours Tracker</p>
			
		</footer>
	</body>
</html>


