<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COTIZACIÓN</title>
  <link rel="stylesheet" href="../css/admin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
  <div class="hed">
    <h2>PANEL ADMIN COTIZACIÓN </h2>
    <style>
      h1 {
        color: white;
        padding: 10px;
      }
    </style>
    <style>
      /* Estilo inicial para ocultar el input */
      #subirmas {
        display: none;
      }

      #subirmasdos {
        display: none;
      }

      #botonmasdos {
        display: none;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
      }

      #botonmas {
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
      }

      #botonmasdos:hover,
      #botonmas:hover {
        box-shadow: none;
      }
    </style>
  </div>

  <div class="insertData container">
    <div class="button-return">
      <a href="../index.php" class="btn btn-info registro"
        style="  border-radius: 0px; color:white;  margin-right: 30px;   background-color: #0c1926;" target="_blank"><i
          class="bi bi-table"></i> VER
        REGISTROS</a>
      <a href="../index.php" class="btn btn-info panel"
        style="  color:white; background-color: #0c1926;  border-radius: 0px;  margin-right: 30px;" target="_blank"><i
          class="bi bi-backspace-fill"></i> PANEL
        PRINCIPAL</a>
    </div>
    <form action="../Cotizacion/conection/guardar.php" class="row g-3 needs-validation" method="post"
      enctype="multipart/form-data">
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Ingrese Nro. Código producto</label>
        <input type="number" class="form-control" name="inven_codigo" placeholder="&#xf162; 00001" required>
      </div>
      <!-- oninput="this.value = this.value.replace(/\s/g, '')" BALIDACION ENTIENPO REAL  -->
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Ingrese la Descripción</label>
        <textarea class="form-control" name="inven_descript" placeholder="&#xf1d8; description(max 150-caracteres)..."
          required rows="2" maxlength="150"></textarea>
        <span id="mensajeError"></span>
      </div>

      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Filial</label>
        <select class="form-select estado" name="inven_nom" id="validationCustom02">
          <option value="UNAMBA - SEDE PRINCIPAL">UNAMBA - SEDE PRINCIPAL</option>
          <option value="UNAMBA - SEDE HAQUIRA">UNAMBA - SEDE HAQUIRA </option>
          <option value="UNAMBA - SEDE TAMBOBAMBA">UNAMBA - SEDE TAMBOBAMBA </option>
        </select>
      </div>

      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Dependencia</label>
        <select class="form-select estado" name="inven_nombre_depend" id="validationCustom02">
          <option name="SUB UNIDAD DE SEGURIDAD" value="SUB UNIDAD DE SEGURIDAD">SUB UNIDAD DE
            SEGURIDAD</option>
          <option name="UNIDAD DE SERVICIO SOCIAL" value="UNIDAD DE SERVICIO SOCIAL">UNIDAD DE
            SERVICIO SOCIAL</option>
          <option name="UNIDAD DE BIBLIOTECA CENTRAL" value="UNIDAD DE BIBLIOTECA CENTRAL">UNIDAD DE
            BIBLIOTECA CENTRAL</option>
          <option name="CENTRO DE IDIOMAS" value="CENTRO DE IDIOMAS">CENTRO DE IDIOMAS</option>
          <option name="E.P. DE EDUCACION INICIAL INTERCULTURAL" value="E.P. DE EDUCACION INICIAL INTERCULTURAL">E.P. DE
            EDUCACION INICIAL INTERCULTURAL
          </option>
          <option name="UNIDAD DE RECURSOS HUMANOS" value="UNIDAD DE RECURSOS HUMANOS">UNIDAD DE
            RECURSOS HUMANOS
          </option>
          <option name="DIRECCION GENERAL DE ADMINISTRACION" value="DIRECCION GENERAL DE ADMINISTRACION">DIRECCION
            GENERAL DE ADMINISTRACION</option>
          <option name="ESCUELA PROFESIONAL DE ADMINISTRACION" value="ESCUELA PROFESIONAL DE ADMINISTRACION">ESCUELA
            PROFESIONAL DE ADMINISTRACION
          </option>
          <option name="DECANATO DE LA FACULTAD DE ADMINISTRACIO" value="DECANATO DE LA FACULTAD DE ADMINISTRACIO">
            DECANATO DE LA FACULTAD DE
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
          <option name="ESCUELA PROFESIONAL DE INGENIERIA INFOR" value="ESCUELA PROFESIONAL DE INGENIERIA INFOR">ESCUELA
            PROFESIONAL DE INGENIERIA INFOR

          </option>
          <option name="UNIDAD CENTROS EXPERIMENTALES" value="UNIDAD CENTROS EXPERIMENTALES">UNIDAD
            CENTROS EXPERIMENTALES

          </option>
          <option name="UNIDAD DE SERVICIOS GENERALES" value="UNIDAD DE SERVICIOS GENERALES">UNIDAD DE
            SERVICIOS GENERALES
          </option>
          <option name="UNIDAD DE SERVICIOS GENERALES" value="UNIDAD DE SERVICIOS GENERALES">DIRECCION
            DE PRODUCCION DE BIENES Y SERV
          </option>
          <option name="UNIDAD DE SERVICIOS GENERALES" value="UNIDAD DE SERVICIOS GENERALES">ESCUELA
            PROFESIONAL DE INGENIERIA CIVIL
          </option>
          <option name="UNIDAD DE SERVICIOS GENERALES" value="UNIDAD DE SERVICIOS GENERALES">UNIDAD
            EJECUTORA DE INVERSIONES
          </option>
          <option name="UNIDAD DE SERVICIOS GENERALES" value="UNIDAD DE SERVICIOS GENERALES">ESCUELA
            PROFESIONAL DE INGENIERIA DE MI
          </option>


          <option name="UNIDAD DE SERVICIOS GENERALES" value="UNIDAD DE SERVICIOS GENERALES">ESCUELA
            PROFESIONAL DE AGROECOLOGIA Y D
          </option>
          <option name="UNIDAD DE SERVICIOS GENERALES" value="UNIDAD DE SERVICIOS GENERALES">ESCUELA
            PROFESIONAL DE INGENIERIA AGROI
          </option>
          <option name="UNIDAD DE SERVICIOS GENERALES" value="UNIDAD DE SERVICIOS GENERALES">ESCUELA
            PROFESIONAL DE MEDICINA VETERINA
          </option>
        </select>
      </div>
      <!-- //hiden usuariio-->
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nombre Usuario</label>
        <input type="text" class="form-control" name="inven_usuario" placeholder="&#xf162; 00001" required>
      </div>
      <!-- //hiden -->
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nombre Responsable</label>
        <input type="text" class="form-control" name="inven_responsable" placeholder="&#xf162; 00001" required>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nombre Proveedor</label>
        <input type="text" class="form-control" name="inven_nombre_prov" placeholder="&#xf162; 00001" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Fecha Compra</label>
        <input type="date" class="form-control" id="validationCustom03" name="inven_fecha_compra" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Valor Compra(dos decimales) ejeplo: 100000.00</label>
        <input type="number" class="form-control" id="validationCustom03" name="inven_valor_compra" required>
      </div>

      <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Fecha de Alta</label>
        <input type="date" class="form-control" id="validationCustom03" name="inven_fecha_alta" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Valor Inicial(dos decimales) ejeplo: 100000.00</label>
        <input type="number" class="form-control" id="validationCustom03" name="inven_valor_inicial" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Sede</label>
        <input type="text" class="form-control" name="inven_sede" placeholder="&#xf162; 00001" required>
      </div>

      <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Pliego</label>
        <input type="number" class="form-control" id="validationCustom03" name="inven_pliego" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Uvicacion Fisica</label>
        <input type="text" class="form-control" name="inven_ubicac_fisica" placeholder="&#xf162; 00001" required>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nobre Item</label>
        <input type="text" class="form-control" name="inven_nombre_item" placeholder="&#xf162; 00001" required>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Sec Ejec</label>
        <input type="number" class="form-control" name="inven_sec_ejec" placeholder="&#xf162; 00001" required>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Tipo Modalidad</label>
        <input type="number" class="form-control" name="inven_tipo_modalidad" placeholder="&#xf162; 00001" required>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Codigode Barras (opcional)</label>
        <input type="number" class="form-control" name="inven_codigo_barra" placeholder="&#xf162; 00001">
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Modelo</label>
        <input type="text" class="form-control" name="inven_modelo" placeholder="&#xf162; 00001">
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Numero de orden</label>
        <input type="number" class="form-control" name="inven_nro_orden" placeholder="&#xf162; 00001">
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Dimencion -medida</label>
        <input type="text" class="form-control" name="inven_medidas" placeholder="&#xf162; 00001" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Valor Neto(dos decimales) ejeplo: 100000.00</label>
        <input type="number" class="form-control" id="validationCustom03" name="inven_hvalor_neto" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Abreviacion de Movimientos</label>
        <textarea class="form-control" name="inven_abrev_movimto" placeholder="description(max 300-caracteres)..."
          required rows="3" maxlength="300"></textarea>
        <span id="mensajeError"></span>
      </div>
      <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Nº secuencia</label>
        <input type="text" class="form-control" id="validationCustom03" name="inven_secuencia" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Nº documento</label>
        <input type="number" class="form-control" id="validationCustom03" name="inven_nro_documento" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">flag compartido (opcional)</label>
        <input type="text" class="form-control" name="inven_flag_compartido" placeholder="&#xf162; 00001">
      </div>
      <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Marca</label>
        <input type="text" class="form-control" id="validationCustom03" name="inven_centro_costo" required>
      </div>

      <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Centro Costo(dos decimales) ejeplo: 100000.00</label>
        <input type="number" class="form-control" id="validationCustom03" name="inven_abreviatura" required>
      </div>

      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Estado</label>
        <select class="form-select estado" name="inven_estado" id="validationCustom02">
          <option value="Malo">Malo</option>
          <option value="Bueno">Bueno</option>
          <option value="Regular">Regular</option>
        </select>
      </div>
      <!-- falta una abreviaturacon triger   -->
      <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Fecha de nea (opcional)</label>
        <input type="date" class="form-control" id="validationCustom03" name="inven_fecha_nea">
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Tipo documento referencia</label>
        <input type="number" class="form-control" name="inven_tipo_doc_refer" placeholder="&#xf162; 00001" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">inventario seccion modelo(opcional)</label>
        <input type="text" class="form-control" name="inven_sec_modelo" placeholder="&#xf162; 00001">
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Num serie</label>
        <input type="number" class="form-control" name="inven_grupo_bien" placeholder="&#xf162; 00001" required>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Num clase bien</label>
        <input type="number" class="form-control" name="inven_clase_bien" placeholder="&#xf162; 00001" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Num faimlia Bien</label>
        <input type="number" class="form-control" name="inven_familia_bien" placeholder="&#xf162; 00001" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Num item Bien</label>
        <input type="number" class="form-control" name="inven_item_bien" placeholder="&#xf162; 00001" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Color</label>
        <input type="text" class="form-control" id="validationCustom03" name="inven_color" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Caracteristicas</label>
        <textarea class="form-control" name="inven_caracteristicas"
          placeholder="&#xf1d8; description(max 500-caracteres)..." required rows="2" maxlength="500"></textarea>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Observaciones</label>
        <textarea class="form-control" name="inven_observaciones"
          placeholder="&#xf1d8; description(max 500-caracteres)..." required rows="2" maxlength="500"></textarea>
      </div>
      <div class="buttons col-12">
        <input type="submit" style="   background-color: #0c1926; color:white" value="AÑADIR VIEN" class="btn btn-info"
          name="add_cot">
      </div>
    </form>
  </div>
  <div>
    <h2>LISTA DE VIENES POR FILTRO Y LISTA </h2>
    <div class="search-container"><i class="ri-search-line" style="padding: 20px;
    color: #18c8a4;
    font-weight: bold; "></i>
      <input type="text" id="searchInput" placeholder="Buscar..." style="width: 300px;
    padding: 5px;
    color: #40b8f2;
    font-weight: bold;
    box-shadow: 0px 0px 10px 2px rgb(159 229 238 / 59%);
    ">
    </div>
    <!-- serch  -->
    <section class="show-products">
      <div class="box-container">
        <?php
        $select_cons = $conn->prepare("SELECT * FROM `tinventario`");
        $select_cons->execute();
        if ($select_cons->rowCount() > 0) {
          while ($fetch_cons = $select_cons->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="box cotizaciongEN">
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i>CODIGO :

                <?= $fetch_cons['inven_codigo']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i>DESCRIPCIÓN :

                <?= $fetch_cons['inven_descript']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i>CODIGO :

                <?= $fetch_cons['inven_nom']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i>dependencia :

                <?= $fetch_cons['inven_nombre_depend']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i>usuario :

                <?= $fetch_cons['inven_usuario']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> responsable :

                <?= $fetch_cons['inven_responsable']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i>nombre proveedor:

                <?= $fetch_cons['inven_nombre_prov']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i>Fecha Compra :

                <?= $fetch_cons['inven_fecha_compra']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i>valor compra :

                <?= $fetch_cons['inven_valor_compra']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i>fecha alta :

                <?= $fetch_cons['inven_fecha_alta']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i>valor inicial :

                <?= $fetch_cons['inven_valor_inicial']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i>sede :

                <?= $fetch_cons['inven_sede']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i>inventario pliego :

                <?= $fetch_cons['inven_pliego']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i>ubicación fisica :

                <?= $fetch_cons['inven_ubicac_fisica']; ?>
              </div>

              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i>nombre item :

                <?= $fetch_cons['inven_nombre_item']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> secuencia ejecución :

                <?= $fetch_cons['inven_sec_ejec']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> tipo modalidad :

                <?= $fetch_cons['inven_tipo_modalidad']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> codigo barra :

                <?= $fetch_cons['inven_codigo_barra']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> modelo :

                <?= $fetch_cons['inven_modelo']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> nro orden :

                <?= $fetch_cons['inven_nro_orden']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> medidas :

                <?= $fetch_cons['inven_medidas']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> valor neto :

                <?= $fetch_cons['inven_hvalor_neto']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> Abreviatura de movimientos :

                <?= $fetch_cons['inven_abrev_movimto']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> secuencia :

                <?= $fetch_cons['inven_secuencia']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> nro documento :
                <?= $fetch_cons['inven_nro_documento']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> flag compartido :
                <?= $fetch_cons['inven_flag_compartido']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> centro costo :

                <?= $fetch_cons['inven_centro_costo']; ?>
              </div>


              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> inven_estado :

                <?= $fetch_cons['inven_estado']; ?>
              </div>


              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> fecha nea :

                <?= $fetch_cons['inven_fecha_nea']; ?>
              </div>


              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> tipo documento referencia :

                <?= $fetch_cons['inven_tipo_doc_refer']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> secuencia de modelo :

                <?= $fetch_cons['inven_sec_modelo']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> Nº serie :

                <?= $fetch_cons['inven_grupo_bien']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> Num clase bien :

                <?= $fetch_cons['inven_clase_bien']; ?>
              </div>
              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> Num faimlia Bien :

                <?= $fetch_cons['inven_item_bien']; ?>
              </div>

              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> Num item Bien :

                <?= $fetch_cons['inven_familia_bien']; ?>
              </div>


              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> Color :

                <?= $fetch_cons['inven_color']; ?>
              </div>


              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> Caracteristicas :

                <?= $fetch_cons['inven_caracteristicas']; ?>
              </div>

              <div class="name">
                <i class="ri-code-line" style="color: #d97979;"></i> Observaciones :

                <?= $fetch_cons['inven_observaciones']; ?>
              </div>
              <div class="flex-btn">
                <!-- C:\Program Files\xampp\htdocs\cotizacionU\dashboard\dashboard.php -->
                <a href="../dashboard/dashboard.php?delete=<?= $fetch_cons['inven_codigo']; ?>"
                  onclick="return confirm('delete this product?');" class="btn btn-info"
                  style="   background-color: #0c1926; color:white">eliminar</a>
              </div>
            </div>
            <?php
          }
        } else {
          echo '<p class="empty">no products added yet!</p>';
        }
        ?>
      </div>
    </section>
    <script>
      document.getElementById('searchInput').addEventListener('input', function () {
        var searchTerm = this.value.trim().toLowerCase();
        var boxes = document.getElementsByClassName('cotizaciongEN');
        for (var i = 0; i < boxes.length; i++) {
          var box = boxes[i];
          var text = box.innerText.toLowerCase();
          if (text.includes(searchTerm)) {
            box.style.display = 'block';
          } else {
            box.style.display = 'none';
          }
        }
      });
    </script>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>
  <footer class="cabezeraCotiza  ">
    <h5> Copyright 2024©
    </h5>
    <h5>
      <a href="https://www.unamba.edu.pe/"> Universidad Nacional Micaela Bastidas de Apurímac
      </a>
    </h5>
  </footer>
</body>

</html>