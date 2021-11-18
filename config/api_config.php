<?php

/* Api Configuration */

$domain = 'http://b-farm.test/';
$base_url = $domain . 'api/';

return [
    'domain'                => $domain,
    'base_url'              => $base_url,
    'get_all_rekomendasi'   => $base_url . 'get-all-rekomendasi',
    'get_rekomendasi_by_id'   => $base_url . 'get-rekomendasi-by-id',
];
