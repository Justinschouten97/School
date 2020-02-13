
var i = 0;

var time = 2000;

var pictures =
[
  "img/atletiek.jpg",
  "img/bike.jpg",
  "img/Tennis.jpg"
];

function change()
{
	document.slider.src = pictures[i];

	if(i < pictures.length - 1)
  {
	  i++;
	}
  else
  {
		i = 0;
	};

	setTimeout("change()", time);
};

window.onload=change;
