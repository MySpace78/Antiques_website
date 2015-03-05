// JavaScript Document
var moving_imag = document.getElementById('Moving_Area');
var mypics =['moving1.jpg','moving2.jpg','moving3.jpg','moving4.jpg','moving5.jpg','moving6.jpg','moving7.jpg','moving8.jpg'];
var total_pics = mypics.length;
var i=0;
function loop(){
	if(i>total_pics-1){
		i=0;
		
		}
 moving_imag.innerHTML ='<img src="moving_pics/'+mypics[i]+'" height="400" width="1000">';
 i++;
loopTimer = setTimeout('loop()',3000);
	}
loop();