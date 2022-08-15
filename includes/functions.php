<?php
    function query(/* $sql [, ...]*/)
        {
            //SQL statement
            $sql = func_get_arg(0);
            //parameters, if any
            $parameters = array_slice(func_get_args(), 1);
            //try to conect to database
            static $handle;
            if (!isset($handle))
            {
                try
                {
                    //conect to database
                    $handle = new PDO("mysql:host=" . SERVERNAME . ";dbname=" . DBNAME . ";port=" . PORT, USERNAME, PASSWORD);
                    //ensure thet
                    $handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                }
                catch (Exception $e)
                {
                    trigger_error($e->getMessage(), E_USER_ERROR);
                    exit;
                }
            }
            // prepareSQL statement
            $statement = $handle->prepare($sql);
            if ($statement === false)
            {
                //trigger (big, orange) error
                trigger_error($handle->errorInfo()[2], E_USER_ERROR);
                exit;
            }
            //execte SQL statemet
            $results = $statement->execute($parameters);
            //return reslt set´s rows, if any
            if($results !== false)
            {
                return $statement->fetchAll(PDO::FETCH_ASSOC);
            }
            else 
            {
                return false;
            }
        }
    function redirect(){
        header("Location: index.php");
    }
?>
