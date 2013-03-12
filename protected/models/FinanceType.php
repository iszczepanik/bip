<?php
class FinanceType
{
    const PrivateFinance = 1;
    const PublicFinance = 2;
	
	const PrivateFinanceLabel = "Środki prywatne";
    const PublicFinanceLabel = "Środki publiczne";
	
	private static $enum = array
	(
		1 => "Środki prywatne" , 2 => "Środki publiczne"
	);

	public static function GetOrdinal($name) 
	{
		return array_search($name, self::$enum);
	}

	public static function GetDescription($ordinal) 
	{
		return self::$enum[$ordinal];
	}
	
	public static function GetFinanceTypeArray()
	{
		return array(FinanceType::PrivateFinance=>FinanceType::PrivateFinanceLabel,
			FinanceType::PublicFinance=>FinanceType::PublicFinanceLabel);
	}
}