<?php
    if ($_POST["submit"]) {
        if (!$_POST['name']) {
            $error.="<br />Enter Your Name";
        }

        if (!$_POST['email']) {
            $error.="<br />Enter Your Email Address";
        }

        if (!$_POST['comment']_ {
            $error.="<br />Comment is manditory";
        }

        if ($_POST['email']!="" AND !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
            $errror.="<br />The Email Address You Entered Was Not Valid";
        }

        if (mail("test@gmail.com", "Comments", "Name: ".$_POST['name']."

            Email: ".$_POST['email']."

            Comment: ".$_POST['comment'])) {
                $result='<div class="alert alert-success">
                    <strong>Thanks.</strong>I'll get back with you.
                </div>';
            }
        else {
            $result='<div class="alert alert-danger">
                Message could not be sent. Try again later.
            </div>';
        }
    }
}


?>


<!doctype html>
<html>
<head>
    <title>Learning jquery</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha51
    2-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity=
    "sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">


</head>


<body>


    <div class="container">
        <div class="row">
            <div class="col-md-6-offset-3 emailForm">
                <h1>Devon's Email Form</h1>
                <?php echo $result; ?>
                <p class="lead">Leave a message.</p>
                <form method="post">
                        <div class="form-group">
                            <label for="email">Your Email Address:</label>
                            <input type="email" name="email" class="form-control" placeholder="Your Email Address"
                                   value="<php echo $_POST['email']; ?>" />
                        </div>
                    <div class="form-group">
                        <label for="comment">Any Comments?</label>
                        <textarea class="form-control" name="comment">
                            <?php echo $_POST['comment']; ?>
                        </textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/
    eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</body>
</html>
