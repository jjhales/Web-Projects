<!-- Teams Page -->
<style type="text/css">
	.big-button{
		float: right;
		margin-top:.3%;
		margin-right: 1%;
		font-family: Copperplate Gothic;
		font-weight: bold;
		text-align: center;
	}
	.nav-stacked{
		padding-bottom: 2%;
	}
</style>
		<ul class="nav-stacked">
			<div>
				<a href='<?php echo "../Picks"?>' class='btn btn-primary btn-sm big-button' style="color:white;">Picks</a></button>
			</div>
			<div>
				<a href='<?php echo "../GDP/groups_display"?>' class='btn btn-primary btn-sm big-button' style="color:white;">Groups</a></button>
			</div>
		</ul>
		<h3 style="font-family:CopperPlate Gothic;margin-left:2%;">Teams</h3>
<?php
$this->load->helper('html'); 
echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'></div>";
echo "<div style='padding-top:2%;'class='container'>";
echo "<div id='teams_display' style='margin-top:1.5%;'>";
foreach ($team as $row) 
{
	echo '<div id="teaminfo" style="float:left; margin-bottom:2.5%; margin-right:10px; margin-left:15px; padding-left:29px; font-family:Copperplate Gothic; text-align:center; font-size:10px; font-weight:bold;">';
	echo "<p>";
	echo "<img src ='../..";
	echo $row->team_logo;
	echo "' style='width:125px;height:110px; border:5px solid #B4B5B8'>";
	echo "</p>";
	echo "<p id='team_loc_name'>";
	echo $row->team_location, " ", $row->team_name;
	echo "</p>";
	echo "<p id='team_division'>";
	echo $row->division;
	echo "</p>";
	echo "</div>";
}
echo "<div>";
echo "</div>";
?>

