<?php
	header("Content-Type: text/html; charset=iso-8859-1",true);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
<?php include("inc/head.php"); ?>
<title>Q.Malteria?</title>
</head>
<body id="topo">
<div id="overflow-loading"></div>
<div id="loading"></div>
<?php /*<!-- FACEBOOK SDK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=1561052164142480&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- FACEBOOK SDK -->*/ ?>

<!-- GOOGLE MAPS -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDfVpzxaQRLeD6z-r-RaEzNbRfD-c6aWmo&sensor=TRUE"></script>
<script type="text/javascript">
    function initializeMaps() {
        var myLatlng = new google.maps.LatLng(-23.4062319,-51.4433364);
        var latlngAlpha = new google.maps.LatLng(-23.4062319,-51.4433364);
        var mapOptions = {
          zoom: 16,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
        }
        var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
        var marker = new google.maps.Marker({
            position: latlngAlpha,
            title:"Q.Malteria?"
        });
        var styles = [{
            stylers: [
                { hue: ""},
            ]
        }];
        var styledMap = new google.maps.StyledMapType(styles,
        {name: "Styled Map"});
        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');
        marker.setMap(map);
    }
</script>
<!-- GOOGLE MAPS -->

<!-- Header Section -->
<header class="header">
	<section class="content-header">
    	<h1>
        	<a href="#topo" title="Home" class="logo-topo bt-scroll-disable">
        		<span>home</span>
            </a>
        </h1>
		<nav class="menu content-responsive">
        	<a href="#menu" class="bt-menu-toggle"><i class="fa fa-bars"></i></a>
        	<ul>
            	<li>
                	<a href="#sobre" rel="sobre" title="Sobre Q.Malteria?" class="bt-scroll active">Sobre Q.Malteria?</a>
                </li>
                <li>
                	<a href="#galeria" rel="galeria" title="Cervejarias" class="bt-scroll">Galeria</a>
                </li>
                <li>
                	<a href="#faca-sua-propria" rel="faca-sua-propria" title="Fa&ccedil;a sua pr&oacute;pria cerveja" class="bt-scroll">Fa&ccedil;a sua pr&oacute;pria cerveja</a>
                </li>
                <li>
                    <a href="#confrarias" rel="confrarias" title="Confrarias" class="bt-scroll">Confrarias</a>
                </li>
                <li>
                    <a href="#momento" rel="momento" title="Momento degusta&ccedil;&atilde;o" class="bt-scroll">Momento degusta&ccedil;&atilde;o</a>
                </li>
                <li>
                    <a href="#harmonize" rel="harmonize" title="Harmonize j&aacute;" class="bt-scroll">Harmonize j&aacute;</a>
                </li>
                <li>
                    <a href="#game" rel="game" title="Game" class="bt-scroll">Game</a>
                </li>
                <li>
                    <a href="#contato" rel="contato" title="Contato" class="bt-scroll">Contato</a>
                </li>
            </ul>
        </nav>
    </section>
</header>
<!-- Header Section -->

<!-- Header Alternative Section -->
<header class="header header-alternative">
    <section class="content-header">
        <nav class="menu content-responsive">
            <a href="#menu" class="bt-menu-toggle"><i class="fa fa-bars"></i></a>
            <ul>
                <li>
                    <a href="#sobre" rel="sobre" title="Sobre Q.Malteria?" class="bt-scroll active">Sobre Q.Malteria?</a>
                </li>
                <li>
                    <a href="#cervejarias" rel="cervejarias" title="Cervejarias" class="bt-scroll">Cervejarias</a>
                </li>
                <li>
                    <a href="#faca-sua-propria" rel="faca-sua-propria" title="Fa&ccedil;a sua pr&oacute;pria cerveja" class="bt-scroll">Fa&ccedil;a sua pr&oacute;pria cerveja</a>
                </li>
                <li>
                    <a href="#confrarias" rel="confrarias" title="Confrarias" class="bt-scroll">Confrarias</a>
                </li>
                <li>
                    <a href="#momento" rel="momento" title="Momento degusta&ccedil;&atilde;o" class="bt-scroll">Momento degusta&ccedil;&atilde;o</a>
                </li>
                <li>
                    <a href="#harmonize" rel="harmonize" title="Harmonize j&aacute;" class="bt-scroll">Harmonize j&aacute;</a>
                </li>
                <li>
                    <a href="#game" rel="game" title="Game" class="bt-scroll">Game</a>
                </li>
                <li>
                    <a href="#contato" rel="contato" title="Contato" class="bt-scroll">Contato</a>
                </li>
            </ul>
        </nav>
    </section>
</header>
<!-- Header Alternative Section -->

