<?php
class ProjectType
{
    const Current = 1;
    const Passed = 2;
	
	const CurrentLabel = "Realizowany";
    const PassedLabel = "Zrealizowany";
	
	private static $enum = array
	(
		1 => "Realizowany" , 2 => "Zrealizowany"
	);
	
	private static $enumPlural = array
	(
		1 => "Realizowane" , 2 => "Zrealizowane"
	);

	public static function GetOrdinal($name) 
	{
		return array_search($name, self::$enum);
	}

	public static function GetDescription($ordinal) 
	{
		return self::$enum[$ordinal];
	}
	
	public static function GetDescriptionPlural($ordinal) 
	{
		return self::$enumPlural[$ordinal];
	}
	
	public static function GetProjectTypeArray()
	{
		return array(ProjectType::Current=>ProjectType::CurrentLabel,
			ProjectType::Passed=>ProjectType::PassedLabel);
	}
}