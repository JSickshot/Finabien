        let paginaActual = 0;
        mostrarPagina(paginaActual);

        function cambiarPagina(n) {
            mostrarPagina(paginaActual += n);
        }

        function mostrarPagina(n) {
            const paginas = document.querySelectorAll(".page");
            if (n >= paginas.length) {
                paginaActual = paginas.length - 1;
            }
            if (n < 0) {
                paginaActual = 0;
            }
            for (let i = 0; i < paginas.length; i++) {
                paginas[i].style.display = "none";
            }
            paginas[paginaActual].style.display = "block";
            if (paginaActual === 0) {
                document.getElementById("prevBtn").disabled = true;
            } else {
                document.getElementById("prevBtn").disabled = false;
            }
            if (paginaActual === paginas.length - 1) {
                document.getElementById("nextBtn").disabled = true;
            } else {
                document.getElementById("nextBtn").disabled = false;
            }
        }
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
        
    
