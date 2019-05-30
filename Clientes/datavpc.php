<?php
#$contents = file_get_contents('sh /home/ec2-user/html/bin/aws/vpcaws.sh us-east-2 json vpc-038bd4785e1666ad4');
$salida = shell_exec('sh /u01/app/hbuser/admin/scripts/bin/aws/vpcaws.sh');
#$salida = shell_exec('sh /u01/app/hbuser/admin/scripts/bin/aws/help.sh');
#$salida = shell_exec($contents);
//var_dump(json_decode($salida));
$arreglo=json_decode($salida, true);

//print_r($arreglo->Reservations[0]->Instances[1]->PrivateIpAddress);
//print_r($arreglo->Reservations[0]->Instances[0]->PrivateIpAddress); 

getMetadaAws($arreglo);

//var_dump(json_encode($array));


function getMetadaAws($matriz){
	//echo "denttro";
	//echo "<br>";
	foreach($matriz as $clave1){
		
		foreach($clave1 as $clave2){		
	
			foreach($clave2 as $clave3){		
				foreach($clave3 as $clave4=>$elemet){
		$getcount = sizeof($clave3);
				//echo "$clabessss:<br>";
				//echo count($clave3);
				//echo $elemet[PrivateIpAddress]."<br>";
				for($i=0;$i<$getcount;$i++) { 
				$x[$i]= $clave3[$i][PrivateIpAddress];
				}
				//echo $x;	
				while(list($clave,$valor)=each($elemet)){
					$data= $clave=$valor;	
				$arreg[]=$data;
				//echo "$clave=$valor<br>";	
				}
				//echo "<br>";
				}
		
			}	
		}	
	}	
	var_dump($x);
	//$numero_colores = sizeof($clave3);
	//echo "Número de colores en el array: " . $numero_colores;
 }
?>


