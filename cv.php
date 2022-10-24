
<?php 

//recordem la variable de sessió
session_start();
include 'includes/database.php';

//Si no existeix la sessio del usuari, et redirigeix directament a login
$usuario = $_SESSION['sessionUser'];
if(!isset($usuario)){
    header('Location: login.php');
}else{
    // echo $_SESSION['sessionUser'];
    
}

$consulta = "SELECT * FROM usuari WHERE user = '$usuario'";
$ejecuta = $conecta->query($consulta);
$row = $ejecuta->fetch_assoc();

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV PAGE </title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/c930e4b2cf.js" crossorigin="anonymous"></script>
    <!-- GOOGLE FONTS -->
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Nanum+Pen+Script&family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/index.css">

</head>
<body>
    <div class="contenidoPaginaCV">
    <div class="headerGeneral bg-warning">
        <h2 class="text-[32px] text-center "><span class="text-[#4A4646]">Benvingut/da</span>  <?php echo $row['nom'] . ' ' .$row['cognoms'] ;?></h2>
        
       
        <a href="includes/logout.php">
            <div class="btnLogout d-flex p-3 text-center items-center rounded-[10px] bg-danger text-white">
                <i class="mx-3 text-white fa-solid fa-right-from-bracket"></i>
                <p>Log out</p>
            </div>
        </a>
        
    </div>
        

        <div class="infoGeneralUser mx-[30px] mt-4 container border border-gray-600 w-[300px] row ">
            
            <p><b>Nom: </b><?php echo $row['nom']?></p>
            <p><b>Cognoms: </b><?php echo $row['cognoms']?></p>
            <p><b>Email: </b><?php echo $row['email']?></p>
            

        </div>

        
        <div class="curriculumA4">
        <header>
            <div class="header container">
                <h2 class="titulo_cv ms-5 text-white"><?php echo $row['nom'].' '.$row['cognoms']?></h2>
            </div>
        </header>
    
        <main class="container  mt-5 justify-content-between ">
            <div class="row d-flex">
                <!-- Columna izquierda -->
                <div class="ps-5 pe-5 col-md-5 col-xs-12 my-4 me-5 colizq ">
                    <div class="img_perfil"></div>
                    <div class="box_datos_personales">
                        <div class="header_box">
                            <p class="Predatory Journals
                            font-weight-bold"><i class="fa-solid fa-angles-right"></i>Datos personales</p>
                        </div>
                        <div class="lista_datos_personales">
                            <ul>
                                <li class="list_item"><i class="fa-solid fa-user"></i><?php echo $row['nom'].' '.$row['cognoms']?></li>
                                <li class="list_item"><i class="fa-solid fa-house"></i>Calle 24 9632, City Bell, La Plata</li>
                                <li class="list_item"><i class="fa-solid fa-phone"></i>1234 5678</li>
                                <li class="list_item"><i class="fa-solid fa-envelope"></i><?php echo $row['email']?></li>
                                <li class="list_item"><i class="fa-solid fa-calendar"></i>04/01/1995</li>
                                <li class="list_item"><i class="fa-solid fa-flag"></i>Argentina</li>
                                <li class="list_item"><i class="fa-solid fa-mobile"></i>934562318</li>
                                <li class="list_item"><i class="fa-solid fa-person"></i>Soltero</li>
                                <li class="list_item"><i class="fa-solid fa-car"></i>Clase B</li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="box_habilidades mt-4">
                        <div class="header_box">
                            <p class="font-weight- bold"><i class="fa-solid fa-angles-right"></i>Habilidades</p>
                        </div>
                        <div class="lista_habilidades">
                            <ul>
    
                                <li class="list_item">
                                    <p class="w-50">Disciplinado</p>
                                    <div class="item_progress mx-2 w-50">
                                        <div class="progress ">
                                            <div class="progress-bar gray" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
    
                                <li class="list_item">
                                    <p class="w-50">Puntual</p>
                                    <div class="item_progress mx-2 w-50">
                                        <div class="progress ">
                                            <div class="progress-bar gray" role="progressbar" style="width: 78%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
    
                                <li class="list_item">
                                    <p class="w-50">Trabajador</p>
                                    <div class="item_progress mx-2 w-50">
                                        <div class="progress ">
                                            <div class="progress-bar gray" role="progressbar" style="width: 75%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
    
                                <li class="list_item">
                                    <p class="w-50">Eficiente</p>
                                    <div class="item_progress mx-2 w-50">
                                        <div class="progress ">
                                            <div class="progress-bar gray" role="progressbar" style="width: 95%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
    
                                
                            </ul>
                        </div>
                    </div>
    
    
                    <div class="box_idiomas mt-4">
                        <div class="header_box">
                            <p class="font-weight-bold"><i class="fa-solid fa-angles-right"></i>Idiomas</p>
                        </div>
                        <div class="lista_idiomas">
                            <ul>
                                <li class="list_item">
                                    <p class="w-50">Inglés</p>
                                    <div class="item_progress mx-2 w-50">
                                        <div class="progress ">
                                            <div class="progress-bar gray" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
    
                                <li class="list_item">
                                    <p class="w-50">Catalán</p>
                                    <div class="item_progress mx-2 w-50">
                                        <div class="progress ">
                                            <div class="progress-bar gray" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
    
                                <li class="list_item">
                                    <p class="w-50">Español</p>
                                    <div class="item_progress mx-2 w-50">
                                        <div class="progress ">
                                            <div class="progress-bar gray" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
    
                                <li class="list_item">
                                    <p class="w-50">Alemán</p>
                                    <div class="item_progress mx-2 w-50">
                                        <div class="progress ">
                                            <div class="progress-bar gray" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="box_informatica mt-4">
                        <div class="header_box">
                            <p class="font-weight-bold"><i class="fa-solid fa-angles-right"></i>Informática</p>
                        </div>
                        <div class="lista_idiomas">
                            <ul>
                                <li class="list_item">
                                    <p class="w-50">Python</p>
                                    <div class="item_progress mx-2 w-50">
                                        <div class="progress ">
                                            <div class="progress-bar gray" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
    
                                <li class="list_item">
                                    <p class="w-50">Azure</p>
                                    <div class="item_progress mx-2 w-50">
                                        <div class="progress ">
                                            <div class="progress-bar gray" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
    
                                <li class="list_item">
                                    <p class="w-50">PHP</p>
                                    <div class="item_progress mx-2 w-50">
                                        <div class="progress ">
                                            <div class="progress-bar gray" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
    
                                <li class="list_item">
                                    <p class="w-50">JavaScript</p>
                                    <div class="item_progress mx-2 w-50">
                                        <div class="progress gray">
                                            <div class="progress-bar gray" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
    
    
                    <div class="box_informatica mt-4">
                        <div class="header_box">
                            <p class="font-weight-bold"><i class="fa-solid fa-angles-right"></i>Competencias</p>
                        </div>
                        <div class="lista_informatica">
                            <ul>
                                <li class="list_item"><i class="fa-solid fa-angles-right"></i>Trabajo en equipo</li>
                                <li class="list_item"><i class="fa-solid fa-angles-right"></i>Inteligencia analítica</li>
                                
                            </ul>
                        </div>
                    </div>
    
                    
                </div>
            
                <!-- Columna derecha -->
                
                    <div class="ps-5 pe-5 col-md-6 col-xs-12 colder ">
                        <div class="box_perfil">
                            <div class="header_box">
                                <p class="font-weight-bold"><i class="fa-solid fa-angles-right"></i>Perfil</p>
                            </div>
                            <div class="parrafo_perfil text-justify">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi. Porro omnis animi vero consequatur aut veritatis, nulla libero, distinctio voluptatem ad harum cum? Debitis eum aut fugiat iste vel?</p>
                            </div>
                        </div>
    
    
                        <div class="box_experiencias mt-4">
                            <div class="header_box">
                                <p class="font-weight-bold"><i class="fa-solid fa-angles-right"></i>Experiencias de trabajo</p>
                            </div>
                            <div class="parrafo_experiencias">
                                <div class="row">
                                    <div class="col-5">01/06 - Presente</div>
                                    <div class="col-7">
                                        <p class="fw-bold">Consultor SAP</p>
                                        <p class="place">Bunge Cono Bur</p>
                                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos error aliquid fuga asperiores optio! Harum animi explicabo quia, impedit magnam id quaerat magni unde sequi fuga distinctio quas cupiditate in.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">29/09 - 01/2021</div>
                                    <div class="col-7 ">
                                        <p class="fw-bold">Consultor SAP FICO Sr.</p>
                                        <p class="place">Botflick, Buenos Aires</p>
                                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.Quos error aliquid fuga asperiores optio! 
                                            <ul>
                                                <li>Banc Sabadell</li>
                                                <li>La Caixa</li>
                                                <li>Laboratorios Tred Quick</li>
                                                <li>Investigación y desarrollo práctico.</li>
                                            </ul>
                                            </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">04/2021 - 11/2022</div>
                                    <div class="col-7 ">
                                        <p class="fw-bold">Especialista SAP FI</p>
                                        <p class="place">Accenture Argentina</p>
                                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos error aliquid fuga asperiores optio! Harum animi explicabo quia, impedit magnam id quaerat magni unde sequi fuga distinctio quas cupiditate in.</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
    
    
    
                        <div class="box_educación mt-4">
                            <div class="header_box">
                                <p class="font-weight-bold"><i class="fa-solid fa-angles-right"></i>Educación</p>
                            </div>
                            <div class="row">
                                <div class="col-5">29/09 - Presente</div>
                                <div class="col-7">
                                    <p>Contador Público.</p>
                                    <p>Universidad de Buenos Aires (UBA)</p>
                                    <p>Promedio: 9.2</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Quos error aliquid fuga asperiores optio! 
                                        <ul>
                                            <li>Banc Sabadell</li>
                                            <li>La Caixa</li>
                                            <li>Laboratorios Tred Quick</li>
                                            <li>Investigación y desarrollo práctico.</li>
                                        </ul>
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            
           
        </main>
    </div>

    </div>
</body>
</html>
