<?php

$output = shell_exec('Rscript script_faq.r "Tidak bisa login ERP"');

var_dump($output);

$json = [
    'data' => "Hello world"
];

echo json_encode($json);

?>
