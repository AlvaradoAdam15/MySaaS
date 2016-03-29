import Chart from 'chart.js';

export default{
    template: '<canvas id="barChartDailySales" style="height: 226px; width: 508px;" width="508" height="226"></canvas>',

        ready(){
            //alert ("Hola soc Graph");

            var ctx = document.getElementById("barChartDailySales").getContext("2d");
            var data = {
                labels: ["day1", "day2", "day3"],
            datasets: [{
                data: [65,45,15],
            label: "Daily Sales",
                fillColor: "rgba(220,220,220,0, 5)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)"

            }]
            }

            var myBarChart = new Chart(ctx).Bar(data);
        }

}