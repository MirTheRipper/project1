
<div id="container" style="min-width: 750px; height: 600px; max-width: 800px; margin: 0 auto"></div>

<head>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
</head>

<script>
	Highcharts.chart('container', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'ข้อมูลฐานความผิด'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
        style: {
          color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
        }
      }
    }
  },
  series: [{
    name: 'Brands',
    colorByPoint: true,
    data: [{
      name: 'สูบบุหรี่',
      y: 61.41,
      sliced: true,
      selected: true
    }, {
      name: 'ทะเลาะวิวาท',
      y: 11.84
    }, {
      name: 'ลักขโมย',
      y: 10.85
    }, {
      name: 'นำสุราเข้าสู่บริเวณมหาวิยาลัย',
      y: 4.67
    }, {
      name: 'เสพยาเสพติด',
      y: 4.18
    }, {
      name: 'ทำร้ายร่างกายโดยใช่อาวุธ',
      y: 1.64
    }, {
      name: 'มีของผิดกฏหมายครอบครอง',
      y: 1.6
    }, {
      name: 'เล่นการพนัน',
      y: 1.2
    }, {
      name: 'ผิด พรบ คอมพิวเตอร์',
      y: 2.61
    }]
  }]
});
</script>
