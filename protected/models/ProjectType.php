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

	public function GetOrdinal($name) 
	{
		return array_search($name, self::$enum);
	}

	public function GetDescription($ordinal) 
	{
		return self::$enum[$ordinal];
	}
	
	public function GetProjectTypeArray()
	{
		return array(ProjectType::Current=>ProjectType::CurrentLabel,
			ProjectType::Passed=>ProjectType::PassedLabel);
	}
}