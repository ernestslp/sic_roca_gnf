<? 

/**
*	controlador para los empleados 
**/

class cempleado extends CI_Controller
{
	function _construct()
	{
		parent::_construct();


	}	

	public function index()
	{
		$this->load->view('empleado/vEmpleadoAdd');
	}

	public function guardar()
	{
		echo "se guardo";
		$this->load->view('empleado/vEmpleadoAdd');
	}
}

