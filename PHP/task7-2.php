<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
  class Staff {
    protected $name;
    protected $age;
    protected $sex;
    protected static $id = 0;

    public function __construct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->id = $this->number();
    }

    protected function number() {
        self::$id++;
        return sprintf('S%04d', self::$id);
    }

    public function show() {
        printf("(%s) %s %d歳 %s性\n", $this->id, $this->name, $this->age, $this->sex);
    }
  }

  class PartStaff extends Staff {
    private $jikyu;

    public function __construct($name, $age, $sex, $jikyu) {
        parent::__construct($name, $age, $sex);
        $this->jikyu = $jikyu;
    }

    protected function number() {
        self::$id++;
        return sprintf('P%04d', self::$id);
    }

    public function show() {
        printf("(%s) %s %d歳 %s性 時給：%s円\n", $this->id, $this->name, $this->age, $this->sex, $this->jikyu);
    }
  }

  $staff1 = new Staff("佐藤　一郎", 31, "男");
  $staff1->show();

  $staff2 = new Staff("山田　花子", 25, "女");
  $staff2->show();

  $staff3 = new Staff("鈴木　次郎", 27, "男");
  $staff3->show();

  $staff4 = new PartStaff("田中　友子", 24, "女", 900);
  $staff4->show();

  $staff5 = new Staff("中村　三郎", 27, "男");
  $staff5->show();

  ?>


</body>
</html>