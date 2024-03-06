<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>
         <form action="index.php?act=listsp" method="POST">
         <div class="row mb10 ">        
                <a href="index.php?act=addsp"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
           <div class="row2 mb10 formds_loai">    
            </form>
                <div class="row2 form_content ">
                    <table border="1">
                        <tr>
                            
                            <th>MÃ LOẠI</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>MÀU SẮC</th>
                            <th>KÍCH THƯỚC</th>
                            <th>HÌNH</th>
                            <th>GIÁ</th>
                            <th>MÔ TẢ</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listsanpham as $sanpham){
                                extract($sanpham);
                                $suasp="index.php?act=suasp&idsp=".$idsp;
                                $xoasp="index.php?act=xoasp&idsp=".$idsp;
                                $hinhpath = "../upload/".$hinhanh;
                                if(is_file($hinhpath)){
                                    $hinhanh = "<img src='".$hinhpath."' height='80'>";
                                }else{
                                    $hinhanh = "no photo";
                                }

                                echo '<tr>                       
                                    <td>'.$idsp.'</td>
                                    <td>'.$tensp.'</td>
                                    <td>'.$idmau.'</td>
                                    <td>'.$idsize.'</td>
                                    <td>'.$mota.'</td>
                                    <td>'.$gia.'</td>
                                    <td>'.$hinhanh.'</td>
                                    <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a>   
                                        <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                            }
                        ?>
                                
                    </table>
            </div>
            <div class="row mb10 ">        
            <!-- <a href="index.php?act=addsp"> <input  class="mr20" type="button" value="NHẬP THÊM"></a> -->
            </div>
        </form>
    </div>
</div>