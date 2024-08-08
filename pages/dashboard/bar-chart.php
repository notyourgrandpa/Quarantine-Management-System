<?php include "../qConnection.php";


?>

<script>
	Morris.Bar({
		element: 'morris-bar-chart2',
		data: [
			<?php

				$start = 0;
				while($start!=100){
					$qry = mysqli_query($con,"select * from tbl_patients where age like '%$start%'");
					$cnt = mysqli_num_rows($qry);
					echo "{y:'$start',a:$cnt},";
					$start = $start+1;
				}
			?>
		],
		xkey: 'y',
		ykeys: ['a'],
		labels: ['Age'],
		hideHover: 'auto'
	});

	Morris.Bar({
		element: 'morris-bar-chart3',
		data: [
			<?php

					$qry = mysqli_query($con,"SELECT *,count(*) as cnt FROM tbl_patients r group by r.facility_area ");
					while($row=mysqli_fetch_array($qry)){
					echo "{y:'".$row['facility_area']."',a:'".$row['cnt']."'},";
					}
			?>
		],
		xkey: 'y',
		ykeys: ['a'],
		labels: ['Patient per Area'],
		hideHover: 'auto'
	});

	
</script>