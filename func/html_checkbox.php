<?php
function html_checkbox($n,$c=0,$lbl="switch")
{
$checked = "";
if($c)$checked = "checked";
$o = "<label class=\"$lbl\">";
$o .= "  <input type=\"checkbox\" id=\"$n\" onclick=\"checkbox_change('$n')\" $checked>";
//$o .= "  <input type=\"checkbox\" id=\"$n\">";
$o .= "  <span class=\"slider round\"></span>";
$o .= "</label>";

return $o;
}
?>