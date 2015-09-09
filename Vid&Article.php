 
 
 <?php
 
 $id = 7;
 $product_name = 8;
 $price = 9;
 echo '<table width="100%" border="1" cellspacing="1" cellpadding="6">
        <tr>
          <td width="17%" valign="top"><a href="product.php?id=' . $id . '"><img style="border:#666 1px solid;" src="inventory_images/' . $id . '.jpg" alt="' . $product_name . '" width="77" height="102" border="1" /></a></td>
          <td width="83%" valign="top">' . $product_name . '<br />
            $' . $price . '<br />
            <a href="product.php?id=' . $id . '">View Product Details</a></td>
        </tr>
      </table>';
 
 
 ?>

 <html>
 <head>
 <style>
 #shell{
 position: relative;
 width: 100%;
 height: 1200px;
 border: 3px solid black;
 ackground-color: #6094DB;
 background-color:#C9DECB;
 }
 #a1{
 margin: 12px;
float: left;
 height: 100%;
 margin-left: 1%;
 padding: 12px;
 width: 32%;
 border: 8px solid white;
 background-color:#A5FEFA;
 }
 #a2{
  margin: 12px;
float: left;
  margin-left: 1%;
	position: relative; 
   height: 100%;
	width: 59%;
	font-size: 32px;
	font-family: tahoma;
	background-color:#A5FEFA;
	height: 100%;
	border: 7px solid black;

 }
 a2.p{
 padding: 40px;
 margin: 15px;
 }
  #a2a{
  padding: 4%;

	position: relative; 
   height: 90%;
margin-left: 3%;
margin-right: 3%;
margin-top: 3%;
margin-bottom: 2%;


	font-size: 32px;
	font-family: tahoma;
	background-color: black;  
	
	border: 7px solid black;

 }

 #tb{
 height: 700px;
 width: 95%;
 border: 1px solid black;
padding: 0px;
margin: 0px;
position: relative;

 
 }
 #tb th, td{
  border: 9px solid black;
  color: blue;
  padding: 0px;
margin: 0px; 

  
  
  
 }
 </style>
 </head>
 <body>

 <div id="shell">
 <div id="a1">
   <iframe width="470" height="315" src="//www.youtube.com/embed/xeBHshlQu88" frameborder="0" allowfullscreen></iframe>
   <br>
   <br>
  <iframe width="470" height="315" src="//www.youtube.com/embed/JE-dV2Ls4wk" frameborder="0" allowfullscreen></iframe>
  <br>
  <br>
   <iframe width="470" height="315" src="//www.youtube.com/embed/xeBHshlQu88" frameborder="0" allowfullscreen></iframe>
 </div>
 <div id="a2">
 <div id="a2a">
 <p id="dmo"></p>
 
<p id="demo"></p>

<p id="demo3"></p>

<p id="demo4"></p>

<p id="demo1"></p>

<p id="demo2"></p>
</div>
 </div>
 </div>



<script>
var wrd = setInterval(function() {ryFunction()}, 3000);
 function ryFunction() {
   	var r = document.getElementById("dmo");
   r.innerHTML = "Solving a problem can be a lot like finding a treasure.";
    r.style.fontSize = "30px"; 
	r.style.fontFamily = "Tahoma"; 
	
    r.style.color = "white";
}

var wrd = setInterval(function() {myFunction()}, 5200);
 function myFunction() {
   	var x = document.getElementById("demo");
   x.innerHTML = "In both cases your mind orients itself to the next best course " +
  "of action. The mind often does this by asking questions: ";
    x.style.fontSize = "35px"; 
	x.style.fontFamily = "Courier"; 
   x.style.color = "white";
}

var wrd = setInterval(function() {cyFunction()}, 7200);
 function cyFunction() {
   	var c = document.getElementById("demo3");
   c.innerHTML = "What will happen if I go left?";
    c.style.fontSize = "35px"; 
	c.style.fontFamily = "Courier"; 
   c.style.color = "white";
}

var wrd = setInterval(function() {rryFunction()}, 9200);
 function rryFunction() {
   	var rrd = document.getElementById("demo4");
   rrd.innerHTML = "What do I visualize the treasure being next to?";
    rrd.style.fontSize = "35px"; 
	rrd.style.fontFamily = "Courier"; 
   rrd.style.color = "white";
}


var wrd = setInterval(function() {tyFunction()}, 11500);
 function tyFunction() {
 
	var y = document.getElementById("demo1");
   y.innerHTML = "Simply by asking questions, the mind prepares itself to take the next step going forward.";
    y.style.fontSize = "45px";           
    y.style.color = "white"; 
}

var wrd = setInterval(function() {uyFunction()}, 15000);
 function uyFunction() {
 
	var q = document.getElementById("demo2");
   q.innerHTML = "What questions can you ask that will prepare yourself to take on the next challenge.";
    q.style.fontSize = "55px";   
	q.style.fontFamily = "Tahoma";
    q.style.color = "white"; 
}

</script>


 </body>
 </head>
 </html>

 
 
 
 
