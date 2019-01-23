<?php get_header(); ?>
<div class="container contact">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<h1 class="aboutTitle">Contact</h1>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
			<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			<div class="container formulario">
				<form class="" action="">
					<div class="row form-group">
						<div class="col-md-2 col-sm-3"><p>Email:</p></div>
						<div class="col-md-10 col-sm-9"><input type="email" class="form-control inputContact" id="email" placeholder="Email"></div>
					</div>
					<div class="row form-group">
						<div class="col-md-2 col-sm-3"><p>Message:</p></div>
						<div class="col-md-10 col-sm-9"><textarea class="form-control inputContact" id="message" placeholder="Message"></textarea></div>
					</div>	
					<div class="row form-group">
						<div class="col-md-4 col-sm-4"><button type="submit" class="btn btn-primary">Submit</button></div>
						
					</div>
				</form>	
			</div>
		</div>
	</div>
</div>

<div class="container-fluid about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1 class="aboutTitle">About us<h1>
				<p class="aboutParrafo">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
				<div class="col-md-8 col-sm-8"><img src=<?php bloginfo('template_directory'); ?>/assets/images/evopic.jpg class="img-fluid"></div>
				<p class="aboutParrafo">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. </p>	
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>