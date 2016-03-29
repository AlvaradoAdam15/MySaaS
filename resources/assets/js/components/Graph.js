import Chart from 'chart.js';

export default{
    template: '<canvas style="height: 226px; width: 508px;" width="508" height="226"></canvas>',

    props: ['id', 'labels', 'values'],

        ready(){
            //alert ("Hola soc Graph");

            var ctx = this.$el.getContext("2d");
            var data = {
                labels: this.labels,
            datasets: [{
                data: this.values,
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