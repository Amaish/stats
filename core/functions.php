<?php

function formSearchString($arguments)
{
    $string = "";
    foreach ($arguments as $key => $value) {
        $string .= "`" . $key . "`=" . "'" . $value . "' && ";
    }
    
    $conditions = substr($string, 0, -3);
    return $conditions;
}

function returnExists($table, $arguments)
{
    global $conn;
    $appendSearch = formSearchString($arguments);
    $formedQuery  = "SELECT * FROM $table WHERE " . $appendSearch . " ORDER BY id DESC";
    $getValues    = mysqli_num_rows(mysqli_query($conn, $formedQuery));
    return $getValues;
}

function getByValue($table, $column, $arguments)
{
    global $conn;
    $appendSearch = formSearchString($arguments);
    $formedQuery  = "SELECT * FROM $table WHERE " . $appendSearch . " ORDER BY id DESC";
    $executeQuery = mysqli_query($conn, $formedQuery);
    if (mysqli_num_rows($executeQuery) > 0) 
    {
        $getValues = mysqli_fetch_array($executeQuery);
        return $getValues[$column];
    } else {
        return false;
    }
}


function getManyByValue($table, $column, $arguments)
{
    global $conn;
    $databack     = "";
    $appendSearch = formSearchString($arguments);
    $formedQuery  = "SELECT * FROM $table WHERE " . $appendSearch . " ORDER BY id DESC";
    $executeQuery = mysqli_query($conn, "$formedQuery");
    if (mysqli_num_rows($executeQuery) > 0) 
    {
        while ($getValues = mysqli_fetch_array($executeQuery)) 
        {
            $databack .= $getValues[$column] . ",";
        }
        
        $columnArray = substr($databack, 0, -1);
        return explode(",", $columnArray);
    } else {
        return "No Data Found";
    }
}
?>