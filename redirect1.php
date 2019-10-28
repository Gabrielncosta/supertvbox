<?php 

if(isset($_GET['src'])) {
        $src = $_GET['src'];
    }

if(isset($_GET['site']))
  $site = $_GET['site'];

  else
    $site = "sem_site";
    
    header("Location: https://supertvboxoficial.com/depoimentos/?src=".$src . "-redirect1");
    ?>

