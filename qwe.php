<pre style="word-wrap: break-word; white-space: pre-wrap;">
<?php
  ob_start();
  $dsn = 'mysql:host=localhost;port=3306;dbname=testdb';

  $pdo = new PDO($dsn,'root','');
  $pdo->query("SET NAMES 'utf8'");
  $sql = "SELECT * FROM table1";
  $query = $pdo->query($sql);
  $query->setFetchMode(PDO::FETCH_ASSOC);
  foreach($query as $row){
	echo $row['er_id'].',';  
	echo $row['age'].',';
	echo $row['gender'].',';
	echo $row['family_population'].',';
	echo $row['career'].',';
	echo $row['education'].',';
	echo $row['married_status'].',';
	echo $row['child_num'].',';
	echo $row['family_monthly_income'];
	echo "<br>";
  }
  $url="./index.html";//生成的文件名
  $content=ob_get_contents();
  $fp=fopen("$url",'w+');
  fwrite($fp,$content) or die('寫文件錯誤');
?>
</pre>
