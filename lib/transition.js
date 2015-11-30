function transition(target)
{
	console.log(2);
	$("#all").fadeOut(200,function(){window.location=target;})
	console.log(3);
}
function loaded()
{
	console.log(0);
	$("#all").hide().fadeIn(200)
	console.log(1);
}