<h3>$_POST contains: </h3>
<pre>
    <?php 
    
    print_r($_POST);

    $name =  htmlspecialchars($_POST['name']);

    $email = $_POST['email'];
    echo $name;
    ?>
 </pre>
