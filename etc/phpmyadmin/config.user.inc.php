$cfg['Servers'][$i]['AllowNoPassword'] = TRUE;
$cfg['Servers'][1]['auth_type'] = 'cookie';
$cfg['Servers'][1]['host'] = 'unohouse.dev'; //edit if you have db in the other host
$cfg['Servers'][1]['connect_type'] = 'tcp';
$cfg['Servers'][1]['compress'] = false;
$cfg['Servers'][1]['extension'] = 'mysql';
$cfg['Servers'][1]['user'] = 'root'; //edit this line
$cfg['Servers'][1]['password'] = 'unohouse';