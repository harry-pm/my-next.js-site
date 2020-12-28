function colorEgg(ID) {
    document.getElementById(ID).style.filter = "grayscale(0%)";
}

// load easter eggs from session storage and color
var eggs = sessionStorage.getItem("eggs")
? JSON.parse(sessionStorage.getItem("eggs"))
: [];

for (egg of eggs) {
    colorEgg(egg);
}

// onlclick add to storage and color
function easterEgg(ID) {
    if (!(eggs.includes(ID))) {
        eggs.push(ID);
    }
    colorEgg(ID);
    sessionStorage.setItem("eggs", JSON.stringify(eggs));

    // create sparks with full collection
    if (eggs.length == 8) {
        completeEggs();
        eggs.push("eggs complete");
    }
}