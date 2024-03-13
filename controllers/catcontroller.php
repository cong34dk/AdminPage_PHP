<?php

    require("../database/dbconnect.php"); 
    class catcontroller{

        public function __construct(){

        }

        //Lấy về tất cả bản tin
        public function getAll(){
            $db = new dbconnect();
            $sql = "select * from category";
            return $db->query($sql);
            
        }

        //Lấy về 1 bản tin ->>> chi tiết và sửa xóa
        public function getOnce($CatID){
            $db = new dbconnect();
            $sql = "select * from category where CatID='$CatID'";
            return $db->query($sql);
            
        }

        //Thêm mới bản tin
        public function create($CatID, $CatName, $MetaTitle, $Stuffs, $RooID, $DisplayOrder, $CreateBy, $MetaDescriptions, $Status, $ShowMenu, $edit=0
        ){
            $db = new dbconnect();
            $sql = "";
            $date = date("Y-m-d H:i:s");
            if($edit==0){
                //Thực hiện thêm mới bản tin
                $sql = "INSERT INTO `dbshop`.`category`
                (`CatID`, `CatName`, `MetaTitle`, `Stuffs`, `RooID`, `DisplayOrder`, `created_at`, `CreateBy`, `ModifiedDate`, `MetaDescriptions`, `Status`, `ShowMenu`, `updated_at`)
                VALUES
                ('$CatName', '$MetaTitle', '$Stuffs', '$RooID', '$DisplayOrder', $date, '$CreateBy', $date, '$MetaDescriptions', '$Status', '$ShowMenu', $date);
                ";
            }
            else{
                //Thực hiện sửa bản tin
                $sql = "UPDATE `dbshop`.`category` SET `CatName` = '$CatName',`MetaTitle` = '$MetaTitle',`Stuffs` = '$Stuffs',`RooID` = '$RooID',`DisplayOrder` = '$DisplayOrder',`ModifiedDate` = '$date',`MetaDescriptions` = '$MetaDescriptions',`Status` = '$Status',`ShowMenu` = '$ShowMenu',`updated_at` = '$date' WHERE `CatID` = '$CatID';";


            }
            return $db->exec($sql);
            
        }
        //Xóa bản tin
        public function Destroy($CatID){
            $db = new dbconnect();
            $sql = "delete from category where CatID='$CatID'";
            return $db->query($sql);
            
        }
    }
?>

