<?php

use App\Models\User;
use Illuminate\Support\Facades\Storage;

if (!function_exists('upload_file')) {
    function upload_file($file, $path, $user_id = null)
    {
        $file_name = Str::random(5) . '-' . time();
        if (request()->isMethod('PATCH')) {
            $avatar = User::find($user_id)->avatar;
            Storage::disk('public')->delete($avatar);
        }
        Storage::disk('public')->putFileAs($path, $file, $file_name);
        return $path . '/' . $file_name;
    }

}

if (!function_exists('upload_document')) {
    function upload_document($file, $path, $document_file = null)
    {

        $file_name = Str::random(5) . '-' . time() . '.' . $file->extension();
        if (request()->isMethod('PATCH')) {
            Storage::disk('public')->delete($document_file);
        }

        Storage::disk('public')->putFileAs($path, $file, $file_name);

        return $path . '/' . $file_name;
    }

}
