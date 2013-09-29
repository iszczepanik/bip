<?php
class FinanceSource
{
    const Percent = 1;
    const Proprietorship = 2;
	const NaturalPersonDonation = 3;
	const Project = 4;
	const PaidPublic = 5;
	
	const PercentLabel = "1%";
    const ProprietorshipLabel = "Działalność gospodarcza";
	const NaturalPersonDonationLabel = "Darowizny od osób fizycznych";
	const ProjectLabel = "Na realizację projektów";
	const PaidPublicLabel = "Odpłatna działalność pożytku publicznego";
	
	private static $enum = array
	(
		1 => "Wysokość środków pozyskanych z 1% podatku" , 
		2 => "Wysokość środków uzyskanych w ramach działalności gospodarczej", 
		3 => "Wysokość darowizn pozyskanych od osób fizycznych", 
		4 => "Środki pozyskane na realizację projektów",
		5 => "Wysokość środków uzyskanych z odpłatnej działalności pożytku publicznego"
	);

	public static function GetOrdinal($name) 
	{
		return array_search($name, self::$enum);
	}

	public static function GetDescription($ordinal) 
	{
		return self::$enum[$ordinal];
	}
	
	public static function GetFinanceSourceArray()
	{
		return array(
			FinanceSource::Percent=>FinanceSource::PercentLabel,
			FinanceSource::Proprietorship=>FinanceSource::ProprietorshipLabel,
			FinanceSource::NaturalPersonDonation=>FinanceSource::NaturalPersonDonationLabel,
			FinanceSource::Project=>FinanceSource::ProjectLabel,
			FinanceSource::PaidPublic=>FinanceSource::PaidPublicLabel,
		);
	}
}