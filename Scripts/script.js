document.addEventListener('DOMContentLoaded', function() {
    let text = document.lastModified;
    document.getElementById("updatedtime").innerHTML = text;
});
//NOG EEN SEARCHBAR TOEVOEGEN
/*var gridContainer = document.getElementById('grid-container');
        var gridItems = Array.from(gridContainer.getElementsByClassName('grid-item'));

        gridItems.sort(function(a, b) {
            var nameA = a.querySelector('button').innerText.toUpperCase();
            var nameB = b.querySelector('button').innerText.toUpperCase();
            if (nameA < nameB) {
                return -1;
            }
            if (nameA > nameB) {
                return 1;
            }
            return 0;
        });

        gridItems.forEach(function(item) {
            gridContainer.appendChild(item);
        });*/