@props(['disabled' => false])

<input id="datepicker" readonly {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
@push('scripts')
    <script>
        $("#datepicker").datepicker({
            dateFormat: 'dd/mm/yy',
        }).datepicker("setDate",new Date());
    </script>
@endpush
