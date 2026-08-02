<?php

require __DIR__ . '/inc/all.inc.php';

$page = @(string) ($_GET['page'] ?? 'index');

if ($page === 'index') {
  echo "TODO: Develop the index page!<br />\n";
} else {
  http_response_code(404);
  echo "404 Error";
}
