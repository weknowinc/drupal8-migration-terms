# drupal8-migration-terms

Module to migrate Drupal 8 terms to Drupal 8
This module migrates terms from Tags vocabulary.

Instructions:
-------------

- Install [DrupalConsole](https://docs.drupalconsole.com/en/getting/project.html)
 if you do not have it yet:

- Enable custom module

`$ drupal module:install drupal8_migration_terms`

- Setup migration

`$ drupal migrate:setup`

![alt text][logo]

[logo]: ./images/drupal-migrate-setup.png "Drupal Console migrate setup prompt"


- Execute migration

`$ drupal migrate:execute migration_term_tags`