document.addEventListener("DOMContentLoaded", function () {
    svgProgram();
});

async function svgProgram() {


    // load svg

    let mySvg = await fetch("husetager.svg");
    let svg = await mySvg.text();


    document.querySelector("#house").innerHTML = svg;


    // select objekt


}
