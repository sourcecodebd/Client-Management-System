<?php

namespace App\Check;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;


class phonedb implements Rule
{
    /**
     * Create a new Check instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation Check passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //
        if(
            DB::table('admins')
             ->where('phone',$value)
             ->first()
        ) 
        {
            return false;
        }
        elseif(
         DB::table('accountants')
         ->where('phone',$value)
         ->first()
        )
        {
            return false;
        }
        elseif(
         DB::table('sales')
         ->where('phone',$value)
         ->first()
        )
        {
            return false;
        }
        elseif(
         DB::table('customers')
         ->where('phone',$value)
         ->first()
        )
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Phone Number Already Exist!';
    }
}
