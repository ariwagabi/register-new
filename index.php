<?php
include 'config.php';
include 'acessAPI.php';

$APIObj = new Token();

// On Submit of the form..
if (isset($_POST['submit'])) {
    if (isset($_POST['firstName'])) {
        $FirstName = $_POST['firstName'];
    }
    if (isset($_POST['lastName'])) {
        $LastName = $_POST['lastName'];
    }
    if (isset($_POST['email'])) {
        $Email = $_POST['email'];
    }
    $Telephone = $_POST['telephone'];
    $ZipCode = $_POST['zipcode'];
    $Preference = $_POST['preference'];
    $Gender = $_POST['gridRadios'];
    $Skills = $_POST['rate'];
    $Date = $_POST['date'];
    if (isset($_POST['comment'])) {
        $Comment = trim($_POST['comment']);
    } else {
        $Comment = "";
    }

    if (isset($_POST['subscribe'])) {
        $Subscribe = 1;
    } else {
        $Subscribe = 0;
    }

    $APIObj->AddFormDetails($FirstName, $LastName, $Email, $Telephone, $ZipCode, $Preference, $Gender, $Skills, $Date, $Comment, $Subscribe);
    $_POST['success'] = "Submit";

}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IFormBuilder</title>
        
        <!-- CDN for Jquery -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        
        <!-- Bootstrap CSS and Minified JS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <script src="jquery.barrating.min.js"></script>
        
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="styles.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <h1>IFormBuilder<sup class="h1tm">TM</sup></h1>
                    <p>This is a sample Form Page.</p>
                    
                    <div class="col-md-5 IformBuilder_form">
                    <p id="errorAdd" class="row"></p>
                        <?php if (!isset($_POST['success'])) { ?>
                            <form method="post" action="index.php">
                                <div class="form-group row">
                                    <label for="formGroupFirstNameInput">First Name<span>*</span></label>
                                    <input type="text" name="firstName" class="form-control" id="formGroupFirstNameInput" placeholder="First Name">
                                </div>
                                <div class="form-group row">
                                    <label for="formGroupLastNameInput">Last name<span>*</span></label>
                                    <input type="text" name="lastName" class="form-control" id="formGroupLastNameInput" placeholder="Last Name">
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3">Email<span>*</span></label>
                                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                                <div class="form-group row">
                                  <label for="tel-input" class="col-2 col-form-label">Telephone<span>*</span></label>
                                  <div class="col-10">
                                    <input class="form-control" name="telephone" type="tel" value="" id="tel-input" placeholder="(555) 555-5555" >
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="zip-input" class="col-2 col-form-label">ZipCode<span>*</span></label>
                                  <div class="col-10">
                                    <input class="form-control" name="zipcode" type="number_format" value="" id="zip-input" placeholder="Zip">
                                  </div>
                                </div>
                            
                                <div class="form-group row">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Preference<span>*</span></label>
                                  <select class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" name="preference" id="inlineFormCustomSelect">
                                    <option selected>Choose</option>
                                    <option value="red">Red</option>
                                    <option value="blue">Blue</option>
                                    <option value="green">Green</option>
                                    <option value="Orange">Orange</option>
                                    <option value="Yellow">Yellow</option>
                                    <option value="Brown">Brown</option>
                                    <option value="Black">Black</option>
                                    <option value="Pink">Pink</option>
                                  </select>
                                  </div>
                                  <fieldset class="form-group row">
                                  <legend class="col-form-legend col-sm-2">Gender<span>*</span></legend>
                                  <div class="col-sm-10">
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Male" >
                                        Male
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Female">
                                        Female
                                      </label>
                                    </div>
                                  </div>
                                </fieldset>
                                 <label class="form-check-label"> <p>Rate Experience</p> </label>
                                <div class="form-group" id="slider">
                                      <div id="custom-handle" class="ui-slider-handle"></div>
                                      <input type="hidden" id="rate" name="rate" value=""/>
                                </div>
                             
                                <div class="form-group row"> <!-- Date input -->
                                    <label class="control-label" for="date">Date<span>*</span></label>
                                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                                 </div>
                            
                                <div class="form-group row">
                                    <label for="commentTextarea">Comment</label>
                                    <textarea class="form-control" name="comment" id="commentTextarea" rows="3"></textarea>
                                </div>
                                <div class="form-group"><b>Subscription</b>
                                    <input checked data-toggle="toggle" name="subscribe" type="checkbox" value="" />
                                </div>
                                <p><span class="req">*</span> Required fields</p>
                                <button type="submit" id="submit" name="submit" class="btn btn-primary" onclick="return  submitForm()">Submit</button>
                            
                            </form><?php } else { ?>
                            <h2 class="success">Sucessfully submitted the data <a href="index.php">Back</a></h2>
                        <?php } ?>
                    </div>
                </div>
            
            </div>				
        </div>
        <footer>
        <p>Version: 1.00 </p>
        <p>2017 &copy; All Rights Reserved</p>
        </footer>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
      
      $("#tel-input").mask("(000) 000-0000");
    
        var handle = $( "#custom-handle" );
        var rate = $( "#slider" ).slider({
            max: 10,
            create: function() {
                handle.text( $( this ).slider( "value" ) );
            },
            slide: function( event, ui ) {
                handle.text( ui.value );
                $("#rate").val(ui.value );
            }
        });	 
});
function submitForm(){
    var error = "false";
     if($("#formGroupFirstNameInput").val() == null || $("#formGroupFirstNameInput").val().trim().length == 0){
         $("#formGroupFirstNameInput").addClass("error");
         error = "true";
     }else{
         $("#formGroupFirstNameInput").removeClass("error");
     }
     if($("#formGroupLastNameInput").val() == null || $("#formGroupLastNameInput").val().trim().length == 0){
         $("#formGroupLastNameInput").addClass("error");
         error = "true";
     }else{
         $("#formGroupLastNameInput").removeClass("error");
     }
     if($("#inputEmail3").val() == null || $("#inputEmail3").val().trim().length == 0){
         $("#inputEmail3").addClass("error");
         error = "true";
     }else{
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (reg.test($("#inputEmail3").val()) == false) 
        {
            $("#inputEmail3").addClass("error");
            error = "true";
        }else{
            $("#inputEmail3").removeClass("error");
        }
     }
     if($("#tel-input").val() == null || $("#tel-input").val().trim().length == 0){
         $("#tel-input").addClass("error");
         error = "true";
     }else{
         if($("#tel-input").val().trim().length == 14){
             $("#tel-input").removeClass("error");
         }else{
              $("#tel-input").addClass("error");
            error = "true";
         }
         
     }
     if($("#zip-input").val() == null || $("#zip-input").val().trim().length == 0){
         $("#zip-input").addClass("error");
         error = "true";
     }else{
         if($("#zip-input").val().trim().length == 5){
             $("#zip-input").removeClass("error");
         }else{
              $("#zip-input").addClass("error");
            error = "true";
         }
     }
     if($("#inlineFormCustomSelect").val() == "Choose" || $("#inlineFormCustomSelect").val().trim().length == 0){
         $("#inlineFormCustomSelect").addClass("error");
         error = "true";
     }else{
         $("#inlineFormCustomSelect").removeClass("error");
     }
     if($("#date").val() == null || $("#date").val().trim().length == 0){
         $("#date").addClass("error");
         error = "true";
     }else{
         $("#date").removeClass("error");
     }
     if(error == "true"){
         document.getElementById("errorAdd").innerHTML = "Complete the details!!";
         document.getElementById('errorAdd').scrollIntoView();
         return false;
     }else{
         document.getElementById("errorAdd").innerHTML = "";
         return true;
     }
};	
    </script>
    
    </body>
</html> 