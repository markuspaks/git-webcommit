<?php

// configure the list of repositories, only one support at the moment
$repos = Array ('/tmp/git-webcommit');

// set the default repository, you probably want to keep it set to 0
$defaultrepo = 0;

// configure the authentication method:
$authmethod = 'httpbasic';
//	$authmethod = 'htpasswd';
//	$authmethod = 'none';

// when using htpasswd, the 'pass' entry isn't needed
// 'name' and 'email' are required.
$auth = Array (
    'testuser2' => Array ('pass' => 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'name' => 'Test User', 'email' => 'test@somewhere')
);

// passwords are sha1 hashes, uncomment next line to create the password hash:
//	exit (sha1 ('my pass'));

// author for when you don't use authentication
$author = $auth ['testuser2']['name'] . '<' . $auth ['testuser2']['email'] . '>'; // 'firstname lastname <email-address>'
//	$author = '';

$title = '';

$enable_stats = false; // not available yet

$disable_push_pull = false;

$debug = false;
//	$debug = true;

$gitpath = 'git';
$diffpath = 'diff';