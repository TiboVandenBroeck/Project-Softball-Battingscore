// Google Charts-initialisatie
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Functie om de grafiek te tekenen
function drawChart() {
    // Maak een nieuwe DataTable
// Maak een nieuwe DataTable
// Maak een nieuwe DataTable
var data = new google.visualization.DataTable();
data.addColumn('string', 'Wedstrijd'); // Hier wijzigen we het type van 'date' naar 'string'
data.addColumn('number', 'AVG');
data.addColumn('number', 'OPS');
data.addColumn('number', 'SLG');
data.addColumn('number', 'OBP');

// Voeg de gegevens toe aan de DataTable
data.addRows([
    ['Heist Afterburners Thuis\n30/03/2024', 0.5, 0.75, 0.75, 1.5], // Vervang de tekst 'Wedstrijd 1' door de echte wedstrijdnaam
    ['Borgerhout Squirels Thuis\n01/04/2024', 0.5, 0.5, 0.75, 1.25],
    ['Frontliners OG Uit\n13/04/2024', 0.5, 0.5, 1, 1.5],
    ['Leuven Twins Uit\n20/04/2024', 0.714, 0.714, 1, 1.714],
    // Voeg hier meer gegevens toe
]);

// Stel de opties in voor de grafiek
var options = {
    title: 'Softball Stats',
    curveType: 'function',
    legend: { position: 'bottom' },
    series: {
        0: {color: '#FF6347', pointSize: 6, lineWidth: 2}, // Stel de grootte van de punten in op 6 en de lijnbreedte op 2
        1: {color: '#1E90FF', pointSize: 6, lineWidth: 2},
        2: {color: '#32CD32', pointSize: 6, lineWidth: 2},
        3: {color: '#FFD700', pointSize: 6, lineWidth: 2}
    },
    tooltip: { isHtml: true }, // Gebruik HTML voor tooltip
    annotations: {
        textStyle: {
            fontSize: 12,
            color: '#333'
        }
    }
};

// Maak een nieuwe LineChart en teken de grafiek
var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
chart.draw(data, options);
}
