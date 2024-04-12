<?php
class User
{
    public $id;
    public $name;
    public $email;
    public $email_verified_at;
    public $password;
    public $remember_token;
    public $created_at;
    public $updated_at;

    public function __construct($id, $name, $email, $email_verified_at, $password, $remember_token, $created_at, $updated_at)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->email_verified_at = $email_verified_at;
        $this->password = $password;
        $this->remember_token = $remember_token;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}
?>
