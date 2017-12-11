<?php include 'inc/header.php';?>

<div>
<script>


$(document).ready(function(){
	$("#hide").click(function(){
		$(".para").hide('slow');
	});
	
	$("#show").click(function(){
		$(".para").show('medium');
	});	
	
	$("#toggle").click(function(){
		$("p").toggle('slow');
	});	
		
		
});	
	

</script>

<button id="hide">Hide</button>
<button id="show">Show</button>
<button id="toggle">Toggle</button>

<div class="para">
<h3>Training with live project</h3>
<P>Training with live project. Training with live projectTraining with live projectTraining
 with live projectTraining with live project. Training with live project. Training with live projectTraining with live projectTraining
 with live projectTraining with live project.</p>
 
 </div>
 
 
 
 <div>
 
<script>


$(document).ready(function(){
	$("#fadein").click(function(){
		$(".para1").fadeIn(1000);
	});
	
	$("#fadeout").click(function(){
		$(".para1").fadeOut(1000);
	});
	
	$("#fadeto").click(function(){
		$(".para1").fadeTo(1000, 0.5);
	});	
	
	$("#fadetoggle").click(function(){
		$(".para1").fadeToggle(1000);
	});	
	
	
		
});	
	

</script>
 
<button id="fadein">fadein</button>
<button id="fadeout">fadeout</button>
<button id="fadeto">fadeto</button>
<button id="fadetoggle">fadetoggle</button>

<div class="para1">
<h3>Training with live project</h3>
<P>Training with live project. Training with live projectTraining with live projectTraining
 with live projectTraining with live project. Training with live project. Training with live projectTraining with live projectTraining
 with live projectTraining with live project.</p>


</div>


<div>
 
<script>


$(document).ready(function(){
	$("#slidedown").click(function(){
		$(".para2").slideDown(2000);
	});
	
	$("#slideup").click(function(){
		$(".para2").slideUp(2000);
	});
	
	
	$("#slidetoggle").click(function(){
		$(".para2").slideToggle(2000);
	});	
	
	
		
});	
	

</script>
 
<button id="slidedown">Slidedown</button>
<button id="slideup">Slideup</button>
<button id="slidetoggle">Slidetoggle</button>

<div class="para2">
<h3>Training with live project</h3>
<P>Training with live project. Training with live projectTraining with live projectTraining
 with live projectTraining with live project. Training with live project. Training with live projectTraining with live projectTraining
 with live projectTraining with live project.</p>


</div>


<div>

<?php
	function test(){
		
		echo"Callback started.";
	}

?>
 
<script>


$(document).ready(function(){
	$("#animaion").click(function(){
		$(".inside").animate({
			
			left:'300px',
			opacity:'0.5',
			height:'250px',
			weight:'250px'
			
			
			
		},5000, function(){
			
			alert("<?php echo test(); ?>");
		});
	});
	
	$("#stop").click(function(){
		$(".inside").stop();
		
		
	});
		
});	
	

</script>
 
<button id="animaion">Start Animation</button>
<button id="stop">Stop Animation</button>


<div class="para3">
	<div class="inside">
		

	</div>
</div>

<div>


<script>


$(document).ready(function(){

	$("#chain").click(function(){
		$(".para").css("background", "orange").slideUp(2000).slideDown(2000);
		
		
		
		
		
	});	
});	
	

</script>
 
<button id="chain">Chain</button>



<div class="para">
	<div class="inside">
		

	</div>
</div>
</div>

<div>


<script>


$(document).ready(function(){

	$("#show1").click(function(){
		
		alert("test is: "+$("#line").text());
	});	
	$("#show2").click(function(){
		
		alert("test is: "+$("#line2").text());
	});
	$("#source").click(function(){
		
		alert("test is: "+$("#line").html());
	});
	$("#testvalue").click(function(){
		
		alert("test is: "+$("#name").val());
	});
});	
	

</script>
 
<button id="show1">show text</button>
<button id="show2">show text</button>
<button id="source">show html</button>




<div class="para">

	<p id="line">Training with live <strong>project</strong>.</p>
	<p id="line2">we are learning jquery.</p>
</div>



</div>


<div>
<?php

function inputname(){
	
	echo "tithy";
}
function department(){
	
	echo "<b>IT</b>";
}
function skill(){
	echo "java, php";
}

?>

<script>


$(document).ready(function(){

	$("#name").click(function(){
		
		$("#gname").val("<?php inputname(); ?>");
	
	});
	$("#dep").click(function(){
		$("#line3").html("<?php department(); ?>");
		
	});
	$("#skill").click(function(){
		
		$("#line4").text("<?php skill(); ?>");
	});
});	
	

</script>
 
<button id="name">show name</button>
<button id="dep">show department</button>
<button id="skill">show skill</button>



<div class="para">
<div>
Name1: <input type="text" id="gname" value="name will be here.."/>


