var hostsButton = document.getElementById('hostsButton');
var guestsButton = document.getElementById('guestsButton');
var checkButtons = 0;

hostsButton.onclick = function () {
  checkButtons = 1;
  this.style.background = 'linear-gradient(45deg, #D4145A 0%, #FBB03B 100%)';
  this.style.color = '#ffffff';
  this.style.boxShadow = '2px 2px 7px rgba(0,0,0,0.3)';
  guestsButton.style.background = '#707070';
  guestsButton.style.color = '#464545';
  guestsButton.style.boxShadow = 'none';
}

guestsButton.onclick = function () {
  checkButtons = 2;
  this.style.background = 'linear-gradient(45deg, #009245 0%, #D4C91F 100%)';
  this.style.color = '#ffffff';
  this.style.boxShadow = '2px 2px 7px rgba(0,0,0,0.3)';
  hostsButton.style.background = '#707070';
  hostsButton.style.color = '#464545';
  hostsButton.style.boxShadow = 'none';
}
