<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/inicio.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Recetas de cocina</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./postre.php">Postres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./desayuno.php">Desayunos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./almuerzo.php">Almuerzos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="modelo" class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col d-flex align-items-stretch">
    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalArepas">
      <img src="./IMG/arepas.jpg" class="img-fluid" alt="Arepas">
      <h5 class="text-center mt-2">Arepa</h5>
    </button>
  </div>
  <div class="col d-flex align-items-stretch">
    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalTamales">
      <img src="./IMG/tamales.jpg" class="img-fluid" alt="Tamales">
      <h5 class="text-center mt-2">Tamales</h5>
    </button>
  </div>
  <div class="col d-flex align-items-stretch">
    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalCalentado">
      <img src="./IMG/calentado.jpg" class="img-fluid" alt="Calentado">
      <h5 class="text-center mt-2">Calentado</h5>
    </button>
  </div>
</div>

<!-- Arepas Modal -->
<div class="modal fade" id="modalArepas" tabindex="-1" aria-labelledby="modalArepasLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalArepasLabel">Arepa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="./IMG/arepas.jpg" class="img-fluid fixed-size mb-3" alt="Arepas"><br>
        <strong>Ingredientes:</strong>
        <ul>
          <li>2 tazas de harina de maíz precocida (tipo Harina Pan),</li>
          <li>2 tazas de agua,</li>
          <li>1/2 cucharadita de sal,</li>
          <li>1 cucharada de mantequilla (opcional)</li>
        </ul>
        <strong>Preparación:</strong>
        <ol>
          <li>En un bol, mezcla la harina de maíz con la sal.</li>
          <li>Agrega el agua poco a poco, mezclando hasta obtener una masa suave y manejable.</li>
          <li>Divide la masa en porciones y forma las arepas con la mano, dándoles forma redonda y aplanada.</li>
          <li>Calienta un sartén a fuego medio y cocina las arepas por unos 5-7 minutos de cada lado, o hasta que estén doradas y cocidas por dentro. Puedes añadir un poco de mantequilla en el sartén para darle más sabor.</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Tamales Modal -->
<div class="modal fade" id="modalTamales" tabindex="-1" aria-labelledby="modalTamalesLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTamalesLabel">Tamales</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="./IMG/tamales.jpg" class="img-fluid fixed-size mb-3" alt="Tamales"><br>
        <strong>Ingredientes:</strong>
        <ul>
          <li>2 tazas de harina de maíz,</li>
          <li>1 taza de caldo de pollo,</li>
          <li>1/2 taza de manteca de cerdo o aceite,</li>
          <li>1 cucharadita de sal,</li>
          <li>Hojas de plátano (remojadas y limpias),</li>
          <li>Relleno (pollo, cerdo, verduras, o lo que prefieras, cocidos y sazonados)</li>
        </ul>
        <strong>Preparación:</strong>
        <ol>
          <li>En un bol, mezcla la harina de maíz con la manteca y la sal. Agrega el caldo poco a poco hasta obtener una masa suave.</li>
          <li>En cada hoja de plátano, coloca una porción de masa y añade el relleno deseado.</li>
          <li>Envuelve con la hoja de plátano y ata con cuerda de cocina.</li>
          <li>Cocina al vapor en una olla grande con agua caliente durante 1-2 horas, o hasta que los tamales estén bien cocidos.</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Calentado Modal -->
<div class="modal fade" id="modalCalentado" tabindex="-1" aria-labelledby="modalCalentadoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCalentadoLabel">Calentado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="./IMG/calentado.jpg" class="img-fluid fixed-size mb-3" alt="Calentado"><br>
        <strong>Ingredientes:</strong>
        <ul>
          <li>Restos de arroz y frijoles (de otro día),</li>
          <li>1 taza de carne (res o cerdo), desmenuzada,</li>
          <li>1 cebolla, picada,</li>
          <li>2 dientes de ajo, picados,</li>
          <li>1 tomate, picado,</li>
          <li>1/2 taza de aceite,</li>
          <li>Sal y pimienta al gusto</li>
        </ul>
        <strong>Preparación:</strong>
        <ol>
          <li>En una sartén grande, calienta el aceite y sofríe la cebolla, el ajo y el tomate hasta que estén dorados.</li>
          <li>Añade la carne desmenuzada y cocina por unos minutos más.</li>
          <li>Incorpora el arroz y los frijoles, mezclando bien. Cocina a fuego medio, removiendo ocasionalmente, hasta que todo esté bien caliente y mezclado.</li>
          <li>Sazona con sal y pimienta al gusto. Sirve caliente.</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>