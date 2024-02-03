<?php
session_start();
$con = mysqli_connect("localhost","root","","mental health care");

if(isset($_POST['save_multiple_checkbox']))
{
    $q = $_POST['q'];

    // echo $brands;
	$query="DELETE FROM question";
	$query_run = mysqli_query($con, $query);

    foreach($q as $item)
    {
		if ($item=="1")
			header("Location: anxiety.php");
		elseif ($item=="3")
			header("Location: depression.php");
		elseif ($item=="5")
			header("Location: ADHD.php");
		elseif ($item=="6")
			header("Location: Insomnia.php");
		elseif ($item=="8")
			header("Location: OCD.php");
	
	

        $query = "INSERT INTO question VALUES ('$item')";
        $query_run = mysqli_query($con, $query);
    }

    if($query_run)
    {


	}


    else
    {

    }
}
?>