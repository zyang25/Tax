<!DOCTYPE html>
<html>
<head>
	<title>PDF download</title>
	<script type="text/javascript" src="js/pdfobject.js"></script>
</head>
<body>

<script type="text/javascript">
    window.onload = function (){
      var myPDF = new PDFObject({ url: "http://54.193.93.188:8181/getPDF" }).embed();
      if(myPDF){
  			//do something
		}	
    };
</script>

</body>
</html>