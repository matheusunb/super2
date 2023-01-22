<!DOCTYPE HTML>
 <html lang="pt-br">

<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>SUPER ADM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="lib/js/jquery-3.5.1.min.js"></script>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

	<script>
		const triggers = [
		'primary',
		'secondary',
		'success',
		'danger',
		'warning',
		'info',
		'light',
		'dark',
		];
		const basicInstances = [
		'alert-primary',
		'alert-secondary',
		'alert-success',
		'alert-danger',
		'alert-warning',
		'alert-info',
		'alert-light',
		'alert-dark',
		];

		triggers.forEach((trigger, index) => {
		let basicInstance = mdb.Alert.getInstance(document.getElementById(basicInstances[index]));
		document.getElementById(trigger).addEventListener('click', () => {
			basicInstance.show();
		});
		});
	</script>


</head>

<body>

<!-- Trigger buttons -->
<button type="button" id="primary" class="btn btn-primary m-1">Primary</button>
<button type="button" id="secondary" class="btn btn-secondary m-1">Secondary</button>
<button type="button" id="success" class="btn btn-success m-1">Success</button>
<button type="button" id="danger" class="btn btn-danger m-1">Danger</button>
<button type="button" id="warning" class="btn btn-warning m-1">Warning</button>
<button type="button" id="info" class="btn btn-info m-1">Info</button>
<button type="button" id="light" class="btn btn-light m-1">Light</button>
<button type="button" id="dark" class="btn btn-dark m-1">Dark</button>

<!-- Alerts -->
<div
  class="alert fade"
  id="alert-primary"
  role="alert"
  data-mdb-color="primary"
  data-mdb-position="top-right"
  data-mdb-stacking="true"
  data-mdb-width="535px"
  data-mdb-append-to-body="true"
  data-mdb-hidden="true"
  data-mdb-autohide="true"
  data-mdb-delay="2000"
>
  A simple primary alert with
  <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div
  class="alert fade"
  id="alert-secondary"
  role="alert"
  data-mdb-color="secondary"
  data-mdb-position="top-right"
  data-mdb-stacking="true"
  data-mdb-width="535px"
  data-mdb-append-to-body="true"
  data-mdb-hidden="true"
  data-mdb-autohide="true"
  data-mdb-delay="2000"
>
  A simple secondary alert with
  <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div
  class="alert fade"
  id="alert-success"
  role="alert"
  data-mdb-color="success"
  data-mdb-position="top-right"
  data-mdb-stacking="true"
  data-mdb-width="535px"
  data-mdb-width="535px"
  data-mdb-append-to-body="true"
  data-mdb-hidden="true"
  data-mdb-autohide="true"
  data-mdb-delay="2000"
>
  A simple success alert with
  <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div
  class="alert fade"
  id="alert-danger"
  role="alert"
  data-mdb-color="danger"
  data-mdb-position="top-right"
  data-mdb-stacking="true"
  data-mdb-width="535px"
  data-mdb-width="535px"
  data-mdb-append-to-body="true"
  data-mdb-hidden="true"
  data-mdb-autohide="true"
  data-mdb-delay="2000"
>
  A simple danger alert with
  <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div
  class="alert fade"
  id="alert-warning"
  role="alert"
  data-mdb-color="warning"
  data-mdb-position="top-right"
  data-mdb-stacking="true"
  data-mdb-width="535px"
  data-mdb-width="535px"
  data-mdb-append-to-body="true"
  data-mdb-hidden="true"
  data-mdb-autohide="true"
  data-mdb-delay="2000"
>
  A simple warning alert with
  <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div
  class="alert fade"
  id="alert-info"
  role="alert"
  data-mdb-color="info"
  data-mdb-position="top-right"
  data-mdb-stacking="true"
  data-mdb-width="535px"
  data-mdb-width="535px"
  data-mdb-append-to-body="true"
  data-mdb-hidden="true"
  data-mdb-autohide="true"
  data-mdb-delay="2000"
>
  A simple info alert with
  <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div
  class="alert fade"
  id="alert-light"
  role="alert"
  data-mdb-color="light"
  data-mdb-position="top-right"
  data-mdb-stacking="true"
  data-mdb-width="535px"
  data-mdb-width="535px"
  data-mdb-append-to-body="true"
  data-mdb-hidden="true"
  data-mdb-autohide="true"
  data-mdb-delay="2000"
>
  A simple light alert with
  <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div
  class="alert fade"
  id="alert-dark"
  role="alert"
  data-mdb-color="dark"
  data-mdb-position="top-right"
  data-mdb-stacking="true"
  data-mdb-width="535px"
  data-mdb-width="535px"
  data-mdb-append-to-body="true"
  data-mdb-hidden="true"
  data-mdb-autohide="true"
  data-mdb-delay="2000"
>
  A simple dark alert with
  <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>

</body>
</html>