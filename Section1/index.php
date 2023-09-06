<?php

$books = [
  [
    'name' => 'Do Androids',
    'author' => 'Philip',
    'releaseYear' => 1968,
    'purchaseUrl' => 'http://www.com'
  ],
  [
    'name' => 'Hail Mary',
    'author' => 'Andy',
    'releaseYear' => 1923,
    'purchaseUrl' => 'http://www.com'
  ],
  [
    'name' => 'Martian',
    'author' => 'Andy',
    'releaseYear' => 1988,
    'purchaseUrl' => 'http://www.com'
  ],
];

function filter($items, $fn) {
  $filteredItems = [];

  foreach ($items as $item) {
    if ($fn($item)) {
      $filteredItems[] = $item;
    }
  }

  return $filteredItems;
}

// Can also use built-in function array_filter() instead of the filter built above.
$filteredBooks = filter($books, function ($book) {
  return $book['releaseYear'] > 1949 && $book['releaseYear'] < 2021;
});

require "index.view.php";

// closing tag optional for files that exclusively contain PHP code. ?> 

<?php /* // Learning lambda functions (aka anonymous functions) ?>
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
    <?php
      $books = [
        [
          'name' => 'Do Androids',
          'author' => 'Philip',
          'releaseYear' => 1968,
          'purchaseUrl' => 'http://www.com'
        ],
        [
          'name' => 'Hail Mary',
          'author' => 'Andy',
          'releaseYear' => 1923,
          'purchaseUrl' => 'http://www.com'
        ],
        [
          'name' => 'Martian',
          'author' => 'Andy',
          'releaseYear' => 1988,
          'purchaseUrl' => 'http://www.com'
        ],
      ];

      function filter($items, $fn) {
        $filteredItems = [];

        foreach ($items as $item) {
          if ($fn($item)) {
            $filteredItems[] = $item;
          }
        }

        return $filteredItems;
      }

      // Can also use built-in function array_filter() instead of the filter built above.
      $filteredBooks = filter($books, function ($book) {
        return $book['releaseYear'] > 1949 && $book['releaseYear'] < 2021;
      });
    ?>

    <ul>
      <?php foreach ($filteredBooks as $book) : ?>
        <li>
          <a href="<?= $book['purchaseUrl']; ?>"><?= $book['name']; ?></a> <?= $book['releaseYear']; ?>
        </li>
      <?php endforeach ?>
    </ul>
    
  </body>
  <?php */ ?>









 <?php /* //Learning about functions ?>
  <body>
    <?php
      $books = [
        [
          'name' => 'Do Androids',
          'author' => 'Philip',
          'releaseYear' => 1968,
          'purchaseUrl' => 'http://www.com'
        ],
        [
          'name' => 'Hail Mary',
          'author' => 'Andy',
          'releaseYear' => 1923,
          'purchaseUrl' => 'http://www.com'
        ],
        [
          'name' => 'Martian',
          'author' => 'Andy',
          'releaseYear' => 1988,
          'purchaseUrl' => 'http://www.com'
        ],
      ];
      /*
      function filterByAuthor($books, $author) {
        $filteredBooks = [];

        foreach ($books as $book) {
          if ($book['author'] === 'Andy') {
            $filteredBooks[] = $book;
          }
        }

        return $filteredBooks;
      }
    ?>

    <ul>
      <?php foreach (filterByAuthor($books, 'Andy') as $book) : ?>
        <li>
          <a href="<?= $book['purchaseUrl']; ?>"><?= $book['name']; ?></a> <?= $book['releaseYear']; ?>
        </li>
      <?php endforeach ?>
    </ul>


    <ul>
      <?php foreach ($books as $book) : ?>
        <?php if ($book['author'] === 'Andy') : ?>
          <li>
            <a href="<?= $book['purchaseUrl']; ?>"><?= $book['name']; ?></a> <?= $book['releaseYear']; ?>
          </li>
        <?php endif ?>
      <?php endforeach ?>
    </ul>

    <?php
      $movies = [
        [
          'title' => 'Spiderman',
          'releaseYear' => 2005,
        ],
        [
          'title' => 'Hulk',
          'releaseYear' => 2000,
        ],
        [
          'title' => 'Cap. America',
          'releaseYear' => 1997,
        ],
        [
          'title' => 'Django',
          'releaseYear' => 1885,
        ],
      ];

      function filterByYear($movies, $year) {
        $filteredMovies = [];

        foreach ($movies as $movie) {
          if ($movie['releaseYear'] >= $year) {
            $filteredMovies[] = $movie;
          }
        }

        return $filteredMovies;
      }
    ?>

    <ul>
      <?php foreach (filterByYear($movies, 2000) as $movie) : ?>
        <li><?= $movie['title'] . ' ' . $movie['releaseYear']; ?></li>
      <?php endforeach ?>
    </ul>

  </body>
  <?php */ ?>









  <?php /* // Learning Associative Arrays ?>
  <body>
    <?php 
      $books = [
        [
          'name' => 'Do Androids',
          'author' => 'Philip',
          'purchaseUrl' => 'http://www.com',
          'year' => '1948'
        ],
        [
          'name' => 'Project Hail Mary',
          'author' => 'Weir',
          'purchaseUrl' => 'http://ww.com',
          'year' => '1949'
        ],
      ]

    ?>

    <ul>
      <?php foreach ($books as $book) : ?>
        <li>
          <a href="<?= $book['purchaseUrl'] ?>"><?= $book['name'] ?></a> <?= $book['year'] ?>
        </li>
      <?php endforeach ?>
    </ul>
  </body>
  <?php */ ?>








  <?php /* // Learning arrays ?>
  <body>
    <h1>Recommended Books</h1>

    <?php
      $books = [
        "Do Androids Drea",
        "The Langs",
        "Hail Mary"
      ];
    ?>
    
    <p>
      <?= $books[1] ?>
    </p>

    <ul>
    <?php foreach ($books as $book) : ?>
      <li><?= $book ?></li>
    <?php endforeach; ?>
    </ul>

    <?php
      $names = [
        "Jason",
        "Jimmy",
        "Julia"
      ]
    ?>

    <ul>
      <?php foreach ($names as $name) : ?>
        <li><?= $name ?></li>
      <?php endforeach ?>
    </ul>


    <ul>
      <?php foreach ($books as $book) {
        echo "<li>{$book}</li>";
      }
      ?>
    </ul>

  </body>
  <?php */ ?>







  <?php /* // Basic conditionals, booleans, and variables ?>
  <body>

    <?php
      $name = "Dark Matter";
      $read = true;

      if ($read) {
        $message = "You have read $name";
      } else {
        $message = "You have NOT read $name";
      }
    ?>
    <h1>

      <?php echo $message; ?>
      <?= $message; ?>

    </h1>
    <script src="" async defer></script>
  </body>
  <?php */ ?>


</html>