@extends('adm_theme::errors.illustrated-layout')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message',  $msg ?? ($message ?? __('Service Unavailable'))
