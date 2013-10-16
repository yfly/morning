<?php

class FrontendController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Admin Controller
	|--------------------------------------------------------------------------
	*/

	/**
	 * Show Login Page
	 * @author Naing Win
	 **/
	public function index()
	{
		$offers = Offers::orderBy('id', 'DESC')->take(12)->get();
		$title = 'Home';
		return View::make('offer.index')
					->with('offers', $offers)
					->with('title', $title);
	}

	public function detail($id) 
	{
		$offer = Offers::where('id', '=', $id)->first();
		$offer->count = $offer->count + 1;
		$offer->save();
		$cat = Offers::where('category', '=', $offer->category)->first();
		$cat = $cat->orderBy('rand()')->take(4);
		$title = $offer['name'];
        return View::make('offer.detail')
                    ->with('offer', $offer)
                    ->with('cat', $cat)
                    ->with('title', $title);
	}

	public function type($type)
	{
		if($type == 'product')
		{
			$name = 'Product';
			$type = Offers::where('offer_type', '=', 'product')->get()->toArray();
			return View::make('offer.type')
					->with('type', $type)
					->with('title', $name);
		}
		elseif($type == 'event') 
		{
			$name = 'Event';
			$type = Offers::where('offer_type', '=', 'event')->get()->toArray();
			return View::make('offer.type')
					->with('type', $type)
					->with('title', $name);
		}
		else 
		{
			return Redirect::to('/not-found');
		}
		
	}

	public function category($cat)
	{
		if($cat == 'mobile')
		{
			$title = 'Mobile and Accessories';
			$cat = Offers::where('category', '=', 'mobile')->get()->toArray();
			return View::make('offer.category')
					->with('cat', $cat)
					->with('title', $title);
		}
		elseif($cat == 'computer') 
		{
			$title = 'Computer and Accessories';
			$cat = Offers::where('category', '=', 'computer')->get()->toArray();
			return View::make('offer.category')
					->with('cat', $cat)
					->with('title', $title);
		}
		elseif($cat == 'tickets') 
		{
			$title = 'Tickets';
			$cat = Offers::where('category', '=', 'tickets')->get()->toArray();
			return View::make('offer.category')
					->with('cat', $cat)
					->with('title', $title);
		}
		elseif($cat == 'cloths') 
		{
			$title = 'Clothings';
			$cat = Offers::where('category', '=', 'cloths')->get()->toArray();
			return View::make('offer.category')
					->with('cat', $cat)
					->with('title', $title);
		}
		elseif($cat == 'electronic') 
		{
			$title = 'Electronic';
			$cat = Offers::where('category', '=', 'electronic')->get()->toArray();
			return View::make('offer.category')
					->with('cat', $cat)
					->with('title', $title);
		}
		elseif($cat == 'spa') 
		{
			$title = 'Spa and Wellness';
			$cat = Offers::where('category', '=', 'spa')->get()->toArray();
			return View::make('offer.category')
					->with('cat', $cat)
					->with('title', $title);
		}
		elseif($cat == 'other') 
		{
			$title = 'Others';
			$cat = Offers::where('category', '=', 'other')->get()->toArray();
			return View::make('offer.category')
					->with('cat', $cat)
					->with('title', $title);
		}		
		else 
		{
			return Redirect::to('/not-found');
		}
		
	}

	public function search()
	{
		$keyword = Input::get('search');
		$result = Offers::where('name', 'LIKE', '%'.$keyword.'%')
						->orWhere('brand', 'LIKE', '%'.$keyword.'%') 
						->orWhere('category', 'LIKE', '%'.$keyword.'%') 
						->orWhere('offer_type', 'LIKE', '%'.$keyword.'%')
						->get();
		$title = 'Search Result';
		return View::make('offer.search')
				->with('results', $result)
				->with('keyword', $keyword)
				->with('title', $title);
	}

	public function welcome()
	{
		return View::make('offer.welcome');
	}

}