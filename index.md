
<code> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zLowy | Desarrollador</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
    <div align="center"> 
        <img align="center" alt="analisis" src=https://github.com/zLowy/zLowy/blob/main/Neon%20Green%20Liquid%20Art%20On%20Trend%20Zoom%20Background.gif>
    </div>

    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">zLowy | Desarrollador</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Page 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Page 2</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Muchas Page
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Page 1</a></li>
                  <li><a class="dropdown-item" href="#">Page 2</a></li>
                  <li><a class="dropdown-item" href="#">Page 3</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <div class="modal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Esto es un Modal</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Esto es una descripción para un modal de prueba.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Continuar</button>
            </div>
          </div>
        </div>
      </div>

      <div class="toast-container">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <img src="..." class="rounded me-2" alt="...">
            <strong class="me-auto">Notificación 1</strong>
            <small class="text-muted">ahora</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Esto es una notificación automatica.
          </div>
        </div>
      
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <img src="..." class="rounded me-2" alt="...">
            <strong class="me-auto">Notificación 2</strong>
            <small class="text-muted">ahora</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Esto es una notificación automatica.
          </div>
        </div>
      </div>

      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Barra de Progreso | 25%</div>
      </div>

    

      <div class="container">
        <div class="card text-center" >
            <div class="card-header">
              zLowy | Desarrollador de Videojuegos
            </div>
            <div class="card-body">
              <h5 class="card-title">Esto es un texto de relleno</h5>
              <p class="card-text">Esto e suna descripción de prueba para la pagina de github en beta 0.1.0 del taller de github.</p>
              <a href="https://github.com/zLowy" class="btn btn-primary">Ver Mas</a>
            </div>
            <div class="card-footer text-muted">
              Hace 2 segundos.
            </div>
          </div>
    
          <div class="alert alert-danger" role="alert">
            Una alerta <a href="#" class="alert-link">con un link</a>. ¿interesante no?.
          </div>
      </div>

      <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
        <a class="navbar-brand" href="#">Esto es una vista larga para textos largos.</a>
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link" href="#fat">@fat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#mdo">@mdo</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#one">one</a></li>
              <li><a class="dropdown-item" href="#two">two</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#three">three</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" tabindex="0">
        <h4 id="fat">@fat</h4>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil iure dolores et quisquam officiis, commodi sint illo vel minus omnis nobis possimus nemo repellendus quod ullam cumque labore id vero corrupti dolore doloremque quos deleniti eos dignissimos? Dolorem, provident. Corporis omnis voluptate iure ipsam hic excepturi ducimus laborum iste quasi, totam, beatae nisi similique expedita sint architecto optio vitae facilis aliquid labore alias! Deleniti consectetur libero sequi quam laborum, ex obcaecati quia error vero molestias hic. Minima quidem debitis accusamus deserunt ipsa aliquam corrupti, laudantium ipsum molestiae vero laboriosam, quibusdam veritatis voluptates laborum, eveniet nesciunt. Harum quae sed molestias at repudiandae tenetur nobis mollitia quasi, dicta aliquid necessitatibus veritatis est nisi tempora provident? Consequatur ipsam quas harum iste. Molestias, aut?</p>
        <h4 id="mdo">@mdo</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus obcaecati et omnis veritatis nesciunt? Reiciendis tempora impedit velit illo repellendus veritatis ut consequuntur enim adipisci culpa? Ab, maiores nostrum nulla, deleniti neque nesciunt error doloribus eveniet aliquam necessitatibus dolorem ad nisi vero distinctio blanditiis sequi beatae culpa tempora nam at accusamus incidunt excepturi! Quae eum, officia deserunt iste cum asperiores quia consequatur mollitia dolores atque magnam ullam dicta, pariatur, corrupti cupiditate et nostrum omnis dolor! Repellendus quae suscipit nam, obcaecati at asperiores maiores molestias eaque velit autem quo laboriosam eos quod voluptas ex placeat et minima. Dolorem excepturi, saepe reiciendis hic reprehenderit consequuntur iusto earum doloribus sed corporis ullam! Incidunt esse sed corporis unde quibusdam, eveniet numquam dolorum recusandae aperiam commodi qui molestias adipisci iure quia assumenda veniam, suscipit placeat excepturi tempora autem consequatur fugit hic? Temporibus autem, nostrum fuga hic perspiciatis porro! Minus molestias asperiores dicta? Incidunt voluptates vitae quod hic vel non voluptate dignissimos error dolore sequi maiores magnam corporis voluptatibus ex similique, culpa voluptatum cum consectetur optio. Cupiditate impedit placeat explicabo aut atque architecto quas. Fuga, possimus ullam sequi animi ut recusandae dolor magnam alias odio quae quisquam facere a excepturi vel vitae explicabo aliquam consequuntur at, in iure culpa, voluptate debitis aut. Iste earum, corrupti, nulla ipsam, aperiam distinctio libero fugit totam officia sit expedita qui! Corporis, quis fuga aliquam iusto necessitatibus accusamus non quidem doloremque quod laudantium suscipit nulla neque odio recusandae at impedit culpa nobis aspernatur aut ipsam id atque? Eveniet aliquid omnis at impedit totam, itaque nesciunt iste maxime nemo enim vero sint deserunt iure mollitia alias iusto culpa eaque quis sapiente laboriosam! Officiis ea libero sapiente accusamus consequatur! Eligendi molestias dolore commodi, autem placeat quaerat excepturi optio doloribus repellat quas suscipit quae ipsam reiciendis ut, accusamus, hic quam cumque cum atque explicabo.</p>
        <h4 id="one">one</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque blanditiis eveniet quibusdam expedita modi ex consequuntur, amet reprehenderit. Deleniti, rem. Quia perferendis tempora quisquam quod commodi minus doloribus assumenda debitis. Pariatur officia perspiciatis sit facilis ex corrupti eos ipsum amet quisquam atque maxime a laborum expedita ullam similique rem veritatis eveniet neque quasi adipisci, eius fugit possimus aspernatur eligendi? Illo expedita voluptatibus in eaque itaque debitis. Quam minima sit maiores, dolorum ipsam distinctio, amet, possimus quas ratione quis nesciunt architecto quasi eveniet? Similique accusamus, laborum incidunt odit molestias asperiores. Iure illum ipsum aliquid veritatis aliquam beatae error non, atque facilis?</p>
        <h4 id="two">two</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores nulla facilis repudiandae sint magnam tenetur temporibus magni autem voluptatum. Maxime cupiditate, aperiam provident assumenda amet dolorum nam! Esse deserunt magnam, provident consequuntur culpa asperiores tenetur. Sed, quisquam! Dolor doloremque natus aliquam, adipisci dolore modi provident, animi enim distinctio fuga doloribus?</p>
        <h4 id="three">three</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque eos quasi ex similique. Cum, nihil odio obcaecati accusamus dolores voluptatum a totam itaque voluptatibus eius perspiciatis ab. Aliquid obcaecati nostrum nihil molestiae a, iusto maxime voluptatum, minima nobis ipsam accusantium.</p>
      </div>

      <!-- Footer -->
<footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Footer Content</h5>
  
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
            voluptatem veniam, est atque cumque eum delectus sint!
          </p>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>
  
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-dark">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-dark">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://github.com/zLowy">zLowy Github main page</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</body>
</html>
</code>
