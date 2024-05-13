//maakt gebruik van google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

var data = new google.visualization.DataTable();
data.addColumn('string', 'Wedstrijd');
data.addColumn('number', 'AVG');
data.addColumn('number', 'OBP');
data.addColumn('number', 'SLG');
data.addColumn('number', 'OPS');

//rijen toevoegen aan de grafiek
data.addRows([
    ['Heist Afterburners Thuis\n30/03/2024', 0.666, 0.666, 0.833, 1.5],
    ['Borgerhout Squirels Thuis\n01/04/2024', 0.333, 0.333, 0.333, 0.666],
    ['Frontliners OG Uit\n13/04/2024', 0.333, 0.333, 0.333, 0.666],
    ['Leuven Twins Uit\n20/04/2024', 0.25, 0.4, 0.25, 0.65],
]);

//titel + eigenschappen lijnen
var options = {
    title: 'Batting Stats Adhemar Couwet',
    curveType: 'function',
    legend: { position: 'bottom' },
    series: {
        0: {color: '#FF6347', pointSize: 6, lineWidth: 2},
        1: {color: '#1E90FF', pointSize: 6, lineWidth: 2},
        2: {color: '#32CD32', pointSize: 6, lineWidth: 2},
        3: {color: '#FFD700', pointSize: 6, lineWidth: 2}
    },
    tooltip: { isHtml: true },
    annotations: {
        textStyle: {
            fontSize: 12,
            color: '#333'
        }
    }
};

//LineChart als grafiek type
var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
chart.draw(data, options);
}
