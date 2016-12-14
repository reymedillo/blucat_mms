//chart with points
if ($("#sincos").length) {
    var sin = [], cos = [];

    for (var i = 1; i < 13; i += 1) {
        sin.push([i, Math.sin(i) / i]);
        cos.push([i, Math.cos(i)]);
    }

    var plot = $.plot($("#sincos"),
        [
            { data: sin, label: "sales(PhP)"},
            { data: cos, label: "profit(PhP)" }
        ], {
            series: {
                lines: { show: true  },
                points: { show: true }
            },
            grid: { hoverable: true, clickable: true, backgroundColor: { colors: ["#fff", "#eee"] } },
//            yaxis: { min: -1.2, max: 1.2 },
            colors: ["#539F2E", "#3C67A5"]
        });

    function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css({
            position: 'absolute',
            display: 'none',
            top: y + 5,
            left: x + 5,
            border: '1px solid #fdd',
            padding: '2px',
            'background-color': '#dfeffc',
            opacity: 0.80
        }).appendTo("body").fadeIn(200);
    }

    var previousPoint = null;
    $("#sincos").bind("plothover", function (event, pos, item) {
        $("#x").text(pos.x.toFixed(0));
        $("#y").text(pos.y.toFixed(2));

        if (item) {
            if (previousPoint != item.dataIndex) {
                previousPoint = item.dataIndex;

                $("#tooltip").remove();
                var x = item.datapoint[0].toFixed(0),
                    y = item.datapoint[1].toFixed(2);

                showTooltip(item.pageX, item.pageY,
                    item.series.label + " of " + x + " is " + y);
            }
        }
        else {
            $("#tooltip").remove();
            previousPoint = null;
        }
    });


    $("#sincos").bind("plotclick", function (event, pos, item) {
        if (item) {
            $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
            plot.highlight(item.series, item.datapoint);
        }
    });
}