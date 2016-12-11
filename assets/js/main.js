$(document).ready(function() {

	$(function () {
	 	$('[data-toggle="tooltip"]').tooltip()
	});

	$("#input_filename").fileinput();

	$(document).on('submit', '#frmUpload', function(e) {
		e.preventDefault();
		var content = '<img src="./assets/img/loading.gif">&nbsp;Uploading, please wait...';
		$('.msg').html(content);
		$('.fileinput-upload-button').prop('disabled', true);
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
					$('.msg').html('<div class="alert alert-success">File was uploaded successfully.</div>').fadeIn();
					setTimeout(function() { $('.msg').fadeOut(); }, 1500);
					$('.fileinput-remove-button').trigger('click');
					$.ajax({
						url 	: 'Main/refreshDirectoryContents',
						type 	: 'post',
						success : function(data) {
							$('.show-contents').html(data);
						}
					});
				} else {
					var error = $.parseJSON(response);
					$('.msg').html('<div class="alert alert-danger">'+error.error+'</div>');
				}
			}
		});
	});

});