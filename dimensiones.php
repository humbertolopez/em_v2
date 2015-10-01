<h2>Dimensiones</h2>
<table id="dimensiones">
	<?php
		/* checa si alto tiene valor */
		$key_alto = get_post_meta(get_the_ID(),'alto',true);
		if(!empty($key_alto)){
			?>
				<tr>
					<td>Alto</td>
					<td><?php echo $key_alto; ?> metros</td>
				</tr>
			<?php
		}
		/* checa si alto interior tiene valor */
		$key_altoint = get_post_meta(get_the_ID(),'altoint',true);
		if(!empty($key_altoint)){
			?>
				<tr>
					<td>Alto interior</td>
					<td><?php echo $key_altoint; ?> metros</td>
				</tr>
			<?php
		}
		/* checa si ancho tiene valor */
		$key_ancho = get_post_meta(get_the_ID(),'ancho',true);
		if(!empty($key_ancho)){
			?>
				<tr>
					<td>Ancho</td>
					<td><?php echo $key_ancho; ?> metros</td>
				</tr>
			<?php
		}
		/* checa si ancho interior tiene valor */
		$key_anchoint = get_post_meta(get_the_ID(),'anchoint',true);
		if(!empty($key_anchoint)){
			?>
				<tr>
					<td>Ancho interior</td>
					<td><?php echo $key_anchoint; ?> metros</td>
				</tr>
			<?php
		}
		/* checa si largo tiene valor */
		$key_largo = get_post_meta(get_the_ID(),'largo',true);
		if(!empty($key_largo)){
			?>
				<tr>
					<td>Largo</td>
					<td><?php echo $key_largo; ?> metros</td>
				</tr>
			<?php
		}
		/* checa si profundidad tiene valor */
		$key_profundidad = get_post_meta(get_the_ID(),'profundidad',true);
		if(!empty($key_profundidad)){
			?>
				<tr>
					<td>Profundidad</td>
					<td><?php echo $key_profundidad; ?> metros</td>
				</tr>
			<?php
		}
		/* checa si profundidad interior tiene valor */
		$key_profundidadint = get_post_meta(get_the_ID(),'profundidadint',true);
		if(!empty($key_profundidadint)){
			?>
				<tr>
					<td>Profundidad interior</td>
					<td><?php echo $key_profundidadint; ?> metros</td>
				</tr>
			<?php
		}
		/* checa si tanque tiene valor */
		$key_tanque = get_post_meta(get_the_ID(),'tanque',true);
		if(!empty($key_tanque)){
			?>
				<tr>
					<td>Tanque</td>
					<td><?php echo $key_tanque; ?> litros</td>
				</tr>
			<?php
		}
		/* checa si tiron tiene valor */
		$key_tiron = get_post_meta(get_the_ID(),'tiron',true);
		if(!empty($key_tiron)){
			?>
				<tr>
					<td>Tirón</td>
					<td><?php echo $key_tiron; ?> litros</td>
				</tr>
			<?php
		}
	?>
</table>