var data = [
  // Date, Grade without P.E., Grade with P.E, lower diff, upper diff, star, label
//Grundschule
//  ['1999-07-28', undefined, undefined, undefined, undefined, undefined, "Grundschule"]
  ['2000-01-28', 2.444444444, 2.500000000, -1/3, +1/3]
, ['2000-07-19', 2.666666667, 2.636363636, -1/3, +1/3, true]
//Beobachtungsstufe
//, ['2000-09-19', undefined, undefined, undefined, undefined, undefined, "Realschule"]
, ['2001-02-01', 2.888888889, 2.800000000, -1/3, +1/3]
, ['2001-07-18', 2.666666667, 2.700000000, -1/3, +1/3]
, ['2002-01-31', 2.888888889, 2.900000000, -1/3, +1/3]
, ['2002-07-03', 2.900000000, 2.909090909, -1/3, +1/3]
//Realschule
, ['2003-01-30', 3.444444444, 3.400000000, -1/3, +1/3]
, ['2003-07-02', 3.000000000, 3.000000000, -1/3, +1/3]
, ['2004-01-29', 3.545454545, 3.500000000, -1/3, +1/3]
, ['2004-06-23', 3.363636364, 3.416666667, -1/3, +1/3]
, ['2005-01-28', 2.818181818, 2.833333333, -1/3, +1/3]
, ['2005-06-29', 2.636363636, 2.666666667, -1/3, +1/3]
, ['2006-02-02', 2.583333333, 2.692307692, -1/3, +1/3]
, ['2006-06-23', 2.500000000, 2.538461538, -1/3, +1/3, true]
//TAI
//, ['2006-08-23', undefined, undefined, undefined, undefined, undefined, "TAI"]
, ['2007-01-24', 1.714285714, 1.875000000, -1/3, +1/3]
, ['2007-07-02', 1.875000000, 2.000000000, -1/3, +1/3]
, ['2008-01-23', 1.571428571, 1.750000000, -1/3, +1/3]
, ['2008-06-30', 2.000000000, 2.111111111, -1/3, +1/3, true]
//FOS
//, ['2008-08-30', undefined, undefined, undefined, undefined, undefined, "FOS"]
, ['2009-01-27', 1.875000000, 2.111111111, -1/3, +1/3]
, ['2009-06-29', 1.625000000, 1.888888889, -1/3, +1/3, true]
//BAI
//, ['2009-08-29', undefined, undefined, undefined, undefined, undefined, "BAI"]
, ['2010-02-28', 1.366666667, undefined, -0.567924528, +2.136477987]
, ['2010-08-31', 1.383333333, undefined, -0.446226415, +1.629245283]
, ['2011-02-28', 1.388888889, undefined, -0.313417191, +1.133123690]
, ['2011-08-31', 1.359649123, undefined, -0.196127110, +0.747269116]
, ['2012-02-29', 1.265151515, undefined, -0.101629503, +0.464408233]
, ['2012-08-31', 1.256944444, undefined, -0.055686583, +0.258778826]
, ['2013-02-28', 1.256944444, undefined, -0.055686583, +0.258778826, true]
//BMS
//, ['2013-04-28', undefined, undefined, undefined, undefined, undefined, "BMS"]
, ['2013-08-31', 1.166666667, undefined, -0.126666667, +2.153333333]
, ['2014-02-28', 1.416666667, undefined, -0.216666667, +1.343333333]
, ['2014-08-31', 1.333333333, undefined, -0.127333333, +1.012666667]
, ['2015-02-28', 1.271052632, undefined, -0.065052632, +0.654947368, true]
];

var drawChart;

function datum(str){
    //var str = '2008-12-20';
    date = str.split('-');
    return new Date(date[0], date[1]-1, date[2]);
}

function round(x){
    return Math.round(x * 1000) / 1000;
}

