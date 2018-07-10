
/**
 * 获取浏览器的宽和高
 */
function getBrowserWidthAndHeight(){
	var arr = {width:0,height:0};
	try{
		var width = document.body.clientWidth || window.innerWidth;
		var height = document.body.clientHeight || window.innerHeight;
		arr["width"] = width;
		arr["height"] = height;
	}catch(err){
		console.log("get browser width and height err",err);
	}
	return arr;
}


/**
 * 根据id居中设置
 * lableById:需要居中的标签
 * width:宽度
 * height:高度
 * offsetWidth：宽度偏移量
 * offsetHeigt：高度偏移量
 */
function center(lableById,width,height,offsetWidth,offsetHeigt){
	try{  
		var helf_width = width/2-offsetWidth; //总宽度除以2减上宽度偏移量
		var helf_height = height/2-offsetHeigt; //总高度除以2减上高度偏移量
		document.getElementById(lableById).style.marginLeft = helf_width+"px";
		document.getElementById(lableById).style.marginTop = +helf_height+"px";
	}catch(err){
		console.log("set lableNameById:"+(lableNameById === undefined?"undefined":lableNameById)+" centering failure ",err);
	}
}
