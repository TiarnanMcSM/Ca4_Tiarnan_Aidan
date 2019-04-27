<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function get_teamsPlace() {
    global $db;
    $query = 'SELECT * FROM league
              ORDER BY points';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement; 
}
