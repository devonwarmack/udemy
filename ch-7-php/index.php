<!doctype html>
<html>
<head>
    <title>Learning jquery</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

</head>


<body>
    <div>

        <?php

            if($_GET["submit"]) {



                if($_GET["name"]) {

                    echo "your name is ".$_GET['name'];
                }

                else {
                    echo "enter your name";
                }
            }
        ?>

        <form>
            <label for="name">Name</label>
            <input name="name" type="text" />

            <input type="submit" name="submit" value="submit your name" />
        </form>


    </div>

</body>
</html>
