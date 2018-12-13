var nav = document.getElementById('navbar');

window.onscroll = function () {
 // 55 is the pixel height of the header
  if (window.pageYOffset > 55) {
      nav.style.position = 'fixed';
  }else {
      nav.style.position = 'relative';
  }
}

var imageSlider = document.getElementById('image_slider');

imageSlider.addEventListener("click", function(){
  if ( imageSlider.src == "http://ice.truman.edu/~gda2438/tcb1.jpg" ) {
    imageSlider.src = "http://ice.truman.edu/~gda2438/tcb2.jpg";
  } 
  else if ( imageSlider.src == "http://ice.truman.edu/~gda2438/tcb2.jpg" ) {
    imageSlider.src = "http://ice.truman.edu/~gda2438/tcb3.jpg";
  } 
  else {
    imageSlider.src = "http://ice.truman.edu/~gda2438/tcb1.jpg";
  }
});

var home = document.getElementById('h');
var roster = document.getElementById('r');
var schedule = document.getElementById('sc');
var stats = document.getElementById('st');
var join = document.getElementById('j');

home.addEventListener("click", toLocation(home.href));
roster.addEventListener("click", toLocation(roster.href));
schedule.addEventListener("click", toLocation(schedule.href));
stats.addEventListener("click", toLocation(stats.href));
join.addEventListener("click", toLocation(join.href));

function toLocation( location ) {
  document.getElementById(location).scrollIntoView();
}




