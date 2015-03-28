function valid(n)
{
	val=document.getElementById('pgbar').value
	green=document.getElementById('etape'+n);
	if (green.style.background!='green')
	{
		green.style.background='green';
		document.getElementById('pgbar').value=val+1;
	}
	else
	{
		green.style.background='white';
		document.getElementById('pgbar').value=val-1;
	}
}

function verif()
{
	for (var i = 1 ; i <24 ; i++) {
		if(1)
		{
			document.getElementById('etape'+i).background='red';
		}
	}
}