//Funções Javascript usadas pelas páginas do Projeto de Mecanismos

function BT_ValorPadrao_onclick()
{
   document.Formulario_Calculos.TXT_Curso.value = 300;
   document.Formulario_Calculos.TXT_Interacoes.value = 50;
   document.Formulario_Calculos.TXT_XdBM1.value = 1;
   document.Formulario_Calculos.TXT_XddBM1.value = 0;
   document.Formulario_Calculos.TXT_CompBiela1.value = 100;
   document.Formulario_Calculos.TXT_C2.value = 100;
   document.Formulario_Calculos.TXT_DH.value = 33;
   document.Formulario_Calculos.TXT_CB2.value = 50;
   document.Formulario_Calculos.TXT_DF.value = 12;
}

function BarraStatus(NOME)
{
   window.status=NOME;
   return true;
}

function click(e)
{
   var msginst = 'Projeto de Sistemas Térmicos - UNIP';
   if(document.all)
   {
      if(event.button==2||event.button==3)
      {
         alert(msginst);
         return false;
      }
   }
   if(document.layers)
   {
      if(e.which==3)
      {
         alert(msginst);
         return false;
      }
   }
}

if(document.layers)
{
   document.captureEvents(Event.MOUSEDOWN);
}

document.onmousedown=click;