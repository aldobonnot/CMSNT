function myMove(val,colone,pourcent) {
  var elem = document.getElementById(colone);
  var elem2 = document.getElementById(pourcent);
    
  var pos = 0;
  var pos2 = 0;
  var pourc = val;
  var hcol = 400 * pourc / 100;
  var id = setInterval(frame, 2);
  var id2 = setInterval(framep, 16);

  function frame() {
    if (pos == hcol) {
      clearInterval(id);
    } else {
      pos++;        
      elem.style.height = pos + 'px';
	       }
  }
  function framep() {
  if (pos2 == pourc) {
      clearInterval(id2);
    } else {
      pos2++;        
      	  elem2.innerHTML = pos2 + '%';}
           }
		   
}


$(document).ready(function(){
	$("#aa").click(function(){
        $("#aa").css("cursor","not-allowed");
	});
	$("#ab").click(function(){
        $("#ab").css("cursor","not-allowed");
	});
	$("#ac").click(function(){
        $("#ac").css("cursor","not-allowed");
	});
	$("#ai").click(function(){
        $("#ai").css("cursor","not-allowed");
	});
	$("#ad").click(function(){
        $("#ad").css("cursor","not-allowed");
	});
	$("#ae").click(function(){
        $("#ae").css("cursor","not-allowed");
	});
	$("#af").click(function(){
        $("#af").css("cursor","not-allowed");
	});
	$("#ag").click(function(){
        $("#ag").css("cursor","not-allowed");
	});
	});
