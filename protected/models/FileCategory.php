<?php
class FileCategory
{
    const Report = 1;
	const FundRaising = 2;
	const Statut = 3;
    
    const ReportLabel = "Sprawozdania";
	const FundRaisingLabel = "Zbiórki publiczne";
	const StatutLabel = "Statut";
	
	private static $enum = array
	(
		1 => "Sprawozdania" , 2 => "Zbiórki publiczne", 3 => "Statut"
	);

	public function GetOrdinal($name) 
	{
		return array_search($name, self::$enum);
	}

	public function GetDescription($ordinal) 
	{
		return self::$enum[$ordinal];
	}
	
	public function GetFileCategoryArray()
	{
		return array(FileCategory::Report=>FileCategory::ReportLabel, FileCategory::FundRaising=>FileCategory::FundRaisingLabel, 
			FileCategory::Statut=>FileCategory::StatutLabel);
	}
}