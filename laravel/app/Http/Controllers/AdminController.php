<?php

namespace App\Http\Controllers;
use App\News;
use App\Branchs;
use App\zone;
use App\package;
use App\PackageOverpart;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	protected $uploadPath = '/images/news/';
	protected $uploadPath_branch = '/images/branchs/';
	public function index(){
		return view('index');
	}
	public function News(){
		$News = News::orderBy('id','desc')->paginate(10);
		return view ('Default.News',compact('News'));
	}

	public function SaveNews(Request $request){

		// dd($request->all());
		$this->validate($request,[
			'title' => 'required',
			'description' => 'required',
			'image' => 'required|max:2000|mimes:png,jpg,jpeg',
		]);
// dd($request->all());

		$file = $request->file('image');
		$fileExt = strtolower($file->getClientOriginalExtension());
		$imgOriginalName = $file->getClientOriginalName();
		$img_filename = md5(uniqid('upload_file', true)) . '_uploaded.' . $fileExt;
		$location = public_path($this->uploadPath);
		$file->move($location, $img_filename);

		$save = new News();
		$save->title=$request->title;
		$save->description=$request->description;
		$save->tag=$request->tag;
		$save->image=$img_filename;
		$save->save();
		return back();

	}

	public function UpdateNews(Request $request, $id){

		// dd($request->all());
		$this->validate($request,[
			'title' => 'required',
			'description' => 'required',
		]);

		if($request->hasfile('image')){
			$file = $request->file('image');
			$fileExt = strtolower($file->getClientOriginalExtension());
			$imgOriginalName = $file->getClientOriginalName();
			$img_filename = md5(uniqid('upload_file', true)) . '_uploaded.' . $fileExt;
			$location = public_path($this->uploadPath);
			$file->move($location, $img_filename);
			unlink(public_path($this->uploadPath) . $request->old_image);
			$update = News::find($id);
			$update->title=$request->title;
			$update->description=$request->description;
			$update->tag=$request->tag;
			$update->image=$img_filename;
			$update->save();

		}else {
			$update = News::find($id);
			$update->title=$request->title;
			$update->description=$request->description;
			$update->tag=$request->tag;
			$update->save();
		}
		return back();

	}

	public function DeleteNews($id){
		$News = News::find($id);
		try {
			unlink(public_path($this->uploadPath) . $News->image);
		} catch (Exception $e) {

		}
		$News->delete();
		return back();
	}


	public function Branch(){
		$zones = zone::orderBy('id','desc')->get();
		$Branchs = Branchs::orderBy('id','desc')->paginate(10);
		return view ('Default.branch',compact('Branchs','zones'));
	}
	public function BranchSave(Request $request){
	// dd($request->all());
		$this->validate($request,[
			'name' => 'required',
			'zone' => 'required',
			'image' => 'required|max:2000|mimes:png,jpg,jpeg',
			'phone' => 'required',
			'location' => 'required'
		]);
		$file = $request->file('image');
		$fileExt = strtolower($file->getClientOriginalExtension());
		$imgOriginalName = $file->getClientOriginalName();
		$img_filename = md5(uniqid('upload_file', true)) . '_uploaded.' . $fileExt;
		$location = public_path($this->uploadPath_branch);
		$file->move($location, $img_filename);

		$branch = new Branchs();
		$branch->name=$request->name;
		$branch->zone_id=$request->zone;
		$branch->contact=$request->phone;
		$branch->location=$request->location;
		$branch->google_map=$request->map;
		$branch->delivery_zone=$request->delivery;
		$branch->image=$img_filename;
		$branch->save();
		return back();
	}

	public function UpdateBranch(Request $request, $id){
	// dd($request->all());
		$this->validate($request,[
			'name' => 'required',
			'zone' => 'required',
			'phone' => 'required',
			'location' => 'required',
		]);
		if($request->hasfile('image')){
			$file = $request->file('image');
			$fileExt = strtolower($file->getClientOriginalExtension());
			$imgOriginalName = $file->getClientOriginalName();
			$img_filename = md5(uniqid('upload_file', true)) . '_uploaded.' . $fileExt;
			$location = public_path($this->uploadPath_branch);
			$file->move($location, $img_filename);
			unlink(public_path($this->uploadPath_branch) . $request->old_image);
			$branch = Branchs::find($id);
			$branch->name=$request->name;
			$branch->zone_id=$request->zone;
			$branch->contact=$request->phone;
			$branch->location=$request->location;
			$branch->google_map=$request->map;
			$branch->delivery_zone=$request->delivery;
			$branch->image=$img_filename;
			$branch->save();
		} else {
			$branch = Branchs::find($id);
			$branch->name=$request->name;
			$branch->zone_id=$request->zone;
			$branch->contact=$request->phone;
			$branch->location=$request->location;
			$branch->google_map=$request->map;
			$branch->delivery_zone=$request->delivery;
			$branch->save();

		}
		return back();
	}

	public function DeleteBranch($id){
		$branch = Branchs::find($id);
		try {
			unlink(public_path($this->uploadPath_branch) . $branch->image);
		} catch (Exception $e) {

		}
		$branch->delete();
		return back();
	}

	public function Package(){
		$Packages = Package::orderBy('id','desc')->paginate(10);
		return view ('Default.package',compact('Packages'));
	}

	public function SavePackage(Request $request){
		$this->validate($request,[
			'name' => 'required',
			'price' => 'required',
			'box_price' => 'required',
			'description' => 'required'
		]);
		$package = new Package();
		$package ->name=$request->name;
		$package ->price=$request->price;
		$package ->box_price=$request->box_price;
		$package ->description=$request->description;
		$package->save();
		return back();

	}
	public function UpdatePackage(Request $request,$id){
		$this->validate($request,[
			'name' => 'required',
			'price' => 'required',
			'box_price' => 'required',
			'description' => 'required'
		]);
		$package = Package::find($id);
		$package ->name=$request->name;
		$package ->price=$request->price;
		$package ->box_price=$request->box_price;
		$package ->description=$request->description;
		$package->save();
		return back();
	}
	public function DeletePackage($id){
		$package = Package::find($id);
		$package->delete();
		return back();
	}
	public function PackagOver(){
		$Packages_over = PackageOverpart::orderBy('id','desc')->paginate(10);
		return view ('Default.package_over',compact('Packages_over'));
	}

	public function SavePackageOver(Request $request){
		$this->validate($request,[
			'name' => 'required',
			'price' => 'required',
			'box_price' => 'required',
			'description' => 'required'
		]);
		$package_over = new PackageOverpart();
		$package_over ->name=$request->name;
		$package_over ->price=$request->price;
		$package_over ->box_price=$request->box_price;
		$package_over ->description=$request->description;
		$package_over->save();
		return back();
	}
		public function UpdatePackageOver(Request $request,$id){
		$this->validate($request,[
			'name' => 'required',
			'price' => 'required',
			'box_price' => 'required',
			'description' => 'required'
		]);
		$package_over = PackageOverpart::find($id);
		$package_over ->name=$request->name;
		$package_over ->price=$request->price;
		$package_over ->box_price=$request->box_price;
		$package_over ->description=$request->description;
		$package_over->save();
		return back();
	}
		public function DeletePackageOver($id){
		$package_over = PackageOverpart::find($id);
		$package_over->delete();
		return back();
	}


}
