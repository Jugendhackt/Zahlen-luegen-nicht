// Script for Quests
var pressed = false;
function choice(ch) {
    /*if (ch == 1) {
        document.getElementById("choice1").classList.add("selected")
        document.getElementById("choice2").classList.remove("selected")

        document.getElementById("link1").style.display = "inline-block";
        document.getElementById("link2").style.display = "none";
    }
    if (ch == 2){
        document.getElementById("choice2").classList.add("selected")
        document.getElementById("choice1").classList.remove("selected")


        document.getElementById("link2").style.display = "inline-block";
        document.getElementById("link1").style.display = "none";
    }*/
}


$("body").on("keydown", function(event) {
    if (event.which == 97) {
        pressed = true;
        console.log("true");
    }
});

$("body").on("keyup", function(event) {
    if (event.which == 97) {
        pressed = false;
        console.log("true");
    }
});


function wopen(i) {

    if(pressed) {
        window.open(i);
    }
}

