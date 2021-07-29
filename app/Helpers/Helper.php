<?php
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\File\getClientOriginalName;
use App\Models\BloodGroup;
use App\Models\User;

class Helper{
    
    public static function imgProcess($image, $name, $owner, $id, $directory, $method, $model=null)
    {
            
        
            $image_path = public_path().'/'.$directory;
            $pic_owner = $owner?strtolower(str_replace(' ','-', $owner)).'-':'';

            if($method == 'store'){

                if($image->hasFile($name)){

                   
                    $imageArr = [];
                    if(is_array($image->file($name))){

                        foreach ($images = $image->file($name) as $key => $img) {

                           if(!empty($img)){

                            $extension = $img->getClientOriginalExtension();
                            // $fileName = $image->getClientOriginalName();
                            $fileName    = $pic_owner.$key.date('d-m-Y').'-'.time().'.'.$extension;
                            $img->move($image_path, $fileName); 

                           }
  

                            $imageArr[$key][$name] = $fileName; 
                        }  

                        return $imageArr;

                    } else {

                        $image = $image->$name;
                        $extension = $image->getClientOriginalExtension();
                        // $fileName = $image->getClientOriginalName();
                        $fileName    = $pic_owner.date('d-m-Y').'-'.time().'.'.$extension;
                        $image->move($image_path, $fileName);  

                    }

                } else {

                    $fileName = "not found";

                }

                return $fileName;

            } elseif($method == 'update') {

                $getImage = $model::find($id)[$name];

                if($image->hasFile($name)){
                
                    $imageArr = [];
                    if(is_array($image->file($name))){

                        foreach ($images = $image->file($name) as $key => $img) {

                           if(!empty($img)){

                            $extension = $img->getClientOriginalExtension();
                            // $fileName = $image->getClientOriginalName();
                            $fileName    = $pic_owner.$key.date('d-m-Y').'-'.time().'.'.$extension;
                            $img->move($image_path, $fileName); 

                           }

                            $imageArr[$key][$name] = $fileName; 
                        }  

                        return $imageArr;

                    } else {
                        
                        if($getImage){

                            unlink($image_path.'/'.$getImage);
                            
                        } 
       
                       $image       = $image->$name;
                       $extension   = $image->getClientOriginalExtension();
                       // $fileName = $image->getClientOriginalName();
                       $fileName    = $pic_owner.date('d-m-Y').'-'.time().'.'.$extension;
                       $image->move($image_path, $fileName);

                    }
                

                } else {

                   $fileName = $getImage;     

                }

                return $fileName;
            }      
        
    }

    public static function publicUrl($param){
        return url($param);
    }

    //BLOOD GROUP
    public static function bloodGroup($blood_id) {
        $blood_group = BloodGroup::find($blood_id)->blood_group_name;
    }


    //COUNTRY NAME
    public static function countryName($country_id) {
        $blood_group = DB::table('countries')->find($country_id)->name;
    }

    
    //COUNTRY NAME
    public static function languageName($default_language_id) {
        $blood_group = DB::table('languages')->find($default_language_id)->name;
    }


    //USER IMAGE
    public static function userImage($user_id) {
        $image = User::find($user_id)->image;

        return $image;
    }

}