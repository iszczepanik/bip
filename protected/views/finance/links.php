<br />
<div class="block_link right" >
	<a rel="tooltip" title="Dodaj" href="<? echo $this->createUrl('finance/create', array('type'=>$type,'source'=>FinanceSource::Project)); ?>" >
		<i class="icon-plus-sign"></i><? echo FinanceSource::GetDescription(FinanceSource::Project);  ?>
	</a>

<? if ($type == FinanceType::PublicFinance): ?>
	<a rel="tooltip" title="Dodaj" href="<? echo $this->createUrl('finance/create', array('type'=>$type,'source'=>FinanceSource::Percent)); ?>" class="block right" >
		<i class="icon-plus-sign"></i><? echo FinanceSource::GetDescription(FinanceSource::Percent);  ?>
	</a>
<? else : ?>
	<a rel="tooltip" title="Dodaj" href="<? echo $this->createUrl('finance/create', array('type'=>$type,'source'=>FinanceSource::Proprietorship)); ?>" class="block right" >
		<i class="icon-plus-sign"></i><? echo FinanceSource::GetDescription(FinanceSource::Proprietorship);  ?>
	</a>
	<a rel="tooltip" title="Dodaj" href="<? echo $this->createUrl('finance/create', array('type'=>$type,'source'=>FinanceSource::NaturalPersonDonation)); ?>" class="block right" >
		<i class="icon-plus-sign"></i><? echo FinanceSource::GetDescription(FinanceSource::NaturalPersonDonation);  ?>
	</a>
	<a rel="tooltip" title="Dodaj" href="<? echo $this->createUrl('finance/create', array('type'=>$type,'source'=>FinanceSource::PaidPublic)); ?>" class="block right" >
		<i class="icon-plus-sign"></i><? echo FinanceSource::GetDescription(FinanceSource::PaidPublic);  ?>
	</a>
<? endif; ?>
	<a class="block right" href="<?php echo $this->createUrl('/finance/admin'); ?>">
		<i class="icon-search"></i><i class="icon-pencil"></i><i class="icon-trash"></i>Panel administracyjny (wyszukiwanie,  edycja, usuwanie)
	</a>
</div>