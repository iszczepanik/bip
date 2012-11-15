<?php
class FileCategory
{
    const Report = 1;
    
    const ReportLabel = "Sprawozdania";
	
	private static $enum = array
	(
		1 => "Sprawozdania"
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
		return array(FileCategory::Report=>FileCategory::ReportLabel);
	}
}