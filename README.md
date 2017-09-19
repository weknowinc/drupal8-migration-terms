# drupal8-migration-terms

Module to migrate Drupal8 terms to Drupal 8

Instructions:

- Add credentials to settings.php file:

```
$databases['migration_drupal8']['default'] = array(
  'driver' => 'mysql',
  'database' => 'db_old_drupal8',
  'username' => 'root',
  'password' => 'root',
  'host' => 'mariadb',
  'port' => '3306',
  'prefix' => '',
  'collation' => 'utf8mb4_general_ci',
);
```

- Enable 'drupal8_migration_terms' custom module and its dependencies.

`$ drush en drupal8_migration_terms -y`

- Execute migration:

`$ drush mi migration_term_tags`

You should see something like:
```
Processed 5 items (5 created, 0 updated, 0 failed, 0 ignored) - done    [status]
with 'migration_term_tags'
```