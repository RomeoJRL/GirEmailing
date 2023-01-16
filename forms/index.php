<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display: flex;align-items: center;justify-content: center;">
    <form method="post" action="mail.php" style="display: flex;align-items: center;justify-content: space-between;flex-direction: column;">
  <label for="nom">Name:</label>
  <input type="text" id="nom" name="nom" required><br>
  
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required><br>

  <label for="message">Subject:</label>
  <input type="text" id="subject" name="subject" required><br>
  
  <label for="name">Message:</label>
  <input type="text" id="name" name="name" required><br>
  
  <input type="submit" value="Send" name="submi">
</form>

</body>
</html>