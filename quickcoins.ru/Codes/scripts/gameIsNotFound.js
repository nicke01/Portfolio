var pokerButton = document.getElementById('pokerBlock');
var continueButton = document.getElementById('continue');
var bg = document.getElementById('greyBG');

pokerButton.onclick = function () {
  document.getElementById('sorry').style.display = 'flex';
}

continueButton.onclick = function () {
  document.getElementById('sorry').style.display = 'none';
}

bg.onclick = function () {
  document.getElementById('sorry').style.display = 'none';
}
