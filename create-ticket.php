
<?php

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);

use Tuto\Entity\Ticket;

$ticket = new Ticket();
$ticket->setTitle("Danger feu");
$ticket->setSection("r&d");
$ticket->setDescription("Du feu dans le balcon");

$entityManager->persist($ticket);
$entityManager->flush();

echo "Nouveau ticket créé : ", $ticket->getId();