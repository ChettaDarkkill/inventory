<html>
	<head>
		<title>Add to Inventory</title>
	</head>
	<body>
		<?php
		$this->load->helper('form'); 
		echo form_open('/process_store/index'); ?>
				<table border="0">  
				<tr>
				<td><label for="product_code">Product Code</label><br /></td>
				<td>:<input type="text" name="product_code" id="product_code" class="required" rel="0" /></td>
				</tr>
				<tr>
				<td><label for="type">Type</label></td>
				<td>:<select name="type" id="type" rel="1">
						<option value="monitor">Monitor</option>
						<option value="mouse">Mouse</option>
						<option value="keyboard">Keyboard</option>
						<option value="cpu">CPU</option>
						<option value="ram">RAM</option>
				</select></td>
				</tr>
				<tr>
				<td><label for="brand">Brand</label></td>
				<td>:<input type="text" name="brand" id="brand" rel="2"></td>
				</tr>
				<tr>
				<tr>
				<td><label for="building">Building</label></td>
				<td>:<select name="building" id="building" rel="1">
						<option value="B3">B3</option>
						<option value="B4">B4</option>
						<option value="B6">B6</option>
				</select></td></tr>
				<tr>
				<td><label for="quantity">Quantity</label><br /></td>
				<td>:<input name="quantity" type="number" rel="3" min="0" max="200"></td>
				</tr>
				<tr align="center"><td colspan="2">
					<input type="submit" value="Add" name="Submit_store">
					<a href="#" onclick="window.close()"><input type="button" value="Cancel" class="btn btn-default"></a>
				</td></tr>
				</table>
		</form>
	</body>
</html>