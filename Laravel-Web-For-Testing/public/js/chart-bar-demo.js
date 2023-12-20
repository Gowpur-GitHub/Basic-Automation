// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

let nilaiMaxY = 1 / dataNilaiV.length + 0.1;

// Palet warna yang diinginkan
const colorPalette = ["#2e2b28", "#3b3734", "#474440", "#54504c", "#6b506b", "#ab3da9", "#de25da", "#eb44e8", "#ff80ff", "#ff99ff"] ;


// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: dataNamaAlternatif,
    datasets: [{
      label: "Nilai V",
      backgroundColor: colorPalette,
      borderColor: colorPalette,
      data: dataNilaiV,
    }],    
    
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'monitor'
        },
        gridLines: {
          color: "#27374D", // Warna garis di belakang batang pada sumbu x
          display: true
        },
        ticks: {
          maxTicksLimit: dataNamaAlternatif.length
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: nilaiMaxY,
          maxTicksLimit: dataNilaiV.length + 1
        },
        gridLines: {
          color: "#27374D", // Warna garis di belakang batang pada sumbu y
          display: true
        }
      }],
    },
    legend: {
      display: true
    }
  }
});
