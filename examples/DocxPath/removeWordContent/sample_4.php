<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.inc';

$docx = new Phpdocx\Create\CreateDocxFromTemplate('../../files/docxpath/charts.docx');

$referenceNode = array(
    'type' => 'chart',
    'occurrence' => 2,
);

$docx->removeWordContent($referenceNode);

$docx->createDocx('example_removeWordContent_4');