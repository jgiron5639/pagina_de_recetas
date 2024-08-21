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
    <a class="navbar-brand" href="#">Foodys</a>
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
          <a class="nav-link" href="./desayuno.php">Desayunos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./almuerzo.php">Almuerzos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="modelo" class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col d-flex align-items-stretch">
    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalAjiaco">
      <img src="./IMG/ajiaco.jpg" class="img-fluid" alt="Ajiaco">
      <h5 class="text-center mt-2">Ajiaco</h5>
    </button>
  </div>
  <div class="col d-flex align-items-stretch">
    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalBandejaPaisa">
      <img src="./IMG/bandeja paisa.jpg" class="img-fluid" alt="Bandeja Paisa">
      <h5 class="text-center mt-2">Bandeja Paisa</h5>
    </button>
  </div>
  <div class="col d-flex align-items-stretch">
    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalSancocho">
      <img src="./IMG/sancocho.jpg" class="img-fluid" alt="Sancocho">
      <h5 class="text-center mt-2">Sancocho</h5>
    </button>
  </div>
</div>

<!-- Ajiaco Modal -->
<div class="modal fade" id="modalAjiaco" tabindex="-1" aria-labelledby="modalAjiacoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAjiacoLabel">Ajiaco</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="./IMG/ajiaco.jpg" class="img-fluid fixed-size mb-3" alt="Ajiaco"><br>
        <strong>Ingredientes:</strong>
        <ul>
          <li>1 kg de pechuga de pollo,</li>
          <li>3 papas (criolla, pastusa y sabanera), peladas y cortadas en cubos,</li>
          <li>1 mazorca de maíz, cortada en trozos,</li>
          <li>1 cebolla, picada,</li>
          <li>2 dientes de ajo picados,</li>
          <li>1 taza de crema de leche,</li>
          <li>1 taza de alcaparras,</li>
          <li>Sal y pimienta al gusto,</li>
          <li>Cilantro fresco al gusto</li>
        </ul>
        <strong>Preparación:</strong>
        <ol>
          <li>En una olla grande, cocina el pollo con la cebolla y el ajo hasta que esté bien cocido.</li>
          <li>Añade las papas y la mazorca de maíz. Cocina hasta que las papas estén tiernas y se deshagan, formando una sopa espesa.</li>
          <li>Sazona con sal y pimienta al gusto. Añade el cilantro fresco.</li>
          <li>Sirve con crema de leche y alcaparras al gusto.</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Bandeja Paisa Modal -->
<div class="modal fade" id="modalBandejaPaisa" tabindex="-1" aria-labelledby="modalBandejaPaisaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalBandejaPaisaLabel">Bandeja Paisa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="./IMG/bandeja paisa.jpg" class="img-fluid fixed-size mb-3" alt="Bandeja Paisa"><br>
        <strong>Ingredientes:</strong>
        <ul>
          <li>1 taza de frijoles rojos,</li>
          <li>1 taza de arroz,</li>
          <li>200 g de carne molida de res,</li>
          <li>2 chorizos,</li>
          <li>2 arepas,</li>
          <li>1 huevo frito</li>
          <li>1 plátano maduro, frito,</li>
          <li>1 aguacate,</li>
          <li>1/2 taza de hogao (salsa de cebolla y tomate)</li>
        </ul>
        <strong>Preparación:</strong>
        <ol>
          <li>Cocina los frijoles con agua y un poco de sal hasta que estén tiernos.</li>
          <li>En una sartén, cocina la carne molida hasta que esté dorada y desmenúzala.</li>
          <li>En otra sartén, cocina los chorizos hasta que estén bien cocidos.</li>
          <li>Prepara el arroz según las instrucciones del paquete.</li>
          <li>Fríe el plátano maduro y el huevo.</li>
          <li>Arma la bandeja con arroz, frijoles, carne, chorizo, arepa, plátano, huevo, aguacate y hogao.</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Sancocho Modal -->
<div class="modal fade" id="modalSancocho" tabindex="-1" aria-labelledby="modalSancochoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSancochoLabel">Sancocho</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="./IMG/sancocho.jpg" class="img-fluid fixed-size mb-3" alt="Sancocho"><br>
        <strong>Ingredientes:</strong>
        <ul>
          <li>1 kg de carne de res o pollo,</li>
          <li>2 papas, peladas y cortadas en cubos,</li>
          <li>2 zanahorias, peladas y cortadas en rodajas,</li>
          <li>1 mazorca de maíz, cortada en trozos,</li>
          <li>1 cebolla, picada,</li>
          <li>2 dientes de ajo, picados,</li>
          <li>1 pimiento, picado,</li>
          <li>1 taza de cilantro fresco, picado,</li>
          <li>Sal y pimienta al gusto</li>
        </ul>
        <strong>Preparación:</strong>
        <ol>
          <li>En una olla grande, cocina la carne con la cebolla, el ajo y el pimiento hasta que esté dorada.</li>
          <li>Agrega las papas, zanahorias y mazorca de maíz. Cocina hasta que las verduras estén tiernas.</li>
          <li>Sazona con sal y pimienta al gusto. Añade el cilantro fresco.</li>
          <li>Sirve caliente, acompañado de arroz blanco y aguacate si lo deseas.</li>
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