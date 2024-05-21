<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'System User',
            'email' => 'system@system.com',
            'password' => Hash::make('system'),
        ]);

        \App\Models\Perspective::insert([
            ["name" => "Perspectiva Financiera"],
            ["name" => "Perspectiva Cliente"],
            ["name" => "Perspectiva Procesos"],
            ["name" => "Perspectiva Factor Humano"],
        ]);

        \App\Models\Objective::insert([
            ["name" => 'Aumentar los ingresos', "id_perspective" => 1],
            ["name" => 'Mejorar la calificación de clientes', "id_perspective" => 2],
            ["name" => 'Brindar más canales de venta', "id_perspective" => 3],
            ["name" => 'Potenciar habilidades de ventas', "id_perspective" => 4],
        ]);

        \App\Models\Goal::insert([
            ["name" => 'Incrementar los ingresos totales en un 15% respecto al año anterior.', "id_perspective" => 1],
            ["name" => 'Mantener un margen bruto del 10% o superior.', "id_perspective" => 1],
            ["name" => 'Reducir los costos operativos en un 13% mediante eficiencias operativas.', "id_perspective" => 1],
            ["name" => 'Lograr un beneficio neto de al menos 20000 dólares.', "id_perspective" => 1],
            ["name" => 'Alcanzar un índice de satisfacción del cliente de al menos 9 sobre 10', "id_perspective" => 2],
            ["name" => 'Incrementar la lealtad del cliente en un 15% respecto al año anterior.', "id_perspective" => 2],
            ["name" => 'Atraer un 20% más de clientes nuevos en comparación con el período anterior.', "id_perspective" => 2],
            ["name" => 'Reducir las quejas/reclamaciones en un 15% mediante mejoras en el servicio.', "id_perspective" => 2],
            ["name" => 'Mantener una tasa de ocupación promedio del 73% o superior.', "id_perspective" => 3],
            ["name" => 'Reducir el tiempo de respuesta a consultas de clientes a 1 horas o menos.', "id_perspective" => 3],
            ["name" => 'Lograr una tasa de rotación de personal no superior al 15%.', "id_perspective" => 3],
            ["name" => 'Mejorar la calidad de los servicios turísticos según los estándares establecidos.', "id_perspective" => 3],
            ["name" => 'Tasa de ocupación de los servicios turísticos.', "id_perspective" => 4],
            ["name" => 'Tiempo promedio de respuesta a consultas.', "id_perspective" => 4],
            ["name" => 'Tasa de rotación de personal.', "id_perspective" => 4],
            ["name" => 'Evaluación de calidad de servicios (puntuación interna o externa).', "id_perspective" => 4],
        ]);

        \App\Models\Initiative::insert([
            ["name" => 'Nuevas políticas para los clientes', "id_perspective" => 1],
            ["name" => 'Ofrecer nuevos productos con ofertas', "id_perspective" => 2],
            ["name" => 'Crear tiendas en línea', "id_perspective" => 3],
            ["name" => 'Pagar cursos de capacitación', "id_perspective" => 4],
        ]);

        \App\Models\Indicator::insert([
            ["name" => 'Ingresos totales mensual:  $150,000', "id_perspective" => 1],
            ["name" => 'Margen bruto (%): 65%', "id_perspective" => 1],
            ["name" => 'Costos operativos totales: $50,000 ', "id_perspective" => 1],
            ["name" => 'Beneficio neto mensual:$40,000', "id_perspective" => 1],
            ["name" => 'Índice de satisfacción del cliente (encuestas NPS, por ejemplo): 8.5', "id_perspective" => 2],
            ["name" => 'Número de nuevos clientes: 200', "id_perspective" => 2],
            ["name" => 'Porcentaje de clientes recurrentes: 40%', "id_perspective" => 2],
            ["name" => 'Número de quejas/reclamaciones recibidas y resueltas: 15', "id_perspective" => 2],
            ["name" => 'Tasa de ocupación de los servicios turísticos: 80', "id_perspective" => 3],
            ["name" => 'Tiempo promedio de respuesta a consultas:  4', "id_perspective" => 3],
            ["name" => 'Tasa de rotación de personal: 10', "id_perspective" => 3],
            ["name" => 'Evaluación de calidad de servicios (puntuación interna o externa): 4.7 ', "id_perspective" => 3],
            ["name" => 'Horas de capacitación por empleado: 20 ', "id_perspective" => 4],
            ["name" => 'Número de nuevos productos o servicios lanzados: 3', "id_perspective" => 4],
            ["name" => 'Tasa de retención de empleados: 85%', "id_perspective" => 4],
            ["name" => 'Cursos de Ventas completados: 2', "id_perspective" => 4],
        ]);
    }
}
