<input type="hidden" name="submit" value="<?= $Submit ?>" />
<input type="hidden" name="userid" value="<?= $UserID ?>" />
<input type="hidden" name="index" value="<?= $Index ?>" />
<input type="hidden" name="refrenceid" value="<?= $RefrenceID ?>" />
<input type="hidden" name="status" value="<?= $Status ?>" />

<label for="title"><?= $functionalitiesInstance->label("عنوان"); ?></label>
<input name="title" placeholder="<?= $functionalitiesInstance->label("عنوان"); ?>" type="text" value="<?= $Title ?>" />

<label for="level"><?= $functionalitiesInstance->label("مرتبه"); ?></label>
<select name="level">
  <option <?= ($Level == "1") ? "selected" : ""  ?> value="1"><?= $functionalitiesInstance->label("سریع"); ?> - <?= $functionalitiesInstance->label("بالا"); ?></option>
  <option <?= ($Level == "2") ? "selected" : ""  ?> value="2"><?= $functionalitiesInstance->label("متوسط"); ?> - <?= $functionalitiesInstance->label("مرکز"); ?></option>
  <option <?= ($Level == "3") ? "selected" : ""  ?> value="3"><?= $functionalitiesInstance->label("کند"); ?> - <?= $functionalitiesInstance->label("پایین"); ?></option>
</select>

<label for="body"><?= $functionalitiesInstance->label("متن"); ?></label>
<textarea name="body"><?= $Body  ?></textarea>
<label for="body"><?= $functionalitiesInstance->label("پرونده"); ?></label>
<input type="file" name="content" id="file" />
<?php
/*
TODO: create drafting and publish mechanisms
      based on user role

    echo '<input type="submit" name="draft" value="پیش‌نویس" />';
    echo '<input type="submit" name="edit" value="ویرایش" />';
    echo '<input type="submit" name="publish" value="انتشار عمومی" />';
    echo '<input type="submit" name="burn" value="لغو انتشار" />';
*/
if ($Id == "" ) {
    echo '<input type="submit" name="insert" value="ارسال" />';
} else {
    echo '<input type="submit" name="update" value="به روز رسانی" />';
    echo '<input type="submit" name="delete" value="حذف" />';
    echo '<input type="submit" name="clear" value="حذف پیوست" />';
}
echo '<a href="index.php">انصراف</a>';
?>