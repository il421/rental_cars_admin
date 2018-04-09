'use strict';

(function () {

  var loadGraph = function (title, element, php) {
    var xhr = new XMLHttpRequest();

    xhr.addEventListener('load', function () {
      var data = JSON.parse(this.responseText);
      var layout = {
        'title': title,
        'paper_bgcolor': '#D8C3A5',
        'plot_bgcolor': '#D8C3A5',
        'margin': {
          'l': 130,
          'r': 50
        }
      };
      Plotly.newPlot(element, data, layout, {displayModeBar: false});
    });

    xhr.open('GET', php);
    xhr.send();
  };

  for (var i = 1; i <= 3; i++) {
    var chartTitles = ['Rented cars', 'Available cars', 'Registered customers']
    loadGraph(chartTitles[i - 1], 'graph_' + i, 'server_files/plotly.' + i + '.php');
  }
})()
