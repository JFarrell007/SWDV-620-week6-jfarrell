<html>
<head>
    <title>Student Message</title>
    <link href=form.css rel=stylesheet>
</head>
<body>
<?php
//Get the accountID that was passed in from first page
$accountID = $_POST['studentID'];
echo "<h1> Welcome Student $accountID </h1>";
//Open the text file
$file = fopen("studentMessage.txt", "r") or exit("Unable to open file!");
//Read the file one line at a time
while(!feof($file))
    {
        echo fgets($file). "<br />";
    }
//close the file
fclose($file);
?>
</body>
</html>