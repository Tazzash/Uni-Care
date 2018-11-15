

<h1>
    <form method = "get" action = "">
        Times Table:
        <input type = "text" name = "table">
            <br>
        </input>
    </form>
</h1>
    <?php

        $x = "Hello";
        $x = 23;
        $x = 5.6;

        $table = $_GET['table'];

        for ($i=1; $i <= 12 ; $i++) {
            if (ctype_digit(strval($table))) {
                $equals = $i * $table;

                echo "$i Times $table = $equals" . "<br>";
            }elseif($i == 12){
                echo "<br><br><br>error - not an integar";
            }

        }
    ?>
