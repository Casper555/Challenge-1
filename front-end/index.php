<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <style>
         @import url(https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900);
    h1, h2, h3{
        font-family: inter;
    }
</style>
</head>
<body>

    <div class="balk">
        <div class="inlog"><h1>Vragenlijst</h1></div>
    </div>
    <div> <a href="inlog.php">  <img src="pijl.png" width="140px" ></a></div>
    <div class="Vraag1"><h3>Vraag 1:</h3></div>
    <div class="Vraag2"><h3>Vraag 2:</h3></div>
    <div class="Vraag3"><h3>Vraag 3:</h3></div>
    <div class="Vraag4"><h3>Vraag 4:</h3></div>
    <div class="Vraag5"><h3>Vraag 5:</h3></div>
    <div class="Vraag6"><h3>Vraag 6:</h3></div>
    <div class="Vraag7"><h3>Vraag 7:</h3></div>
    <div class="Vraag8"><h3>Vraag 8:</h3></div>

    <input type="text" class="Antwoord1">
    <input type="text" class="Antwoord2">
    <input type="text" class="Antwoord3">
    <input type="text" class="Antwoord4">
    <input type="text" class="Antwoord5">
    <input type="text" class="Antwoord6">
    <input type="text" class="Antwoord7">
    <input type="text" class="Antwoord8">

    <form action="einde.php">
        <input type="submit" class="submit" value="Verzenden">
      </form>
      <div class="einde"></div>

</body>
</html>