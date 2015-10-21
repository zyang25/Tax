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

	//Bean2
	$bean2 = $xml->addChild('bean');
	$bean2->addAttribute('id','tax');
	$bean2->addAttribute('class','zheng.tax.Blanks');

	//Property node
	$property7 = $bean2->addChild('property');
	$property7->addAttribute('name','blank_1');
	$property7->addChild('value',$_POST['b1']);

	//Property node
	$property7 = $bean2->addChild('property');
	$property7->addAttribute('name','blank_2');
	$property7->addChild('value',$_POST['b2']);

	//Property node
	$property7 = $bean2->addChild('property');
	$property7->addAttribute('name','blank_3');
	$property7->addChild('value',$_POST['b3']);

	//Property node
	$property7 = $bean2->addChild('property');
	$property7->addAttribute('name','blank_4');
	$property7->addChild('value',$_POST['b4']);

	//Property node
	$property7 = $bean2->addChild('property');
	$property7->addAttribute('name','blank_5');
	$property7->addChild('value',$_POST['b5']);

	//Property node
	$property7 = $bean2->addChild('property');
	$property7->addAttribute('name','blank_11');
	$property7->addChild('value',$_POST['b11']);

	//Property node
	$property7 = $bean2->addChild('property');
	$property7->addAttribute('name','blank_15');
	$property7->addChild('value',$_POST['b15']);

	//Property node
	$property7 = $bean2->addChild('property');
	$property7->addAttribute('name','blank_18a');
	$property7->addChild('value',$_POST['b18a']);

	//Property node
	$property7 = $bean2->addChild('property');
	$property7->addAttribute('name','blank_18b');
	$property7->addChild('value',$_POST['b18b']);

	//Property node
	$property7 = $bean2->addChild('property');
	$property7->addAttribute('name','blank_19');
	$property7->addChild('value',$_POST['b19']);

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
function downloadPDF(){
	
}
postXML();


?>