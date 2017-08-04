<?php
$con = mysql_connect("localhost","root","");
if (!$con) 
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("kesia", $con);

class sql{
	function save($table, $value){
		$z = mysql_query("INSERT INTO $table VALUES ($value)") or die (mysql_error());
		return $z;
	}
	function update($table, $value, $where){
		$z = mysql_query("UPDATE $table SET $value Where $where") or die (mysql_error());
		return $z;
	}
	function delete($table, $where){
		$z = mysql_query("DELETE FROM $table Where $where") or die (mysql_error());
		return $z;
	}
}

?> 
