<?php
    include 'openDB.php';
    session_start();
    if(isset($_POST['user']) && isset($_POST['passwd']) ){
        $username = strtolower($_POST['user']);
        $query = $db->prepare('select * from users where username=:username');
        $query->execute(array(':username' => $username));
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $login = password_verify($_POST['passwd'], $result['pass']);
        if($login == 1){
            $_SESSION['user'] = $username;
            $_SESSION['time'] = time();
        }
    }
    include 'closeDB.php';

?>
<?php
    if(isset($_SESSION['user']) ){
        header('Location: /videolist.php');
    }else{
        header('Location: /login.php');
    }    
?>

