# Proyecto 03: Actividad de evaluación C3 - Usuarios

## 1. Nombre del proyecto
Sistema Orientado a Objetos para el Registro y Gestión de Usuarios.

## 2. Objetivo del proyecto
Diseñar e implementar una estructura de clases que permita administrar de manera eficiente los perfiles de usuario, aplicando principios de encapsulamiento y validación de datos en entornos de desarrollo de software.

## 3. Problema que resuelve
El control de accesos y la gestión de información de usuarios es un requisito fundamental en cualquier sistema informático. Este proyecto resuelve la necesidad de centralizar el registro, almacenamiento temporal y manipulación de datos sensibles (como nombres, correos electrónicos y contraseñas) mediante objetos, asegurando que la información pase por filtros de validación antes de ser asignada a los atributos correspondientes.

## 4. Tecnologías utilizadas
* **Lenguaje de programación:** PHP / Python [Mantén el lenguaje en el que programaste esta actividad][cite: 1].
* **Entorno de ejecución:** Servidor Apache local (XAMPP) / Intérprete de Python.
* **Editor de código:** Visual Studio Code.

## 5. Conceptos aplicados (según temario)
En este proyecto se pusieron en práctica los siguientes conceptos avanzados del paradigma orientado a objetos:
* **Modelado de Entidades:** Creación de clases específicas (`User` / `Client`) para representar de forma abstracta a los usuarios del sistema.
* **Encapsulamiento Estricto:** Uso de modificadores de acceso privados (`private`) para proteger las propiedades de los usuarios, evitando alteraciones externas directas.
* **Métodos Accesores y Mutadores (Getters y Setters):** Implementación de funciones especializadas para recuperar (`get`) y modificar (`set`) de forma segura los atributos encapsulados, añadiendo capas de validación lógica intermedias.

## 6. Capturas de pantalla
A continuación se muestran las evidencias de la ejecución del sistema de gestión de usuarios[cite: 1]:

**Interfaz del sistema / Consola con la creación de usuarios:**
![Evidencia Gestión de Usuarios](capturas/Evidencia_usuarios.png)

## 7. Instrucciones de ejecución
Para probar este módulo de manera local, siga los pasos correspondientes según el entorno de desarrollo[cite: 1]:

[Si tu proyecto fue desarrollado en PHP]:
1. Asegúrese de que la carpeta de este proyecto se encuentre dentro del directorio `htdocs` en su instalación local de XAMPP
2. Inicie el servicio de **Apache** desde el panel de control de XAMPP
3. Abra su navegador web preferido e ingrese a la ruta: `http://localhost/PortafolioPOO_VICTOR_REYES/Proyecto_03_Evaluacion_Usuarios/codigo/`

* **¿Qué aprendí?:** Aprendí a valorar el encapsulamiento como una herramienta de seguridad en el software, entendiendo que los métodos getters y setters son vitales para controlar cómo interactúan los datos externos con la estructura interna de mis clases.
* **¿Qué fue difícil?:** Lo más complejo fue diseñar e implementar validaciones lógicas eficientes dentro de los métodos mutadores (setters) para rechazar datos corruptos o formatos incorrectos (como correos mal estructurados) antes de guardarlos.
* **¿Qué mejoraría?:** En el futuro, mejoraría el proyecto implementando herencia para especializar los tipos de usuarios (por ejemplo, diferenciar entre un 'Usuario Administrador' y un 'Cliente Regular') para optimizar la jerarquía del código.