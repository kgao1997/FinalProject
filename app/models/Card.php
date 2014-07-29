class Card extends Eloquent  {
  protected $fillable = array( 'Color', 'Type', 'Set');
  text = "Default Card Flavor Text";
  name = "Default Card Name";
  manaCost = "Default ManaCost";
  
  
  public function color(){
  return $this -> belongsTo('Color');
  }
  public function type(){
  return $this -> belongsTo('Type');
  }
  public function set(){
  return $this -> belongsTo('Set');
  }
}