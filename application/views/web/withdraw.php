<!-- Withdraw Popup -->
<div class="withdraw_dialog" title="Withdraw (Edit)">
	<fieldset>
	<table width="100%"><tr><td>
		<form action="<?php echo site_url(); ?>/process_store/saveWithdrawController" method="POST">
			<table width="100%" border="0">
				<legend><h1>Withdraw Register</h1></legend>
				<tr><td>Quantity</td><td>:<input name="quantity" type="number" min="0" max="<?php foreach($resultWithdraw as $row) echo $row->quantity; ?>"></td></tr>
				<tr><td>Cost Center</td><td>:<input type="text" name="costcenter"></td></tr>
				<tr><td>Department</td><td>:<input type="text" name="department"></td></tr>
				<tr><td>Manager</td><td>:<input type="text" name="manager"></td></tr>
				<tr><td>Owner</td><td>:<input type="text" name="owner"></td></tr>
				<tr><td>En</td><td>:<input type="text" name="en"></td></tr>
				<tr><td>External Phone</td><td>:<input type="text" name="ext"></td></tr>
				<tr><td>To Building</td><td>:<select name="building">
					<option value="B3">B3
					<option value="B4">B4
					<option value="B6">B6
				</select></td></tr>
				<tr><td colspan="2" align="center"><input type="submit" value="Submit" name="withdrawform">&nbsp;<a href="<?php echo site_url(); ?>/template/store">Back ==></a></td></tr>
			</table>
		</td><td>
		<table width="100%" border="0">
				<legend><h1>Data Details</h1></legend>
				<tr><td>Type</td><td>:<input type="text" name="type" value="<?php foreach($resultWithdraw as $row) echo $row->type; ?>" readonly></td></tr>
				<tr><td>Brand</td><td>:<input type="text" name="brand" value="<?php foreach($resultWithdraw as $row) echo $row->brand; ?>" readonly></td></tr>
				<tr><td>Product Code</td><td>:<input type="text" name="product_code" value="<?php foreach($resultWithdraw as $row) echo $row->product_code; ?>" readonly></td></tr>
				<tr><td>Quantity</td><td>:<input type="text" name="quantity_old" value="<?php foreach($resultWithdraw as $row) echo $row->quantity; ?>" readonly></td></tr>
				<tr><td>Building From</td><td>:<input type="text" name="building_from" value="<?php foreach($resultWithdraw as $row) echo $row->building; ?>" readonly></td></tr>
				<tr><td></td><td><input type="hidden" name="id" value="<?php foreach($resultWithdraw as $row) echo $row->id; ?>"></td></tr>
		</table>
		</td></tr>
		</form>
	</table>
	</fieldset>
</div>