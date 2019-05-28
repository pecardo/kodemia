<?php
	
	error_reporting(E_ALL);


	header("Content-Type: text/plain\r\n");
 
	$xmlFile = 'response2.xml';
	 
	$file = fopen( $xmlFile, 'r' );
	$content = fread( $file, filesize($xmlFile) );
	fclose( $file );
	$rcXML = simplexml_load_string($content);
	$results = $rcXML->children("http://schemas.xmlsoap.org/soap/envelope/")->Body->children('http://webservices.aramix.es')->children();
	$count = 0;
	$RequestID = "";
	$AirAvail = array();
	$AirItineraries = array();
	$AirPricingGroups = array();
	$AirTravelersInfo = array();
	$data_json = [];
	foreach ($results as $key => $nodo) {
		$RequestID = $nodo->RequestID;		
		$AirTravelersInfo = $nodo->AirAvail->AirTravelersInfo;
		$AirItineraries  = $nodo->AirAvail->AirItineraries->AirItinerary;
		$AirPricingGroups = $nodo->AirAvail->AirPricingGroups;
		echo "End ============================== End ";


		/*NO SE USA 
		foreach ($AirTravelersInfo as $id => $val) {
			var_dump($id);
			var_dump($val);
			echo "AirTravelersInfo ==============================AirTravelersInfo";
			die();
		}*/

		foreach ($AirItineraries as $id => $val) {
			$data_json['flights'][$count]['id'] = ( $val->AirItinerary->ItineraryID); 
			$data_json['flights'][$count]['salida'] = json_encode($val->AirItinerary->DepartureDateTime); 
			$data_json['flights'][$count]['llegada'] = json_encode($val->AirItinerary->ArrivalDateTime); 
			$data_json['flights'][$count]['lugar_llegada'] = json_encode($val->AirItinerary->ArrivalAirportLocationCode); 
			$data_json['flights'][$count]['lugar_salida'] = json_encode(trim($val->AirItinerary->DepartureAirportLocationCode));
			$data_json['flights'][$count]['duration']['hours'] = json_encode($val->AirItinerary->TotalDuration);
			$data_json['flights'][$count]['scalas'] = json_encode($val->AirItinerary->SegmentNumber);
			


			foreach ($val->AirItineraryLegs as $idLeg => $valLeg) {
				/*echo "key : " . $idLeg ." : key";
				echo "<pre> DENTRO";
				print_r($valLeg->AirItineraryLeg);
				echo "</pre>";
				echo "</br>---------------TERMINA-----------------</br>";die();*/
				echo (string) ($valLeg->AirItineraryLeg[$count]->DepartureDateTime);
				/*$data_json['flights'][$count]['journey'] = $valLeg;
				echo  (string)$valLeg;
				echo "Cuenta: ". $count ;*/			
			
				$data_json['flights'][$count]['journey']['TechnicalStops'] = (string) $valLeg->AirItineraryLeg[$count]->TechnicalStops;
				$data_json['flights'][$count]['journey']['departure']['airport']['code'] = (string) $valLeg->AirItineraryLeg[$count]->DepartureAirportLocationCode; 
				$fecha =  date('Y-m-d' , strtotime($valLeg->AirItineraryLeg[$count]->DepartureDateTime));
				$hora =  date('H:i:s' , strtotime($valLeg->AirItineraryLeg[$count]->DepartureDateTime));
				echo ($fecha);
				echo ($hora);
				$data_json['flights'][$count]['journey']['departure']['date']['fecha'] = $fecha ;  
				$data_json['flights'][$count]['journey']['departure']['date']['hora'] =  $hora;  
				$data_json['flights'][$count]['journey']['departure']['terminal'] = (string)$valLeg->AirItineraryLeg[$count]->DepartureAirportTerminal; 

				$data_json['flights'][$count]['journey']['arrival']['airport']['code'] =  (string)$valLeg->AirItineraryLeg[$count]->ArrivalAirportLocationCode; 
				$data_json['flights'][$count]['journey']['arrival']['date'] = (string) $valLeg->AirItineraryLeg[$count]->ArrivalDateTime;  
				$data_json['flights'][$count]['journey']['arrival']['terminal'] = (string)$valLeg->AirItineraryLeg[$count]->ArrivalAirportTerminal;
				$data_json['flights'][$count]['journey']['flag_id'] =(string)$valLeg->AirItineraryLeg[$count]->FlightNumber; 
				
				$count ++;
			}
			echo "<pre>";
				print_r($data_json);
				echo "</pre>";
			echo "--------------------------------";
		}
		var_dump($data_json);
		die();
		foreach ($AirPricingGroups->AirPricingGroup as $id => $val) {
			var_dump('id',$id);			
			var_dump($val);	
			echo "AirPricingGroups ==============================AirPricingGroups";
		}
		
		if($count > 5)
			die();
		echo 'ID : '. $RequestID;
	}
	die();
	var_dump($results);

	
	 
	echo PHP_EOL."End ==============================".PHP_EOL.PHP_EOL;



?>
	