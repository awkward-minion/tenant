<?php

namespace App;

use Lakshmaji\Exceptions\GenericExceptionType;

/**
 * -----------------------------------------------------------------------------
 *   CustomException for defining exception codes
 * -----------------------------------------------------------------------------
 * Class having methods to define error codes related to DB exceptions.
 *
 * @since    1.0.0
 * @version  1.0.0
 * @author   Ananth <lakshmajee88@gmail.com>
 */
class CustomException extends GenericExceptionType
{
    public static $TOO_MANY = ['error_code' => 13000, 'code' => 400];
    public static $PERMISSION_ERROR = ['error_code' => 33000, 'code' => 400];
    // General Errors
    public static $DUPLICATE_ORGANIZATION = ['error_code' => 12000, 'code' => 400];
    public static $SET_PASSWORD = ['error_code' => 12001, 'code' => 400];
    public static $INVALID_PASSWORD = ['error_code' => 12002, 'code' => 400];
    public static $USER_NOT_EXISTS = ['error_code' => 12003, 'code' => 400];
    public static $INPUT_NOT_PROVIDED = ['error_code' => 12004, 'code' => 400];

    // Branch
    public static $BRANCH_CREATE = ['error_code' => 12010, 'code' => 400];
    public static $BRANCH_NOT_EXISTS = ['error_code' => 12011, 'code' => 400];
    public static $BRANCH_UPDATE = ['error_code' => 12012, 'code' => 400];
    public static $BRANCH_DELETE = ['error_code' => 12013, 'code' => 400];

    // Qualification
    public static $QUALIFICATION_CREATE = ['error_code' => 12020, 'code' => 400];
    public static $QUALIFICATION_NOT_EXISTS = ['error_code' => 12021, 'code' => 400];
    public static $QUALIFICATION_UPDATE = ['error_code' => 12022, 'code' => 400];
    public static $QUALIFICATION_DELETE = ['error_code' => 12023, 'code' => 400];
    public static $QUALIFICATION_DUPLICATE = ['error_code' => 12024, 'code' => 400];

    // Specialization
    public static $SPECIALIZATION_CREATE = ['error_code' => 12030, 'code' => 400];
    public static $SPECIALIZATION_NOT_EXISTS = ['error_code' => 12031, 'code' => 400];
    public static $SPECIALIZATION_UPDATE = ['error_code' => 12032, 'code' => 400];
    public static $SPECIALIZATION_DELETE = ['error_code' => 12033, 'code' => 400];
    public static $SPECIALIZATION_DUPLICATE = ['error_code' => 12034, 'code' => 400];

    // Academic Year
    public static $ACADEMIC_YEAR_CREATE = ['error_code' => 12040, 'code' => 400];
    public static $ACADEMIC_YEAR_NOT_EXISTS = ['error_code' => 12041, 'code' => 400];
    public static $ACADEMIC_YEAR_UPDATE = ['error_code' => 12042, 'code' => 400];
    public static $ACADEMIC_YEAR_DELETE = ['error_code' => 12043, 'code' => 400];
    public static $ACADEMIC_YEAR_DUPLICATE = ['error_code' => 12044, 'code' => 400];
    public static $ACADEMIC_YEAR_DIFF = ['error_code' => 12045, 'code' => 400];

    // Section
    public static $SECTION_CREATE = ['error_code' => 12050, 'code' => 400];
    public static $SECTION_NOT_EXISTS = ['error_code' => 12051, 'code' => 400];
    public static $SECTION_UPDATE = ['error_code' => 12052, 'code' => 400];
    public static $SECTION_DELETE = ['error_code' => 12053, 'code' => 400];
    public static $SECTION_DUPLICATE = ['error_code' => 12054, 'code' => 400];

    // Employee
    public static $EMPLOYEE_CREATE = ['error_code' => 12060, 'code' => 400];
    public static $EMPLOYEE_NOT_EXISTS = ['error_code' => 12061, 'code' => 400];
    public static $EMPLOYEE_UPDATE = ['error_code' => 12062, 'code' => 400];
    public static $EMPLOYEE_DELETE = ['error_code' => 12063, 'code' => 400];

    // Student
    public static $STUDENT_CREATE = ['error_code' => 12070, 'code' => 400];
    public static $STUDENT_NOT_EXISTS = ['error_code' => 12071, 'code' => 400];
    public static $STUDENT_UPDATE = ['error_code' => 12072, 'code' => 400];
    public static $STUDENT_DELETE = ['error_code' => 12073, 'code' => 400];

    // Attendance
    public static $ATTENDANCE_CREATE = ['error_code' => 12080, 'code' => 400];
    public static $ATTENDANCE_UPDATE = ['error_code' => 12081, 'code' => 400];

    public static $CONDITION_CREATE = ['error_code' => 12020, 'code' => 400];
}
// end of class CustomException
// end of file CustomException.php
