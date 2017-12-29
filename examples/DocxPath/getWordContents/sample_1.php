<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.inc';

$docx = new Phpdocx\Create\CreateDocxFromTemplate('../../files/DOCXPathTemplate.docx');

$referenceNode = array(
    'type' => 'paragraph',
    'contains' => 'heading',
);

$contents = $docx->getWordContents($referenceNode);

print_r($contents);