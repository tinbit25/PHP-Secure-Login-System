
<!DOCTYPE html>
<html>
<head>
    <title>Door Type Selection</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
<div class="main">
    
    <header>
        <br><br><br><br><br><br>
        <h1>King Steel</h1>
        
      </header>
    <form action="" method="post">
        <div class="form">
            <div class="btnn">
                <label for="door_type"><h1>Select Door Type:</h1></label>
            </div>
            <br><br>
            <select name="door_type" id="door_type">
                <option value="single_door">Single Door</option>
                <option value="one_and_half_door">1 and Half Door</option>
                <option value="double_opening">Double Opening</option>
                <option value="four_door_opening">Four Door Opening</option>
            </select>
            <button class="btn" type="submit" name="view_materials">
                View Materials
            </button>
        </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['view_materials'])) {
            $doorType = $_POST['door_type'];

            if ($doorType === 'single_door') {
                header('Location: singledoor m.php');
                exit;
            } elseif ($doorType === 'one_and_half_door') {
                header('Location: 1 and half.php');
                exit;
            } elseif ($doorType === 'double_opening') {
                header('Location: double open.php');
                exit;
            } elseif ($doorType === 'four_door_opening') {
                header('Location: four door opening.php');
                exit;
            }
        }
    }
    ?>

</body>
</html>
    
    <footer>
                      <p>&copy; 2024 King Steel. All rights reserved.</p>
                    </footer>
</body>
</div>
</html>
