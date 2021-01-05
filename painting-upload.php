<?php



include('database.inc.php');
include('function.inc.php');

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File Upload UI Design</title>
	<link rel="stylesheet" href="assets/css/image2.css">
</head>
<BODY style="background-color:dodgerblue; " 
  >
  
<div class="wrapper">
	<div class="title">
		File Upload
	</div>
	<div class="file_upload_list">
		<ul>
			<li>
				<div class="file_item">
					<div class="format">
						<p>PNG</p>
					</div>
					<div class="file_progress">
						<div class="file_info">
							<div class="file_name">
								 Nature.png
							</div>
							<div class="file_size_wrap">
								<div class="file_size">2KB</div>
								<div class="file_close">X</div>
							</div>
						</div>
						<div class="progress">
							<div class="inner_progress" style="width: 90%;"></div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="file_item">
					<div class="format">
						<p>JPEG</p>
					</div>
					<div class="file_progress">
						<div class="file_info">
							<div class="file_name">
								Place.jpeg
							</div>
							<div class="file_size_wrap">
								<div class="file_size">6.2KB</div>
								<div class="file_close">X</div>
							</div>
						</div>
						<div class="progress">
							<div class="inner_progress" style="width: 73%;"></div>
						</div>
					</div>
				</div>
			</li>
			
			<li>
				<div class="file_item">
					<div class="format">
						<p>JPG</p>
					</div>
					<div class="file_progress">
						<div class="file_info">
							<div class="file_name">
								painting.jpg
							</div>
							<div class="file_size_wrap">
								<div class="file_size">1MB</div>
								<div class="file_close">X</div>
							</div>
						</div>
						<div class="progress">
							<div class="inner_progress" style="width: 50%;"></div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="file_item">
					<div class="format">
						<p>PSD</p>
					</div>
					<div class="file_progress">
						<div class="file_info">
							<div class="file_name">
								Painting.psd
							</div>
							<div class="file_size_wrap">
								<div class="file_size">10MB</div>
								<div class="file_close">X</div>
							</div>
						</div>
						<div class="progress">
							<div class="inner_progress" style="width: 25%;"></div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<div class="choose_file">
		<label for="choose_file">
			<input type="file" id="choose_file">
			<span>Choose Files</span>
		</label>
	</div>
</div>

</body>
</html>

