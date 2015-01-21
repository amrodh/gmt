<?= include('header.php'); ?>
</tr></thead><tbody class="pagebody"><tr>
<td class="pagebody">
<table cellspacing="0" cellpadding="0" width="964" border="0">
<tr>
<td colspan="3" height="30"></td>
</tr>
<tr>
<td class="LNavMenuBack" valign="top" width="215">
 	<?php include('left.php'); ?>
</td>
<td width="10"></td>
<td>
<table cellspacing="0" cellpadding="0" width="97%" border="0">
<tr>
<td width="10"></td>
<td valign="middle" align="right"></td>
<td width="10"></td>
</tr>
<tr>
<td width="10" height="24"></td>
<td>
<font width="100%">
<TABLE id="MainTable" cellSpacing="0" dir="ltr" cellPadding="0" width="736" align="center" border="0">
<tr>
<td>
<table width="100%" ID="Table1">
<tr>
<TD height="20" colSpan="3"></TD>
</tr>
<TR>
<td align="center" class="label" width="25%"></td>
<TD align="center" valign="top" class="newlabel">
<font style="text-transform: uppercase;" class="packageheader" align="center">
<?= $package->title; ?>
</font>
<br>
<font class="packagedescription" align="center">
<?= $package->days; ?> days/
<?= $package->nights; ?>  nights
</font>
<br>
<font class="subtitletourbig" align="center">Rate starting from</font>
<font class="subtitletourbig" align="center">EGP 
<?= $package->single; ?> per person
</font>
<br>
<font class="subtitletoursmall" align="center"></font>
<br>
</td>
<td width="25%" align="center"></td>
</tr>
</table>
</td>
</tr>
<TR>
<TD height="5"></TD>
</TR>
<TR>
<TD align="Right">
<table id="TwitterFacebookTbl" align="right" cellpadding="0" cellspacing="0" border="0">
<tr>
<td>
<tr>
<td>
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.travelchoiceegypt.com%2Fholidays%2Fcpackage.aspx%3FPkgID%3D2165-95-2&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35&amp;appId=131023556928498" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe>
</td>
</tr>
<tr>
<td>
<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.travelchoiceegypt.com/holidays/cPackage.aspx?PkgID=2165&SecID=95&DeptID=2" data-text="A Taste of Europe" data-count="horizontal">Tweet</a>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
</td>
</tr>
</table>
</TD>
</TR>
<TR>
<TD height="20"></TD>
</TR>
<TR>
<TD align="left">
<A class="packageMenu" href="#include">Package Includes</A> | 
<A class="packageMenu" href="#destination">Destination Highlights</A> | 
<A class="packageMenu" href="#rate">Package Rates</A> | 
<A class="packageMenu" href="#about">Description</A> | 
<A class="packageMenu" href="#itinerary">Itinerary</A> | 
<A class="packageMenu" href="#terms">Terms and Conditions</A>
</TD>
</TR>
<TR>
<TD align="left" background="../img/package/menu_line.jpg">
<img alt="" src="./img/spa_1.jpg" height="1px" />
</TD>
</TR>
<TR>
<TD height="20"></TD>
</TR>
<tr>
<td>
<TABLE id="Table4" cellSpacing="0" cellPadding="0" width="100%" border="0">
<tr>
<TD class="label" vAlign="top" width="300">
<?php if (is_array($package->images)): ?>
	<img style="width:259px;height:194px;" src="<?= base_url(); ?>application/static/upload/package/<?= $package->images[0]->image; ?>" alt="">
