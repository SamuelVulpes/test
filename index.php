<form method="post">
<h1>Введите данные в форму для добавления</h1>
name <br>
<input name="name" type="text">
<br>
email <br>
<input name="email" type="text"><br>
cr_date <br>
<input name="cr_date" type="text"><br>
<br>
<input type="submit">
</form>

Введённое имя: <?php 

echo htmlspecialchars($_POST['name']); 
?> <br>
Введённый email:
<?php 
echo htmlspecialchars($_POST['email']); 
?>
<br>
Введённая дата:
<?php
echo htmlspecialchars($_POST['cr_date']); 
?>

<form method="post">
<h1>Введите данные в форму для удаления</h1>
name 
<input name="del_name" type="text"> 
email 
<input name="del_email" type="text"> 
cr_date 
<input name="del_cr_date" type="text"> <br>
<br>
<input type="submit">
</form>
<br><br><br><br>

<?php
$dbh = new PDO('mysql:host = localhost;dbname=chrt', 'root', '1234567');
if (isset($_POST['name']) and isset($_POST['email']) and isset($_POST['cr_date'])){
$sql = 'insert into user (name, email, cr_date) values (:name,:email,:cr_date)';
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':name', htmlspecialchars($_POST['name']));
$stmt->bindValue(':email', htmlspecialchars($_POST['email']));
$stmt->bindValue(':cr_date', htmlspecialchars($_POST['cr_date']));
$stmt->execute();
}
$dsql = 'delete from user where (name = :del_name and email = :del_email) and (cr_date = :del_cr_date)';
$dstmt = $dbh->prepare($dsql);
$dstmt->bindValue(':del_name', htmlspecialchars($_POST['del_name']));
$dstmt->bindValue(':del_email', htmlspecialchars($_POST['del_email']));
$dstmt->bindValue(':del_cr_date', htmlspecialchars($_POST['del_cr_date']));
$dstmt->execute();
?>




<?php
$sql = 'SELECT * from user';
$sth = $dbh->prepare($sql);
$sth->execute();
$users = $sth->fetchAll(PDO::FETCH_ASSOC);
foreach ($users as $user){
echo ($user['id']) . "<br>";
echo ($user['name']) . "<br>";
echo ($user['email']) . "<br>";
echo ($user['cr_date']) . "<br>" . "<br>";
}
?>






