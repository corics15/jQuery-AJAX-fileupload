$(document).ready(function() {
	$("#input_filename").fileinput();

	$(document).on('submit', '#frmUpload', function(e) {
		e.preventDefault();
		var data = new FormData($('#frmUpload')[0]);
		$.ajax({
			url		: 'Main/upload',
			type 	: 'post',
			contentType : false,
			cache 	: false,
			processData : false,
			data 	: data,
			success : function(response) {
				if (response == 'success') {
					$('.msg').html('<div class="alert alert-success">File was uploaded successfully.</div>');
				} else {
					var error = $.parseJSON(response);
					$('.msg').html('<div class="alert alert-danger">'+error.error+'</div>');
				}
			}
		});

	});

});