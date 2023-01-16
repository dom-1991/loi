@props(['disabled' => false])

<input id="from-datepicker" readonly {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
@push('scripts')
    <script>
        $("#from-datepicker").datepicker({
            dateFormat: 'dd/mm/yy',
        }).datepicker("setDate", "{{ $attributes->get('value') }}");
    </script>
@endpush
