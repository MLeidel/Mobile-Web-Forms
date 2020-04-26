<!doctype html>
<html lang="en">
 <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<title>formslight</title>
	<link rel="stylesheet" href="layout.css"> <!-- must be first -->
	<link rel="stylesheet" href="custom.css?aa">
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

<h1>formstyles Custom</h1><br>
Standard HTML form tags and <b>custom.css</b><br>
<i>used formslight.css as base</i><br><br>
<input type="checkbox" id="cb">
<label for="cb">CSS is Awesome</label>
<br>
<input type="checkbox" id="cc">
<label for="cc">CSS was Awesome</label>
<br>
<br>
<input type="radio" name="what" id="r1" checked>
<label for="r1">JS is Awesome</label>
<br>
<input type="radio" name="what" id="r2">
<label for="r2">Php is Awesome</label>
<br>
<input type="radio" name="what" id="r3">
<label for="r3">Python is Awesome</label>
<br>
<br>
<input type="button" value="Button">
<input type="button" disabled value="Button disabled">
<br>
<a href="#" class="button">default link style</a>
&nbsp;&nbsp;<input type="submit">
<br>
<br>
<label for="FN">Name:</label>
<input type="text" placeholder="input text" id="FN">
<br>
<label for="LN">Search:</label>
<input type="search" placeholder="input search" id="LN" size="25">
<br>
<label for="DN">Date:&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="date" id="DN">
<br>
<label for="QN">Number (between 1 and 5):</label>
<input type="number" id="QN" name="quantity" min="1" max="5">
<br><br>
<textarea id="TA" rows="5" cols="30" wrap="off">
Multi-line text
textarea
</textarea>
<br>
<br>
<select size="1" onchange="">
	<option value="" selected>Select Option
	<option value="">Green Eggs & ham
	<option value="">spagetti & meatballs
	<option value="">hamburgers & french fries
	<option value="">soup & sandwich
</select>
<br>

		</div>

		<div id="pgcolm2" class="flex-item">

<br>
<fieldset>
<legend>&nbsp;<b>Fieldset Legend</b>&nbsp;</legend>
<b>fieldset</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
Phasellus scelerisque sodales condimentum.
</fieldset>
<br><br>
<details>
<summary>Summary and Details</summary>
<p>Summary and detail tags produce this 'accordion' structure.
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</p>
</details>

<details>
<summary>Accordion</summary>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Phasellus scelerisque sodales condimentum.
</p>
</details>

<br>
<table><caption>Tables</caption>
	<tr>
		<th>HEAD 1</th>
		<th>HEAD 2</th>
		<th>HEAD 3</th>
	</tr>
	<tr>
		<td>data col 1</td>
		<td>data col 2</td>
		<td>data col 3</td>
	</tr>
	<tr>
		<td>data col 1</td>
		<td>data col 2</td>
		<td>data col 3</td>
	</tr>
	<tr>
		<td>data col 1</td>
		<td>data col 2</td>
		<td>data col 3</td>
	</tr>
	<tr>
		<td>data col 1</td>
		<td>data col 2</td>
		<td>data col 3</td>
	</tr>
	<tr>
		<td>data col 1</td>
		<td>data col 2</td>
		<td>data col 3</td>
	</tr>
</table>

<br><br>

  custom links:
  <br><br>
  <a href="#" class="link1">Link1 style click me</a>
  <br><br>
  <a href="#" class="link2">Link2 style click me</a>
  <br><br>
  <a href="#" class="link3">Link3 style click me</a>
  <br><br>
  <a href="#" class="link4">Link4 style click me</a>
  <br><br>
  <a href="#" class="link5">Link5 style click me</a>
  <br><br>
  <span>This is normal text size set in browser defaults</span><br>
  <span class='small'>This is 'small' (.8rem) defined in layout.css</span><br>
  <span class='large'>This is 'large' (1.2rem) defined in layout.css</span><br>

  <br>

	</div> <!--	end flex-item -->

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

