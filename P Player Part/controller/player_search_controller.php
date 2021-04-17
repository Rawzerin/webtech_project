<?php
require '../model/player_search.php';

if (isset($_GET['region']) && isset($_GET['game'])) {
    $players = $players = searchPlayer($_GET['region'], $_GET['game']);;
    if (sizeof($players) > 0) {
        foreach ($players as $key => $player) {
            echo "<div class='list-item card'>";
            echo "<div class='visit-player-profile'>";
            echo "<a href=../view/profile.php?userId={$player['id']}>";
            echo "<div class='rounded-avatar'>";
            echo "<img src=" . $player['imgUrl'] . ">";
            echo "</div>";
            echo "<h4>" . $player['name'] . "</h4>";
            echo "</a>";
            echo "</div>";
            echo "<img id='addButton' src='../img/add_icon.png'>";
            echo "</div>";
        }
    } else {
        echo "<h3>No result found</h3>";
    }
}






