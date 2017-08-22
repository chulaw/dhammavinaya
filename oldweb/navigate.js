function HideContent(d, c) {
	if (d == 'vanishhead') {
		document.getElementById(d).style.display = 'none';
		var b = document.getElementById(c);
		b.style.paddingTop = '20px';
	} else if (d == 'translation' && document.getElementById(d).style.display == 'none') {
		document.getElementById(d).style.display = '';
		document.getElementById(c).style.paddingLeft = '25px';
		document.getElementById(c).style.paddingRight = '25px';
	} else if (d == 'pali' && document.getElementById(d).style.display == 'none') {
		document.getElementById(d).style.display = '';
		document.getElementById(c).style.paddingLeft = '25px';
		document.getElementById(c).style.paddingRight = '25px';
	} else {
		document.getElementById(d).style.display = 'none';
		document.getElementById(c).style.paddingLeft = '200px';
		document.getElementById(c).style.paddingRight = '200px';
	}
}

function ShowContent(d, c) {
	document.getElementById(d).style.display = 'block';
	if (d == 'vanishhead') {
		var b = document.getElementById(c);
		b.style.paddingTop = '70px';
	}
}