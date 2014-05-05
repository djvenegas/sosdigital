<section id="contacto" class="content conctacto ">
	<article class="wrapper margin-content margin-top">
		<h1 id="titulo-cont" class="titulos pr">SEÑALES DE HUMO</h1>
		<p id="text-cont" class="caja-texto pr text-rescatista">Queremos escucharte ¡Mándanos tus comentarios!</p>
		<fieldset class="frm-con">
				<form action="" method="get" accept-charset="utf-8">
					<div><span>Tu nombre</span><input type="text" name="nombre" value="" placeholder="" title="Tu nombre"></div></br>
					<div><span>Tu correo</span><input type="text" name="correo" value="" placeholder="" title="Tu correo"></div></br>
					<div><span>Tu empresa</span><input type="text" name="empresa" value="" placeholder="" title="Tu empresa"></div></br>
					<div class="frm-texto"><span>Tu mensaje</span><textarea name="mensaje"></textarea></div>
					<input type="button" name="enviar" value="ENVIAR">
				</form>
			<div>Mándanos tus comentarios y nosotros nos contacterémos contigo, o llámanos al (01) 477 4771739148
			 (01) 477 477727203 o al correo electrónico  <span>rescate@sosdigital.mx.</span> </div>
		</fieldset>
	</article>
	<article class="wrapper container">
		<div class="twitter-cont">
			<div data-cycle-fx="scrollHorz"
				data-cycle-timeout="3000" data-cycle-speed="1000" 
			    data-cycle-slides=">article"
			    data-cycle-prev="#prev-m-c"
	       		data-cycle-next="#next-m-c"
			    data-cycle-pause-on-hover="true"
				class="cycle-slideshow slide-text-footer" id="timeline">
	  			
					<?php
						include('lib/twitter-timeline/timeline.php');
						mostrarTweets('milenio', './lib/twitter-timeline/tweets.txt'); 
						?>
	  			
	  		</div>
	  		<span id="next-m-c" class="next-cont btn-cont"></span>
			<span id="prev-m-c" class="prev-cont btn-cont"></span>
		</div>
		<div class="redes-cont" >
			<a href=""><span class="red1 print1"></span></a>
			<a href=""><span class="red1 face1"></span></a>
			<a href=""><span class="red1 twitter1"></span></a>
		</div>
	</article>
	<span class="letras-cont"></span>
</section>
