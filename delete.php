<?php
	include("extensions/functions.php");
	require_once("extensions/db.php");

	if(isset($_GET['table'])) {
		if($_GET['table'] == 'legal_document'){
			// DELETE TABLE IN LEGAL DOCUMENT
			deleteSQLDataTable($_GET['table'], $_GET['image']);
			//
			header("Location: settings.php?deleted=1");
		}
		else if($_GET['table'] == 'adventure'){
			// DELETE TABLE IN ADVENTURE
			deleteSQLDataTable($_GET['table'], $_GET['id']);
			//
			header("Location: adventures_posted.php?deleted=1");
		}
		else if($_GET['table'] == 'voucher'){
			// DELETE TABLE IN ADVENTURE
			deleteSQLDataTable($_GET['table'], $_GET['id']);
			//
			header("Location: voucher.php?deleted=1");
		}
		else {

		}
	}
?>
