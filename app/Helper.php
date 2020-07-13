<?php
namespace App;
use Illuminate\Support\Facades\Storage;


class Helper {

    public static function image_upload($request) {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time().'.'.$image->getClientOriginalExtension();

            Storage::disk('local')->put('images/'.$fileName, 'public');
            return $fileName;
    }

}

}


?>
