<!DOCTYPE  HTML>
<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script src="js/misc.js"></script>

		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/normalize/2.0.1/normalize.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/css.css" media="screen" />
	</head>
	<body>

		<div class="container">

			<div class="row no_margin">
				<h1>h1 (no_margin)</h1>
			</div>

			<div class="row no_margin">
				<h2>h2 (no_margin)</h2>
			</div>

			<div class="row no_margin">
				<h3>h3 (no_margin)</h3>
			</div>

			<div class="row no_margin">
				<h4>h4 (no_margin) - same as body except font</h4>
			</div>

			<div class="row">
				<p class="align_right small">Small Text (aligned right)</p>
			</div>

			<div class="row">
				<p class="align_center">Normal Text (centered)</p>
			</div>

			<div class="row">
				<p class="large">Large (aligned left)</p>
			</div>

			<div class="row">
				<input type="text" class="" placeholder="Placeholder" />
			</div>

			<div class="row has_info">
				<input type="text" class="" placeholder="Placeholder" />
			</div>

			<div class="row fw_msg">
				<div class="error_msg">There is an error.</div>
				<div class="info_msg">Some helpful info.</div>
			</div>

			<div class="row">
				<select class="icon-drop_down">
					<option value="" selected>Dropdown</option>
					<option value="1">Placeholder</option>
					<option value="1">Placeholder</option>
					<option value="1">Placeholder</option>
				</select>
			</div>

			<div class="row">
				<div class="prepend">
					<button tabindex="-1" class="primary icon-clock" ></button>
					<button tabindex="-1" class="error icon-error"></button>
					<select class="icon-drop_down">
						<option value="" selected>Dropdown</option>
						<option value="1">Placeholder</option>
						<option value="1">Placeholder</option>
						<option value="1">Placeholder</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="append">
					<input type="text" class="" placeholder="Placeholder" />
					<button tabindex="-1" class="primary icon-calendar" ></button>
					<button tabindex="-1" class="error icon-error"></button>
				</div>
			</div>

			<div class="row has_errors">
				<div class="prepend">
					<button tabindex="-1" class="primary icon-clock" ></button>
					<button tabindex="-1" class="error icon-error"></button>
					<input type="text" class="error_field" placeholder="Placeholder" />
				</div>
			</div>

			<div class="row fw_msg">
				<div class="error_msg">There is an error.</div>
				<div class="info_msg">Some helpful info.</div>
			</div>

			<div class="row split">
				<div>
					<input type="text" placeholder="Placeholder" />
				</div>

				<div>
					<select class="icon-drop_down">
						<option value="" selected>Dropdown</option>
						<option value="1">Placeholder</option>
						<option value="1">Placeholder</option>
						<option value="1">Placeholder</option>
					</select>
				</div>
			</div>

			<div class="row split">
				<div>
					<input type="text" placeholder="Placeholder" />
				</div>

				<div class="extra_width">
					<select class="icon-drop_down">
						<option value="" selected>Dropdown</option>
						<option value="1">Placeholder</option>
						<option value="1">Placeholder</option>
						<option value="1">Placeholder</option>
					</select>
				</div>

				<div>
					<input type="text" placeholder="Placeholder" />
				</div>
			</div>

			<div class="row split">
				<div class="prepend">
					<button tabindex="-1" class="primary icon-clock" ></button>
					<button tabindex="-1" class="error icon-error"></button>
					<input type="text" class="" placeholder="Placeholder" />
				</div>


				<div class="append">
					<input type="text" class="" placeholder="Placeholder" />
					<button tabindex="-1" class="primary icon-clock" ></button>
					<button tabindex="-1" class="error icon-error"></button>
				</div>
			</div>

			<div class="row">
				<ul class="no_list_style border">
					<li><label><input type="checkbox" class="custom"><span></span> Checkbox</label></li>
					<li><label><input type="checkbox" class="custom"><span></span> Checkbox</label></li>
					<li><label><input type="checkbox" class="custom"><span></span> Checkbox</label></li>
					<li><label><input type="checkbox" class="custom"><span></span> Checkbox</label></li>
				</ul>
			</div>

			<div class="row">
				<div class="toggle_header primary large full_width">
					A large full_width Toggle
				</div>

				<div class="toggle_content">

					<p class="small">Test words to show some sweet spacing inside the content area. This Paragraph has .small</p>

					<ul class="no_list_style zebra right_align">
						<li><label><input type="radio" class="custom"><span></span> Radio Button</label></li>
						<li><label><input type="radio" class="custom"><span></span> Radio Button</label></li>
						<li><label><input type="radio" class="custom"><span></span> Radio Button</label></li>
						<li><label><input type="radio" class="custom"><span></span> Radio Button</label></li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="toggle_header tertiary">
					A .split not full_width Toggle
				</div>

				<div class="toggle_content">
					<div class="split">
						<div>
							<p class="small">Test words to show some sweet spacing inside the content area. This Paragraph has .small</p>
						</div>

						<div>
							<ul class="no_list_style zebra right_align">
								<li><label><input type="radio" class="custom"><span></span> Radio Button</label></li>
								<li><label><input type="radio" class="custom"><span></span> Radio Button</label></li>
								<li><label><input type="radio" class="custom"><span></span> Radio Button</label></li>
								<li><label><input type="radio" class="custom"><span></span> Radio Button</label></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div tabindex="-1" class="tertiary fake_button dbl large">Large Div Button w/ dbl</div>
			</div>

			<div class="row">
				<div tabindex="-1" class="secondary fake_button pull_left">Div Button</div>
			</div>

			<div class="row">
				<a tabindex="-1" class="tertiary fake_button pull_right">Link Button</a>
			</div>

			<div class="row split">
				<div>
					<div tabindex="-1" class="secondary fake_button">Div Button</div>
				</div>
	
				<div>
					<a tabindex="-1" class="tertiary fake_button">Link Button</a>
				</div>
			</div>
		</div>

	</body>
</html>