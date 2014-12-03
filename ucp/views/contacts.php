<div class="col-md-10">
	<div class="row nav-container">
		<div class="col-sm-8">
			<?php echo $pagnation;?>
		</div>
		<div class="col-sm-4">
			<div class="input-group">
				<input type="text" class="form-control" id="search-text" placeholder="<?php echo _('Search')?>" value="<?php echo $search?>">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button" id="search-btn">Go!</button>
				</span>
			</div>
		</div>
	</div>
	<?php if(isset($readonly) && !$readonly) {?>
		<a cm-pjax href="?display=dashboard&amp;mod=contactmanager&amp;view=addcontact&amp;group=<?php echo $_REQUEST['id']?>" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Add New Contact</a>
		<button id="deletegroup" class="btn btn-default btn-sm pull-right" data-id="<?php echo $_REQUEST['id']?>"><i class="fa fa-trash-o"></i> Delete This Group</button>
	<?php } ?>
	<div class="table-responsive">
		<table class="table table-hover table-bordered contact-table">
			<thead class="contact-header">
				<tr>
					<th><?php echo _('Display Name')?><i class="fa fa-chevron-<?php echo ($order == 'desc' && $orderby == 'displayname') ? 'down' : 'up'?> <?php echo ($orderby == 'displayname') ? '' : 'hidden'?>"></i></th>
					<th><?php echo _('First Name')?></th>
					<th><?php echo _('Last Name')?></th>
				</tr>
			</thead>
			<?php foreach($contacts as $contact) {?>
				<tr class="contact-item" data-group="<?php echo $contact['groupid']?>" data-contact="<?php echo $contact['uid']?>">
					<td><?php echo $contact['displayname'];?></td>
					<td><?php echo $contact['fname'];?></td>
					<td><?php echo $contact['lname'];?></td>
				</tr>
			<?php } ?>
		</table>
	</div>
	<?php echo $pagnation;?>
</div>
