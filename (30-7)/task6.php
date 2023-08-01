<?php
$url = 'https://www.w3schools.com/php/default.asp';
$components = parse_url($url);

if ($components === false) {
    echo 'Invalid URL';
} else {
    echo 'Scheme (protocol): ' . $components['scheme'] . "\n";
    echo 'Host: ' . $components['host'] . "\n";
    echo 'Port: ' . (isset($components['port']) ? $components['port'] : 'default') . "\n";
    echo 'Path: ' . (isset($components['path']) ? $components['path'] : 'empty') . "\n";
    echo 'Query: ' . (isset($components['query']) ? $components['query'] : 'empty') . "\n";
    echo 'Fragment: ' . (isset($components['fragment']) ? $components['fragment'] : 'empty') . "\n";
}
?>
