## Education Board Result System . ## means h2 tag

This is a learning purpose project for studnet result calculation. We use some programming language here.

#### Language List . ####  means h4 tag

- HTML 5
- CSS 3
- javaScript
- jQuery
- PHP
- MySQL
- OOP
- PDO as Connection

#### Database Class Design

```php
namespace Edu\Board\Support;
require_once "../../config.php";
use PDO;

/**
 * Database Managements
 */

abstract class Database{

    /**
     * Server Information
     */

    private  $host = HOST;
    private  $user = USER;
    private  $pass = PASS;
    private  $db = DB;
    private  $connection;

    /**
     * Database Connection
     */

    private function connection(){
       //PDO Connection

        $connection = new PDO("mysql:host =". $this -> host."; db_name=" . $this -> db, $this -> user,  $this -> pass);
    }

}

```


