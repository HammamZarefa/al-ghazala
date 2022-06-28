<?php

namespace App\Traits;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
trait GeneralTrait
{
    public function author($perm,$user){
        $roles=$user->roles()->with('permissions')->get();
        foreach ($roles as $role){
             $permission = $role->permissions->where('slug',$perm)->first();
        }
        if (isset($permission)) {
            return true;
        } else
            return false;
    }
    public function returnData( $compact )
    {
        return response()->json(
            [
                'status' => 'sucssess',
                'stateNum' => '200',
                'error' => null,
                'data' => $compact
            ]
        )->header("Access-Control-Allow-Origin", config('cors.allowed_origins'))
        ->header("Access-Control-Allow-Methods", config('cors.allowed_methods'));
    }
    public function returnError($stateNum, $msg)
    {
        return response()->json([
            'status' => false,
            'stateNum' => $stateNum,
            'msg' => $msg
        ])->header("Access-Control-Allow-Origin", config('cors.allowed_origins'))
        ->header("Access-Control-Allow-Methods", config('cors.allowed_methods'));
    }

    public function returnSuccessMessage($msg, $stateNum )
    {
        return response()->json(
            ['status' => true,
            'stateNum' => $stateNum,
            'msg' => $msg
        ])->header("Access-Control-Allow-Origin", config('cors.allowed_origins'))
        ->header("Access-Control-Allow-Methods", config('cors.allowed_methods'));
    }

    public function dataResponse($data): JsonResponse
    {
        return response()->json(['content' => $data], Response::HTTP_OK);
    }

    public function successResponse(string $message, $code = Response::HTTP_OK)
    {
        return response()->json(['success' => $message, 'code' => $code], $code);
    }

    public function errorResponse($message, $code = Response::HTTP_BAD_REQUEST)
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }
}
