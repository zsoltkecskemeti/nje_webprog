<?php if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['textarea'])) { 
    
    echo '<div>';
    echo "Your message: <br />";
    echo "<br />";
    echo "</div>";

    echo '<div>';
    $name = $_POST['name'];
    echo "<b>Your name: </b>".$name."<br />";
    echo "</div>";

    echo '<div>';
    $email = $_POST['email'];
    echo "<b>Your e-mail: </b>".$email."<br />";
    echo "</div>";

    echo '<div>';
    $msg = $_POST['textarea'];
    echo "<b>Your text: </b>".$msg."<br />";
    echo "</div>";

    if(isset($form_message)) {
        echo '<div>';
        echo $form_message;
        echo "</div>";
    }
} else {
    echo '<div>';
    echo 'You dont leave message. Click <a href="?page=contact">Contact</a> to send message';
    echo "<br />";
    echo "</div>";
} ?>