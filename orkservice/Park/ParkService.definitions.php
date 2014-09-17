<?php

$server->wsdl->addComplexType(
		'CreateParkRequest',
		'complextType',
		'struct',
		'all',
		'',
		array(
				'Token'=>array('name'=>'Token','type'=>'xsd:string'),
				'Name'=>array('name'=>'Name','type'=>'xsd:string'),
				'Abbreviation'=>array('name'=>'Abbreviation','type'=>'xsd:string'),
				'KingdomId'=>array('name'=>'KingdomId','type'=>'xsd:int'),
				'ParkTitleId'=>array('name'=>'Class','type'=>'xsd:int')
			)
	);

$server->wsdl->addComplexType(
		'GetParkShortInfoRequest',
		'complextType',
		'struct',
		'all',
		'',
		array(
				'ParkId'=>array('name'=>'ParkId','type'=>'xsd:int')
			)
	);

$server->wsdl->addComplexType(
		'ParkShortInfoType',
		'complextType',
		'struct',
		'all',
		'',
		array(
				'ParkId'=>array('name'=>'ParkId','type'=>'xsd:int'),
				'KingdomId'=>array('name'=>'KingdomId','type'=>'xsd:int'),
				'ParkName'=>array('name'=>'ParkName','type'=>'xsd:string'),
				'Abbreviation'=>array('name'=>'Abbreviation','type'=>'xsd:string'),
				'Active'=>array('name'=>'Active','type'=>'xsd:string')
			)
	);
	
$server->wsdl->addComplexType(
		'GetParkShortInfoResponse',
		'complextType',
		'struct',
		'all',
		'',
		array(
				'Status'=>array('name'=>'Status','type'=>'tns:StatusType'),
				'ParkInfo'=>array('name'=>'ParkInfo','type'=>'tns:ParkShortInfoType'),
				'KingdomInfo'=>array('name'=>'KingdomInfo','type'=>'tns:KingdomShortInfoType')
			)
	);

$server->wsdl->addComplexType(
		'GetParkAuthorizationsRequest',
		'complextType',
		'struct',
		'all',
		'',
		array(
				'ParkId'=>array('name'=>'ParkId','type'=>'xsd:int')
			)
	);

$server->wsdl->addComplexType(
		'ParkAuthorizationInfoType',
		'complextType',
		'struct',
		'all',
		'',
		array(
				'AuthorizationId'=>array('name'=>'AuthorizationId','type'=>'xsd:int'),
				'MundaneId'=>array('name'=>'MundaneId','type'=>'xsd:int'),
				'UserName'=>array('name'=>'UserName','type'=>'xsd:string'),
				'Role'=>array('name'=>'Role','type'=>'xsd:string')
			)
	);
	
$server->wsdl->addComplexType(
		'ParkAuthorizationListType',
		'complexType',
		'array',
		'',
		'SOAP-ENC:Array',
		array(),
		array(
			array('ref'=>'SOAP-ENC:arrayType', 'wsdl:arrayType'=> 'tns:ParkAuthorizationInfoType[]')
			),
		'tns:ParkAuthorizationInfoType'
	);	
	
$server->wsdl->addComplexType(
		'GetParkAuthorizationsResponse',
		'complextType',
		'struct',
		'all',
		'',
		array(
				'Status'=>array('name'=>'Status','type'=>'tns:StatusType'),
				'Authorizations'=>array('name'=>'ParkInfo','type'=>'tns:ParkAuthorizationListType')
			)
	);
	
$server->wsdl->addComplexType(
		'SetParkDetailsRequest',
		'complextType',
		'struct',
		'all',
		'',
		array(
				'Token'=>array('name'=>'Token','type'=>'xsd:string'),
				'ParkId'=>array('name'=>'ParkId','type'=>'xsd:int'),
				'KingdomId'=>array('name'=>'KingdomId','type'=>'xsd:int'),
				'Name'=>array('name'=>'Name','type'=>'xsd:string'),
				'Abbreviation'=>array('name'=>'Abbreviation','type'=>'xsd:string'),
				'ParkTitleId'=>array('name'=>'ParkTitleId','type'=>'xsd:int')
			)
	);

$server->wsdl->addComplexType(
		'WaffleParkRequest',
		'complextType',
		'struct',
		'all',
		'',
		array(
				'Token'=>array('name'=>'Token','type'=>'xsd:string'),
				'ParkId'=>array('name'=>'ParkId','type'=>'xsd:int')
			)
	);
	
?>