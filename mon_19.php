<?php
echo ('<link rel="stylesheet" href="style.css">');
include ('header.php');
error_reporting(0);
echo('<br><br>');
echo('<main>');

?>
<form action="submit.php" method="get">
  Email: <input type="text" name="email" ><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" value="Submit">
</form>

<?php

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The form was submitted using the POST method
    $email = $_POST['email'];
    $password = $_POST['password'];
  }

  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // The form was not submitted using the POST method
    $email = $_GET['email'];
    $password = $_GET['password'];
  }
  
echo('<br><br>');
//----------------------------------------------
?>

<form method="post" action="mon_19.php">
  <label for="url">Enter a URL:</label><br>
  <input type="text" id="url" name="url"><br>
  <input type="submit" value="GO">
</form>


<?php

  if (isset($_POST['url'])) {
    $url = $_POST['url'];
    header("Location: $url");
    exit;
  }

echo('<br><br>');
//----------------------------------------------
?>

<form action="mon_19.php" method="post">
  <input type="text" name="num1" placeholder="Enter a number">
  <select name="operator">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
  <input type="text" name="num2" placeholder="Enter another number">
  <button type="submit">Calculate</button>
</form>
<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

switch ($operator) {
    case '+':
      $result = $num1 + $num2;
      break;
    case '-':
      $result = $num1 - $num2;
      break;
    case '*':
      $result = $num1 * $num2;
      break;
    case '/':
      $result = $num1 / $num2;
      break;
    default:
      $result = "Invalid operator";
  }

  echo "Result: $result";
  

echo('<br><br>');
//----------------------------------------------
?>

  <h1>To Do List</h1>
  <form method="post" action="mon_19.php">
    <label for="task">Task:</label><br>
    <input type="text" id="task" name="task"><br>
    <input type="submit" value="Add Task">
  </form> 
  <hr>
  <h2>Pending Tasks</h2>
  <ul>
    <?php
      if (isset($_POST['task']) && !empty($_POST['task'])) {
        $task = $_POST['task'];
        // Save the task to a database or file
      }
      
      // Retrieve tasks from the database or file and display them
      // Here is an example using a hard-coded array:
      $tasks = array("Task 1", "Task 2", "Task 3");
      foreach ($tasks as $task) {
        echo "<li>$task</li>";
      }
    ?>
  </ul>

<?php

echo('<br><br>');
//----------------------------------------------

echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

echo('<br><br>');
//----------------------------------------------


echo('</main>');