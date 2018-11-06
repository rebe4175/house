document.addEventListener("DOMContentLoaded", function () {
    svgProgram();
});

async function svgProgram() {

    let selected;
    let selectedID;
    let color;
    let active;


    // load svg

    let mySvg = await fetch("husigen.svg");
    let svg = await mySvg.text();


    document.querySelector("#house").innerHTML = svg;


    // select objekt

    document.querySelector("#house").addEventListener("click", clicked);

    function clicked() {
        console.log(event.target);

        selected = event.target;

        selectedID = selected.getAttribute("id");

        color = selected.getAttribute("fill");

        document.querySelector("#" + selectedID).setAttribute("fill", "#d3072A");
    }

};
