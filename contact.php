<?php
if(isset($_POST['Name'])){//show data
    /*
    echo '<pre>';
    var_dump($_POST);
    echo '<pre>';
    */
    
    $to = 'tyler.newton@seattlecolleges.edu';
    $today = date("F j, Y, g:i a");
    $subject = 'WEB150 Portal Contact ' . $today;
    $message = 'Contact from ' . $_POST['Name'] . PHP_EOL;
    $message .= 'Email: ' . $_POST['Email'] . PHP_EOL;
    $message .= 'Comments: ' . $_POST['Comments'] . PHP_EOL;
    $email = $_POST['Email'];
    $headers = 'From: noreply@web-students.net' . PHP_EOL .
        'Reply-To: ' . $email . PHP_EOL .
        'X-Mailer: PHP/' . phpversion();
    
    mail($to, $subject, $message, $headers);
    
    echo '<h2>Thanks for contacting me!</h2>';
    
}else{//show form
    echo '
    <form action="" method="post">
        <div>
            <label>
                Name: <br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" size="44" autofocus />
            </label>
        </div>
        <div>
            <label>
                Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
            </label>
        </div>
        <div>
            <label>
                Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!"></textarea>
            </label>
        </div>
        <div>
            <input type="submit" value="submit" />
        </div>
    </form>
    ';
}
?>