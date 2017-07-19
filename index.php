<head>
<?php
error_reporting(0);

 $first = $_REQUEST['first'];
 $second= $_REQUEST['second'];
 
 $first2 = (int)$first;
 $second2 = (int)$second;
 
 
if (isset($_REQUEST['solve'])) {
      
	  $op = $_REQUEST['op'];
    
	if ($op == 'add') {
	  
 	  $add = $first2 + $second2;
	  
	  $title .="The sum of ".$first2. " and " .$second2. 
	           " is " .$add.".";
     }	  
if ($op == 'subtract') {
	  
 	  $subtract = $first2 - $second2;
	  
	  $title .="The difference between ".$first2. " and " .$second2. 
	           " is " .$subtract.".";
	$op = ' checked="checked"';
     }	  	 

if ($op == 'times') {
	  
 	  $product = $first2 * $second2;
	  
	  $title .="The product of ".$first2. " and " .$second2. 
	           " is " .$product.".";
     }	  	 
if ($op == 'divide') {
	  
 	  $quotient = $first2 / $second2;
	  
	  $title .="The quotient of ".$first2. " and " .$second2. 
	           " is " .$quotient.".";
     }	  
}	 
	 
    if(isset($_REQUEST['clear'])) {
      $first2 = " ";
      $second2 = " ";
      $result= " ";
   }
?>

<title>Calculator in PHP</title>
</head>
<style>
body {
     background-color: lightgreen;
	 font-family:arial;
	 font-style:bold;
	 font-size:22px; 
     font-family:arial;
     color:blue;
	 }
  
input
{
  -moz-border-radius: 15px;
    border-radius: 15px;
    border:solid 3px BLUE;
    padding:8px;
}
input {
  display: table-cell;
}

 label{
    display: table-cell;
    text-align: justify;
}
div.row{
    display:table-row;
}

/***FIRST STYLE THE BUTTON***/
button#gobutton{
cursor:pointer; /*forces the cursor to change to a hand when the button is hovered*/
padding:5px 25px; /*add some padding to the inside of the button*/
background:white; /*the colour of the button*/
border:1px solid #33842a; /*required or the default border for the browser will appear*/
/*give the button curved corners, alter the size as required*/
-moz-border-radius: 6px;
-webkit-border-radius: 6px;
border-radius: 6px;
/*give the button a drop shadow*/
-webkit-box-shadow: 0 0 4px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 4px rgba(0,0,0, .75);
box-shadow: 0 0 4px rgba(0,0,0, .75);
/*style the text*/
color:blue;
font-size:1.1em;
}
/***NOW STYLE THE BUTTON'S HOVER AND FOCUS STATES***/
button#gobutton:hover, button#gobutton:focus{
background-color :brown; /*make the background a little darker*/
/*reduce the drop shadow size to give a pushed button effect*/
-webkit-box-shadow: 0 0 1px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 1px rgba(0,0,0, .75);
box-shadow: 0 0 1px rgba(0,0,0, .75);
}

 </style>

<body>
 
<div style='width:800px;margin:auto'>
<form>
<H2> Calculator in PHP </h2>
<div class="row"><label> FIRST VALUE 
<input type="text" id="first" name="first" placeholder="enter first value"
 value="<?php echo $first; ?>" autofocus required size=10></label></div><br>
<div class="row"> <label> SECOND VALUE
<input type="text" id="second" name="second" placeholder="enter second value"
 value="<?php echo $second; ?>" autofocus required size=10></label> </div>
<br>
<input type="radio" name="op"  value="add" <?php if($_REQUEST['op'] == "add") echo "checked"; ?>>ADDITION
<input type="radio" name="op"  value="subtract"  <?php if($_REQUEST['op'] == "subtract") echo "checked"; ?> >SUBTRACTION
<input type="radio" name="op"  value="times"  <?php if($_REQUEST['op'] == "times") echo "checked"; ?>>MULTIPLICATION
<input type="radio" name="op"  value="divide" <?php if($_REQUEST['op'] == "divide") echo "checked"; ?>>DIVISION
<br><br>
<button id="gobutton" type="submit" name="solve" id="solve" value="answer"
 title="Click here to find the result.">Solve</button>
<button id="gobutton" type="submit" name="clear" id="clear" value="answer"
title="Click here to clear text fields.">Clear</button>
</form>
<br> 
<?php
echo $title;
?>
</body> </div>
</html>

