// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: dataKriteriaNama,
    datasets: [{
      data: dataKriteriaBobot,
      backgroundColor: ["#F7B7A3", "#EA5F89", "#9B3192", "#57167E", "#2B0B3F"], // Menggunakan warna yang diinginkan
      borderColor: "#fff", // Set warna border 
      borderWidth: 2, // Set lebar border
    }],
  },
  options: {
    legend: {
      display: true,
      position: 'right', // Menampilkan legenda di sebelah kanan
    },
    tooltips: {
      callbacks: {
        label: function (tooltipItem, data) {
          return data.labels[tooltipItem.index] + ': ' + data.datasets[0].data[tooltipItem.index];
        }
      }
    }
  }
});
