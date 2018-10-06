
<?php
/*
Name: James Farrell
Description: PHP script that uses HTML,Javascript and PHP.
This Web application presents the user with a page to enter Student ID
and password.  It validates the student ID (has to be number) and password(cannot be empty).
On sumbit a second php script readfile.php is called that opens a text file and prints
contents on second page along with Student ID.
*/

  echo <<<_END
    <html>
      <head>
        <title>Assignment 6</title>
        <script>
            function validateStudentID(field)
            {
                return (field =="" || isNaN(field)) ? "Not a Valid ID.\\n" : ""
            }
            function validatePassword(field)
            {
                return(field == "") ? "No Password Entered.\\n" : ""
            }
            function validate(form)
            {
                fail = validateStudentID(form.firstname.value)
                fail += validatePassword(form.lastname.value)
                if (fail == "") return true
                else { alert(fail); return false }
            }
        </script>
      </head>
      <body>
      <link href=form.css rel=stylesheet>
      <form method="post" action="readfile.php" value="<?php echo form.studentID.value ?>" name="studentID" onsubmit="return validate(this)">
        <tr><td>Student ID</td>
        <input type="text" name="studentID"><br></tr>
        <tr><td>Password</td>
        <input type="password" name="password"><br></tr>
        <input type="submit" value="Login">
      </form>
      </body>
    </html>
_END;
?>