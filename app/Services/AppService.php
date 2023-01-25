<?php


namespace App\Services;


class AppService
{

    /**
     * saveFile function
     *
     * save a file and return the path
     * @param String $name
     * @param [type] $file
     * @return string $path
     */
    public static function saveFile(String $name,  $file)
    {
        try {
            $filename = 'cv ' . $name . \random_int(0, 1000000).'.'.$file->extension();
            $path = $file->storeAs(
                'cv',
                $filename,
                'public'
            );
            return $path;
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return false;
        }
    }
}
