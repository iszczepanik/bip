<ul class="nav nav-list">
<li class="nav-header">BIP - Administracja</li>
<? if (Yii::app()->user->checkAccess('superadmin')) : ?>
<li><a href="<? echo  $this->createUrl('user/admin'); ?>">Użytkownicy</a></li>
<? endif; ?>

<? if (Yii::app()->user->checkAccess('admin')) : ?>
<li><a href="<? echo  $this->createUrl('projectAdmin/admin'); ?>">Projekty</a></li>
<? endif; ?>

<? if (Yii::app()->user->checkAccess('admin')) : ?>
<li><a href="<? echo  $this->createUrl('finance/admin'); ?>">Finansowanie</a></li>
<? endif; ?>

<? if (Yii::app()->user->checkAccess('admin')) : ?>
<li><a href="<? echo  $this->createUrl('fileAdmin/admin'); ?>">Dokumenty</a></li>
<? endif; ?>

<? if (Yii::app()->user->checkAccess('admin')) : ?>
<li><a href="<? echo  $this->createUrl('newsAdmin/admin'); ?>">Aktualności</a></li>
<? endif; ?>

</ul>