<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.inc';

$docx = new Phpdocx\Create\CreateDocxFromTemplate('../../files/DOCXPathBlocks.docx');

$docx->cloneBlock('EXAMPLE');

$docx->cloneBlock('EXAMPLE');

$docx->clearBlocks();

$docx->createDocx('example_cloneBlock_2');