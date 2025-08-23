<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // $posts = DB::select("SELECT * FROM posts;");
        // var_export($posts); 

        // $posts = DB::select("SELECT * FROM posts;");
        // dd($posts); // dd = die dump

        // $posts = DB::select("SELECT * FROM posts WHERE id = 4;");
        // dd($posts); // dd = die dum

        // avoid sql injection
        // Raw SQL Query(truy vấn thô) 
        // $posts = DB::select("SELECT * FROM posts WHERE id = ?;", [2]);
        // dd($posts); // dd = die dum

        // avoid sql injection
        // Query builders
        // $posts = DB::select("SELECT * FROM posts WHERE id = :id;", ['id' => 3]);
        // dd($posts); // dd = die dum

        // $posts = DB::table("posts")->where("id",1);
        // dd($posts); // dd = die dum

        // $posts = DB::table("posts")
        //     ->where("id", 1)
        //     ->select('title')
        //     ->get();
        // dd($posts); // dd = die dum

        // $posts = DB::table("posts")
        //     ->where("created_at", ">", now()->subDay()) // now()->subDay() → lùi 1 ngày
        //                                                 // now()->subDays(7) → lùi 7 ngày
        //                                                 // now()->addDay() → cộng thêm 1 ngày
        //                                                 // now()->subMonth() → lùi 1 tháng
        //                                                 // now()->addHours(3) → cộng thêm 3 giờ
        //     ->get();
        // dd($posts); // dd = die dum

        // $posts = DB::table("posts")
        //     ->where("created_at", ">", now()->subDay())
        //     ->orWhere("id", ">", 0)
        //     ->get();
        // dd($posts); // dd = die dum

        // $posts = DB::table("posts")
        //     ->whereBetween("id", [1, 3])
        //     ->get();
        // dd($posts); // dd = die dum

        // $posts = DB::table("posts")
        //     ->whereNotNull("body")
        //     ->get();
        // dd($posts); // dd = die dum

        // $posts = DB::table("posts")
        //     ->whereNotNull("body")
        //     // ->orderBy("id", "desc")
        //     ->orderBy("id", "asc")
        //     ->get();
        // dd($posts); // dd = die dum

        // $posts = DB::table("posts")
        //     ->whereNotNull("body")
        //     // ->latest() // bản ghi mới nhất
        //     ->oldest() // bản ghi cũ nhất
        //     ->get();
        // dd($posts); // dd = die dum

        // Giống select top 1, limit(1)
        // $posts = DB::table("posts")
        //     ->whereNotNull("body")
        //     ->oldest() // bản ghi cũ nhất
        //     ->first();
        // dd($posts); // dd = die dum

        // SELECT * FROM posts WHERE id = 3
        // $posts = DB::table("posts")
        //     ->find(3); // find by id
        // dd($posts); // dd = die dum

        // SELECT COUNT(*) FROM posts
        // $posts = DB::table("posts")
        //     ->count();
        // dd($posts); // dd = die dum

        // $posts = DB::table("posts")
        //     // ->max("id"); // Id lớn nhất
        //     ->min("id"); // Id nhỏ nhất
        // dd($posts); // dd = die dum

        // $posts = DB::table("posts")
        //     // ->sum("id") // Tính tổng các id
        //     ->avg("id"); // Tính trung bình các id
        // dd($posts); // dd = die dum

        // Insert
        // $posts = DB::table("posts")
        //     ->insert([
        //         'title'=>'haha',
        //         'body'=>'A new post Hahaha'
        //     ]);
        // dd($posts); // dd = die dum

        // Update
        // $posts = DB::table("posts")
        //     ->where("id","=",5)
        //     ->update([
        //         'title'=>'huhu',
        //         'body'=>'Update huhu'
        //     ]);
        // dd($posts); // dd = die dum

        // Delete
        $posts = DB::table("posts")
            ->where("id","=",5)
            ->delete();
        dd($posts); // dd = die dum

        // return view('post.index');
    }
}