<?php endif ?>
</td>
<TD width="10"></TD>
<TD vAlign="top" class="label">
<FONT class="packagetitle" id="include">Package Includes</FONT>
<br>
<BR>
<!-- <UL class="label"> -->
<?= $package->includes; ?>
<!-- </UL> -->
<br>
<br>
<FONT class="titlelabel"></FONT>
<FONT class="titlelabel">Optional</FONT>
<br>
<br>
<?= $package->optional; ?>
</TD>
</TR>
</TABLE>
<br>
<table cellpadding="0" cellspacing="0" width="100%">
<TR>
<TD align="right" background="../img/package/menu_line.jpg"></TD>
</TR>
<tr>
<td height="10"></td>
</tr>
<tr>
<TD valign="top" class="label">
<FONT class="Packagetitle" id="include">Gallery</FONT>
<br>
<BR>
</td>
</tr>
<tr>
<td>
<?php if (is_array($package->images)): ?>
    <?php foreach ($package->images as $image): ?>
    <img border="0" width="100" height="85" src="<?= base_url(); ?>application/static/upload/package/<?= $image->image; ?>">
    <?php endforeach ?>
<?php endif ?>
</tr>
</td>
<tr>
<td height="10"></td>
</tr>
<tr>
<td align="right">
<a onclick="MM_openBrWindow('../CampsGallery.aspx?City=Tasteofeurope&Pkg=A Taste of Europe','','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=750,height=550')" href="#">
<FONT class="packagemenu"><!-- More ... --></FONT>
</a>&nbsp;&nbsp;&nbsp;&nbsp;
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td height="20"></td>
</tr>
<tr>
<td height="20"></td>
</tr>
<tr>
<TD align="right">
<A class="packagemenu" href="#">Top</A>
</TD>
</tr>
<tr>
<td height="4"></td>
</tr>
<TR>
<TD align="left" background="../img/package/menu_line.jpg">
<img alt="" src="./img/spa_1.jpg" height="1px" />
</TD>
</TR>
<tr>
<td height="20"></td>
</tr>
<tr>
<td>
<TABLE id="Table4" cellSpacing="0" cellPadding="0" width="100%" border="0">
<tr>
<TD vAlign="top" class="label">
<FONT class="packagetitle" id="destination">Destination Highlights</FONT>
<br>
<BR>
<UL class="label">
<li>
    <?= $package->highlights; ?>
</li>
</UL>
</TD>
</TR>
</TABLE>
</td>
</tr>
<tr>
<td height="20"></td>
</tr>
<tr>
<TD align="right">
<A class="packagemenu" href="#">Top</A>
</TD>
</tr>
<tr>
<td height="4"></td>
</tr>
<TR>
<TD align="left" background="../img/package/menu_line.jpg">
<img alt="" src="./img/spa_1.jpg" height="1px" />
</TD>
</TR>
<tr>
<td height="20"></td>
</tr>
<tr>
<td>
<font id="rate" class="packagetitle">Package Rates</font>
<BR>
<font class="titlelabel">Rates are per person in EGP, starting from</font>
<BR>
<BR>
<TABLE id="Table2" borderColor="#ffffff" cellSpacing="1" cellPadding="0" width="100%" border="0">
<TR class="titlelabel">
<TD align="left" colSpan="14"></TD>
</TR>
<TR class="titlelabelwhite">
<!-- <TD align="center" bgColor="#5e7ca7" width="35%">Cities</TD> -->
<TD align="center" bgColor="#5e7ca7">Double</TD>
<TD align="center" bgColor="#5e7ca7">Single</TD>
<TD vAlign="middle" align="center" width="90" rowSpan="1">&nbsp;&nbsp;
<A href="<?= base_url(); ?>booking/<?= $package->title; ?>">
<IMG src="<?= base_url(); ?>application/static/images/book.jpg">
</A>
</TD>
</TR>
<TR class="label" bgColor="#ecf4ff">
<TD align="center"><?= $package->single; ?></TD>
<TD align="center"><?= $package->double; ?></TD>
</TR>
<tr>
<td class="subtitletoursmall" colspan="14">
<br>Rates are only indicative, exact rates are to be advised upon actual reservation.
</td>
</tr>
<tr>
<td height="10" colspan="14"></td>
</tr>
<tr>
<td height="20" colspan="14"></td>
</tr>
<tr>
<td height="5" colspan="6"></td>
</tr>
<tr>
<td colspan="6" class="titlelabel">
<i>These rates are valid through the Winter season, from 01 November 2014 till 31 March 2015.</i>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td height="20"></td>
</tr>
<tr>
<TD align="right">
<A class="packagemenu" href="#">Top</A>
</TD>
</tr>
<tr>
<td height="4"></td>
</tr>
<TR>
<TD align="left" background="../img/package/menu_line.jpg">
<img alt="" src="./img/spa_1.jpg" height="1px" />
</TD>
</TR>
<tr>
<td height="20"></td>
</tr>
<tr>
<td>
<table width=100% cellpading=0 cellspacing=0 border=0>
<tr>
<td width=100% class="packagetitle" vAlign="top" id="itinerary">Itinerary</td>
</tr>
<tr>
<td height=15></td>
</tr>
<tr>
<td width=100% class="label" vAlign="top">
<?php if (is_array($package->images)): ?>
    <?php
        $image = $package->images[0];
        $image = $image->image;
     ?>
    <img style="width:259px;height:194px;" src="<?= base_url(); ?>application/static/upload/package/<?= $image; ?>" style="float:right" alt="" border=0 valign="top" hspace=10 vspace=5>
