<div class="topics_title">
	<h1>IT Store</h1>
</div>
<div class="button_add">
	Building:
	<select name="select_building" width="30px">
		<option value="B3">B3</option>
		<option value="B4">B4</option>
		<option value="B6">B6</option>
	</select>
	<a href="#" 
	onclick="javascript:void window.open('<?php echo site_url(); ?>/inventoryAddController','1380984715051',
	'width=400,height=550,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=460,top=100');
	return false;"><h5>+ Add Inventory</h5></a>
</div>
<div id="demo">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead align="left">
		<tr>
			<th>Product Code</th>
			<th>Type</th>
			<th>Brand</th>
			<th>Building</th>
			<th>Quantity</th>
			<th>Choose</th>
		</tr>
	</thead>
<!--	<tfoot>
		<tr>

			<th>No.</th>
			<th>Product Code</th>
			<th>Type</th>
			<th>Brand</th>
			<th>Quantity</th>
		</tr>

	</tfoot>
-->
	<tbody>
		
		<?php
		$base = base_url();
		foreach($result as $row){ //$result of template.php(controller)
			echo "<tr>";
			echo "<td>$row->product_code</td>
				<td>$row->type</td>
				<td>$row->brand</td>
				<td>$row->building</td>
				<td width='8px'>$row->quantity</td>";
		?>
		<!-- Echo for <?php echo site_url()?> -->
		<td width="80px">
		<a href="<?php echo site_url(); ?>/process_store/showwithdraw/<?php echo base64_encode($row->id); ?>"><img src="<?php echo base_url();?>/assets/images/withdraw.png" width='20' height='18' alt='withdraw' title="Withdraw from inventory system" style="border:none;"></a>&nbsp;
		<a onclick="return confirm('Are you sure?')" href='<?php echo site_url(); ?>/process_store/del/<?php echo base64_encode($row->id); ?>'><img src="<?php echo base_url(); ?>/assets/images/delete.png" width='20' height='18' alt='delete' title="Delete from inventory system" style="border:none;"></a>
		</td>
		<?php
			echo "</tr>";
			}
		?>
	</tbody>
</table>
<div class="spacer"></div>
