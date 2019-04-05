<?php 
$countGunmen = 0;
for($i = 0; $i < count($rowsArray); $i++){
	$isSafe = true;
	for($j = 1; $j < count($rowsArray[$i]); $j++){
		if($i == 0){
			$columnItem = $rowsArray[$i][$j];
			if($columnItem == 1){
				if($isSafe == true){
					$rowsArray[$i][$j] = 3;
					$isSafe = false;
					$countGunmen = $countGunmen + 1;
				} 
			} else {
			$isSafe = true;
			}
		} else {
			$prevRow = $i - 1;
			$columnItem = $rowsArray[$i][$j];
			if($columnItem == 1){
				$prevColumnItem = $rowsArray[$prevRow][$j]; 
				if($isSafe == true){ 
					if($prevColumnItem == 3 || $prevColumnItem == 4){ 
					$rowsArray[$i][$j] = 4;
					} else {
					$rowsArray[$i][$j] = 3;
					$isSafe = false;
					$countGunmen = $countGunmen + 1; 
					}
				} else {
						if($prevColumnItem == 3 || $prevColumnItem == 4){
						$rowsArray[$i][$j] = 4;
						} 
				}
			} else {
			$isSafe = true;
			}
		}
	}
}
?>