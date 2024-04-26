<?php
include_once("resources/views/crud_user/config.php");
include_once("resources/views/crud_user/db.php");
include_once("resources/views/crud_user/user.php");

class User_Db extends Db
{
    public function GetAllUsers($currentPage, $perPage)
    {
        // Tinh so thu tu record bat dau
        $startRecord = ($currentPage - 1) * $perPage;


        // Dung Limit de gioi han so luong hien thi 1 trang
        $sql = self::$conn->prepare("select * from users limit $startRecord, $perPage");
        $sql->execute();

        $list = $sql->get_result()->fetch_all(MYSQLI_ASSOC);

        $item = array();

        foreach ($list as $key => $value) {
            # code...
            $item[] = new User(
                $value['id'],
                $value['name'],
                $value['email'],
                $value['emai_verified_at'],
                $value['password'],
                $value['remember_token'],
                $value['created_at'],
                $value['updated_at']
            );
        }

        return $item;
    }

    public function getCount()
    {
        $sql = self::$conn->prepare("select COUNT(*) AS 'dem' from users");
        $sql->execute();

        $result = $sql->get_result();

        $item = $result->fetch_all(MYSQLI_ASSOC);
        return $item;
    }

    public function getPaginationBar($url, $page, $total, $perPage, $offSet)
    {
        if ($total <= 0) {
            # code...
            return "";
        }

        $totalLinks = ceil($total / $perPage);

        if ($totalLinks <= 1) {
            # code...
            return "";
        }

        $from = $page - $offSet;
        $to = $page + $offSet;

        if ($from <= 0) {
            # code...
            $to = $from + $offSet;
            $from = 1;
        }

        if ($to > $totalLinks) {
            # code...
            $to = $totalLinks;
        }

        $firstLink = "";
        $prevLink = "";
        $nextLink = "";
        $lastLink = "";

        if ($page > 1) {
            # code...
            $firstLink = "<a href='$url'><<</a>";
            $prev = $page - 1;
            $prevLink = "<a href='$url?page=$prev'><</a>";
        }

        if ($page < $totalLinks) {
            # code...
            $lastLink = "<a href='$url?page=$totalLinks'>>></a>";
            $next = $page + 1;
            $nextLink = "<a href='$url?page=$next'>></a>";
        }

        $link = "";

        for ($i = $from; $i <= $to; $i++) {
            # code...
            if ($i == $page) {
                # code...
                $link = $link . "<span style='color: red;'></span>";
            } else {
                # code...
                $link = $link . "<a href='$url?page=$i'></a>";
            }
        }



        return $firstLink . "&nbsp;&nbsp;" . $prevLink . "&nbsp;&nbsp;" . $link . "&nbsp;&nbsp;" . $nextLink . "&nbsp;&nbsp;" . $lastLink;
    }
}
?>
