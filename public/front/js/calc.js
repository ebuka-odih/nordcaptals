function calcthis(a)
{ 
var perc = document.getElementById("percent").value;

var planperc=new Array(0,0,0,0,0);
var depo = document.getElementById("deposit").value;

if (perc == "perc1") {planperc=Array(124, 124, 124, 124, 124); min=10; max=100;};
if (perc == "perc2") {planperc=Array(156, 156, 156, 156, 156); min=100; max=2499;};
if (perc == "perc3") {planperc=Array(190, 190, 190, 190, 190); min=2499; max=100000;};

if (depo < min)
  {
	
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Minimal deposit is BTC: "+min);	
  } 
else
if (depo > max)
  {
	
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Maximal deposit is BTC: "+max);	
  } 
  
else
  {

	 
	  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
	  
	
	if ( depo >=501)
	  {
		
		document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
		  }
	  
		if ( depo >= 2501)
		  {
			
			document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			  }
	  
			if ( depo >= 5001)
			  {
				
				document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
				  }
	  
				if ( depo >= 25001)
				  {
					
					document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
	  
                                                       
                                                }
			  
		  
	  
  }

}