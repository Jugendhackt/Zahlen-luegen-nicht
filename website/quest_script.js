// Script for Quests

function choice(ch) {
    if (ch == 1) {
        document.getElementById("choice1").classList.add("selected")
        document.getElementById("choice2").classList.remove("selected")

        document.getElementById("link1").style.display = "initial";
        document.getElementById("link2").style.display = "none";
    }
    if (ch == 2){
        document.getElementById("choice2").classList.add("selected")
        document.getElementById("choice1").classList.remove("selected")


        document.getElementById("link2").style.display = "initial";
        document.getElementById("link1").style.display = "none";
    }
}