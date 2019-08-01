(function() {
  var annulus = function(centerX, centerY,
    innerRadius, outerRadius,
    startAngle, endAngle,
    anticlockwise) {
    var th1 = startAngle * Math.PI / 180;
    var th2 = endAngle * Math.PI / 180;
    var startOfOuterArcX = outerRadius * Math.cos(th2) + centerX;
    var startOfOuterArcY = outerRadius * Math.sin(th2) + centerY;

    this.beginPath();
    this.arc(centerX, centerY, innerRadius, th1, th2, anticlockwise);
    this.lineTo(startOfOuterArcX, startOfOuterArcY);
    this.arc(centerX, centerY, outerRadius, th2, th1, !anticlockwise);
    this.closePath();
  }
  CanvasRenderingContext2D.prototype.annulus = annulus;
})();

var time = document.getElementById("time");
var t = time.getContext("2d");
var deg = -89;

t.annulus(90, 90, 80, 90, -90, -91);
t.fillStyle = '#56EE36';
t.fill();
t.fillStyle = '#FFEED3';

var timeInterval = setInterval( function() {
  deg=deg+0.5;
  t.annulus(90, 90, 80, 90, -90, deg);
  t.fill();
}, 55);

setTimeout( function() {
  clearInterval(timeInterval);
}, 40000);

var canvas = document.getElementById("canvas1");
var ctx = canvas.getContext("2d");

ctx.annulus(90, 90, 0, 90, 0, 75);
ctx.fillStyle = '#F13D2F';
ctx.fill();

ctx.annulus(90, 90, 0, 90, 75, 180);
ctx.fillStyle = '#F9BA3D';
ctx.fill();

ctx.annulus(90, 90, 0, 90, -180, 0);
ctx.fillStyle = '#50D2DF';
ctx.fill();

var a = rand(Math.random());
var makeBet = document.getElementById('makeBet');
var timePath = document.getElementById('timePath');

function rand (r) {
  r=r*500;
  r=Math.floor(r);
  while (r<19160){
    r=r*1.5;
  }
  return r;
}

var checkClick = 0;
makeBet.onclick = function() {
  ++checkClick;
}

var rouletteSound = document.getElementById('rouletteSound');
var soundCheck = localStorage.getItem('soundCheck');

setTimeout( function() {
  if (checkClick) {
    if (soundCheck == 1) {
      rouletteSound.play();
    }
    timePath.style.display = 'none';
    canvas.style.opacity = '1';
    setTimeout( function() {
      canvas.style.transform = 'rotate('+a+'deg)';
    }, 170);
  }
}, 40000);
