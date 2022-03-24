<?php
$date = sprintf('%04d.%02d.%02d',2022,3,16);
echo $date;
?>

<?php
  $success = file_put_contents('date/new.txt','ホームページをリニューアルしました。');

if ($success !== false){
  echo 'ファイルの書き込みが完了しました';
}else{
  echo '失敗しました';
}
?>

