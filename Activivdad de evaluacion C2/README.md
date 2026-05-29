# Proyecto 02: Actividad de evaluación C2 - Consumo energético servidores

## 1. Nombre del proyecto
Sistema de Simulación y Cálculo de Consumo Energético en Servidores.

## 2. Objetivo del proyecto
Implementar el uso de métodos con y sin parámetros, así como métodos que retornan valores, para calcular y optimizar el consumo eléctrico y la eficiencia operativa de una infraestructura de servidores de datos.

## 3. Problema que resuelve
Las empresas con centros de datos enfrentan altos costos por el consumo eléctrico de sus servidores en funcionamiento continuo. Este software automatiza el cálculo del consumo en vatios (Watts) u kilovatios-hora (kWh) basándose en variables como la carga de trabajo del procesador, las horas de encendido y el factor de eficiencia de las fuentes de poder. Permite evaluar qué servidores están operando fuera de los rangos óptimos de energía para tomar decisiones de mantenimiento o migración de infraestructura.

## 4. Tecnologías utilizadas
* **Lenguaje de programación:** PHP / Python [Mantén el lenguaje en el que programaste esta actividad][cite: 1].
* **Entorno de ejecución:** Servidor Apache local (XAMPP) / Intérprete de Python.
* **Editor de código:** Visual Studio Code.

## 5. Conceptos aplicados (según temario)
En este proyecto de la Unidad 3 se profundizaron y aplicaron los siguientes conceptos lógicos:
* **Métodos con parámetros:** Funciones internas de la clase que reciben variables externas (como las horas de uso o porcentaje de carga) para realizar operaciones dinámicas.
* **Métodos con retorno de valor (`return`):** Métodos diseñados específicamente para efectuar operaciones aritméticas de consumo y devolver el resultado final al bloque principal del programa.
* **Instanciación de múltiples objetos:** Creación de distintos objetos que representan diferentes servidores (por ejemplo: Servidor Web, Servidor de Base de Datos) compartiendo la misma estructura de clase pero con estados de consumo independientes.

## 6. Capturas de pantalla
A continuación se muestran las evidencias de la ejecución del sistema de consumo energético[cite: 1]:

**Interfaz del sistema / Consola con resultados de consumo:**
![Evidencia Consumo Energético](capturas/Evidencia_consumo.png)

## 7. Instrucciones de ejecución
Para desplegar y probar de forma local este módulo, siga los pasos correspondientes[cite: 1]:

[Si tu proyecto fue desarrollado en PHP]:
1. Asegúrese de tener guardada la carpeta de este proyecto dentro del directorio `htdocs` en su instalación de XAMPP[cite: 1].
2. Inicie el servicio de **Apache** desde el panel de control de XAMPP[cite: 1].
3. Abra su navegador e ingrese a la ruta: `http://localhost/PortafolioPOO_VICTOR_REYES/Proyecto_02_Consumo_Energetico/codigo/`

* **¿Qué aprendí?:** Aprendí la importancia de modularizar el código mediante métodos especializados, entendiendo cómo pasar información a través de parámetros y manipular los valores de retorno de manera eficiente[cite: 1].
* **¿Qué fue difícil?:** Lo más complejo fue estructurar correctamente las fórmulas matemáticas de conversión energética dentro de los métodos de la clase sin mezclar la lógica de negocio con la presentación de los datos[cite: 1].
* **¿Qué mejoraría?:** Mejoraría el sistema agregando estructuras de control que permitan generar un reporte comparativo automático en formato de tabla para contrastar visualmente qué servidor consume más energía[cite: 1].