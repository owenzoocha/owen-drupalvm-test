#!/usr/bin/env bash

# Quick symlink to the www folder.
file=/home/vagrant/www
if [ ! -h "$file" ]; then
	ln -s /projects/www /home/vagrant/
else
  echo "symlink to www exists."
fi

# Sync the bash aliases across
bashaliases=/home/vagrant/.bash_aliases
if [ ! -h "$bashaliases" ]; then
	ln -s /vagrant/tweaks/.bash_aliases /home/vagrant/
else
  echo "bash aliases symlink exists."
fi

