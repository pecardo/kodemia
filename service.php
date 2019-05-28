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
		
		/*NO SE USA 
		foreach ($AirTravelersInfo as $id => $val) {
			var_dump($id);
			var_dump($val);
			echo "AirTravelersInfo ==============================AirTravelersInfo";
			die();
		}*/

		foreach ($AirItineraries as $id => $val) {
			$data_json['flights'][$count]['id'] = ((string) $val->ItineraryID); 
			$data_json['flights'][$count]['salida'] = ( (string) $val->DepartureDateTime); 
			$data_json['flights'][$count]['llegada'] = ( (string) $val->ArrivalDateTime); 
			$data_json['flights'][$count]['lugar_llegada'] = ((string) $val->ArrivalAirportLocationCode); 
			$data_json['flights'][$count]['lugar_salida'] = (trim($val->DepartureAirportLocationCode));
			$data_json['flights'][$count]['duration']['hours'] = ((string)$val->TotalDuration);
			$data_json['flights'][$count]['scalas'] = ((string) $val->SegmentNumber);
			


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
				$data_json['flights'][$count]['journey']['departure']['date']['fecha'] = $fecha ;  
				$data_json['flights'][$count]['journey']['departure']['date']['hora'] =  $hora;  
				$data_json['flights'][$count]['journey']['departure']['terminal'] = (string)$valLeg->AirItineraryLeg[$count]->DepartureAirportTerminal; 

				$data_json['flights'][$count]['journey']['arrival']['airport']['code'] =  (string)$valLeg->AirItineraryLeg[$count]->ArrivalAirportLocationCode; 
				$data_json['flights'][$count]['journey']['arrival']['date'] = (string) $valLeg->AirItineraryLeg[$count]->ArrivalDateTime;  
				$data_json['flights'][$count]['journey']['arrival']['terminal'] = (string)$valLeg->AirItineraryLeg[$count]->ArrivalAirportTerminal;
				$data_json['flights'][$count]['journey']['flag_id'] =(string)$valLeg->AirItineraryLeg[$count]->FlightNumber; 
				
				$count ++;
			}
			/*echo "<pre>";
				print_r($data_json);
				echo "</pre>";
			echo "--------------------------------";*/
		}
		$cont_group = count($AirPricingGroups->AirPricingGroup);
		$cont_group_options = 0;		
		foreach ($AirPricingGroups->AirPricingGroup as $id => $val) {
			$id = (string)$val->PricingGroupID;
			$AdultTicketAmount = (string)$val->AdultTicketAmount;
			$ChildrenTicketAmount = (string)$val->ChildrenTicketAmount;
			$InfantTicketAmount = (string)$val->InfantTicketAmount;
			$AdultTaxAmount = (string)$val->AdultTaxAmount;
			$ChildrenTaxAmount = (string)$val->ChildrenTaxAmount;
			$InfantTaxAmount = (string)$val->InfantTaxAmount;
			$AgencyFeeAmount = (string)$val->AgencyFeeAmount;
			$AramixFeeAmount = (string)$val->AramixFeeAmount;
			$DiscountAmount = (string)$val->DiscountAmount;
			$LastTicketDate = (string)$val->LastTicketDate;
			$FareNotes[] = $val->FareNotes;
			$AirPricingGroupOption[] = $val->AirPricingGroupOptions;

			$data_json['grupo_precios'][$id]['id'] = $id ;
			$data_json['grupo_precios'][$id]['AdultTicketAmount'] = $AdultTicketAmount ;
			$data_json['grupo_precios'][$id]['ChildrenTicketAmount'] = $ChildrenTicketAmount ;
			$data_json['grupo_precios'][$id]['InfantTicketAmount'] = $InfantTicketAmount ;
			$data_json['grupo_precios'][$id]['AdultTaxAmount'] = $AdultTaxAmount ;
			$data_json['grupo_precios'][$id]['ChildrenTaxAmount'] = $ChildrenTaxAmount ;
			$data_json['grupo_precios'][$id]['InfantTaxAmount'] = $InfantTaxAmount ;
			$data_json['grupo_precios'][$id]['AgencyFeeAmount'] = $AgencyFeeAmount ;
			$data_json['grupo_precios'][$id]['AramixFeeAmount'] = $AramixFeeAmount ;
			$data_json['grupo_precios'][$id]['DiscountAmount'] = $DiscountAmount ;
			$data_json['grupo_precios'][$id]['LastTicketDate'] = $LastTicketDate ;
			$data_json['grupo_precios'][$id]['notes'] = $FareNotes ;
			$data_json['grupo_precios'][$id]['AirPricingGroupOption'] = $AirPricingGroupOption ;

		echo "<pre>";
		print_r($data_json['grupo_precios'][$id]);
		echo "</pre>";
		echo "AirPricingGroups ==============================AirPricingGroups";
		}
		
	}
	

?>
	