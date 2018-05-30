Ano:<select>
	<option>Selecione</option>	
	<?php
		for($i=2015;$i>=1990;$i--){
			echo "<option>";
			echo $i;
			echo "</option>";
		}	
	?>
	</select>
	
Ano2:<select>
	<option>Selecione</option>	
	<?php
		for($i=1990;$i<2015;$i++){
			echo "<option>";
			echo $i;
			echo "</option>";
		}	
	?>
	</select>	