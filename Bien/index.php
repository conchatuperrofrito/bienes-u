<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Buscar datos en tiempo real con PHP, MySQL y AJAX">
    <meta name="author" content="Stifler">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Bien/img/faviconUnamba.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <title>COT-UNAMBA</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="Bien/styleIndex.css">
    <link rel="stylesheet" href="Bien/css/index.css">
    <link rel="stylesheet" href="Bien/cssBusquedaDosBoostrap.css">
    <link rel="stylesheet" href="Bien/cssBusquedaBootrap.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />

</head>

<body>

    <!-- //////////////////imagen carga////////START//////////  -->
    <style>
        #imagen-carga {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
        }
    </style>
    <script>
        function mostrarImagenCarga() {
            document.getElementById('imagen-carga').style.display = 'block';
        }

        // Función para ocultar la imagen de carga
        function ocultarImagenCarga() {
            document.getElementById('imagen-carga').style.display = 'none';
        }

        // Evento de carga de la página
        window.addEventListener('load', function () {
            // Ocultar la imagen de carga cuando la página se haya cargado completamente
            ocultarImagenCarga();
        });

        // Evento de descarga de la página (antes de que se recargue)
        window.addEventListener('beforeunload', function () {
            // Mostrar la imagen de carga antes de recargar la página
            mostrarImagenCarga();
        });
    </script>
    <!-- //////////////////imagen carga////////FINISH//////////  -->

    <main>
        <!-- cambiar  -->
        <header><img src="Bien/img/banner.jpg" alt=""></header>
        <style>
            /* Estilo para pantallas más grandes que 1200px */
            @import url('https://fonts.googleapis.com/css2?family=Changa:wght@200..800&family=Saira+Condensed:wght@200&display=swap');

            @media (min-width: 1200px) {
                .container {
                    max-width: 1400px;
                }
            }

            .og-contianer {
                font-family: "Changa", sans-serif;
                font-optical-sizing: auto;
            }

            .registropagina {
                display: flex;
                justify-content: flex-start;
            }

            .cabezerafilter {
                display: flex;
                justify-content: flex-end;
            }

            .custom-select {
                width: 200px;
                /* Ancho personalizado */
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
            }

            /* Estilo para las opciones */
            .custom-select option {
                background-color: #fff;
                /* Color de fondo */
                color: #333;
                /* Color del texto */
            }

            /* Estilo para el select cuando está desplegado */
            .custom-select:focus {
                outline: none;
                /* Eliminar el contorno al enfocar */
                border-color: #007bff;
                /* Cambiar el color del borde al enfocar */
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
                /* Efecto de sombra al enfocar */
            }

            .cabezeraCotiza {
                /* margin-top: 10px; */
                margin-left: 150px;
                margin-right: 150px;
                display: flex;
                justify-content: space-between;

            }
        </style>
        <div class="container py-4 text-center">
            <!-- cambiar  -->
            <h3 class="titulo" style="color: #0c6cccc7;  margin-bottom: 25px;">INVENTARIO
            </h3>
            <div class="og-contianer">
                <h6 style=" text-align: start;"> <span style="color: red;">importante!&nbsp;&nbsp;</span>Limpie el
                    filtro
                    para
                    usar
                    filtro de coincidencias </h6>

                <div class="row g-4 cabezerafilter" style="justify-content: space-between;">

                    <!-- buscador  -->
                    <div class="col-5" style="display: flex; justify-content: space-between;">
                        <select class="" id="optiona1" placeholder="ESTADO" style="height: 50px;">
                            <option value="" selected="">todos</option>
                            <option name="Bueno" value="Bueno">BUENO</option>
                            <option name="Malo" value="Malo">MALOS</option>
                            <option name="Regular" value="Regular">REGULAR</option>
                        </select>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <select class="" id="optionb1" placeholder="dependencia" style="height: 50px;">
                            <option value="" selected="">todas las dependencias</option>
                            <option name="SUB UNIDAD DE SEGURIDAD" value="SUB UNIDAD DE SEGURIDAD">SUB UNIDAD DE
                                SEGURIDAD</option>
                            <option name="UNIDAD DE SERVICIO SOCIAL" value="UNIDAD DE SERVICIO SOCIAL">UNIDAD DE
                                SERVICIO SOCIAL</option>
                            <option name="UNIDAD DE BIBLIOTECA CENTRAL" value="UNIDAD DE BIBLIOTECA CENTRAL">UNIDAD DE
                                BIBLIOTECA CENTRAL</option>
                            <option name="CENTRO DE IDIOMAS" value="CENTRO DE IDIOMAS">CENTRO DE IDIOMAS</option>
                            <option name="EDUCACION INICIAL INTERCULTURAL" value="EDUCACION INICIAL INTERCULTURAL">E..P.
                                DE EDUCACION INICIAL INTERCULTURAL

                            </option>
                            <option name="HUMANOS" value="HUMANOS">UNIDAD DE
                                RECURSOS HUMANOS
                            </option>
                            <option name="DIRECCION GENERAL DE ADMINISTRACION"
                                value="DIRECCION GENERAL DE ADMINISTRACION">DIRECCION GENERAL DE ADMINISTRACION</option>
                            <option name="ESCUELA PROFESIONAL DE ADMINISTRACION"
                                value="ESCUELA PROFESIONAL DE ADMINISTRACION">ESCUELA PROFESIONAL DE ADMINISTRACION
                            </option>
                            <option name="DECANATO DE LA FACULTAD DE ADMINISTRACIO"
                                value="DECANATO DE LA FACULTAD DE ADMINISTRACIO">DECANATO DE LA FACULTAD DE
                                ADMINISTRACIO</option>
                            <option name="UNIDAD DE CONTROL PATRIMONIAL" value="UNIDAD DE CONTROL PATRIMONIAL">UNIDAD DE
                                CONTROL PATRIMONIAL
                            </option>
                            <option name="UNIDAD DE CENTRO MEDICO" value="UNIDAD DE CENTRO MEDICO">UNIDAD DE CENTRO
                                MEDICO
                            </option>
                            <option name="RECTORADO" value="RECTORADO">RECTORADO
                            </option>
                            <option name="VICE RECTORADO DE INVESTIGACION" value="VICE RECTORADO DE INVESTIGACION">VICE
                                RECTORADO DE INVESTIGACION
                            </option>

                            <option name="ALMACEN CENTRAL" value="ALMACEN CENTRAL">ALMACEN CENTRAL

                            </option>
                            <option name="CENTRO DE INFORMATICA" value="CENTRO DE INFORMATICA">CENTRO DE INFORMATICA

                            </option>
                            <option name="ESCUELA PROFESIONAL DE INGENIERIA INFOR"
                                value="ESCUELA PROFESIONAL DE INGENIERIA INFOR">ESCUELA PROFESIONAL DE INGENIERIA INFOR

                            </option>
                            <option name="UNIDAD CENTROS EXPERIMENTALES" value="UNIDAD CENTROS EXPERIMENTALES">UNIDAD
                                CENTROS EXPERIMENTALES

                            </option>
                            <option name="UNIDAD DE SERVICIOS GENERALES" value="UNIDAD DE SERVICIOS GENERALES">UNIDAD DE
                                SERVICIOS GENERALES
                            </option>
                            <option name="DIRECCION DE PRODUCCION DE BIENES Y SERV"
                                value="DIRECCION DE PRODUCCION DE BIENES Y SERV">DIRECCION
                                DE PRODUCCION DE BIENES Y SERV
                            </option>
                            <option name="ESCUELA PROFESIONAL DE INGENIERIA CIVIL"
                                value="ESCUELA PROFESIONAL DE INGENIERIA CIVIL">ESCUELA
                                PROFESIONAL DE INGENIERIA CIVIL
                            </option>
                            <option name="UNIDAD EJECUTORA DE INVERSIONES" value="UNIDAD EJECUTORA DE INVERSIONES">
                                UNIDAD
                                EJECUTORA DE INVERSIONES
                            </option>
                            <option name="ESCUELA PROFESIONAL DE INGENIERIA DE MI"
                                value="ESCUELA PROFESIONAL DE INGENIERIA DE MI">ESCUELA
                                PROFESIONAL DE INGENIERIA DE MI
                            </option>


                            <option name="ESCUELA PROFESIONAL DE AGROECOLOGIA Y D"
                                value="ESCUELA PROFESIONAL DE AGROECOLOGIA Y D">ESCUELA
                                PROFESIONAL DE AGROECOLOGIA Y D
                            </option>
                            <option name="ESCUELA PROFESIONAL DE INGENIERIA AGROI"
                                value="ESCUELA PROFESIONAL DE INGENIERIA AGROI">ESCUELA
                                PROFESIONAL DE INGENIERIA AGROI
                            </option>
                            <option name="ESCUELA PROFESIONAL DE MEDICINA VETERINA"
                                value="ESCUELA PROFESIONAL DE MEDICINA VETERINA">ESCUELA
                                PROFESIONAL DE MEDICINA VETERINA
                            </option>
                        </select>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <select class="" id="optionc1" placeholder="año" style="height: 50px;">
                            <option value="" selected="">todos</option>
                            <option name="2016" value="2016">2016</option>
                            <option name="2017" value="2017">2017</option>
                            <option name="2018" value="2018">2018</option>
                            <option name="2019" value="2019">2019</option>
                            <option name="2020" value="2020">2020</option>
                            <option name="2021" value="2021">2021</option>
                            <option name="2022" value="2022">2022</option>
                            <option name="2023" value="2023">2023</option>
                            <option name="2024" value="2024">2024</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <div class="col-auto">
                            <label for="campo1" class="col-form-label">Buscar con coincidencias : </label>
                            <input type="text" name="campo1" id="campo1" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="registropagina">
                        <div class="col-auto">
                            <label for="num_registros" class="col-form-label">Mostrar: </label>
                        </div>
                        <div class="col-auto">
                            <select name="num_registros" id="num_registros" class="form-select">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>

                        <div class="col-auto">
                            <label for="num_registros" class="col-form-label">registros </label>
                        </div>
                    </div>

                    <br>
                    <br>
                    <div class="col">
                        <table class="table table-sm table-bordered table-striped">
                            <thead style="background-color: #ffdc002e;
                          color: #033c77;
                          ">
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i> acción
                                </th>

                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i> Nro.
                                    cod </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    descript</th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    nombre_sede</th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    nombre_depend</th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i> usuario
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    responsable</th>


                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    nombre_prov
                                </th>

                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    fecha_compra
                                </th>

                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i> valor
                                    compra
                                </th>

                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    fecha_alta
                                </th>

                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    valor_inicial
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i> sede
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i> pliego
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    ubicac_fisica
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    nombre_item
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    sec_ejec
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    tipo_modalidad
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    codigo_barra
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    modelo
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    nro_orden
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    medidas
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    hvalor_neto
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    inventario secuencia
                                </th>

                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    abrev_movimto
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    nro_documento
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    flag_compartido
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    Marca
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    centro_costo
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    estado
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    abreviatura
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    fecha_nea
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    tipo_doc_r
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    sec_modelo
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    nro_serie
                                </th>
                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    grupo bien
                                </th>

                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    clase bien
                                </th>

                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    familia bien
                                </th>

                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    item bien
                                </th>

                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    color
                                </th>

                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    caracteristicas
                                </th>


                                <th class="sort asc"><i class="ri-expand-height-line" style=" color: red;"></i>
                                    observaciones
                                </th>
                                <th class="sort asc">

                                </th>
                            </thead>
                            <!-- El id del cuerpo de la tabla. -->
                            <tbody id="content" style="
                        color: #033c77;
                          ">
                                <!-- <h1>hola mundo</h1> -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label id="lbl-total"></label>
                    </div>
                    <div class="col-6" id="nav-paginacion"></div>
                    <input type="hidden" id="pagina" value="1">
                    <input type="hidden" id="orderCol" value="0">
                    <input type="hidden" id="orderType" value="asc">
                </div>
            </div>
        </div>
    </main>

    <script>

        //es la obtencion de los elemtos al evento keyup del buscador
        getData()
        //es la obtencion evento keyup a buscador
        document.getElementById("campo1").addEventListener("keyup", function () {
            getData()
        }, false)
        document.getElementById("optiona1").addEventListener("change", function () {
            getData();
        }, false);
        document.getElementById("optionb1").addEventListener("change", function () {
            getData();
        }, false);
        document.getElementById("optionc1").addEventListener("change", function () {
            getData();
        }, false);

        //es la obtencion de change a mostrar de la lista optionc1
        document.getElementById("num_registros").addEventListener("change", function () {
            getData()
        }, false)
        /* Peticion AJAX */
        function getData() {


            // el valor del campo1 
            let input = document.getElementById("campo1").value
            let inputa = document.getElementById("optiona1").value
            console.log(inputa)
            let inputb = document.getElementById("optionb1").value
            console.log(inputb)
            let inputc = document.getElementById("optionc1").value
            console.log(inputc)
            // el valor del registro a mostrar 
            let num_registros = document.getElementById("num_registros").value
            //contenido de la tabla
            let content = document.getElementById("content")
            // tabla pagina
            let pagina = document.getElementById("pagina").value
            // tabla ordenamiento
            let orderCol = document.getElementById("orderCol").value
            // tabla ordenamiento
            let orderType = document.getElementById("orderType").value
            if (pagina == null) {
                pagina = 1
            }
            // let url = "indexBusqueda.php"
            let url = "../Bien/busquedaV.php"

            let formaData = new FormData()
            formaData.append('campo1', input)
            formaData.append('optiona1', inputa)
            formaData.append('optionb1', inputb)
            formaData.append('optionc1', inputc)

            formaData.append('registros', num_registros)
            formaData.append('pagina', pagina)
            formaData.append('orderCol', orderCol)
            formaData.append('orderType', orderType)

            fetch(url, {
                method: "POST",
                body: formaData
            }).then(response => response.json())
                .then(data => {
                    content.innerHTML = data.data
                    document.getElementById("lbl-total").innerHTML = 'Mostrando ' + data.totalFiltro +
                        ' de ' + data.totalRegistros + ' registros'
                    document.getElementById("nav-paginacion").innerHTML = data.paginacion
                }).catch(err => console.log(err))
        }
        function nextPage(pagina) {
            document.getElementById('pagina').value = pagina
            getData()
        }

        let columns1 = document.getElementsByClassName("sort")
        let tamanio = columns1.length
        for (let i = 0; i < tamanio; i++) {
            columns1[i].addEventListener("click", ordenar)
        }

        function ordenar(e) {
            let elemento = e.target

            document.getElementById('orderCol').value = elemento.cellIndex

            if (elemento.classList.contains("asc")) {
                document.getElementById("orderType").value = "asc"
                elemento.classList.remove("asc")
                elemento.classList.add("desc")
            } else {
                document.getElementById("orderType").value = "desc"
                elemento.classList.remove("desc")
                elemento.classList.add("asc")
            }
            getData()
        }

    </script>
    <style>
        .li {
            display: none;
        }



        .fecha-pasada {
            background-color: #c5eee340;
        }

        .fecha-pasada td button {
            display: none;
        }

        .fecha-pasada td a {
            display: none;

        }

        .fuuter {
            display: flex;
            justify-content: space-between;
        }
    </style>
    <footer class="cabezeraCotiza  ">
        <h5> Copyright 2024©
        </h5>
        <h5>
            <a href="https://www.unamba.edu.pe/"> Universidad Nacional Micaela Bastidas de Apurímac
            </a>

        </h5>

    </footer>


    <img id="imagen-carga" src="Bien/Loading_2.gif" alt="Cargando...">

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>


</html>