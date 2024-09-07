<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Automóviles</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md mx-auto space-y-8">
        <!-- Registro de Automóviles -->
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Registrar Automóvil</h2>
            <form action="procesar_registro.php" method="post" class="space-y-4">
                <input type="hidden" name="action" value="registrar">
                <div>
                    <label for="marca" class="block text-sm font-medium text-gray-700">Marca:</label>
                    <input type="text" id="marca" name="marca" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="modelo" class="block text-sm font-medium text-gray-700">Modelo:</label>
                    <input type="text" id="modelo" name="modelo" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="anio" class="block text-sm font-medium text-gray-700">Año:</label>
                    <input type="number" id="anio" name="anio" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="color" class="block text-sm font-medium text-gray-700">Color:</label>
                    <input type="text" id="color" name="color" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="placa" class="block text-sm font-medium text-gray-700">Placa:</label>
                    <input type="text" id="placa" name="placa" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="motor" class="block text-sm font-medium text-gray-700">Motor:</label>
                    <input type="text" id="motor" name="motor" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="chasis" class="block text-sm font-medium text-gray-700">Chasis:</label>
                    <input type="text" id="chasis" name="chasis" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="tipo" class="block text-sm font-medium text-gray-700">Tipo de vehiculo:</label>
                    <input type="text" id="tipo" name="tipo" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <input type="submit" value="Registrar" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                </div>
            </form>
        </div>

        <!-- Búsqueda de Automóviles -->
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Buscar Automóvil</h2>
            <form action="procesar_registro.php" method="post" class="space-y-4">
                <input type="hidden" name="action" value="buscar">
                <div>
                    <label for="criterio" class="block text-sm font-medium text-gray-700">Criterio de búsqueda:</label>
                    <input type="text" id="criterio" name="criterio" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <input type="submit" value="Buscar" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                </div>
            </form>
        </div>

        <!-- Actualización de Automóviles -->
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Actualizar Automóvil</h2>
            <form action="procesar_registro.php" method="post" class="space-y-4">
                <input type="hidden" name="action" value="actualizar">
                <div>
                    <label for="id_actualizar" class="block text-sm font-medium text-gray-700">ID del automóvil a actualizar:</label>
                    <input type="number" id="id_actualizar" name="id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="marca_actualizar" class="block text-sm font-medium text-gray-700">Nueva Marca:</label>
                    <input type="text" id="marca_actualizar" name="marca" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="modelo_actualizar" class="block text-sm font-medium text-gray-700">Nuevo Modelo:</label>
                    <input type="text" id="modelo_actualizar" name="modelo" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="anio_actualizar" class="block text-sm font-medium text-gray-700">Nuevo Año:</label>
                    <input type="number" id="anio_actualizar" name="anio" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="color_actualizar" class="block text-sm font-medium text-gray-700">Nuevo Color:</label>
                    <input type="text" id="color_actualizar" name="color" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="placa_actualizar" class="block text-sm font-medium text-gray-700">Nueva Placa:</label>
                    <input type="text" id="placa_actualizar" name="placa" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="motor_actualizar" class="block text-sm font-medium text-gray-700">Nuevo Motor:</label>
                    <input type="text" id="motor_actualizar" name="motor" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="chasis_actualizar" class="block text-sm font-medium text-gray-700">Nuevo Chasis:</label>
                    <input type="text" id="chasis_actualizar" name="chasis" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="tipo_actualizar" class="block text-sm font-medium text-gray-700">Nuevo Tipo de vehiculo:</label>
                    <input type="text" id="tipo_actualizar" name="tipo" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>

                <div>
                    <input type="submit" value="Actualizar" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                </div>
            </form>
        </div>

        <!-- Eliminación de Automóviles -->
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Eliminar Automóvil</h2>
            <form action="procesar_registro.php" method="post" class="space-y-4">
                <input type="hidden" name="action" value="eliminar">
                <div>
                    <label for="id_eliminar" class="block text-sm font-medium text-gray-700">ID del automóvil a eliminar:</label>
                    <input type="number" id="id_eliminar" name="id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <input type="submit" value="Eliminar" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                </div>
            </form>
        </div>
    </div>
 <!-- footer con mis datos academicos -->
    <footer class="bg-gray-800 text-white mt-12 py-8">
        <div class="max-w-md mx-auto px-4">
            <h3 class="text-xl font-bold mb-4 text-center">Información del Estudiante</h3>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="text-sm font-medium text-gray-400">Nombre:</p>
                    <p class="mt-1 text-lg">Livan</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-400">Apellido:</p>
                    <p class="mt-1 text-lg">Gonzalez</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-400">Cédula:</p>
                    <p class="mt-1 text-lg">8-979-607</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-400">Grupo:</p>
                    <p class="mt-1 text-lg">1LS133</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
