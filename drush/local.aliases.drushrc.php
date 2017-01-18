<?php

/**
 * After cloning the repo, copy this file and name it local.aliases.drushrc.php
 * That's a gitignored file so you won't be able to push it.
 *
 * Make sure you set your SSH user for sites in the array below.
 * Normally on Opsworks stacks your username will be the same across all stacks and aws accounts.
 *
 * If a site is not on opsworks then the username will probably be 'ubuntu'
 * In that case you will probably need to specify the path to the ssh key as well,
 * This is still experimental but for those servers you can add your ssh_path below
 * and it should work. (the user will be specified in the alias file)
 * Example: /home/zoocha/.ssh/
 * (include the slash at the end)
 */

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

