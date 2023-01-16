@props(['disabled' => false])
<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
    @foreach ($options as $k => $option)
        <option {{ $select == $k ? 'selected' : '' }} value="{{ $k }}">
            {{ $option }}
        </option>
    @endforeach
</select>
