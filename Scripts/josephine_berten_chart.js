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
    ['Heist Afterburners Thuis\n30/03/2024', 0.666, 0.666, 1.333, 2],
    ['Borgerhout Squirels Thuis\n01/04/2024', 0.142, 0.142, 0.142, 0.285],
    ['Frontliners OG Uit\n13/04/2024', 0.444, 0.444, 0.555, 1],
    ['Leuven Twins Uit\n20/04/2024', 0.666, 0.777, 0.777, 1.555],
]);

var options = {
    title: 'Batting Stats Josephine Berten',
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
