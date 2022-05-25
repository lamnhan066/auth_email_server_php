<?php

$HOST = 'pub.vursin.com';
$USER_NAME = 'authmailtest@pub.vursin.com';
$PASSWORD = 'F#HBUwFwBV5ab2';
$PORT = 587;
$SEND_FROM = $USER_NAME;

$DEFAULT_BODY = 'Please use this OTP to verify your email for the <b>{appName}</b>, do not share this code to anyone: <b>{otp}</b>';
$DEFAULT_OTP_LENGTH = 6;

$ALLOWED_APPS = [
    'Auth Email Test' => [
        'modifiedBody' => false,
        'modifiedOtpLength' => false,
    ],
];

// client: authemailtestkey
$SERVER_SHA256_KEY = '6955c3a2dbfd121697623896b38f5eb759d2cd503476980e14b9beb0cc036c4d';
