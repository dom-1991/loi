@props(['disabled' => false])
<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->except('options')->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
    @foreach ($attributes->get('options') as $k => $option)
        <option {{ $attributes->get('select') == $k ? 'selected' : '' }} value="{{ $k }}">
            {{ $option }}
        </option>
    @endforeach
</select>
