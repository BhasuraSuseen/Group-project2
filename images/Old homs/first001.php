<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";
?><br /> 
<?php
echo 2 + 3;
?> 
<?php
/*    Using "mysqli" instead of "mysql" that is obsolete.
*     Utilisation de "mysqli" � la place de "mysql" qui est obsol�te.
* Change the value of parameter 3 if you have set a password on the root userid
* Changer la valeur du 3e param�tre si vous avez mis un mot de passe � root
*/
$mysqli = new mysqli('127.0.0.1', 'root', '123');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo 'Connection OK';
$mysqli->close();
?>

</body>
</html>