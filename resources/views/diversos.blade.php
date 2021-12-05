<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Nezza Temperos</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script>window.rwbp={email:'laurengoncalves.dev@gmail.com',phone:'+555384785801',message:'',lang:'pt-BR'}</script><script defer async src='https://duz4dqsaqembt.cloudfront.net/client/whats.js'></script>
    </head>
    <body>
        
<section style="background-image: url(assets/imagens/nezza_imagem.jpg); background-size:cover; height: 674px;">
        
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-transparent">
            <div class="container px-4 px-lg-5">
               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:gray;"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/index"><img src="assets/imagens/logo.png" alt="" width="140px" height="140px"></a></li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                        <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5553984785801"> Fale Conosco </a>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
<br><br>
        
              <br>
                                    <div class="text-center text-white">
                                   <h1>Mais sabor para sua mesa</h1>
                                     </div>

</div>
   </section>
 

   <header  class="py-5 bg-dark">
   <nav class="navbar navbar-expand-lg navbar-transparent">
            <div class="container px-4 px-lg-5">
               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:gray;"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/index"><img src="assets/imagens/logo.png" alt="" width="94.36px" height="70px"></a></li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                        <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5553984785801"> Fale Conosco </a>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        </header>
   <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <h5>Diverso</h5>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($diversos as $diverso)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src=" {{ asset($diverso->imagem) }}" width="255px" height="300px"/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $diverso->nome }}</h5>
                                    <!-- Product reviews-->
                                    <!-- Product price-->
                                    {{ $diverso->peso }}
                                </div>
                            </div>
                            <!-- Product actions-->
                        </div>
                        
                    </div>
        
                    @endforeach 
                </div>

            
            </div>
</section>
<footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; IF Mais Empreendedor - 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>