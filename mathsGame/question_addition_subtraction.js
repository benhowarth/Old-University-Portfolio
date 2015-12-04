function adSubGen(){
	x=Math.floor((Math.random())*50)+1;
	y=Math.floor((Math.random())*50)+1;
	var plusOrMinus = Math.random() < 0.5 ? -1 : 1;
	var plusOrMinus2 = Math.random() < 0.5 ? -1 : 1;
	fakeAns1=Math.floor((Math.random())*4)+1;
	var plusOrMinus3 = Math.random() < 0.5 ? -1 : 1;
	fakeAns2=Math.floor((Math.random())*2)+1;

	if(plusOrMinus<0){plusOrMinusStr="-"}
	else{plusOrMinusStr="+"}
	
	adSubQuestion=x+plusOrMinusStr+y;
	correctAnswer=x+(plusOrMinus*y);
	wrongAnswer1=x+(plusOrMinus*y)+(plusOrMinus2*fakeAns1);
	wrongAnswer2=x+(plusOrMinus*y)+(plusOrMinus3*fakeAns2);
	problem=[adSubQuestion,[correctAnswer,wrongAnswer1,wrongAnswer2],0];
	problem[1]=$.shuffle(problem[1]);
	problem[2]=problem[1].indexOf(correctAnswer);
	return problem;
}