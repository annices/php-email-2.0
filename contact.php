<?php
// Change to your email address:
$to = 'your@email.com';

// Change to your time zone below.
// (https://secure.php.net/manual/en/timezones.php):
$timezone = 'Europe/Stockholm';

include("includes/settings.inc.php");
?>
<!DOCTYPE html>
<!--
This email script was fetched from https://annice.se and is created by Annice Strömberg, 2019.
-->
<html>
<head>
    <title>Email 2.0</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <div class="container">

        <h1>Email Form</h1>

        <?php
        // If feedback, print it:
        if ($feedback)
            echo "<p>$feedback</p>";
        ?>

        <div id="container">
            <form method="post" action="contact.php">
                <div class="row">
                  <div class="col-25">
                    <label for="yname">Your Name: <span style="color: red">*</span></label>
                </div>
                <div class="col-75">
                    <input type="text" name="yname" size="50" value="<?php echo $name; ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">Your Email: <span style="color: red">*</span></label>
                </div>
                <div class="col-75">
                    <input type="email" name="email" size="50" value="<?php echo $email; ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Your Subject:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="subject" size="50" value="<?php echo $subject; ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="msg">Your Message: <span style="color: red">*</span></label>
                </div>
                <div class="col-75">
                    <textarea name="msg" rows="15" cols="60" required><?php echo $msg; ?></textarea>
                </div>
                <div class="row">
                    <input type="submit" value="Send">
                </div>
            </form>
        </div>

    </body>
</html>