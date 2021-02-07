<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Criptografia md5 online">
	<meta name="keywords"
		content="criptografia,criptografia md5,criptografia md5 online, md5 online, criptografia, criptografia sengura, senha">

	<meta name="application-name" content="Criptografia md5" />

	<title>Criptografia MD5 online</title>
	<style>
		input {
			border: none;
			align-items: center;
			justify-content: center;
			flex-direction: row;
			width: 50%;
			height: 70px;
			padding: 0 15px;
			max-width: 750px;
			border-radius: 8px;
			background-color: #fff;
			box-shadow: 0 32px 32px 0 rgba(51, 41, 39, .05);
			font-size: 2em;
			text-align: center;
			color: #929292;
		}

		body {
			text-align: center;
			background: #eefcff;
		}

		.content {
			margin-top: 11%;
			padding: 15px
		}

		.title {
			color: #333;
			max-width: 458px;
			line-height: .9em;
			text-align: center;
			margin-bottom: 20px;
			font-size: 58px;
			font-family: Poppins-SemiBold, Helvetica, Arial, sans-serif;
		}

		.result {
			color: #333;
			line-height: .9em;
			text-align: center !important;
			font-size: 45px;
			font-family: Poppins-SemiBold, Helvetica, Arial, sans-serif;
		}

		#message {
			font-size: 0.3em;
			display: none;
			margin-top: -50px;
		}

		html body div.content class.title h3 a {
			font-size: .2em;
			text-decoration: none;
			padding: 15px;
			border: 1px solid #bcc9cc;
			color: #bcc9cc;
		}
	</style>
</head>

<body>
	<div class="content">
		<class class="title">
			<h3>we make your life easier
				<small style="font-size: 23px;"><br />Crypt md5</small> <a href="http://bcrypt.arocweb.com.br">Change to
					Bcrypt hashes</a>
			</h3>
			</h3>
		</class>
		<form name="" method="POST" action="">
			<input name="md5"
				value="<?php echo $_REQUEST['md5']; ?>"
				placeholder="Estamos animado para criptografar">
		</form>
	</div>
	<div class="result">

		<?php
        if (isset($_REQUEST['md5'])) {
            echo "<span id='result' onClick='selectText()'>".md5($_REQUEST['md5']).'</span>';
            echo"<p id='message'> <br />Text has been copied, now paste in the text-area </p>";
        }
        ?>
	</div>

	<?php
    $linha = file('contados.txt');
    $visitas = $linha[0];
    ++$visitas;
    $cf = fopen('contados.txt', 'w');
    fputs($cf, "{$visitas}");
    fclose($cf);
    // echo "$visitas visitas";
    ?>
</body>

</html>

<script>
	function selectText() {
		var range = document.createRange();
		range.selectNode(document.getElementById('result'));
		window.getSelection().addRange(range);
		document.execCommand("copy");
		document.getElementById("message").style.display = "block";
	}
</script>