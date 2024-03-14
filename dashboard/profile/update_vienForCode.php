<?php
include("../../conneccion/dbUnamba.php");
session_start();
$fechaActual = date('Y-m-d H:i:s');
$admin_id = $_SESSION['dni'];

$inven_codigo = $_GET['idDni'];
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
   $inven_nombre = $_POST['inven_nombre'];
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
   $inven_nro_serie = $_POST['inven_nro_serie'];
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

   $update_profile_name1 = $conn->prepare("UPDATE `tinventario` SET inven_nro_serie = ? WHERE inven_codigo = ?");
   $update_profile_name1->execute([$inven_nro_serie, $inven_codigo]);
   $update_profile_name1 = $conn->prepare("UPDATE `tinventario` SET inven_nombre = ? WHERE inven_codigo = ?");
   $update_profile_name1->execute([$inven_nombre, $inven_codigo]);
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
   <style>
      .nombresUpdate {
         font-size: x-large;
      }
   </style>
   <section class="form-container">
      <?php
      $select_profile = $conn->prepare("SELECT * FROM `tinventario` WHERE inven_codigo = ?");
      $select_profile->execute([$inven_codigo]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
      ?>
      <form action="" method="post" class="row g-3 needs-validation">
         <h3>actualizar perfil usuario</h3>
         <h3>(verifique los datos antes de actualizar)</h3>


         <input type="hidden" class="box" name="inven_codigo" value="<?= $fetch_profile['inven_codigo']; ?>">


         <label for="validationCustom01" class="nombresUpdate">Ingrese la Descripción</label>
         <input type="text" class="box" name="inven_descript" value="<?= $fetch_profile['inven_descript']; ?>" rows="2"
            maxlength="150"></input>
         <span id="mensajeError"></span>


         <label for="validationCustom02" class="nombresUpdate">Filial</label>
         <?php
         $valorSeleccionado = $fetch_profile['inven_nom'];
         ?>
         <select class="form-select estado" name="inven_nom" id="validationCustom02">
            <option value="UNAMBA - SEDE PRINCIPAL" <?php echo ($valorSeleccionado == 'UNAMBA - SEDE PRINCIPAL') ? 'selected' : ''; ?>>UNAMBA - SEDE PRINCIPAL</option>
            <option value="UNAMBA - SEDE HAQUIRA" <?php echo ($valorSeleccionado == 'UNAMBA - SEDE HAQUIRA') ? 'selected' : ''; ?>>UNAMBA - SEDE HAQUIRA </option>
            <option value="UNAMBA - SEDE TAMBOBAMBA" <?php echo ($valorSeleccionado == 'UNAMBA - SEDE TAMBOBAMBA') ? 'selected' : ''; ?>>UNAMBA - SEDE TAMBOBAMBA </option>
         </select>


         <label for="validationCustom02" class="nombresUpdate">Dependencia</label>
         <?php
         $valorSeleccionado2 = $fetch_profile['inven_nombre_depend'];
         ?>
         <select class="form-select estado" name="inven_nombre_depend" id="validationCustom02">
            <option value="SUB UNIDAD DE SEGURIDAD" <?php echo ($valorSeleccionado2 == 'SUB UNIDAD DE SEGURIDAD') ? 'selected' : ''; ?>>SUB UNIDAD DE
               SEGURIDAD</option>
            <option value="UNIDAD DE SERVICIO SOCIAL" <?php echo ($valorSeleccionado2 == 'UNIDAD DE SERVICIO SOCIAL') ? 'selected' : ''; ?>>UNIDAD DE
               SERVICIO SOCIAL</option>
            <option value="UNIDAD DE BIBLIOTECA CENTRAL" <?php echo ($valorSeleccionado2 == 'UNIDAD DE BIBLIOTECA CENTRAL') ? 'selected' : ''; ?>>UNIDAD DE
               BIBLIOTECA CENTRAL</option>
            <option value="CENTRO DE IDIOMAS" <?php echo ($valorSeleccionado2 == 'CENTRO DE IDIOMAS') ? 'selected' : ''; ?>>
               CENTRO DE IDIOMAS</option>
            <option value="E.P. DE EDUCACION INICIAL INTERCULTURAL" <?php echo ($valorSeleccionado2 == 'E.P. DE EDUCACION INICIAL INTERCULTURAL') ? 'selected' : ''; ?>>
               E.P. DE
               EDUCACION INICIAL INTERCULTURAL
            </option>
            <option value="UNIDAD DE RECURSOS HUMANOS" <?php echo ($valorSeleccionado2 == 'UNIDAD DE RECURSOS HUMANOS') ? 'selected' : ''; ?>>UNIDAD DE
               RECURSOS HUMANOS
            </option>
            <option value="DIRECCION GENERAL DE ADMINISTRACION" <?php echo ($valorSeleccionado2 == 'DIRECCION GENERAL DE ADMINISTRACION') ? 'selected' : ''; ?>>DIRECCION
               GENERAL DE ADMINISTRACION</option>
            <option value="ESCUELA PROFESIONAL DE ADMINISTRACION" <?php echo ($valorSeleccionado2 == 'ESCUELA PROFESIONAL DE ADMINISTRACION') ? 'selected' : ''; ?>>
               ESCUELA
               PROFESIONAL DE ADMINISTRACION
            </option>
            <option value="DECANATO DE LA FACULTAD DE ADMINISTRACIO" <?php echo ($valorSeleccionado2 == 'DECANATO DE LA FACULTAD DE ADMINISTRACIO') ? 'selected' : ''; ?>>
               DECANATO DE LA FACULTAD DE
               ADMINISTRACIO</option>
            <option value="UNIDAD DE CONTROL PATRIMONIAL" <?php echo ($valorSeleccionado2 == 'UNIDAD DE CONTROL PATRIMONIAL') ? 'selected' : ''; ?>>UNIDAD DE
               CONTROL PATRIMONIAL
            </option>
            <option value="UNIDAD DE CENTRO MEDICO" <?php echo ($valorSeleccionado2 == 'UNIDAD DE CENTRO MEDICO') ? 'selected' : ''; ?>>UNIDAD DE CENTRO
               MEDICO
            </option>
            <option value="RECTORADO" <?php echo ($valorSeleccionado2 == 'RECTORADO') ? 'selected' : ''; ?>>RECTORADO
            </option>
            <option value="VICE RECTORADO DE INVESTIGACION" <?php echo ($valorSeleccionado2 == 'VICE RECTORADO DE INVESTIGACION') ? 'selected' : ''; ?>>VICE
               RECTORADO DE INVESTIGACION
            </option>

            <option value="ALMACEN CENTRAL" <?php echo ($valorSeleccionado2 == 'ALMACEN CENTRAL') ? 'selected' : ''; ?>>
               ALMACEN
               CENTRAL

            </option>
            <option value="CENTRO DE INFORMATICA" <?php echo ($valorSeleccionado2 == 'CENTRO DE INFORMATICA') ? 'selected' : ''; ?>>CENTRO DE INFORMATICA

            </option>
            <option value="ESCUELA PROFESIONAL DE INGENIERIA INFOR" <?php echo ($valorSeleccionado2 == 'UESCUELA PROFESIONAL DE INGENIERIA INFOR') ? 'selected' : ''; ?>>
               ESCUELA
               PROFESIONAL DE INGENIERIA INFOR

            </option>
            <option value="UNIDAD CENTROS EXPERIMENTALES" <?php echo ($valorSeleccionado2 == 'UNIDAD CENTROS EXPERIMENTALES') ? 'selected' : ''; ?>>UNIDAD
               CENTROS EXPERIMENTALES

            </option>
            <option value="UNIDAD DE SERVICIOS GENERALES" <?php echo ($valorSeleccionado2 == 'UNIDAD DE SERVICIOS GENERALES') ? 'selected' : ''; ?>>UNIDAD DE
               SERVICIOS GENERALES
            </option>
            <option value="UNIDAD DE SERVICIOS GENERALES" <?php echo ($valorSeleccionado2 == 'UNIDAD DE SERVICIOS GENERALES') ? 'selected' : ''; ?>>DIRECCION
               DE PRODUCCION DE BIENES Y SERV
            </option>
            <option value="ESCUELA PROFESIONAL DE INGENIERIA CIVIL" <?php echo ($valorSeleccionado2 == 'ESCUELA PROFESIONAL DE INGENIERIA CIVIL') ? 'selected' : ''; ?>>ESCUELA PROFESIONAL DE INGENIERIA CIVIL
            </option>
            <option value="UNIDAD EJECUTORA DE INVERSIONES" <?php echo ($valorSeleccionado2 == 'UNIDAD EJECUTORA DE INVERSIONES') ? 'selected' : ''; ?>>UNIDAD EJECUTORA DE INVERSIONES
            </option>
            <option value="ESCUELA PROFESIONAL DE INGENIERIA DE MI" <?php echo ($valorSeleccionado2 == 'ESCUELA PROFESIONAL DE INGENIERIA DE MI') ? 'selected' : ''; ?>>ESCUELA PROFESIONAL DE INGENIERIA DE MI
            </option>
            <option value="ESCUELA PROFESIONAL DE AGROECOLOGIA Y D" <?php echo ($valorSeleccionado2 == 'ESCUELA PROFESIONAL DE AGROECOLOGIA Y D') ? 'selected' : ''; ?>>ESCUELA PROFESIONAL DE AGROECOLOGIA Y D
            </option>
            <option value="ESCUELA PROFESIONAL DE INGENIERIA AGROI" <?php echo ($valorSeleccionado2 == 'ESCUELA PROFESIONAL DE INGENIERIA AGROI') ? 'selected' : ''; ?>>ESCUELA PROFESIONAL DE INGENIERIA AGROI
            </option>
            <option value="ESCUELA PROFESIONAL DE MEDICINA VETERINA" <?php echo ($valorSeleccionado2 == 'ESCUELA PROFESIONAL DE MEDICINA VETERINA') ? 'selected' : ''; ?>>ESCUELA PROFESIONAL DE MEDICINA VETERINA
            </option>
         </select>

         <!-- //hiden usuariio-->

         <label for="validationCustom01" class="nombresUpdate">Nombre Usuario</label>
         <input type="text" class="box" name="inven_usuario" value="<?= $fetch_profile['inven_usuario']; ?>">

         <!-- //hiden -->

         <label for="validationCustom01" class="nombresUpdate">Nombre Responsable</label>
         <input type="text" class="box" name="inven_responsable" value="<?= $fetch_profile['inven_responsable']; ?>">



         <label for="validationCustom01" class="nombresUpdate">Nombre Proveedor</label>
         <input type="text" class="box" name="inven_nombre_prov" value="<?= $fetch_profile['inven_nombre_prov']; ?>">


         <label for="validationCustom03" class="nombresUpdate">Fecha Compra</label>
         <input type="date" class="box" id="validationCustom03" name="inven_fecha_compra"
            value="<?= $fetch_profile['inven_fecha_compra']; ?>">


         <label for="validationCustom03" class="nombresUpdate">Valor Compra(dos decimales) ejeplo: 100000.00</label>
         <input type="number" class="box" id="validationCustom03" name="inven_valor_compra"
            value="<?= $fetch_profile['inven_valor_compra']; ?>">



         <label for="validationCustom03" class="nombresUpdate">Fecha de Alta</label>
         <input type="date" class="box" id="validationCustom03" name="inven_fecha_alta"
            value="<?= $fetch_profile['inven_fecha_alta']; ?>">


         <label for="validationCustom03" class="nombresUpdate">Valor Inicial(dos decimales) ejeplo: 100000.00</label>
         <input type="number" class="box" id="validationCustom03" name="inven_valor_inicial"
            value="<?= $fetch_profile['inven_valor_inicial']; ?>">


         <label for="validationCustom01" class="nombresUpdate">Sede</label>
         <input type="text" class="box" name="inven_sede" value="<?= $fetch_profile['inven_sede']; ?>">


         <div class=" col-md-4">
            <label for="validationCustom03" class="nombresUpdate">Pliego</label>
            <input type="number" class="box" id="validationCustom03" name="inven_pliego"
               value="<?= $fetch_profile['inven_pliego']; ?>">


            <label for="validationCustom01" class="nombresUpdate">Uvicacion Fisica</label>
            <input type="text" class="box" name="inven_ubicac_fisica"
               value="<?= $fetch_profile['inven_ubicac_fisica']; ?>">



            <label for="validationCustom01" class="nombresUpdate">Nobre Item</label>
            <input type="text" class="box" name="inven_nombre_item" value="<?= $fetch_profile['inven_nombre_item']; ?>">



            <label for="validationCustom01" class="nombresUpdate">Sec Ejec</label>
            <input type="number" class="box" name="inven_sec_ejec" value="<?= $fetch_profile['inven_sec_ejec']; ?>">



            <label for="validationCustom01" class="nombresUpdate">Tipo Modalidad</label>
            <input type="number" class="box" name="inven_tipo_modalidad"
               value="<?= $fetch_profile['inven_tipo_modalidad']; ?>">



            <label for="validationCustom01" class="nombresUpdate">Codigode Barras (opcional)</label>
            <input type="number" class="box" name="inven_codigo_barra"
               value="<?= $fetch_profile['inven_codigo_barra']; ?>">



            <label for="validationCustom01" class="nombresUpdate">Modelo</label>
            <input type="text" class="box" name="inven_modelo" value="<?= $fetch_profile['inven_modelo']; ?>">
            <label for="validationCustom01" class="nombresUpdate">Serie</label>
            <input type="text" class="box" name="inven_nro_serie" value="<?= $fetch_profile['inven_nro_serie']; ?>">

            <div class=" col-md-4">
               <label for="validationCustom01" class="nombresUpdate">Numero de orden</label>
               <input type="number" class="box" name="inven_nro_orden"
                  value="<?= $fetch_profile['inven_nro_orden']; ?>">




               <label for="validationCustom01" class="nombresUpdate">Dimencion -medida</label>
               <input type="text" class="box" name="inven_medidas" value="<?= $fetch_profile['inven_medidas']; ?>">



               <label for="validationCustom03" class="nombresUpdate">Valor Neto(dos decimales) ejeplo: 100000.00</label>
               <input type="number" class="box" id="validationCustom03" name="inven_hvalor_neto"
                  value="<?= $fetch_profile['inven_hvalor_neto']; ?>">


               <label for="validationCustom01" class="nombresUpdate">Abreviacion de Movimientos</label>
               <textarea class="box" name="inven_abrev_movimto" value="<?= $fetch_profile['inven_abrev_movimto']; ?>"
                  rows="1" maxlength="300"></textarea>
               <span id="mensajeError"></span>


               <label for="validationCustom03" class="nombresUpdate">Nº secuencia</label>
               <input type="text" class="box" id="validationCustom03" name="inven_secuencia"
                  value="<?= $fetch_profile['inven_secuencia']; ?>">


               <label for="validationCustom03" class="nombresUpdate">Nº documento</label>
               <input type="number" class="box" id="validationCustom03" name="inven_nro_documento"
                  value="<?= $fetch_profile['inven_nro_documento']; ?>">


               <label for="validationCustom01" class="nombresUpdate">flag compartido (opcional)</label>
               <input type="text" class="box" name="inven_flag_compartido"
                  value="<?= $fetch_profile['inven_flag_compartido']; ?>">



               <label for="validationCustom03" class="nombresUpdate">Marca</label>
               <input type="text" class="box" id="validationCustom03" name="inven_nombre"
                  value="<?= $fetch_profile['inven_nombre']; ?>">

               <label for="validationCustom03" class="nombresUpdate">Abreviatura</label>
               <input type="text" class="box" id="validationCustom03" name="inven_abreviatura"
                  value="<?= $fetch_profile['inven_abreviatura']; ?>">

               <label for="validationCustom03" class="nombresUpdate">Centro Costo(dos decimales) ejeplo:
                  100000.00</label>
               <input type="number" class="box" id="validationCustom03" name="inven_centro_costo"
                  value="<?= $fetch_profile['inven_centro_costo']; ?>">

               <?php
               // Supongamos que este valor viene de la base de datos.
               $valorSeleccionado3 = $fetch_profile['inven_estado'];
               ?>

               <label for="validationCustom02" class="nombresUpdate">Estado</label>
               <select class="form-select estado" name="inven_estado" id="validationCustom02">
                  <option value="Malo" <?php echo ($valorSeleccionado3 == 'Malo') ? 'selected' : ''; ?>>Malo</option>
                  <option value="Bueno" <?php echo ($valorSeleccionado3 == 'Bueno') ? 'selected' : ''; ?>>Bueno</option>
                  <option value="Regular" <?php echo ($valorSeleccionado3 == 'Regular') ? 'selected' : ''; ?>>Regular
                  </option>
               </select>

               <!-- falta una abreviaturacon triger   -->

               <label for="validationCustom03" class="nombresUpdate">Fecha de nea (opcional)</label>
               <input type="date" class="box" id="validationCustom03" name="inven_fecha_nea"
                  value="<?= $fetch_profile['inven_fecha_nea']; ?>">


               <label for="validationCustom01" class="nombresUpdate">Tipo documento referencia</label>
               <input type="number" class="box" name="inven_tipo_doc_refer"
                  value="<?= $fetch_profile['inven_tipo_doc_refer']; ?>">


               <label for="validationCustom01" class="nombresUpdate">inventario seccion modelo(opcional)</label>
               <input type="text" class="box" name="inven_sec_modelo" value="
               <?= $fetch_profile['inven_sec_modelo']; ?>">



               <label for="validationCustom01" class="nombresUpdate">Num serie</label>
               <input type="number" class="box" name="inven_grupo_bien"
                  value="<?= $fetch_profile['inven_grupo_bien']; ?>">



               <label for="validationCustom01" class="nombresUpdate">Num clase bien</label>
               <input type="number" class="box" name="inven_clase_bien"
                  value="<?= $fetch_profile['inven_clase_bien']; ?>">


               <label for="validationCustom01" class="nombresUpdate">Num faimlia Bien</label>
               <input type="number" class="box" name="inven_familia_bien"
                  value="<?= $fetch_profile['inven_familia_bien']; ?>">


               <label for="validationCustom01" class="nombresUpdate">Num item Bien</label>
               <input type="number" class="box" name="inven_item_bien"
                  value="<?= $fetch_profile['inven_item_bien']; ?>">


               <label for="validationCustom03" class="nombresUpdate">Color</label>
               <input type="text" class="box" id="validationCustom03" name="inven_color"
                  value="<?= $fetch_profile['inven_color']; ?>">


               <label for="validationCustom01" class="nombresUpdate">Caracteristicas</label>
               <input type="text" class="box" name="inven_caracteristicas"
                  value="<?= $fetch_profile['inven_caracteristicas']; ?>" rows="2" maxlength="500"></input>


               <label for="validationCustom01" class="nombresUpdate">Observaciones</label>
               <input type="text" class="box" name="inven_observaciones"
                  value="<?= $fetch_profile['inven_observaciones']; ?>" rows="2" maxlength="500"></input>


               <input type="submit" value="regresar" class="btn" name="regresar">

               <input type="submit" value="actualizar" class="btn" name="submit">

      </form>
   </section>
   <script src="../js/admin_script.js"></script>
</body>

</html>