<?php endif ?>
<?= $package->itinerary; ?>
<TR>
<TD height="20"></TD>
</TR>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td height="20"></td>
</tr>
<tr>
<TD align="right">
<A class="packagemenu" href="#">Top</A>
</TD>
</tr>
<tr>
<td height="4"></td>
</tr>
<TR>
<TD align="left" background="../img/package/menu_line.jpg">
<img alt="" src="./img/spa_1.jpg" height="1px" />
</TD>
</TR>
<tr>
<td height="20"></td>
</tr>
<tr>
<td width="100%" class="label">
<!-- <font id="transfer" class="packagetitle">Optional Transfers</font>
<BR>
<BR>
<TABLE id="Table2" borderColor="#ffffff" cellSpacing="0" cellPadding="0" width="90%" border="0">
<TR class="titlelabelwhite">
<TD align="center" bgColor="#5e7ca7" width="20%">From/To</TD>
<TD align="center" bgColor="#5e7ca7" width="20%">Transfer Type</TD>
<TD align="center" bgColor="#5e7ca7" width="10%">Persons</TD>
<TD align="center" bgColor="#5e7ca7" width="30%">Rate</TD>
<TD align="center" bgColor="#5e7ca7" width="10%">Per</TD>
</TR>
<TR class="label" bgColor="#ecf4ff">
<TD align="center">Airport/ Hotel in London or vice versa </TD>
<TD align="center">Shuttle Transfer</TD>
<TD align="center">1</TD>
<TD align="center"> USD 25</TD>
<TD align="center">Person</TD>
</TR>
<tr>
<td height="5" colspan="6"></td>
</tr>
</table> -->
</td>
</tr>
<tr>
<td height="20"></td>
</tr>
<tr>
<TD align="right">
<A class="packagemenu" href="#">Top</A>
</TD>
</tr>
<tr>
<td height="4"></td>
</tr>
<TR>
<TD align="left" background="../img/package/menu_line.jpg">
<img alt="" src="./img/spa_1.jpg" height="1px" />
</TD>
</TR>
<tr>
<td height="20"></td>
</tr>
<TR>
<TD>
<FONT class="packagetitle" id="terms">Terms and Conditions
</A>
</FONT>
<BR>
<BR>
<?= $package->terms; ?>
</TD>
</TR>
<tr>
<TD align="right">
<A class="packagemenu" href="#">Top</A>
</TD>
</TR>
</table>
</font>
<font width="100%"></font>
</td>
<td width="10" height="24"></td>
</tr>
<tr>
<td colspan="3" height="20"></td>
</tr>
</table>
</td>
</tr>
<tr>
<td colspan="3" height="30"></td>
</tr>
</table>
</td>
</tr>
</tbody>
<tfoot>
<tr>
<td align="center">
<?php include('footer.php'); ?>