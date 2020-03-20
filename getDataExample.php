<?php

// Json URL
$url = 'https://github.com/stefanobeta/Covid-19-Json-Data-Italy/raw/master/covid.json';

// Get Json
$json = file_get_contents($url);
$data = json_decode($json, true);

/*

 $data stores the values: [date][infos];
 - date is a String format ['YYYY-MM-DD']
 - infos are Int and can be:
 	['confirmed']: total of cases till the date you choose
 	['positive']: number of positive people till the date you choose
 	['deaths']: number of deaths till the date you choose
 	['recovered']: number of recovered people till the date you choose

*/

$recoveredOn18thOfMarch = $data['2020-03-18']['recovered'];
echo 'Recovered people on 18th of March in Italy are '.$recoveredOn18thOfMarch;

