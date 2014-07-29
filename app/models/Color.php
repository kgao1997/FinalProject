class Color extends Eloquent{
  public $timestamps = false;
  public function cards(){
  return $this -> hasMany('Card');
  }
}