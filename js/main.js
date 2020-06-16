function avt(){
	//document.getElementById("dropdown-box").style.height = "auto";
	var element = document.getElementById("dropdown-box");
	  element.classList.add("shavt");
}

$(document).ready(function(){
  $("#prof").click(function(){
    $(".dropdown-box").toggleClass("shavt");
  });
});