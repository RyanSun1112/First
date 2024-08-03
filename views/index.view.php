
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin:0;
            font-family: sans-serif;

        }
    </style>
</head>
<body>
    <h1> 
        <!-- <?= $message ?> 
        <?php echo $message; ?>  
        <?php echo "friends"; ?> -->
        <?= "Top Performing users"?>
    </h1>
    <ul> 
        <!-- <?php foreach ($friends1 as $i){
            echo "<li>Mr. {$i}</li>"; // echo "<li>$i</li>";
        }
        ?>
        <?php foreach($friends1 as $i):?>
           <li> <?php echo "Mr" . $i; ?> </li>
        <?php endforeach; ?>  -->
        <?php foreach($username as $f):?>
            <li> <?php echo $f; ?> </li>
            <?php endforeach; ?>
    </ul>
    <p><?php echo $username [1]; ?> </p>
    <ul> 
        <!-- <?php foreach($friends as $specific){
            echo "<li> {$specific['name']} </li>";
        }
        ?> -->
        <?php foreach($username1 as $d){
            if($d['Gender'] === "Male"){
                echo "<li> {$d['Gender']} </li>";
            }
        }
        ?>
        <?php foreach($username1 as $s):?>
        
                <li> <?php echo $s['name']; ?> </li>
        <?php endforeach; ?>
    </ul>

    <ul> 
        <?php foreach($filteredpeople as $person): ?>
            <li>
                <?= $person['name'] ; ?>
        </li>
        <?php endforeach; ?>
    </u>
</body>
</html>