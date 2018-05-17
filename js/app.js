console.log("d(•.•)b Hello There!!")
console.log("Mark Was Here")

function activeNavBar() {
    let active = "is-active"
    var element = document.getElementById("mainNavBar")
    // element.classList returns an array of element class names
    // we check if it contains "is-active" we remove it else we add it
    // console.log(element.classList)
    if (element.classList.contains(active)) {
        element.classList.remove(active)
    } else {
        element.classList.add(active)
    }

}