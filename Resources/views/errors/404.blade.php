@extends('adm_theme::errors.illustrated-layout')

@section('title', __('Not Found'))
@section('code', '404')
@section('message',  $msg ?? ($message ?? __('Not Found'))
