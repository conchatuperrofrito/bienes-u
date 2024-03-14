<?php
include("../../conneccion/dbUnamba.php");
session_start();
$fechaActual = date('Y-m-d H:i:s');
$admin_id = $_SESSION['dni'];
if (!isset($admin_id)) {
    header('location:../../dashboard/admin_login.php');
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["inven_codigo"])) {
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


    $select_products1 = $conn->prepare("SELECT * FROM `tinventario` WHERE inven_codigo = ?");
    $select_products1->execute([$inven_codigo]);
    $fetch_profile1 = $select_products1->fetch(PDO::FETCH_ASSOC);


    if ($select_products1->rowCount() > 0 and $fetch_profile1['inven_codigo'] != '') {
        echo '<script>
        var mensaje = "la cotizacion ya esta registrada.";
        if (confirm(mensaje)) {
            window.location.href = "../../dashboard/dashboard.php";
        }
      </script>';
        exit;
    }
    // Insertar datos en la base de datos
    $query = "INSERT INTO tinventario (
        inven_codigo, 
        inven_descript,
        inven_nom,
        inven_nombre_depend,
        inven_usuario,
        inven_responsable,
        inven_nombre_prov,
        inven_fecha_compra,
        inven_valor_compra,
        inven_fecha_alta,
        inven_valor_inicial,
        inven_sede,
        inven_pliego,
        inven_ubicac_fisica,
        inven_nombre_item,
        inven_sec_ejec,
        inven_tipo_modalidad,
        inven_codigo_barra,
        inven_modelo,
        inven_nro_orden,
        inven_medidas,
        inven_hvalor_neto,
        inven_abrev_movimto,
        inven_secuencia,
        inven_nro_documento,
        inven_flag_compartido,
        inven_centro_costo,
        inven_estado,
        inven_fecha_nea,
        inven_tipo_doc_refer,
        inven_sec_modelo,
        inven_grupo_bien,
        inven_clase_bien,
        inven_item_bien,
        inven_familia_bien,
        inven_color,
        inven_caracteristicas,
        inven_observaciones,
             ) VALUES ('$inven_codigo', 
        '$inven_descript',
        '$inven_nom',
        '$inven_nombre_depend',
        '$inven_usuario',
        '$inven_responsable',
        '$inven_nombre_prov',
        '$inven_fecha_compra',
        '$inven_valor_compra',
        '$inven_fecha_alta',
        '$inven_valor_inicial',
        '$inven_sede',
        '$inven_pliego',
        '$inven_ubicac_fisica',
        '$inven_nombre_item',
        '$inven_sec_ejec',
        '$inven_tipo_modalidad',
        '$inven_codigo_barra',
        '$inven_modelo',
        '$inven_nro_orden',
        '$inven_medidas',
        '$inven_hvalor_neto',
        '$inven_abrev_movimto',
        '$inven_secuencia',
        '$inven_nro_documento',
        '$inven_flag_compartido',
        '$inven_centro_costo',
        '$inven_estado',
        '$inven_fecha_nea',
        '$inven_tipo_doc_refer',
        '$inven_sec_modelo',
        '$inven_grupo_bien',
        '$inven_clase_bien',
        '$inven_item_bien',
        '$inven_familia_bien',
        '$inven_color',
        '$inven_caracteristicas',
        '$inven_observaciones')";
    $resultado = $conn->query($query);
    // 38 
    if ($resultado) {
        ////////////////INSPECTION(START)////////////////////
        $select_products = $conn->prepare("SELECT * FROM `tadmin` WHERE tadmin_dni = ?");
        $select_products->execute([$admin_id]);
        while ($row = $select_products->fetch(PDO::FETCH_ASSOC)) {
            $insert_control = $conn->prepare("INSERT INTO `tcontrol`(Columnid, Columninspeccion, Columnname, Columntimes,dniUser) VALUES (?,?,?,?,?)");
            $insert_control->execute(['0', 'AGREGO UN VIEN :' . $inven_codigo, $row['tadmin_nombre'], $fechaActual, $row['tadmin_dni'],]);
        }
        ////////////////INSPECTION(FINISH)////////////////////

        header('Location: ../../dashboard/dashboard.php');
        exit;
    } else {
        $message[] = 'archivo muy pesado!';
        echo ($message3);
    }
} else {
    echo "ahorror!";
    $message[] = 'ahorror!';
    ?>
    <script>     console.log(<?php $message[] = 'ahorror!'; ?>);
    </script>
    <?php
}
