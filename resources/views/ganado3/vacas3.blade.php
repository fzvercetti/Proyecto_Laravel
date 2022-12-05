<body>

</body>
<div>
<style>
    *{
      background-color: rgb(239, 254, 255);
      margin: 30px;
      padding: 0px;
      height: 1500px;
    }
  </style>
    <canvas id="myChart">
    </canvas>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <script>
    const ctx = document.getElementById('myChart');
  
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['calificacion','ventas','ganado','',],
        datasets: [{
          label: 'ANGUS mexicana',
          data: [10, 20,45,],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
    
  
  </script>
</div>