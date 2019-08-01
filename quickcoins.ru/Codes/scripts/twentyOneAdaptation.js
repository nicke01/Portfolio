var height = document.body.clientHeight;
var screenHeight = screen.height;
var gameBoard = document.getElementById('gameBoard');
var bgHeight = getComputedStyle(document.getElementById('bgImg')).height;
var betFieldHeight = getComputedStyle(document.getElementById('betField')).height;
var betHeight = getComputedStyle(document.getElementById('bet')).height;
var pvPadding = getComputedStyle(document.getElementById('phone-version')).padding;
var heightOfGameBoard = getComputedStyle(gameBoard).height;

pvPadding = parseInt(pvPadding, 10);
bgHeight = parseInt(bgHeight, 10);
betFieldHeight = parseInt(betFieldHeight, 10);
betHeight = parseInt(betHeight, 10);
heightOfGameBoard = parseInt(heightOfGameBoard, 10);

calcSize();

function calcSize () {
  document.getElementById('bet').style.padding = ((betFieldHeight - betHeight - 44) / 4) + "px 0 0 0";
  gameBoard.style.margin = ((bgHeight - pvPadding - heightOfGameBoard) / 2) + "px 0 " + ((bgHeight - pvPadding - heightOfGameBoard) / 2) + "px 0";
}
