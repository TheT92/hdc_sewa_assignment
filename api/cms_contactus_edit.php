<?php
function getContactList()
{
    include ("databaseVariables.php");
    // get contact info from database
    $sql = "SELECT c.id, c.message, c.create_time, c.del_flag, c.firstname, c.surname,c.email, c.phoneno FROM sewagroup.contact c
    ORDER BY create_time DESC";
    $contactList = $conn->query($sql);
    return $contactList;
}
?>