<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.inc';

$merge = new Phpdocx\Utilities\DOCXPathUtilities();
$merge->splitDocx('../../files/document_sections.docx', 'splitDocx_.docx', array('keepSections' => false));