@extends('adm_theme::errors.illustrated-layout')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message',  $msg ?? ($message ?? __('Too Many Requests'))
