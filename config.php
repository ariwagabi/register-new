<?php
$CS = getenv('CLIENT_SECRET');
$CK = getenv('CLIENT_KEY');
$PageId = getenv('PAGE_ID');
$ProfileId = getenv('PROFILE_ID');
define("CLIENT_SECRET", $CS);
define("CLIENT_KEY", $CK);
define("AUD_VALUE", "https://app.iformbuilder.com/exzact/api/oauth/token");
define("PAGE_ID", $PageId);
define("PROFILE_ID",$ProfileId);
define("RECORDURL","https://app.iformbuilder.com/exzact/api/v60/profiles/".PROFILE_ID."/pages/".PAGE_ID."/records");
?>