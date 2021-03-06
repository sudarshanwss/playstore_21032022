<?php
if(!isset($argv[1]))
{
	die("Enter Library Name\n");
}

$libraryFolder = (isset($argv[2]))?$argv[2]:'queryLib';
$tableName = $argv[1];

$arr = explode('_', $tableName);
$camelCaseName = $arr[0];
for($i=1;$i<count($arr);$i++)
{
  $camelCaseName .= ucfirst($arr[$i]);
}

$methodName = "";
for($i=0;$i<count($arr);$i++)
{
  $methodName .= ucfirst($arr[$i]);
}

$libraryDirPath  = dirname(dirname(__FILE__)).'/library/'.$libraryFolder;
$libraryFilePath = $libraryDirPath.'/'.$camelCaseName.'.lib.php';

if(!is_dir($libraryDirPath))
{
	mkdir($libraryDirPath);
  chmod($libraryDirPath, 0777);
}

if(is_file($libraryFilePath))
{
  die("Library file already exists\n");
}

$contents = <<< 'EOT'
<?php
class #{
  //Singleton
  protected static $objInstance;

  public static function get(){
    if(!isset(self::$objInstance)){
      $class=__CLASS__;
      self::$objInstance=new $class;
    }
    return self::$objInstance;
  }

  public function get^List($options=array())
  {
    $sql = "SELECT *
            FROM @";

    $result = database::doSelect($sql);
    return $result;
  }

  public function get^Detail($#Id, $options=array())
  {
    $sql = "SELECT *
            FROM @
            WHERE @_id=:#Id";

    $result = database::doSelectOne($sql, array('#Id'=>$#Id));
    return $result;
  }

  public function insert^($options=array())
  {
    $sql = "INSERT INTO @ ";
    $sql .= "( ".implode(", ", array_keys($options))." ) VALUES ";
    $sql .= "( :".implode(", :", array_keys($options))." )";

    $result = database::doInsert($sql, $options);
    return $result;
  }

  public function update^($#Id, $options=array())
  {
    $sql = "UPDATE @ SET ";
    foreach($options as $key=>$value){
      $sql .= $key."= :".$key.", ";
    }
    $sql = rtrim($sql, ", ");
    $sql .= " WHERE @_id =:#Id";
    $options['#Id'] = $#Id;

    $result = database::doUpdate($sql, $options);
    return $result;
  }

  public function delete^($#Id, $options=array())
  {
    $sql = "DELETE FROM @
            WHERE @_id = :#Id";

	  $result = database::doDelete($sql, array('#Id'=>$#Id));
    return $result;
  }
}
EOT;

$contents = str_replace("@", $tableName, $contents);
$contents = str_replace("#", $camelCaseName, $contents);
$contents = str_replace("^", $methodName, $contents);

file_put_contents($libraryFilePath, $contents);
chmod($libraryFilePath, 0777);
?>
