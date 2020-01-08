<?php

use yii\db\Migration;

/**
 * Class m191225_132843_init_table_country
 */
class m191225_132843_init_table_country extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('country',[
            'code' => $this->string(2),
            'name' => $this->string(52)->notNull(),
            'population' => $this->integer(11)->notNull()->defaultValue(0),
            'PRIMARY KEY (code)',
        ]);

        $this->batchInsert('country',['code', 'name', 'population'], [
        ['AU', 'Australia', 24016400],
        ['BR', 'Brazil', 205722000],
        ['CA', 'Canada', 35985751],
        ['CN', 'China', 1375210000],
        ['DE', 'Germany', 81459000],
        ['FR', 'France', 64513242],
        ['GB', 'United Kingdom',65097000],
        ['IN', 'India', 1285400000],
        ['RU', 'Russia', 146519759],
        ['US', 'United States',322976000],
    ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('country');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191225_132843_init_table_country cannot be reverted.\n";

        return false;
    }
    */
}
