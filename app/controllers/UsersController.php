<?php  

class UsersController extends BaseController {

	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function index(){
		$users = $this->user->all();

		return View::make('users.index',['users' => $users]);
	}

	public function show($username)
	{
		$user = $this->user->whereUsername($username)->first();

		return View::make('users.show',['user' => $user]);
	}

	public function create()
	{
		return View::make('users.create');
	}

	public function store()
	{
		// methode 1
		// $this->user-> fill(Input::all());

		// if( ! $this->user->isValid($input = Input::all())
		// {
		// 	return Redirect::back()->withInput()->withErrors($this->user->errors);
		// }

		// $this->user->create($input);
		
		// methode 2
		$input = Input::all();

		if( ! $this->user->fill($input)->isValid())
		{
			return Redirect::back()->withInput()->withErrors($this->user->errors);
		}

		$this->user->save();
		

		return Redirect::route('users.index');
	}
}