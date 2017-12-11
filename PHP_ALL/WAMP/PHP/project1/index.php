<?php include 'inc/header.php';?>

<hr>Form Validation<hr>
<div class="para">



<form id="myform" action="msg.php" method="post">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" id="username" required="1"></td>
			<td><span class="error_form" id="username_error_msg"></span></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" id="password" required="1"></td>
			<td><span class="error_form" id="password_error_msg"></span></td>
		</tr>
		<tr>
			<td>Password Again</td>
			<td><input type="text" id="password_again" required="1"></td>
			<td><span class="error_form" id="password_again_error_msg"></span></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" id="email" required="1"></td>
			<td><span class="error_form" id="email_error_msg"></span></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="submit"></td>
			<td></td>
		</tr>
	</table>
</form>

</div>


<hr>scroll to top/up<hr>
<div class="para5">
<P> i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country.
 i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country.
 i love my country.i love my country.</p>

<P> i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country.
 i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country.
 i love my country.i love my country.</p>
 
 <P> i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country.
 i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country.
 i love my country.i love my country.</p>
 <P> i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country.
 i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country.
 i love my country.i love my country.</p>

<P> i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country.
 i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country.
 i love my country.i love my country.</p>
 
 <P> i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country.
 i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country.
 i love my country.i love my country.</p>
 <P> i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country.
 i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country.
 i love my country.i love my country.</p>

<P> i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country.
 i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country. i love my country.i love my country.
 i love my country.i love my country.</p>
</div>


<hr>Dialogue Message with jQuery UI<hr>
<div class="para3">

<script>
$(document).ready(function(){	
	$("#dialogmsg").dialog();
	
});

</script>

<div id ="dialogmsg" title="This is my message">
	It is just for test.
</div>



</div>

<hr>Real use of jQuery-Tooltip Widget<hr>
<div class="para10">


<script>
$(document).ready(function(){
	$(document).tooltip();
});

</script>


<label id="lblname" for="textname" title="full name">Name</label>
<input type="text" id="textname" title="Your name will be here.."/>

</div>



<hr>Real use of jQuery-Menu Widget<hr>
<div class="para4">


<script>
$(document).ready(function(){
	$("#menu").menu();
});

</script>
<div class="menustyle">
<ul id="menu">
	<li>Website Design
		<ul>
			<li>HTML</li>
			<li>CSS</li>
			<li>Bootstrap</li>
		</ul>
	</li>
	
	<li>Website Development
		<ul>
			<li>PHP</li>
			<li>Java
				<ul>
					<li>JSP</li>
					<li>JSF</li>
					<li>Spring</li>
				</ul>			
			</li>
			<li>python</li>
		</ul>
	</li>
	<li class="ui-state-disabled">SEO</li>
	<li>Blogging</li>
</ul>


</div>
</div>


<hr>Increment Slider Values with jQuery<hr>
<div class="para4">

<script>
$(document).ready(function(){
	$("#slider").slider({
		value:100,
		min:0,
		max:500,
		step:50,
		slide:function(event, ui){
			$("#amount").val("TK. "+ui.value);
		}
	});
	$("#amount").val("TK. "+$("#slider").slider("value"));
});

</script>


<label for="amount">select price:</label>
<input type="text" id="amount" readonly style="fornt-weight:bold;color:green;margin-bottom:20px;"/>
<div id="slider"></div>


</div>


<hr>Handle Values with Range Slider<hr>
<div class="para6">

<script>
$(document).ready(function(){
	var getOutput = $("#Stat");
	var getSlider = $("#Slide");
	
	getSlider.slider({
		range:true,
		min:10,
		max:100,
		values:[20,40],
		slide: function(event, ui){
			getOutput.html(ui.values[0]+'-'+ui.values[1]+' Taka');
			$("#minValue").val(ui.values[0]);
			$("#maxValue").val(ui.values[1]);
		}
	});
	getOutput.html(getSlider.slider('values',0)+' - '+getSlider.slider('values',1)+' Taka');
	$("#minValue").val(getSlider.slider('values', 0));
	$("#maxValue").val(getSlider.slider('values', 1));
});
</script>

Amount:<span id="Stat"></span><br/>
<div id="Slide"></div><br/>

<table>
	<tr>
		<td><label for="minValue">Minimum Amount</label></td>
		<td><input type="text" id="minValue"/></td>
	</tr>	
	<tr>
		<td><label for="maxValue">Maximum Amount</label></td>
		<td><input type="text" id="maxValue"/></td>
	</tr>
