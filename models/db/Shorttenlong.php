<?php
/**
 * Created by VSCode
 * User: Shahimian
 * Date: 2019-06-14
 * Time: 12:49:15
 */

namespace app\modules\schedule\models\db;


use yii\db\Migration;

class Shortterm extends Migration
{

    function up()
    {
        if($this->getDb()->schema->getTableSchema('shortterm') == false){
            $this->createTable('shortterm', [
                'shortterm_id' => $this->bigPrimaryKey(),
                'longterm_id' => $this->bigInteger(),
                'user_id' => $this->bigInteger(),
                'title' => $this->string(),
                'goal' => $this->string(),
                'start' => $this->datetime(),
                'finish' => $this->datetime(),
                'created_at' => $this->integer(),
                'updated_at' => $this->integer(),
            ]);
        }
        return parent::up();
    }

}
