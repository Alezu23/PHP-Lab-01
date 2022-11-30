<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Names And Ages</title>
        <link rel="stylesheet" href="table.css">
    </head>
    <header>
        <h1>Here the names and ages of T-Level DPDD students are displayed in different ways incuding the average age</h1>

    <body>
        <!--All PHP scripts need to go inside these tags-->

        <div id = "customers">
        <table>
  <tr>
    <th>Name</th>
    <th>Age</th>
  </tr>
  <tr>
    <?php array_column($pupils,'Name')?> 
    <td>Griffin</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
  </tr>
</table>
</div>
        <?php
           $pupils = array(
                array('Name' => 'Alex', 'Age' => 17),
                array('Name' => 'Mitchell', 'Age' => 17),
                array('Name' => 'Derron', 'Age' => 17),
                array('Name' => 'Omarion', 'Age' => 19),
                array('Name' => 'Ela', 'Age' => 17),
                array('Name' => 'Jake', 'Age' => 18),
                array('Name' => 'Rana', 'Age' => 19),
                array('Name' => 'Rehman', 'Age' => 19),
                array('Name' => 'Nour', 'Age' => 19),
                array('Name' => 'Temi', 'Age' => 18),
                array('Name' => 'Noman', 'Age' => 18),
                array('Name' => 'Taylor', 'Age' => 18),
                array('Name' => 'Elizabete', 'Age' => 17),
                array('Name' => 'Roddick', 'Age' => 17)
            );
            
            
            #UNSORTED LIST
            echo "UNSORTED";

            foreach ($pupils as $pupil) {
                foreach ($pupil as $value) {
                    echo "<dl> $value </dl>";
                }
            }
            
        
        
            #NAME SORTED
            function middle() {
                $pupils = array(
                    array('Name' => 'Alex', 'Age' => 17),
                    array('Name' => 'Mitchell', 'Age' => 17),
                    array('Name' => 'Derron', 'Age' => 17),
                    array('Name' => 'Omarion', 'Age' => 19),
                    array('Name' => 'Ela', 'Age' => 17),
                    array('Name' => 'Jake', 'Age' => 18),
                    array('Name' => 'Rana', 'Age' => 19),
                    array('Name' => 'Rehman', 'Age' => 19),
                    array('Name' => 'Nour', 'Age' => 19),
                    array('Name' => 'Temi', 'Age' => 18),
                    array('Name' => 'Noman', 'Age' => 18),
                    array('Name' => 'Taylor', 'Age' => 18),
                    array('Name' => 'Elizabete', 'Age' => 17),
                    array('Name' => 'Roddick', 'Age' => 17)
                );

            echo "ORDERED BY NAME";

            array_multisort(array_column($pupils, 'Name'), SORT_ASC, $pupils);
            foreach ($pupils as $pupil) {
                foreach ($pupil as $value) {
                    echo "<dl> $value </dl>";
                }
            }
        }
            
           function right() {
            #AGE SORTED
            $pupils = array(
                array('Name' => 'Alex', 'Age' => 17),
                array('Name' => 'Mitchell', 'Age' => 17),
                array('Name' => 'Derron', 'Age' => 17),
                array('Name' => 'Omarion', 'Age' => 19),
                array('Name' => 'Ela', 'Age' => 17),
                array('Name' => 'Jake', 'Age' => 18),
                array('Name' => 'Rana', 'Age' => 19),
                array('Name' => 'Rehman', 'Age' => 19),
                array('Name' => 'Nour', 'Age' => 19),
                array('Name' => 'Temi', 'Age' => 18),
                array('Name' => 'Noman', 'Age' => 18),
                array('Name' => 'Taylor', 'Age' => 18),
                array('Name' => 'Elizabete', 'Age' => 17),
                array('Name' => 'Roddick', 'Age' => 17)
            );

            echo "ORDERED BY AGE";

            array_multisort(array_column($pupils, 'Age'), SORT_ASC, $pupils);
            foreach ($pupils as $pupil) {
                foreach ($pupil as $value) {
                    echo "<dl> $value </dl>";
                }
            }
           }

           function over() {
            #Students over 18
            $pupils = array(
                array('Name' => 'Alex', 'Age' => 17),
                array('Name' => 'Mitchell', 'Age' => 17),
                array('Name' => 'Derron', 'Age' => 17),
                array('Name' => 'Omarion', 'Age' => 19),
                array('Name' => 'Ela', 'Age' => 17),
                array('Name' => 'Jake', 'Age' => 18),
                array('Name' => 'Rana', 'Age' => 19),
                array('Name' => 'Rehman', 'Age' => 19),
                array('Name' => 'Nour', 'Age' => 19),
                array('Name' => 'Temi', 'Age' => 18),
                array('Name' => 'Noman', 'Age' => 18),
                array('Name' => 'Taylor', 'Age' => 18),
                array('Name' => 'Elizabete', 'Age' => 17),
                array('Name' => 'Roddick', 'Age' => 17)
            );
            echo "OVER 18";
            array_multisort(array_column($pupils,'Age'), SORT_ASC, $pupils);
            foreach ($pupils as $pupil) {
                foreach ($pupil as $value) {
                    if ($value >= 18) {
                        echo "<dl>  $value </dl>";
                    }
                }
            }
        }
        function under() {
            #Students under 18
            $pupils = array(
                array('Name' => 'Alex', 'Age' => 17),
                array('Name' => 'Mitchell', 'Age' => 17),
                array('Name' => 'Derron', 'Age' => 17),
                array('Name' => 'Omarion', 'Age' => 19),
                array('Name' => 'Ela', 'Age' => 17),
                array('Name' => 'Jake', 'Age' => 18),
                array('Name' => 'Rana', 'Age' => 19),
                array('Name' => 'Rehman', 'Age' => 19),
                array('Name' => 'Nour', 'Age' => 19),
                array('Name' => 'Temi', 'Age' => 18),
                array('Name' => 'Noman', 'Age' => 18),
                array('Name' => 'Taylor', 'Age' => 18),
                array('Name' => 'Elizabete', 'Age' => 17),
                array('Name' => 'Roddick', 'Age' => 17)
            );
            echo "UNDER 18";
            array_multisort(array_column($pupils,'Age'), SORT_ASC, $pupils);
            foreach ($pupils as $pupil) {
                foreach ($pupil as $value) {
                    if ($value < 18) {
                        echo "<dl>  $value </dl>";
                    }
                }
            }
        }


            $average = array_sum(array_column($pupils, 'Age')) / count(array_column($pupils, 'Age'));

            
            echo 'THE AVERAGE IS ',round($average)


            ?>
        <div style="width:2000px; margin:auto;"><?php middle(); ?></div>
        <div style="width:2000px; margin:auto;"><?php right(); ?></div>
        <div style="width:2000px; margin:auto;"><?php over(); ?></div>
        <div style="width:2000px; margin:auto;"><?php under(); ?></div>
       
    </body>

</html>