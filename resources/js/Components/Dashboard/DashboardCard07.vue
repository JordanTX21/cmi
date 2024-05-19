<template>
  <div class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
      <h2 class="font-semibold text-slate-800 dark:text-slate-100">Tecnologías implementadas</h2>
    </header>
    <div class="p-3">

      <!-- Table -->
      <div class="overflow-x-auto">
        <table class="table-auto w-full dark:text-slate-300">
          <!-- Table header -->
          <thead class="text-xs uppercase text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50 rounded-sm">
            <tr>
              <th class="p-2">
                <div class="font-semibold text-left">Tecnología</div>
              </th>
              <th class="p-2">
                <div class="font-semibold text-center">Estado</div>
              </th>
            </tr>
          </thead>
          <!-- Table body -->
          <tbody class="text-sm font-medium divide-y divide-slate-100 dark:divide-slate-700">
            <!-- Row -->
            <tr v-for="(item,index) in tecnologias" :key="`tecnologia-${index}`">
              <td class="p-2">
                <div class="flex items-center">
                  <svg class="shrink-0 mr-2 sm:mr-3" width="36" height="36" viewBox="0 0 36 36">
                    <circle fill="#24292E" cx="18" cy="18" r="18" />
                    <path d="M18 10.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V24c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z" fill="#FFF" />
                  </svg>
                  <div class="text-slate-800 dark:text-slate-100">{{item.name}}</div>
                </div>
              </td>
              <td class="p-2">
                <div class="text-center" :class="{'text-emerald-500':item.status==='implementado','text-sky-500':item.status==='por implementar'}">{{item.status}}</div>
              </td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue';

export default {
  name: 'DashboardCard07',
  setup(){
    const tecnologias = ref([
      {
        name: 'Sistema de Gestión de Inventario',
        status: 'implementado'
      },
      {
        name: 'Sistema de Reservas en Línea',
        status: 'implementado'
      },
      {
        name: 'Sistema de Gestión de Relaciones con Clientes (CRM)',
        status: 'implementado'
      },
      {
        name: 'Chatbots y Asistentes Virtuales',
        status: 'por implementar'
      },
      {
        name: 'Aplicaciones Móviles Personalizadas',
        status: 'por implementar'
      },
    ])
    return {tecnologias};
  }
}
</script>