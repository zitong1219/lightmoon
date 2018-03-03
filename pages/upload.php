<?php  
if (@$_POST[add]=="上传"){
     //根据现在的时间产生一个随机数
     $rand1=rand(0,9);
     $rand2=rand(0,9);
     $rand3=rand(0,9);
     $filename=date("Ymdhms").$rand1.$rand2.$rand3;       
     if(empty($_FILES['file_name']['name'])){  
               //$_FILES['file_name']['name']为获取客户端机器文件的原名称
         echo "文件名不能为空";
         exit;
         }
     $oldfilename=$_FILES['file_name']['name'];
     echo "<br>原文件名为：".$oldfilename;       
     $filetype=substr($oldfilename,strrpos($oldfilename,"."),strlen($oldfilename)-strrpos($oldfilename,"."));
     echo "<br>原文件的类型为：".$filetype;
     if(($filetype!='.png')&&($filetype!='.PNG')&&($filetype!='.jpg')&&($filetype!='.JPG')){
        echo "<script>alert('文件类型或地址错误');</script>";
        echo "<script>location.href='upload.php';</script>";
        exit;
        }
     echo "<br>上传文件的大小为（字节）：".$_FILES['file_name']['size'];
              //$_FILES['file_name']['size']为获取客户端机器文件的大小，单位为B
     if ($_FILES['file_name']['size']>1000000) {
         echo "<script>alert('文件太大，不能上传');</script>";
        echo "<script>location.href='album.php';</script>";
        exit;
         }
     echo "<br>文件上传服务器后的临时文件名为：".$_FILES['file_name']['tmp_name'];
                  //取得保存文件的临时文件名（含路径）
     $filename=$filename.$filetype;
     echo "<br>新文件名为：".$filename;       
     $savedir=dirname(getcwd())."\upfile\\".$filename;
     echo $savedir;
     if(move_uploaded_file($_FILES['file_name']['tmp_name'],$savedir)){
          $file_name=basename($savedir);       //取得保存文件的文件名（不含路径）
          echo "<script>location.href='album.php';</script>";
         }else{
           echo "<script language=javascript>";
           echo "alert('错误，无法将附件写入服务器!\n本次发布失败！');";
           echo "location.href='upload.php?';";
           echo "</script>";
           exit;
       }       
  }
?>