
<!DOCTYPE html>
<html>
		<head>
			<title>Koelbox op wielen</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
			<link rel="stylesheet" href="css/stijl.css">
		</head>

<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="index.html">Home</a>
			</li>
		<li class="nav-item">
			<a class="nav-link" href="materiaal.html">Materiaal</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="stappenplan.html">Stappenplan</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="logboek.html">Logboek</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="stage.html">Stage</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="contact.php">Contact</a>
		</li>
		</ul>
	</nav>

	<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Als u een vraag of opmerking heeft laat het gerust weten.</p>
  </div>

  <div class="row">
    <div class="column">
      <form action="connect.php" method="post" class="form" role="form" name="contact=form">
				<label for="Naam">Naam</label>
				<input type="text" id="Naam" name="Naam" placeholder="Uw naam..">
				<label for="Email">E-mail</label>
				<input type="text" id="Email" name="Email" placeholder="Uw e-mail..">
				<label for="Onderwerp">Onderwerp</label>
				<input type="text" id="Onderwerp" name="Onderwerp" placeholder="Onderwerp..">
        <label for="Bericht">Bericht</label>
        <textarea id="Bericht" name="Bericht" placeholder="Wat is uw bericht.." style="height:170px"></textarea>
        <input type="verzend" value="verzend">
      </form>
    </div>
  </div>

</div>
<footer> Gemaakt door Thibo Demaret </footer>
</body>
</html>
