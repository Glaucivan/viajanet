<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>ViajaNet - Passagens Aéreas com economia garantida!</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.viajanet.com.br/static/assets/companies/ViajaNet/img/favicon.ico"/>
	<link rel="stylesheet" href="assets/bootstrap-4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="assets/js/style.js" language="javascript" type="text/javascript"></script>
    <script language="javascript" src="assets/js/jquery-1.9.1.js"></script>
	<script  src="assets/js/estyle.js"></script>
	<script language="javascript" src="assets/js/jquery-ui-1.10.3.custom.js"></script>
    <link rel="stylesheet" href="assets/js/css/ui-lightness/jquery-ui-1.10.3.custom.css" type="text/css">
    <link rel="stylesheet" href="assets/js/jquery-ui.css" type="text/css">
</head>
<body>
<!--Navegação-->
<nav class="nav">
		<li class="logotipo_esquerda"><img src="https://www.viajanet.com.br/static/assets/platform/img/logo.svg;wa-prod647dd6c977ad3189"></li>
			<ul class="nav">		
				<li><a href="https://www.viajanet.com.br/passagens-aereas"> Passagens Aéreas </a></li>
				<li><a href="https://www.viajanet.com.br/pacotes-viagens"> Pacotes de Viagem <span class="badge badge-danger">Novo</span></a></li>
				<li><a href="https://hoteis.viajanet.com.br/?lang=pt-br;selected_currency=BRL;label=ViajaNet_Home_Menu_Institucional"> Hotéis </a></li>
				<li><a href="http://carros.viajanet.com.br/#/"> Carros </a></li>
				<li><a href="https://www.viajanet.com.br/passagens-aereas/quandoviajar"> Quando Viajar </a></li>
				<li><a href="https://atendimento.viajanet.com.br/hc/pt-br"> Atendimento </a></li>		
			</ul>	
		<ul>	
			<li><a href="https://www.viajanet.com.br/shop/authentication/#/sign-in">Acesse ou crie sua conta</a></li>
			<li><a href="#">Ligue</a></li>
		</ul>
	</nav>
<!--Fim da Navegação-->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/images/back1.jpg" alt="Paisagem 1">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/back2.jpg" alt="Paisagem 2">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/back3.jpg" alt="Paisagem 3">
    </div>
  </div>
