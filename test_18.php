<?php

    echo ('<link rel="stylesheet" href="style.css">');
    include ('header.php');

    echo('<main>');
    
    $doc= new DOMDocument('1.0', "UTF-8");

    $invalid_elem = $doc->createElement('field', 'incorrect attribute');
    $invalid_attr = $doc->createAttribute('name');
    $invalid_attr->value = 'foo&bar';
    $invalid_elem->appendChild($invalid_attr);
    $doc->appendChild($invalid_elem);

    $valid_elem = $doc->createElement('field', 'correct attribute');
    $valid_attr = $doc->createAttribute('name');
    $valid_attr->value = 'foo&amp;bar';
    $valid_elem->appendChild($valid_attr);
    $doc->appendChild($valid_elem);

    echo('</main>');