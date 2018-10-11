<!-- header -->
<?php
	include "header.php";
?>

<!-- body -->
<div class="one">
  <img src="../public/images/0.jpg" class="img" alt="" width="100%" height="150vh" >
  <div class="caption">
    <h1 class="heading">SUBMIT MUSIC, NEWS AND EVENTS</h1>
  </div>
</div>
<!-- tabs -->
<div class="container-fluid" style="margin-top: 5vh;">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item active">
			<a href="#music" class="nav-link" id="music-tab" data-toggle="tab" aria-controls="music" aria-selected="true">MUSIC UPLOAD</a>
		</li>
		<li class="nav-item ">
			<a href="#video" class="nav-link" id="video-tab" data-toggle="tab" aria-controls="video" aria-selected="false">VIDEO UPLOAD</a>
		</li><li class="nav-item ">
			<a href="#event" class="nav-link" id="event-tab" data-toggle="tab" aria-controls="event" aria-selected="false">EVENT UPLOAD</a>
		</li>
		</li><li class="nav-item ">
			<a href="#news1" class="nav-link" id="news-tab" data-toggle="tab" aria-controls="news1" aria-selected="false">NEWS UPLOAD</a>
		</li>
	</ul>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade active" id="music" role="tabpanel" aria-labelledby="music-tab">
			<form class="form" action="" method="">
				<div class="container-fluid">
					<div class="row" style="margin-top: 2vh;">
						<div class="col-lg-4" style="border-right: 1px solid #eee;">
							<div class="form-group" style="display: flex; flex-direction: column;">
								<img src="../public/images/tatiana-manaois-like-you.jpg" alt="avatar" height="100%" width="100%" style="margin-bottom: 1vh;">
								<input type="file" name="file" class="form-control">
							</div>
						</div>
						<div class="col-lg-8">
							<div class="form-group"> 
								<label for="music title" class="form-label">Title <span style="color: red;">*</span></label>
								<input type="text" name="tracktitle" placeholder="eg. drop the world" class="form-control">
							</div>
							<div class="form-group">
								<label for="musicGenre">Genre</label>
								<select class="form-control" name="genre">
									<option value="choose">Choose...</option>
									<option value="Local Gospel">Local Gospel</option>
									<option value="Urban Gospel">Urban Gospel</option>
								</select>
							</div>
							<div class="form-group">
								<label for="url" class="form-label">Track URL or Upload:</label>
								<input type="radio" name="radio" value="Track URL" id="url1">
								<label for="track url">Track URL</label>
								<input type="radio" name="radio" value="Track Upload" id="upload1">
								<label for="track upload">Track Upload</label>
								<input type="file" name="" class="form-control" style="display: none;" id="upload">
								<input type="url" name="" placeholder="eg. https://google.com/droptheworld/" class="form-control" id="url" style="display: none;">
							</div>
							<div class="form-group">
								<label for="trackdescription" class="form-label">Description</label>
								<textarea name="Description" rows="8" cols="70" placeholder="Describe your track" class="form-control"></textarea>
							</div>
							<input type="submit" name="" value="Submit" class="btn btn-success pull-right" style="height: 7vh; width: 20%;">
							<input type="reset" name="" value="Reset" class="btn btn-primary">
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
			<form class="form" action="" method="">
				<div class="container-fluid">
					<div class="row" style="margin-top: 2vh;">
						<div class="col-lg-4" style="border-right: 1px solid #eee;">
							<div class="form-group" style="display: flex; flex-direction: column;">
								<img src="../public/images/tatiana-manaois-like-you.jpg" alt="avatar" height="100%" width="100%" style="margin-bottom: 1vh;">
								<input type="file" name="file" class="form-control">
							</div>
						</div>
						<div class="col-lg-8">
							<div class="form-group"> 
								<label for="music title" class="form-label">Title <span style="color: red;">*</span></label>
								<input type="text" name="tracktitle" placeholder="eg. drop the world" class="form-control">
							</div>
							<div class="form-group">
								<label for="musicGenre">Genre</label>
								<select class="form-control" name="genre">
									<option value="choose">Choose...</option>
									<option value="Local Gospel">Local Gospel</option>
									<option value="Urban Gospel">Urban Gospel</option>
								</select>
							</div>
							<div class="form-group">
								<label for="url" class="form-label">Video URL or Upload:</label>
								<input type="radio" name="radio" value="Track URL" id="url1">
								<label for="video url">Video URL</label>
								<input type="radio" name="radio" value="Track Upload" id="upload1">
								<label for="video upload">Video Upload</label>
								<input type="file" name="" class="form-control" style="display: none;" id="upload">
								<input type="url" name="" placeholder="eg. https://google.com/droptheworld/" class="form-control" id="url" style="display: none;">
							</div>
							<div class="form-group">
								<label for="trackdescription" class="form-label">Description</label>
								<textarea name="Description" rows="8" cols="70" placeholder="Describe your track" class="form-control"></textarea>
							</div>
							<input type="submit" name="" value="Submit" class="btn btn-success pull-right" style="height: 7vh; width: 20%;">
							<input type="reset" name="" value="Reset" class="btn btn-primary">
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="tab-pane fade" id="event" role="tabpanel" arialabelledby="event-tab">
			<form class="form" action="" method="">
				<div class="container-fluid">
					<div class="row" style="margin-top: 2vh;">
						<div class="col-lg-4" style="border-right: 1px solid #eee;">
							<div class="form-group" style="display: flex; flex-direction: column;">
								<img src="../public/images/tatiana-manaois-like-you.jpg" alt="avatar" height="100%" width="100%" style="margin-bottom: 1vh;">
								<input type="file" name="file" class="form-control">
							</div>
						</div>
						<div class="col-lg-8">
							<div class="form-group"> 
								<label for="music title" class="form-label">Title <span style="color: red;">*</span></label>
								<input type="text" name="tracktitle" placeholder="eg. drop the world" class="form-control">
							</div>
							<div class="form-group">
								<label for="musicGenre">Genre</label>
								<select class="form-control" name="genre">
									<option value="choose">Choose...</option>
									<option value="Local Gospel">Local Gospel</option>
									<option value="Urban Gospel">Urban Gospel</option>
								</select>
							</div>
							<div class="form-group">
								<label for="url" class="form-label">Track URL or Upload:</label>
								<input type="radio" name="radio" value="Track URL" id="url1">
								<label for="track url">Track URL</label>
								<input type="radio" name="radio" value="Track Upload" id="upload1">
								<label for="track upload">Track Upload</label>
								<input type="file" name="" class="form-control" style="display: none;" id="upload">
								<input type="url" name="" placeholder="eg. https://google.com/droptheworld/" class="form-control" id="url" style="display: none;">
							</div>
							<div class="form-group">
								<label for="trackdescription" class="form-label">Description</label>
								<textarea name="Description" rows="8" cols="70" placeholder="Describe your track" class="form-control"></textarea>
							</div>
							<input type="submit" name="" value="Submit" class="btn btn-success pull-right" style="height: 7vh; width: 20%;">
							<input type="reset" name="" value="Reset" class="btn btn-primary">
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="tab-pane fade" id="news1" role="tabpanel" arialabelledby="news-tab">
			<form class="form" action="" method="">
				<div class="container-fluid">
					<div class="row" style="margin-top: 2vh;">
						<div class="col-lg-4" style="border-right: 1px solid #eee;">
							<div class="form-group" style="display: flex; flex-direction: column;">
								<img src="../public/images/tatiana-manaois-like-you.jpg" alt="avatar" height="100%" width="100%" style="margin-bottom: 1vh;">
								<input type="file" name="file" class="form-control">
							</div>
						</div>
						<div class="col-lg-8">
							<div class="form-group"> 
								<label for="music title" class="form-label">Title <span style="color: red;">*</span></label>
								<input type="text" name="tracktitle" placeholder="eg. drop the world" class="form-control">
							</div>
							<div class="form-group">
								<label for="musicGenre">Genre</label>
								<select class="form-control" name="genre">
									<option value="choose">Choose...</option>
									<option value="Local Gospel">Local Gospel</option>
									<option value="Urban Gospel">Urban Gospel</option>
								</select>
							</div>
							<div class="form-group">
								<label for="url" class="form-label">Track URL or Upload:</label>
								<input type="radio" name="radio" value="Track URL" id="url1">
								<label for="track url">Track URL</label>
								<input type="radio" name="radio" value="Track Upload" id="upload1">
								<label for="track upload">Track Upload</label>
								<input type="file" name="" class="form-control" style="display: none;" id="upload">
								<input type="url" name="" placeholder="eg. https://google.com/droptheworld/" class="form-control" id="url" style="display: none;">
							</div>
							<div class="form-group">
								<label for="trackdescription" class="form-label">Description</label>
								<textarea name="Description" rows="8" cols="70" placeholder="Describe your track" class="form-control"></textarea>
							</div>
							<input type="submit" name="" value="Submit" class="btn btn-success pull-right" style="height: 7vh; width: 20%;">
							<input type="reset" name="" value="Reset" class="btn btn-primary">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- footer -->
<?php
include "footer.php";
?>
</body>
<script type="text/javascript" src="../public/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf-8" src="../public/js/index.js"></script>
<script type="text/javascript">
	var myDate = new Date();
    var dateString = myDate.toLocalString();
    document.getElementById("date").innerHTML = dateString;
</script>
</html> 