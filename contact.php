<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
</head>

<body>
    <?php include("header.php"); ?>
    <?php include("nav.php"); ?>
    <div class="form">
        <form action="form_submit.php" method="post">
            <label> Full Name</label>
            <input type="text" placeholder="Your Name" name="name">
            <br>
            <label for="">Email Address</label>
            <input type="email" placeholder="Your Email" name="email">
            <br>
            <label for=""> Messages</label>
            <input type="text" placeholder="Your Messages" name="message">
            <br>

            <input type="submit" name="submit">
        </form>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>
