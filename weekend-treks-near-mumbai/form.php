<?php


    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "hello@altitudequest.com";
    $email_subject = "Hi, Altitude Quest, I am interested in one of your events";
	$error_message = '';




    // validation
    if(
        !isset($_POST['name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['contactno']) ||
		!isset($_POST['comments']))

		{

			echo "Fields are not filled properly";
			die();
    }

    $name = $_POST['name']; // required
	$email = $_POST['email']; // required
	$subject = $_POST['contactno']; // required
	$website = $_POST['comments'];


$email_message = '<html>';
$email_message = '<body>';
$email_message = '<head>';
$email_message = '<title>Your Details Are Below</title>';
$email_message = '</head>';
$email_message .= '<h1>Your Details Are Below</h1>';
$email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$email_message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$email_message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$email_message .= "<tr><td><strong>Subject:</strong> </td><td>" . strip_tags($_POST['contactno']) . "</td></tr>";
$email_message .= "<tr><td><strong>Comments:</strong> </td><td>" . strip_tags($_POST['comments']) . "</td></tr>";
$email_message .= "</table>";
$email_message .= "</body></html>";






$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: ". $email . "\r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


@mail($email_to, $email_subject, $email_message, $headers);
?>

   
<html>
<head>
    <?php include("upper-links.php"); ?>
</head>
<!--HEADER START-->
        <?php include("../header.php"); ?>
        <?php include("../nav.php"); ?>
<body>
    <!-- Start of Thank -->
    <section id="content_Wrapper" class="mbtm">
      <section class="container">
        <section class="row">
          <section class="col-md-12 error-page-form">
              <h2>Thank You</h2>
              <p>Thank you for your enquiry, as soon as we get this we will get back.</p>
          </section>
        </section>
      </section>
    </section>
    <!-- End of Thank -->

    <?php include("footer.php"); ?>

    <!--WRAPPER END-->

    <?php include("bottom-links.php"); ?>

</body>

</html>
