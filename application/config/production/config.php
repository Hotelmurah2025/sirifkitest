<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['log_threshold'] = 1;
$config['cache_query_string'] = FALSE;
$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = APPPATH . 'sessions';
$config['sess_match_ip'] = TRUE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = TRUE;
$config['cookie_secure'] = TRUE;
$config['cookie_httponly'] = TRUE;