</div>

	<p id="line3"> <strong>Department</strong>.</p>
	<p id="line4"> skill</p>
	
</div>



</div>



<div>


<script>


$(document).ready(function(){
	$("#show6").click(function(){
		
		alert($("#live").attr("href"));
		
	});
	$("#change").click(function(){
		
		$("#live").attr("href", "https://www.facebook.com/" );
		
	});
	
});	
	

</script>
 
<button id="show6">show value</button>
<button id="change">change value</button>



<div class="para">

<p><a href="http://www.gmail.com" id="live">gmail</a></p>


</div>

</div>


<div>

<?php

$bg = "background-color";
$bgvalue = "#ddd";
$clr = "color";
$clrvalue= "red";

?>


<script>


$(document).ready(function(){
	$("#style").click(function(){
		
		$("p").css({"<?php echo $bg; ?>": "<?php echo $bgvalue; ?>", 
		"<?php echo $clr; ?>": "<?php echo $clrvalue; ?>" });
		
	});	

	
});	
	

</script>
 
<button id="style">Add CSS</button>




<div class="para">

<!--<div class="inside"></div>-->
<p>WE are learning jquery</p>


</div>

</div>



<div>

<hr>Dimension<hr>

<script>


$(document).ready(function(){

	$("#select").click(function(){
		
		var val= "";
		val +="width is:"+$(".dimen").width()+"</br>";
		val +="Height is:"+$(".dimen").height()+"</br>";
		val +="Inner width is:"+$(".dimen").innerWidth()+"</br>";
		val +="Inner Height is:"+$(".dimen").innerHeight()+"</br>";
		val +="Outer width is:"+$(".dimen").outerWidth(true)+"</br>";
		val +="Outer Height is:"+$(".dimen").outerHeight(true);
		$("#state").html(val);
	
		});

	});	
	

</script>
 
<button id="select">Display</button>




<div class="para">
<div id="state"></div>

<p class="dimen">WE are learning jquery</p>


</div>

</div>

<div>

<hr>Conditional Logic<hr>
<hr>Custom Function<hr>

<script>


$(document).ready(function(){

	$("#submitbtn").click(function(e){
		var isValid = true;
		$("input[type='text']#required").each(function(){
			if(($(this).val())==''){
				isValid = false;
				$(this).css({
					"border":"1px solid red",
					"background":"#ffcece"
				});
				
			}else{
				$(this).css({
					"border":"",
					"background":""
				});
			}
		});
	if(isValid == false){
		e.preventDefault();
	}else{
		clear();
		document.getElementById("state").innerHTML= alert("Thanks for submitting...");
		return false;
	}

	});	
});	
	
function clear(){
	$("#myform :input").each(function(){
		
			$(this).val("");
	});
}
</script>
 


<div class="para">

<form id="myform">
<table>
	<tr>
		<td>First Name</td>
		<td><input type="text" id="required"/></td>
	</tr>
	<tr>
		<td>Last Name</td>
		<td><input type="text"/></td>
	</tr>
	<tr>
		<td>Email Address</td>
		<td><input type="text" id="required"/></td>
	</tr>
	<tr>
		<td>Website</td>
		<td><input type="text"/></td>
	</tr>
	<tr>
		<td></td>
		<td><button  id="submitbtn"/>Submit</td>
	</tr>
</table>
<div id="state"></div>
</form>

</div>

</div>


<div>
<hr>AutoLoad<hr>
<script>
$(document).ready(function(){
		idb();
		autoLoad();
});

function idb(){
	$.ajax({
		url: "idb.xml",
		dataType:"xml",
		success:function(data){
		$("ul").children().remove();	
		$(data).find("employee").each(function(){
			var alldata = '<li>Name : '+$(this).find("name").text()+'</li><li>Skill : '+$(this).find("skill").
			text()+'</li><li>Company : '+$(this).find("company").text()+'</li>';
		   $("ul").append(alldata);	
			
		});	
		},
		error: function(){
			$("ul").children().remove();
			$("ul").append("<li>There is no error..</li>");
		}
	});
	
	
}

function autoLoad(){
	setTimeout(function(){
		
		idb();
		autoLoad();
		
	}, 100);
	
}
	

	
</script>
 


<div class="para">
<ul></ul>


</div>
</div>


<div>
<hr>AJAX post method<hr>

<script>
$(document).ready(function(){
	$("#myform").submit(function(){
		$.post("content.php",{"name":"sofiq", "skill":"java"}, function(data){
			$("#stat").html(data);
		});
		return false;
	});
	
});

</script>


<div class="para4">
<div id="axaj"></div>
	<form id="myform">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"/></td>
			</tr>
			<tr>
				<td>skill</td>
				<td><input type="text" name="skill"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="submit"/></td>
			</tr>
		
		</table>
	</form>

</div>

</div>




<?php include 'inc/footer.php'?>
