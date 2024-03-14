<?php
require '../conneccion/config.php';
$resultado1 = null;
$columns1 = ['inven_codigo', 'inven_descript', 'inven_nom', 'inven_nombre_depend', 'inven_usuario', 'inven_responsable', 'inven_nombre_prov', 'inven_fecha_compra', 'inven_valor_compra', 'inven_fecha_alta', 'inven_valor_inicial', 'inven_sede', 'inven_pliego', 'inven_ubicac_fisica', 'inven_nombre_item', 'inven_sec_ejec', 'inven_tipo_modalidad', 'inven_codigo_barra', 'inven_modelo', 'inven_nro_orden', 'inven_medidas', 'inven_hvalor_neto', 'inven_abrev_movimto', 'inven_secuencia', 'inven_nro_documento', 'inven_flag_compartido', 'inven_nombre', 'inven_centro_costo', 'inven_estado', 'inven_abreviatura', 'inven_fecha_nea', 'inven_tipo_doc_refer', 'inven_sec_modelo', 'inven_nro_serie', 'inven_grupo_bien', 'inven_clase_bien', 'inven_familia_bien', 'inven_item_bien', 'inven_color', 'inven_caracteristicas', 'inven_observaciones'];
$columnsa1 = ['inven_codigo', 'inven_descript', 'inven_nom', 'inven_nombre_depend', 'inven_usuario', 'inven_responsable', 'inven_nombre_prov', 'inven_fecha_compra', 'inven_valor_compra', 'inven_fecha_alta', 'inven_valor_inicial', 'inven_sede', 'inven_pliego', 'inven_ubicac_fisica', 'inven_nombre_item', 'inven_sec_ejec', 'inven_tipo_modalidad', 'inven_codigo_barra', 'inven_modelo', 'inven_nro_orden', 'inven_medidas', 'inven_hvalor_neto', 'inven_abrev_movimto', 'inven_secuencia', 'inven_nro_documento', 'inven_flag_compartido', 'inven_nombre', 'inven_centro_costo', 'inven_estado', 'inven_abreviatura', 'inven_fecha_nea', 'inven_tipo_doc_refer', 'inven_sec_modelo', 'inven_nro_serie', 'inven_grupo_bien', 'inven_clase_bien', 'inven_familia_bien', 'inven_item_bien', 'inven_color', 'inven_caracteristicas', 'inven_observaciones'];
$columnsb1 = ['inven_codigo', 'inven_descript', 'inven_nom', 'inven_nombre_depend', 'inven_usuario', 'inven_responsable', 'inven_nombre_prov', 'inven_fecha_compra', 'inven_valor_compra', 'inven_fecha_alta', 'inven_valor_inicial', 'inven_sede', 'inven_pliego', 'inven_ubicac_fisica', 'inven_nombre_item', 'inven_sec_ejec', 'inven_tipo_modalidad', 'inven_codigo_barra', 'inven_modelo', 'inven_nro_orden', 'inven_medidas', 'inven_hvalor_neto', 'inven_abrev_movimto', 'inven_secuencia', 'inven_nro_documento', 'inven_flag_compartido', 'inven_nombre', 'inven_centro_costo', 'inven_estado', 'inven_abreviatura', 'inven_fecha_nea', 'inven_tipo_doc_refer', 'inven_sec_modelo', 'inven_nro_serie', 'inven_grupo_bien', 'inven_clase_bien', 'inven_familia_bien', 'inven_item_bien', 'inven_color', 'inven_caracteristicas', 'inven_observaciones'];

$table1 = "tinventario";
$id1 = 'inven_codigo ';
$campo1 = isset($_POST['campo1']) ? $conn->real_escape_string($_POST['campo1']) : null;
$optiona1 = isset($_POST['optiona1']) ? $conn->real_escape_string($_POST['optiona1']) : null;
$optionb1 = isset($_POST['optionb1']) ? $conn->real_escape_string($_POST['optionb1']) : null;
$optionc = isset($_POST['optionc']) ? $conn->real_escape_string($_POST['optionc']) : null;
/* Filtrado */
$where1 = '';
// SELECT * FROM empleados WHERE( nombre LIKE '%Chirstian%' OR apellido LIKE '%Chirstian%')
if ($campo1 != null) {
    $where1 = "WHERE (";
    // $cont=5 
    $cont = count($columns1);
    // 5 VECES 
    for ($i = 0; $i < $cont; $i++) {
        $where1 .= $columns1[$i] . " LIKE '%" . $campo1 . "%' OR ";
    }
    $where1 = substr_replace($where1, "", -3);

    $where1 .= ")";
}
// $where1 = '';
if ($optiona1 != null) {
    $where1 = "WHERE (";
    // $cont=5 
    $conta = count($columns1);
    // 5 VECES 
    for ($ia = 0; $ia < $conta; $ia++) {
        $where1 .= $columns1[$ia] . " LIKE '%" . $optiona1 . "%' OR ";
    }
    $where1 = substr_replace($where1, "", -3);

    $where1 .= ")";
}

