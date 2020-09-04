<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * @OA\Get(
     *   path="/blog",
     *   tags={"BlogController"},
     *    @OA\Response(
     *      response=200,
     *      description="",
     *      @OA\JsonContent(ref="#/components/schemas/BlogSchema")
     *    )
     * )
     */

    /**
     * @OA\Get(
     *   path="/blog/{id}",
     *   tags={"BlogController"},
     *     @OA\Parameter (
     *     name="id",
     *     description="An uuid string identifying this blog",
     *     in="path",
     *     required= true
     *      ),
     *    @OA\Response(
     *      response=200,
     *      description="",
     *      @OA\JsonContent(ref="#/components/schemas/BlogSchema")
     *    )
     * )
     */

    /**
     * @OA\Post(
     *   path="/blog",
     *   tags={"BlogController"},
     *    @OA\RequestBody(
     *     required=true,
     *      @OA\JsonContent (
     *          ref="#/components/schemas/BlogSchema"
     *          )
     *     ),
     *    @OA\Response(
     *      response=201,
     *      description="",
     *      @OA\JsonContent(ref="#/components/schemas/BlogSchema")
     *    )
     * )
     */

    /**
     * @OA\Put (
     *   path="/blog/{id}",
     *   tags={"BlogController"},
     *     @OA\Parameter (
     *     name="id",
     *     description="An uuid string identifying this blog",
     *     in="path",
     *     required= true
     *      ),
     *    @OA\RequestBody(
     *     required=true,
     *      @OA\JsonContent (
     *          ref="#/components/schemas/BlogSchema"
     *          )
     *     ),
     *    @OA\Response(
     *      response=200,
     *      description="",
     *      @OA\JsonContent(ref="#/components/schemas/BlogSchema")
     *    )
     * )
     */

    /**
     * @OA\Delete(
     *   path="/blog/{id}",
     *   tags={"BlogController"},
     *    @OA\Parameter (
     *     name="id",
     *     description="An uuid string identifying this blog",
     *     in="path",
     *     required= true
     *      ),
     *    @OA\Response(
     *      response=204,
     *      description="",
     *    )
     * )
     */

    public function findAll()
    {
        return response()->json(Blog::all());
    }

    public function find($id)
    {
        return response()->json(Blog::find($id));
    }

    public function create(Request $request)
    {
        $blog = Blog::create($request->all());
        return response()->json($blog, 201);
    }

    public function update($id, Request $request)
    {
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());
        return response()->json($blog, 200);
    }

    public function delete($id)
    {
        Blog::findOrFail($id)->delete();
        return response()->json(null, 204);
    }

}
