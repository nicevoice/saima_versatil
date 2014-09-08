function play68_init() {
	updateShare(0);
}

function updateShare(bestScore) {
//	imgUrl = './feidegenggao/icon.png';
	imgUrl = 'http://saimasoft.net/games/feidegenggao/icon1.png';
//	lineLink = 'index.html';
	lineLink = 'www.saimasoft.net/games/feidegenggao/index.html';
	descContent = "飞跃五仁月饼，快来一起飞起来吧！";
	updateShareScore(bestScore);
	appid = '';
}

function updateShareScore(bestScore) {
	if(bestScore > 0) {
		shareTitle = "我的熊猫可以飞到" + bestScore + "米，一起来全民拯救熊猫君";
	}
	else{
		shareTitle = "飞跃五仁月饼，快来一起飞起来吧！";
	}
}
