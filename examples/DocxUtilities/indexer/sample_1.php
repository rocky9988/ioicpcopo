<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.inc';

$indexer = new Phpdocx\Utilities\Indexer('../../files/indexer.docx');
$output = $indexer->getOutput();

print_r('body: ');
print_r($output['body']['text']);

print_r('comments: ');
print_r($output['comments']);

print_r('endnotes: ');
print_r($output['endnotes']);

print_r('footers: ');
print_r($output['footers']);

print_r('footnotes: ');
print_r($output['footnotes']);

print_r('headers: ');
print_r($output['headers']['text']);

print_r('body links: ');
print_r($output['body']['links']);

print_r('body charts: ');
print_r($output['body']['charts']);

/*print_r('headers images: ');
print_r($output['headers']['images']);*/

print_r('core properties: ');
print_r($output['properties']['core']);

print_r('custom properties: ');
print_r($output['properties']['custom']);