<template>
  <div class="col-span-full xl:col-span-6 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
      <h2 class="font-semibold text-slate-800 dark:text-slate-100">Metas</h2>
    </header>
    <div class="p-3">

      <!-- Card content -->
      <!-- "Today" group -->
      <div>
        <header class="text-xs uppercase text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50 rounded-sm font-semibold p-2">Today</header>
        <ul class="my-1">
          <!-- Item -->
          <li class="flex px-2" v-for="(item,index) in metas" :key="`meta-${index}`">
            <div class="w-9 h-9 rounded-full shrink-0 bg-emerald-500 my-2 mr-3">
              <svg class="w-9 h-9 fill-current text-emerald-50" viewBox="0 0 36 36">
                <path d="M18.3 11.3l-1.4 1.4 4.3 4.3H11v2h10.2l-4.3 4.3 1.4 1.4L25 18z" />
              </svg>
            </div>
            <div class="grow flex items-center border-b border-slate-100 dark:border-slate-700 text-sm py-2">
              <div class="grow flex justify-between">
                <div class="self-center"><a class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white" :href="`#${index}`">{{item}}</a></div>
                <div class="shrink-0 self-start ml-2">
                  <span class="font-medium text-emerald-500">+99.99</span>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

    </div>
  </div>
</template>

<script>
import { ref } from 'vue';

export default {
  name: 'DashboardCard13',
  setup(){

    const metas = ref([
  'Incrementar los ingresos totales en un 15% respecto al año anterior.',
  'Mantener un margen bruto del 10% o superior.',
  'Reducir los costos operativos en un 13% mediante eficiencias operativas.',
  'Lograr un beneficio neto de al menos 20000 dólares.',
  'Alcanzar un índice de satisfacción del cliente de al menos 9 sobre 10',
  'Incrementar la lealtad del cliente en un 15% respecto al año anterior.',
  'Atraer un 20% más de clientes nuevos en comparación con el período anterior.',
  'Reducir las quejas/reclamaciones en un 15% mediante mejoras en el servicio.',
  'Mantener una tasa de ocupación promedio del 73% o superior.',
  'Reducir el tiempo de respuesta a consultas de clientes a 1 horas o menos.',
  'Lograr una tasa de rotación de personal no superior al 15%.',
  'Mejorar la calidad de los servicios turísticos según los estándares establecidos.',
  'Tasa de ocupación de los servicios turísticos.',
  'Tiempo promedio de respuesta a consultas.',
  'Tasa de rotación de personal.',
  'Evaluación de calidad de servicios (puntuación interna o externa).',
])

return {metas}

  }
}
</script>