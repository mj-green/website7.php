<?php
	$path ='/dir0/dir1/myfile.php';
	$file = 'file1.txt';

	/*
	// return filename
	echo basename($path);

	//return filename without ext
	echo basename($path, '.php');

	// return the dir name from path
	echo dirname($path);

	//check if file exists
	echo file_exists($file);

	// get abs path
	echo realpath($file);

	//checks to see if file
	echo is_exists('test');

	//check if writable
	echo is_readable($file);

	//check if readable
	echo is_readable($fiile);

	//get file size
	echo filesize($file);

	//create a directory
	mkdir('testing');

	//remove directory if empty
	rmdir('testing');

	//copy file
	echo copy('file1.txt', 'file2.txt');

	//renmae file
	rename('file2.txt', 'myfile.txt');

	//delete file
	unlink('myfile.txt');

	//write from file to string
	echo file_get_contents($file);

	//write string to browser
	echo file_put_contents($file, 'goodbye world');

	$current =file_get_contents($file);

	$current .= ' goodbye world';

	file_put_contents($file, $current);

	//open file for reading
	$handle = fopen($file, 'r');
	$data = fread($handle, filesize($file));
	echo $data;
	fclose($handle);
	*/

	//open file for writing
	$handle = fopen('file2.txt', 'w');
	$txt = "John Doe\n";
	fwrite($handle, $txt);
	$txt = "Steve Smith\n";
	fwrite($handle, $txt);
	fclose($handle);