import Chart from 'chart.js';

export default{
    template: '<canvas style="height: 226px; width: 508px;" width="508" height="226"></canvas>',

    props: {
        labels: {},
        values: {},
        color: {
            default: 'rgba(120,220,220,0.5)'
        }
    },

        ready(){
            //alert ("Hola soc Graph");

            var ctx = this.$el.getContext("2d");
            var data = {
                labels: this.labels,
            datasets: [{
                data: this.values,
            label: "Daily Sales",
                fillColor: this.color,
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