$('button').on('click', function(){$('body').toggleClass('open');});

var l = document.getElementById("l");
var c = document.getElementById("c");
var m = document.getElementById("m");
var t = document.getElementById("t");
var a = document.getElementById("a");
l.onclick = function change()
{
	c.setAttribute("style", "display: block;");
	m.setAttribute("style", "display: none");
	t.setAttribute("style", "display: none");
	a.setAttribute("style", "display: block");
}
a.onclick = function second_change()
{
	c.setAttribute("style", "display: none;");
	m.setAttribute("style", "display: block");
	t.setAttribute("style", "display: block");
	a.setAttribute("style", "display: none");
}