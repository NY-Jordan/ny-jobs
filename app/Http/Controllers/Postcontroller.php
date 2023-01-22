<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        
        $request->validate([

        ]);
        try {
            
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


    public function edit()
    {
        # code...
    }    


    /**
     * get all posts
     *
     * @return array
     */
    public function all() : array
    {
        try {
            $posts = Post::all();
            $count = Post::count();
            return [
                "status" => 200,
                'count' => $count,
                'items' => $posts,
            ];
        } catch (\Throwable $th) {
            return [
                "status" => 400,
                'message' => "Bad request",
                "error" => $th->getMessage(),
            ];
        }        
    }



    /**
     * Undocumented function
     *
     * @param integer $id (id of the post)
     * @return array
     */
    public function getSinglePost(int $id)
    {
        try {
            $post = Post::where('id', $id)->first();
            if ($post) {
                return [
                    "status" => 200,
                    'items' => $post,
                ];
            }
            return [
                "status" => 404,
                'message' => "not found",
            ];
        } catch (\Throwable $th) {
            return [
                "status" => 400,
                'message' => "Bad request",
                "error" => $th->getMessage(),
            ];
        }
    }

    /**
     * Undocumented function
     *
     * @param integer $idcategory id of the category
     * @param integer $idlocation id of the location
     * @return array
     */
    public function postsByLocationAndCategory(int $idcategory, int $idlocation) : array
    {
        try {
            $post = Post::where('category_id', $idcategory)->where('location_id', $idlocation)->get();
            if ($post) {
                return [
                    "status" => 200,
                    'items' => $post,
                ];
            }
            return [
                "status" => 404,
                'message' => "not found",
            ];
        } catch (\Throwable $th) {
            return [
                "status" => 400,
                'message' => "Bad request",
                "error" => $th->getMessage(),
            ];
        }
    }


    /**
     * Undocumented function
     *
     * @param integer $id (id of the location)
     * @return array
     */
    public function postsByLocation(int $id) : array
    {
        try {
            $post = Post::where('location_id', $id)->get();
            if ($post) {
                return [
                    "status" => 200,
                    'items' => $post,
                ];
            }
            return [
                "status" => 404,
                'message' => "not found",
            ];
        } catch (\Throwable $th) {
            return [
                "status" => 400,
                'message' => "Bad request",
                "error" => $th->getMessage(),
            ];
        }
    }


    /**
     * Undocumented function
     *
     * @param integer $id (id of the category)
     * @return array
     */
    public function postsByCategory(int $id) : array
    {
        try {
            $post = Post::where('category_id', $id)->get();
            if ($post) {
                return [
                    "status" => 200,
                    'items' => $post,
                ];
            }
            return [
                "status" => 404,
                'message' => "not found",
            ];
        } catch (\Throwable $th) {
            return [
                "status" => 400,
                'message' => "Bad request",
                "error" => $th->getMessage(),
            ];
        }
    }

    /**
     * Undocumented function
     *
     * @param integer $id (id of the user)
     * @return array
     */
    public function postsByUser(int $id) : array
    {
        try {
            $post = Post::where('user_id', $id)->get();
            if ($post) {
                return [
                    "status" => 200,
                    'items' => $post,
                ];
            }
            return [
                "status" => 404,
                'message' => "not found",
            ];
        } catch (\Throwable $th) {
            return [
                "status" => 400,
                'message' => "Bad request",
                "error" => $th->getMessage(),
            ];
        }
    }


    /**
     * delete function
     *
     * @param [int] $id
     * @return void
     */
    public function delete(int $id) : array
    {
        try {
            $post = Post::find($id)->delete();
            return [
                "status" => 200,
                'message' => "Post is successfully delete",
            ];
        } catch (\Throwable $th) {
            return [
                "status" => 400,
                'message' => "Bad request",
                "error" => $th->getMessage(),
            ];
        }
    }
}