</table>



</div>


<hr>Control Dimension with Multiple Sliders<hr>
<div class="para">



<script>
$(document).ready(function(){
	$("#imgHeight, #imgWidth").slider({
		min:100,
		max:500,
		slide:controlImg
	});
	
	$("#imgopacity").slider({
		min:0, max:100, value:100, slide:controlImg
	});
	
	
	function controlImg(){
		var height = $("#imgHeight").slider('value');
		var width = $("#imgWidth").slider('value');
		var opacity = $("#imgopacity").slider('value');
		
		$("#liveimg").css({
			height:height, width:width, opacity:opacity/100
		});
		$("#state").html("Height: "+height+" pixels<br/>"+ "Width: "+width+" pixels<br/>"+
									 "Opacity: "+opacity/100);
	}
	
	
});
</script>

<div id="imgHeight"></div><br/>

<div id="imgWidth"></div><br/>

<div id="imgopacity"></div><br/>

<div id="state"></div><br/>

<img id="liveimg" src="img/1.jpg" style="height:100px;width:100px; margin-left:10px;"/>


</div>



<hr>Draggable Widget Options with JQuery UIliders<hr>
<div class="para">



<script>
$(document).ready(function(){
	$(".ourDiv").draggable();	
	$(".ourDiv").mousedown(function(){
		var maxZindex = 0;
		$(this).siblings('.ourDiv').each(function(){
			var currentZindex= Number($(this).css('z-index'));
			maxZindex = currentZindex > maxZindex ? currentZindex: maxZindex;
		});
		$(this).css('z-index',maxZindex+1);
	});
});
</script>

<div class="ourDiv" style="background:green">Green</div>
<div class="ourDiv" style="background:red">Red</div>
<div class="ourDiv" style="background:blue">Blue</div>
<div class="ourDiv" style="background:brown">Brown</div>
<div id="outeroption" class="outerdiv"></div>
</div>




<hr>Droppable Widget with jQuery UI<hr>
<div class="para">



<script>
$(document).ready(function(){
	$("#techlist li").draggable({
		helper:function(){
			return "<u><b>"+$(this).text()+"</b></u>";
		},
		revert:'invalid'
	});
	
	$("#phpFramework").droppable({
		accept:'li[data-value="php"]',
		activeClass:'widgethover',
		drop:function(event, ui){
			$("#php").append(ui.draggable);
		}
	});
		$("#javaFramework").droppable({
		accept:'li[data-value="java"]',
		activeClass:'widgethover',
		drop:function(event, ui){
			$("#java").append(ui.draggable);
		}
	});

});
</script>



<div class="box">
	PHP & JAVA Framework<hr/>
	<ul id="techlist">
		<li data-value="php">CodeIgniter</li>
		<li data-value="php">CakePHP</li>
		<li data-value="php">Kohana</li>
		<li data-value="java">Hibernate</li>
		<li data-value="java">Spring</li>
		<li data-value="java">Struts 2</li>
	
	</ul>
</div>
<div class="box" id="phpFramework">
	PHP Framework<hr/>
	<ul id="php"></ul>
</div>
<div class="box" id="javaFramework">
	JAVA Framework<hr/>
	<ul id="java"></ul>
</div>
</div>





<hr>Resizable Widget Options with jQuery UI<hr>
<div class="para">



<script>
$(document).ready(function(){
	$("#box1").resizable({		
		start: function(event, ui){
				$("#startDim").html(liveDim(event, ui));
		},
		resize: function(event, ui){
				$("#resizeDim").html(liveDim(event, ui));
		},
		stop: function(event, ui){
				$("#stopDim").html(liveDim(event, ui));
		}
	});
		function liveDim(event, ui){
			var ele = "Height: "+ui.size.height+"<br/>";
			    ele += "width: "+ui.size.width+"<br/>";
			return ele;
		}

});
</script>

<table class="tblone">
	<tr>
		<td>Start:</td>
		<td><div id="startDim"></div></td>
	</tr>
	<tr>
		<td>Resizing:</td>
		<td><div id="resizeDim"></div></td>
	</tr>
	<tr>
		<td>Stop:</td>
		<td><div id="stopDim"></div></td>
	</tr>

</table>



	<div class="box1" id="box1" style="background:green">
		Widget one.
	</div>


</div>




<hr>Selectable Widget with jQuery UI<hr>
<div class="para">
	


