<?php
$i=0;
require_once 'php/DBConnect.php';
$db = new DBConnect();
$users = $db->getUsers();

$title="Members Area";$setMemberActive="active";$bg_background="bg-success";
include 'layout/_header.php';

include 'layout/navbar.php';
?>

<?php include 'layout/_member_layout.php'; ?>

<style>
    body{
        background-image: url("https://previews.123rf.com/images/skarintut/skarintut1607/skarintut160700141/59736986-vector-colorful-hanging-cardboard-tags-members-on-white-background.jpg");
    }
</style>