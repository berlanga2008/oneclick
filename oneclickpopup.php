<?php

$array_referer= array("web1.com", "web2.com"); 
// si quieres pon mas urls, acortalas para que sean mas legibles "web2.com" -> ebay web2.com2 -> cpa
//, "s", "width=100%, height=100%, left=0, top=0, resizable=yes, toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, //copyhistory=no"
		
shuffle($array_referer);
$content.= '
<script>
document.currentStage = 1; 
function LanzaPopUnder() {
    if (document.currentStage == 1) {
         var url = "'.$array_referer[0].'";
         window.open(url, "s", "width=100%, height=100%, left=0, top=0, resizable=yes, toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no").blur();
         window.focus();
         document.currentStage++;
    }
} 

function addFunctionToClick() {
    if (document.body) {
      if (document.all) {
        document.body.attachEvent("onclick", LanzaPopUnder);
      } else {
        document.body.addEventListener("click", LanzaPopUnder, false);
      }
    } else {
      setTimeout("addFunctionToClick()", 200);
    }
} addFunctionToClick();
</script>';
echo $content;
?>
