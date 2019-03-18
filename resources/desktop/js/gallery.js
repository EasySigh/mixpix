// Gallery
$('.gridly').gridly({
	base: 1,
	gutter: 15,
	columns: 20
	// columns: responsiveColumns(window.innerHeight)
});

// function responsiveColumns(height) {
// 	if (height < 901) {
// 		return 15;
// 	}
// 	else if (height < 640) {
// 		return 20;
// 	}
// 	else {
// 		return  30;
// 	}
// }