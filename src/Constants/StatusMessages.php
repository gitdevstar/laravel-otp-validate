<?php


namespace Ferdous\OtpValidator\Constants;


final class StatusMessages
{
    const SERVICE_UNAVAILABLE = 'OTP Service Unavailable';
    const BAD_REQUEST = 'Bad Request for OTP';
    const INVALID_REQUEST = 'Can not send OTP';
    const RESEND_SERVICE_DISABLED = 'Resend Service is disabled';
    const SUCCESSFULLY_SENT_OTP = 'OTP Sent to the recipient';
    const TOO_MANY_WRONG_RETRY = 'Too Many Wrong Try';
    const INVALID_OTP_GIVEN = 'Invalid Otp';
    const OTP_TIMEOUT = 'OTP Expired/Timeout';
    const RESEND_EXCEEDED = 'OTP Resend Exceeded';
    const VERIFIED_OTP = 'OTP verified';
}
