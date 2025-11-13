<?php

$productos = [
    ["nombre" => "Manzana", "precio" => 1.2, "categoria" => "Fruta"],
    ["nombre" => "Platano", "precio" => 0.8, "categoria" => "Fruta"],
    ["nombre" => "Lechuga", "precio" => 1.5, "categoria" => "Verdura"],
    ["nombre" => "Zanahoria", "precio" => 1.0, "categoria" => "Verdura"],
    ["nombre" => "Pollo", "precio" => 5.0, "categoria" => "Carne"],
];

function filtrarPorCategoria($productos, $categoria) {
    return array_filter($productos, fn($producto) => strtolower($producto['categoria']) === strtolower($categoria));
}
function ordenarPorPrecio($productos, $orden = 'asc') {
    usort($productos, function($a, $b) use ($orden) {
        return $orden === 'asc' ? $a['precio'] <=> $b['precio'] : $b['precio'] <=> $a['precio'];
    });
    return $productos;
}
function transformarNombresAMayusculas($productos) {
    return array_map(fn($producto) => array_merge($producto, ['nombre' => strtoupper($producto['nombre'])]), $productos);
}

function precioPromedio($productos) {
    $total = array_reduce($productos, fn($add, $producto) => $add + $producto['precio'], 0);
    return $total / count($productos);
}

function buscarPorNombre($productos, $nombre) {
    return array_filter($productos, fn($producto) => strpos($producto['nombre'], $nombre) !== false);
}

// Pruebas
$categoria = readline("Filtrar por categoría (Fruta, Verdura, Carne): ");
$productosFiltrados = filtrarPorCategoria($productos, $categoria);
echo "Productos filtrados por categoría '$categoria':\n";
print_r($productosFiltrados);
$productosOrdenados = ordenarPorPrecio($productos, 'desc');
echo "Productos ordenados por precio (descendente):\n";
print_r($productosOrdenados);
$productosTransformados = transformarNombresAMayusculas($productos);
echo "Productos con nombres en mayúsculas:\n";
print_r($productosTransformados);
$precioMedio = precioPromedio($productos);
echo "Precio promedio de los productos: $precioMedio\n";
$nombreBusqueda = readline("Buscar productos por nombre (coincidencia parcial): ");
$productosBuscados = buscarPorNombre($productos, $nombreBusqueda);
echo "Productos encontrados con '$nombreBusqueda':\n";
print_r($productosBuscados);

?>