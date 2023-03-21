<?php



Class Search extends Kc_Controller

{
	function __construct()

	{

		parent::__construct();
		$this->load->model('products_model', '', TRUE);


	}

	 function autocomplete(){

		 $term = $this->input->post('search_data');
		 $search_data = $this->products_model->get_products($term);
		echo "<ul>";
		 if (!empty($search_data))
		 {
			 foreach ($search_data as $row):
				 echo "<li style='list-style: none;'>
					
								<a href='http://localhost/online_shop/product/". $row['ID_Produs'] ."'> ". $row['Name'] ."   </a>
							
						</li>";
			 endforeach;

		 }
		 else
		 {
			 echo "<li> No results </li>";
		 }
		 echo "</ul>";

	 }

}
