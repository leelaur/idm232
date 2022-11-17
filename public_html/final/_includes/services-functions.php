<?php

/**
 * Insert a services into the database
 * @param  string $title - service title of the service
 * @param  string $description - service description of the service
 * @param  string $materials - service materials of the service
 * @param  string $instruction - service instruction of the service
 * @return object - mysqli_result
 */
function add_services($name, $price, $description)
{
    global $db_connection;
    $query = 'INSERT INTO services';
    $query .= ' (title, description, materials, instruction)';
    $query .= " VALUES ('$title', '$description', '$materials', '$instruction')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}