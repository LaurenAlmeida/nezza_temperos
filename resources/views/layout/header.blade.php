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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!"><img src="assets/imagens/logo.png" alt="" width="140px" height="140px"></a></li>
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
        <div class="container" style="background-color:#FFF">
              <br>
                                    <div class="text-center text-black">
                

                                    <form method="post" action="buscaTempero">  
                                   
                                   @csrf
                                                                            <div class="row" style="align: center;">
                                                                                <div class="form-group col-md-3">
                                                                                        <select class="form-control">
                                                                                            <option selected>Tipos de temperos</option>
                                                                                           
                                                                                            <option value="1">Sal</option>
                                                                                            <option value="2">Pimenta</option>
                                                                                            <option value="3">Tempero Completo</option>
                                                                                            <option value="4">Diversos</option>
                                                                                           
                                                                                        </select>
                                                                                    </div>
                                                                                        <div class="form-group col-md-3">
                                                                                                <select class="form-control">
                                                                                                            <option selected>Quantidade</option>
                                                                                                            <option value="">1050 kg</option>
                                                                                                            <option value="">240 g</option>
                                                                                                            <option value="">200 g</option>
                                                                                                            <option value="">50 g</option>      
                                                                                                </select>
                                                                                            </div>

                                                                                            <div class="form-group col-md-2">
                                                                     <button type="submit" class="form-control btn btn-secondary">Aplicar filtro</button>
                                                                                </div>
                                                                            </div>
                                                                            <br> <br><br>
                                                                        </form>
            </div>

</div>
   </section>




 