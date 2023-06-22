<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Students statistics</title>
</head>
<body>
    <header>
        <h2>Students statistics</h2>
    </header>

    <main>

    <?php
    /*
    * 582-11B-MA Épreuve Finale
    * Etudiant : Rostyslav Luchyshyn - 2395286
    */
    /*Entrées:
    *- tableaux des étudiants en format Id/Matricule=>((Prenom et Nom) (Travail 1 et Travail 2) (Examen Intra et Examen Final))
    *Sorties
    *- statistique de la group des étudiants 
    */

    
    $name=$_POST['user_name'];
    $surname=$_POST['user_surname'];
    echo '<article>';
    echo '<h2>' . 'Hello ' . $name . ' ' . $surname . '!' .  '</h2>';
    echo '</article>';
    //array students grades
    $students = [
        10000 => [["Name1", "Student1"], [100, 50], [80, 60]],
        10001 => [["Name2", "Student2"], [70, 80], [90, 70]],
        10002 => [["Name3", "Student3"], [80, 80], [50, 80]],
        10003 => [["Name4", "Student4"], [50, 60], [50, 80]],
        10004 => [["Name5", "Student5"], [35, 55], [50, 30]],
        10005 => [["Name6", "Student6"], [95, 90], [50, 80]],
        10006 => [["Name7", "Student7"], [80, 70], [50, 80]],
        10007 => [["Name8", "Student8"], [80, 70], [90, 80]],
        10008 => [["Name9", "Student9"], [45, 48], [40, 55]],
        10009 => [["Name10", "Student10"], [100, 100], [90, 95]],
        10010 => [["Name11", "Student11"], [0, 90], [95, 95]],
        10011 => [["Name12", "Student12"], [0, 90], [95, 95]]
    ];
  
    include 'final_function.php';
    
    // main table
    showTable($students);
    
    ?>
    </main>
    <footer>
        <h5>copyright</h5>
    </footer>
</body>
</html>