<?php

class Connection
{
    public static function make($config)
    {
        // create a PDO connection with the configuration data
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );

        } catch (PDOException $e) {
           // report error message
          die(var_dump($e->getMessage()));
        }
    }

}
