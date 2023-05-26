<?php
//hàm kết nối database
    function pdo_get_connection() {
        $hostname='localhost';
        $db_name='du_an_mau';
        $username='root';
        $password="";
        // Dựng đối tương PDO
        try{
            $connect=new PDO("mysql:host=$hostname;dbname=$db_name",$username, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $connect;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
}
    


    function pdo_execute($arrSql) {
        $sql_args = array_slice(func_get_args(), 1);

        try{
            $connect = pdo_get_connection();
            $stmt = $connect->prepare($arrSql);
            $stmt->execute($sql_args);
            
            
            
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($connect);
        }
    }

    $sql = "insert into loai (`tenLoai`) values (?);";
    $loai = 'lai 333';
    pdo_execute($sql, $loai);


?>