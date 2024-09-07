html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Multiple Videos Background</title>
<style>
    body {
        margin: 0;
        padding: 0;
        overflow: hidden;
    }
    .video-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }
    video {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -1;
        object-fit: cover;
    }
</style>
</head>
<body>
<div class="video-container">
    <video autoplay muted loop>
        <source src="..//Video//bus.mp4" type="video/mp4">
    </video>
    <video autoplay muted loop>
        <source src="video2.mp4" type="video/mp4">
    </video>
    <video autoplay muted loop>
        <source src="video3.mp4" type="video/mp4">
    </video>
</div>
</body>
</html>