class Test extends Eloquent 
{
  public $testInt = 5;
  public $testString = "hello world!";
  public function printOut()
    {
	  echo $testInt;
	  echo $testString;
	}

}