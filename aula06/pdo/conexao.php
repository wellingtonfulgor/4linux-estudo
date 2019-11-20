<?php




class ConnectDatabase{
    public function __construct($servidor,$usuario,$senha){


    //$servidor  = 'mysql:host=localhost;dbname=blog';
    //$usuario = 'blog'; 
    //$senha = 'blog';
    
    $this->servidor = $servidor;
    $this->usuario = $usuario;
    $this->senha = $senha;

    try{
        $conexao = new PDO($this->servidor,$this->usuario,$this->senha);
        $this->conexao = $conexao;
    }catch(PDOException $e){
        throw new Exception("Nao foi possivel realizar a conexao", 500);
    }

    }

    public function select($table){
    return $conexao->query("SELECT * FROM {$table}");
    }
}

$obj = new ConnectDatabase('mysql=host=localhost,dbname=blog','blog','blog');

foreach ($obj->select){
    print_r 
}


/** 
*try{
 *   $conexao = new PDO($servidor,$usuario,$senha);
  *  echo "<pre>";
   * echo "Conexao efetuada com sucess";
   * $res = $conexao->query('SELECT * FROM usuarios');
   * var_dump($conexao);
   * foreach($res as $linha){
   *     print_r($linha);
   * }
   * $conexao = NULL;
*}catch(PODException $e){
*    echo "Erro {$e->getMessage()}<br>";
*}finally{
 *   die();
  *  echo "oi";
*}
*/