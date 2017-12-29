<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.inc';

$merge = new Phpdocx\Utilities\DOCXPathUtilities();
$merge->removeSection('../../files/document_sections.docx', 'removeSection.docx', 2);