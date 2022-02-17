@extends('layouts.app')


@section('content')
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >CourseWeb</title>
</head>
<!--inicia carrousel-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="position:relative">
<div class="row justify-content-center font-weight-bold" style="    position: absolute;  z-index: 1; top: 40%; left:20%;color:white;">
    
            <h1 class="text-center">
      
CONVIÉRTETE EN UN PROFESIONAL EN TECNOLOGÍA
</h1>

</div>
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  
    <div class="carousel-item active">
      <img src="https://www.becas-santander.com/content/dam/becasmicrosites/blog/metodolog%C3%ADas-de-desarrollo-de-software.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="https://i.blogs.es/a2066e/programando/1366_2000.jpg" class="d-block w-100" alt="...">
     
    </div>
    <div class="carousel-item">
    <img src="https://www.eluniversal.com.mx/sites/default/files/2020/10/01/pasar-tiempo-computadora.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--/termina carrousel/-->
<form action="" method="post"></form>
<div class="container ">
    
    <div class="row row-cols-1 row-cols-md-3 g-4 my-1">
        <div class="col">
            <div class="card h-100">
                <img src="https://i.imgur.com/iSy6Kjg.png" class="card-img-top .img-fluid" alt="SQL">
                <div class="card-body">
                    <h5 class="card-title">CURSO BASICO DE MYSQL</h5>
                    <p class="card-text">MySQL es un sistema de gestión de bases de datos relacional desarrollado bajo licencia dual: Licencia pública general/Licencia comercial por Oracle Corporation y está considerada como la base de datos.</p>
                </div>
                <a method="post" href="#" class="btn btn-primary rounded-pill my-2">Realizar Test</a>
                <a href="#" class="btn btn-primary rounded-pill my-2">Ver Curso</a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fc/Javalogo.png" class="card-img-top .img-fluid" alt="JAVA">
                <div class="card-body">
                    <h5 class="card-title">CURSO BASICO DE JAVA </h5>
                    <p class="card-text">Java es un lenguaje de programación y una plataforma informática que fue comercializada por primera vez en 1995 por Sun Microsystems. Hay muchas aplicaciones y sitios web que no funcionarán, probablemente, a menos que tengan Java instalado, y cada día se crean más. Java es rápido, seguro y fiable.</p>
                </div>
                <a href="#" class="btn btn-primary rounded-pill my-2">Realizar Test</a>
                <a href="#" class="btn btn-primary rounded-pill my-2">Ver Curso</a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://cosasdedevs.com/media/sections/images/python.png" class="card-img-top .img-fluid" alt="PYTHON">
                <div class="card-body">
                    <h5 class="card-title">CURSO BASICO DE PYTHON</h5>
                    <p class="card-text">Python es un lenguaje de programación interpretado cuya filosofía hace hincapié en la legibilidad de su código.​ Se trata de un lenguaje de programación multiparadigma, ya que soporta parcialmente la orientación a objetos, programación imperativa y, en menor medida, programación funcional.</p>
                </div>
                <a href="#" class="btn btn-primary rounded-pill my-2">Realizar Test</a>
                <a href="#" class="btn btn-primary rounded-pill my-2">Ver Curso</a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://clibre.io/media/k2/items/cache/f68bc1606a499c66a1eabd66e99d6817_XL.jpg" class="card-img-top .img-fluid" alt="PATRONES DISEÑO">
                <div class="card-body">
                    <h5 class="card-title">CURSO BASICO DE PATRONES DE DISEÑO</h5>
                    <p class="card-text">Los patrones de diseño son unas técnicas para resolver problemas comunes en el desarrollo de software y otros ámbitos referentes al diseño de interacción o interfaces. Un patrón de diseño resulta ser una solución a un problema de diseño.</p>
                </div>
                <a href="#" class="btn btn-primary rounded-pill my-2">Realizar Test</a>
                <a href="#" class="btn btn-primary rounded-pill my-2">Ver Curso</a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://diagramasuml.com/wp-content/uploads/2018/12/umlogo.png" class="card-img-top .img-fluid" alt="UML">
                <div class="card-body">
                    <h5 class="card-title">CURSO BASICO DE UML</h5>
                    <p class="card-text">El lenguaje unificado de modelado es el lenguaje de modelado de sistemas de software más conocido y utilizado en la actualidad; está respaldado por el Object Management Group. Es un lenguaje gráfico para visualizar, especificar, construir y documentar un sistema.</p>
                </div>
                <a href="#" class="btn btn-primary rounded-pill my-2">Realizar Test</a>
                <a href="#" class="btn btn-primary rounded-pill my-2">Ver Curso</a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://previews.123rf.com/images/yuriy2design/yuriy2design1602/yuriy2design160200024/54265127-poo-programaci%C3%B3n-orientada-a-objetos.jpg" class="card-img-top .img-fluid" alt="POO">
                <div class="card-body">
                    <h5 class="card-title">CURSO BASICO DE POO</h5>
                    <p class="card-text">La Programación Orientada a Objetos es un paradigma de programación que parte del concepto de "objetos" como base, los cuales contienen información en forma de campos y código en forma de métodos.</p>
               
                </div>         
                <a href="#" class="btn btn-primary rounded-pill my-2">Realizar Test</a>
                <a href="#" class="btn btn-primary rounded-pill my-2">Ver Curso</a>
            </div>
        </div>

    </div>
</div>
@endsection
