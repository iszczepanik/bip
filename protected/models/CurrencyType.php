<?php
class CurrencyType
{
    const Pln = 1;
    const Euro = 2;
	const UsDollar = 3;
	const PoundSterling = 4;
	
	const PlnLabel = "Polski złoty";
    const EuroLabel = "Euro";
	const UsDollarLabel = "Dolar amerykański";
	const PoundSterlingLabel = "Funt Szterling";
	
	private static $enum = array
	(
		1 => "PLN" , 2 => "&euro;" , 3 => "$" , 4 => "&pound;"
	);

	public static function GetOrdinal($name) 
	{
		return array_search($name, self::$enum);
	}

	public static function GetSymbol($ordinal) 
	{
		return self::$enum[$ordinal];
	}
	
	public static function GetDescription($ordinal) 
	{
		return self::GetCurrencyTypeArray()[$ordinal];
	}
	
	public static function GetCurrencyTypeArray()
	{
		return array(
			CurrencyType::Pln=>CurrencyType::PlnLabel,
			CurrencyType::Euro=>CurrencyType::EuroLabel,
			CurrencyType::UsDollar=>CurrencyType::UsDollarLabel,
			CurrencyType::PoundSterling=>CurrencyType::PoundSterlingLabel
			);
	}
}