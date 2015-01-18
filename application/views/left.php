<table cellpadding="0" cellspacing="0" border="0" width="100%">
        <!--tr><td colspan="3" height="10" class="label">&nbsp;</td></tr-->
    
        
        <?php foreach ($all_categories as $x): ?>
        <tr align="left">
            <td width="10" rowspan="2"></td>
            <td><a href="<?= base_url(); ?>category/<?= $x->name; ?>"><?= $x->name; ?></a>&nbsp;<br>
            <font class="PackageDescriptionMenuSmall"></font></td>
            <td width="10" rowspan="2"></td>
        </tr>
        <tr>
            <td height="5" colspan="3"></td>
        </tr>
        <?php endforeach ?>
</table>