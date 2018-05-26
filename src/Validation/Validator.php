<?php
/**
 * Created by PhpStorm.
 * User: ohs70145
 * Date: 2018/05/22
 * Time: 9:04
 */

namespace Acme\Validation;

use Illuminate\Support\Facades\Redirect;
use Respect\Validation\Validator as Respect;

class Validator
{
    public function isValid($validation_data)
    {
        $errors = array();

        foreach ($validation_data as $name => $value) {

            $rules = explode("|", $value);

            // これで一つの入力項目に対して、
            // 複数のvalidationをすることが可能
            // 規則ごとに判定するため
            foreach ($rules as $rule) {
                $exploded = explode(":", $rule);
                switch ($exploded[0]) {
                    case 'min':
                        $min = $exploded[1];
                        if (Respect::length($min)->validate($_REQUEST[$name]) === false) {
                            $errors[] = $name . " must be at least " . $min . " characters long";
                        }
                        break;
                    case 'email':
                        if (Respect::email()->validate($_REQUEST[$name]) === false) {
                            $errors[] = $name . " must be a valid email address!";
                        }
                        break;
                    case 'equalTo':
                        if (Respect::equals($_REQUEST[$name])->validate($exploded[1]) === false) {
                            $errors[] = "Value does not match verification value!";
                        }
                        break;
                    default:
                        $errors[] = "No value found";
                }
            }
        }
        return $errors;
    }
}