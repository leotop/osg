$(document).ready(function(){
	var top_block_height = parseInt($(".index_wrapper1").height()); // ������ ����� � ����
	// ���� ������ ��������� ������ 400 px, �� ���� ������ �������� �� �������, � �� ������� ���
	if (top_block_height > 400) {
		$(".inner_wrapper").css("margin-top", "-" + parseInt(top_block_height - 400) + "px")
	}
})
