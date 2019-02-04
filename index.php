<?php get_header(); ?>



<div class="row slider margen-arriba" >
	<div class="col-md-1"></div>
  	<div class="col-md-10 ">
<!--INICIO DEL SLIDER //////////////////////////////////////////////////////////// -->
  	<div id="demo" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ul class="carousel-indicators lineas-explorar">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	    <li data-target="#demo" data-slide-to="3"></li>
	  </ul>

	  <!-- The slideshow -->
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src=<?php bloginfo('template_directory'); ?>/assets/images/slider1.png alt="Slider 1">
	      <div class="carousel-caption fondo-carousel">
	        <h3>JOKER SE UNE A LA BATALLA!</h3>
	        <p>El carismático protagonista de Persona 5 se une al combate en el primer DLC para SSBU</p>
	      </div> 
	    </div>
	    <div class="carousel-item">
	      <img src=<?php bloginfo('template_directory'); ?>/assets/images/slider2.png alt="Slider 2">
	      <div class="carousel-caption fondo-carousel">
	        <h3>ANIME EN SSBU</h3>
	        <p>Masashiro Sakurai ha dado su declaración final respecto a los personajes de anime en Smash</p>
	      </div> 
	    </div>
	    <div class="carousel-item">
	      <img src=<?php bloginfo('template_directory'); ?>/assets/images/slider3.png alt="Slider 3">
	      <div class="carousel-caption fondo-carousel">
	        <h3>DLC'S CONFIRMADOS</h3>
	        <p>Nintendo ha anunciado su declaración sobre los proximos integrantes</p>
	      </div>   
	    </div>
	    <div class="carousel-item">
	      <img src=<?php bloginfo('template_directory'); ?>/assets/images/slider2.png alt="Slider 4">
	      <div class="carousel-caption fondo-carousel">
	        <h3>CUARTO SLIDER </h3>
	        <p> Probando como se pone el cuarto slider reutilizando una imagen</p>
	      </div>   
	    </div>
	  </div>

	  <!-- Left and right controls -->
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </a>
	</div>
<!-- FINAL DEL SLIDER //////////////////////////////////////////////////////////// -->	

<!-- <img src=<?php //bloginfo('template_directory'); ?>/assets/images/slider.png class="basic-image">
	<p>lerom upsim bla fjaig eioe wij bwij bwij bwij bwij bwijw eooolerom upsim bla fjaig eioe wij bwijw eoooupsim bla fjaig eioe wij bwijw eoooupsim bla fjaig eioe wij bwijw eoooupsim bla fjaig eioe wij bwijw eoooupsim bla fjaig eioe wij bwijw eooolerom upsim bla fjaig eioe wij bwijw eooo</p> -->

  </div>
</div>




<!-- TITULO DEL INICIO DE LAS NOTICIAS -->  
<div class="row margen-arriba" >
	<div class="col-md-1"></div>
  	<div class="col-md-10" id="titulo-inicio">
  	<h1>RECIENTE</h1>
  </div>
</div>

