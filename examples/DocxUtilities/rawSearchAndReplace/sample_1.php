<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.inc';

$newDocx = new Phpdocx\Utilities\DocxUtilities();

$newDocx->rawSearchAndReplace('../../files/linked_image.docx', 'example_rawSearchAndReplace.docx', '$URL$', 'http://www.google.es');