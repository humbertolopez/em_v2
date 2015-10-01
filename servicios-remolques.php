<div class="contentleft">	
	<table id="serviciosremolque">
		<?php
			/* checa si hay area de damas tiene valor */
			$key_damas = get_post_meta(get_the_ID(),'sanitariosdamas',true);
			if(!empty($key_damas)){
				?>
				<tr>
					<th colspan="3"><h2>Área de damas</h2></th>
				</tr>
				<?php
			}
			/* checa si sanitarios de damas tiene valor */
			$key_sanitariosdamas = get_post_meta(get_the_ID(),'sanitariosdamas',true);
			if(!empty($key_sanitariosdamas)){
				?>
				<tr>
					<td><?php echo $key_sanitariosdamas; ?> x</td>
					<td><img src="<?php echo get_template_directory_uri(); ?>/img/sanitario.svg"></td>
					<td>Sanitarios</td>
				</tr>
				<?php
			}
			/* checa si lavabos de damas tiene valor */
			$key_lavabosdamas = get_post_meta(get_the_ID(),'lavabosdamas',true);
			if(!empty($key_lavabosdamas)){
				?>
				<tr>
					<td><?php echo $key_lavabosdamas; ?> x</td>
					<td><img src="<?php echo get_template_directory_uri(); ?>/img/lavabo.svg"></td>
					<td>Lavabos</td>
				</tr>
				<?php
			}
			/* checa si hay area de caballeros tiene valor */
			$key_caballeros = get_post_meta(get_the_ID(),'sanitarioscaballeros',true);
			if(!empty($key_caballeros)){
				?>
				<tr>
					<th colspan="3"><h2>Área de caballeros</h2></th>
				</tr>
				<?php
			}
			/* checa si mingitorios tarja tiene valor */
			$key_mingitoriostarjacaballeros = get_post_meta(get_the_ID(),'mingitoriostarjacaballeros',true);
			if(!empty($key_mingitoriostarjacaballeros)){
				?>
				<tr>
					<td><?php echo $key_mingitoriostarjacaballeros; ?> x</td>
					<td><img src="<?php echo get_template_directory_uri(); ?>/img/mingitoriotarja.svg"></td>
					<td>Mingitorio tipo tarja</td>
				</tr>
				<?php
			}
			/* checa si mingitorios individuales tiene valor */
			$key_mingitorioscaballeros = get_post_meta(get_the_ID(),'mingitorioscaballeros',true);
			if(!empty($key_mingitorioscaballeros)){
				?>
				<tr>
					<td><?php echo $key_mingitorioscaballeros; ?> x</td>
					<td><img src="<?php echo get_template_directory_uri(); ?>/img/mingitorioindividual.svg"></td>
					<td>Mingitorios individuales</td>
				</tr>
				<?php
			}
			/* checa si sanitarios caballeros tiene valor */
			$key_sanitarioscaballeros = get_post_meta(get_the_ID(),'sanitarioscaballeros',true);
			if(!empty($key_sanitarioscaballeros)){
				?>
				<tr>
					<td><?php echo $key_sanitarioscaballeros; ?> x</td>
					<td><img src="<?php echo get_template_directory_uri(); ?>/img/sanitario.svg"></td>
					<td>Sanitarios</td>
				</tr>
				<?php
			}
			/* checa si lavabos caballeros tiene valor */
			$key_lavaboscaballeros = get_post_meta(get_the_ID(),'lavaboscaballeros',true);
			if(!empty($key_lavaboscaballeros)){
				?>
				<tr>
					<td><?php echo $key_lavaboscaballeros; ?> x</td>
					<td><img src="<?php echo get_template_directory_uri(); ?>/img/lavabo.svg"></td>
					<td>Lavabos</td>
				</tr>
				<?php
			}
			/* checa si area de descanso tiene valor */
			$key_areadescanso = get_post_meta(get_the_ID(),'areadescanso',true);
			if(!empty($key_areadescanso)){
				?>
				<tr>
					<td><?php echo $key_areadescanso; ?> x</td>
					<td><img src="<?php echo get_template_directory_uri(); ?>/img/areadescanso.svg"></td>
					<td>Área de descanso</td>
				</tr>
				<?php
			}
			/* checa si regaderas tiene valor */
			$key_regaderas = get_post_meta(get_the_ID(),'regaderas',true);
			if(!empty($key_regaderas)){
				?>
				<tr>
					<td><?php echo $key_regaderas; ?> x</td>
					<td><img src="<?php echo get_template_directory_uri(); ?>/img/regaderas.svg"></td>
					<td>Regaderas</td>
				</tr>
				<?php
			}
		?>
	</table>
</div>