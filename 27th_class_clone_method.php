<!-- 
 Yeh PHP code ek simple class student aur course ko define karta hai. 
 student class mein ek student ke naam ko store karne ke liye name property aur ek course object ko store
 karne ke liye course property hai. course class mein ek course ka naam 
 ko store karne ke liye cname property hai.

Yeh code ek student object ($student1) ko create karta hai jiska naam "Raheem" hai, 
aur ek course object ($course) ko create karta hai jiska naam "PHP" hai. Phir,
 setCourse method ke zariye, student object ko course object se associate kiya jata hai.

Fir, $student2 variable ko $student1 object ka clone banaya jata hai. 
Is clone banane ke liye __clone method ka use hota hai, jo course object ko bhi clone karta hai.

Akhir mein, $student2 ke course ka naam "phyton" set kiya jata hai.
 Jab $student1 aur $student2 ko print kiya jata hai, toh aap dekhein ge ke $student1 ka course ka naam "PHP" hi rahega, lekin $student2 ka course ka naam "phyton" ho jayega.
 -->
<?php

class student{
    public $name;
    public $course;
    public function __construct($n){
        $this->name = $n;

    }
    public function setCourse(course $c){
        $this->course = $c;
    
    }
    public function __clone(){
        $this->course = clone $this->course;
    }
}
class course{
    public $cname;
    public function __construct($cn) {
      $this->cname = $cn;
    }
}
$student1 = new student("Raheem");
$course= new course("PHP");
$student1->setCourse($course);


$student2 = clone $student1;
$student2->course->cname = "phyton";
print_r($student1);
print_r($student2);

   
 

?>
  
