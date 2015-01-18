<?php include('header.php'); ?>
                                        
					</tr>
				</thead>
				<tbody class="pagebody">
					<tr>
						<td class="pagebody" height="100%">
							<table height="100%" cellspacing="0" cellpadding="0" width="100%" border="0">
								<tr>
									<td colspan="3" height="30"></td>
								</tr>
								<tr>
									<td class="LNavMenuBack" valign="top" align="center" width="215">
		<?php include('left.php'); ?>
	</td>
									<td width="10"></td>
									<td valign="top" align="center">
										<table id="Table1" cellspacing="0" cellpadding="0" width="97%" border="0">
											<tr>
												<td valign="top" align="center" colspan="3"><span id="SectionNameLbl" class="PackageHeader"><?= $category->name; ?></span></td>
											</tr>
											<tr>
												<td height="15"></td>
											</tr>
											<tr>
												<td valign="top" align="left" colspan="3"><span id="SectionDescLbl" class="Label"></span></td>
											</tr>
											<tr>
												<td height="5"></td>
											</tr>
											<tr>
												<td class="Label"></td>
											</tr>
											<tr>
												<td height="10"></td>
											</tr>
											<tr>
												<td>
															<table cellpadding="0" cellspacing="0" border="0" width="100%">
														      


<?php if (is_array($packages)): ?>
      <?php foreach ($packages as $package): ?>
          <tr>
    <td width="100" align="left">
        <?php if (is_array($package->images)): ?>
            <img style="width:100px;height:85px;" alt='<?= $package->title; ?>' src="<?= base_url(); ?>application/static/upload/package/<?= $package->images[0]->image; ?>" />
        <?php else: ?>
            <img style="width:100px;height:85px;" alt='<?= $package->title; ?>' src="<?= base_url(); ?>application/static/images/no_image.jpg" />
        <?php endif ?>
    </td>
    <td width="10" height="10"></td>
    <td class="Label" align="left" valign="top">
    <a class="coachmenu" href="<?= base_url(); ?>package/<?= $package->title; ?>"><?= $package->title; ?></a>&nbsp;
        <br><br>
        <b>(<?= $package->days; ?>
            days /
            <?= $package->nights; ?>
            nights)</b>
        
    </td>
</tr>
<tr>
																<td height="10" colspan="3"></td>
															</tr>
      <?php endforeach ?>
<?php endif ?>  
														
										</table>
										
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td height="30" colspan="3"></td>
					</tr>
			</table>
			</td> </tr> </tbody>
			<tfoot>
				<tr>
					<td>
<?php include('footer.php'); ?>