<?php

namespace App;

use \Validator;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

    protected $fillable = array('title', 'file');
    
    public function get_photo() {
        $msg = "wrong way";
        return $msg;
    }
    
    public function isValid($input) {
        $rules = array(
                'title' => 'required|min:2',
                'file' => 'required|image|max:102400'
        );            
        $validation = Validator::make($input, $rules);
        if ($validation->passes()) {
                return true;
        }
        $this->messages = $validation->messages();
        return false;
    }

}