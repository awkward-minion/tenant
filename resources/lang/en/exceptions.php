<?php

use Lakshmaji\Exceptions\GenericExceptionType;
use App\CustomException;

return [
    GenericExceptionType::$NOT_FOUND['error_code'] => 'Not Found',
    CustomException::$TOO_MANY['error_code'] => 'Too many request',
    CustomException::$PERMISSION_ERROR['error_code'] => 'Permission error',
    GenericExceptionType::$UNAUTHORIZED['error_code'] => 'Unauthorized',
    GenericExceptionType::$GENERAL_ERROR['error_code'] => 'General Error',
    GenericExceptionType::$VALIDATION_ERROR['error_code'] => 'Validation Error',
    GenericExceptionType::$TOKEN_BLACKLISTED['error_code'] => 'Token Blacklisted',
    GenericExceptionType::$INVALID_TOKEN['error_code'] => 'Invalid token supplied',
    GenericExceptionType::$TOKEN_EXPIRED['error_code'] => 'Token Expired',


];
