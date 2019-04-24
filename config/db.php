<?php

$_database_way = realpath(__DIR__."/../data")."/sqlite_data.db";

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'sqlite:' . $_database_way,
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
