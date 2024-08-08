<?php
    include "../qConnection.php";
	if(isset($_POST['areaa'])){
		if(($_POST['areaa']) == "Metro Manila"){
			echo '<option selected>--Select Facility --</option>
                <option value="MLQU Quarantine Facility">MLQU Quarantine Facility</option>
                <option value="Rosario Maclang Bautista General Hospital">Rosario Maclang Bautista General Hospital</option>
            ';

		}
        elseif(($_POST['areaa']) == "San Mateo"){
            echo '<option selected>--Select Facility --</option>
            <option value="San Mateo Isolation Facility">San Mateo Isolation Facility</option>
            <option value="San Mateo Medical Center">San Mateo Medical Center</option>;
            ';
        }

        elseif(($_POST['areaa']) == "Manila"){
            echo '<option selected>--Select Facility --</option>
            <option value="Kamia Residence Hall">Kamia Residence Hall</option>
            <option value="Delpan Quarantine Facility">Delpan Quarantine Facility</option>';
        }
        elseif(($_POST['areaa']) == "Marikina"){
            echo '<option selected>--Select Facility --</option>
            <option value="Bagong Sibol Quarantine Facility">Bagong Sibol Quarantine Facility</option>';
        }
		
	}

    if(isset($_POST['nearestt'])){
        if(($_POST['nearestt']) == "San Mateo Isolation Facility"){
            echo "<script>document.getElementsByName('txt_address')[0].value ='471 GSIS Rd, San Mateo, Rizal'</script>";
        }
        elseif(($_POST['nearestt']) == "MLQU Quarantine Facility"){
            echo "<script>document.getElementsByName('txt_address')[0].value ='MLQU Research Center, Quiapo, Manila, 1001 Metro Manila'</script>";
        }
        elseif(($_POST['nearestt']) == "Kamia Residence Hall"){
            echo "<script>document.getElementsByName('txt_address')[0].value ='M32C+Q45, Quirino Avenue, Diliman, Lungsod Quezon, Kalakhang Maynila'</script>";
        }
        elseif(($_POST['nearestt']) == "Bagong Sibol Quarantine Facility"){
            echo "<script>document.getElementsByName('txt_address')[0].value ='53, 1800 Camia St, Nangka, Marikina, 1800 Metro Manila'</script>";
        }
        elseif(($_POST['nearestt']) == "Delpan Quarantine Facility"){
            echo "<script>document.getElementsByName('txt_address')[0].value ='74, 1006 Delpan St, San Nicolas, Manila, Metro Manila'</script>";
        }
        elseif(($_POST['nearestt']) == "Rosario Maclang Bautista General Hospital"){
            echo "<script>document.getElementsByName('txt_address')[0].value ='M3PQ+FHM, Batasan Rd, Quezon City, Metro Manila'</script>";
        }
        elseif(($_POST['nearestt']) == "San Mateo Medical Center"){
            echo "<script>document.getElementsByName('txt_address')[0].value ='M3PQ+FHM, Batasan Rd, Quezon City, Metro Manila'</script>";
        }
    }



?>