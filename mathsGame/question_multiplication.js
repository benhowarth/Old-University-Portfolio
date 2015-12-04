function multiplyGen(){
	x=Math.floor((Math.random())*100)+1;
	y=Math.floor((Math.random())*100)+1;
	
	y1=Math.floor((Math.random())*8)-4;
	y2=Math.floor((Math.random())*8)-4;
	
	adSubQuestion=x+"X"+y;
	correctAnswer=x*y;
	wrongAnswer1=x*(y+y1);
	wrongAnswer2=x*(y+y2);
	problem=[adSubQuestion,[correctAnswer,wrongAnswer1,wrongAnswer2],0];
	problem[1]=$.shuffle(problem[1]);
	problem[2]=problem[1].indexOf(correctAnswer);
	return problem;
}