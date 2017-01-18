#!/usr/bin/env bash

cd ~/.drush/

# Copy over drush aliases that were added to the temp directory from the host during provisioning.
rsync -ur /vagrant/drush/ /home/vagrant/.drush/