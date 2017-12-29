<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.inc';

$docx = new Phpdocx\Utilities\PdfUtilities();

$source = '../../files/Test.pdf';
$target = 'example_watermarkText.pdf';

$docx->watermarkPdf($source, $target, 'text', array('text' => 'PHPDocX'));