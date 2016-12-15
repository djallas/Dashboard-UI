google.charts.load('current', {'packages':['corechart']});
	/* Draw Line Chart, for Post and Impression Views */
	google.charts.setOnLoadCallback(DrawChartForImpression);
    function DrawChartForImpression() {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'Pages', 'Impression'],
          ['1',  32000,      39525],
          ['2',  31000,      69525],
          ['3',  32000,      39525],
          ['4',  32000,      49525],
          ['5',  32000,      39525],
          ['6',  32000,      89525],
          ['7',  34000,      79525],
          ['8',  22000,      79525],
          ['9',  32000,      69525],
          ['10',  31000,      79525],
          ['11',  12000,      79525],
          ['12',  31000,      79525],
          ['13',  32500,      39525],
          ['14',  42000,      129525],
          ['15',  12000,      49525],
          ['16',  32500,      79525],
          ['17',  52000,      29525],
          ['18',  32000,      69525],
          ['19',  12000,      59525],
          ['20',  32000,      49525],
          ['21',  31000,      59525],
          ['22',  1000,      79525],
          ['23',  32500,      29525],
          ['24',  22400,      59525],
          ['25',  32000,      79525],
          ['26',  32000,      69525],
          ['27',  12000,      49525],
          ['28',  32000,      79525],
          ['29',  42000,      99525],
        ]);
        var options = {
          curveType: 'function',
          legend: { position: 'right' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
    }	
	
	/* Draw Chart, Views Per Authors */
	google.charts.setOnLoadCallback(DrawChartForViewsByAuthors);
    function DrawChartForViewsByAuthors() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
			['Week', 'Selemani', 'Gedeon', 'Emmy', 'Vanessa', 'Christophe', 'Sadam'],
			['1-7/12',  165,      938,         522,             998,           450,      614.6],
			['8-14/12',  135,      1120,        599,             1268,          288,      682],
			['15-21/12',  136,      691,         629,             1026,          366,      569.6]

		]);
		var options = {
		  vAxis: {title: 'Cups'},
		  hAxis: {title: 'Month'},
		  seriesType: 'bars',
		  series: {5: {type: 'line'}}
		};
		var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
		chart.draw(data, options);
	}
	
	/* Draw Chart, Number of written articles Per Authors */
	google.charts.setOnLoadCallback(DrawChartForNumberByAuthors);
    function DrawChartForNumberByAuthors() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
			['Week', 'Selemani', 'Gedeon', 'Emmy', 'Vanessa', 'Christophe', 'Sadam'],
			['11/12',  165,      938,         522,             998,           450,      614.6],
			['12/12',  135,      1120,        599,             18,          288,      682],
			['13/12',  136,      691,         629,             1026,          366,      569.6]

		]);
		var options = {
		  vAxis: {title: 'Cups'},
		  hAxis: {title: 'Month'},
		  seriesType: 'bars',
		  series: {5: {type: 'line'}},
		};
		var chart = new google.visualization.ComboChart(document.getElementById('ChartPerNumber'));
		chart.draw(data, options);
	}
	
	/* Draw New Chart Category */
	google.charts.setOnLoadCallback(drawChartCategory);
		function drawChartCategory() {
		  var data = google.visualization.arrayToDataTable([
			['Category', 'Views today',{ role: "style" }],
			['Entertainment', 26854, "#b0bec5"],
			['Sport', 18456, "#90a4ae"],
			['Love', 10987, "#b0bec5"],
			['Cinema', 9801, "#90a4ae"],
			['Busincess', 4212, "#b0bec5"],
			['Tech', 15426, "#90a4ae"]
		  ]);

		  var view = new google.visualization.DataView(data);
		  view.setColumns([0, 1,
			{ calc: "stringify",
				sourceColumn: 1,
				type: "string",
				role: "annotation" },
			2]);

		  var options = {
			width: 250,
			height:300,
			top:25,
			bar: {groupWidth: "95%"},
			legend: { position: "none" },
		  };
		  var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
		  chart.draw(view, options);
	  }