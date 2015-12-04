function percentageGen(){
	x=Math.floor((Math.random())*90)+5;
	y=Math.floor((Math.random())*1000)+1;
	
	y1=Math.floor((Math.random())*8)-4;
	y2=Math.floor((Math.random())*8)-4;
	
	adSubQuestion=x+"% of "+y;
	correctAnswer=y*(x/100);
	wrongAnswer1=y*((x+y1)/100);
	wrongAnswer2=y*((x+y2)/100);
	problem=[adSubQuestion,[correctAnswer,wrongAnswer1,wrongAnswer2],0];
	problem[1]=$.shuffle(problem[1]);
	problem[2]=problem[1].indexOf(correctAnswer);
	return problem;
}