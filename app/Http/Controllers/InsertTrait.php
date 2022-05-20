<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\Phone;
use Illuminate\Support\Facades\DB;

trait InsertTrait
{
    protected $phones, $emails;
    
    protected function insertEmails($emails, $id) {
        foreach($emails as $email) {
            $this->emails[] = [
                'email' => $email,
                'contact_id' => $id
            ];
        }
        Email::insert($this->emails);
    }
    
    protected function insertPhones($phones, $id) {
        foreach($phones as $phone) {
            $this->phones[] = [
                'phone' => $phone,
                'contact_id' => $id
            ];
        }
        Phone::insert($this->phones);
    }

    
}
