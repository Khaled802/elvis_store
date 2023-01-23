<?php

require './config.php';

class Email {
    private mysqli $dbc;

    
    function make_connection() {

        $this->dbc =  mysqli_connect(
                DATABASE['host'],
                DATABASE['user'],
                DATABASE['password'],
                DATABASE['database'],
                DATABASE['port']
        ) or die('connection error');
    }

    function close_connection() {
        $this->dbc->close();
    }

    function insert(string $first_name, string $last_name, string $email) {
        $this->make_connection();
        $query = "INSERT INTO email_list(first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email');";
        $this->dbc->query($query) or die('excution error');
        $this->close_connection();
    }

    
    function get_all(): array{
        $this->make_connection();
        $query = "SELECT * FROM email_list;";
        $selected = $this->dbc->query($query);
        $list_items = [];
        while ($row = $selected->fetch_assoc()) {
            $list_items[] = $row;
           
        }

        $this->close_connection();

        return $list_items;

    }


    function delete_by_email($email) {
        $this->make_connection();
        $query = "DELETE FROM email_list WHERE email='$email'";
        $this->dbc->query($query);
        $this->close_connection();
    }

    function delete_by_id($id) {
        $this->make_connection();
        $query = "DELETE FROM email_list WHERE id=$id";
        $this->dbc->query($query);
        $this->close_connection();
    }


}