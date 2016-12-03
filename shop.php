<?php

session_start();
require_once('db.php');

if(isset($_POST['add'])) 
{
	if(isset($_SESSION['cart']))

	{
		$item_array_id = array_column($_SESSION['cart'], "product_id");

		if(!in_array($_GET['ProduktID'], $item_array_id))

		{
			$count = count($_SESSION['cart']);
			$item_array = array(

				'product_id' => $_GET['ProduktID'],
				'item_name' => $_POST['hidden_name'],
				'product_price' => $_POST['hidden_price'],
				'item_quantity' => $_POST['quantity']

			);

			$_SESSION['cart'][$count] = $item_array;
			header('Location: webshop.php');
			

		}

		else {

			header('Location: webshop.php');
		}
	}

	else {

		$item_array = array(

			'product_id' => $_GET['ProduktID'],
			'item_name' => $_POST['hidden_name'],
			'product_price' => $_POST['hidden_price'],
			'item_quantity' => $_POST['quantity']
		);

		$_SESSION['cart'][0] = $item_array;

	}

}

if(isset($_GET['action']))

{
	if($_GET['action'] == "delete") 

		foreach($_SESSION['cart'] as $keys => $values)
		{
			if($values['product_id'] == $_GET['ProduktID'])
			{
				unset($_SESSION['cart'][$keys]);
				header('Location: webshop.php');

			}

		}

	}



?>