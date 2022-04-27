<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./asset/style.css">
    <script src="./asset/resultSearch.js"></script>
    <script src="./asset/autocomplete.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <a href="home.php"><img src="asset\images\logo_autocomplettion_w.svg" alt=""></a>
        <div>
            <img src="asset/images/icon_loupe.svg" alt="icon de recherche" aria="hidden">
            <input type="search" role="combobox" name="recherche" placeholder="Rechercher" autocomplete='off' aria-autocomplete="list" aria-haspopup="listbox" aria-controls="searchResult" aria-expanded="false">
        <div id="searchResult"></div>
        </div>
    </header>
    <main></main>
</body>
</html>