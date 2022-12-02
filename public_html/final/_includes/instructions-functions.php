<?php

/**
 * Insert a services into the database
 * @param  string $name - service name of the service
 * @param  string $description - service description of the service
 * @param  string $price - service price of the service
 * @return object - mysqli_result
 */
function add_instructions($title, $description, $materials, $instructions)
{
    global $db_connection;
    $query = 'INSERT INTO instructions';
    $query .= ' (title, description, materials, instructions)';
    $query .= " VALUES ('$title', '$description', '$materials', '$instructions')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function get_instructions()
{
    global $db_connection;
    $query = 'SELECT * FROM instructions';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function get_instructions_by_id($id)
{
    global $db_connection;
    $query = "SELECT * FROM instructions WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    if ($result->num_rows > 0) {
        $instructions = mysqli_fetch_assoc($result);
        return $instructions;
    } else {
        return false;
    }
}

function edit_instructions($title, $description, $materials, $instructions)
{
    global $db_connection;
    $query = 'UPDATE instructions';
    $query .= " SET title = '{$title}', description = '{$description}', materials = '{$materials}', instructions = '{$instructions}'";
    $query .= " WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function delete_instructions_by_id($id)
{
    global $db_connection;
    $query = "DELETE FROM instructions WHERE id = {$id}";
    $result = mysqli_query($db_connection, $query);
    return $result;
}