</div>
<!--Tipo da Busca-->
<div id="tipo_busca">
		<ul>
			<li><a href="#passagens">Passagens Aéreas</a></li>
			<li><a href="#pacotes">Pacotes</a></li>
			<li><a href="#hoteis">Hotéis</a></li>
			<li><a href="#carros">Carros</a></li>
		</ul>
	<div id="passagens">
		<div class="form-control-ms">
			<form class="px-4 py-3" name="buscaPassagens">
	   <!--BUSCA LADO ESQUERDO-->
				<div class="esquerda">
				Encontre os melhores preços e boa viagem!<br><br>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="escolhaTipoBusca" id="ida" value="ida">
					<label class="form-check-label" for="ida">Só ida&emsp;</label>&emsp;
					<input class="form-check-input" type="radio" name="escolhaTipoBusca" id="idaVolta" value="idaVolta" checked>
					<label class="form-check-label" for="idaVolta">Ida e volta&emsp;</label>&emsp;
					<input class="form-check-input" type="radio" name="escolhaTipoBusca" id="variosDestinos" value="variosDestinos">
					<label class="form-check-label" for="variosDestinos">Vários destinos</label>
				</div>
				<br>
				<div class="form-group">
					<label for="origem">Informe sua origem</label>
					<input class="form-control" type="text" placeholder="Cidade ou aeroporto" required>
				</div>
	
				<div class="form-group dtIdaVoltaEsquerda">
					<label for="dtIda">Data de ida</label>
					<input class="form-control" type="text" maxlength="10" placeholder="dd/mm/aaaa" id="dataIdaPassagens" required>
				</div>
	
				<div class="form-group dtIdaVoltaDireita">
					<label for="dtVolta">Data de volta</label>
					<input class="form-control" type="text"  maxlength="10"  placeholder="dd/mm/aaaa" id="dataVoltaPassagens" required>
				</div>
	
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="naoSabeDt" value="naoSabeDt">
					<label class="form-check-label" for="naoSabeDt">Ainda não sei as datas da viagem</label>
				</div>
				<br>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="addHotel" value="addHotel">
					<label class="form-check-label" for="addHotel">Adionar hotel</label>
					&ensp;<span class="badge badge-success">COMPRE JUNTO E ECONOMIZE ATÉ 30%</span>
				</div>
				<br>
	+ Mais opções de busca
				</div>
	<!--BUSCA LADO DIREITO-->
				<img class="boxDireitaImg" src="assets/images/economia.webp">
				<div class="direita">
				<div class="form-group">
					<label for="destino">Informe seu destino</label>
					<input class="form-control" type="text" placeholder="Cidade ou aeroporto" required>
				</div>
	
				<div class="boxDireita">
				<label for="adultos">Adultos</label><br>
				<div class="btn-group">
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				1 adulto
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">1 adulto</a>
					<a class="dropdown-item" href="#">2 adultos</a>
					<a class="dropdown-item" href="#">3 adultos</a>
					<a class="dropdown-item" href="#">4 adultos</a>
					<a class="dropdown-item" href="#">5 adultos</a>
					<a class="dropdown-item" href="#">6 adultos</a>
					<a class="dropdown-item" href="#">7 adultos</a>
					<a class="dropdown-item" href="#">8 adultos</a>
					<a class="dropdown-item" href="#">9 adultos</a>
					<div class="dropdown-divider"></div>
				</div>
				</div>
				</div>
	
				<div class="boxDireita">
				<label for="crianca">Crianças</label><br>
				<div class="btn-group">
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				1 criança
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">1 criança</a>
					<a class="dropdown-item" href="#">2 crianças</a>					
					<a class="dropdown-item" href="#">3 crianças</a>					
					<a class="dropdown-item" href="#">4 crianças</a>					
					<a class="dropdown-item" href="#">5 crianças</a>					
					<a class="dropdown-item" href="#">6 crianças</a>					
					<a class="dropdown-item" href="#">7 crianças</a>					
					<a class="dropdown-item" href="#">8 crianças</a>					
					<a class="dropdown-item" href="#">9 crianças</a>					
					<div class="dropdown-divider"></div>
				</div>
				</div>
				</div>
	
				<div class="boxDireita">
				<label for="bebes">Bebês</label><br>
				<div class="btn-group">
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				1 bebê
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">1 bebê</a>
					<a class="dropdown-item" href="#">2 bebês</a>					
					<a class="dropdown-item" href="#">3 bebês</a>					
					<a class="dropdown-item" href="#">4 bebês</a>					
					<a class="dropdown-item" href="#">5 bebês</a>					
					<a class="dropdown-item" href="#">6 bebês</a>					
					<a class="dropdown-item" href="#">7 bebês</a>					
					<a class="dropdown-item" href="#">8 bebês</a>					
					<a class="dropdown-item" href="#">9 bebês</a>					
					<div class="dropdown-divider"></div>
				</div>
				</div>
				</div>
				<br><br>
				<br><br>
				<button type="submit" class="btn btn-warning btnPesquisar">PESQUISAR</button>
				</div>
			</form>
		</div>
	</div>
  
  <div id="pacotes">
		<div id="pacotes">
			<div class="form-control-ms">
				<form class="px-4 py-3" name="buscaPacotes">
	   <!--BUSCA LADO ESQUERDO-->
					<div class="esquerda">
						Encontre os melhores preços e boa viagem!<br><br><br><br>
					<div class="form-group">
					<label for="origem">Informe sua origem</label>
					<input class="form-control" type="text" placeholder="Cidade ou aeroporto" required>
					</div>
					<div class="form-group dtIdaVoltaEsquerda">
					<label for="dtIda">Data de ida</label>
					<input class="form-control" type="text" maxlength="10" placeholder="dd/mm/aaaa" id="dataIdaPacotes" required>
					</div>
					<div class="form-group dtIdaVoltaDireita">
					<label for="dtVolta">Data de volta</label>
					<input class="form-control" type="text"  maxlength="10"  placeholder="dd/mm/aaaa" id="dataVoltaPacotes" required>
					</div>
					</div>
		<!--BUSCA LADO DIREITO-->
					<img class="boxDireitaImg" src="assets/images/economia.webp">
					<div class="direita">
					<div class="form-group">
					<label for="destino">Informe seu destino</label>
					<input class="form-control" type="text" placeholder="Cidade ou aeroporto" required>
					</div>
					<div class="boxDireitaPacotes">
					<label for="adultos">Adultos</label><br>
					<div class="btn-group">
					<a type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					1 adulto
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">1 adulto</a>
						<a class="dropdown-item" href="#">2 adultos</a>
						<a class="dropdown-item" href="#">3 adultos</a>
						<a class="dropdown-item" href="#">4 adultos</a>
						<a class="dropdown-item" href="#">5 adultos</a>
						<a class="dropdown-item" href="#">6 adultos</a>
						<a class="dropdown-item" href="#">7 adultos</a>
						<a class="dropdown-item" href="#">8 adultos</a>
						<a class="dropdown-item" href="#">9 adultos</a>
						<div class="dropdown-divider"></div>
					</div>
					</div>
					</div>
	
					<div class="boxDireitaPacotes">
					<label for="crianca">Crianças</label><br>
					<div class="btn-group">
					<a type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					1 criança
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">1 criança</a>
						<a class="dropdown-item" href="#">2 crianças</a>					
						<a class="dropdown-item" href="#">3 crianças</a>					
						<a class="dropdown-item" href="#">4 crianças</a>					
						<a class="dropdown-item" href="#">5 crianças</a>					
						<a class="dropdown-item" href="#">6 crianças</a>					
						<a class="dropdown-item" href="#">7 crianças</a>					
						<a class="dropdown-item" href="#">8 crianças</a>					
						<a class="dropdown-item" href="#">9 crianças</a>					
						<div class="dropdown-divider"></div>
					</div>
					</div>
					</div>
	
					<div class="boxDireitaPacotes">
					<label for="bebes">Bebês</label><br>
					<div class="btn-group">
					<a type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					1 bebê
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">1 bebê</a>
						<a class="dropdown-item" href="#">2 bebês</a>					
						<a class="dropdown-item" href="#">3 bebês</a>					
						<a class="dropdown-item" href="#">4 bebês</a>					
						<a class="dropdown-item" href="#">5 bebês</a>					
						<a class="dropdown-item" href="#">6 bebês</a>					
						<a class="dropdown-item" href="#">7 bebês</a>					
						<a class="dropdown-item" href="#">8 bebês</a>					
						<a class="dropdown-item" href="#">9 bebês</a>					
						<div class="dropdown-divider"></div>
					</div>
					</div>
					</div>
	
					<div class="boxDireitaPacotes">
					<label for="classe">Classe</label><br>
					<div class="btn-group">
					<a type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Qualquer
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Qualquer</a>
						<a class="dropdown-item" href="#">Classe Econômica</a>					
					<div class="dropdown-divider"></div>
					</div>
					</div>
					</div>		
					<br><br>
					<br><br>
					<button type="submit" class="btn btn-warning btnPesquisar">PESQUISAR</button>
					</div>
				</form>
			</div>
		</div>
	</div> <!--Fecha div pacotes-->
  
		<div id="hoteis">
			<div class="form-control-ms">
				<form class="px-4 py-3" name="buscaHoteis">
	   <!--BUSCA LADO ESQUERDO-->
				<img class="boxDireitaImg" src="assets/images/economia.webp">
				
				<div class="form-group">
				<span class="destinoHoteis">Encontre os melhores preços e boa viagem!</span><br><br><br><br>
					<label for="destino" class="destinoHoteis">Informe seu destino</label><br>
					<input class="form-control" type="text" placeholder="Cidade ou aeroporto" required>
				</div>
				<div class="esquerda">
				<div class="form-group dtIdaVoltaEsquerda">
					<label for="dtIda">Data de ida</label>
					<input class="form-control" type="text" maxlength="10" placeholder="dd/mm/aaaa" id="dataIdaHoteis" required>
				</div>
	
				<div class="form-group dtIdaVoltaDireita">
					<label for="dtVolta">Data de volta</label>
					<input class="form-control" type="text"   placeholder="dd/mm/aaaa" id="dataVoltaHoteis" required>
				</div>
	
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="naoSabeDtEstadia" value="naoSabeDtEstadia">
					<label class="form-check-label" for="naoSabeDtEstadia">Ainda não sei as datas específicas da estadia</label>
				</div>
				<br>
				</div>
	<!--BUSCA LADO DIREITO-->
				<div class="direita">
				<br><br><br><br>
				<button type="submit" class="btn btn-warning btnPesquisarHoteis">PESQUISAR</button>
				</div>
				</form>
			</div>
		</div>
		
		<div id="carros">
			<div class="form-control-ms">
				<form class="px-4 py-3" name="buscaCarros">
	   <!--BUSCA LADO ESQUERDO-->
				<img class="boxDireitaImg" src="assets/images/economia.webp">
				
				<div class="form-group">
				<span class="retirarCar">Encontre os melhores preços e boa viagem!</span><br><br><br><br>
					<label for="retirarCar" class="retirarCar">Retirar o carro em</label><br>
					<input class="form-control" type="text" placeholder="Cidade ou aeroporto" required>
				</div>
				
				<div class="form-group boxCarrosEsquerda">
					<label for="dtIda">Data de ida</label>
					<input class="form-control" type="text" maxlength="10" placeholder="dd/mm/aaaa" id="dataIdaCarros" required>
				</div>
				<div class="form-group boxCarrosEsquerda">
					<label for="dtIda">Hora de retirada</label>
					<div class="btn-group" role="group">
					<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Selecione
					</button>
					<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
					<a class="dropdown-item" href="#">00:00</a>
					<a class="dropdown-item" href="#">00:30</a>
					<a class="dropdown-item" href="#">01:00</a>
					<a class="dropdown-item" href="#">01:30</a>
					<a class="dropdown-item" href="#">02:00</a>
					<a class="dropdown-item" href="#">02:30</a>
					<a class="dropdown-item" href="#">03:00</a>
					<a class="dropdown-item" href="#">03:30</a>
					<a class="dropdown-item" href="#">04:00</a>
					<a class="dropdown-item" href="#">04:30</a>
					<a class="dropdown-item" href="#">05:00</a>
					<a class="dropdown-item" href="#">05:30</a>
					</div>
					</div>
				</div>
				<div class="form-group boxCarrosEsquerda">
					<label for="dtVoltaCarros">Data de volta</label>
					<input class="form-control" type="text" maxlength="10" placeholder="dd/mm/aaaa" id="dataVoltaCarros" required>
				</div>
				<div class="form-group boxCarrosEsquerda">
					<label for="dtIda">Hora da devolução</label>
					<div class="btn-group" role="group">
					<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Selecione
					</button>
					<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
					<a class="dropdown-item" href="#">00:00</a>
					<a class="dropdown-item" href="#">00:30</a>
					<a class="dropdown-item" href="#">01:00</a>
					<a class="dropdown-item" href="#">01:30</a>
					<a class="dropdown-item" href="#">02:00</a>
					<a class="dropdown-item" href="#">02:30</a>
					<a class="dropdown-item" href="#">03:00</a>
					<a class="dropdown-item" href="#">03:30</a>
					<a class="dropdown-item" href="#">04:00</a>
					<a class="dropdown-item" href="#">04:30</a>
					<a class="dropdown-item" href="#">05:00</a>
					<a class="dropdown-item" href="#">05:30</a>
					</div>
					</div>
				</div>
	<!--BUSCA LADO DIREITO-->
				<div class="direita">
				<button type="submit" class="btn btn-warning btnPesquisarHoteis">PESQUISAR</button>
				</div>
				</form>
			</div>
		</div>
	
