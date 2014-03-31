<?php
/**
 * Part of Munin PHP OPcache plugin - Refer to php_opcache for installation instructions.
 */

if (function_exists('opcache_get_status'))
{
    $data = opcache_get_status();
    $output = array(
        'mem_used.value' => $data['memory_usage']['used_memory'],
        'mem_free.value' => $data['memory_usage']['free_memory'],
        'mem_wasted.value' => $data['memory_usage']['wasted_memory'],
		'oom_restarts.value' => $data['opcache_statistics']['oom_restarts'],
		'hash_restarts.value' => $data['opcache_statistics']['hash_restarts'],
		'manual_restarts.value' => $data['opcache_statistics']['manual_restarts'],
    );
}
else
{
    // OPCache not installed :(
    $output = array(
        'mem_used.value' => 0,
        'mem_free.value' => 0,
		'mem_wasted.value' => 0,
		'oom_restarts.value' => 0,
		'hash_restarts.value' => 0,
		'manual_restarts.value' => 0,
    );
}

header('Content-Type: text/plain');
foreach ($output as $key => $value)
{
    echo $key, ' ', $value, "\n";
}
