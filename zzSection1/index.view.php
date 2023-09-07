<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MyNewSite</title>
    <link rel="stylesheet" href="">
    <style>
      body {
        display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serif;
      }
    </style>
  </head>
  <body>
    <ul>
      <?php foreach ($filteredBooks as $book) : ?>
        <li>
          <a href="<?= $book['purchaseUrl']; ?>"><?= $book['name']; ?></a> <?= $book['releaseYear']; ?>
        </li>
      <?php endforeach ?>
    </ul>

  </body>
</html>
