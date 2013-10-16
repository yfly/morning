<?php

class AdminController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Admin Controller
	|--------------------------------------------------------------------------
	*/

	/**
	 * Show Login Page
	 * @author Naing Win
	 **/
	public function showLogin()
	{
		return View::make('offer.login');
	}

	/**
	 * Login 
	 * @author Naing Win
	 **/
	public function adminLogin()
	{
		try
	    {
	        // Set login credentials
	        $credentials = array(
	            'email' => Input::get('email'),
	            'password' => Input::get('password')
	        );


	        // Try to authenticate the user
	        $user = Sentry::authenticate($credentials, false); 

	        // Get User Name 
	        $userid = $user->id;
	        $user = Sentry::getUserProvider()->findById($userid);
	        $username = $user['first_name'] . ' ' . $user['last_name'];

	        Session::flash('success', 'Your are successfully login' . ' ' . $username);
	        return Redirect::to('za/mdnite');

	    }
	    catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
	    {
	        Session::flash('error', 'Login field is required!!');
	        return Redirect::to('za/mdnite/login');
	    }
	    catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
	    {
	        Session::flash('error', 'Password field is required!!');
	        return Redirect::to('za/mdnite/login');
	    }
	    catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
	    {
	        Session::flash('error', 'Email or Password is wrong, try again!!');
	        return Redirect::to('za/mdnite/login');
	    }
	    catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
	    {
	        Session::flash('error', 'User was not found!!');
	        return Redirect::to('za/mdnite/login');
	    }
	    catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
	    {
	        Session::flash('error', 'User is not activated!!');
	        return Redirect::to('za/mdnite/login');
	    }

	    // The following is only required if throttle is enabled
	    catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
	    {
	        Session::flash('error', 'User is suspended!!');
	       return Redirect::to('za/mdnite/login');
	    }
	    catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
	    {
	        Session::flash('error', 'User is banned!!');
	        return Redirect::to('za/mdnite/login');
	    }
	}

	/**
	 * Show Admin Dashboard
	 * @author Naing Win
	 **/
	public function index()
	{
		return View::make('admin.index');
	}

	/**
	 * Show Add New Offer
	 * @author Naing Win
	 **/
	public function offer() 
	{	
		$images = Images::all()->toArray();
		return View::make('admin.addoffer')
					->with('images', $images);
	}

	/**
	 * Add New Offer
	 * @author Naing Win
	 **/
	public function addOffer() 
	{
		
	    $offers = New Offers;

	   	$offers->name 			=	Input::get('name');
	   	$offers->brand 			=	Input::get('brand');
	   	$offers->category 		=	Input::get('category');
	   	$offers->offer_type		=	Input::get('offer_type');
	   	$offers->o_price 		=	Input::get('o_price');
	   	$offers->d_price 		=	Input::get('d_price');
	   	$offers->quantity 		=	Input::get('quantity');
	   	$offers->description	=	Input::get('description');
	   	$offers->address 		=	Input::get('address');
	   	$offers->phone 			=	Input::get('phone');
	   	$offers->start_date 	=	Input::get('start_date');
	   	$offers->end_date	 	=	Input::get('end_date');
	   	$offers->event_date 	=	Input::get('event_date');
	   	$offers->event_time 	=	Input::get('event_time');
		$offers->image 			=	Input::get('image');

		$offers->save();

	    Session::flash('success', 'Your New Offer is successfully added!!!');
	    return Redirect::to('za/mdnite/add-offer');
	}

	/**
	 * All Offers
	 * @author Naing Win
	 **/
	public function allOffer()
	{
		$offers = Offers::paginate(10);		
		return View::make('admin.alloffer')
					->with ('offers', $offers);
	}

	public function getBytype($type)
	{
		if($type == 'product')
		{
			$title = 'All Products';
			$type = Offers::where('offer_type', '=', 'product')->get()->toArray();
			return View::make('admin.bytype')
					->with('type', $type)
					->with('title', $title);
		}
		elseif($type == 'event') 
		{
			$title = 'All Events';
			$type = Offers::where('offer_type', '=', 'event')->get()->toArray();
			return View::make('admin.bytype')
					->with('type', $type)
					->with('title', $title);
		}
		else 
		{
			return Redirect::to('/not-found');
		}
	}

	public function itemDetail($id) 
	{
		$item = Offers::where('id', '=', $id)->first();
        return View::make('admin.detail')
                    ->with('item', $item);  
	}

	/**
	 * Edit Offer
	 * @author Naing Win
	 **/

	public function edit($id) 
	{
		$offer = Offers::where('id', '=', $id)->first();
        return View::make('admin.editoffer')
                    ->with('offer', $offer);   
	}

	public function editOffer($id) 
	{
		$offer = Offers::where('id', '=', $id)->first();

		$offer->name 			=	Input::get('name');
	   	$offer->brand 			=	Input::get('brand');
	   	$offer->category 		=	Input::get('category');
	   	$offer->offer_type		=	Input::get('offer_type');
	   	$offer->o_price 		=	Input::get('o_price');
	   	$offer->d_price 		=	Input::get('d_price');
	   	$offer->quantity 		=	Input::get('quantity');
	   	$offer->description		=	Input::get('description');
	   	$offer->address 		=	Input::get('address');
	   	$offer->phone 			=	Input::get('phone');
	   	$offer->start_date 		=	Input::get('start_date');
	   	$offer->end_date	 	=	Input::get('end_date');
	   	$offer->event_date 		=	Input::get('event_date');
	   	$offer->event_time 		=	Input::get('event_time');
        
        $offer->save();

	    Session::flash('success', 'Successfully Updated!!!');
	    return Redirect::to('za/mdnite/all-offers');
	}

	public function deleteOffer($id) 
	{
		$affected = Offers::where('id', '=', $id)->delete();
        Session::flash('success', 'Successfully delete!!!');
        return Redirect::to('za/mdnite/all-offers');
	}

	public function upload()
	{
		$input = Input::all();

		$rules = array(
			'file'	=> 'image|max:3000',
			);

		$validation = Validator::make($input, $rules);

		if($validation->fails())
		{
			return Response::make($validation->errors->first(), 400);
		}

		$file = Input::file('file');
		$directory = public_path() . '/pictures';
		$filename = $file->getClientOriginalName();

		$upload_success = $file->move($directory, $filename);
		if($upload_success)
		{
			$image = New Images;
			$image->image = $filename;
			$image->save();
		 	return Response::json('success', 200);
		}
		else
		{
			return Response::json('error', 400);
		}
	}

	public function deleteImage($id) 
	{
		$image = Images::where('id', '=', $id)->first();
		$imagename = $image->image;
		Images::where('id', '=', $id)->delete();
		$directory = public_path() . '/pictures/';
		File::delete($directory . $imagename);
        Session::flash('success', 'Successfully delete!!!');
        return Redirect::to('za/mdnite/all-images');
	}

	public function getChange()
	{
		return View::make('admin.pswchange');
	}

	public function passChange()
	{
		$data = Input::all();

		$rule = array(
				'oldPassword' => 'required',
				'newPassword' => 'required|min:6',
				'confPassword' => 'required',
			);

		$v = Validator::make($data, $rule);

		if ($v->fails()) {
			return Redirect::to('za/mdnite/passchange')
						->withErrors($v)
						->withInput();
		} else {
			try{
				$user = Sentry::getUser();

				$oldPassword = Input::get('oldPassword');
				$newPassword = Input::get('newPassword');
				$confPassword = Input::get('confPassword');

				if($user->checkPassword($oldPassword)) {
					if ($newPassword == $confPassword) {
						$user->password = $newPassword;
						if($user->save()) {
							Session::flash('success', 'Password Successfully Changed.');
							return Redirect::to('za/mdnite');	
						} else {
							Session::flash('error', 'Error while changing password.');
							return Redirect::to('za/mdnite/passchange');
						}
					} else {
						Session::flash('error', 'Password does not match.');
						return Redirect::to('za/mdnite/passchange');
					}
				} else {
					Session::flash('error', 'Old password does not match.');
					return Redirect::to('za/mdnite/passchange');
				}
			} catch (\Cartalyst\Sentry\Users\UserNotFoundException $e) {
				    Session::flash('error', 'User does not exit.');
				    return Redirect::to('za/mdnite/passchange');
			}
		}
	}
}
