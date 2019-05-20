<!DOCTYPE html>
<html lang="en">

<head>
    <title>UnikOrganic - Career</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/head.php'); ?>
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nav.php'); ?>
    <!-- main body -->
    <div class="container">
        <div class="col-md-12">
            <?php
            if (isset($_POST['submitCv'])) {
                $to = "gulfamansari1515@gmail.com"; // this is your Email address  // hr.unikorganic@gmail.com
                $from = $_POST['userEmail']; // this is the sender's Email address
                $name = $_POST['userName'];
                $phone = $_POST['phone'];
                $subject = "Form submission";
                $subject2 = "Copy of your form submission";
                $applyFor = $_POST['applyFor'];
                $message = "New Enquiry \n"
                    . "\n\n Name: " . $_POST['userName'] 
                    . "\n\n Email: " . $_POST['userEmail'] 
                    . "\n\n Phone number: " . $_POST['phone']
                    . "\n\n Apply for: " . $_POST['applyFor'];
                $message2 = "Thanks for submitting your application";
                echo $message;
                $headers = "From:" . $from;
                $headers2 = "From:" . $to;
                mail($to, $subject, $message, $headers);
                mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender



                echo "
                    <div class='container-fluid'>
                        <div class='col-sm-12 text-center'>
                            <img src='mail.png' style='margin:auto' class='img img-responsive' width='300' alt='droidtechknow'></img>
                            <p>Mail Sent. Thank you " .  $name . " , for your submission we will contact you shortly</p>
                        </div>
                    </div>";
            }
            ?>
        </div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</body>

</html>