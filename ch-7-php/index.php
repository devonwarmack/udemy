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

        $names=array("devon", "riley", "auri");

            if($_POST["submit"]) {



                if($_POST["name"]) {

                    foreach ($names as $name) {
                        if ($_POST["name]==$name) {
                            echo "I know you. your name is ".$name;
                            $knowYou=1;
                        }


                    }
                    if (!$knowYou) echo "i dont know you. ".$_POST['name'];
                }

                else {
                    echo "enter your name";
                }
            }
        ?>

        <form method="post">
            <label for="name">Name</label>
            <input name="name" type="text" />

            <input type="submit" name="submit" value="submit your name" />
        </form>


    </div>

</body>
</html>
