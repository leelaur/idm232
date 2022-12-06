<?php

/**
 * Insert a services into the database
 * @param  string $name - service name of the service
 * @param  string $description - service description of the service
 * @param  string $price - service price of the service
 * @return object - mysqli_result
 */
function add_users($first_name, $last_name, $email, $phone)
{
    global $db_connection;
    $query = 'INSERT INTO users';
    $query .= ' (first_name, last_name, email, phone)';
    $query .= " VALUES ('$first_name', '$last_name', '$email', '$phone')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function get_users()
{
    global $db_connection;
    $query = 'SELECT * FROM users';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function get_users_by_id($id)
{
    global $db_connection;
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    if ($result->num_rows > 0) {
        $instructions = mysqli_fetch_assoc($result);
        return $users;
    } else {
        return false;
    }
}

function edit_users ($first_name, $last_name, $email, $phone)
{
    global $db_connection;
    $query = 'UPDATE users';
    $query .= " SET first_name = '{$first_name}', last_name = '{$last_name}', email = '{$email}', phone = '{$phone}'";
    $query .= " WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function delete_users_by_id($id)
{
    global $db_connection;
    $query = "DELETE FROM users WHERE id = {$id}";
    $result = mysqli_query($db_connection, $query);
    return $result;
}