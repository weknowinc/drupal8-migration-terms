<?php

namespace Drupal\drupal8_migration_terms\Plugin\migrate\source;

use Drupal\migrate\Plugin\migrate\source\SqlBase;

/**
 * Drupal 8 node source from database.
 *
 * @MigrateSource(
 *   id = "migration_d8_term"
 * )
 */
class Term extends SqlBase {
  /**
   * The module handler.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * {@inheritdoc}
   */
  public function query() {
    // Select node in its last revision.
    $query = $this->select('taxonomy_term_data', 't')
      ->fields('t', [
        'tid',
        'vid',
        'langcode',
      ])
      ->fields('td',['name', 'weight', 'changed']);
    $query->innerJoin('taxonomy_term_field_data', 'td', 't.tid = td.tid');
    return $query;
  }

  /**
   * {@inheritdoc}
   */
  public function fields() {
    $fields = [
      'tid' => $this->t('Term ID'),
      'vid' => $this->t('Vocabulary'),
      'langcode' => $this->t('Language'),
      'name' => $this->t('Name'),
      'weight' => $this->t('Weight'),
      'changed' => $this->t('Changed'),
    ];
    return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function getIds() {
    $ids['tid']['type'] = 'integer';
    $ids['tid']['alias'] = 't';
    return $ids;
  }
}
