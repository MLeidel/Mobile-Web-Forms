<!doctype html>
<html lang="en">
 <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<title>form styles home</title>
	<link rel="stylesheet" href="layout.css?t"> <!-- must be first -->
	<link rel="stylesheet" href="formslight.css?t">
 </head>

<body id="BOD">

<nav role="navigation">
  <div id="menuToggle">
    <input type="checkbox" title="menu" />
    <span></span>
    <span></span>
    <span></span>
    <ul id="menu">
      <a href="index.php"><li>Home</li></a>
      <a href="formslight.php"><li>Light</li></a>
      <a href="formsdark.php"><li>Dark</li></a>
      <a href="custom.php"><li>Custom</li></a>
    </ul>
  </div>
</nav>

	<div class="container">

	<div id="pgheader"> <!-- REGULAR HEADING -->
	<center>
		<br>
		<h1>CSS Form Styling Demo</h1>
	</center>
	</div>

	<div id="pgsmheader"> <!-- SMALL HEADING	-->
	<center>
	<h2>CSS Form Styling Demo</h2>
	</center>
	</div>


<!-- ############## MAIN COLUMNS IN FLEX CONTAINER ################ -->

	<div class="flex-container">

		<div id="pgcolm1" class="flex-item">

    <h2>layout.css</h2>

    <b>layout.css and the HTML in this page provide the flexible
    menu, heading, and body that adjust to different screen sizes.</b>
    <br><br>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Phasellus scelerisque sodales condimentum. Quisque facilisis,
		ipsum vel pretium pretium, nisi turpis suscipit odio,
		eu vulputate nulla diam a nunc. Quisque aliquet metus in
		quam consectetur in congue enim sollicitudin.
		Curabitur vehicula erat nec elit ultrices ac auctor risus cursus.
		Fusce aliquet sagittis lacinia. Pellentesque habitant morbi tristique
		senectus et netus et malesuada fames ac turpis egestas.
		<br><br>
		Pellentesque in turpis id nulla molestie ornare eu ut elit.
		Maecenas posuere lacinia vehicula. Nunc scelerisque blandit nibh,
		sed pretium magna tempor sed. In fermentum, ipsum eu dapibus dignissim,
		nulla lorem lobortis velit, nec pharetra tortor leo ut mauris.
		Donec lacus augue, congue blandit faucibus ut, convallis in massa.

		</div>

		<div id="pgcolm2" class="flex-item">

		Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Phasellus scelerisque sodales condimentum. Quisque facilisis,
		ipsum vel pretium pretium, nisi turpis suscipit odio,
		eu vulputate nulla diam a nunc. Quisque aliquet metus in
		quam consectetur in congue enim sollicitudin.
		Curabitur vehicula erat nec elit ultrices ac auctor risus cursus.
		Fusce aliquet sagittis lacinia. Pellentesque habitant morbi tristique
		senectus et netus et malesuada fames ac turpis egestas.
		<br><br>
		Pellentesque in turpis id nulla molestie ornare eu ut elit.
		Maecenas posuere lacinia vehicula. Nunc scelerisque blandit nibh,
		sed pretium magna tempor sed. In fermentum, ipsum eu dapibus dignissim,
		nulla lorem lobortis velit, nec pharetra tortor leo ut mauris.
		Donec lacus augue, congue blandit faucibus ut, convallis in massa.
		Donec feugiat aliquet venenatis. Curabitur erat ante, iaculis vel
		varius sit amet, venenatis at turpis. Aliquam ornare ullamcorper nunc,
		eget tincidunt quam congue sed. Suspendisse in lacus velit,
		viverra porta metus.

		</div>

	</div> <!--	end flex-container -->

	</div> <!-- end container -->
  <br><br><br><br>
	<hr>

	<div id="pgfooter">	<!-- FOOTERS	-->
	<center>
		Flexbox Mobile Web Template&nbsp;&nbsp;
		<a onclick="changeBkgd();" style="cursor: pointer;"><i>change background</i></a>
	</center>
	</div>
	<div id="pgsmfooter">
		Flexbox Mobile Web Template
		<!-- <input type="button" onclick="changeBkgd();" value="Change Background"> -->
	</div>

</body>
</html>

