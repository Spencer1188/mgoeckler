<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Maximilian Göckler</title>
	<?php require_once("favicon.php"); ?>
	<link href="assets/css/mycss.css" rel="stylesheet" type="text/css">
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	
<header>
  <div class="header container">
	 <div class="nav row">
	 </div>
	<div class="row justify-content-center" style="margin-top: 20vw;">
			<h1 class="Headerue text-white text-roboto col text-center"></h1>
	  </div>
    <div class="video-container">
      <video autoplay loop muted id="video-bg">

        <source src="assets/video/bg/main-bg.mp4" type="video/mp4">

      </video>
    </div>
  </div>
</header>
	
</body>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/jquery.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
	<script>
	
	var typed = new Typed('.Headerue', {
	  strings: ["Maximilian Göckler", "Webdesigner"],
	  typeSpeed: 100,
	  backDelay: 1000,
	  loop: true
	});
	
	var controller = new ScrollMagic.Controller();

	var tween = TweenMax.to("#animate3", 1, {className: "+=fish"});

	var scene = new ScrollMagic.Scene({triggerElement: "#trigger3", duration: 200, offset: -50})
					.setTween(tween)
					.addIndicators({name: "tween css class"}) // add indicators (requires plugin)
					.addTo(controller);

</script>
</html>
