<?php

namespace App;

enum RoleEnum :string
{
    case Teacher = 'teacher';
    case Admin = 'admin';
    case Student = 'student';
}
