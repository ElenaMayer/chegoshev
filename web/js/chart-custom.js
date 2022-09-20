var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};

var birthday = getUrlParameter('birthday');
var year = function() {
    year = getUrlParameter('year');
    if(!year){
        return 0;
    }
    return year;
};

var presets = window.chartColors;
var utils = Samples.utils;

var options = {
    maintainAspectRatio: false,
    spanGaps: false,
    elements: {
        line: {
            tension: 0.000001
        }
    },
    plugins: {
        filler: {
            propagate: false
        }
    },
    scales: {
        yAxes: [{
            ticks: {
                min: 0,
                max: 10
            },
            gridLines: {
                display: false
            }
        }]
    }
};

$.ajax({
    type: 'POST',
    url: '/ajax/get-life-force-chart-data',
    data: {
        'birthday': birthday,
    },
}).done(function(data) {
    createLifeForceChart(data);
});

function createLifeForceChart(data){
    data = $.parseJSON(data);
    new Chart('chart-0', {
        type: 'line',
        data: {
            labels: data['labels'],
            datasets: [{
                backgroundColor: utils.transparentize(presets.green),
                borderColor: presets.green,
                data: data['data'],
                label: 'График Жизненных сил',
                fill: false
            }]
        },
        options: utils.merge(options, {
            // title: {
            // text: 'График Жизненных сил',
            // display: true
            // }
        })
    });
}

$.ajax({
    type: 'POST',
    url: '/ajax/get-annual-life-force-chart-data',
    data: {
        'birthday': birthday,
        'year': year,
    },
}).done(function(data) {
    createAnnualLifeForceChart(data);
});

function createAnnualLifeForceChart(data){
    data = $.parseJSON(data);

    var config = {
        type: 'line',
        data: {
            labels: data['labels'],
            datasets: [{
                label: "Годовой график Жизненых сил",
                backgroundColor: window.chartColors.orange,
                borderColor: window.chartColors.orange,
                data: data['data'],
                fill: false,
                tension: 0.000001
            }]
        },
        options: {
            responsive: true,
            scales: {
                xAxes: [{
                    display: true
                }],
                yAxes: [{
                    display: true,
                    ticks: {
                        min: 0,
                        max: 10
                    },
                }]
            }
        }
    };

    window.myLine = new Chart('chart-1', config);
}

$.ajax({
    type: 'POST',
    url: '/ajax/get-fate-and-will-chart-data',
    data: {
        'birthday': getUrlParameter('birthday'),
    },
}).done(function(data) {
    createFateAndWillChart(data);
});

function createFateAndWillChart(data){
    data = $.parseJSON(data);

    var config = {
        type: 'line',
        data: {
            labels: data['labels'],
            datasets: [{
                label: "График Судьбы",
                backgroundColor: window.chartColors.red,
                borderColor: window.chartColors.red,
                data: data['data']['fate'],
                fill: false,
                tension: 0.000001
            }, {
                label: "График Воли",
                backgroundColor: window.chartColors.blue,
                borderColor: window.chartColors.blue,
                data: data['data']['will'],
                fill: false,
                tension: 0.000001
            }]
        },
        options: {
            responsive: true,
            scales: {
                xAxes: [{
                    display: true
                }],
                yAxes: [{
                    display: true,
                    ticks: {
                        min: 0,
                        max: 10
                    },
                }]
            }
        }
    };

    window.myLine = new Chart('chart-2', config);
}

$('.js-table-fill td').each(function () {
    if($(this).text() == '-'){
        $(this).css('background-color', 'rgb(255,203,152)');
    } else {
        $(this).css('background-color', 'rgb(140,193,229)');
    }
});

// Define a plugin to provide data labels
// Chart.plugins.register({
//     afterDatasetsDraw: function(chart, easing) {
//         // To only draw at the end of animation, check for easing === 1
//         var ctx = document.getElementById("chart-0").getContext("2d");
//
//         chart.data.datasets.forEach(function (dataset, i) {
//             var meta = chart.getDatasetMeta(i);
//             if (!meta.hidden) {
//                 meta.data.forEach(function(element, index) {
//                     // Draw the text in black, with the specified font
//                     ctx.fillStyle = 'rgb(0, 0, 0)';
//
//                     var fontSize = 16;
//                     var fontStyle = 'normal';
//                     var fontFamily = 'Helvetica Neue';
//                     ctx.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);
//
//                     // Just naively convert to string for now
//                     var dataString = dataset.data[index].toString();
//
//                     // Make sure alignment settings are correct
//                     ctx.textAlign = 'center';
//                     ctx.textBaseline = 'middle';
//
//                     var padding = 5;
//                     var position = element.tooltipPosition();
//                     ctx.fillText(dataString, position.x, position.y - (fontSize / 2) - padding);
//                 });
//             }
//         });
//     }
// });