<?
if(!valid()){forcenoaccess();};

$gpid = $_REQUEST[gpid];
$pid = $_REQUEST[pid];

switch ($op)
{
    case "group":
	if ($gpid)
	{
	    $db_query = "DELETE FROM "._DB_PREF_."_tblUserGroupPhonebook WHERE gpid='$gpid' AND uid='$uid'";
	    if (@dba_affected_rows($db_query))
	    {
		$db_query = "DELETE FROM "._DB_PREF_."_tblUserPhonebook WHERE gpid='$gpid' AND uid='$uid'";
		$db_result = dba_query($db_query);
	    }
	}
	header ("Location: menu.php?inc=phonebook_list");
	break;
    case "user":
	if ($pid)
	{
	    $db_query = "DELETE FROM "._DB_PREF_."_tblUserPhonebook WHERE pid='$pid' AND uid='$uid'";
	    $db_result = dba_query($db_query);
	}
	header ("Location: menu.php?inc=phonebook_list");
	break;
}

?>