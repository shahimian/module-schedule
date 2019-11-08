<?php
/**
 * Created by VSCode
 * User: Shahimian
 * Date: 2019-06-14
 * Time: 12:49:15
 */

namespace shahimian\schedule\models\db;


use yii\db\Migration;

class Schedules extends Migration
{

    function up()
    {
        if($this->getDb()->schema->getTableSchema('schedules') == false){
            $this->createTable('schedules', [
                'schedule_id' => $this->bigPrimaryKey(),
                'user_id' => $this->bigInteger(),
                'title' => $this->string(),
                'description' => $this->string(),
                'start' => $this->datetime(),
                'finish' => $this->datetime(),
                'created_at' => $this->integer(),
                'updated_at' => $this->integer(),
            ]);
        }
        return parent::up();
    }

}
