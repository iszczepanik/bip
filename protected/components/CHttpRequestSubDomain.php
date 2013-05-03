<?
class CHttpRequestSubDomain extends CHttpRequest
{
	
	function getSubdomain()
	{
		$urlParts = explode('.', $_SERVER['HTTP_HOST']);
		return $urlParts[0];
	}
	
	function getSubdomainAppId()
	{
		return Subdomains::GetOrdinal($this->getSubdomain());
	}
}
?>