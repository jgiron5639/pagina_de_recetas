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
          <a class="nav-link active" href="./postre.php">Postres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./desayuno.php">Desayunos</a>
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
    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalArequipe">
      <img src="./IMG/arequipe.jpg" class="img-fluid" alt="Arequipe">
      <h5 class="text-center mt-2">Arequipe (Dulce de Leche)</h5>
    </button>
  </div>
  <div class="col d-flex align-items-stretch">
    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalBocadillo">
      <img src="./IMG/bocadillo.jpg" class="img-fluid" alt="Bocadillo">
      <h5 class="text-center mt-2">Bocadillo</h5>
    </button>
  </div>
  <div class="col d-flex align-items-stretch">
    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalPostreNatas">
      <img src="./IMG/postre de natas.jpg" class="img-fluid" alt="Postre de Natas">
      <h5 class="text-center mt-2">Postre de Natas</h5>
    </button>
  </div>
</div>

<!-- Modal Definitions -->
<div class="modal fade" id="modalArequipe" tabindex="-1" aria-labelledby="modalArequipeLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalArequipeLabel">Arequipe (Dulce de Leche)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="./IMG/arequipe.jpg" class="img-fluid fixed-size mb-3" alt="Arequipe"><br>
        <strong>Ingredientes:</strong>
        <ul>
          <li>1 Litro de leche,</li>
          <li>1 Taza de azúcar,</li>
          <li>1/2 Cucharada de bicarbonato de sodio,</li>
          <li>1 Cucharada de mantequilla,</li>
        </ul>
        <strong>Preparación:</strong>
        <ol>
          <li>En una olla grande, calienta la leche a fuego medio hasta que comience a hervir.</li>
          <li>Añade el azúcar y el bicarbonato de sodio, mezclando bien.</li>
          <li>Cocina a fuego bajo, removiendo constantemente para evitar que se pegue. La mezcla irá espesando y tomando un color dorado.</li>
          <li>Cuando esté espeso y tenga un color caramelo, agrega la mantequilla y mezcla bien.</li>
          <li>Cocina por unos minutos más hasta obtener la consistencia deseada. Luego, deja enfriar antes de servir.</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Repeat similar structure for other modals -->
<!-- Example for Bocadillo -->
<div class="modal fade" id="modalBocadillo" tabindex="-1" aria-labelledby="modalBocadilloLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalBocadilloLabel">Bocadillo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="./IMG/bocadillo.jpg" class="img-fluid fixed-size mb-3" alt="Bocadillo"><br>
        <strong>Ingredientes:</strong>
        <ul>
          <li>1 kg de guayabas maduras,</li>
          <li>500 g de azúcar,</li>
          <li>1 taza de agua,</li>
          <li>Jugo de 1 limón.</li>
        </ul>
        <strong>Preparación:</strong>
        <ol>
          <li>Pela y corta las guayabas en trozos pequeños. Cocina en agua hasta que estén suaves.</li>
          <li>Escurre las guayabas y pásalas por un procesador de alimentos para hacer un puré.</li>
          <li>En una olla, mezcla el puré de guayaba con el azúcar y el jugo de limón.</li>
          <li>Cocina a fuego medio, removiendo constantemente hasta que la mezcla espese y se despegue de los lados de la olla.</li>
          <li>Vierte la mezcla en un molde engrasado y deja enfriar completamente. Corta en porciones una vez esté firme.</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Postre de Natas Modal -->
<div class="modal fade" id="modalPostreNatas" tabindex="-1" aria-labelledby="modalPostreNatasLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalPostreNatasLabel">Postre de Natas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="./IMG/postre de natas.jpg" class="img-fluid fixed-size mb-3" alt="Postre de Natas"><br>
        <strong>Ingredientes:</strong>
        <ul>
          <li>1 litro de leche,</li>
          <li>1 taza de azúcar,</li>
          <li>1 cucharadita de esencia de vainilla,</li>
          <li>1/2 taza de maicena disuelta en 1/2 taza de agua,</li>
          <li>1/2 taza de pasas (opcional)</li>
        </ul>
        <strong>Preparación:</strong>
        <ol>
          <li>En una olla, calienta la leche a fuego medio hasta que comience a hervir.</li>
          <li>Añade el azúcar y la esencia de vainilla, removiendo bien.</li>
          <li>Agrega la maicena disuelta en agua y cocina a fuego bajo, removiendo constantemente hasta que la mezcla espese.</li>
          <li>Si deseas, añade las pasas y mezcla bien.</li>
          <li>Vierte la mezcla en un molde o en recipientes individuales y deja enfriar a temperatura ambiente antes de refrigerar. Sirve frío.</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>