<!-- Body Section -->
<section class="body-section">
    <div class="content-body content-responsive">
        <div class="content-item pull-left" id="sobre">
            <h2>Sobre Q.Malteria?</h2>
            <p>
                Q. Malteria? foi criada a partir da paix&atilde;o pelo universo cervejeiro e possui como objetivo trazer esse rico mundo para mais pr&oacute;ximo das pessoas, oferecendo uma carta de cervejas diferenciadas e insumos para sua fabrica&ccedil;&atilde;o.<br /><br />
                Nosso intuito &eacute; difundir a cultura da cerveja, trazendo informa&ccedil;&otilde;es sobre a hist&oacute;ria, surgimento dos estilos, degusta&ccedil;&atilde;o, harmoniza&ccedil;&atilde;o e fabrica&ccedil;&atilde;o de cerveja.<br /><br />
                Selecionamos r&oacute;tulos estaduais, nacionais e internacionais para oferecer ao p&uacute;blico uma vasta op&ccedil;&otilde;es de experi&ecirc;ncias.<br /><br />
                Para apreciar a sua cerveja, disponibilizamos um ambiente agrad&aacute;vel, com equipe capacitada para oferecer informa&ccedil;&otilde;es sobre as cervejas especiais, assim como oficinas para degusta&ccedil;&atilde;o. Na Q. Malteria? tamb&eacute;m &eacute; poss&iacute;vel criar sua confraria para degusta&ccedil;&atilde;o de cervejas regularmente. <br /><br />
                Para a fabrica&ccedil;&atilde;o artesanal de cervejas, disponibilizamos espa&ccedil;o e equipamentos necess&aacute;rios. O objetivo &eacute; que as pessoas possam fabricar sua pr&oacute;pria cerveja.<br /><br />
                Essa &eacute; a proposta, mergulhar na cultura cervejeira de diferentes maneiras.
            </p>
        </div>
        <div class="content-item pull-left" id="galeria">
            <h2>Galeria</h2>
            <p>
                Em Breve
            </p>
        </div>
        <div class="content-item pull-left" id="faca-sua-propria">
            <h2>Fa&ccedil;a sua pr&oacute;pria cerveja</h2>
            <p>
                Voc&ecirc; j&aacute; pensou em fazer sua pr&oacute;pria cerveja?<br /><br />
                N&atilde;o sabe por onde come&ccedil;ar? N&atilde;o tem os equipamentos? N&atilde;o tem os insumos? E agora?<br /><br />
                A Q. Malteria? pode te ajudar!<br /><br />
                Temos espa&ccedil;o f&iacute;sico e os equipamentos para voc&ecirc; fabricar sua pr&oacute;pria cerveja.
            </p>
        </div>
        <div class="content-item pull-left" id="confrarias">
            <h2>Confrarias</h2>
            <p>
                Um dos significados de confraria &eacute; o "conjunto de pessoas que t&ecirc;m o mesmo modo de vida", nesse caso o modo de vida comum &eacute; a aprecia&ccedil;&atilde;o por cervejas.<br /><br />
                Na Q. Malteria? voc&ecirc; pode trazer seus amigos e criar sua pr&oacute;pria confraria.<br /><br />
                Temos espa&ccedil;o individualizado e voc&ecirc; pode escolher a frequ&ecirc;ncia dos encontros (semanal, mensal, etc).  Contamos com sommelier de cervejas para confrarias que possuem o objetivo de se aprofundar nos estilos de cervejas.
            </p>
        </div>
        <div class="content-item pull-left" id="momento">
            <h2>Momento Degusta&ccedil;&atilde;o</h2>
            <p>
                Para quem pretende conhecer ou aprimorar os conhecimentos sobre os estilos de cervejas, a Q. Malteria? Possui oficinas de degusta&ccedil;&atilde;o.
            </p>
        </div>
        <div class="content-item pull-left" id="harmonize">
            <h2>Harmonize j&aacute;!</h2>
            <p>
                Se voc&ecirc; pretende tomar uma cerveja com algum prato em especial, mas n&atilde;o sabe qual &eacute; a cerveja indicada, a Q. Malteria? pode ajud&aacute;-lo.
            </p>
        </div>
        <div class="content-item pull-left" id="game">
            <h2>Game</h2>
            <p>
                Em Breve
            </p>
        </div>
        <div class="content-item pull-left" id="contato">
            <h2>Contato</h2>
            <div id="map_canvas"></div>
            <p>
                qmalteria@qmalteria.com.br<br />
                (43) 3011-0770<br />
                Avenida Arapongas, 1571 - sobreloja<br />
                Arapongas - Paran&aacute;
            </p>
        </div>
    </div>
</section>
<!-- Body Section -->

<!-- Footer Section -->
<footer class="footer">
    <section class="all-footer">
        <section class="content-footer content-responsive">
            <div class="adr">
                <div class="street-address">Avenida Arapongas, n&ordm; 1571 | Sobreloja | Centro | </div>
                <span class="locality">Arapongas - </span>
                <abbr class="region" title="Paran&aacute;">PR | </abbr>
                <span class="postal-code">86701-650</span>
                <div class="country-name">Brasil</div>
            </div>
            <div class="tel"><div class="name-item">Tel: </div>(43) 3011-0770</div>
            <a href="http://www.phormadesign.com.br" target="_blank" class="logo-phormna">
                <span>phorma design</span>
            </a>
        </section>
    </section>
</footer>
<!-- Footer Section -->

<script>
	<?php /*(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	ga('create', 'UA-58717564-2', 'auto');
	ga('send', 'pageview');*/ ?>

</script>

<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>

<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/script.js"></script>
</body>
</html>