function createChart(){
    //Visualization Data Table
    grades = new google.visualization.DataTable();

    //Visualization Style
    grades_opt = {
          hAxis:{
                minValue: datum('1999-07-28'), maxValue: datum('2015-08-28'), gridlines:{count: 16}
              , titleTextStyle: {italic: false, bold: true}
              , slantedText: true, slantedTextAngle: 90 //rotate text
          }
        , vAxis:{
              minValue: 0.5, maxValue: 4.0, gridlines:{count: 8, color:'#888'}
            , titleTextStyle: {italic: false, bold: true}
          }
        , legend:'none', backgroundColor:'none'
        , chartArea:{left:'8%', top:'3%', width:'92%', height:'80%'}, pointSize: 5
        , intervals: {style: 'bars', barWidth: 0.1} // error bars
        , colors: ['#f00', '#0c0', '#0ff', '#f0f'] // line colors
        , focusTarget: 'category' // all values in one tooltip
        //, annotations: { style: 'line', textStyle: { color:'#f00' }, boxStyle: { stroke: '#f00', strokeWidth: 1 } }
        , interpolateNulls: true // no gap on missing data points
    };

    //Axis names and types
    if(lang == 'de'){
        grades_opt.hAxis.title = 'Zeit';
        grades.addColumn('date', 'Zeit');
        grades_opt.vAxis.title = 'Notendurchschnitt';
        //grades.addColumn({type:'string', role:'annotation'});
        //grades.addColumn({type:'string', role:'tooltip'});
        grades.addColumn('number', 'Notendurchschnitt mit Sport');
        grades.addColumn({type:'string', role:'style'});
        grades.addColumn('number', 'Notendurchschnitt ohne Sport');
    } else {
        grades_opt.hAxis.title = 'Time';
        grades.addColumn('date', 'Time');
        grades_opt.vAxis.title = 'Average Grade';
        //grades.addColumn({type:'string', role:'annotation'});
        //grades.addColumn({type:'string', role:'tooltip'});
        grades.addColumn('number', 'Average grade with P.E.');
        grades.addColumn({type:'string', role:'style'});
        grades.addColumn('number', 'Average grade without P.E.');
    }

    grades.addColumn({type:'number', role:'interval'});
    grades.addColumn({type:'number', role:'interval'});
    grades.addColumn({type:'string', role:'style'});

    if(lang != 'de'){
        grades.addColumn('number', 'GPA 4.0 without P.E.');
        grades.addColumn({type:'string', role:'style'});
        grades.addColumn('number', 'GPA 5.0 without P.E.');
        grades.addColumn({type:'string', role:'style'});
        grades_opt.vAxis.maxValue = 5.0;
        grades_opt.vAxis.gridlines.count = 10;
    }

    //fill table with data
    for(i=0; i < data.length; i++){
        x = datum(data[i][0]);
        y1 = data[i][1]; // without P.E.
        y2 = data[i][2]; // with P.E.

        min = round(y1 + data[i][3]);
        max = round(y1 + data[i][4]);

        style = undefined;
        if(data[i][5]) style = 'point{ size: 10; shape-type: star; dent: 0.5; stroke-color: black; stroke-color: black; stroke-width: 2;}';

        /*
        ann = data[i][6];
        tool = undefined;
        if(ann != undefined) tool = ann;
        */

        if(lang == 'de'){
            grades.addRow([x, /*ann, tool,*/ round(y2), style, round(y1), min, max, style]);
        } else {
            gpa4 = 5.0 - y1;
            gpa5 = 5.0 * gpa4 / 4.0;
            grades.addRow([x, /*ann, tool,*/ round(y2), style, round(y1), min, max, style, round(gpa4), style, round(gpa5), style]);
        }
    }

    //date format
    new google.visualization.DateFormat({pattern: "yyyy-MM-dd"}).format(grades, 0);

    //visualize
    visual = new google.visualization.LineChart(document.getElementById('grades'));

    drawChart = function(){
        visual.draw(grades,grades_opt);
        //var a = document.querySelector("svg > g:nth-of-type(1) > g:nth-of-type(4)");
        //for(var i=0; i < a.length; i++){
        //    a.setAttribute("transform", "translate(0, 120)");
        //}
    };

    window.onresize = drawChart;
};
