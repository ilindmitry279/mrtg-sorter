<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MRTG index page</title>
</head>

<body>
<H1 style="text-align: center">MRTG Index Page</H1>

<?php
echo "<p style='text-align: center'><b>This page dispaying mrtg hosts.</b></p><br>";
echo "<table style='font-size: larger' align='center' width='180' border='0'><br>";

// В кавычках должен быть действительный путь к mrtg.cfg в Вашей системе
$mrtg_cfg=file("/usr/local/etc/mrtg/mrtg.cfg");
$lines= count($mrtg_cfg);
for ($i=0; $i<$lines; $i++){
$host_adress=stristr ($mrtg_cfg[$i], 'Include:');
$real_host_adress=str_replace("Include: ", "",$host_adress);
$real_host_adress=str_replace("\n", "",$real_host_adress);
$real_host_adress=str_replace("\r", "", $real_host_adress);
if (empty(${real_host_adress}));
else {
$host_cfg = file(${real_host_adress});
$host_name=stristr($host_cfg[20], ':');
$host_name=str_replace(':' ,'' , $host_name);
$host_name=str_replace('.yourdomain.com', '', $host_name);
$host_name=str_replace('.lv.energy.gov.ua', '', $host_name);

$nomer++;
$_GET['host']=$host_name;
echo "<tr>";
echo "<td width='31'><a href='pagemaker.php?host=$host_name'>$nomer.</a></td>";
echo "<td width='472'><a href='pagemaker.php?host=$host_name'>$host_name</a></td>";
echo "</tr>";
	}
}
echo "</table>";
?>

<BR>
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
</TABLE
>
<iframe width="340" height="60" src="http://www.hitfm.ua/player/embed/default/" frameborder="0" scrolling="no"></iframe>
</body>
</html>
