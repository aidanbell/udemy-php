<?php
include('includes/config.php');

// To manually logout
// session_destroy();

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}
?>

<html>
<head>
	<title>Welcome to Slotify!</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>

<body>
	<div id="nowPlayingBarContainer">
		<div id="nowPlayingBar">
			<div id="nowPlayingLeft">
				<div class="content">
					<span class="albumLink">
						<img class="albumArtwork" src="./assets/images/unnamed.jpg" alt="Album Art">
					</span>
					<div class="trackInfo">
						<span class="trackName">
							<span>Happy Birthday</span>
						</span>
						<span class="artistName">
							<span>Aidan Bell</span>
						</span>
					</div>
				</div>
			</div>
			<div id="nowPlayingCenter">
				<div class="content playerControls">
					<div class="buttons">
						<button type="button" name="button" class="controlButton shuffle" title="Shuffle Button">
							<i class="material-icons">shuffle</i>
						</button>
						<button type="button" name="button" class="controlButton previous" title="Previous Button">
							<i class="material-icons">skip_previous</i>
						</button>
						<button type="button" name="button" class="controlButton play" title="Play Button">
							<i class="material-icons">play_circle_outline</i>
						</button>
						<button type="button" name="button" class="controlButton pause" title="Pause Button" style="display: none;">
							<i class="material-icons">pause_circle_outline</i>
						</button>
						<button type="button" name="button" class="controlButton next" title="Next Button">
							<i class="material-icons">skip_next</i>
						</button>
						<button type="button" name="button" class="controlButton repeat" title="Repeat Button">
							<i class="material-icons">repeat</i>
						</button>
					</div>
					<div class="playbackBar">
						<span class="progressTime current">0:00</span>
						<div class="progressBar">
							<div class="progressBarBg">
								<div class="progress"></div>
							</div>
						</div>
						<span class="progressTime remaining">0:00</span>
					</div>
				</div>
			</div>
			<div id="nowPlayingRight">
				<div class="volumeBar">
					<button class="controlButton volume" type="button" name="button" title="Volume Button">
						<i class="material-icons">volume_up</i>
					</button>
					<div class="progressBar">
						<div class="progressBarBg">
							<div class="progress"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
