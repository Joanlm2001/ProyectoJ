@extends('layouts.layout')

@section('content')


<div class="titulo-gestion">
    <h1>El equipo</h1>
  </div>

  <div class="au-row">
    <div class="au-column">
      <div class="au-card">
        <div class="au-container">
          <h2>Jorge Román</h2>
          <p class="au-title">JS Manager</p>
          <p>Capaz de ingerir 5.000kcal en una merienda.</p>
          <p>jroman@projjject.com</p>
          <p><button class="boton-ver-producto">Contacto</button></p>
        </div>
      </div>
    </div>

    <div class="au-column">
      <div class="au-card">
        <div class="au-container">
          <h2>Joan Antoni</h2>
          <p class="au-title">CEO del backend</p>
          <p>99% fe en el Levante. 1% suerte.</p>
          <p>jantoni@projjject.com</p>
          <p><button class="boton-ver-producto">Contacto</button></p>
        </div>
      </div>
    </div>

    <div class="au-column">
      <div class="au-card">
        <div class="au-container">
          <h2>Javier Ariño</h2>
          <p class="au-title">Art Director</p>
          <p>Sabe dónde has puesto un doble espacio.</p>
          <p>jarino@projjject.com</p>
          <p><button class="boton-ver-producto">Contacto</button></p>
        </div>
      </div>
    </div>
  </div>

@endsection
