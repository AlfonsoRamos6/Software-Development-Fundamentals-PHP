<?php include "template.php"?>
<title>Contact Us</title>
<body>
<h1>Contact Us</h1>

<div class="container-fluid">
    <h1 class="text-primary">Please Send us a Message</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="mb-3">
            <label for="contactEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="contactEmail" name="contactEmail"
                   placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="contactMessage" class="form-label">Message</label>
            <textarea class="form-control" id="contactMessage" name="contactMessage" rows="3"></textarea>
        </div>
        <button type="submit" name="formSubmit" class="btn btn-primary">Submit</button>
    </form>
</div>



<?php
    if(isset($_POST['formSubmit'])){
    $userEmail = sanitiseData($_POST['contactEmail']);
    $userMessage = sanitiseData($_POST['contactMessage']);


    $formError = false;
    if (empty($_POST['contactEmail'])) {
        $formError = true;
        echo "Enter an email address.";
    }
    if (empty($_POST['contactMessage'])) {
        $formError = true;
        echo "Enter a message to submit.";
    }
    if ($formError == false) {
        $emailAddress = $_POST['contactEmail'];
        $messageSubmitted = $_POST['contactMessage'];

        $sqlStmt = $conn->prepare("INSERT INTO Contact (ContactEmail, Message) VALUES (ContactEmail, :Message)");
        $sqlStmt->bindParam('ContactEmail', $userEmail);
        $sqlStmt->bindParam('Message', $userMessage);
        $sqlStmt->execute();

//        $csvFile = fopen(filename:"contact.csv", mode:"a");
//        fwrite($csvFile, data:$userEmail.",".$userMessage."\n");
//        fclose($csvFile);
    }

}


