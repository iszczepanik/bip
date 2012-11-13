<ul class="nav nav-list">
<li class="nav-header">BIP - Administracja</li>
<? if (Yii::app()->user->checkAccess('superadmin')) : ?>
<li><a href="<? echo  $this->createUrl('user/admin'); ?>">Użytkownicy</a></li>
<? endif; ?>

<? if (Yii::app()->user->checkAccess('admin')) : ?>
<li><a href="<? echo  $this->createUrl('user/admin'); ?>">użytkownicy</a></li>
<? endif; ?>

</ul>