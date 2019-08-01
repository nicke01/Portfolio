var height = document.body.clientHeight;
var screenHeight = screen.height;
var gameBoard = document.getElementById('gameBoard');
var headerHeight = getComputedStyle(document.getElementById('h')).height;
var headerPadding = getComputedStyle(document.getElementById('h')).padding;
var bgHeight = getComputedStyle(document.getElementById('bgImg')).height;
var betFieldHeight = getComputedStyle(document.getElementById('betField')).height;
var betHeight = getComputedStyle(document.getElementById('bet')).height;
var pvPadding = getComputedStyle(document.getElementById('phone-version')).padding;
var heightOfGameBoard = getComputedStyle(gameBoard).height;


headerHeight = parseInt(headerHeight, 10);
headerPadding = parseInt(headerPadding, 10);
pvPadding = parseInt(pvPadding, 10);
bgHeight = parseInt(bgHeight, 10);
betFieldHeight = parseInt(betFieldHeight, 10);
betHeight = parseInt(betHeight, 10);
heightOfGameBoard = parseInt(heightOfGameBoard, 10);

calcSize();

function calcSize () {
  document.getElementById('bet').style.padding = ((betFieldHeight - betHeight - 44) / 4) + "px 0 0 0";
  gameBoard.style.margin = "0 0 " + (bgHeight - pvPadding - heightOfGameBoard) + "px 0";
  var numOfElements = document.getElementsByClassName('nameOfPerson').length;
  if ( (bgHeight - (headerHeight + headerPadding) - heightOfGameBoard) < 40 ) {
    for (var i = 0; i < numOfElements; i++) {
      document.getElementsByClassName('nameOfPerson')[0].remove('nameOfPerson');
      document.getElementsByClassName('partOfList')[i].style.display = 'block';
      document.getElementsByClassName('partOfList')[i].style.width = 'auto';
      document.getElementsByClassName('personsInfo')[i].style.margin = '0';
      document.getElementsByClassName('personsPhoto')[i].style.margin = '0 auto 8px auto';
    }
    document.getElementById('players').style.display = 'flex';
    document.getElementById('players').style.justifyContent = 'space-around';
  }
}
