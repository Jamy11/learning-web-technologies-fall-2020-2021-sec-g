
function bg()
{
    let obj = document.getElementById('blood').value;
	let val;
	if(obj != ""){
		val = 'Ok';
	}else{
		val = 'Not Ok';
	}
	alert(val);
}