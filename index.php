<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Send</title>
</head>
<style>
	* {
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		border: 0;
	}

	body {
		margin: 5rem;
	}

	#inputtext {
		border: 1px solid rgb(122, 122, 122);
		width: 100%;
		height: 100%;
		font-size: 80%;
		padding: 0px 0px 0px 10px;
	}

	.col {
		max-width: 380px;
		min-width: 200px;
		height: 60px;
	}

	.form-container {
		max-width: 380px;
		min-width: 200px;
		margin-left: auto;
		margin-right: auto;
	}

	.fields {
		max-width: 380px;
		min-width: 200px;
	}

	#formbutton {
		cursor: pointer;
		width: 100%;
		height: 100%;
		border-style: none;
		background-color: black;
		color: white;
		font-weight: 800;
		font-size: 12px;
	}

	.cl-button {
		max-width: 380px;
		min-width: 200px;
		height: 60px;
		margin: 1rem 0px 1rem 0px;
	}

	.ajax-contact-form {
		max-width: 380px;
		min-width: 200px;
	}

	#inputtext:focus {
		border: 0px solid #000;
		outline: none;
		border: 2px solid rgb(122, 122, 122);
	}
</style>

<body>
	<footer>
		<div class="form-container">
			<div class="note"></div>
			<div class="fields">
				<form class="ajax-contact-form" action="">
					<div class="row">
						<div class="col"><input type="email" name="email" value=""
								placeholder="Введите вашу электронную почту" id="inputtext" required></div>
					</div>
					<div class="cl-button"><input type="submit" name="submit" class="form-container__btn"
							value="Отправить" id="formbutton"></div>
				</form>
				<p style="font-family: 'Roboto',Arial,sans-serif; font-weight: 300; font-size: 14px; color: rgb(110, 110, 110);">Эта информация,
					нам нужна, чтобы связаться с вами после оплаты.</p>
			</div>
		</div>
	</footer>
	<script src="contactform.js"></script>
</body>

</html>