# drupal8-migration-terms

Module to migrate Drupal 8 terms to Drupal 8
This module migrates terms from Tags vocabulary.

Instructions:
-------------

- Install [DrupalConsole](https://docs.drupalconsole.com/en/getting/project.html)
 if you do not have it yet:

- Enable custom module

`$ drupal module:install drupal8_migration_terms`

- Setup migration providing connection credential to legacy Drupal 8 database.

`$ drupal migrate:setup`

![alt text][setup]

[setup]: ./images/drupal-migrate-setup.png "Drupal Console migrate setup prompt"


- Execute migration providing same credentials as migrate:setup command.

`$ drupal migrate:execute migration_term_tags`

![alt text][execute]

[execute]: ./images/drupal-migrate-execute.png "Drupal Console migrate execute prompt"
