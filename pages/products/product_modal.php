
<?php 
		if(!isset($content_products["error"])){		
		foreach($content_products as $content_product){
	echo '
	<!-- The Modal -->
<div class="modal" id="productModal'.$content_product["pid"].'">
  <div class="modal-dialog">
    <div class="modal-content">
	
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">'.$content_product["product_name"].'</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	  <img class="img img-responsive" src="https://www.stonemarket.in/'.$content_product['image'].'" style="max-height:20em;max-width:100%;" alt="">
         <table border="1" class="table" style="">
						<tbody>
						<tr>
							<td>Name</td><td>'.$content_product["product_name"].'</td>
						</tr>
						<tr>
							<td>Details</td><td>'.$content_product["details"].'</td>
						</tr>
						<tr>
							<td>Color</td><td>'.$content_product["color"].'</td>
						</tr>
						<tr>
							<td>Type</td><td>'.$content_product["type"].'</td>
						</tr>
						<tr>	
							<td>Finishing</td><td>'.$content_product["finishing"].'</td>
						</tr>
						<tr>	
							<td>Application Area</td><td>'.$content_product["application_area"].'</td>
						</tr>
						<tr>	
							<td>Form</td><td>'.$content_product["form"].'</td>
						</tr>
						<tr>	
							<td>Size</td><td>'.$content_product["size"].'</td>
						</tr>						
						<tr>	
							<td>Thickness</td><td>'.$content_product["thickness"].'</td>
						</tr>
						</tbody>
		</table>
   </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>		
			';
		}
		}
	?>		
   