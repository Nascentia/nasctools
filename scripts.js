function verifyValidity(n)
{
	etape=document.getElementById('etape'+n);
	etapechbx=document.getElementById('vb'+n);
	pgbar=document.getElementById('pgbar');

	if(etapechbx.checked)
	{
		etape.className='valid';
		pgbar.value++;
	}
	else
	{
		etape.className='';
		pgbar.value--;
	}
}

function verifyState()
{
	var f1=false,
		f2=false;
	for(var i=1;i<106;i++)
	{
		if(document.getElementById('req1'+i).innerHTML!="0")
		{
			if(!document.getElementById('vb'+document.getElementById('req1'+i).innerHTML).checked)
			{
				document.getElementById('etape'+i).className='noacces';
				f1=true;
			}
			else if (!document.getElementById('vb'+i).checked)
			{
				document.getElementById('etape'+i).className='';
			}
		}
		if(document.getElementById('req2'+i).innerHTML!="0")
		{
			if(!document.getElementById('vb'+document.getElementById('req2'+i).innerHTML).checked)
			{
				document.getElementById('etape'+i).className='noacces';
				f2=true
			}
			else if (!document.getElementById('vb'+i).checked&&!f1)
			{
				document.getElementById('etape'+i).className='';
			}
		}
		else if(document.getElementById('req3'+i).innerHTML!="0")
		{
			if(!document.getElementById('vb'+document.getElementById('req3'+i).innerHTML).checked)
			{
				document.getElementById('etape'+i).className='noacces';
			}
			else if (!document.getElementById('vb'+i).checked&&!f2)
			{
				document.getElementById('etape'+i).className='';
			}
		}
		if(document.getElementById('etape'+i).className=='noacces')
		{
			if(document.getElementById('vb'+i).checked)
			{
				document.getElementById('pgbar').value--;
			}
			document.getElementById('vb'+i).checked=false;
		}
	}
}

function verifyOnReload()
{
	for(var i=1;i<106;i++)
	{
		if (document.getElementById('vb'+i).checked) 
		{
			document.getElementById('etape'+i).className='valid';
			document.getElementById('pgbar').value++;
		}
	}
}

function toggle(n)
{
	div=document.getElementById(n);
	if (div.style.display=='none') 
	{
		div.style.display='block';
		document.getElementById('loadbutton').innerHTML='X';
	}
	else
	{
		div.style.display='none';
		document.getElementById('loadbutton').innerHTML='Load';
	}
}