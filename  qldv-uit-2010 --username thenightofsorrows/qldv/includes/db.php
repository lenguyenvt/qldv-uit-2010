<?php

//	-----------------------------------------
// 	$file: db.php
// 	-----------------------------------------
// 	$copyright: (c) pySoft
//      $author: pySnake
// 	$last_modified: 24/03/2010
// 	$email: thenightofsorrows@gmail.com
// 	$license: GPL - See http://www.gnu.org/copyleft/gpl.html for more info
//      $version: 0.1
//	-----------------------------------------
//
// I have refrenced much sources: from jupiter cms, db tools, joomla 1.0, NukeViet 2.0 RC1 and other cms 2.0 to write this, not a lot of works but it's quite interesting, learnt many things from those sources.
// todo list: fetch_row, affected_row
// optional todo list: 
// all config value can be edited in db_config, my design phisolophy is "config everything from configuration file".
//require_once("db_config.php");
require_once("db_lang.php");

function get_microtime()
{
    list($usec, $sec ) = explode( " ", microtime() );
    return ($usec + $sec);
}

class db
{
    var $link_id;
    var $time = 0;
    var $query_result;
    var $num_rows=0;
   
	
    /* connect()
     *
     * @param:
     * return
     *
     */
    function connect()
    {
         $start_time = get_microtime();
         // connecting..
         $this->link_id = @mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(DB_CONNECT_ERROR);
         $db_select = @mysql_select_db(DB_NAME) or die(DB_FINDDB_ERROR);
         // caculate connecting time
         $time = get_microtime() - $start_time;
         // return database connection
	 if (isset($link_id)) return $link_id; 
         else return FALSE;
    }

    /* close()
     *
     * @param:
     * return
     *
     */
    function close()
    {
        if ($link_id) 
        {
             // free memory of the last query
             if ($this->query_result) @mysql_free_result($this->query_result);
             if ($this->num_rows>0) $this->num_rows=0;
             // then... close the link to the database
             return @mysql_close($link_id);
        }
        else
             return false;
    }



    /* query()
     *
     * @param string sql_statement
     * return
     *
     */ 
    function query($sql_statement = '')
    {
        $start_time = get_microtime();
        // free memory of the last query, then unset the variable
	if(isset($sql_result) && is_resource($sql_result))
	{         
		mysql_free_result($sql_result);
		unset($sql_result);
	}       
        // it's good now, just go...
        if ($sql_statement != '')
        {
             $this->query_result = @mysql_query($sql_statement, $this->link_id) or die(DB_QUERY_ERROR);
	     $this->num_rows = @mysql_num_rows($this->query_result);
	     return $this->query_result;
        }
	$time = get_microtime() - $start_time;
    }


    /* insert_row()
     *
     * @param string $table
     * @param array ("elem=>value" style) $array
     * 
     * this is a good way to prevent sql injection(s) for lazy coder like me :).
     */ 
     function insert_row($table, $array)
     {
          if (count($array) == 0) return;
          $comma=''; $values=''; $elems='';

          foreach($array as $elem=>$value)
          {
               if ($value === NULL) $values.= "{$comma}NULL";
               else
               {
                    mysql_real_escape_string($value);
                    $values.="$comma'$value'";                    
               }
               $elems.="$comma`$elem`";
               $comma =',';
          }
          $sql_statement = "INSERT INTO $table (" .$elems. ") VALUES(" .$values. ")";
          echo $sql_statement;
          $this->query("$sql_statement");
     }

     function fetch_array(){
          return mysql_fetch_array($this->query_result);
     }


    /* update_row()
     *
     * @param string $table
     * @param array ("index=>value" style) $array
     * @param string $condition
     * 
     * this is a good way to prevent sql injection(s) for lazy coder like me :).
     */ 
     function update_row($table, $array, $condition)
     {
         if (count($array) == 0) return; 
         $sql_statement = "UPDATE $table SET ";
         foreach($array as $index=>$value);
         {
              if ($value == NULL)
              {
                   $sql_statement .= "`$index=NULL, ";
              }
              else 
              {
                    $value = mysql_real_escape_string($value);
                    $sql_statement .= "`$index`='$value', ";                
              }
               $sql_statement = substr($sql_statement, 0, -2) . " WHERE $condition LIMIT 1";
               echo $sql_statement;
               $this->query($sql_statement);
         }
     }


    /* delete_row()
     *
     * @param string $table
     * @param string $condition
     * @param bool $single
     * 
     * this is a good way to prevent sql injection(s) for lazy coder like me :).
     */ 
     function delete_row($table, $condition, $single=true)
     {
          $sql_statement = "DELETE FROM '$table' WHERE '$condition'" .($single ? "LIMIT 1" : "");
     }



     /* get_error()
     *
     * @param:
     * return
     *
     */
    function get_error()
    {
        $result['error'] = @mysql_error($this->link_id);
        $result['errono'] = @mysql_errno($this->link_id);

        return $result;
    }

    /* log_error()
     *
     * @param:
     * return
     *
     */
     function log_error()
     {
     }
}
?>