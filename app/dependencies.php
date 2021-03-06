<?php
use Slim\Views\PhpRenderer;

$containerBuilder->addDefinitions([
  // Services
  PhpRenderer::class => function($c) {
    $templatePath = __DIR__ . '/../templates';
    $phpView = new PhpRenderer($templatePath, ["title" => "My App"]);
    $phpView->setLayout("layout.php");
    return $phpView;
  }
]);