if ($optionb1 != null) {
    $where1 = "WHERE (";
    // $cont=5 
    $contb = count($columns1);
    // 5 VECES 
    for ($ib = 0; $ib < $contb; $ib++) {
        $where1 .= $columns1[$ib] . " LIKE '%" . $optionb1 . "%' OR ";
    }
    $where1 = substr_replace($where1, "", -3);

    $where1 .= ")";
}
if ($optionc != null) {
    $where1 = "WHERE (";
    // $cont=5 
    $contb = count($columns1);
    // 5 VECES 
    for ($ib = 0; $ib < $contb; $ib++) {
        $where1 .= $columns1[$ib] . " LIKE '%" . $optionc . "%' OR ";
    }
    $where1 = substr_replace($where1, "", -3);

    $where1 .= ")";
}

/* Limit */
$limit1 = isset($_POST['registros']) ? $conn->real_escape_string($_POST['registros']) : 10;
$pagina1 = isset($_POST['pagina']) ? $conn->real_escape_string($_POST['pagina']) : 0;

if (!$pagina1) {
    $inicio = 0;
    $pagina1 = 1;
} else {
    $inicio = ($pagina1 - 1) * $limit1;
}

$sLimit1 = "LIMIT $inicio , $limit1";

$sOrder1 = "";
if (isset($_POST['orderCol'])) {
    $orderCol = $_POST['orderCol'];
    $oderType = isset($_POST['orderType']) ? $_POST['orderType'] : 'asc';

    $sOrder1 = "ORDER BY " . $columns1[intval($orderCol)] . ' ' . $oderType;
}


/* Consulta */
$sql1 = "SELECT SQL_CALC_FOUND_ROWS " . implode(", ", $columns1) . "
FROM $table1
$where1 
$sOrder1
$sLimit1";
$resultado1 = $conn->query($sql1);
$num_rows1 = $resultado1->num_rows;

/* Consulta para total de registro filtrados */
$sqlFiltro1 = "SELECT FOUND_ROWS()";
$resFiltro1 = $conn->query($sqlFiltro1);
$row_filtro1 = $resFiltro1->fetch_array();
$totalFiltro1 = $row_filtro1[0];

/* Consulta para total de registro filtrados */
$sqlTotal = "SELECT count($id1) FROM $table1 ";
$resTotal = $conn->query($sqlTotal);
$row_total = $resTotal->fetch_array();
$totalRegistros = $row_total[0];

/* Mostrado resultados */
$output = [];
$output['totalRegistros'] = $totalRegistros;
$output['totalFiltro'] = $totalFiltro1;
$output['data'] = '';
$output['paginacion'] = '';
$output['cot1'] = '¡ estas seguro de terminar el concurso !';

// $num_rows1 = 0;ç
if ($num_rows1 > 0) {
    while ($row = $resultado1->fetch_assoc()) {
        $output['data'] .= '<tr  class="data-row" style=" height: 100px;">';
        $output['data'] .= '<td>
        <a href="../dashboard/profile/update_vienForCode.php?idDni=' . $row['inven_codigo'] . '"
class="btn btn-secondary btnEdit actualizarboton" style=" width: 100px; margin-botton: 10PX;
border-radius: 0PX; background-color: #1e98ec;"> ACTUALIZAR </a> 
<br> 
<a href="../dashboard/profile/deleteVien.php?idDni=' . $row['inven_codigo'] . '" 
onclick="return confirm(' . $output['cot1'] . ');"
class="btn btn-secondary btnEdit eliminarboton" style=" width: 100px;
BORDER-RADIUS: 0PX; margin-top: 25px;"> ELIMINAR </a> </td>';

        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_codigo'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_descript'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_nom'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_nombre_depend'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_usuario'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_responsable'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_nombre_prov'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_fecha_compra'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_valor_compra'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_fecha_alta'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_valor_inicial'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_sede'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_pliego'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_ubicac_fisica'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_nombre_item'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_sec_ejec'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_tipo_modalidad'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_codigo_barra'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_modelo'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_nro_orden'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_medidas'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_hvalor_neto'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_secuencia'] . '</td>';

        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_abrev_movimto'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_nro_documento'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_flag_compartido'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_nombre'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_centro_costo'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_estado'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_abreviatura'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_fecha_nea'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_tipo_doc_refer'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_sec_modelo'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_nro_serie'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_grupo_bien'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_clase_bien'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_familia_bien'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_item_bien'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_color'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_caracteristicas'] . '</td>';
        $output['data'] .= '<td style=" width: 100px;">' . $row['inven_observaciones'] . '</td>';
    }
} else {
    $output['data'] .= '<tr>';
    $output['data'] .= '<td colspan="7">Sin resultados</td>';
    $output['data'] .= '</tr>';
}

if ($output['totalRegistros'] > 0) {
    $totalPaginas = ceil($output['totalRegistros'] / $limit1);

    $output['paginacion'] .= '<nav>';
    $output['paginacion'] .= '<ul class="pagination">';

    $numeroInicio = 1;

    if (($pagina1 - 4) > 1) {
        $numeroInicio = $pagina1 - 4;
    }

    $numeroFin = $numeroInicio + 20;

    if ($numeroFin > $totalPaginas) {
        $numeroFin = $totalPaginas;
    }

    for ($i = $numeroInicio; $i <= $numeroFin; $i++) {
        if ($pagina1 == $i) {
            $output['paginacion'] .= '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
        } else {
            $output['paginacion'] .= '<li class="page-item"><a class="page-link" href="#" onclick="nextPage(' . $i . ')">' . $i . '</a></li>';
        }
    }

    $output['paginacion'] .= '</ul>';
    $output['paginacion'] .= '</nav>';
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);