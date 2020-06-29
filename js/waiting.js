
function checkPlayers(){
    var btn = document.getElementById('start-btn');
    btn.addEventListener('click', function(event){
        var num = document.getElementById('num-players')

        var n = Number(num.textContent);
        if(n < 2) {
            event.preventDefault();
            alert("at least two players must be logged in to start the game");
        }
    });
};