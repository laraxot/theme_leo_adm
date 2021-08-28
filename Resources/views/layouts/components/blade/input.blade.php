@php
$name_dot = bracketsToDotted($name);
if (!isset($field->help)) {
    $field->help = trans($view . '.field.' . $name . '_help');
}

$group_class = '';

if (isset($field->params['attributes']['group_class'])) {
    $group_class = $field->params['attributes']['group_class'];
}
@endphp

<div class="col-sm-{{ $field->col_bs_size }}">
    <div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
        {{ $label }}
        <div>{{ $input }}</div>
        @if ($errors->has($name_dot))
            <div class="alert alert-danger">
                {{ $errors->first($name_dot) }}
            </div>
        @endif
        @if ($field->help != '')
            <small class="form-text text-muted">{{ $field->help }}</small>
        @endif
    </div>
</div>
