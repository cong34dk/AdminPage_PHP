<?php

    require("../controllers/catcontroller.php");
    $db = new catcontroller();
    $result = $db->getAll();

?>
<h1>Index</h1>
<div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>TT</th>
                                            <th>Tên</th>
                                            <th>Trạng thái</th>
                                            <th>Thêm</th>
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>TT</th>
                                            <th>Tên</th>
                                            <th>Trạng thái</th>
                                            <th>Thêm</th>
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $i=1;
                                        foreach ($result as $sp) {
                                           ?>
                                        <tr>
                                            <td><?=$i++?></td>
                                            <td><?=$sp["CatName"]?></td>
                                            <td><input type="checkbox" checked=<?=$sp['Status']?> /></td>
                                            <td><a href="/admins/home.php?page=category&ac=detail&catid=<?=$sp['CatID']?>" class="btn btn-primary">Detail</td>
                                            <td><a href="/admins/home.php?page=category&ac=addoredit&catid=<?=$sp['CatID']?>" class="btn btn-warning">Edit</td>
                                            <td><a onclick="return confirm('Bạn có muốn xóa bản tin này không?')" href="/admins/home.php?page=category&ac=delete&catid=<?=$sp['CatID']?>" class="btn btn-danger">Xóa</td>

                                        </tr>
                                           <?php
                                        }
                                    

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>