<?php

// Lamba Functionf

$books = [
  [
      'name' => 'Do Androids Dream of Electric Sheep',
      'author' => 'Philip K. Dick',
      'releaseYear' => 1968,
      'purchaseUrl' => 'http://example.com'
  ],
  [
      'name' => 'Project Hail Mary',
      'author' => 'Andy Weir',
      'releaseYear' => 2021,
      'purchaseUrl' => 'http://example.com'
  ],
  [
      'name' => 'The Martian',
      'author' => 'Andy Weir',
      'releaseYear' => 2011,
      'purchaseUrl' => 'http://example.com'
  ],
];

// function filter($items, $key, $value) {
//   $filteredItems = [];

//   foreach ($items as $item) {
//     if ($item[$key] === $value) {
//       $filteredItems[] = $item;
//     }
//   }

//   return $filteredItems;
// }

// $filteredBooks = filter($books, 'releaseYear', 1968);
// function filter($items, $fn) {
//   $filteredItems = [];

//   foreach ($items as $item) {
//     if ($fn($item)) {
//       $filteredItems[] = $item;
//     }
//   }

//   return $filteredItems;
// }

// $filteredBooks = filter($books, function($book) {
//   return $book['releaseYear'] === 1968;
// });

// can achieve using array_filter
$filteredBooks = array_filter($books, function($book) {
  return $book['releaseYear'] === 1968;
});

require "index.view.php";
