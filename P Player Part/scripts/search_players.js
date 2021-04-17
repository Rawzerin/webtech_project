
function searchPlayer(){
    var region = document.getElementById('regions').options
    var index = region.selectedIndex
    var r = region[index].text
    var game = document.getElementById('searchBar').value
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("player-list").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../controller/player_search_controller.php?region="+r+"&game="+game, true);
    xhttp.send();
}


