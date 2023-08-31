function ocultas() {
    var select = document.getElementById("tecnico");
    var preguntasNombreDiv = document.getElementById("preguntas-nombre");
    var nombreLabel = document.querySelector(".nombre-label");
    var nombreInput = document.getElementById("nombre");
    var otrasPreguntas = document.querySelector(".otras-preguntas");

    if (select.value === "si") {
        preguntasNombreDiv.style.display = "block";
        nombreLabel.style.display = "block";
        nombreInput.style.display = "block";
        otrasPreguntas.style.display = "block";
    } else {
        preguntasNombreDiv.style.display = "none";
        nombreLabel.style.display = "none";
        nombreInput.style.display = "none";
        otrasPreguntas.style.display = "block";  
    }
}

var selectTecnico = document.getElementById("tecnico");
selectTecnico.addEventListener("change", ocultas);

ocultas();

const paginacionLinks = document.querySelectorAll('.paginacion a');

paginacionLinks.forEach(link => {
    link.addEventListener('click', e => {
        if (link.classList.contains('inactive')) {
            e.preventDefault();
        } else {
            const nextPage = link.getAttribute('href');
            window.location.href = nextPage;
        }
    });
});
