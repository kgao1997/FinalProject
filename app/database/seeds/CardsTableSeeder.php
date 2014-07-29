class CardsTableSeeder extends Seeder {
  public function run(){
    DB::table('cards') ->insert(array(
	  array('id' =>1, 'name' = 'Champion of the Parish'),
	  array('id' =>2, 'name' = 'Liliana of the Veil'),
	  array('id' =>3, 'name' = 'Brimstone Volley'),
	  array('id' =>4, 'name' = 'Rooftop Storm'),
	  array('id' =>5, 'name' = 'Creeping Renaissance'),
	  ));
	}
}