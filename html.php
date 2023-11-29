<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <?php 
        require_once 'info.php';
    ?>
    <body>
    
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <form id="myForm">
            <table>
                <tr>
                    <td>User Name: </td>
                    <td>
                        <input type="text" id="username" name="username"/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit" name="submitBtn" style="background-color:green;color:white;width:70px;"/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="" id="msg" style="color:lightgreen;">Key in username and click the submit</td>
                </tr>
            </table>
        </form>
        <script src="verify_ajax.js" type="text/javascript"></script>
    </body>
    
    </html>