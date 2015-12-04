function multiplyGen(){
	x=Math.floor((Math.random())*100)+1;
	y=Math.floor((Math.random())*100)+1;
	
	adSubQuestion=x+"X"+y;
	correctAnswer=x*y;
	wrongAnswer1="wrong1";
	wrongAnswer2="wrong2";
	problem=[adSubQuestion,[correctAnswer,wrongAnswer1,wrongAnswer2],0];
	problem[1]=$.shuffle(problem[1]);
	problem[2]=problem[1].indexOf(correctAnswer);
	return problem;
}