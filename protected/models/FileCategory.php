<?php
class FileCategory
{
    const Report = 1;
	const FundRaising = 2;
	const Statut = 3;
	const ControlResult = 4;
    
    const ReportLabel = "Sprawozdania";
	const FundRaisingLabel = "Zbiórki publiczne";
	const StatutLabel = "Statut";
	const ControlResultLabel = "Wyniki pokontrolne";
	
	private static $enum = array
	(
		1 => "Sprawozdania" , 2 => "Zbiórki publiczne", 3 => "Statut", 4 => "Wyniki pokontrolne"
	);

	public static function GetOrdinal($name) 
	{
		return array_search($name, self::$enum);
	}

	public static function GetDescription($ordinal) 
	{
		return self::$enum[$ordinal];
	}
	
	public static function GetFileCategoryArray()
	{
		return array(
			FileCategory::Report=>FileCategory::ReportLabel, 
			FileCategory::FundRaising=>FileCategory::FundRaisingLabel, 
			FileCategory::Statut=>FileCategory::StatutLabel, 
			FileCategory::ControlResult=>FileCategory::ControlResultLabel
		);
	}
}