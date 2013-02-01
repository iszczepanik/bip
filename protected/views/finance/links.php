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
<? endif; ?>
</div>