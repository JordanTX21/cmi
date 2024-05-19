<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import DashboardCard01 from '@/Components/Dashboard/DashboardCard01.vue'
import DashboardCard02 from '@/Components/Dashboard/DashboardCard02.vue'
import DashboardCard03 from '@/Components/Dashboard/DashboardCard03.vue'
import DashboardCard04 from '@/Components/Dashboard/DashboardCard04.vue'
import DashboardCard05 from '@/Components/Dashboard/DashboardCard05.vue'
import DashboardCard06 from '@/Components/Dashboard/DashboardCard06.vue'
import DashboardCard07 from '@/Components/Dashboard/DashboardCard07.vue'
import DashboardCard08 from '@/Components/Dashboard/DashboardCard08.vue'
import DashboardCard09 from '@/Components/Dashboard/DashboardCard09.vue'
import DashboardCard10 from '@/Components/Dashboard/DashboardCard10.vue'
import DashboardCard11 from '@/Components/Dashboard/DashboardCard11.vue'
import DashboardCard12 from '@/Components/Dashboard/DashboardCard12.vue'
import DashboardCard13 from '@/Components/Dashboard/DashboardCard13.vue'

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                    <!-- Cards -->
                    <div class="grid grid-cols-12 gap-6">

                        <!-- Line chart (Acme Plus) -->
                        <DashboardCard01 />
                        <!-- Line chart (Acme Advanced) -->
                        <DashboardCard02 />
                        <!-- Line chart (Acme Professional) -->
                        <DashboardCard03 />
                        <!-- Bar chart (Direct vs Indirect) -->
                        <DashboardCard04 />
                        <!-- Line chart (Real Time Value) -->
                        <DashboardCard05 />
                        <!-- Doughnut chart (Top Countries) -->
                        <DashboardCard06 />
                        <!-- Table (Top Channels) -->
                        <DashboardCard07 />
                        <!-- Line chart (Sales Over Time) -->
                        <!-- <DashboardCard08 /> -->
                        <!-- Stacked bar chart (Sales VS Refunds) -->
                        <!-- <DashboardCard09 /> -->
                        <!-- Card (Customers)  -->
                        <DashboardCard10 />
                        <!-- Card (Reasons for Refunds)   -->
                        <DashboardCard11 />
                        <!-- Card (Recent Activity) -->
                        <DashboardCard12 />
                        <!-- Card (Income/Expenses) -->
                        <DashboardCard13 />

                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
