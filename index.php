<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Tax</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/index.css" rel="stylesheet">
  </head>
  <body>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

<form class="form-horizontal" action="xml_parser.php" method="POST">

<fieldset>

<!-- Form Name -->
<legend align="center">Personal Information</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name:</label>  
  <div class="col-md-4">
  <input id="textinput" name="first_name" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last Name:</label>  
  <div class="col-md-4">
  <input id="textinput" name="last_name" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Identify Number:</label>  
  <div class="col-md-4">
  <input id="textinput" name="id" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Present Home Address1:</label>  
  <div class="col-md-4">
  <input id="textinput" name="address1" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Present Home Address2:</label>  
  <div class="col-md-4">
  <input id="textinput" name="address2" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Foreign Country Name:</label>  
  <div class="col-md-4">
  <input id="textinput" name="fcn" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Foreign Province:</label>  
  <div class="col-md-4">
  <input id="textinput" name="fp" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Foreign Post Code:</label>  
  <div class="col-md-4">
  <input id="textinput" name="fpc" type="text" placeholder="" class="form-control input-md" required="">   
  </div>
</div>



<!-- Second Bean -->
<legend align="center">Tax Information</legend>
<div class="row">
<div class="col-md-6">  
    <label class="col-md-12 control-label"><input type="checkbox" value="" name="b1">Single nonresident alien</label>
</div>
<div class="col-md-6"> 
    <label class="col-md-5 control-label"><input type="checkbox" value="" name="b2">Married nonresident alien</label>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Wages, salaries, tips</label>
  <div class="col-md-4">
    <input id="textinput" name="b3" type="text" class="form-control input-md" required="">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Taxable refunds, credits, or offsets of state and local income taxes</label>
  <div class="col-md-4">
    <input id="textinput" name="b4" type="text" class="form-control input-md" required="">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Scholarship and fellowship grants</label>
  <div class="col-md-4">
    <input id="textinput" name="b5" type="text" class="form-control input-md" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Itemized deductions</label>
  <div class="col-md-4">
    <input id="textinput" name="b11" type="text" class="form-control input-md" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Tax</label>
  <div class="col-md-4">
    <input id="textinput" name="b15" type="text" class="form-control input-md" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Federal income tax withheld from Form(s) W-2 and 1099-R</label>
  <div class="col-md-4">
    <input id="textinput" name="b18a" type="text" class="form-control input-md" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Federal income tax withheld from Form(s) 1042-S</label>
  <div class="col-md-4">
    <input id="textinput" name="b18b" type="text" class="form-control input-md" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">2014 estimated tax payments and amount applied from 2013 return</label>
  <div class="col-md-4">
    <input id="textinput" name="b19" type="text" class="form-control input-md" required>
  </div>
</div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label" for="textinput"></label>
  <div class="col-md-5">
    <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>



  </body>
</html>