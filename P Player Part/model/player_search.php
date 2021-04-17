<?php
require  '../model/db_connect.php';


function searchPlayer($region = null, $game = null){
    $conn = db_conn();
    $query = null;
    $query = "select id ,name, imgUrl from player where region='$region' and selectedGames like '%$game%'";
//    if ($region != null && $game != null){
//        $query = "select id ,name, imgUrl from player where region='$region' and selectedGames like '%$game%'";
//    }else if ($region != null){
//        $query = "select id ,name, imgUrl from player where region='$region'";
//    }else{
//        $query = "select id ,name, imgUrl from player where  selectedGames like '%$game%'";
//    }
    try {
        $result = $conn->query($query);
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;
        return $rows;
    }catch (PDOException $e) {
        echo $e->getMessage();
        $conn = null;
        return null;
    }
}