<?php
$myfile = fopen("newbeans.xml", "w") or die("Unable to open file!");

function xml(){
	$xml=simplexml_load_file("Beans.xml") or die("Error: Cannot open xml");	
	//Bean node
	$bean = $xml->addChild('bean');
	$bean->addAttribute('id','personalInfo');
	$bean->addAttribute('class','com.charles.app.personalInformation');
	
	//Property node
	$property1 = $bean->addChild('property');
	$property1->addAttribute('name','firstName');
	$property1->addChild('value',$_POST['first_name']);
	
	//Property node
	$property2 = $bean->addChild('property');
	$property2->addAttribute('name','lastName');
	$property2->addChild('value',$_POST['last_name']);

	//Property node
	$property3 = $bean->addChild('property');
	$property3->addAttribute('name','idNumber');
	$property3->addChild('value',$_POST['id']);

	//Property node
	$property4 = $bean->addChild('property');
	$property4->addAttribute('name','presentHomeAdd');
	$property4->addChild('value',$_POST['address1']);

	//Property node
	$property4 = $bean->addChild('property');
	$property4->addAttribute('name','presentHomeAdd2');
	$property4->addChild('value',$_POST['address2']);

	//Property node
	$property5 = $bean->addChild('property');
	$property5->addAttribute('name','foreignCountryName');
	$property5->addChild('value',$_POST['fcn']);

	//Property node
	$property6 = $bean->addChild('property');
	$property6->addAttribute('name','foreignProvince');
	$property6->addChild('value',$_POST['fp']);

	//Property node
	$property7 = $bean->addChild('property');
	$property7->addAttribute('name','foreignPostCode');
	$property7->addChild('value',$_POST['fpc']);

	fwrite($GLOBALS['myfile'], $xml->saveXML());
	
	return $xml->saveXML();
}
function postXML(){
			$xmldata = xml();
			$ch = curl_init('http://localhost:8080/test');
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
			curl_setopt($ch, CURLOPT_POSTFIELDS, $xmldata);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$output = curl_exec($ch);
			curl_close($ch);
}

postXML();


?>