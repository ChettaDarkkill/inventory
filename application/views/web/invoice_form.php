<!doctype html>
<html>
	<head>
		<title>Add Invoice</title>
	</head>
	<body>
		<?php
			if(isset($error)){
				echo $error;
			}
				$this->load->helper('form'); 
				echo form_open_multipart('invoiceController/do_upload'); ?>
			<table border="0" class="table table-condensed">
				<tbody>
				<tr><td>PO Number</td><td><input type="text" name="invoice_po"></td></tr>
				<tr><td>Vendor</td><td>
					<select name="invoice_vendor">
						<option value="IT Solution and Service Co.,Ltd">IT Solution and Service Co.,Ltd
						<option value="Metro Systems Corporation Public Co.,Ltd">Metro Systems Corporation Public Co.,Ltd
						<option value="Dell Corporation(Thailand) Co.,Ltd">Dell Corporation(Thailand) Co.,Ltd
						<option value="IT Essentials(Thailand) Co.,Ltd">IT Essentials(Thailand) Co.,Ltd
						<option value="Ribbon Distributor Co.,Ltd">Ribbon Distributor Co.,Ltd
						<option value="Whizz-work Technology(Thailand) Co.,Ltd">Whizz-work Technology(Thailand) Co.,Ltd
						<option value="Phumthai Comsys Co.,Ltd">Phumthai Comsys Co.,Ltd
						<option value="I.D. Supply Co.,Ltd">I.D. Supply Co.,Ltd
						<option value="E.P. Stationery Co.,Ltd">E.P. Stationery Co.,Ltd
						<option value="Detapro Computer System Co.,Ltd">Detapro Computer System Co.,Ltd
						<option value="Hewlett-Packard(Thailand) Co.,Ltd">Hewlett-Packard(Thailand) Co.,Ltd
						<option value="Sun TAWEESARP">Sun TAWEESARP
					</select>
				</td></tr>
				<tr><td>Receive By</td><td><input type="radio" name="invoice_receiveBy" value="itstudent">IT Student&nbsp;<input type="radio" name="invoice_receiveBy" value="staffit">Staff IT<br><input type="text" name="invoice_receiveByName"></td></tr>
				<tr><td>Receive Date</td><td><input type="date" name="invoice_recievedate"></td></tr>
				<tr><td>Detail</td><td><textarea name="invoice_detail" class="form-control" rows="5"></textarea></td></tr>		
				<tr><td>Comment</td><td><input type="text" name="invoice_comment"></td></tr>		
				<tr><td>Choose File</td><td><input type="file" name="userfile" size="20" /></td></tr>
				<tr align="center"><td colspan="2"><input type="submit" value="Save">&nbsp;
				<a href="#" onclick="window.close()"><input type="button" value="Cancel"></a></td></tr>		
				</tbody>
			</table>
		</form>
	</body>
</html>
