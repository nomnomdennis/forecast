<?
  $code = htmlspecialchars($_POST["code"]);

  // build url

  $endpoint = "https://aviationweather.gov/adds/dataserver_current/httpparam?";
  $datasource = "dataSource=metars";
  $requestType = "requestType=retrieve";
  $format ="format=xml";
  $stationstring= "stationString=" + $code;
  $time_constraint = "hoursBeforeNow=1&mostRecent=true";


  $url = $endpoint + $datasource +"&"+ $requestType +"&"+ $format +"&"+ $stationstring +"&"+ $time_constraint;
  print_r($url);
  /*
  if (($response_xml_data = file_get_contents($url))===false){
      echo "Error fetching XML\n";
  } else {
     libxml_use_internal_errors(true);
     $data = simplexml_load_string($response_xml_data);
     if (!$data) {
         echo "Error loading XML\n";
         foreach(libxml_get_errors() as $error) {
             echo "\t", $error->message;
         }
     } else {
        print_r($data);
     }
  }
  */
?>
