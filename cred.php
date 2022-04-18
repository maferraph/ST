<?php

include('geral.php');

if(strlen($download) == 0 )
{

InsereCabecalho("");
echo "<BODY bgColor=\"#FFFFFF\" leftMargin=\"0\" topMargin=\"0\" marginheight=\"0\" marginwidth=\"0\">";

echo "<BR>";
echo "<FONT CLASS=\"FT\"><CENTER>UNIP – Universidade Paulista</CENTER></FONT>";
echo "<FONT CLASS=\"FS\"><CENTER>Unidade Bacelar</CENTER></FONT>";
echo "<FONT CLASS=\"FS\"><CENTER>ICET – Instituto de Ciências Exatas e Tecnologia</CENTER></FONT>";
echo "<BR><BR>";
echo "<FONT CLASS=\"FT\"><CENTER>PROJETO DE SISTEMAS TÉRMICOS 2001</CENTER></FONT>";
echo "<FONT CLASS=\"FS\"><CENTER>Professor Paulo Sérgio</CENTER></FONT>";
echo "<FONT CLASS=\"FS\"><CENTER>5º Engenharia Mecatrônica - Turma 2001</CENTER></FONT>";
echo "<BR><BR>";
echo "<TABLE cellPadding=0 cellSpacing=0 CLASS=\"TabNomes\" WIDTH=\"100%\" VALIGN=\"TOP\"><TBODY>";
?>
<TR>
    <TD>
        <CENTER><IMG SRC="mau.jpg" BORDER="0"></CENTER>
        <CENTER><FONT CLASS="FA">Maurício Fernandes Raphael</FONT></CENTER>
        <CENTER><FONT CLASS="FA"><A HREF="mailto:mauricio@termoacumulacao.port5.com">mauricio@termoacumulacao.port5.com</A></FONT></CENTER>
        <CENTER><FONT CLASS="FA">RA 091.495-9</FONT></CENTER><P>
    </TD>
    <TD>
        <CENTER><IMG SRC="fil.jpg" ALIGN="Middle" BORDER="0"></CENTER>
        <CENTER><FONT CLASS="FA">Ricardo de Almeida Filó</FONT></CENTER>
        <CENTER><FONT CLASS="FA"><A HREF="mailto:ricardo@termoacumulacao.port5.com">ricardo@termoacumulacao.port5.com</A></FONT></CENTER>
        <CENTER><FONT CLASS="FA">RA 090.071-0</FONT><P>
    </TD>
</TR>
<TR>
    <TD>
        <CENTER><IMG SRC="dan.jpg" BORDER="0"></CENTER>
        <CENTER><FONT CLASS="FA">Daniel Savoy</FONT></CENTER>
        <CENTER><FONT CLASS="FA"><A HREF="mailto:daniel@termoacumulacao.port5.com">daniel@termoacumulacao.port5.com</A></FONT></CENTER>
        <CENTER><FONT CLASS="FA">RA 118.634-5</FONT></CENTER><P>
    </TD>
    <TD>
        <CENTER><IMG SRC="gus.jpg" BORDER="0"></CENTER>
        <CENTER><FONT CLASS="FA">Gustavo Bronstrup Bonanno</FONT></CENTER>
        <CENTER><FONT CLASS="FA"><A HREF="mailto:gustavo@termoacumulacao.port5.com">gustavo@termoacumulacao.port5.com</A></FONT></CENTER>
        <CENTER><FONT CLASS="FA">RA 091.262-0</FONT></CENTER><P>
    </TD>
</TR>
<TR>
    <TD>
        <CENTER><IMG SRC="fer.jpg" BORDER="0"></CENTER>
        <CENTER><FONT CLASS="FA">Fernando Frasson Giusti</FONT></CENTER>
        <CENTER><FONT CLASS="FA"><A HREF="mailto:fernando@termoacumulacao.port5.com">fernando@termoacumulacao.port5.com</A></FONT></CENTER>
        <CENTER><FONT CLASS="FA">RA 072.993-0</FONT></CENTER><P>
    </TD>
    <TD>
        <CENTER><IMG SRC="edu.jpg" BORDER="0"></CENTER>
        <CENTER><FONT CLASS="FA">Eduardo Fernando Bento Barbosa</FONT></CENTER>
        <CENTER><FONT CLASS="FA"><A HREF="mailto:eduardo@termoacumulacao.port5.com">eduardo@termoacumulacao.port5.com</A></FONT></CENTER>
        <CENTER><FONT CLASS="FA">RA 058.760-5</FONT></CENTER><P>
    </TD>
</TR>
</TBODY></TABLE>

<BR><BR>
<FONT CLASS="FT">Agradecimentos:</FONT><BR>
<FONT CLASS="FX">- Professor Paulo Sérgio</FONT><BR>
<FONT CLASS="FX">- Professor Lima</FONT><BR>
<FONT CLASS="FX">- Masstin Engenharia</CENTER></FONT><BR>
<BR><BR>
<FONT CLASS="FS">DOWNLOADS</FONT><BR><BR>
<FONT CLASS="FX">Abaixo dispomos arquivos para download em formato PDF para livre uso do trabalho entregue ao professor e da apresentação feita em classe, lembrando que os direitos sobre este trabalho pertecem aos alunos - autores, aos professores e a UNIP - Universidade Paulista.</FONT><BR><BR>

<?php
InsereDownload();
echo "<BR><BR>\n";
?>
<FONT CLASS="FT">Outros trabalhos do grupo:</FONT><BR>
<BR>
<FONT CLASS="FX">- Projeto de Mecanismos</FONT><BR>
<A HREF="http://projetodemecanismos.port5.com" TARGET="_new" >&nbsp;&nbsp;http://projetodemecanismos.port5.com</A>
<BR><BR>
<FONT CLASS="FX">- Projeto de Sistemas Térmicos</FONT><BR>
<A HREF="http://termoacumulacao.port5.com" TARGET="_new" >&nbsp;&nbsp;http://termoacumulacao.port5.com</A>
<BR><BR>
<FONT CLASS="FX">- Projeto de Instrumentação</FONT><BR>
<A HREF="http://www.instrumentacao.port5.com" TARGET="_new" >&nbsp;&nbsp;http://www.instrumentacao.port5.com</A>
<BR><BR>
<FONT CLASS="FX">- Projeto de Elementos de Construção de Máquinas</FONT><BR>
<A HREF="http://www.projetoecm2000.cjb.net" TARGET="_new" >&nbsp;&nbsp;http://www.projetoecm2000.cjb.net</A>

<?php
echo "<BR><BR>\n";
InsereRodape();
?>

</BODY></HTML>

<?php
}
else
{
   if($download == "tra" )
   {
      //$tmp = Contador("tra");
      $file='http://utenti.lycos.it/engenhariaunip/st/stdoc.zip';
      Header ("Content-Type: application/zip");
      Header ("Content-Length: ".filesize($file));
      Header ("Content-Disposition: $file; filename=stdoc.zip");
      header ("Pragma: no-cache");
      header ("Expires: 0");
   }
   elseif($download == "apr" )
   {
      //$tmp = Contador("apr");
      $file='http://utenti.lycos.it/engenhariaunip/st/stapr.zip';
      Header ("Content-Type: application/zip");
      Header ("Content-Length: ".filesize($file));
      Header ("Content-Disposition: $file; filename=stapr.zip");
      header ("Pragma: no-cache");
      header ("Expires: 0");
   }
}