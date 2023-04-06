<!-- function -->
<?php
    class Course {
        private $course_img;
        private $course_n_name;
        private $course_d_detail;
        private $course_d_date;
        private $course_p_price;
        private $course_t_trinning;

        function __construct() {
            $this->course_img = "https://th.bing.com/th/id/OIP.T4YHbyknP6mAHBOee-wDZgHaJQ?w=197&h=246&c=7&r=0&o=5&pid=1.7";
            $this->course_n_name = "Cambridge International AS & A Level Biology Coursebook 5th Edition";
            $this->course_d_detail = "การฝึกฝนเกี่ยวกับ ชีววิทยา พื้นฐาน";
            $this->course_d_date = "21/05/2023 - 23/06/2023";
            $this->course_p_price = "2000 บาท";
            $this->course_t_trinning = "มหาลัยราชภัฎนครปฐม";
        }

        function display_short(){
            printf("<h5>%s</h5>",$this->course_n_name);
            printf('<img src="%s" height="250" width="250" />',$this->course_img);
        }

        function display_detail(){
            printf("<h5>%s</h5>",$this->course_n_name);
            printf("<p>%s</p>",$this->course_d_detail);
        }
    }
?>
<!-- runFunction -->
<?php 

    $obj1 = new Course();
    $rs1 = $obj1->display_short();
    $rs2 = $obj1->display_detail();

?>