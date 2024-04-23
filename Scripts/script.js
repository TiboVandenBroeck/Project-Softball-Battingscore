document.addEventListener('DOMContentLoaded', function() {
    let text = document.lastModified;
    document.getElementById("updatedtime").innerHTML = text;
});
//NOG EEN SEARCHBAR TOEVOEGEN
/*const searchInput = document.getElementById('search');
// Controleer eerst of de variabele al bestaat
if (!searchInput) {
    const searchInput = document.getElementById('search');

    // Voeg een eventlistener toe voor het 'input' event
    searchInput.addEventListener('input', function() {
        // Haal de ingevoerde zoekterm op
        const searchTerm = this.value.toLowerCase();

        // Selecteer alle grid-items
        const gridItems = document.querySelectorAll('.grid-item');

        // Loop door elke grid-item en verberg of toon deze op basis van de zoekterm
        gridItems.forEach(function(gridItem) {
            const personName = gridItem.querySelector('.p').textContent.toLowerCase();

            // Controleer of de naam van de persoon overeenkomt met de zoekterm
            if (personName.includes(searchTerm)) {
                gridItem.style.display = 'block'; // Toon de grid-item
            } else {
                gridItem.style.display = 'none'; // Verberg de grid-item
            }
        });
    });
}*/
//SEARCHBAR TOEVOEGEN