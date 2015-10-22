<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="0;URL=/home/ec2-user/Tax/1040result.pdf" />
	<title>Processing</title>
</head>
<body>

</body>
</html>

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
	$bean2->addAttribute('class','com.charles.app.Blanks');

	//Property node
	$property8 = $bean2->addChild('property');
	$property8->addAttribute('name','blank_1');
	$property8->addChild('value',$_POST['b1']);

	//Property node
	$property9 = $bean2->addChild('property');
	$property9->addAttribute('name','blank_2');
	$property9->addChild('value',$_POST['b2']);

	//Property node
	$property10 = $bean2->addChild('property');
	$property10->addAttribute('name','blank_3');
	$property10->addChild('value',$_POST['b3']);

	//Property node
	$property11 = $bean2->addChild('property');
	$property11->addAttribute('name','blank_4');
	$property11->addChild('value',$_POST['b4']);

	//Property node
	$property12 = $bean2->addChild('property');
	$property12->addAttribute('name','blank_5');
	$property12->addChild('value',$_POST['b5']);

	//Property node
	$property13 = $bean2->addChild('property');
	$property13->addAttribute('name','blank_11');
	$property13->addChild('value',$_POST['b11']);

	//Property node
	// $property14 = $bean2->addChild('property');
	// $property14->addAttribute('name','blank_15');
	// $property14->addChild('value',$_POST['b15']);

	//Property node
	$property15 = $bean2->addChild('property');
	$property15->addAttribute('name','blank_18a');
	$property15->addChild('value',$_POST['b18a']);

	//Property node
	$property16 = $bean2->addChild('property');
	$property16->addAttribute('name','blank_18b');
	$property16->addChild('value',$_POST['b18b']);

	//Property node
	$property17 = $bean2->addChild('property');
	$property17->addAttribute('name','blank_19');
	$property17->addChild('value',$_POST['b19']);

	//Property node
	$property18 = $bean2->addChild('property');
	$property18->addAttribute('name','blank_23a');
	$property18->addChild('value',$_POST['b23a']);

	//Property node
	$property19 = $bean2->addChild('property');
	$property19->addAttribute('name','blank_23b');
	$property19->addChild('value',$_POST['b23b']);

	//Property node
	$property20 = $bean2->addChild('property');
	$property20->addAttribute('name','blank_23c1');
	$property20->addChild('value',$_POST['b23c1']);

	//Property node
	$property21 = $bean2->addChild('property');
	$property21->addAttribute('name','blank_23c2');
	$property21->addChild('value',$_POST['b23c2']);

	//Property node
	$property22 = $bean2->addChild('property');
	$property22->addAttribute('name','blank_23d');
	$property22->addChild('value',$_POST['b23d']);

	//Property node
	$property23 = $bean2->addChild('property');
	$property23->addAttribute('name','blank_23e');
	$property23->addChild('value',$_POST['b23e']);

	//Property node
	$property23 = $bean2->addChild('property');
	$property23->addAttribute('name','blank_24');
	$property23->addChild('value',$_POST['b24']);



	fwrite($GLOBALS['myfile'], $xml->saveXML());
	
	return $xml->saveXML();
}
function postXML(){
			$xmldata = xml();
			$ch = curl_init('http://localhost:8181/test');
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