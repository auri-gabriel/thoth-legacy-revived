<?php
$config['protocol'] = 'smtp';
$config['smtp_host'] = getenv('SMTP_HOST') ?: 'mailhog';
$config['smtp_port'] = (int) (getenv('SMTP_PORT') ?: 1025);
$config['smtp_user'] = getenv('SMTP_USER') ?: '';
$config['smtp_pass'] = getenv('SMTP_PASSWORD') ?: '';
$config['mailtype'] = 'text';
$config['charset']  = 'utf-8';
$config['newline']  = "\r\n";