</div> <!--Fecha a div tipo_busca-->
</center>
<!--Fim TABS-->
			<div class="container-fluid" id="passagensCards">
			<br>
			<h3>Passagens Nacionais</h3>
			<div class="card">
				<img class="card-img-top" src="https://www.viajanet.com.br/static/assets/platform/img/catalog/RIO/rio-de-janeiro-nova.jpg" alt="Promoção de São Paulo para Rio de Janeiro">
				<div class="card-body">
				<p class="card-text">Promoção de São Paulo para Rio de Janeiro</p>
				<a href="https://www.viajanet.com.br/busca/passagens/voos#/SAO/RIO/RT/01-11-2019/03-11-2019/-/-/-/1/0/0/-/-/BRL/-" class="btn btn-primary">Comprar agora!</a>
				</div>
			</div>
			
			<div class="card">
				<img class="card-img-top" src="https://www.viajanet.com.br/static/assets/platform/img/catalog/MAO/manaus.jpg" alt="Promoção de São Paulo para Manaus">
				<div class="card-body">
				<p class="card-text">Promoção de São Paulo para Manaus</p>
				<a href="https://www.viajanet.com.br/busca/passagens/voos#/SAO/MAO/RT/12-04-2019/15-04-2019/-/-/-/1/0/0/-/-/BRL/-" class="btn btn-primary">Comprar agora!</a>
				</div>
			</div>
			
			<div class="card">
				<img class="card-img-top" src="https://www.viajanet.com.br/static/assets/platform/img/catalog/FLN/florianopolis.jpg" alt="Promoção de São Paulo para Florianópolis">
				<div class="card-body">
				<p class="card-text">Promoção de São Paulo para Florianópolis</p>
				<a href="https://www.viajanet.com.br/busca/passagens/voos#/SAO/FLN/RT/31-05-2019/10-06-2019/-/-/-/1/0/0/-/-/BRL/-" class="btn btn-primary">Comprar agora!</a>
				</div>
			</div>
			
			<div class="card">
				<img class="card-img-top" src="https://www.viajanet.com.br/static/assets/platform/img/catalog/BPS/porto-seguro.jpg" alt="Promoção de São Paulo para Porto Seguro">
				<div class="card-body">
				<p class="card-text">Promoção de São Paulo para Porto Seguro</p>
				<a href="https://www.viajanet.com.br/busca/passagens/voos#/SAO/BPS/RT/01-09-2019/07-09-2019/-/-/-/1/0/0/-/-/BRL/-" class="btn btn-primary">Comprar agora!</a>
				</div>
			</div>
		
			</div>
			<div id="agenciaViagens1">
				<br>
				<h3>Agência de Viagens Online</h3>
				<br>
				<div class="boxAgenciaViagensEsq1">
				<h5><a href="#" >ViajaNet</a></h5><br>
				<a href="#" >Passagens Aéreas</a><br>
				<a href="#" >Pacotes de viagens</a><br>
				<a href="#" >Hotéis</a><br>
				<a href="#" >Aplicativo ViajaNet</a><br>
				<a href="#" >Blog do ViajaNet</a><br>
				</div>
				
				<div class="boxAgenciaViagensEsq1">
				<h5><a href="#" >Linhas Aéreas Nacionais</a></h5><br>
				<a href="#" >Gol</a><br>
				<a href="#" >Azul</a><br>
				<a href="#" >Tam agora é Latam</a><br>
				<a href="#" >Avianca</a><br>
				<a href="#" >Passaredo</a><br>
				</div>
				
				<div class="boxAgenciaViagensEsq1">
				<h5><a href="#" >Linhas Aéreas Internacionais</a></h5><br>
				<a href="#" >Aerolíneas Argentinas</a><br>
				<a href="#" >Air Canada</a><br>
				<a href="#" >American Airlines</a><br>
				<a href="#" >Copa Airlines</a><br>
				<a href="#" >Delta Air Lines</a><br>
				</div>
				
				<div class="boxAgenciaViagensEsq1">
				<h5><a href="#" >Passagens Aéreas Nacionais</a></h5><br>
				<a href="#" >Passagem para São Paulo</a><br>
				<a href="#" >Passagem para Fortaleza</a><br>
				<a href="#" >Passagem para Salvador</a><br>
				<a href="#" >Passagem para Curitiba</a><br>
				<a href="#" >Passagem Aérea Rio de Janeiro</a><br>
				</div>
				
				<div class="boxAgenciaViagensEsq1">
				<h5><a href="#" >Passagens Aéreas Internacionais</a></h5><br>
				<a href="#" >Passagem para Portugal</a><br>
				<a href="#" >Passagem para Orlando</a><br>
				<a href="#" >Passagem para Cancun</a><br>
				<a href="#" >Passagem para Londres</a><br>
				<a href="#" >Passagem para Estados Unidos</a><br>
				</div>
				
				<div class="boxAgenciaViagensEsq1">
				<h5><a href="#" >QuandoViajar</a></h5><br>
				<a href="#" >Voos para o Rio de Janeiro</a><br>
				<a href="#" >Voos para Salvador</a><br>
				<a href="#" >Voos para Fortaleza</a><br>
				<a href="#" >Voos para Miami</a><br>
				<a href="#" >Voos para Buenos Aires</a><br>
				</div>
				
				
				
			</div>
			<div id="agenciaViagens2">
			<br>
			<hr>
				<img class="boxAgenciaViagensEsq2" src="https://www.viajanet.com.br/static/assets/platform/img/newfooter/selo-iata.svg;wa-prodcda429d89011a931">
				<img class="boxAgenciaViagensEsq2" src="https://www.viajanet.com.br/static/assets/platform/img/newfooter/selo-brasil.svg;wa-prod38cf373f3e9396cb">
				<img class="boxAgenciaViagensEsq2" src="https://www.viajanet.com.br/static/assets/platform/img/newfooter/selo-abav.svg;wa-prod794fc69c05af3d25">
			
				<img class="boxAgenciaViagensDir2" src="https://www.viajanet.com.br/static/assets/platform/img/newfooter/selo-app-store.png;wa-prod2573fb7853ebc387">				
				<img class="boxAgenciaViagensDir2" src="https://www.viajanet.com.br/static/assets/platform/img/newfooter/selo-google-play.png;wa-prod2793b71f2a1f0350">				
								
			<br>
			<hr>
			</div>
			
	<footer id="footer">
		<br>
		<h4>TVLX Viagens e Turismo S.A. CNPJ: | 12.337.454/0001-31 | Rua Manoel Coelho, 600 - 1º andar - São Caetano do Sul- SP - CEP 09510-101 <br>© 2019 ViajaNet Viagens Online - Todos os direitos reservados </h4> 
	</footer>
<script language="javascript">
$(document).ready(function(){
	$("#dataIdaPassagens, #dataVoltaPassagens, #dataIdaPacotes, #dataVoltaPacotes, #dataIdaHoteis, #dataVoltaHoteis, #dataIdaCarros, #dataVoltaCarros").datepicker({
		dateFormat: 'dd/mm/yy',
		dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
		dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
		dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
		monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
		monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
		nextText: 'Próximo',
		prevText: 'Anterior'
	});
					
	$(function() {
		$( "#tipo_busca" ).tabs();
	} );					
});
	</script>
<script src="assets/bootstrap-4.1.3/js/bootstrap.js"></script> 
<script src="assets/bootstrap-4.1.3/js/bootstrap.min.js"></script>
<script src="assets/bootstrap-4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="assets/bootstrap-4.1.3/js/bootstrap.bundle.js"></script>
</body>
</html>