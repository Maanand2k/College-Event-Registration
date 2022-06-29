<?php
include_once 'classes/db1.php';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Fiesta'21</title>
        <title></title>
        <?php require 'utils/styles.php'; ?>
        
    </head>
    <body>
        <?php require 'utils/header.php'; ?>

        <div class ="content">
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <form action="RegisteredEvents.php" class ="form-group" method="POST">

                        
                        <div class="form-group">
                            <label for="roll_no"> Roll No </label><br>
                            <input type="text" id="roll_no" name="roll_no" class="form-control" required>          
                        </div>
                        <button type="submit" name="submit" class = "btn btn-default">Login</button>
                    </form>
                </div>
            </div>
        </div>	
    </body>
</html>
