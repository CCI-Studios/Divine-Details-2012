<?php

$aliases['dev'] = array(
	'uri'			=> 'dev.devinedetails.ca',
	'root' 			=> '/home/divine/subdomains/dev/public_html',
	'remote-host'	=> 'divinedetails.ca',
	'remote-user'	=> 'divine',
	'path-aliases'	=> array(
		'%files'	=> 'sites/default/files',
	),
);

$aliases['live'] = array(
	'uri'			=> 'devinedetails.ca',
	'root' 			=> '/home/divine/subdomains/live/public_html',
	'remote-host' 	=> 'divinedetails.ca',
	'remote-user' 	=> 'divine',
	'path-aliases'	=> array(
		'%files'	=> 'sites/default/files',
	),
);