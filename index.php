<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   <div class="container">
     <form action="./saluti.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="userText">Inserisci qui il paragrafo</label>
                <textarea name="userText" id="userText" cols="30" rows="10"></textarea>
            </div>


            <div class="col">
                <label for="userBadword">Inserisci la badword</label>
                <input type="text" name="userBadword" id="userBadword">
            </div>     
        </div>

        <button type="sumbit">Invia</button>
    
    </form>
   </div>
</body>
</html>