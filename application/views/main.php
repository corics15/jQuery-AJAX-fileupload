<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery AJAX FileUpload</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/css/fileinput.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>jQuery AJAX FileUpload</h3>
				<p>Implements bootstrap-fileinput by <a href="https://github.com/kartik-v/bootstrap-fileinput">kartik-v</a> and CodeIgniter 3.1.2</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Directory Contents
					</div>
					<div class="panel-body show-contents">
						<?php
							$this->load->helper('directory');
							$map = directory_map('./assets/uploads/');
						?>
						<ul class="list-group directory-contents">
							<?php foreach ($map as $r) : ?>
								<li class="list-group-item">
									<img src="./assets/uploads/<?= $r ?>"
										class="img-thumbnail"
										data-toggle="tooltip"
										title="<?= $r ?>">
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 md-offset-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Select a file to upload. Only "gif, jpg, png" files are supported, 1MB max.
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<form enctype="multipart/form-data" id="frmUpload">
									<div class="form-group">
										<input name="input_filename" id="input_filename" class="file file-loading" data-allowed-file-extensions='["gif", "jpg", "png"]' type="file">
									</div>
								</form>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="msg"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/plugins/canvas-to-blob.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/plugins/sortable.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/plugins/purify.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/fileinput.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/main.js') ?>"></script>
  </body>
</html>