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
	for(var i=1;i<58;i++)
	{
		if(document.getElementById('req1'+i).innerHTML!="0")
		{
			if(!document.getElementById('vb'+document.getElementById('req1'+i).innerHTML).checked)
			{
				document.getElementById('etape'+i).className='noacces';

			}
			else if (!document.getElementById('vb'+i).checked)
			{
				document.getElementById('etape'+i).className='';
			}
		}
		else if(document.getElementById('req2'+i).innerHTML!="0")
		{
			if(!document.getElementById('vb'+document.getElementById('req2'+i).innerHTML).checked)
			{
				document.getElementById('etape'+i).className='noacces';
			}
		}
		else if(document.getElementById('req3'+i).innerHTML!="0")
		{
			if(!document.getElementById('vb'+document.getElementById('req3'+i).innerHTML).checked)
			{
				document.getElementById('etape'+i).className='noacces';
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