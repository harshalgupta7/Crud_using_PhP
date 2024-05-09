<html>

<head>
    <title>
        Employee Form
    </title>
</head>

<body style="background-color:F3EEEA">
    <div style="display:flex ; justify-content:space-between ; color:white ; background-color: B0A695; margin: 5px 2px 10px 2px; outline-style: double; outline-color: 776B5D;">

        <div style="padding-left:20px">
            <h1><b>Welcome to Employee Database</b></h1>
        </div>

        <div style="padding-right:20px"><a href="insert.php" style="color:white ; text-decoration:none;">
                <h1><b>ADD</b></h1>
            </a>
        </div>

    </div>



    <?php if(isset($_SESSION['message'])){ ?>
        <h2 style="color: green;"><?= $_SESSION['message'] ?></h2>
    <?php } ?>


    <div style="display:flex ; justify-content:space-between">
        <div>
            <?php
            require_once 'select.php'
            ?>
        </div>

    </div>

</body>

</html>