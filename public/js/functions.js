function menuMobile() {
    var x = document.getElementById("myLinks");
    var y = document.getElementById("logo-name");
    if (x.style.display === "block") {
      x.style.display = "none";
      y.style.visibility = "visible";
    } else {
      x.style.display = "block";
      x.style.height = window.screen.height + 'px';
      y.style.visibility = "hidden";
    }
  }

$(document).ready(function(){
    $('#nav-icon').click(function(){
		$(this).toggleClass('open');
	});
});