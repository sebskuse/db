<?
	require_once("db.class.php");
	// Set up DB connection
	$db = db::singleton("host", "username", "password", "schema");
	
	// Some basic test data
	$in['name'] = "test";
	$in['admin'] = "NULL";
	
	// Testing select, insert, update and delete queries
	$db->select(array("name", "admin"), "table");
	
	$db->insert($in, "test");
	
	$db->update($in, "test", array(array(null, "field", "val")));
	
	$db->delete("table", array(array(null, "field", "val")));

	// Prints generated SQL
	print_r($db->queries);