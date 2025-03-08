<?php
if (isset( $_GET["page"]))
{$page_= $_GET["page"]; }
else
{$page= 0;}
include ("page0".$page.".php");
?>