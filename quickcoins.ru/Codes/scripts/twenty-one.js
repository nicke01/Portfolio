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

var oponentsTime = document.getElementById("oponentsTime");
var oT = oponentsTime.getContext("2d");
var deg = -89;

oT.annulus(25, 25, 20, 25, -90, -91);
oT.fillStyle = '#56EE36';
oT.fill();
oT.fillStyle = '#ffffff';

var timeInterval = setInterval( function() {
  deg=deg+0.5;
  oT.annulus(25, 25, 20, 25, -90, deg);
  oT.fill();
}, 55);

setTimeout( function() {
  clearInterval(timeInterval);
}, 40000);

var myTime = document.getElementById("myTime");
var mT = myTime.getContext("2d");
var deg = -89;

mT.annulus(25, 25, 20, 25, -90, -91);
mT.fillStyle = '#56EE36';
mT.fill();
mT.fillStyle = '#ffffff';

var myTimeInterval = setInterval( function() {
  deg=deg+0.5;
  mT.annulus(25, 25, 20, 25, -90, deg);
  mT.fill();
}, 55);

setTimeout( function() {
  clearInterval(myTimeInterval);
}, 40000);
