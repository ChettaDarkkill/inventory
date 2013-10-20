<center><h1>Invoice Receive</h1></center>
<div class="button_add">
	<a href="#" 
	onclick="javascript:void window.open('<?php echo site_url(); ?>/invoiceController','1380984715051',
	'width=400,height=550,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=460,top=100');
	return false;"><h5>+ Add Invoice</h5></a>
</div>
<div id="demo">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead align="left">
		<tr>
			<th>PO Number</th>
			<th>Vendor</th>
			<th>Recive By</th>
			<th>Recieve Date</th>
			<th>Detail</th>
			<th>Comment</th>
			<th>Menu</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$base = base_url();
			foreach($result_invoice as $row){
				echo "<tr>";
				echo "<td>$row->po_number</td>
					<td>$row->vendor</td>
					<td>$row->receiveByName</td>
					<td>$row->recieveDate</td>
					<td><textarea>$row->detail</textarea></td>
					<td>$row->comment</td>";
		?>
			<td align='center'>
				<a href='javascript:void(0)' title='Open PDF file' onclick="window.open('<?php echo base_url().'uploads/'.$row->fileName;?>','pdf','height=650, width=500,location=no,scrollbars=yes')">
					<img src="<?php echo base_url(); ?>assets/images/pdf.png" height="20" width="18" style="border:none;"></a> &emsp;
				<a href="#"><img src="<?php echo base_url(); ?>assets/images/edit2.png" height="20" width="18" title="Edit" style="border:none;"></a> &emsp;
				<a onclick="return confirm('Are you sure?','Delete')" href='<?php echo site_url(); ?>/invoiceController/delInvoice/<?php echo base64_encode($row->po_number); ?>/<?php echo base64_encode($row->fileName); ?>'>
					<img src="<?php echo base_url(); ?>assets/images/delete.png" height="20" width="18" title="Delete" style="border:none;"></a>	
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>

<div class="spacer"></div>
