document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("ratingForm");
    
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        
        const formData = new FormData(form);
        const results = {};
        
        for (const [key, value] of formData.entries()) {
            if (results[key]) {
                results[key].push(value);
            } else {
                results[key] = [value];
            }
        }
        
       
    });
});


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

function calcularPuntuacion() {
    
    var puntuacion = 0;
    puntuacion += parseInt(document.querySelector('input[name="prueba1"]:checked').value);
    puntuacion += parseInt(document.querySelector('input[name="prueba2"]:checked').value);
    // Repite este proceso para todas las preguntas

    
    document.getElementById('puntuacion_total').value = puntuacion;

    
    document.querySelector('form').submit();
}