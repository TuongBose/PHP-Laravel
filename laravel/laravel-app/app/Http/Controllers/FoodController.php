<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateValidationRequest;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Category;
use App\Rules\Uppercase;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::all(); // SELECT * FROM foods;
        return view('food.index', [
            'foods' => $foods
        ]);

        // Filter
        // $foods = Food::where("name", "=", "sushi")
        //     ->get();
        // return view('food.index', [
        //     'foods' => $foods
        // ]);

        // Filter
        // $food = Food::where("name", "=", "sushi")
        //     ->firstOrFail();
        // return view('food.index', [
        //     'food' => $food
        // ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('food.create')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        // Xử lý upload ảnh
        // Lấy đuôi file image
        // dd($request->file('image')->guessExtension()); // jpg, jpeg, png, ...
        // Kiểm tra xem có đúng thật sự là type file ảnh?
        // dd($request->file('image')->getMimeType());
        // Lấy ra tất cả tên file bao gồm đuôi file và tên file
        // dd($request->file('image')->getClientOriginalName());
        // Kiểm tra xem ảnh có dung lượng là bao nhiêu?
        // dd($request->file('image')->getSize());
        // Kiểm tra xem upload ảnh có bị lỗi hay không?
        // dd($request->file('image')->getError());
        // Nếu upload ảnh hoàn thành trọn không có lỗi thì trả về true
        // dd($request->file('image')->isValid());

        // Option 1: Use Rules Uppercase
        $request->validate([
            // 'name'=>'required|unique:foods',
            'name' => ['required', 'unique:foods', new Uppercase], // áp dụng Uppercase cho field name
            'count' => 'required|integer|min:0|max:100',
            'category_id' => 'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        // Option 2: Use Request CreateValidationRequest
        // $request->validate();

        // Client image's name and server's image name must be different
        $generatedImageName='image'.time().'-'.$request->name.'.'.$request->image->extension();
        //dd($generatedImageName); // Xem tên file ảnh sau khi đã refactor

        // move to a folder
        $request->image->move(public_path('images'),$generatedImageName);

        // dd("This is function store");

        // If validate is pass, it will come here !
        // Otherwise it will throw an exception(ValidationException)
        // Option 1
        // $food=new Food() ;
        // $food->name=$request->input('name');
        // $food->count=$request->input('count');
        // $food->description=$request->input('description');

        // Option 2
        $food = Food::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'image_path' => $generatedImageName,
        ]);

        // save to database
        $food->save();
        return redirect('/food');
    }

    public function edit($id)
    {
        // dd($id);

        $food = Food::find($id);
        //dd($food);
        return view('food.edit')->with('food', $food);
    }

    public function update(CreateValidationRequest $request, $id)
    {
        // Option 1: Use Rules Uppercase
        // $request->validate([
        //     'name' => ['required', 'unique:foods', new Uppercase],
        //     'count' => 'required|integer|min:0|max:100',
        //     'category_id' => 'required',
        // ]);

        // Option 2: Use Request CreateValidationRequest
        $request->validate();

        Food::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'count' => $request->input('count'),
                'description' => $request->input('description'),
            ]);
        return redirect('/food');
    }

    public function destroy($id)
    {
        Food::where('id', $id)
            ->delete();
        return redirect('/food');
    }

    public function show($id) // like "show details"
    {
        // dd('this is show function');
        // $food = Food::find($id);
        // $category = Category::find($food->category_id);
        // $food->category = $category;

        // Or
        $food = Food::with('category')->findOrFail($id);

        //  dd($food);
        return view('food.show')->with('food', $food);
    }
}
