/*
 	存放登陆页面的一些布局
 * */


/**
 * 设置登陆容器居中显示
 */
function setLoginContainer(lableById){
	console.log("执行");
	var arr = getBrowserWidthAndHeight(); //获取浏览器的宽度与高度
	console.log(arr);
	center(lableById,arr["width"],arr["height"],255,30);
}
