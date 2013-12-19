<?php

	//Autoloads classes and depencies
	function my_autoloader($class_name) 
        {
            include '../classes/' . $class_name . '.class.php';
        }

    spl_autoload_register('my_autoloader');     


    //Assigns form values to variables
    $id = $_POST['tag_form__id'];
    $name = $_POST['tag_form__name'];
    $href = $_POST['tag_form__href'];

    $tag_class = new add_tags();
    
    if (!empty($name) && preg_match("/^[a-zA-Z0-9]+$/", $name))
    {
            $tag_class->addTags($id, $name, $href);
    }
    
    //Redirects to index.php
    header("location:../index.php");
?>