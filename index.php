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
        	<ul class="content-responsive">
            	<li class="float-left menu-sobre">
                	<a href="#sobre" rel="sobre" title="Sobre Q.Malteria?" class="bt-scroll active">Sobre Q.Malteria?</a>
                </li>
                <li class="float-left menu-galeria">
                	<a href="#galeria" rel="galeria" title="Cervejarias" class="bt-scroll">Galeria</a>
                </li>
                <li class="float-right menu-faca-sua">
                	<a href="#faca-sua-propria" rel="faca-sua-propria" title="Fa&ccedil;a sua pr&oacute;pria cerveja" class="bt-scroll">Fa&ccedil;a sua pr&oacute;pria cerveja</a>
                </li>
                <li class="float-right menu-confraria">
                    <a href="#confrarias" rel="confrarias" title="Confrarias" class="bt-scroll">Confrarias</a>
                </li>
                <li class="float-left menu-momento">
                    <a href="#momento" rel="momento" title="Momento degusta&ccedil;&atilde;o" class="bt-scroll">Momento degusta&ccedil;&atilde;o</a>
                </li>
                <li class="float-left menu-harmonize">
                    <a href="#harmonize" rel="harmonize" title="Harmonize j&aacute;" class="bt-scroll">Harmonize j&aacute;</a>
                </li>
                <li class="float-right menu-game">
                    <a href="#game" rel="game" title="Game" class="bt-scroll">Game</a>
                </li>
                <li class="float-right menu-eventos">
                    <a href="#evento" rel="evento" title="Evento" class="bt-scroll">Evento</a>
                </li>
                <li class="float-right menu-contato">
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
                <li class="float-right menu-eventos">
                    <a href="#evento" rel="evento" title="Evento" class="bt-scroll">Evento</a>
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
                Q. Malteria? foi criada a partir da paix&atilde;o pelo universo cervejeiro e possui como objetivo trazer esse rico mundo mais pr&oacute;ximo das pessoas, oferecendo uma carta de cervejas diferenciadas e insumos para sua fabrica&ccedil;&atilde;o.<br /><br />
                Nosso intuito &eacute; difundir a cultura cervejeira, trazendo informa&ccedil;&otilde;es sobre a hist&oacute;ria, surgimento dos estilos, degusta&ccedil;&atilde;o, harmoniza&ccedil;&atilde;o e fabrica&ccedil;&atilde;o de cerveja.<br /><br />
                Selecionamos r&oacute;tulos estaduais, nacionais e internacionais. S&atilde;o mais de 100 r&oacute;tulos para oferecer ao p&uacute;blico uma variedade de experi&ecirc;ncias e sensa&ccedil;&otilde;es.<br /><br />
                Para apreciar a sua cerveja, disponibilizamos um ambiente agrad&aacute;vel, com equipe capacitada para oferecer informa&ccedil;&otilde;es sobre as cervejas especiais, assim como oficinas para degusta&ccedil;&atilde;o. Na Q. Malteria? tamb&eacute;m &eacute; poss&iacute;vel criar sua confraria para degusta&ccedil;&atilde;o de cervejas regularmente. <br /><br />
                Para a fabrica&ccedil;&atilde;o artesanal de cervejas, disponibilizamos espa&ccedil;o e equipamentos necess&aacute;rios. O objetivo &eacute; que as pessoas possam fabricar sua pr&oacute;pria cerveja.<br />
                Essa &eacute; a proposta, mergulhar na cultura cervejeira de diferentes maneiras.
            </p>
        </div>
        <div class="content-item pull-left" id="galeria">
            <h2>Galeria</h2>
            <ul class="lista-galeria">
                <?php
                    for($i=1; $i<=23; $i++){
                ?>
                        <li>
                            <a href="img/galeria/<?php echo $i; ?>.png" data-title="Galeria Q.Malteria?" data-lightbox="galerias">
                                <img src="img/galeria/thumb-<?php echo $i; ?>.png" />
                            </a>
                        </li>
                <?php } ?>
            </ul>
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
                Temos espa&ccedil;o individualizado e voc&ecirc; pode escolher a frequ&ecirc;ncia dos encontros (semanal, quinzenal, mensal, etc).  Contamos com <i>sommelier</i> de cervejas para confrarias que possuem o objetivo de se aprofundar nos estilos de cervejas.
            </p>
        </div>
        <div class="content-item pull-left" id="momento">
            <h2>Momento Degusta&ccedil;&atilde;o</h2>
            <p>
                Para quem pretende conhecer ou aprimorar os conhecimentos sobre os estilos de cervejas, a Q. Malteria? Possui oficinas de degusta&ccedil;&atilde;o.<br /><br />
                As oficinas possibilitam a diferencia&ccedil;&atilde;o dos estilos de cerveja, assim como o roteiro para  avalia&ccedil;&atilde;o.<br /><br />
                Oferecemos oficinas para iniciantes, ou seja,  para aqueles que est&atilde;o iniciando no universo cervejeiro.<br /><br />
                E oficinas avan&ccedil;adas para aqueles  que j&aacute; possuem algum conhecimento, mas que desejam se aprofundar em determinado estilo de cerveja.
            </p>
        </div>
        <div class="content-item pull-left" id="harmonize">
            <h2>Harmonize j&aacute;!</h2>
            <p>
                Se voc&ecirc; pretende tomar uma cerveja com algum prato em especial, mas n&atilde;o sabe qual &eacute; a cerveja indicada, a Q. Malteria? pode ajud&aacute;-lo.<br /><br />
                A cerveja pode proporcionar incr&iacute;veis combina&ccedil;&otilde;es com in&uacute;meros pratos.<br /><br />
                Contamos com <i>sommelier</i> de cervejas  para auxili&aacute;-lo na escolha da cerveja ideal para o seu card&aacute;pio.
            </p>
        </div>
        <div class="content-item pull-left" id="game">
            <h2>Game</h2>
            <p>
                Curte jogar um game, mas &agrave;s vezes n&atilde;o sabe onde  se reunir com a galera?
                Na Q. Malteria? &eacute; poss&iacute;vel jogar um game  sem ter que se preocupar com o barulho e com a bagun&ccedil;a.<br /><br />
                Temos espa&ccedil;o exclusivo para essa atividade. 
                Como apreciadores da prefer&ecirc;ncia nacional, contamos com o jogo PES 2015.
            </p>
        </div>
        <div class="content-item pull-left" id="evento">
            <h2>Fa&ccedil;a Seu Evento Aqui!</h2>
            <p>
                Se voc&ecirc; pretende fazer um evento, mas n&atilde;o gostaria de fazer na sua casa e ao mesmo tempo gostaria que fosse em um ambiente mais privado e aconchegante.<br /><br />
                Conte com o espa&ccedil;o, produtos e servi&ccedil;os da Q. Malteria?
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
                <span class="social-networks">
                    <a href="https://www.facebook.com/qmalteria" title="Facebook" class="link-facebook" target="_blank">
                        <span></span>qmalteria
                    </a>
                    <a href="https://instagram.com/qmalteria" title="Instagram" class="link-instagram" target="_blank">
                        <span></span>qmalteria
                    </a>
                    <a href="#" title="whatsapp" class="link-whatsapp">
                        <span></span>(43) 9845-5586
                    </a>
                </span>
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

<script type="text/javascript" src="js/lightbox.min.js"></script>

<script type="text/javascript" src="js/script.js"></script>
</body>
</html>