<?php
include ('core/public-header.php');
require_once 'core/functionalities.php';
use core\functionalities;
require_once 'semi-orm/Posts.php';
use orm\Posts;
$Q = (new functionalities())->ifexistsidx($_GET,'Q');
?>
<form class="example" method="GET" action="search.php">
    <input type="text" name="Q" placeholder="عبارت را وارد نمائید" value="<?= $Q ?>" />
    <input type="submit" value = "جستجو" />
</form>
<div class="line"></div>
<div class="table">
<?php
$a="SELECT * FROM `post_details`
WHERE
`Title` LIKE '%".$Q."%'
OR `CategoryName` LIKE '%".$Q."%'
OR `Username` LIKE '%".$Q."%'
OR `Body` LIKE '%".$Q."%'
ORDER BY `Submit`
Limit 10
;";
$b=mysqli_query($conn,$a);
if(mysqli_num_rows($b)>0){
echo '<div class="results">';
while($row = mysqli_fetch_array($b)){
    echo '<div class="result">';
    echo"<p>" . $row['Body']. "</p>";
    echo "</div>";
}
echo"</div>";
}
else{
    echo "نتیجه یافت نشد";
}
?>
</div>

<?php
include ('core/public-footer.php');
?>