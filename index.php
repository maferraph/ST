<?php

include('geral.php');

if(strlen($pag) == 0 )
{
   InsereCabecalho("");
   echo "<FRAMESET rows=\"110,*\" frameborder=0 framespacing=0>\n";
   echo "<FRAME name=FR_1 marginheight=0 marginwidth=0 frameborder=0 noresize src=\"index.php?pag=cab\" scrolling=NO>\n";
   echo "<FRAME name=FR_2 marginheigh=0 marginwidth=0 frameborder=0 src=\"index.php?pag=ent\" scrolling=yes>\n";
   echo "</FRAMESET></html>";
}
else
{
   if($pag == "cab" )
   {
      InsereCabecalho("");
      echo "<BODY>\n";
      $espaco = "<FONT CLASS=\"F1\">&nbsp;&nbsp;|&nbsp;&nbsp;</FONT>\n";
      echo "<TABLE bgColor=\"#FFFFFF\" CELLPADDING=0 CELLSPACING=0 WIDTH=\"100%\" BORDER=0 VALIGN=\"TOP\">\n";
      echo "<TR VALIGN=\"MIDDLE\"><TD ALIGN=\"LEFT\"><A HREF=\"index.php\" TARGET=\"_top\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"P�gina inicial\")'><IMG BORDER=0 SRC=\"logo.jpg\" BORDER=0></A></TD>\n";
      echo "<TD ALIGN=\"RIGHT\"><A HREF=\"http://www.unip.br\" TARGET=\"_top\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"Vai para site da Unip\")'><IMG SRC=\"unip.gif\" BORDER=0></A></TD></TR></TABLE>\n";
      echo "<TABLE CELLPADDING=\"0\" CELLSPACING=\"0\" WIDTH=\"100%\" BORDER=\"0\" VALIGN=\"TOP\"><TR VALIGN=\"MIDDLE\">\n";
      echo "<TD ALIGN=\"LEFT\" BGCOLOR=\"#006400\" VALIGN=\"MIDDLE\" HEIGHT=\"20\">\n";
      echo "<FONT CLASS=\"F1\">&nbsp;&nbsp;</FONT>\n";
      echo "<A HREF=\"traba.php\" TARGET=\"FR_2\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"Trabalho entregue ao professor\")'><FONT CLASS=\"F1\">Trabalho</FONT></A>\n";
      echo $espaco;
      echo "<A HREF=\"aprese.php\" TARGET=\"FR_2\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"Apresenta��o realizada em classe\")'><FONT CLASS=\"F1\">Apresenta��o</FONT></A>\n";
      echo $espaco;
      echo "<A HREF=\"cred.php\" TARGET=\"FR_2\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"Cr�ditos\")'><FONT CLASS=\"F1\">Cr�ditos</FONT></A>\n";
      echo "</TD></TR></TBODY></TABLE>\n";
      echo "</BODY></HTML>\n";
   }
   else
   {
      InsereCabecalho("");
      echo "<BODY bgColor=\"#FFFFFF\" leftMargin=\"0\" topMargin=\"0\" marginheight=\"0\" marginwidth=\"0\">\n";
      echo "<BR><BR>\n";
      InsereTexto("Projeto de Sistemas T�rmicos feito por alunos do 5� ano de Engenharia Mecatr�nica da Unip - Unidade Bacelar, turma diurno/fevereiro - 2001, com Professor Paulo S�rgio da mat�ria de Laborat�rio de Sistemas T�rmicos.");
      InsereTexto("O objetivo deste trabalho � o de projetar um sistema de resfriamento usando termoacumula��o de �gua gelada para o ar de admiss�o da c�mara de combust�o de uma usina termoel�trica operando com o ciclo de Brayton, do qual retira a umidade do ar, aumentando a quantidade de massa por volume de ar admitido, consequentemente aumentando o rendimento do ciclo.");
      InsereImagem("Slide1.JPG","Termoacumula��o de �gua Gelada");

      ContadordePagina();

      //echo "<CENTER><FONT CLASS=\"CON\">Visitas desde Novembro/2001</FONT></CENTER><CENTER><TABLE bgColor=\"#FFFFFF\" CELLPADDING=0 CELLSPACING=0 WIDTH=\"20%\" BORDER=1 VALIGN=\"TOP\"><TR VALIGN=\"MIDDLE\"><TD ALIGN=\"CENTER\">\n";
      //echo "<CENTER><A HREF=\"http://www.TheCounter.com\" TARGET=\"_top\"><IMG SRC=\"http://c3.thecounter.com/id=2408794\" ALT=\"TC\" BORDER=0></A></CENTER>\n";
      echo "</TD></TR></TABLE></CENTER>\n";

      echo "<BR><BR>\n";
      InsereRodape();
      echo "</BODY></HTML>\n";
   }
}
?>