<?php
include_once ('core/init.php');
include ('core/secure.php');
include ('forms/submit.php');
include ('master/public-header.php');
?>
<div id="sjfb-wrap">
<h1><?= $functionalitiesInstance->label('فرم‌ساز') ?></h1>
<a href="form.html">View form (rendered from the demo json string) here</a>.
</p>
<div class="add-wrap">
    <h3>Add Field:</h3>
    <ul id="add-field">
        <li><a id="add-text" data-type="text" href="#">Single Line Text</a></li>
        <li><a id="add-textarea" data-type="textarea" href="#">Multi Line Text</a></li>
        <li><a id="add-select" data-type="select" href="#">Select Box (Drop down list)</a></li>
        <li><a id="add-radio" data-type="radio" href="#">Radio Buttons</a></li>
        <li><a id="add-checkbox" data-type="checkbox" href="#">Checkboxes</a></li>
        <li><a id="add-agree" data-type="agree" href="#">Agree Box</a></li>
    </ul>
</div>
<form id="sjfb" novalidate>
    <div id="form-fields">
    </div>
    <button type="submit" class="submit"><?= $functionalitiesInstance->label('ذخیره') ?></button>
</form>
</div>
<?php
$_GET['type'] = "QUST";
require_once ('forms/render.php');
require_once 'semi-orm/Posts.php';
use orm\Posts;
$post = new Posts($conn);
include ('master/public-footer.php');
?>