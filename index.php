<?php
session_start();
include('controller/languages/padrao.inc.php');
?>
<!DOCTYPE html>
<HTML>
<HEAD>

	<TITLE><?php echo $L_TITULO; ?></TITLE>

	<LINK href="model/css/main.css" type=text/css rel=stylesheet>
	<SCRIPT language=Javascript src="model/js/jsfunctions.js" type=text/javascript></SCRIPT>

	<!--<META content="MSHTML 6.00.2800.1276" name=GENERATOR>-->

</HEAD>

<BODY bgColor=white leftMargin="0" topMargin="0" marginheight="0" marginwidth="0">

	<br>

	<!-- INICIO -->

      <TABLE cellSpacing=0 cellPadding=0 width=600 border=0>
        <TBODY>
        <TR>
          <TD>
            <IMG height=34 alt="" src="view/view/img/logo2.png" width=315><BR>
          </TD>
          <TD align=right width="100%" background="view/img/bg15.gif">
	    <IMG height=34 alt="" src="view/img/tr7.gif" width=136><BR>
          </TD>
        </TR>
        </TBODY>
      </TABLE>

	<!-- /INICIO -->

	<!-- MEIO -->

      <TABLE cellSpacing=0 cellPadding=0 width=600 border=0>
        <TBODY>
        <TR vAlign=top>
          <TD background="view/img/bg17.gif">
            <IMG height=1 alt="" src="view/img/spacer.gif" width=37><BR>
          </TD>
          <TD align=middle width="100%" background="view/img/bg38.gif">
            <IMG height=7 src="view/img/spacer.gif" width=1><BR>

	<!-- CONTE�DO -->


		<?php include('controller/includes/core_index.php'); ?>


	<!-- /CONTE�DO -->

 	    <IMG height=7 src="view/img/spacer.gif" width=1>
          </TD>
          <TD background="view/img/bg18.gif"><IMG height=66 alt="" src="view/img/tr10.gif" width=37>
            <BR>
          </TD>
        </TR>
        </TBODY>
      </TABLE>

	<!-- /MEIO -->

	<!-- FIM -->

      <TABLE cellSpacing=0 cellPadding=0 width=600 border=0>
        <TBODY>
        <TR>
          <TD><IMG height=35 src="view/img/tr8.gif" width=37><BR></TD>
          <TD align=right width="100%" background="view/img/bg16.gif"><IMG height=35 alt="" src="view/img/tr9.gif" width=37 border=0><BR></TD>
        </TR>
        </TBODY>
      </TABLE>

	<!-- /FIM -->
</HTML>