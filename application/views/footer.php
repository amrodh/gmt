<table cellSpacing="0" cellPadding="0" width="100%" border="0" Class="FooterMenuText" style="margin-top:%">
  <tr>
    <td height="5"></td>
  </tr>
  <tr align="center">
    <td>
    <a id="Header2_HyperLink1" class="FooterMenu" href="<?= base_url(); ?>aboutus">About us</a>&nbsp;|&nbsp;
    <a id="Header2_HyperLink1" class="FooterMenu" href="<?= base_url(); ?>contactus">Contact us</a>&nbsp;|&nbsp;
    </td>
  </tr>
  <tr align="center" Class="FooterMenuText">
    <td>
    </td>
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td class="webcopyright">
      <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <td height="5"></td>
        </tr>
        <tr>
          <td align="right" class="webcopyright">
            © Travel Choice Overseas Ltd. (Egypt). All rights reserved.
          </td>
        </tr>
        <tr>
          <td height="5"></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</td>
                </tr>
              </tfoot>
              <tr>
                <td></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </form>


    <script src="<?php echo base_url(); ?>application/static/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>application/static/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?=base_url(); ?>application/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url(); ?>application/static/js/plugins/morris/raphael.min.js"></script>
    <script type="text/javascript" src="<?= base_url();?>application/static/js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>application/static/js/admin.js"></script>

  <script>
    $(".thumbnails_div div").click(function(){
    	var href = $(this).attr('data-href');
    	var src = $(this).attr('data-src');
        
        $(".featured_div_anchor").attr('href',href);
        $(".featured_div_image").attr('src',src);
    });


    $(".left a").click(function(){
    	var id = $(this).attr('id');
    	$(".content").each(function(){
    		var tmp_id = $(this).attr('data-id');
    		if(tmp_id != id)
    		$(this).hide();
    	})
    	var tmp = "#content_"+id;
    	$(tmp).slideDown('slow');
    });
</script>
</body>
</html>
