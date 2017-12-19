<?php

// This is the API to possibility show the user list, and show a specific user by action.

function get_user_by_id($id)
{
    $user_info = array();

    // make a call in db.
    switch ($id){
        case 1:
            $user_info = array("meno" => "Marc", "priezvisko" => "Simon", "email" => 21);
            break;
        case 2:
            $user_info = array("meno" => "Frederic", "priezvisko" => "Zannetie", "email" => 24);
            break;
        case 3:
            $user_info = array("meno" => "Laure", "priezvisko" => "Carbonnel", "email" => 45);
            break;
    }

    return $user_info;
}

function get_user_list()
{
    $user_list = array(array("id" => 1, "meno" => "Simon"), array("id" => 2, "meno" => "Zannetie"), array("id" => 3, "meno" => "Carbonnel")); // call in db, here I make a list of 3 users.

    return $user_list;
}

$possible_url = array("get_user_list", "get_user");

$value = "An error has occurred";

if (isset($_GET["action"]) && in_array($_GET["action"], $possible_url))
{
    switch ($_GET["action"])
    {
        case "get_user_list":
            $value = get_user_list();
            break;
        case "get_user":
            if (isset($_GET["id"]))
                $value = get_user_by_id($_GET["id"]);
            else
                $value = "Missing argument";
            break;
    }
}

exit(json_encode($value));

?>