<script>
$(document).ready(function(){

	$("#javaitem").selectable({
		stop:function(){
		var output="";	
			$(".ui-selected").each(function(){
				output+=$(this).text()+"<br/>";
			});
			$(".state").html(output);
		}
	});

});
</script>


<ul id="javaitem">
	<li>Servlets</li>
	<li>Jsp</li>
	<li>JSTL</li>
	<li>Strus 2.0</li>
	<li>Jasper Report</li>
	<li>Spring</li>
</ul>

<br/>
you selected:
<div class="state"></div>

</div>


<hr>Sortable Widget with jQuery UI<hr>
<div class="para">
	


<script>
$(document).ready(function(){
	$("#phpitems").sortable({
		placeholder:'selecteditem',
		axis:'y',
		opacity:0.5,
		items:'li[data-value="cms"]'
	});
});
</script>

<ul id="phpitems">
	<li data-value="framework">CodeIgniter</li>
	<li data-value="framework">Laravel</li>
	<li data-value="framework">Symphony</li>
	<li data-value="framework">Kohana</li>
	<li data-value="framework">FuelPHP</li>
	<li data-value="framework">CakePHP</li>
	<li data-value="cms">Wordpress</li>
	<li data-value="cms">Drupal</li>
	<li data-value="cms">Joomla</li>
	
	
</ul>



</div><hr>Sortable Widget Multiple list Items<hr>
<div class="para">
	


<script>
$(document).ready(function(){
		$("#framework, #cms, #cmm").sortable({
			connectWith:"#framework, #cms, #cmm"
		});
		
});
		

</script>

<ul class="ul" id="framework">
	<li>CodeIgniter</li>
	<li>Symphony</li>
	<li>Kohana</li>
	<li>FuelPHP</li>
	<li>CakePHP</li>

</ul>

<ul class="ul"  id="cms">

	<li>Mambo</li>
	<li>Wordpress</li>
	<li>Drupal</li>
	<li>Joomla</li>	
	<li>SilverStripe</li>	
	
</ul>

<ul class="ul"  id="cmm">

	<li>Mambo</li>
	<li>Wordpress</li>
	<li>Drupal</li>
	<li>Joomla</li>	
	<li>SilverStripe</li>		
</ul>
</div>


<hr>Background Color Animation with jQuery UI<hr>
<div class="para">
	


<script>
$(document).ready(function(){
	var colorHandle = false;
		$("#showAnimate").click(function(){
			var ele = $("#makeAnimate");
				if(colorHandle){
					ele.animate({
						'font-size':'15',
						'background-color':'#000',
						'color':'#fff',
						'border-color':'red',
						'border-width':'2'
					});	
				}else{
					ele.animate({
						'font-size':'20',
						'background-color':'yellow',
						'color':'red',
						'border-color':'green',
						'border-width':'5',
						'border-radius':'15'
					});	
				}
				colorHandle = !colorHandle;
		});
		
});
		

</script>

<button id="showAnimate">Animate</button>
<div class="mydiv" id="makeAnimate">
 I am Sofiq, PHP and Java DEveloper.I am Sofiq, PHP and Java DEveloper.I am Sofiq, 
 PHP and Java DEveloper.I am Sofiq, PHP and Java DEveloper.I am Sofiq, 
 PHP and Java DEveloper.I am Sofiq, PHP and Java DEveloper.PHP and Java DEveloper.I am Sofiq, PHP and Java DEveloper.
 PHP and Java DEveloper.I am Sofiq, PHP and Java DEveloper.PHP and Java DEveloper.I am Sofiq, PHP and Java DEveloper.
</div>

</div>


<hr>Class Transition Animation with jQuery UI<hr>
<div class="para">
	


<script>
$(document).ready(function(){
	var classHandle = true;
		$("#show").click(function(){
			if(classHandle){
				$("#Animate").addClass('liveDiv', 2000,'swing',function(){
					alert("Animation completed...");
				});
			}else{
				$("#Animate").removeClass('liveDiv', 2000,'swing');
			}
			
			classHandle = !classHandle;
		
	});

});
		

</script>

<button id="show">Animate</button>
<div class="mydiv" id="Animate">
 I am Sofiq, PHP and Java DEveloper.I am Sofiq, PHP and Java DEveloper.I am Sofiq, 
 PHP and Java DEveloper.I am Sofiq, PHP and Java DEveloper.I am Sofiq, 
 PHP and Java DEveloper.I am Sofiq, PHP and Java DEveloper.PHP and Java DEveloper.I am Sofiq, PHP and Java DEveloper.
 PHP and Java DEveloper.I am Sofiq, PHP and Java DEveloper.PHP and Java DEveloper.I am Sofiq, PHP and Java DEveloper.
