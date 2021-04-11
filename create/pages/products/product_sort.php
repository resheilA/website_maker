<center>
<form method="get">
	<select name="type_sort" class="form-control" style="display:inline;width:30%;">								
								<?php
								if(isset($_GET["type_sort"]) && $_GET["type_sort"] != null)
								{
									echo "<option value='".$_GET["type_sort"]."'>".$_GET["type_sort"]."</option>";
								}								
								?>
								<option></option>
								<option value="">All</option>								
								<?php 
								
								$sql_color = "SELECT type FROM product_type";
								$types = singletable_all( $sql_color );
								
								foreach($types as $type){
									echo '<option value="'.$type['type'].'">'.$type['type'].'</option>';
								}
								
								?>
							</select>
					   <input type="submit"  style="display:inline;" class="btn btn-primary m-1" value="Sort">
</form>
</center>
<br>