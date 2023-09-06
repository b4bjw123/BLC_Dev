<?php
// Concatenate the files in the /source/ directory
// This would be a sensible point to compress your Javascript
$js = '';
$js = $js . 'window.APP={}; (function (APP) {';
$js = $js . file_get_contents('../../source/application/applicationcontroller.js');
$js = $js . '}(APP));';
$output['js'] = $js;
// Concatenate the files in the /css/ directory
// This would be a sensible point to compress your css
$css = '';
$css = $css . file_get_contents('../../css/global.css');
$output['css'] = $css;
// Encode with JSON (PHP 5.2.0+) and output the resources
echo json_encode($output);