</div>

</div>


<hr>Datepicker Widget with jQuery UI <hr>
<div class="para">
	


<script>
$(document).ready(function(){
	$("#showDate").datepicker({
		showOn:'both',
		buttonText:'show Date',
		dateFormat:'dd/mm/yy',
		changeMonth:true,
		changeYear:true
		
	});
});
		

</script>

<label for="showDate">Select Date</label>
<input type="text" id="showDate"/>



</div>




<hr>Autocomplete Widget with jQuery UI<hr>
<div class="para">
	
<script>
$(document).ready(function(){
	var tech = [
			"PHP",
			"JAVA",
			"JQuery",
			"javaScript",
			"perl",
			"Ruby",
			"HTML",
			"CSS"
	
	];
	$("#gettech").autocomplete({
		source:tech,
		autoFocus:true,
		minLength:2,
		delay:500
	});
});		
</script>

<p>Type 2 letter..ph, ja, pe, cs,ht</p>
<label for="gettech">Technology Name:</label>
<input type="text" id="gettech"/>



</div>


<hr>Various Effects of jQuery UI<hr>
<div class="para">
	
<script>
$(document).ready(function(){
	$("#bx").click(function(){
		$("#bx").effect({
			effect:"explode",
			easing:"easeInExpo",
			pieces:20,
			duration:4000
		});		
	});

});		
</script>


<div  class="maindiv">
	<div  id="bx">Click Here..</div>

</div>


</div>



<hr>Accordion Widget of jQuery UI<hr>
<div class="para">
	
<script>
$(document).ready(function(){
	$("#accdion").accordion({
		collapsible:true
	});
});		
</script>


	<div class="main">
		<div id="accdion">
			<h3>Tab One</h3>
			<div>
				<p>This is tab one. Some content will be goes here....This is tab one. Some content will be goes here....This is tab one. Some content will be goes here....This is tab one. Some content will be goes here....This is tab one. Some content will be goes here....</p>
			</div>
		

		<h3>Tab Two</h3>
			<div>
				<p>This is tab two. Some content will be goes here....This is tab one. Some content will be goes here....This is tab one. Some content will be goes here....This is tab one. Some content will be goes here....This is tab one. Some content will be goes here....</p>
			</div>
		
		<h3>Tab Three</h3>
			<div>
				<p>This is tab three. Some content will be goes here....This is tab one. Some content will be goes here....This is tab one. Some content will be goes here....This is tab one. Some content will be goes here....This is tab one. Some content will be goes here....</p>
			</div>
		
		</div>
	</div>


</div>



<hr>Spinner Widget of jQuery UI<hr>
<div class="para">
	
<script>
$(document).ready(function(){

	$("#spinner").spinner({
		step:5,
		min:-10,
		max:50
	});

});		
</script>


	<div class="mainone">
		<input type="text" id="spinner" value="0"/>

	</div>


</div>


<hr>ThemeRoller jQuery UI<hr>
<div class="para">
	
<script>
$(document).ready(function(){






});		
</script>


</div>


<hr>Tabs Widget with jQuery UI<hr>
<div class="para">
	
<script>
$(document).ready(function(){
	$("#tabs").tabs();

});		
</script>


	<div id="tabs">

		<ul>
			<li><a href="#one">One</li>
			<li><a href="#two">Two</li>
			<li><a href="#three">Three</li>	
		</ul>
		
			<div id="one">

				<h2>This is items for one tab.</h2>
				<p>This is items for one tab.This is items for one tab.This is items for one tab.
				This is items for one tab.This is items for one tab.This is items for one tab.
				This is items for one tab.This is items for one tab.This is items for one tab.</p>
			</div>

			<div id="two">

				<h2>This is items for Two tab.</h2>
				<p>This is items for one tab.This is items for one tab.This is items for one tab.
				This is items for one tab.This is items for one tab.This is items for one tab.
				This is items for one tab.This is items for one tab.This is items for one tab.</p>
			</div>

			<div id="three">

				<h2>This is items for Three tab.</h2>
				<p>This is items for one tab.This is items for one tab.This is items for one tab.
				This is items for one tab.This is items for one tab.This is items for one tab.
				This is items for one tab.This is items for one tab.This is items for one tab.</p>
			</div>
	</div>

</div>













<?php include 'inc/footer.php'?>
