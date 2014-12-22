<?php
/*use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphSessionInfo;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurl;
use Facebook\HttpClients\FacebookHttpable;
use Facebook\HttpClients\FacebookCurlHttpClient;*/
use SammyK\FacebookQueryBuilder\FacebookQueryBuilderException;
use SammyK\FacebookQueryBuilder\FQB;
class facebookController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$facebook = new Facebook(Config::get('facebook'));
	    $params = array(
	        'redirect_uri' => url('/login/fb/callback'),
	        'scope' => 'email',
	    );
	    return Redirect::to($facebook->getLoginUrl($params));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$code = Input::get('code');
	    if (strlen($code) == 0) return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');

	    $facebook = new Facebook(Config::get('facebook'));
	    $uid = $facebook->getUser();

	    if ($uid == 0) return Redirect::to('/')->with('message', 'There was an error');

	    $me = $facebook->api('/me');

	    $profile = Profile::whereUid($uid)->first();
	    if (empty($profile)) {

	        $user = new User;
	        $user->name = $me['first_name'].' '.$me['last_name'];
	        $user->email = $me['email'];
	        $user->save();

	        $profile = new Profile();
	        $profile->uid = $uid;
	        return $uid;
	        $profile->username = $me['name'];
	        $profile = $user->profiles()->save($profile);
	    }

	    $profile->access_token = $facebook->getAccessToken();
	    $profile->save();

	    $user = $profile->user;

	    Auth::login($user);
	    $fqb = new FQB();
	    FQB::setAppCredentials('299522950243822',
	        '5c313f9a2578dbffd2fd95b0e997237e');
		FQB::setAccessToken('CAACEdEose0cBAPktkDOHvipy6M1MhbIS573O3oZCq3k3p89vGzBZCsNM2N14PbHnB32I2ty5zTfX2fMrmfVmvstO4gHEv8U4FJnfbgDysQkGZCTBc5GORmpfDTJRnlEHh7KLJgjmlgBVz7zmTGnjHR3arjeDa5boCebzggL5r0lKH23yr5tSpMZBlQhNrkEqAWiUZCYKYCmJZCCwZCNatMFoL3kazRSEE8ZD');
		try
		{
		    $user = $fqb->object('me')->get();
		}
		catch (FacebookQueryBuilderException $e)
		{
		    echo '<p>Error: ' . $e->getMessage() . "\n\n";
		    echo '<p>Facebook SDK Said: ' . $e->getPrevious()->getMessage() . "\n\n";
		    echo '<p>Graph Said: ' .  "\n\n";
		    var_dump($e->getResponse());
		    exit;
		}

		echo '<h1>Logged In User\'s Profile</h1>' . "\n\n";
		var_dump($user->toArray());

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
