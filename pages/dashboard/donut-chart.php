<?php include "../qConnection.php";?>
<script>
	Morris.Donut({
		element: 'morris-donut-chart',
		data: [{
			label: "Asymptomatic",
			value: <?php 
					$q = mysqli_query($con,"SELECT * from tbl_patients where classification = 'Asymptomatic' ");
					$numrow = mysqli_num_rows($q);
					echo $numrow;
			 	?>
		}, {
			label: "Mild",
			value: <?php 
					$q = mysqli_query($con,"SELECT * from tbl_patients where classification = 'Mild' ");
					$numrow = mysqli_num_rows($q);
					echo $numrow;
			 	?>
		}, {
			label: "Moderate",
			value: <?php 
					$q = mysqli_query($con,"SELECT * from tbl_patients where classification = 'Moderate' ");
					$numrow = mysqli_num_rows($q);
					echo $numrow;
			 	?>
		}, {
			label: "Severe",
			value: <?php 
					$q = mysqli_query($con,"SELECT * from tbl_patients where classification = 'Severe' ");
					$numrow = mysqli_num_rows($q);
					echo $numrow;
			 	?>
		}, {
			label: "Critical",
			value: <?php 
					$q = mysqli_query($con,"SELECT * from tbl_patients where classification = 'Critical' ");
					$numrow = mysqli_num_rows($q);
					echo $numrow;
			 	?>
		}],
		resize: true
	});
</script>