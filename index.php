<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ofertas por email</title>
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,500,700|Fira+Sans:600" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
	<script src="https://unpkg.com/animejs@2.2.0/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header">
			<div class="header-shape header-shape-1">
				<svg width="337" height="222" viewBox="0 0 337 222" xmlns="http://www.w3.org/2000/svg">
				    <defs>
				        <linearGradient x1="20%" y1="60.434%" x2="50%" y2="100%" id="header-shape-1">
				            <stop stop-color="#E0E1FE" stop-opacity="0" offset="0%"/>
				            <stop stop-color="#E0E1FE" offset="100%"/>
				        </linearGradient>
				    </defs>
				    <path d="M1103.21 0H1440v400h-400c145.927-118.557 166.997-251.89 63.21-400z" transform="translate(-1103)" fill="url(#header-shape-1)" fill-rule="evenodd"/>
				</svg>
			</div>

        </header>

        <main>
                <div class="container">


	                        <h1 class="hero-title mt-0">Cadastre seu Email e receba nossas Promoções</h1>
	                        <p class="hero-paragraph"> Não fique de fora, venha conferir todas as nossas  ofertas imperdíveis. </p>
							
							<form action="salvar.php" method="POST" id="cadastro">
							<input class="input" type='email' id='email' name='email' placeholder="Digite seu email" required>
							<span id="resultadoemail"></span>
							<br> <br>
							
							
							<input class="button button-primary button-block" type="submit" name="Salvar">  <br> <br> <br>
							 
							
							<a class="button button-primary button-block" href="todosemail.php">Confira todos os emails cadastrados</a>
							</form>
							
						<div >
                </div>

				<script language="javascript">
 
 $("#cadastro").submit(function  (event)  {

event.preventDefault();

var email = $("input[name='email']").val();

$.post ( "salvar.php",
	   {email: email},
	   function (data) {
		 alert(data);
	   })
	   .fail(function(){
		 alert("falhaaaaa");
	   })
	   .done(function(){

	   });  
});



</script>
<script src="valida.js"> </script>
		
    <script src="dist/js/main.min.js"></script>
</body>
</html>
