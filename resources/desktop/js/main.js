$(function() {
	//Hide default Uppy paragraph
	$('.uppy-DashboarAddFiles-info').addClass('d-none');

	// Upload Picture Button effect
	$(".upload-btn").on("click", showUploadBlock)
	// Click on background to close Upload Block
	$(".overlay").on("click", hideUploadBlock)


	function showUploadBlock() {
		$('.gridly').fadeTo('slow', 0);
		$('.upload-article').delay(700).fadeOut('slow', 0);
		setTimeout(function() {
			$('.upload').addClass('col-lg-8');
			$('.upload-article').addClass('d-none');
			$('.overlay').addClass('show');
			$('.select').addClass('d-flex').fadeIn('slow').css("opacity", "");
		}, 1400);
	};


	function hideUploadBlock() {
		$('.select').fadeTo('slow', 0);
		setTimeout(function() {
			$('.upload').removeClass('col-lg-8');
			$('.select').removeClass("d-flex");
			$('.overlay').removeClass('show');
			$('.upload-article').fadeIn('slow').removeClass('d-none');
			$('.gridly').css("opacity", "");
		 }, 700);
	};

	// Close modal and open Upload Block
	$('#addMore').click(function () {
		$('#checkout-modal').modal('hide');
		showUploadBlock();
	})

	$('.remove-item').on('click', function() {
      var hisParent = $(this).closest('.product');
      hisParent.remove();
    })
});