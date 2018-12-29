<?php
    require_once 'data.php';

    $type = $_POST['type'];
    if($type == 'count'){
        $arrayData  = createData();
        $totalItems = count($arrayData);
        $items      = $_POST['items'];
        $result['totalPages'] = ceil($totalItems/$items);
        $result['totalItems'] = $totalItems;
        echo json_encode($result);
    }
    if($type == 'list'){
        $currentPage = $_POST['page'];
        $items       = $_POST['items'];
        $postion     = ($currentPage-1)*$items;
        $arrayData   = createData();
        $result   = getElements($arrayData, $postion, $items);
        echo json_encode($result);
    }



?>