<?php
include("../../conneccion/dbUnamba.php");
session_start();
$fechaActual = date('Y-m-d H:i:s');
$admin_id = $_SESSION['dni'];

$inven_codigo = $_GET['inven_codigo'];
if (!isset($admin_id)) {
   header('location:admin_login.php');
}
if (isset($_POST['regresar'])) {
   header('location:../dashboard.php');

   exit(); // Asegura que no se procese nada más después de la redirección
}
if (isset($_POST['submit'])) {
   $inven_codigo = $_POST['inven_codigo'];
   $inven_descript = $_POST['inven_descript'];
   $inven_nom = $_POST['inven_nom'];
   $inven_nombre_depend = $_POST['inven_nombre_depend'];
   $inven_usuario = $_POST['inven_usuario'];
   $inven_responsable = $_POST['inven_responsable'];
   $inven_nombre_prov = $_POST['inven_nombre_prov'];
   $inven_fecha_compra = $_POST['inven_fecha_compra'];
   $inven_valor_compra = $_POST['inven_valor_compra'];
   $inven_fecha_alta = $_POST['inven_fecha_alta'];
   $inven_valor_inicial = $_POST['inven_valor_inicial'];
   $inven_sede = $_POST['inven_sede'];
   $inven_pliego = $_POST['inven_pliego'];
   $inven_ubicac_fisica = $_POST['inven_ubicac_fisica'];
   $inven_nombre_item = $_POST['inven_nombre_item'];
   $inven_sec_ejec = $_POST['inven_sec_ejec'];
   $inven_tipo_modalidad = $_POST['inven_tipo_modalidad'];
   $inven_codigo_barra = $_POST['inven_codigo_barra'];
   $inven_modelo = $_POST['inven_modelo'];
   $inven_nro_orden = $_POST['inven_nro_orden'];
   $inven_medidas = $_POST['inven_medidas'];
   $inven_hvalor_neto = $_POST['inven_hvalor_neto'];
   $inven_abrev_movimto = $_POST['inven_abrev_movimto'];
   $inven_secuencia = $_POST['inven_secuencia'];
   $inven_nro_documento = $_POST['inven_nro_documento'];
   $inven_flag_compartido = $_POST['inven_flag_compartido'];
   $inven_centro_costo = $_POST['inven_centro_costo'];
   $inven_abreviatura = $_POST['inven_abreviatura'];
   $inven_estado = $_POST['inven_estado'];
   $inven_fecha_nea = $_POST['inven_fecha_nea'];
   $inven_tipo_doc_refer = $_POST['inven_tipo_doc_refer'];
   $inven_sec_modelo = $_POST['inven_sec_modelo'];
   $inven_grupo_bien = $_POST['inven_grupo_bien'];
   $inven_clase_bien = $_POST['inven_clase_bien'];
   $inven_familia_bien = $_POST['inven_familia_bien'];
   $inven_item_bien = $_POST['inven_item_bien'];
   $inven_color = $_POST['inven_color'];
   $inven_caracteristicas = $_POST['inven_caracteristicas'];
   $inven_observaciones = $_POST['inven_observaciones'];

   $update_profile_name1 = $conn->prepare("UPDATE `tinventario` SET inven_codigo = ? WHERE inven_codigo = ?");
   $update_profile_name1->execute([$inven_codigo, $inven_codigo]);
   $update_profile_name11 = $conn->prepare("UPDATE `tinventario` SET inven_descript = ? WHERE inven_codigo = ?");
   $update_profile_name11->execute([$inven_descript, $inven_codigo]);
   $update_profile_name2 = $conn->prepare("UPDATE `tinventario` SET inven_nombre_depend = ? WHERE inven_codigo = ?");
   $update_profile_name2->execute([$inven_nombre_depend, $inven_codigo]);
   $update_profile_name22 = $conn->prepare("UPDATE `tinventario` SET inven_usuario = ? WHERE inven_codigo = ?");
   $update_profile_name22->execute([$inven_usuario, $inven_codigo]);
   $update_profile_name3 = $conn->prepare("UPDATE `tinventario` SET inven_responsable = ? WHERE inven_codigo = ?");
   $update_profile_name3->execute([$inven_responsable, $inven_codigo]);
   $update_profile_name44 = $conn->prepare("UPDATE `tinventario` SET inven_nombre_prov = ? WHERE inven_codigo = ?");
   $update_profile_name44->execute([$inven_nombre_prov, $inven_codigo]);
   $update_profile_name5 = $conn->prepare("UPDATE `tinventario` SET inven_fecha_compra = ? WHERE inven_codigo = ?");
   $update_profile_name5->execute([$inven_fecha_compra, $inven_codigo]);
   $update_profile_name66 = $conn->prepare("UPDATE `tinventario` SET inven_valor_compra = ? WHERE inven_codigo = ?");
   $update_profile_name66->execute([$inven_valor_compra, $inven_codigo]);
   $update_profile_name7 = $conn->prepare("UPDATE `tinventario` SET inven_fecha_alta = ? WHERE inven_codigo = ?");
   $update_profile_name7->execute([$inven_fecha_alta, $inven_codigo]);
   $update_profile_name88 = $conn->prepare("UPDATE `tinventario` SET inven_valor_inicial = ? WHERE inven_codigo = ?");
   $update_profile_name88->execute([$inven_valor_inicial, $inven_codigo]);
   $update_profile_name9 = $conn->prepare("UPDATE `tinventario` SET inven_sede = ? WHERE inven_codigo = ?");
   $update_profile_name9->execute([$inven_sede, $inven_codigo]);
   $update_profile_name0 = $conn->prepare("UPDATE `tinventario` SET inven_pliego = ? WHERE inven_codigo = ?");
   $update_profile_name0->execute([$inven_pliego, $inven_codigo]);
   $update_profile_namea = $conn->prepare("UPDATE `tinventario` SET inven_ubicac_fisica = ? WHERE inven_codigo = ?");
   $update_profile_namea->execute([$inven_ubicac_fisica, $inven_codigo]);
   $update_profile_nameaa = $conn->prepare("UPDATE `tinventario` SET inven_nombre_item = ? WHERE inven_codigo = ?");
   $update_profile_nameaa->execute([$inven_nombre_item, $inven_codigo]);
   $update_profile_nameb = $conn->prepare("UPDATE `tinventario` SET inven_sec_ejec = ? WHERE inven_codigo = ?");
   $update_profile_nameb->execute([$inven_sec_ejec, $inven_codigo]);
   $update_profile_namebb = $conn->prepare("UPDATE `tinventario` SET inven_tipo_modalidad = ? WHERE inven_codigo = ?");
   $update_profile_namebb->execute([$inven_tipo_modalidad, $inven_codigo]);
   $update_profile_namec = $conn->prepare("UPDATE `tinventario` SET inven_codigo_barra = ? WHERE inven_codigo = ?");
   $update_profile_namec->execute([$inven_codigo_barra, $inven_codigo]);
   $update_profile_namecc = $conn->prepare("UPDATE `tinventario` SET inven_nro_orden = ? WHERE inven_codigo = ?");
   $update_profile_namecc->execute([$inven_nro_orden, $inven_codigo]);
   $update_profile_named = $conn->prepare("UPDATE `tinventario` SET inven_hvalor_neto = ? WHERE inven_codigo = ?");
   $update_profile_named->execute([$inven_hvalor_neto, $inven_codigo]);
   $update_profile_namedd = $conn->prepare("UPDATE `tinventario` SET inven_abrev_movimto = ? WHERE inven_codigo = ?");
   $update_profile_namedd->execute([$inven_abrev_movimto, $inven_codigo]);
   $update_profile_namee = $conn->prepare("UPDATE `tinventario` SET inven_secuencia = ? WHERE inven_codigo = ?");
   $update_profile_namee->execute([$inven_secuencia, $inven_codigo]);
   $update_profile_nameee = $conn->prepare("UPDATE `tinventario` SET inven_nro_documento = ? WHERE inven_codigo = ?");
   $update_profile_nameee->execute([$inven_nro_documento, $inven_codigo]);
   $update_profile_namef = $conn->prepare("UPDATE `tinventario` SET inven_flag_compartido = ? WHERE inven_codigo = ?");
   $update_profile_namef->execute([$inven_flag_compartido, $inven_codigo]);
   $update_profile_nameff = $conn->prepare("UPDATE `tinventario` SET inven_centro_costo = ? WHERE inven_codigo = ?");
   $update_profile_nameff->execute([$inven_centro_costo, $inven_codigo]);
   $update_profile_nameg = $conn->prepare("UPDATE `tinventario` SET inven_abreviatura = ? WHERE inven_codigo = ?");
   $update_profile_nameg->execute([$inven_abreviatura, $inven_codigo]);
   $update_profile_namegg = $conn->prepare("UPDATE `tinventario` SET inven_estado = ? WHERE inven_codigo = ?");
   $update_profile_namegg->execute([$inven_estado, $inven_codigo]);
   $update_profile_nameh = $conn->prepare("UPDATE `tinventario` SET inven_fecha_nea = ? WHERE inven_codigo = ?");
   $update_profile_nameh->execute([$inven_fecha_nea, $inven_codigo]);
   $update_profile_namehh = $conn->prepare("UPDATE `tinventario` SET inven_tipo_doc_refer = ? WHERE inven_codigo = ?");
   $update_profile_namehh->execute([$inven_tipo_doc_refer, $inven_codigo]);
   $update_profile_namer = $conn->prepare("UPDATE `tinventario` SET inven_sec_modelo = ? WHERE inven_codigo = ?");
   $update_profile_namer->execute([$inven_sec_modelo, $inven_codigo]);
   $update_profile_namerr = $conn->prepare("UPDATE `tinventario` SET inven_grupo_bien = ? WHERE inven_codigo = ?");
   $update_profile_namerr->execute([$inven_grupo_bien, $inven_codigo]);
   $update_profile_namet = $conn->prepare("UPDATE `tinventario` SET inven_clase_bien = ? WHERE inven_codigo = ?");
   $update_profile_namet->execute([$inven_clase_bien, $inven_codigo]);
   $update_profile_namett = $conn->prepare("UPDATE `tinventario` SET inven_familia_bien = ? WHERE inven_codigo = ?");
   $update_profile_namett->execute([$inven_familia_bien, $inven_codigo]);
   $update_profile_namew = $conn->prepare("UPDATE `tinventario` SET inven_item_bien = ? WHERE inven_codigo = ?");
   $update_profile_namew->execute([$inven_item_bien, $inven_codigo]);
   $update_profile_nameww = $conn->prepare("UPDATE `tinventario` SET inven_color = ? WHERE inven_codigo = ?");
   $update_profile_nameww->execute([$inven_color, $inven_codigo]);
   $update_profile_nameww = $conn->prepare("UPDATE `tinventario` SET inven_caracteristicas = ? WHERE inven_codigo = ?");
   $update_profile_nameww->execute([$inven_caracteristicas, $inven_codigo]);
   $update_profile_nameww = $conn->prepare("UPDATE `tinventario` SET inven_observaciones = ? WHERE inven_codigo = ?");
   $update_profile_nameww->execute([$inven_observaciones, $inven_codigo]);
   ?>
   <script>

      function confirmarRedireccion() {
         // Muestra el cuadro de confirmación
         var respuesta = confirm("actualización exitosa happy haching");

         // Si el usuario hizo clic en "Aceptar", redirige a index.php
         if (respuesta) {
            // Realiza la redirección usando el objeto location
            location.href = '../dashboard.php';
         } else {
            // Si el usuario hizo clic en "Cancelar" o cerró la ventana de confirmación
            // alert("Has cancelado la redirección.");
         }
      }
      confirmarRedireccion();

   </script>
   <?php

   ////////////////INSPECTION(START)////////////////////
   $select_products1 = $conn->prepare("SELECT * FROM `tadmin` WHERE tadmin_dni = ?");
   $select_products1->execute([$admin_id]);
   while ($row = $select_products1->fetch(PDO::FETCH_ASSOC)) {
      $insert_control1 = $conn->prepare("INSERT INTO `tcontrol`(Columnid, Columninspeccion, Columnname, Columntimes,dniUser) VALUES (?,?,?,?,?)");
      $insert_control1->execute(['0', 'ACTUALIZO EL VIEN:  ' . $inven_codigo . ' ->', $row['tadmin_nombre'], $fechaActual, $row['tadmin_dni'],]);
   }
   ////////////////INSPECTION(FINISH)////////////////////   exit();
} else {
   echo "no hay interferencia de red";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="admin_style.css">
</head>

<body>
   <section class="form-container">
      <?php
      $select_profile = $conn->prepare("SELECT * FROM `tinventario` WHERE inven_codigo = ?");
      $select_profile->execute([$inven_codigo]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
      ?>
      <form action="" method="post" class="row g-3 needs-validation">
         <h3>actualizar perfil usuario</h3>
         <h3>(verifique los datos antes de actualizar)</h3>

         <input type="hidden" name="prev_pass" value="<?= $fetch_profile['tadmin_password']; ?>">
         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Ingrese Nro. Código producto</label>
            <input type="number" class="form-control" name="inven_codigo"
               value="<?= $fetch_profile['inven_codigo']; ?>">
         </div>
         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Ingrese la Descripción</label>
            <textarea class="form-control" name="inven_descript"
               placeholder="&#xf1d8; description(max 150-caracteres)..."
               value="<?= $fetch_profile['inven_descript']; ?>" rows="1" maxlength="150"></textarea>
            <span id="mensajeError"></span>
         </div>
         <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Filial</label>
            <?php
            $valorSeleccionado = $fetch_profile['inven_nom'];
            ?>
            <select class="form-select estado" name="inven_nom" id="validationCustom02">
               <option value="UNAMBA - SEDE PRINCIPAL" <?php echo ($valorSeleccionado == 'UNAMBA - SEDE PRINCIPAL') ? 'selected' : ''; ?>>UNAMBA - SEDE PRINCIPAL</option>
               <option value="UNAMBA - SEDE HAQUIRA" <?php echo ($valorSeleccionado == 'UNAMBA - SEDE HAQUIRA') ? 'selected' : ''; ?>>UNAMBA - SEDE HAQUIRA </option>
               <option value="UNAMBA - SEDE TAMBOBAMBA" <?php echo ($valorSeleccionado == 'UNAMBA - SEDE TAMBOBAMBA') ? 'selected' : ''; ?>>UNAMBA - SEDE TAMBOBAMBA </option>
            </select>
         </div>
         <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Dependencia</label>
            <?php
            $valorSeleccionado2 = $fetch_profile['inven_nombre_depend'];
            ?>
            <select class="form-select estado" name="inven_nombre_depend" id="validationCustom02">
               <option name="SUB UNIDAD DE SEGURIDAD" value="SUB UNIDAD DE SEGURIDAD">SUB UNIDAD DE
                  SEGURIDAD</option>
               <option name="UNIDAD DE SERVICIO SOCIAL" value="UNIDAD DE SERVICIO SOCIAL">UNIDAD DE
                  SERVICIO SOCIAL</option>
               <option name="UNIDAD DE BIBLIOTECA CENTRAL" value="UNIDAD DE BIBLIOTECA CENTRAL">UNIDAD DE
                  BIBLIOTECA CENTRAL</option>
               <option name="CENTRO DE IDIOMAS" value="CENTRO DE IDIOMAS">
                  CENTRO DE IDIOMAS</option>
               <option name="E.P. DE EDUCACION INICIAL INTERCULTURAL" value="E.P. DE EDUCACION INICIAL INTERCULTURAL">
                  E.P. DE
                  EDUCACION INICIAL INTERCULTURAL
               </option>
               <option name="UNIDAD DE RECURSOS HUMANOS" value="UNIDAD DE RECURSOS HUMANOS">UNIDAD DE
                  RECURSOS HUMANOS
               </option>
               <option name="DIRECCION GENERAL DE ADMINISTRACION" value="DIRECCION GENERAL DE ADMINISTRACION">DIRECCION
                  GENERAL DE ADMINISTRACION</option>
               <option name="ESCUELA PROFESIONAL DE ADMINISTRACION" value="ESCUELA PROFESIONAL DE ADMINISTRACION">
                  ESCUELA
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

               <option name="ALMACEN CENTRAL" value="ALMACEN CENTRAL">ALMACEN
                  CENTRAL

               </option>
               <option name="CENTRO DE INFORMATICA" value="CENTRO DE INFORMATICA">CENTRO DE INFORMATICA

               </option>
               <option name="ESCUELA PROFESIONAL DE INGENIERIA INFOR" value="ESCUELA PROFESIONAL DE INGENIERIA INFOR">
                  ESCUELA
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
            <input type="text" class="form-control" name="inven_usuario" placeholder="&#xf162; 00001"
               value="<?= $fetch_profile['inven_usuario']; ?>">
         </div>
         <!-- //hiden -->
         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nombre Responsable</label>
            <input type="text" class="form-control" name="inven_responsable" placeholder="&#xf162; 00001"
               value="<?= $fetch_profile['inven_responsable']; ?>">
         </div>

         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nombre Proveedor</label>
            <input type="text" class="form-control" name="inven_nombre_prov" placeholder="&#xf162; 00001"
               value="<?= $fetch_profile['inven_nombre_prov']; ?>">
         </div>
         <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Fecha Compra</label>
            <input type="date" class="form-control" id="validationCustom03" name="inven_fecha_compra"
               value="<?= $fetch_profile['inven_fecha_compra']; ?>">
         </div>
         <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Valor Compra(dos decimales) ejeplo: 100000.00</label>
            <input type="number" class="form-control" id="validationCustom03" name="inven_valor_compra"
               value="<?= $fetch_profile['inven_valor_compra']; ?>">
         </div>

         <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Fecha de Alta</label>
            <input type="date" class="form-control" id="validationCustom03" name="inven_fecha_alta"
               value="<?= $fetch_profile['inven_fecha_alta']; ?>">
         </div>
         <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Valor Inicial(dos decimales) ejeplo: 100000.00</label>
            <input type="number" class="form-control" id="validationCustom03" name="inven_valor_inicial"
               value="<?= $fetch_profile['inven_valor_inicial']; ?>">
         </div>
         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Sede</label>
            <input type="text" class="form-control" name="inven_sede" placeholder="&#xf162; 00001"
               value="<?= $fetch_profile['inven_sede']; ?>">
         </div>

         <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Pliego</label>
            <input type="number" class="form-control" id="validationCustom03" name="inven_pliego"
               value="<?= $fetch_profile['inven_pliego']; ?>">
         </div>
         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Uvicacion Fisica</label>
            <input type="text" class="form-control" name="inven_ubicac_fisica" placeholder="&#xf162; 00001"
               value="<?= $fetch_profile['inven_ubicac_fisica']; ?>">
         </div>

         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nobre Item</label>
            <input type="text" class="form-control" name="inven_nombre_item" placeholder="&#xf162; 00001"
               value="<?= $fetch_profile['inven_nombre_item']; ?>">
         </div>

         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Sec Ejec</label>
            <input type="number" class="form-control" name="inven_sec_ejec" placeholder="&#xf162; 00001"
               value="<?= $fetch_profile['inven_sec_ejec']; ?>">
         </div>

         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Tipo Modalidad</label>
            <input type="number" class="form-control" name="inven_tipo_modalidad" placeholder="&#xf162; 00001"
               value="<?= $fetch_profile['inven_tipo_modalidad']; ?>">
         </div>

         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Codigode Barras (opcional)</label>
            <input type="number" class="form-control" name="inven_codigo_barra" placeholder="&#xf162; 00001"
               value="<?= $fetch_profile['inven_codigo_barra']; ?>">
         </div>

         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Modelo</label>
            <input type="text" class="form-control" name="inven_modelo" placeholder="&#xf162; 00001"
               value="<?= $fetch_profile['inven_modelo']; ?>">
         </div>

         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Numero de orden</label>
            <input type="number" class="form-control" name="inven_nro_orden" placeholder="&#xf162; 00001">
            value="
            <?= $fetch_profile['inven_nro_orden']; ?>"
         </div>

         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Dimencion -medida</label>
            <input type="text" class="form-control" name="inven_medidas" placeholder="&#xf162; 00001"
               value="<?= $fetch_profile['inven_medidas']; ?>">

         </div>
         <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Valor Neto(dos decimales) ejeplo: 100000.00</label>
            <input type="number" class="form-control" id="validationCustom03" name="inven_hvalor_neto"
               value="<?= $fetch_profile['inven_hvalor_neto']; ?>">
         </div>
         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Abreviacion de Movimientos</label>
            <textarea class="form-control" name="inven_abrev_movimto" placeholder="description(max 300-caracteres)..."
               value="<?= $fetch_profile['inven_abrev_movimto']; ?>" rows="1" maxlength="300"></textarea>
            <span id="mensajeError"></span>
         </div>
         <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Nº secuencia</label>
            <input type="text" class="form-control" id="validationCustom03" name="inven_secuencia"
               value="<?= $fetch_profile['inven_secuencia']; ?>">
         </div>
         <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Nº documento</label>
            <input type="number" class="form-control" id="validationCustom03" name="inven_nro_documento"
               value="<?= $fetch_profile['inven_nro_documento']; ?>">
         </div>
         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">flag compartido (opcional)</label>
            <input type="text" class="form-control" name="inven_flag_compartido" placeholder="&#xf162; 00001">
            value="
            <?= $fetch_profile['inven_flag_compartido']; ?>"
         </div>
         <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Marca</label>
            <input type="text" class="form-control" id="validationCustom03" name="inven_centro_costo"
               value="<?= $fetch_profile['inven_centro_costo']; ?>">
         </div>

         <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Centro Costo(dos decimales) ejeplo: 100000.00</label>
            <input type="number" class="form-control" id="validationCustom03" name="inven_abreviatura"
               value="<?= $fetch_profile['inven_abreviatura']; ?>">
         </div>

         <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Estado</label>
            <select class="form-select estado" name="inven_estado" id="validationCustom02">
               <option value="<?= $fetch_profile['tadmin_password']; ?>Malo">Malo</option>
               <option value="<?= $fetch_profile['tadmin_password']; ?>Bueno">Bueno</option>
               <option value="<?= $fetch_profile['tadmin_password']; ?>Regular">Regular</option>
            </select>
         </div>
         <!-- falta una abreviaturacon triger   -->
         <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Fecha de nea (opcional)</label>
            <input type="date" class="form-control" id="validationCustom03" name="inven_fecha_nea"
               value="<?= $fetch_profile['inven_fecha_nea']; ?>">
         </div>
         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Tipo documento referencia</label>
            <input type="number" class="form-control" name="inven_tipo_doc_refer" placeholder="&#xf162; 00001"
               value="<?= $fetch_profile['inven_tipo_doc_refer']; ?>">
         </div>
         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">inventario seccion modelo(opcional)</label>
            <input type="text" class="form-control" name="inven_sec_modelo" placeholder="&#xf162; 00001">
            value="
            <?= $fetch_profile['inven_sec_modelo']; ?>"
         </div>
         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Num serie</label>
            <input type="number" class="form-control" name="inven_grupo_bien" placeholder="&#xf162; 00001"
               value="<?= $fetch_profile['inven_grupo_bien']; ?>">
         </div>

         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Num clase bien</label>
            <input type="number" class="form-control" name="inven_clase_bien" placeholder="&#xf162; 00001"
               value="<?= $fetch_profile['inven_clase_bien']; ?>">
         </div>
         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Num faimlia Bien</label>
            <input type="number" class="form-control" name="inven_familia_bien" placeholder="&#xf162; 00001"
               value="<?= $fetch_profile['inven_familia_bien']; ?>">
         </div>
         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Num item Bien</label>
            <input type="number" class="form-control" name="inven_item_bien" placeholder="&#xf162; 00001"
               value="<?= $fetch_profile['inven_item_bien']; ?>">
         </div>
         <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Color</label>
            <input type="text" class="form-control" id="validationCustom03" name="inven_color"
               value="<?= $fetch_profile['inven_color']; ?>">
         </div>
         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Caracteristicas</label>
            <textarea class="form-control" name="inven_caracteristicas"
               placeholder="&#xf1d8; description(max 500-caracteres)..."
               value="<?= $fetch_profile['inven_caracteristicas']; ?>" rows="2" maxlength="500"></textarea>
         </div>
         <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Observaciones</label>
            <textarea class="form-control" name="inven_observaciones"
               placeholder="&#xf1d8; description(max 500-caracteres)..."
               value="<?= $fetch_profile['inven_observaciones']; ?>" rows="2" maxlength="500"></textarea>
         </div>

         <input type="submit" value="regresar" class="btn" name="regresar">

         <input type="submit" value="actualizar" class="btn" name="submit">

      </form>
   </section>
   <script src="../js/admin_script.js"></script>
</body>

</html>