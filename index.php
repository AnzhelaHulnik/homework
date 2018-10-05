<?php
/*$year = 2000;
*/?><!--
<select>

        <?php
/*      for($year; $year <= 2050; $year++){

            echo"<option>$year</option>";
           }
        */?>

</select>
-->

 <!-- от 29.09.2018
  Задача1.-->
<!--При помощи цикла for выведите все нечетные числа от 1 до 50;-->

<?php
$a=1;
for($a=1; $a<=50; $a++){
    if ($a%2!=0) {
        echo $a."<br>";
    }
}
?>
<!--Задача2
При помощи цикла while вывести список категорий. Результат Категория 1, Категория 2, и т.д.;
-->


   <ul>
<style>
    li {
        list-style-type: none;
    }
</style>

        <?php
        $counter = 0;
        $num = 1;
       
        while($counter < 5){
            echo "<li>Category $num</li>";
            $counter++;
            $num++;
        }

        ?>


   </ul>

<!--Задача3
Написать скрипт, который выведет Заголовок, Дату и Имя автора, Картину поста (цикл while);-->
<?php

        $title = "List-based media object 1";
        $data = date('d-m-Y');
        $author = "Author1";
        $description = "Cras sit amet nibh libero, in g
            ravida nulla. Nulla vel metus scelerisque ante sollicitudin.
             Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
             Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.";

       $i = 1;
      while ($i <= 2){
          $i++;
              echo "<p>
                  <spane style=color:green>$title</spane>,
                  <spane style=color:red>$data</spane>,
                  <spane style=color:blue>$author</spane>  <br>
                  $description.
                  </p>" . "<br>";

          }



      ?>

<!--Задача 4
    При помощи цикла foreach вывести список категорий. Результат Категория 1, Категория 2, и т.д.;-->

<?php
$arr = array("Category1", "Category2", "Category3", "Category4", "Category5");
foreach ($arr as $key){
    echo "$key<br>";
}

?>

<!-- Задача 5. При помощи цикла foreach вывести форму с определенными полями.-->


    <?php
  $fields = array(1,2,3,4,5);

    foreach($fields as $key){
        echo "<input type='number'> <br> <br>";

    }
    ?>


<!--Задача 6. Написать скрипт вывода формы, в котором задействовать подключение конструкци require_once;-->

<?php
    require_once ("form.php");
echo"<hr>";
?>

<!--Задача7. Переменная $lang может принимать два значения: 'ru' и 'en'.
Если она имеет значение 'ru', то в переменную $arr запишем массив дней недели на русском языке,
а если имеет значение 'en' – то на английском. Решите задачу через 2 if, через switch-case.-->

<?php
$lang = "en";
$russian = array("понедельник", "вторник", "среда", "четверг","пятница","суббота","воскресенье");
$english = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
if ($lang == "ru") {
     foreach ($russian as $key) {
         echo $key . "<br>";
     }
}
else if ($lang == "en") {
     foreach ($english as $key) {
         echo $key . "<br>";
     }
}

echo "<hr>";
switch($lang) {
    case "ru":
foreach ($russian as $key) {
    echo $key . "<br>";
     }
        break;
        case "en":
foreach ($english as $key) {
    echo $key . "<br>";
     }
        break;
    default:
        echo "error";

}
?>

<!--Таблица умножения (для себя)-->
<style>
    table
    {
        border-color: blue;
    }
    td {
        background-color:lightblue;
    }

</style>
<?php
$cols = 10;
$rows = 10;


echo "<table border='2'>";

for ($tr =1; $tr <= $rows; $tr++){

        echo "<tr>";

    for ($td = 1; $td <= $cols; $td++) {

        echo "<td>" . $tr*$td. "</td>";

    }
    echo "</tr>";

}
echo "</table>";
?>


