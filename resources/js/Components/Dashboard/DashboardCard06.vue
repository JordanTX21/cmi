<template>
  <div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
      <h2 class="font-semibold text-slate-800 dark:text-slate-100">Clientes</h2>
    </header>
    <!-- Chart built with Chart.js 3 -->
    <!-- Change the height attribute to adjust the chart height -->
    <DoughnutChart :data="chartData" width="389" height="260" />
  </div>
</template>

<script>
import { ref } from 'vue'
import DoughnutChart from '@/Charts/DoughnutChart.vue'

// Import utilities
import { tailwindConfig } from '@/Utils/utils'

export default {
  name: 'DashboardCard06',
  components: {
    DoughnutChart,
  },
  setup() {
    const chartData = ref({
      labels: ['Nuevos clientes', 'Clientes recurrentes', 'Clientes perdidos'],
      datasets: [
        {
          label: 'Top Clientes',
          data: [
            15, 30, 5,
          ],
          backgroundColor: [
            tailwindConfig().theme.colors.indigo[500],
            tailwindConfig().theme.colors.blue[400],
            tailwindConfig().theme.colors.indigo[800],
          ],
          hoverBackgroundColor: [
            tailwindConfig().theme.colors.indigo[600],
            tailwindConfig().theme.colors.blue[500],
            tailwindConfig().theme.colors.indigo[900],
          ],
          borderWidth: 0,
        },
      ],
    })

    return {
      chartData,
    } 
  }
}
</script>