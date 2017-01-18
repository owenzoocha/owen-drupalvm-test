<?php

// $local_vars = array(
//   'user' => 'CHANGE_ME'
//   'ssh_path' => 'CHANGE_ME'
// );

// drush_set_context('LOCAL_USER', $local_vars);

$aliases['localdev'] = array(
  'uri' => 'http://default',
  'path-aliases' => array(
    // Path for sql-sync dumps.
    '%dump' => '/var/www/drush-backups/' . date('Ymdhis') . '.sql',
    '%files' => 'sites/default/files',
  ),
  'command-specific' => array (
    'sql-sync' => array (
      'no-cache' => TRUE,
      'mode' => 'rlptz',
    ),
    'rsync' => array(
      'mode' => 'rlptz',
    ),
  ),
);

// $aliases['kmtools.local'] = array(
//   'parent' => '@localdev',
//   'root' => '/home/vagrant/www/km_tools',
// );

