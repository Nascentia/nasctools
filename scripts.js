function verify(n)
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
