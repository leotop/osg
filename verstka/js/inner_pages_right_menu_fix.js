$(document).ready(function(){
	var top_block_height = parseInt($(".index_wrapper1").height()); // высота блока с меню
	// Если высота оказалась больше 400 px, то меню должно налезать на контент, а не толкать его
	if (top_block_height > 400) {
		$(".inner_wrapper").css("margin-top", "-" + parseInt(top_block_height - 400) + "px")
	}
})
