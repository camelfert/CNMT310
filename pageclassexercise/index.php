<?php

require_once(__DIR__ . "/Page.class.php");

$page = new Page("Page");

print $page->getTopSection();
print "<h1>Page created with Page class</h1>" . PHP_EOL;
print "<p>Paragraph created with Page class</p>" . PHP_EOL;
print "<h2>Test H2</h2>" . PHP_EOL;
print "<h3>This is a super fun assignment!</h3>" . PHP_EOL;

print $page->getBottomSection();

