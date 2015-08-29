<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pagemaker</title>
</head>

<body>
<?php 
echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<HTML>
<HEAD>
    <TITLE>MRTG Index Page</TITLE>
    <!-- Command line is easier to read using "View Page Properties" of your browser -->
    <!-- But not all browsers show that information. :-(                             -->
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-15" >
    <META NAME="Command-Line" CONTENT="/usr/local/bin/indexmaker --columns=1 /usr/local/etc/mrtg/mrtg.cfg" >
    <META HTTP-EQUIV="Refresh" CONTENT="300" >
    <META HTTP-EQUIV="Cache-Control" content="no-cache" >
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache" >
    <META HTTP-EQUIV="Expires" CONTENT="Tue, 22 Jul 2014 08:05:41 GMT" >
    <LINK HREF="favicon.ico" rel="shortcut icon" >
    
<style type="text/css">
/* commandline was: /usr/local/bin/indexmaker --columns=1 /usr/local/etc/mrtg/mrtg.cfg */
/* sorry, no style, just abusing this to place the commandline and pass validation */
</style>
</HEAD>

<BODY bgcolor="#ffffff" text="#000000" link="#000000" vlink="#000000" alink="#000000">


<H1><a href=\'index.php\'>MRTG Index Page</a></H1>';
$index_html=file('index.html');
$index_html_lines= count($index_html);
for ($b=0; $b<=$index_html_lines; $b++) {
	$host_for_page=stristr($index_html[$b], $_GET['host']);
	if (empty($host_for_page));
	else {
		$b1=$b-1;
		$b2=$b+3;
		for ($b3=$b1; $b3<=$b2; $b3++) {
			echo $index_html[$b3];
			}
		}
	
	}

echo '<BR>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0>
  <TR>
    <TD WIDTH=63><A
    HREF="http://oss.oetiker.ch/mrtg/"><IMG
    BORDER=0 SRC="mrtg-l.png" WIDTH=63 HEIGHT=25 ALT="MRTG"></A></TD>
    <TD WIDTH=25><A
    HREF="http://oss.oetiker.ch/mrtg/"><IMG
    BORDER=0 SRC="mrtg-m.png" WIDTH=25 HEIGHT=25 ALT=""></A></TD>
    <TD WIDTH=388><A
    HREF="http://oss.oetiker.ch/mrtg/"><IMG
    BORDER=0 SRC="mrtg-r.png" WIDTH=388 HEIGHT=25
    ALT="Multi Router Traffic Grapher"></A></TD>
  </TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0>
  <TR VALIGN=top>
  <TD WIDTH=88 ALIGN=RIGHT><FONT FACE="Arial,Helvetica" SIZE=2>
  version 2.17.4</FONT></TD>
  <TD WIDTH=388 ALIGN=RIGHT><FONT FACE="Arial,Helvetica" SIZE=2>
  <A HREF="http://tobi.oetiker.ch/">Tobias Oetiker</A>
  <A HREF="mailto:tobi+mrtglink@oetiker.ch">&lt;tobi@oetiker.ch&gt;</A>
  and&nbsp;<A HREF="http://www.bungi.com/">Dave&nbsp;Rand</A>&nbsp;<A HREF="mailto:dlr@bungi.com">&lt;dlr@bungi.com&gt;</A></FONT>
  </TD>
</TR>
</TABLE'
?>



</body>
</html>
