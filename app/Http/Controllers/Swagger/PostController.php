<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/posts",
 *     summary="Создание поста",
 *     tags={"Post"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="title", type="string",
 *     example="Some title"),
 *                     @OA\Property(property="likes", type="integer",
 *     example=25)
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
            response=200,
 *          description="Ok",
 *
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer",
 *                 example=1),
 *                  @OA\Property(property="title", type="string",
 *     example="Some title"),
 *                  @OA\Property(property="likes", type="integer",
 *     example="25")
 *              ),
 *          ),
 *     ),
 * ),
 *
 * @OA\Get(
 *     path="/api/posts",
 *     summary="Список постов",
 *     tags={"Post"},
 *
 *
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                      @OA\Property(property="id", type="integer",
                      example=1),
                        @OA\Property(property="title", type="string",
          example="Some title"),
                        @OA\Property(property="likes", type="integer",
          example="25")
 *                  ),
 *              ),
 *          ),
 *     ),
 * ),
 *
 * @OA\Get(
 *     path="/api/posts/{post}",
 *     summary="Получение отдельного поста",
 *     tags={"Post"},
 *
 *     @OA\Parameter(
            description="ID поста",
 *          in="path",
 *          name="post",
 *          required=true,
 *          example=2,
 *
 *     ),
 *
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer",
 *                 example=1),
 *                  @OA\Property(property="title", type="string",
 *     example="Some title"),
 *                  @OA\Property(property="likes", type="integer",
 *     example="25")
 *              ),
 *          ),
 *     ),
 * ),
 *
 * @OA\Patch(
 *     path="/api/posts/{post}",
 *     summary="Обновление отдельного поста",
 *     tags={"Post"},
 *
 *     @OA\Parameter(
description="ID поста",
 *          in="path",
 *          name="post",
 *          required=true,
 *          example=2,
 *     ),
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="title", type="string",
 *     example="Some title for edit"),
 *                     @OA\Property(property="likes", type="integer",
 *     example=30)
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer",
 *                 example=1),
 *                  @OA\Property(property="title", type="string",
 *     example="Some title"),
 *                  @OA\Property(property="likes", type="integer",
 *     example="25")
 *              ),
 *          ),
 *     ),
 * ),
 *
 * @OA\Delete(
 *     path="/api/posts/{post}",
 *     summary="Удаление отдельного поста",
 *     tags={"Post"},
 *
 *     @OA\Parameter(
            description="ID поста",
 *          in="path",
 *          name="post",
 *          required=true,
 *          example=2,
 *
 *     ),
 *
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *
 *          @OA\JsonContent(
 *              @OA\Property(property="message", type="string",example="done"),
 *          ),
 *     ),
 * ),
 */
class PostController extends Controller
{


}
