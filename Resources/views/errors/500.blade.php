@extends('adm_theme::errors.illustrated-layout')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', $msg ?? ($message ?? __('Server Error')))
