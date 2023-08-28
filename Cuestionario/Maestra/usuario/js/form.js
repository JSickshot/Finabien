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
