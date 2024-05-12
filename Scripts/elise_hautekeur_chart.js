google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

var data = new google.visualization.DataTable();
data.addColumn('string', 'Wedstrijd');
data.addColumn('number', 'AVG');
data.addColumn('number', 'OBP');
data.addColumn('number', 'SLG');
data.addColumn('number', 'OPS');

data.addRows([
    ['Heist Afterburners Thuis\n30/03/2024', 0.333, 0.333, 0.333, 0.666],
    ['Borgerhout Squirels Thuis\n01/04/2024', 0.4, 0.5, 0.4, 0.9],
    ['Frontliners OG Uit\n13/04/2024', 0.333, 0.333, 0.333, 0.666],
    ['Leuven Twins Uit\n20/04/2024', 0.363, 0.363, 0.454, 0.818],
]);

var options = {
    title: 'Softball Stats',
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

var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
chart.draw(data, options);
}
