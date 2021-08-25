@extends('adm_theme::errors.illustrated-layout')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message',  $msg ?? ($message ?? __('Unauthorized'))
