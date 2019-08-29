<?php

use Arrilot\BitrixMigrations\BaseMigrations\BitrixMigration;
use Arrilot\BitrixMigrations\Exceptions\MigrationException;

class AutoAddUfUfUfufufufToEntityIblock2Section20190827115623269371 extends BitrixMigration
{
    /**
     * Run the migration.
     *
     * @return mixed
     * @throws MigrationException
     */
    public function up()
    {
        $fields = array (
  'ENTITY_ID' => 'IBLOCK_2_SECTION',
  'FIELD_NAME' => 'UF_UFUFUFUF',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => 'UF_UFUFUFUF',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'Y',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 'a:6:{s:4:"SIZE";i:20;s:4:"ROWS";i:1;s:6:"REGEXP";s:0:"";s:10:"MIN_LENGTH";i:0;s:10:"MAX_LENGTH";i:0;s:13:"DEFAULT_VALUE";s:4:"test";}',
  'EDIT_FORM_LABEL' => 
  array (
    'ru' => 'Тестовое дополнительное свойство',
    'en' => 'Тестовое дополнительное свойство',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'ru' => 'Тестовое дополнительное свойство',
    'en' => 'Тестовое дополнительное свойство',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'ru' => 'Тестовое дополнительное свойство',
    'en' => 'Тестовое дополнительное свойство',
  ),
  'ERROR_MESSAGE' => 
  array (
    'ru' => '',
    'en' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'ru' => '',
    'en' => '',
  ),
);

        $this->addUF($fields);
    }

    /**
     * Reverse the migration.
     *
     * @return mixed
     * @throws MigrationException
     */
    public function down()
    {
        $id = $this->getUFIdByCode('IBLOCK_2_SECTION', 'UF_UFUFUFUF');
        if (!$id) {
            throw new MigrationException('Не найдено пользовательское свойство для удаления');
        }

        (new CUserTypeEntity())->delete($id);
    }
}
