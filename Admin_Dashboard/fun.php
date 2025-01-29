<?php
class Fun
{
    private $db;
    
    function __construct($con)
    {
        $this->db = $con;
    }

    public function add_about_image($folder)
    {        
                $query="INSERT INTO `about_images`(`image_name`) VALUES ('$folder')";
                $result = mysqli_query($this->db, $query);
                return $result ;
    }

    public function update_event_image($folder,$srno)
    {        
                $query="UPDATE `event_images` SET `image_name`='$folder' WHERE `srno`='$srno'";
                $result = mysqli_query($this->db, $query);
                return $result ;
    }
    public function update_event_image_sr()
    {        
                $query="SELECT `srno` FROM `event_images`";
                $srrr = mysqli_query($this->db, $query);
                return $srrr ;
    }
    public function get_event_image_name()
    {
                $sql="SELECT `srno`,`image_name` FROM `event_images`";
                $result=mysqli_query($this->db, $sql);
                return $result;
    }

    public function update_index_event_image($folder,$srno)
    {        
                $query="UPDATE `index_event_images` SET `image_name`='$folder' WHERE `srno`='$srno'";
                $result = mysqli_query($this->db, $query);
                return $result ;
    }
    public function update_index_event_image_sr()
    {        
                $query="SELECT `srno` FROM `index_event_images`";
                $srrr = mysqli_query($this->db, $query);
                return $srrr ;
    }
    public function get_index_event_image_name()
    {
                $sql="SELECT `srno`,`image_name` FROM `index_event_images`";
                $result=mysqli_query($this->db, $sql);
                return $result;
    }
    public function get_index_event_image_name_only()
    {
        $sql = "SELECT `image_name` FROM `index_event_images`";
        $result = mysqli_query($this->db, $sql);

        $images = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $images[] = $row['image_name'];
            }
        }

        return $images;
    }

    public function add_admin_details($username, $password)
    {
        $stmt = $this->db->prepare("INSERT INTO `admin_login` (`username`, `password`) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->close();
        header("Location: login.php");
        exit();
    }
    public function get_all_admin_details()
    {
        $sql = "SELECT * FROM `admin_login`";
        $result = $this->db->query($sql);
        return $result;
    }
    public function get_admin_details($username, $password)
    {
        $stmt = $this->db->prepare("SELECT * FROM `admin_login` WHERE `username` = ? AND `password` = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result;
    }

    public function update_contact_details($srno,$phone,$location,$email,$social)
    {
        $sql="UPDATE `contact_info` SET `phone`='$phone',`location`='$location',`email`='$email',`social`='$social' WHERE `srno`='$srno'";
        
        mysqli_query($this->db, $sql);
        header("location:admin_contact_view.php");
        
    }
    public function get_contact_details()
    {
        $sql="SELECT * FROM `contact_info`  ";
        $result=mysqli_query($this->db, $sql);
        return $result;
    }
    public function get_contact_details_by_srno($srno)
    {
        $sql="SELECT * FROM `contact_info` WHERE `srno`=$srno";
        $result=mysqli_query($this->db, $sql);
        return $result;
    }
    public function get_contact()
    {
        $sql="SELECT * FROM `contact_info`";
        $result=mysqli_query($this->db, $sql);
        return $result;
    }

    public function update_stat_details($srno,$sd1,$sd2,$sd3,$sd4,$sn1,$sn2,$sn3,$sn4)
    {
        $sql="UPDATE `index_stats` SET `sd1`='$sd1',`sd2`='$sd2',`sd3`='$sd3',`sd4`='$sd4',`sn1`='$sn1',`sn2`='$sn2',`sn3`='$sn3',`sn4`='$sn4' WHERE `srno`=$srno";
        
        mysqli_query($this->db, $sql);
        header("location:admin_index_stats_view.php");  
    }
    public function get_stat_details_by_srno($srno)
    {
        $sql="SELECT * FROM `index_stats` WHERE `srno`=$srno";
        $result=mysqli_query($this->db, $sql);
        return $result;
    }

    public function del_stud_details()
    {
        $sql="DELETE FROM `about_images` WHERE 0";
    }

    public function get_stat()
    {
        $sql="SELECT * FROM `index_stats`";
        $result=mysqli_query($this->db, $sql);
        return $result;
    }


    public function get_about_images()
    {
        $sql="SELECT * FROM `about_images`";
        $result=mysqli_query($this->db, $sql);
        return $result;
    }

}
?>