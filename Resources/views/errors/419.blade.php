@extends('adm_theme::errors.illustrated-layout')

@section('title', __('Page Expired'))
@section('code', '419')
@section('message',  $msg ?? ($message ?? __('Page Expired'))