<!-- ROW COMPLETO DE LAS NOTICIAS Y EL ANUNCIO -->
<div class="row noticiaHome">
	<div class="col-md-1"></div>
	<!-- ROW DE SOLO LAS NOTICIAS DIVIDIENDOLO EN 12 SUB COLUMNAS -->
	<div class="col-md-7" id="titulo-noticia">
		<!-- ROW DE NOTICIA 1 -->
		<div class="row " >
			<div class="col-md-12"><hr /></div>
			<div class="col-md-5">
				<img src=<?php bloginfo('template_directory'); ?>/assets/images/noticia1.png class="basic-image">
			</div>
			<div class="col-md-7" id="descripcion-noticia">
				<h3>Los profesionales hablan de la Tier List y su futuro</h3>
				<p >A dos meses de su lanzamiento y luego de 3 actualizaciones, las tier list han 
				sido un tema recurrente en la comunidad. Los profesionales han dado su 
				opinion respecto a la tier list, y los posibles cambios que podrian surgir en el 
				futuro cercano</p>
				<b><i><p id="fecha">13 ENERO 2019</p></i></b>
			</div>
		</div>
		<!-- ROW DE NOTICIA 2 -->
		<div class="row">
			<div class="col-md-12"><hr /></div>
			<div class="col-md-5">
				<img src=<?php bloginfo('template_directory'); ?>/assets/images/noticia2.png class="basic-image">
			</div>
			<div class="col-md-7" id="descripcion-noticia">
				<h3>Leffen es expulsado de TSM luego de escándalo en twitter</h3>
				<p>Despues de una controversial semana. El equipo de eSports Team Solo Mid ha 
				llegado a la conclusion de terminar el contrato establecido con el jugador 
				profesional Leffen, quien publicó en la red social tweeter comentarios racistas
				hacia los jugadores del medio oriente.</p>
				<b><i><p id="fecha">09 ENERO 2019</p></i></b>
			</div>
		</div>
		<!-- ROW DE NOTICIA 3 -->
		<div class="row">
			<div class="col-md-12"><hr /></div>
			<div class="col-md-5">
				<img src=<?php bloginfo('template_directory'); ?>/assets/images/noticia2.png class="basic-image">
			</div>
			<div class="col-md-7" id="descripcion-noticia">
				<h3>Leffen es expulsado de TSM luego de escándalo en twitter</h3>
				<p>A dos meses de su lanzamiento y luego de 3 actualizaciones, las tier list han 
				sido un tema recurrente en la comunidad. Los profesionales han dado su 
				opinion respecto a la tier list, y los posibles cambios que podrian surgir en el 
				futuro cercano</p>
				<b><i><p id="fecha">05 ENERO 2019</p></i></b>
			</div>
		</div>
		
	</div>

	<!-- ROW DEL ANUNCIO -->
	<div class="col-md-3">
		<img src=<?php bloginfo('template_directory'); ?>/assets/images/anuncio-home.png class="anuncio-home">
	</div>

<!-- FIN DEL ROW DE LAS NOTICIAS Y EL ANUNCIO -->
</div>




<div class="row margen-arriba" >
	<div class="col-md-1"></div>
  	<div class="col-md-10" id="titulo-inicio">
  	<h1>TOP GUIAS VERSION 1.3</h1>
  </div>
</div>
<div class="row noticiaHome margen-arriba">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="row" id="texto-guias">
			<div class="col-md-3 linea" >
				<a href="#"><img src=<?php bloginfo('template_directory'); ?>/assets/images/krool.png class="basic-image">
				<i><h3>#1.</h3></i> <h3>King K. Rool</h3></a>
				<i><p>789 VOTOS 3.7K VISITAS</p></i>
			</div>
			<div class="col-md-3 linea">
				<a href="#"><img src=<?php bloginfo('template_directory'); ?>/assets/images/chrom.png class="basic-image">
				<i><h3>#2.</h3></i> <h3>Chrom</h3></a>
				<i><p>699 VOTOS 2.9K VISITAS</p></i>
			</div>
			<div class="col-md-3 linea">
				<a href="#"><img src=<?php bloginfo('template_directory'); ?>/assets/images/zss.png class="basic-image ">
				<i><h3>#3.</h3></i> <h3>Zero Suit Samus</h3></a>
				<i><p>526 VOTOS 2.1K VISITAS</p></i>
			</div>
			<div class="col-md-3 ">
				<a href="#"><img src=<?php bloginfo('template_directory'); ?>/assets/images/kokun.png class="basic-image">
				<i><h3>#4.</h3></i> <h3>Kokún</h3></a>
				<i><p>455 VOTOS 1.9K VISITAS</p></i>
			</div>
		</div>
	</div>
</div>


<div class="row margen-arriba" >
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="row fondo-notas">
			<div class="col-md-12">
				<a href="#" id="titulo-notas"><h2>NOTAS DE LA VERSION 1.3</h2></a>
			</div>
		</div>
	</div>
</div>




<?php get_footer(); ?>

