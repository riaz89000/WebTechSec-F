
<?php 

    //print_r($_FILES);

    $src = $_FILES['myfile']['tmp_name'];
    $des ="upload/".$_FILES['myfile']['name'];
    $place = $_POST['place'];
    $date = $_POST['date'];

    $new_post = $place."|".$date."|"."\r\n";
    $file = fopen('posts.txt', 'a');
    fwrite($file, $new_post);
    if(move_uploaded_file($src, $des)){
        header('location:../views/home.php');
    }else{
        echo "Error";
    }

?>