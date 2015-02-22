<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>
            
        </title>
    </head>
    <body>
        <table cols="" border="0">
            <tr>
                <th>ID</th>
                <th>Author</th>
                <th>Mugshot</th>
                <th>Their Saying</th>
            </tr>
            {quotes}
            <tr>
                <td>{id}</td>
                <td>{who}</td>
                <td>{mug}</td>
                <td>{what}</td>
            </tr>
            {/quotes}
        </table> 
        <a href='/admin/add'>Add a new quotation</a>
    </body>
</html>
