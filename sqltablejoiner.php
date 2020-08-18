<?php
require("config1.php");
$join="SELECT document.*,download.*,status_document.*,type.*,user.* FROM document RIGHT  JOIN download ON download.did=document.did JOIN status_document ON status_document.did=document.did JOIN type ON type.tid=document.tid JOIN user ON user.uid=document.uid"; ?>